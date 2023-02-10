

</div>
</div>
<!-- END wrapper -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="{{asset('theme/assets/js/vendor.min.js')}}"></script>

<script src="{{asset('theme/assets/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('theme/assets/select2/dist/js/select2.min.js')}}"></script>

<!-- knob plugin -->
<script src="{{asset('theme/assets/libs/jquery-knob/jquery.knob.min.js')}}"></script>

<!-- App js -->
<script src="{{asset('theme/assets/js/app.min.js')}}"></script>

@yield('scripts')
<script>
    $(document).ready(function () {
        $('#datepicker').datepicker({
            format: "dd/mm/yyyy",
            autoclose: true
        });
    });
</script>

</body>

</html>