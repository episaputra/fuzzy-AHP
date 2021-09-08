@extends('layout.main')
@section('kriteria')
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
                        <li class="breadcrumb-item active">Kriteria</li>
                    </ol>
                </div>
                <h4 class="page-title">Alternatif</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="header-title">Alternatif</h4>


                <table  class="table table-bordered dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Alternatif</th>
                            <th>Matrix perbandingan</th>
                            <th>Pehitungan</th>
                        </tr>
                    </thead>


                    <tbody>
                        @php $no=1; 
                        
                        @endphp
                        @foreach ($alternatif as $item)


                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$item->alJenis }} </td>

                            <td>
                                        <?php 
                                             $bobot = json_decode($item->alBobot);
                                            ?>
                                 <!-- sample modal content -->
                                  <button type="button" class="btn btn-primary waves-effect waves-light"
                                    data-toggle="modal" data-target="#myModal{{$item->id}}">Detail</button>
                                    <div id="myModal{{$item->id}}" class="modal fade  bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                           
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myExtraLargeModalLabel">Matrix perbandingan </h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        @for($i=0; $i<count($bobot) ; $i++) 
                                                    <div class="modal-body">
                                                            Responden {{$i+1}} 

                                                       <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th>{{ $item->alJenis}}</th>
                                <th>S.Note 10</th>
                                <th>Iphone XS</th>
                                <th>O. F11</th>
                                <th>O. Reno</th>
                                <th>Hua P30</th>
                                <th>V. Z1 Pro</th>
                                <th>V.  S1</th>
                                <th>Redmi N7</th>
                            </tr>
                        </thead>
                        <tbody>

                            @for ($j=0 ;$j<count($bobot[$i]); $j++) <tr>
                                <td>
                                    @if($j==0) S.Note 10
                                    @elseif($j==1) Iphone XS
                                    @elseif($j==2) O. F11
                                    @elseif($j==3) O. Reno
                                    @elseif($j==4)  Hua P30
                                    @elseif($j==5)V. Z1 Pro
                                    @elseif($j==6) V.  S1
                                    @elseif($j==7)Redmi N7
                                    @endif
                                </td>
                                @for ($k=0 ; $k<count($bobot[$i][$j]); $k++) <td> {{ $bobot[$i][$j][$k]}}</td>



                                    @endfor
                                    </tr>
                                    @endfor
                        </tbody>

                    </table>
                </div>
                                                    </div>
                                                    @endfor
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                                                        
                                                    </div>
                                                </div><!-- /.modal-content -->
                                               
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                  

                            </td>
                            <td>
                                <a href="/alternatif/perhitungan/detail/{{ $item->id }}"
                                    class="btn btn-icon btn-primary waves-effect waves-light"> detail </a>
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
