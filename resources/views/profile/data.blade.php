@extends('layout.main')
@section('beranda')
active
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
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
                <h4 class="page-title">Profile</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="header-title">Profile</h4>


                <table id="datatable" class="table table-bordered dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Pekerjaan</th>
                            <th>Perhitungan</th>
                        </tr>
                    </thead>


                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($profile as $item)


                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$item->nama}} </td>
                            <td>{{$item->pekerjaan}} </td>
                            <td>
                                <a href="/profile/data/detail/{{ $item->id }}"
                                    class="btn btn-icon btn-primary waves-effect waves-light"> detail </a>
                                    <form method="POST" action="/profile/delete/{{ $item->id }}">
                                        {{csrf_field()}} {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-icon btn-danger waves-effect waves-light"> delete <i
                                                class="mdi mdi-close"></i> </button>
                                    </form>
                            </td>
                        </tr>
                        @php $no++ @endphp
                        @endforeach
                    </tbody>

                </table>
            </div> <!-- end card-box -->
        </div> <!-- end col -->
    </div> <!-- end row -->



</div> <!-- container -->

@endsection
