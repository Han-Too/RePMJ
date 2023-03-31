<?php

namespace App\Http\Controllers;

use PDF;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('landingpage.userprofile', compact('user'));
    }

    public function edit(){
        $user = Auth::user();
        return view('landingpage.edituserprofile', compact('user'));
    }

    public function store(Request $request){
        $info = $request->all();
        $id = $request->id;
        $nama = $request->nama;
        $alamat = $request->alamat;
        $telepon = $request->telepon;
        $email = $request->email;

        $change = User::where("id", $id)->update([
            "id" => $id,
            "name" => $nama,
            "email" => $email,
            "telepon" => $telepon,
        ]);

        $user = Auth::user();

        Alert::success('Berhasil Edit Data','Data User Telah Di Edit');
        return view('landingpage.userprofile', compact('user'));
    }

    public function adminindex(){
        $user = User::orderBy('name', 'asc')->get();
        return view('adminpage.userpages.daftaruser',compact('user'));
    }

    public function adminedit($id){
        $user = User::find($id);
        return view('adminpage.userpages.edituser',compact('user'));
    }

    public function adminupdate(Request $request){
        $id = $request->id;
        $updateuser = User::where("id", $id)->update([
            "name" => $request["nama"],
            "email" => $request["email"],
            "telepon" => $request["telepon"],
            "alamat" => $request["alamat"],
        ]);
        // Alert::success('Success', 'Data User has been Updated !');
        toast('Data Berhasil Dirubah','success')->autoClose(1500);
        return redirect('/admin/user');
    }

    public function admindestroy($id){
        User::where('id', $id)->delete();
        return redirect()->back();
    }

    public function admincreate(){
        return view('adminpage.userpages.adduser');
    }

    public function adminstore(Request $request){

        $nama = $request->nama;
        $email = $request->email;
        $alamat = $request->alamat;
        $telepon = $request->telepon;
        $password = $request->password;
        $konfirmasipassword = $request->password_confirmation;

        // dd($request->all());

        if($password === $konfirmasipassword){
            $signup = User::create([
                'name' => $nama,
                'email' => $email,
                'telepon' => $telepon,
                'alamat' => $alamat,
                'password' => Hash::make($password),
                'role' => "user"
            ]);
            toast('Berhasil Dibuat','success')->autoClose(1500);
        // Alert::success('Success', 'Data User has been Created !');
        return redirect('/admin/user');
        }
        else {
            // Alert::error('Error', 'Data Invalid !');
            toast('Data Invalid','error');
            return redirect()->back();
        }
    }

    public function cetak_pdf()
    {
        $user = User::all();

        $pdf = PDF::loadview('adminpage.userpages.karyawan_pdf', ['karyawan' => $user]);
        // return $pdf->download('laporan-karyawan-pdf');
        return $pdf->stream();
    }
}
