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
    @foreach ($kriteria as $item)
        
  
    <?php
            $bobot = json_decode($item->bobot);
        ?>
    <h4 class="header-title"> Kriteria {{$item->kriJenis}}</h4>

    @for($i=0; $i<count($bobot) ; $i++) 
    <div class="row">
        <div class="col-12">
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
        </div> <!-- end col -->
</div> <!-- end row -->
@endfor
<!-- end row -->

<div class="row">
    <div class="col-12">
        <div class="card-box ">
            <h4 class="header-title">Perkalian Kriteria </h4>
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
                    @for ($i=0 ;$i<count($hasilKali); $i++) <tr>
                        <td>
                            @if($i==0) RAM
                            @elseif($i==1) ROM
                            @elseif($i==2) Kamara
                            @elseif($i==3) Prosesor
                            @elseif($i==4) Layar
                            @elseif($i==5)Batrai
                            @endif
                        </td>
                        @for ($k=0 ; $k<count($hasilKali[$i]); $k++) 
                        <td> {{ round($hasilKali[$i][$k],2)}}</td>
                            <?php 
                                    $hasilpangkat[$i][$k] = pow($hasilKali[$i][$k], 1/3);
                                    $hpBaru[$k][$i] = $hasilpangkat[$i][$k]; 
                                        $totalHP[$k] = array_sum($hpBaru[$k]);
                                       
                                ?>

                            @endfor
                            </tr>
                            @endfor
                </tbody>

            </table>
            </div>
        </div> <!-- end card-box -->
    </div> <!-- end col -->
</div> <!-- end row -->


<div class="row">
    <div class="col-12">
        <div class="card-box ">
            <h4 class="header-title">akar pangkat Perkalian Kriteria </h4>
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
                    @for ($i=0 ;$i<count($hasilpangkat); $i++) <tr>
                        <td>
                            @if($i==0) RAM
                            @elseif($i==1) ROM
                            @elseif($i==2) Kamara
                            @elseif($i==3) Prosesor
                            @elseif($i==4) Layar
                            @elseif($i==5)Batrai
                            @endif
                        </td>
                        @for ($k=0 ; $k<count($hasilpangkat[$i]); $k++) 
                        <td> {{ round($hasilpangkat[$i][$k],2)    }}
                            </td>

                            <?php 
                                        $prioritas[$i][$k] =  $hasilpangkat[$i][$k]/$totalHP[$k];
                                   
                                        ?>
                            @endfor
                            <?php  
                                        $rataPrioritas[$i] =array_sum($prioritas[$i])/count($prioritas[$i]);
                                    ?>
                            </tr>
                            @endfor
                            <tr>

                                <td> Total </td>
                                @foreach($totalHP as $items)
                                <td> {{ round($items,2) }} </td>
                                @endforeach
                            </tr>
                </tbody>

            </table>
            </div>
        </div> <!-- end card-box -->
    </div> <!-- end col -->
</div> <!-- end row -->
<?php 

?>
<div class="row">
    <div class="col-12">
        <div class="card-box ">
            <h4 class="header-title">prioritas </h4>
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
                        <th>Prioritas</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i=0 ;$i<count($prioritas); $i++) <tr>
                        <td>
                            @if($i==0) RAM
                            @elseif($i==1) ROM
                            @elseif($i==2) Kamara
                            @elseif($i==3) Prosesor
                            @elseif($i==4) Layar
                            @elseif($i==5)Batrai
                            @endif
                        </td>
                        @for ($k=0 ; $k<count($prioritas[$i]); $k++) <td> {{ round($prioritas[$i][$k],)    }}</td>
                            <?php 
                             $hasilPrioritas[$i][$k]= $hasilpangkat[$i][$k]*$rataPrioritas[$k]; 
                        ?>
                            @endfor

                            <td> {{ round($rataPrioritas[$i],2)    }}</td>
                            </tr>

                            @endfor

                </tbody>

            </table>
            </div>
        </div> <!-- end card-box -->
    </div> <!-- end col -->
</div> <!-- end row -->
<?php

?>
<div class="row">
    <div class="col-12">
        <div class="card-box ">
            <h4 class="header-title">Hasil prioritas </h4>
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
                        <th>Jumlah Baris</th>
                        <th>jumlah perbaris/rata-rata</th>

                    </tr>
                </thead>
                <tbody>
                    @for ($i=0 ;$i<count($hasilPrioritas); $i++) <tr>
                        <td>
                            @if($i==0) RAM
                            @elseif($i==1) ROM
                            @elseif($i==2) Kamara
                            @elseif($i==3) Prosesor
                            @elseif($i==4) Layar
                            @elseif($i==5)Batrai
                            @endif
                        </td>
                        <?php $jumlah[$i] =0; ?>
                        @for ($k=0 ; $k<count($hasilPrioritas[$i]); $k++) <td>
                            {{ round($hasilPrioritas[$i][$k],2)    }}
                            </td>
                            <?php 
                            $jumlah[$i]+= $hasilPrioritas[$i][$k]
                           
                        ?>
                            @endfor
                            <?php 
                               $jmlhRata[$i]=$jumlah[$i]/$rataPrioritas[$i];
                            ?>
                            <td> {{ round($jumlah[$i],2)    }}</td>

                            <td> {{ round($jmlhRata[$i],2)    }}</td>
                            </tr>

                            @endfor
                            <?php
                            $lamda = array_sum($jmlhRata)/count($jmlhRata);
                            $ir =1.24;
                            $ci= ($lamda-6)/(6-1);
                            $cr = $ci/$ir;
                        ?>
                            <tr>
                                <td>
                                    lamda
                                </td>
                                <td>
                                    {{ round($lamda,4)}}
                                </td>
                                <td>
                                    CI
                                </td>
                                <td>
                                    {{  round($ci,4)}}
                                </td>
                                <td>
                                    IR
                                </td>
                                <td>
                                    {{  round($ir,4) }}
                                </td>
                                <td>
                                    CR
                                </td>
                                <td>
                                    {{ round($cr,4)}}
                                </td>
                                <td>

                                </td>
                            </tr>
                </tbody>

            </table>
            </div>
        </div> <!-- end card-box -->
    </div> <!-- end col -->
</div> <!-- end row -->

 @for($i=0; $i<count($bobot) ; $i++) 
    <div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title">matriks perbandingan Fuzzy AHP Responden {{$i+1  }}</h4>
                <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th rowspan="2">Kriteria</th>
                            <th colspan="3">RAM</th>
                            <th colspan="3">ROM</th>
                            <th colspan="3">Kamara</th>
                            <th colspan="3">Prosesor</th>
                            <th colspan="3">Layar</th>
                            <th colspan="3">Batrai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> </td>
                            <td>L1 </td>
                            <td>M1 </td>
                            <td>U1 </td>
                            <td>L2 </td>
                            <td>M2 </td>
                            <td>U2 </td>
                            <td>L3 </td>
                            <td>M3 </td>
                            <td>U3 </td>
                            <td>L4 </td>
                            <td>M4 </td>
                            <td>U4 </td>
                            <td>L5 </td>
                            <td>M5 </td>
                            <td>U5 </td>
                            <td>L6 </td>
                            <td>M6 </td>
                            <td>U6 </td>
                        </tr>
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
                            <td> {{ round($matrixFuzzy[$i][$j][$k][0],2)}}</td>
                            <td> {{ round($matrixFuzzy[$i][$j][$k][1],2)}}</td>
                            <td> {{ round($matrixFuzzy[$i][$j][$k][2],2)}}</td>

                                <?php                          
                                    
                                    if($i==0){
                                        $hasilKaliMF[$j][$k][0]=1;
                                        $hasilKaliMF[$j][$k][1]=1; 
                                        $hasilKaliMF[$j][$k][2]=1;     
                                    }

                                    $hasilKaliMF[$j][$k][0]*=$matrixFuzzy[$i][$j][$k][0];
                                    $hasilKaliMF[$j][$k][1]*=$matrixFuzzy[$i][$j][$k][1];
                                    $hasilKaliMF[$j][$k][2]*=$matrixFuzzy[$i][$j][$k][2];
                                    ?>


                                @endfor
                                </tr>
                                @endfor
                    </tbody>

                </table>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->
</div> <!-- end row -->
@endfor
<div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title">Perkalian matriks perbandingan Fuzzy AHP Responden </h4>
                <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                                <tr>
                                        <th rowspan="2">Kriteria</th>
                                        <th colspan="3">RAM</th>
                                        <th colspan="3">ROM</th>
                                        <th colspan="3">Kamara</th>
                                        <th colspan="3">Prosesor</th>
                                        <th colspan="3">Layar</th>
                                        <th colspan="3">Batrai</th>
                                    </tr>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                    <td> </td>
                                    <td>L1 </td>
                                    <td>M1 </td>
                                    <td>U1 </td>
                                    <td>L2 </td>
                                    <td>M2 </td>
                                    <td>U2 </td>
                                    <td>L3 </td>
                                    <td>M3 </td>
                                    <td>U3 </td>
                                    <td>L4 </td>
                                    <td>M4 </td>
                                    <td>U4 </td>
                                    <td>L5 </td>
                                    <td>M5 </td>
                                    <td>U5 </td>
                                    <td>L6 </td>
                                    <td>M6 </td>
                                    <td>U6 </td>
                                </tr>
                        @for ($i=0 ;$i<count($hasilKali); $i++) <tr>
                            <td>
                                @if($i==0) RAM
                                @elseif($i==1) ROM
                                @elseif($i==2) Kamara
                                @elseif($i==3) Prosesor
                                @elseif($i==4) Layar
                                @elseif($i==5)Batrai
                                @endif
                            </td>
                            @for ($k=0 ; $k<count($hasilKali[$i]); $k++)
                             <td> {{ round($hasilKaliMF[$i][$k][0],2)}}</td>
                             <td> {{ round($hasilKaliMF[$i][$k][1],2)}}</td>
                             <td> {{ round($hasilKaliMF[$i][$k][2],2)}}</td>
                                <?php 
                                        $hasilpangkatiMF[$i][$k][0] = pow($hasilKaliMF[$i][$k][0], 1/3);
                                        $hasilpangkatiMF[$i][$k][1] = pow($hasilKaliMF[$i][$k][1], 1/3);
                                        $hasilpangkatiMF[$i][$k][2] = pow($hasilKaliMF[$i][$k][2], 1/3);
                                        if($k==0){
                                            $jP[$i][0]=0;
                                            $jP[$i][1]=0;
                                            $jP[$i][2]=0;
                                        }
                                         $jP[$i][0]+=$hasilpangkatiMF[$i][$k][0];
                                         $jP[$i][1]+=$hasilpangkatiMF[$i][$k][1]; 
                                         $jP[$i][2]+=$hasilpangkatiMF[$i][$k][2];   
                                            
                                    ?>
    
                                @endfor
                                </tr>
                                @endfor
                    </tbody>
    
                </table>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->
    </div> <!-- end row -->

    
<div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title">akar pangkat Perkalian matriks perbandingan Fuzzy AHP </h4>
                <div class="table-responsive">
                <table class="table table-bordered ">
                        <thead>
                                <tr>
                                        <tr>
                                                <th rowspan="2">Kriteria</th>
                                                <th colspan="3">RAM</th>
                                                <th colspan="3">ROM</th>
                                                <th colspan="3">Kamara</th>
                                                <th colspan="3">Prosesor</th>
                                                <th colspan="3">Layar</th>
                                                <th colspan="3">Batrai</th>
                                            </tr>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                            <td> </td>
                                            <td>L1 </td>
                                            <td>M1 </td>
                                            <td>U1 </td>
                                            <td>L2 </td>
                                            <td>M2 </td>
                                            <td>U2 </td>
                                            <td>L3 </td>
                                            <td>M3 </td>
                                            <td>U3 </td>
                                            <td>L4 </td>
                                            <td>M4 </td>
                                            <td>U4 </td>
                                            <td>L5 </td>
                                            <td>M5 </td>
                                            <td>U5 </td>
                                            <td>L6 </td>
                                            <td>M6 </td>
                                            <td>U6 </td>
                                        </tr>
                        @for ($i=0 ;$i<count($hasilpangkatiMF   ); $i++) <tr>
                            <td>
                                @if($i==0) RAM
                                @elseif($i==1) ROM
                                @elseif($i==2) Kamara
                                @elseif($i==3) Prosesor
                                @elseif($i==4) Layar
                                @elseif($i==5)Batrai
                                @endif
                            </td>
                            @for ($k=0 ; $k<count($hasilpangkatiMF[$i]); $k++) 
                            <td> {{ round($hasilpangkatiMF[$i][$k][0],2)    }}
                                
                            <td> {{ round($hasilpangkatiMF[$i][$k][1],2)    }}
                                
                            <td> {{ round($hasilpangkatiMF[$i][$k][2],2)    }}
                                </td>
    
                               
                                @endfor
                              
                                </tr>
                                @endfor
                               
                    </tbody>
    
                </table>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->
    </div> <!-- end row -->

  

<div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title">2. Menentukan nilai sintesis fuzzy  </h4>
                <div class="table-responsive">
                <table class="table table-bordered ">
                        <thead>
                               
                                        <tr>
                                                <th rowspan="2"></th>
                                                <th colspan="3">Jumlah Per-Nilai</th>
                                               
                                            </tr>
                          
                            </thead>
                            <tbody>
                                    <tr>
                                            <td> </td>
                                            <td>L </td>
                                            <td>M </td>
                                            <td>U </td>
                                            </tr>
                        @for ($i=0 ;$i<count($jP   ); $i++) <tr>
                            <td>
                                @if($i==0) RAM
                                <?php 
                                    $jumlah [0]=0;
                                    $jumlah [1]=0;
                                    $jumlah [2]=0;
                                ?>
                                @elseif($i==1) ROM
                                @elseif($i==2) Kamara
                                @elseif($i==3) Prosesor
                                @elseif($i==4) Layar
                                @elseif($i==5)Batrai
                                @endif
                            </td>

                            <td> {{ round($jP[$i][0],2)    }} </td> 
                                
                            <td> {{ round($jP[$i][1],2)    }} </td> 
                                
                            <td> {{ round($jP[$i][2],2)    }} </td> 
                            <?php 
                            $jumlah [0]+=$jP[$i][0];
                            $jumlah [1]+=$jP[$i][1];
                            $jumlah [2]+=$jP[$i][2];
                                    ?>                  
                                </tr>
                                @endfor
                                <tr>
                                    <td> Jumlah </td>
                                    <td> {{ round($jumlah[0],5) }} </td>
                                    <td>  {{round($jumlah[1],5) }} </td>
                                    <td>  {{round($jumlah[2],5) }} </td>
                                    <?php 
                                        $seperJumlah [0]=1/$jumlah[0];
                                        $seperJumlah [1]=1/$jumlah[1];
                                        $seperJumlah [2]=1/$jumlah[2];
                                    ?>   
                                </tr>
                                <tr>
                                        <td> 1/ Jumlah </td>
                                        <td> {{ round($seperJumlah[0] ,5)}} </td>
                                        <td>  {{round($seperJumlah[1],5) }} </td>
                                        <td>  {{round($seperJumlah[2],5) }} </td>
                                        <?php 
                                          $seperJumlahBalik =array_reverse($seperJumlah);
                                        ?>   
                                    </tr>
                                    <tr>
                                            <td> DIBALIK </td>
                                            <td> {{ round($seperJumlahBalik[0] ,5)}} </td>
                                            <td>  {{round($seperJumlahBalik[1],5) }} </td>
                                            <td>  {{round($seperJumlahBalik[2],5) }} </td>
                                            
                                    </tr>
                               
                    </tbody>
    
                </table>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col --> 
         <div class="col-12">
                <div class="card-box ">
                    <h4 class="header-title">HASIL Si  </h4>
                    <div class="table-responsive">
                    <table class="table table-bordered ">
                            <thead>
                                   
                                            <tr>
                                                   
                                                    <th colspan="4">HASIL Si</th>
                                                   
                                                </tr>
                              
                                </thead>
                                <tbody>
                                        <tr>
                                                <td> S</td>
                                                <td>L </td>
                                                <td>M </td>
                                                <td>U </td>
                                                </tr>
                            @for ($i=0 ;$i<count($jP   ); $i++) <tr>
                                <td>
                                    @if($i==0) RAM
                                    <?php 
                                        $jumlah [0]=0;
                                        $jumlah [1]=0;
                                        $jumlah [2]=0;
                                    ?>
                                    @elseif($i==1) ROM
                                    @elseif($i==2) Kamara
                                    @elseif($i==3) Prosesor
                                    @elseif($i==4) Layar
                                    @elseif($i==5)Batrai
                                    @endif
                                </td>
    
                                <?php 
                                    $hasilSi[$i][0]=$jP[$i][0]*$seperJumlahBalik[0];
                                    $hasilSi[$i][1]=$jP[$i][1]*$seperJumlahBalik[1];
                                    $hasilSi[$i][2]=$jP[$i][2]*$seperJumlahBalik[2];
                                ?>
                                <td> {{ round($hasilSi[$i][0],5)    }} </td> 
                                    
                                <td> {{ round($hasilSi[$i][1],5)    }} </td> 
                                <td> {{ round($hasilSi[$i][2],5)    }} </td> 
                              
                                    </tr>
                                    @endfor
                                   
                        </tbody>
        
                    </table>
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->

            <?php 
                
               
                for($i=0 ; $i<5 ; $i++){
                    
                    if($hasilSi[0][1]>$hasilSi[$i+1][1]){
                        $vektor[0][$i] = 1;
                    } else if($hasilSi[$i+1][0]>$hasilSi[0][2]){
                        $vektor[0][$i] = 0;
                    } else {
                        $vektor[0][$i]=($hasilSi[$i+1][0]-$hasilSi[0][2])/(($hasilSi[0][1]-$hasilSi[0][2])-($hasilSi[$i+1][1]-$hasilSi[$i+1][0]));
                    }
                    }

                for($i=0 ,$j=0; $i<6 ; $i++){    
                    if($i==1){
                        $i++;
                    }             
                    if($hasilSi[1][1]>$hasilSi[$i][1]){
                        $vektor[1][$j] = 1;
                        $j++;
                    } else if($hasilSi[$i][0]>$hasilSi[1][2]){
                        $vektor[1][$j] = 0;
                        $j++;
                    }else {
                       
                            $vektor[1][$j]=($hasilSi[$i][0]-$hasilSi[1][2])/(($hasilSi[1][1]-$hasilSi[1][2])-($hasilSi[$i][1]-$hasilSi[$i][0]));
                     
                            $j++;
                        }
                      
                   
                    }
                    for($i=0 ,$j=0; $i<6 ; $i++){    
                    if($i==2){
                        $i++;
                    }             
                    if($hasilSi[2][1]>$hasilSi[$i][1]){
                        $vektor[2][$j] = 1;
                        $j++;
                    } else if($hasilSi[$i][0]>$hasilSi[2][2]){
                        $vektor[2][$j] = 0;
                        $j++;
                    }else {
                       
                            $vektor[2][$j]=($hasilSi[$i][0]-$hasilSi[2][2])/(($hasilSi[2][1]-$hasilSi[2][2])-($hasilSi[$i][1]-$hasilSi[$i][0]));
                     
                            $j++;
                        }
                      
                   
                    }  
                    for($i=0 ,$j=0; $i<6 ; $i++){    
                    if($i==3){
                        $i++;
                    }             
                    if($hasilSi[3][1]>$hasilSi[$i][1]){
                        $vektor[3][$j] = 1;
                        $j++;
                    } else if($hasilSi[$i][0]>$hasilSi[3][2]){
                        $vektor[3][$j] = 0;
                        $j++;
                    }else {
                       
                            $vektor[3][$j]=($hasilSi[$i][0]-$hasilSi[3][2])/(($hasilSi[3][1]-$hasilSi[3][2])-($hasilSi[$i][1]-$hasilSi[$i][0]));
                     
                            $j++;
                        }
                      
                   
                    }  
                    for($i=0 ,$j=0; $i<6 ; $i++){    
                    if($i==4){
                        $i++;
                    }             
                    if($hasilSi[4][1]>$hasilSi[$i][1]){
                        $vektor[4][$j] = 1;
                        $j++;
                    } else if($hasilSi[$i][0]>$hasilSi[4][2]){
                        $vektor[4][$j] = 0;
                        $j++;
                    }else {
                       
                            $vektor[4][$j]=($hasilSi[$i][0]-$hasilSi[4][2])/(($hasilSi[4][1]-$hasilSi[4][2])-($hasilSi[$i][1]-$hasilSi[$i][0]));
                     
                            $j++;
                        }
                      
                   
                    }
                    for($i=0 ,$j=0; $i<5 ; $i++){    
                    if($i==5){
                        $i++;
                    }             
                    if($hasilSi[5][1]>$hasilSi[$i][1]){
                        $vektor[5][$j] = 1;
                        $j++;
                    } else if($hasilSi[$i][0]>$hasilSi[5][2]){
                        $vektor[5][$j] = 0;
                        $j++;
                    }else {      
                            $vektor[5][$j]=($hasilSi[$i][0]-$hasilSi[5][2])/(($hasilSi[5][1]-$hasilSi[5][2])-($hasilSi[$i][1]-$hasilSi[$i][0]));
                     
                            $j++;
                        }
                      
                   
                    }                    
               
            ?>
     
     

     <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title">Nilai Vektor  </h4>
                <div class="table-responsive">
                <table class="table table-bordered ">
                        <thead>
                            <tr>
                                <th colspan="2">Nilai Vektor </th>
                            </tr>
                          
                        </thead>
                        <tbody>
                                @foreach($vektor[0] as $key => $v)
                            <tr>
                               
                                <td> v(S1 >= S{{$key+2}} )</td>
                                <td>{{$v}} </td>
                            </tr>
                            @endforeach
                            <tr>
                               
                                    <td></td>
                                    <td> </td>
                                </tr>
                            @foreach($vektor[1] as $key => $v)
                            <tr>
                               
                                <td> v(S2 >= S @if($key==0) {{$key+1}} @else {{$key+2}} @endif )</td>
                                <td>{{$v}} </td>
                            </tr>
                            @endforeach
                            <tr>
                               
                                    <td></td>
                                    <td> </td>
                                </tr>
                            @foreach($vektor[2] as $key => $v)
                            <tr>
                               
                                <td> v(S3 >= S @if($key<2) {{$key+1}} @else {{$key+2}} @endif )</td>
                                <td>{{$v}} </td>
                            </tr>
                            @endforeach
                            <tr>
                               
                                    <td></td>
                                    <td> </td>
                                </tr>
                            @foreach($vektor[3] as $key => $v)
                            <tr>
                               
                                <td> v(S4 >= S @if($key<3) {{$key+1}} @else {{$key+2}} @endif )</td>
                                <td>{{$v}} </td>
                            </tr>
                            @endforeach
                            <tr>
                               
                                    <td></td>
                                    <td> </td>
                                </tr>
                            @foreach($vektor[4] as $key => $v)
                            <tr>
                               
                                <td> v(S5 >= S @if($key<4) {{$key+1}} @else {{$key+2}} @endif )</td>
                                <td>{{$v}} </td>
                            </tr>
                            @endforeach
                            <tr>
                               
                                    <td></td>
                                    <td> </td>
                                </tr>
                            @foreach($vektor[5] as $key => $v)
                            <tr>
                               
                                <td> v(S6 >= S @if($key<5) {{$key+1}} @else {{$key+2}} @endif )</td>
                                <td>{{$v}} </td>
                            </tr>
                            @endforeach
                        
                               
                    </tbody>
    
                </table>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col --> 

        <div class="col-12">
                <div class="card-box ">
                    <h4 class="header-title">d' </h4>
                    <div class="table-responsive">
                    <table class="table table-bordered ">
                            <thead>
                                <tr>
                                    <th colspan="2">AMBIL NILAI MINIMUM DARI SETIAP VEKTOR (d') </th>
                                </tr>
                              
                            </thead>
                            <tbody>
                                 
                                <tr>
                                   
                                    <td>V (S1 ≥ S2,S3,S4,S5,S6)</td>
                                    <td>{{ min($vektor[0])}} </td>
                                </tr>
                                 <tr>
                                   
                                    <td>V (S2 ≥ S1,S3,S4,S5,S6)</td>
                                    <td>{{ min($vektor[1])}} </td>
                                </tr>
                                 <tr>
                                   
                                    <td>V (S3 ≥ S1,S2,S4,S5,S6)</td>
                                    <td>{{ min($vektor[2])}} </td>
                                </tr>
                                 <tr>
                                   
                                    <td>V (S4 ≥ S1,S2,S3,S5,S6)</td>
                                    <td>{{ min($vektor[3])}} </td>
                                </tr>
                                 <tr>
                                   
                                    <td>V (S5 ≥ S1,S2,S3,S4,S6)</td>
                                    <td>{{ min($vektor[4])}} </td>
                                </tr>
                                 <tr>
                                   
                                    <td>V (S6 ≥ S1,S2,S3,S4,S5)</td>
                                    <td>{{ min($vektor[5])}} </td>
                                </tr>
                                <tr>
                                   <?php 
                                        $minVektor = [ min($vektor[0]), min($vektor[1]), min($vektor[2]), min($vektor[3]), min($vektor[4]), min($vektor[5])];
                                        $totalminVektor=array_sum($minVektor);

                                        foreach($minVektor as $key => $a){
                                            $normalisasiBobot[$key]=$a/$totalminVektor;
                                        }
                                    ?>
                                        <td>Total</td>
                                        <td>{{ $totalminVektor}} </td>
                                    </tr>
                                
                            
                                   
                        </tbody>
        
                    </table>
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col --> 
    
      
        <div class="col-12">
                <div class="card-box ">
                    <h4 class="header-title">d' </h4>
                    <div class="table-responsive">
                    <table class="table table-bordered ">
                            <thead>
                                <tr>
                                    <th colspan="2">NORMALISASI NILAI BOBOT VEKTOR (d(An)) </th>
                                </tr>
                              
                            </thead>
                            <tbody>
                                 
                                <tr>
                                   
                                    <td>V (S1 ≥ S2,S3,S4,S5,S6)</td>
                                    <td>{{ $normalisasiBobot[0]}} </td>
                                </tr>
                                 <tr>
                                   
                                    <td>V (S2 ≥ S1,S3,S4,S5,S6)</td>
                                    <td>{{ $normalisasiBobot[1]}} </td>
                                </tr>
                                 <tr>
                                   
                                    <td>V (S3 ≥ S1,S2,S4,S5,S6)</td>
                                    <td>{{ $normalisasiBobot[2]}} </td>
                                </tr>
                                 <tr>
                                   
                                    <td>V (S4 ≥ S1,S2,S3,S5,S6)</td>
                                    <td>{{ $normalisasiBobot[3]}} </td>
                                </tr>
                                 <tr>
                                   
                                    <td>V (S5 ≥ S1,S2,S3,S4,S6)</td>
                                    <td>{{ $normalisasiBobot[4]}} </td>
                                </tr>
                                 <tr>
                                   
                                    <td>V (S6 ≥ S1,S2,S3,S4,S5)</td>
                                    <td>{{ $normalisasiBobot[5]}} </td>
                                </tr>
                                <tr>
                                   <?php 
                                      
                                        $maxBobot =max($normalisasiBobot);

                                     
                                    ?>
                                        <td>Max</td>
                                        <td>{{ $maxBobot}} </td>
                                    </tr>
                                
                            
                                   
                        </tbody>
        
                    </table>
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col --> 
    
 
    
    </div> <!-- end row -->

    @endforeach



</div> <!-- container -->

@endsection
