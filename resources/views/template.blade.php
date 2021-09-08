@extends('layout.main')

@section('konten')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">BPNN</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="header-title">Data sample</h4>
                
                <a href="/datasamples/tambah" class="btn btn-primary waves-effect waves-light width-md">tambah</a>
           
                <table id="datatable" class="table table-bordered dt-responsive nowrap">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Target</th>
                        <th>Perubahan gairah seksual</th>
                        <th>Badan teras sangat panas </th>
                        <th>Keringat di malam hari </th>
                        <th>Kekeringan vagina</th>
                        <th>Susah tidur</th>
                        <th>Mudah capek</th>
                        <th>Menurunya daya ingat</th>
                        <th>sakit pada persendian</th>
                        <th>Mudah marah</th>
                        <th>Nyeri kepala</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>


                    <tbody>
                       
                    </tbody>
                   
                </table>
            </div> <!-- end card-box -->
        </div> <!-- end col -->
    </div> <!-- end row -->

    <!-- end row -->



</div> <!-- container -->

@endsection
