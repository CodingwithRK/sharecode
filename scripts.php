<!-- Bootstrap JS -->
<script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
<!--plugins-->
<script src="{{ asset('admin/plugins/notifications/js/lobibox.min.js') }}"></script>
<script src="{{ asset('admin/plugins/notifications/js/notifications.min.js') }}"></script>
<script src="{{ asset('admin/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
{{--<script src="{{ asset('admin/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>--}}

{{--<script src="{{ asset('admin/js/index.js') }}"></script>--}}
<!--app JS-->
@include('toast')
@if(Route::is('login'))
<!--Password show & hide js -->
<script>
    $(document).ready(function () {
        $("#show_hide_password a").on('click', function (event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("bx-hide");
                $('#show_hide_password i').removeClass("bx-show");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("bx-hide");
                $('#show_hide_password i').addClass("bx-show");
            }
        });
    });
</script>
@endif
<!--app JS-->
<script src="{{ asset('admin/js/app.js') }}"></script>
@yield('js')
@livewireScripts
