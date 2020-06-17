<!-- Argon Scripts -->
<!-- Core -->
<script src="{{asset('vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/js-cookie/js.cookie.js')}}"></script>
<script src="{{asset('vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
<script src="{{asset('vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>

<!-- Optional JS -->
<script src="{{asset('vendor/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('vendor/chart.js/dist/Chart.extension.js')}}"></script>

<!-- Argon JS -->
<script src="{{asset('js/dashboard.js?v=1.2.0')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    @if(Session::has('success'))
    toastr.success("{{Session::get('success')}}", "Success");
    @endif
</script>


<script>
    @if(Session::has('error'))
    toastr.error("{{Session::get('error')}}", "Error");
    @endif
</script>
@stack('footer-scripts')
