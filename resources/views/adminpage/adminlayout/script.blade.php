<script>
	var defaultThemeMode = "light"; var themeMode; if (document.documentElement) { if (document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if (localStorage.getItem("data-theme") !== null) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }
</script>
<!--begin::Javascript-->
<script>var hostUrl = "adminpanel/";</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{ asset('adminpanel/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('adminpanel/js/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used by this page)-->
<script src="{{ asset('adminpanel/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
<script src="{{ asset('adminpanel/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used by this page)-->
<script src="{{ asset('adminpanel/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('adminpanel/js/custom/widgets.js') }}"></script>
<script src="{{ asset('adminpanel/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('adminpanel/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
<script src="{{ asset('adminpanel/js/custom/utilities/modals/create-app.js') }}"></script>
<script src="{{ asset('adminpanel/js/custom/utilities/modals/new-target.js') }}"></script>
<script src="{{ asset('adminpanel/js/custom/utilities/modals/users-search.js') }}"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->