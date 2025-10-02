<!-- Must needed plugins to the run this Template -->
<script src="/admin/js/jquery.min.js"></script>
<script src="/admin/js/popper.min.js"></script>
<script src="/admin/js/bootstrap.min.js"></script>
<script src="/admin/js/bundle.js"></script>
<script src="/admin/js/default-assets/date-time.js"></script>
<script src="/admin/js/default-assets/setting.js"></script>
<script src="/admin/js/default-assets/fullscreen.js"></script>
<script src="/admin/js/default-assets/bootstrap-growl.js"></script>

<!-- Active JS -->
<script src="/admin/js/default-assets/active.js"></script>

<!-- These plugins only need for the run this page -->
<script src="/admin/js/default-assets/peity.min.js"></script>
<script src="/admin/js/default-assets/peity-demo.js"></script>
<script src="/admin/js/default-assets/gauge.js"></script>
<script src="/admin/js/default-assets/serial.js"></script>
<script src="/admin/js/default-assets/light.js"></script>
<script src="/admin/js/default-assets/ammap.min.js"></script>
<script src="/admin/js/default-assets/worldlow.js"></script>
<script src="/admin/js/default-assets/radar.js"></script>
<script src="/admin/js/default-assets/dashboard-2.js"></script>

<script src="{{asset('admin/src/plugins/src/sweetalerts2/sweetalerts2.min.js')}}"></script>
<script src="{{asset('admin/src/plugins/src/sweetalerts2/custom-sweetalert.js')}}"></script>
<script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>

@stack('scripts')

<script>
    document.addEventListener('success', function (event) {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: event.detail,
            showConfirmButton: false,
            timer: 1500
        })
    })

    document.addEventListener('error', function (event) {
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: event.detail,
            showConfirmButton: false,
            timer: 3000
        })
    })
</script>
