<x-admin-layout>
    @section('css')
        <!--begin::Vendor Stylesheets(used for this page only)-->
        <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Vendor Stylesheets-->
    @endsection

    @section('scripts')
<!--begin::Vendors Javascript(used for this page only)-->
<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<script src="../../../cdn.amcharts.com/lib/5/index.js"></script>
<script src="../../../cdn.amcharts.com/lib/5/xy.js"></script>
<script src="../../../cdn.amcharts.com/lib/5/percent.js"></script>
<script src="../../../cdn.amcharts.com/lib/5/radar.js"></script>
<script src="../../../cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="../../../cdn.amcharts.com/lib/5/map.js"></script>
<script src="../../../cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="../../../cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="../../../cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="../../../cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="../../../cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="assets/js/custom/utilities/modals/create-campaign.js"></script>
<script src="assets/js/custom/utilities/modals/users-search.js"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->
    @endsection

</x-admin-layout>
