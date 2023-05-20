@extends('includes.headerd')
@section('title', 'Detail')
<!--======== CSS ========-->
@push('css')

@endpush

<!--==================== HEADER ====================-->
    @section('headerd')
<!--==================== END HEADER ====================-->

<!--==================== MAIN ====================-->
    <div class="content-wrapper">
        <div class="box">
            <div style="text-align: center;" class="card-body">
                <h4>Form Detail</h4>
            </div>
        </div>
        <div class="wrapper">
            <div class="carousel owl-carousel">
            <div class="card">
                <img src="../img/slide/m2.jpg" style="width:100%">
            </div>
            <div class="card">
                <img src="../img/slide/m3.jpg" style="width:100%">
            </div>
            <div class="card">
                <img src="../img/slide/m4.jpg" style="width:100%">
            </div>
            <div class="card">
                <img src="../img/slide/m5.jpg" style="width:100%">
            </div>
            <div class="card">
                <img src="../img/slide/m6.jpg" style="width:100%">
            </div>
            </div>
        </div>
        <div class="title">
            <h1>TOYOTA VELOZ</h1>
            <h2>Rp. 1.000.000</h2>
            <i>/hari</i>
        </div>
        <div class="car">
            <i class="fa fa-calendar" style="font-size: 35px;"></i>
            <h5>2022</h5>
            <a>Tahun Registrasi</a>
        </div>
        <div class="car" style="margin-left: 250px; margin-top:-11%;">
            <i class="fa fa-gas-pump" style="font-size: 35px;"></i>
            <h5>Bensin</h5>
            <a>Tipe Bahan Bakar</a>
        </div>
        <div class="car" style="margin-left: 400px; margin-top:-11%;">
            <i class="fa fa-cogs" style="font-size: 35px;"></i>
            <h5>Manual</h5>
            <a>Mesin</a>
        </div>
        <div class="share_vehicle" style="font-size: 20px;">
            <p>Share:</p>
            <a href="https://www.facebook.com"><i class="ri-facebook-fill" style="font-size: 35px; color:white;"></i></a>
            <a href="https://www.instagram.com"><i class="ri-instagram-line" style="font-size: 35px; color:white;"></i></a>
            <a href="https://www.twitter.com"><i class="ri-twitter-line" style="font-size: 35px; color:white;"></i></a>
        </div>
    </div>
<!--=============== JAVA SCRIPT ===============-->
@push('scripts')

@endpush
@endsection
