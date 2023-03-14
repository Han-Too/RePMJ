@extends('adminpage.index')
@extends('adminpage.adminlayout.headhtml')

@section('headjudul', 'Gaji Karyawan')

@section('content')

    <!--begin::Content wrapper-->
    <div id="kt_app_content" class="content d-flex flex-column flex-column-fluid">
        <!--begin::Content container-->

        <div id="kt_app_content_container" class="container-fluid">
            <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-bold mb-10">

            </ol>
            <!--begin::Row-->
            <div class="row gy-0 gx-10">
                <!--begin::Col-->
                <div class="col-xl-12">
                    <!--begin::Tables widget 14-->
                    <div class="card shadow-lg">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Gaji Karyawan</span>
                                <span class="text-muted mt-1 fw-semibold fs-7">Tambah atau Edit Nota Pekerjaan</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            {{-- <div class="card-toolbar">
                                <!--begin::Menu-->
                                <a href="/admin/menaraair/create"
                                    class="btn btn-icon btn-success btn-active-color-primary justify-content-center">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path fill="#FFF"
                                                d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--end::Menu-->
                            </div> --}}
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">

                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-bordered table-row-gray-800 align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead class="fw-bold bg-success">
                                        <tr style="line-height: 40px">
                                            <th class="p-0 min-w-150px text-center">Nama Karyawan</th>
                                            <th class="p-0 min-w-100px text-center">Status</th>
                                            <th class="p-0 text-center">Tools</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        @foreach ($karyawan as $key => $karyawan)
                                            <tr>
                                                <td class="text-center">
                                                    <span class="text-dark fw-bold  d-block mb-1 fs-6">
                                                        {{ $karyawan->nama }}
                                                    </span>
                                                </td>
                                                <td class="text-center">
                                                    <span class="text-dark fw-bold  d-block mb-1 fs-6">
                                                        {{ $karyawan->status }}
                                                    </span>
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex flex-row justify-content-center">
                                                        <div class="p-2">
                                                            <a href="#"
                                                            class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#kt_modal_share_earn">Edit</a></div>
                                                    </div>
                                                    
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="kt_modal_share_earn" tabindex="-1" aria-hidden="true">
                                                <!--begin::Modal dialog-->
                                                <div class="modal-dialog modal-dialog-centered mw-800px">
                                                    <!--begin::Modal content-->
                                                    <div class="modal-content">
                                                        <!--begin::Modal header-->
                                                        <div class="modal-header pb-0 border-0 justify-content-end">
                                                            <!--begin::Close-->
                                                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                                <span class="svg-icon svg-icon-1">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                                                            rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                                            transform="rotate(45 7.41422 6)" fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>
                                                        <!--begin::Modal header-->
                                                        <!--begin::Modal body-->
                                                        <div class="modal-body scroll-y pt-0 pb-15">
                                                            <!--begin::Wrapper-->
                                                            <div class="mw-lg-600px mx-auto">
                                                                <!--begin::Heading-->
                                                                <div class="mb-13 text-center">
                                                                    <!--begin::Title-->
                                                                    <h1 class="mb-3">Masukan Jumlah Pekerjaan</h1>
                                                                    <!--end::Title-->
                                                                </div>
                                                                <!--end::Heading-->
                                                                <!--begin::Input group-->
                                                                <form action="/gaji/{{ $karyawan->id }}/edit" method="post">
                                                                    @csrf
                                                                    @method('POST')
                                                                <div class="mb-10">
                                                                    <!--begin::Title-->
                                                                    <div class="d-flex">
                                                                        <input id="kt_share_earn_link_input" type="text"
                                                                            class="form-control form-control-solid me-3 flex-grow-1" name="kolom"
                                                                            placeholder="Masukan Jumlah Kolom" required />
                                                                    </div>
                                                                    <div class="d-grid gap-2 mt-10">
                                                                        <button type="submit" class="btn btn-success" type="button">Lanjutkan</button>
                                                                    </div>
                                                                    <!--end::Title-->
                                                                </div>
                                                                </form>
                                                                <!--end::Input group-->
                                                            </div>
                                                            <!--end::Wrapper-->
                                                        </div>
                                                        <!--end::Modal body-->
                                                    </div>
                                                    <!--end::Modal content-->
                                                </div>
                                                <!--end::Modal dialog-->
                                            </div>
                                        @endforeach

                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->

                            <div id="kt_scrolltop" class="scrolltop mb-10" data-kt-scrolltop="true">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                <span class="svg-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="13" y="6" width="13" height="2"
                                            rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                        <path
                                            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end: Card Body-->
                        <div class="card-footer border-top p-9">

                        </div>
                    </div>

                </div>
                <!--end::Tables widget 14-->
            </div>
            <!--end::Col-->

        </div>

        <!--end::Row-->

    </div>
    <!--end::Content wrapper-->
    
@endsection
