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
                <h4 class="page-title">Kriteria</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="header-title">Kriteria</h4>


                <table  class="table table-bordered dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kriteria</th>
                            <th>Matrix perbandingan</th>
                            <th>Pehitungan</th>
                        </tr>
                    </thead>


                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($kriteria as $item)


                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$item->kriJenis}} </td>

                            <td>
                                        <?php 
                                             $bobot = json_decode($item->bobot);
                                            ?>
                                 <!-- sample modal content -->
                                  <button type="button" class="btn btn-primary waves-effect waves-light"
                                    data-toggle="modal" data-target="#myModal{{$item->kriId}}">Detail</button>
                                    <div id="myModal{{$item->kriId}}" class="modal fade  bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myExtraLargeModalLabel">Matrix perbandingan {{$item->kriJenis}} </h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                    <div class="modal-body">
                                                        @for($i=0; $i<count($bobot) ; $i++) 

            <div class="card-box ">
                <h4 class="header-title">Responden {{$i+1  }}</h4>
                <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Kriteria</th>
                            <th>RAM</th>
                            <th>ROM</th>
                            <th>Kamara</th>
                            <th>Prosesor</th>
                            <th>Layar</th>
                            <th>Batrai</th>
                        </tr>
                    </thead>
                    <tbody>

                        @for ($j=0 ;$j<count($bobot[$i]); $j++) <tr>
                            <td>
                                @if($j==0) RAM
                                @elseif($j==1) ROM
                                @elseif($j==2) Kamara
                                @elseif($j==3) Prosesor
                                @elseif($j==4) Layar
                                @elseif($j==5)Batrai
                                @endif
                            </td>
                            @for ($k=0 ; $k<count($bobot[$i][$j]); $k++)
                             <td> {{ $bobot[$i][$j][$k]}}</td>

                                <?php
                                    if($bobot[$i][$j][$k]==1){
                                        $matrixFuzzy[$i][$j][$k][0]=1;
                                        $matrixFuzzy[$i][$j][$k][1]=1;
                                        $matrixFuzzy[$i][$j][$k][2]=1;
                                    }
                                    else if($bobot[$i][$j][$k]==2){
                                        $matrixFuzzy[$i][$j][$k][0]=1/2;
                                        $matrixFuzzy[$i][$j][$k][1]=1;
                                        $matrixFuzzy[$i][$j][$k][2]=3/2;
                                    }
                                    else if($bobot[$i][$j][$k]==3){
                                        $matrixFuzzy[$i][$j][$k][0]=1;
                                        $matrixFuzzy[$i][$j][$k][1]=3/2;
                                        $matrixFuzzy[$i][$j][$k][2]=2;
                                    }
                                    else if($bobot[$i][$j][$k]==4){
                                        $matrixFuzzy[$i][$j][$k][0]=3/2;
                                        $matrixFuzzy[$i][$j][$k][1]=2;
                                        $matrixFuzzy[$i][$j][$k][2]=5/2;
                                    }
                                    else if($bobot[$i][$j][$k]==5){
                                        $matrixFuzzy[$i][$j][$k][0]=2;
                                        $matrixFuzzy[$i][$j][$k][1]=5/2;
                                        $matrixFuzzy[$i][$j][$k][2]=3;
                                    }
                                    else if($bobot[$i][$j][$k]==6){
                                        $matrixFuzzy[$i][$j][$k][0]=5/2;
                                        $matrixFuzzy[$i][$j][$k][1]=3;
                                        $matrixFuzzy[$i][$j][$k][2]=7/2;
                                    } 
                                    else if($bobot[$i][$j][$k]==7){
                                        $matrixFuzzy[$i][$j][$k][0]=3;
                                        $matrixFuzzy[$i][$j][$k][1]=7/2;
                                        $matrixFuzzy[$i][$j][$k][2]=4;
                                    }
                                    else if($bobot[$i][$j][$k]==8){
                                        $matrixFuzzy[$i][$j][$k][0]=7/2;
                                        $matrixFuzzy[$i][$j][$k][1]=4;
                                        $matrixFuzzy[$i][$j][$k][2]=9/2;
                                    }
                                    else if($bobot[$i][$j][$k]==9){
                                        $matrixFuzzy[$i][$j][$k][0]=4;
                                        $matrixFuzzy[$i][$j][$k][1]=9/2;
                                        $matrixFuzzy[$i][$j][$k][2]=9/2;
                                    }
                                    else if($bobot[$i][$j][$k]==0.5){
                                        $matrixFuzzy[$i][$j][$k][0]=2/3;
                                        $matrixFuzzy[$i][$j][$k][1]=1;
                                        $matrixFuzzy[$i][$j][$k][2]=2;
                                    }
                                    else if($bobot[$i][$j][$k]==0.33){
                                        $matrixFuzzy[$i][$j][$k][0]=1/2;
                                        $matrixFuzzy[$i][$j][$k][1]=2/3;
                                        $matrixFuzzy[$i][$j][$k][2]=1;
                                    }
                                    else if($bobot[$i][$j][$k]==0.25){
                                        $matrixFuzzy[$i][$j][$k][0]=2/5;
                                        $matrixFuzzy[$i][$j][$k][1]=1/2;
                                        $matrixFuzzy[$i][$j][$k][2]=2/3;
                                    }
                                    else if($bobot[$i][$j][$k]==0.2){
                                        $matrixFuzzy[$i][$j][$k][0]=1/3;
                                        $matrixFuzzy[$i][$j][$k][1]=2/5;
                                        $matrixFuzzy[$i][$j][$k][2]=1/2;
                                    }
                                    else if($bobot[$i][$j][$k]==0.17){
                                        $matrixFuzzy[$i][$j][$k][0]=2/7;
                                        $matrixFuzzy[$i][$j][$k][1]=1/3;
                                        $matrixFuzzy[$i][$j][$k][2]=2/5;
                                    }
                                    
                                    else if($bobot[$i][$j][$k]==0.14){
                                        $matrixFuzzy[$i][$j][$k][0]=1/4;
                                        $matrixFuzzy[$i][$j][$k][1]=2/7;
                                        $matrixFuzzy[$i][$j][$k][2]=1/3;
                                    }
                                    else if($bobot[$i][$j][$k]==0.13){
                                        $matrixFuzzy[$i][$j][$k][0]=2/9;
                                        $matrixFuzzy[$i][$j][$k][1]=1/4;
                                        $matrixFuzzy[$i][$j][$k][2]=1/3;
                                    }
                                    else if($bobot[$i][$j][$k]==0.11){
                                        $matrixFuzzy[$i][$j][$k][0]=2/9;
                                        $matrixFuzzy[$i][$j][$k][1]=2/9;
                                        $matrixFuzzy[$i][$j][$k][2]=1/4;
                                    }
                                    
                                    
                                    if($i==0){
                                        $hasilKali[$j][$k]=1;    
                                    }

                                    $hasilKali[$j][$k]*=$bobot[$i][$j][$k];
                                    ?>


                                @endfor
                                </tr>
                                @endfor
                    </tbody>

                </table>
                </div>
            </div> <!-- end card-box -->

@endfor
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                                                        
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                  

                            </td>
                            <td>
                                <a href="/kriteria/perhitungan/detail/{{ $item->kriId }}"
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
