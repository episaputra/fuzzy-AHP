@extends('layout.main')
@section('beranda')
    class="active"
@endsection
@section('konten')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Fuzzy AHP</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <!--Pricing Column-->
        <div class="col-lg-4">
           
        </div>
        <div class="col-lg-4">
            <div class="pricing-box card-box ribbon-box px-0">
                <div class="inner-box">
                    <div class="ribbon-two ribbon-two-primary price-ribbon"><span class="text-uppercase">About me</span>
                    </div>
                    <div class="plan-header text-center mb-2">
                        <div class="plan-title bg-success py-2">

                            <h4 class="text-uppercase text-white font-16 my-1">Dwi utari Iswavigra
                            </h4>
                        </div>
                        <br>
                        <img class="mr-3 rounded-circle bx-shadow-lg" src="assets/images/users/avatar-4.jpg"
                            alt="Generic placeholder image" height="80">

                        <h2 class="plan-price mt-4 mb-3">115512xxxxx</h2>
                        <div class="plan-duration"> </div>
                    </div>
                    <div class="plan-stats text-center p-4">
                        <p>Multiple Perspektif Dalam Identifikasi Profile User Dan Smartphone Dengan Metode Fuzzy Analytical Hierarchy Process ( F-AHP )
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
           
        </div>
    </div>

    <!-- end row -->



</div> <!-- container -->

@endsection
