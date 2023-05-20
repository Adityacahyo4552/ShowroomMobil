@extends('layouts.template')
@section('content')

    @push('css')
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('template/images/favicon.png')}}">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{asset('template/vendor/chartist/css/chartist.min.css')}}">
	<!-- Style css -->
    <link href="{{ asset('template/css/style.css')}}" rel="stylesheet">

    <link href="{{ asset('template/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
	<link href="{{  asset('template/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    @endpush
<body>
    <div class="content-body">
        <div class="container-fluid" style="position:absolute; margin-left:-0px;">
            <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6" style="margin-left: 3rem;">
                <div class="widget-stat card bg-info">
                    <div class="card-body p-4">
                        <div class="media">
                            <span class="me-3">
                                <i class="flaticon-381-heart"></i>
                            </span>
                            <div class="media-body text-white text-end">
                                <p class="mb-1">Total Penjualan</p>
                                <h3 class="text-white">783K</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6" style="margin-left: 28rem; margin-top:-143px;">
                <div class="widget-stat card bg-success">
                    <div class="card-body p-4">
                        <div class="media">
                            <span class="me-3">
                                <i class="flaticon-381-diamond"></i>
                            </span>
                            <div class="media-body text-white text-end">
                                <p class="mb-1">Total Karyawan</p>
                                <h3 class="text-white">$56K</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6" style="margin-left: 53rem; margin-top:-142px;">
                <div class="widget-stat card bg-danger">
                    <div class="card-body  p-4">
                        <div class="media">
                            <span class="me-3">
                                <i class="flaticon-381-calendar-1"></i>
                            </span>
                            <div class="media-body text-white text-end">
                                <p class="mb-1">Total Mobil</p>
                                <h3 class="text-white">76</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!--image slider end-->


</body>
    <!--**********************************
        Scripts
    ***********************************-->

    @push('scripts')
    <!-- Required vendors -->
    <script src="{{ asset('template/vendor/global/global.min.js')}} "></script>
	<script src="{{ asset('template/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}} "></script>
    <script src="{{ asset('template/js/custom.min.js')}} "></script>
	<script src="{{ asset('template/js/dlabnav-init.js')}} "></script>
	<script src="{{ asset('template/js/demo.js')}} "></script>
    <script src="{{ asset('template/js/styleSwitcher.js')}} "></script>
    <!-- Chartist -->
    <script src="vendor/chartist/js/chartist.min.js"></script>
    <script src="vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>

    <script type="text/javascript">
        var counter = 1;
        setInterval(function(){
          document.getElementById('radio' + counter).checked = true;
          counter++;
          if(counter > 4){
            counter = 1;
          }
        }, 5000);
        </script>
          <script>
            @if (Session::has('alert'))
                toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": true,
                "progressBar": false,
                "positionClass": "toast-bottom-left",
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
                }
                toastr.info("{{ Session::get('alert') }} {{ Auth::user()->name }}");
            @endif
        </script>
    @endpush
@endsection
