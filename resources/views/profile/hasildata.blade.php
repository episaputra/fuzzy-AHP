@extends('layout.main')

@section('konten')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Fuzzy FAHP</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->



  

    <h4 class="header-title"> Kriteria Profil</h4>

    <div class="d-none">
        <div class="row">
            <div class="col-12">
                <div class="card-box ">
                    <h4 class="header-title">Responden</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Kriteria</th>
                                    <th>hobby</th>
                                    <th>job</th>
                                    <th>social networking</th>
                                </tr>
                            </thead>
                            <tbody>

                                @for ($j=0 ;$j<count($kriteria); $j++) <tr>
                                    <td>
                                        @if($j==0) hobby
                                        @elseif($j==1) job
                                        @elseif($j==2) social networking

                                        @endif
                                    </td>
                                    @for ($k=0 ; $k<count($kriteria[$j]); $k++) <td> {{ $kriteria[$j][$k]}}</td>

                                        <?php
                                    if($kriteria[$j][$k]==1){
                                        $matrixFuzzy[$j][$k][0]=1;
                                        $matrixFuzzy[$j][$k][1]=1;
                                        $matrixFuzzy[$j][$k][2]=1;
                                    }
                                    else if($kriteria[$j][$k]==2){
                                        $matrixFuzzy[$j][$k][0]=1/2;
                                        $matrixFuzzy[$j][$k][1]=1;
                                        $matrixFuzzy[$j][$k][2]=3/2;
                                    }
                                    else if($kriteria[$j][$k]==3){
                                        $matrixFuzzy[$j][$k][0]=1;
                                        $matrixFuzzy[$j][$k][1]=3/2;
                                        $matrixFuzzy[$j][$k][2]=2;
                                    }
                                    else if($kriteria[$j][$k]==4){
                                        $matrixFuzzy[$j][$k][0]=3/2;
                                        $matrixFuzzy[$j][$k][1]=2;
                                        $matrixFuzzy[$j][$k][2]=5/2;
                                    }
                                    else if($kriteria[$j][$k]==5){
                                        $matrixFuzzy[$j][$k][0]=2;
                                        $matrixFuzzy[$j][$k][1]=5/2;
                                        $matrixFuzzy[$j][$k][2]=3;
                                    }
                                    else if($kriteria[$j][$k]==6){
                                        $matrixFuzzy[$j][$k][0]=5/2;
                                        $matrixFuzzy[$j][$k][1]=3;
                                        $matrixFuzzy[$j][$k][2]=7/2;
                                    } 
                                    else if($kriteria[$j][$k]==7){
                                        $matrixFuzzy[$j][$k][0]=3;
                                        $matrixFuzzy[$j][$k][1]=7/2;
                                        $matrixFuzzy[$j][$k][2]=4;
                                    }
                                    else if($kriteria[$j][$k]==8){
                                        $matrixFuzzy[$j][$k][0]=7/2;
                                        $matrixFuzzy[$j][$k][1]=4;
                                        $matrixFuzzy[$j][$k][2]=9/2;
                                    }
                                    else if($kriteria[$j][$k]==9){
                                        $matrixFuzzy[$j][$k][0]=4;
                                        $matrixFuzzy[$j][$k][1]=9/2;
                                        $matrixFuzzy[$j][$k][2]=9/2;
                                    }
                                    else if(round($kriteria[$j][$k],2)==0.5){
                                        $matrixFuzzy[$j][$k][0]=2/3;
                                        $matrixFuzzy[$j][$k][1]=1;
                                        $matrixFuzzy[$j][$k][2]=2;
                                    }
                                    else if(round($kriteria[$j][$k],2)==0.33){
                                        $matrixFuzzy[$j][$k][0]=1/2;
                                        $matrixFuzzy[$j][$k][1]=2/3;
                                        $matrixFuzzy[$j][$k][2]=1;
                                    }
                                    else if(round($kriteria[$j][$k],2)==0.25){
                                        $matrixFuzzy[$j][$k][0]=2/5;
                                        $matrixFuzzy[$j][$k][1]=1/2;
                                        $matrixFuzzy[$j][$k][2]=2/3;
                                    }
                                    else if(round($kriteria[$j][$k],2)==0.2){
                                        $matrixFuzzy[$j][$k][0]=1/3;
                                        $matrixFuzzy[$j][$k][1]=2/5;
                                        $matrixFuzzy[$j][$k][2]=1/2;
                                    }
                                    else if(round($kriteria[$j][$k],2)==0.17){
                                        $matrixFuzzy[$j][$k][0]=2/7;
                                        $matrixFuzzy[$j][$k][1]=1/3;
                                        $matrixFuzzy[$j][$k][2]=2/5;
                                    }
                                    
                                    else if(round($kriteria[$j][$k],2)==0.14){
                                        $matrixFuzzy[$j][$k][0]=1/4;
                                        $matrixFuzzy[$j][$k][1]=2/7;
                                        $matrixFuzzy[$j][$k][2]=1/3;
                                    }
                                    else if(round($kriteria[$j][$k],2)==0.13){
                                        $matrixFuzzy[$j][$k][0]=2/9;
                                        $matrixFuzzy[$j][$k][1]=1/4;
                                        $matrixFuzzy[$j][$k][2]=1/3;
                                    }
                                    else if(round($kriteria[$j][$k],2)==0.11){
                                        $matrixFuzzy[$j][$k][0]=2/9;
                                        $matrixFuzzy[$j][$k][1]=2/9;
                                        $matrixFuzzy[$j][$k][2]=1/4;
                                    }
                                    
                                    
                                  
                                        $hasilKali[$j][$k]=1;    
                                

                                    $hasilKali[$j][$k]*=$kriteria[$j][$k];
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
    </div>
    <!-- end row -->
    <div class="d-none">
        <div class="row">
            <div class="col-12">
                <div class="card-box ">
                    <h4 class="header-title">Perkalian Kriteria </h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Kriteria</th>
                                    <th>hobby</th>
                                    <th>job</th>
                                    <th>social networking</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i=0 ;$i<count($hasilKali); $i++) <tr>
                                    <td>
                                        @if($i==0) hobby
                                        @elseif($i==1) job
                                        @elseif($i==2) social networking

                                        @endif
                                    </td>
                                    @for ($k=0 ; $k<count($hasilKali[$i]); $k++) <td> {{ round($hasilKali[$i][$k],2)}}
                                        </td>
                                        <?php 
                                    $hasilpangkat[$i][$k] = pow($hasilKali[$i][$k], 1);
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
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title"> Menentukan matriks perbandingan AHP</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kriteria</th>
                                <th>hobby</th>
                                <th>job</th>
                                <th>social networking</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i=0 ;$i<count($hasilpangkat); $i++) <tr>
                                <td>
                                    @if($i==0) hobby
                                    @elseif($i==1) job
                                    @elseif($i==2) social networking

                                    @endif
                                </td>
                                @for ($k=0 ; $k<count($hasilpangkat[$i]); $k++) <td>
                                    {{ round($hasilpangkat[$i][$k],2)    }}
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

    <div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title"> Normalisasi matriks
                </h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kriteria</th>
                                <th>hobby</th>
                                <th>job</th>
                                <th>social networking</th>
                                <th>Rata-Rata</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i=0 ;$i<count($prioritas); $i++) <tr>
                                <td>
                                    @if($i==0) hobby
                                    @elseif($i==1) job
                                    @elseif($i==2) social networking

                                    @endif
                                </td>
                                @for ($k=0 ; $k<count($prioritas[$i]); $k++) <td> {{ round($prioritas[$i][$k],4)    }}
                                    </td>
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

    <div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title">Hasil prioritas </h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kriteria</th>
                                <th>hobby</th>
                                <th>job</th>
                                <th>social networking</th>
                                <th>jumlah perbaris </th>
                                <th> jumlah perbaris/nilai rata-rata </th>
                                <th></th>
                                <th></th>



                            </tr>
                        </thead>
                        <tbody>
                            @for ($i=0 ;$i<count($hasilPrioritas); $i++) <tr>
                                <td>
                                    @if($i==0) hobby
                                    @elseif($i==1) job
                                    @elseif($i==2) social networking

                                    @endif
                                </td>
                                <?php $jumlah[$i] =0; ?>
                                @for ($k=0 ; $k<count($hasilPrioritas[$i]); $k++) <td>
                                    {{ round($hasilPrioritas[$i][$k],2)    }}
                                    </td>
                                    <?php 
                            $jumlah[$i]+= $hasilPrioritas[$i][$k];
                           
                        ?>
                                    @endfor
                                    <?php 
                               $jmlhRata[$i]=$jumlah[$i]/$rataPrioritas[$i];
                            ?>
                                    <td> {{ round($jumlah[$i],2)    }}</td>

                                    <td> {{ round($jmlhRata[$i],2)    }}</td>
                                    <td></td>
                                    <td></td>
                                    @endfor

                                    </tr>

                                    <?php
                            $lamda = array_sum($jmlhRata)/count($jmlhRata);
                            $ir =0.58   ;
                            $ci= ($lamda-3)/(3-1);
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

                                    </tr>
                        </tbody>

                    </table>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="d-none">
        <div class="row">
            <div class="col-12">
                <div class="card-box ">
                    <h4 class="header-title">matriks perbandingan Fuzzy AHP Responden Profile </h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th rowspan="2">Kriteria</th>
                                    <th colspan="3">hobby</th>
                                    <th colspan="3">job</th>
                                    <th colspan="3">social networking</th>
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
                                </tr>
                                @for ($j=0 ;$j<count($kriteria); $j++) <tr>
                                    <td>
                                        @if($j==0) hobby
                                        @elseif($j==1) job
                                        @elseif($j==2) social networking

                                        @endif
                                    </td>
                                    @for ($k=0 ; $k<count($kriteria[$j]); $k++) <td>
                                        {{ round($matrixFuzzy[$j][$k][0],2)}}
                                        </td>
                                        <td> {{ round($matrixFuzzy[$j][$k][1],2)}}</td>
                                        <td> {{ round($matrixFuzzy[$j][$k][2],2)}}</td>

                                        <?php                          
                                   
                             
                                   

                                    $hasilKaliMF[$j][$k][0]=$matrixFuzzy[$j][$k][0];
                                    $hasilKaliMF[$j][$k][1]=$matrixFuzzy[$j][$k][1];
                                    $hasilKaliMF[$j][$k][2]=$matrixFuzzy[$j][$k][2];
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
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title">matriks perbandingan Fuzzy AHP Responden Profile</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <tr>
                                <th rowspan="2">Kriteria</th>
                                <th colspan="3">hobby</th>
                                <th colspan="3">job</th>
                                <th colspan="3">social networking</th>
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
                            </tr>
                            @for ($i=0 ;$i<count($hasilKali); $i++) <tr>
                                <td>
                                    @if($i==0) hobby
                                    @elseif($i==1) job
                                    @elseif($i==2) social networking

                                    @endif
                                </td>
                                @for ($k=0 ; $k<count($hasilKali[$i]); $k++) <td> {{ round($hasilKaliMF[$i][$k][0],2)}}
                                    </td>
                                    <td> {{ round($hasilKaliMF[$i][$k][1],2)}}</td>
                                    <td> {{ round($hasilKaliMF[$i][$k][2],2)}}</td>
                                    <?php 
                                    $hasilpangkatiMF[$i][$k][0] = pow($hasilKaliMF[$i][$k][0], 1);
                                    $hasilpangkatiMF[$i][$k][1] = pow($hasilKaliMF[$i][$k][1], 1);
                                    $hasilpangkatiMF[$i][$k][2] = pow($hasilKaliMF[$i][$k][2], 1);
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
                                <th colspan="3">hobby</th>
                                <th colspan="3">job</th>
                                <th colspan="3">social networking</th>
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
                            </tr>
                            @for ($i=0 ;$i<count($hasilpangkatiMF ); $i++) <tr>
                                <td>
                                    @if($i==0) hobby
                                    @elseif($i==1) job
                                    @elseif($i==2) social networking

                                    @endif
                                </td>
                                @for ($k=0 ; $k<count($hasilpangkatiMF[$i]); $k++) <td>
                                    {{ round($hasilpangkatiMF[$i][$k][0],2)    }}

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
                <h4 class="header-title">2. Menentukan nilai sintesis fuzzy </h4>
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
                            @for ($i=0 ;$i<count($jP ); $i++) <tr>
                                <td>

                                    @if($i==0) hobby
                                    <?php 
                                    $jumlah [0]=0;
                                    $jumlah [1]=0;
                                    $jumlah [2]=0;
                                ?>
                                    @elseif($i==1) job
                                    @elseif($i==2) social networking

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
                                    <td> {{round($jumlah[1],5) }} </td>
                                    <td> {{round($jumlah[2],5) }} </td>
                                    <?php 
                                        $seperJumlah [0]=1/$jumlah[0];
                                        $seperJumlah [1]=1/$jumlah[1];
                                        $seperJumlah [2]=1/$jumlah[2];
                                    ?>
                                </tr>
                                <tr>
                                    <td> 1/ Jumlah </td>
                                    <td> {{ round($seperJumlah[0] ,5)}} </td>
                                    <td> {{round($seperJumlah[1],5) }} </td>
                                    <td> {{round($seperJumlah[2],5) }} </td>
                                    <?php 
                                          $seperJumlahBalik =array_reverse($seperJumlah);
                                        ?>
                                </tr>
                                <tr>
                                    <td> DIBALIK </td>
                                    <td> {{ round($seperJumlahBalik[0] ,5)}} </td>
                                    <td> {{round($seperJumlahBalik[1],5) }} </td>
                                    <td> {{round($seperJumlahBalik[2],5) }} </td>

                                </tr>

                        </tbody>

                    </table>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title">HASIL Si </h4>
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
                            @for ($i=0 ;$i<count($jP ); $i++) <tr>
                                <td>
                                    @if($i==0) hobby
                                    <?php 
                                    $jumlah [0]=0;
                                    $jumlah [1]=0;
                                    $jumlah [2]=0;
                                ?>
                                    @elseif($i==1) job
                                    @elseif($i==2) social networking

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
            
           
            for($i=0 ; $i<2 ; $i++){
                
                if($hasilSi[0][1]>$hasilSi[$i+1][1]){
                    $vektor[0][$i] = 1;
                } else if($hasilSi[$i+1][0]>$hasilSi[0][2]){
                    $vektor[0][$i] = 0;
                } else {
                    $vektor[0][$i]=($hasilSi[$i+1][0]-$hasilSi[0][2])/(($hasilSi[0][1]-$hasilSi[0][2])-($hasilSi[$i+1][1]-$hasilSi[$i+1][0]));
                }
                }

            for($i=0 ,$j=0; $i<3 ; $i++){    
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
                for($i=0 ,$j=0; $i<2 ; $i++){    
                         
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
                            
           
        ?>

    </div>
    <div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title">Nilai Vektor </h4>
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

                                <td> v(S3 >= S @if($key<2) {{$key+1}} @else {{$key+2}} @endif )</td> <td>{{$v}} </td>
                            </tr>
                            @endforeach




                        </tbody>

                    </table>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->


    </div>


    <div class="row">

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

                                <td>V (S1 ≥ S2,S3)</td>
                                <td>{{ min($vektor[0])}} </td>
                            </tr>
                            <tr>

                                <td>V (S2 ≥ S1,S3)</td>
                                <td>{{ min($vektor[1])}} </td>
                            </tr>
                            <tr>

                                <td>V (S3 ≥ S1,S2)</td>
                                <td>{{ min($vektor[2])}} </td>
                            </tr>

                            <tr>
                                <?php 
                                    $minVektor = [ min($vektor[0]), min($vektor[1]), min($vektor[2])];
                                    $totalminVektor=array_sum($minVektor);

                                    foreach($minVektor as $key => $a){
                                        $normalisasiBobotKriteria[$key]=$a/$totalminVektor;
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

    </div>
    <div class="row">
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

                                <td>Hobby</td>
                                <td>{{ $normalisasiBobotKriteria[0]}} </td>
                            </tr>
                            <tr>

                                <td>Job</td>
                                <td>{{ $normalisasiBobotKriteria[1]}} </td>
                            </tr>
                            <tr>

                                <td>Social Networking</td>
                                <td>{{ $normalisasiBobotKriteria[2]}} </td>
                            </tr>

                            <tr>
                                <?php 
                                  
                                    $maxBobot =max($normalisasiBobotKriteria);

                                 
                                ?>
                                <td>Max</td>
                                <td>{{ $maxBobot}} </td>
                            </tr>



                        </tbody>

                    </table>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->

    </div>



    <h4 class="header-title"> Alternatif Hobi</h4>

    <div class="d-none">
        <div class="row">
            <div class="col-12">
                <div class="card-box ">
                    <h4 class="header-title">Responden</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>

                                    <th>Kriteria</th>
                                    <th>travel</th>
                                    <th>game</th>
                                    <th>video</th>
                                    <th>fotograpi</th>
                                </tr>
                            </thead>
                            <tbody>

                                @for ($j=0 ;$j<count($hobi); $j++) <tr>
                                    <td>
                                        @if($j==0) travel
                                        @elseif($j==1) game
                                        @elseif($j==2)video
                                        @elseif($j==3)fotograpi

                                        @endif
                                    </td>
                                    @for ($k=0 ; $k<count($hobi[$j]); $k++) <td> {{ $hobi[$j][$k]}}</td>

                                        <?php
                                    if($hobi[$j][$k]==1){
                                        $matrixFuzzy[$j][$k][0]=1;
                                        $matrixFuzzy[$j][$k][1]=1;
                                        $matrixFuzzy[$j][$k][2]=1;
                                    }
                                    else if($hobi[$j][$k]==2){
                                        $matrixFuzzy[$j][$k][0]=1/2;
                                        $matrixFuzzy[$j][$k][1]=1;
                                        $matrixFuzzy[$j][$k][2]=3/2;
                                    }
                                    else if($hobi[$j][$k]==3){
                                        $matrixFuzzy[$j][$k][0]=1;
                                        $matrixFuzzy[$j][$k][1]=3/2;
                                        $matrixFuzzy[$j][$k][2]=2;
                                    }
                                    else if($hobi[$j][$k]==4){
                                        $matrixFuzzy[$j][$k][0]=3/2;
                                        $matrixFuzzy[$j][$k][1]=2;
                                        $matrixFuzzy[$j][$k][2]=5/2;
                                    }
                                    else if($hobi[$j][$k]==5){
                                        $matrixFuzzy[$j][$k][0]=2;
                                        $matrixFuzzy[$j][$k][1]=5/2;
                                        $matrixFuzzy[$j][$k][2]=3;
                                    }
                                    else if($hobi[$j][$k]==6){
                                        $matrixFuzzy[$j][$k][0]=5/2;
                                        $matrixFuzzy[$j][$k][1]=3;
                                        $matrixFuzzy[$j][$k][2]=7/2;
                                    } 
                                    else if($hobi[$j][$k]==7){
                                        $matrixFuzzy[$j][$k][0]=3;
                                        $matrixFuzzy[$j][$k][1]=7/2;
                                        $matrixFuzzy[$j][$k][2]=4;
                                    }
                                    else if($hobi[$j][$k]==8){
                                        $matrixFuzzy[$j][$k][0]=7/2;
                                        $matrixFuzzy[$j][$k][1]=4;
                                        $matrixFuzzy[$j][$k][2]=9/2;
                                    }
                                    else if($hobi[$j][$k]==9){
                                        $matrixFuzzy[$j][$k][0]=4;
                                        $matrixFuzzy[$j][$k][1]=9/2;
                                        $matrixFuzzy[$j][$k][2]=9/2;
                                    }
                                    else if(round($hobi[$j][$k],2)==0.5){
                                        $matrixFuzzy[$j][$k][0]=2/3;
                                        $matrixFuzzy[$j][$k][1]=1;
                                        $matrixFuzzy[$j][$k][2]=2;
                                    }
                                    else if(round($hobi[$j][$k],2)==0.33){
                                        $matrixFuzzy[$j][$k][0]=1/2;
                                        $matrixFuzzy[$j][$k][1]=2/3;
                                        $matrixFuzzy[$j][$k][2]=1;
                                    }
                                    else if(round($hobi[$j][$k],2)==0.25){
                                        $matrixFuzzy[$j][$k][0]=2/5;
                                        $matrixFuzzy[$j][$k][1]=1/2;
                                        $matrixFuzzy[$j][$k][2]=2/3;
                                    }
                                    else if(round($hobi[$j][$k],2)==0.2){
                                        $matrixFuzzy[$j][$k][0]=1/3;
                                        $matrixFuzzy[$j][$k][1]=2/5;
                                        $matrixFuzzy[$j][$k][2]=1/2;
                                    }
                                    else if(round($hobi[$j][$k],2)==0.17){
                                        $matrixFuzzy[$j][$k][0]=2/7;
                                        $matrixFuzzy[$j][$k][1]=1/3;
                                        $matrixFuzzy[$j][$k][2]=2/5;
                                    }
                                    
                                    else if(round($hobi[$j][$k],2)==0.14){
                                        $matrixFuzzy[$j][$k][0]=1/4;
                                        $matrixFuzzy[$j][$k][1]=2/7;
                                        $matrixFuzzy[$j][$k][2]=1/3;
                                    }
                                    else if(round($hobi[$j][$k],2)==0.13){
                                        $matrixFuzzy[$j][$k][0]=2/9;
                                        $matrixFuzzy[$j][$k][1]=1/4;
                                        $matrixFuzzy[$j][$k][2]=1/3;
                                    }
                                    else if(round($hobi[$j][$k],2)==0.11){
                                        $matrixFuzzy[$j][$k][0]=2/9;
                                        $matrixFuzzy[$j][$k][1]=2/9;
                                        $matrixFuzzy[$j][$k][2]=1/4;
                                    }
                                    
                                    
                                  
                                        $hasilKali[$j][$k]=1;    
                                

                                    $hasilKali[$j][$k]*=$hobi[$j][$k];
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
    </div>
    <!-- end row -->
    <div class="d-none">
        <div class="row">
            <div class="col-12">
                <div class="card-box ">
                    <h4 class="header-title">Perkalian Kriteria </h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>

                                    <th>Kriteria</th>
                                    <th>travel</th>
                                    <th>game</th>
                                    <th>video</th>
                                    <th>fotograpi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i=0 ;$i<count($hasilKali); $i++) <tr>
                                    <td>
                                        @if($i==0) travel
                                        @elseif($i==1) game
                                        @elseif($i==2)video
                                        @elseif($i==3)fotograpi

                                        @endif
                                    </td>
                                    @for ($k=0 ; $k<count($hasilKali[$i]); $k++) <td> {{ round($hasilKali[$i][$k],2)}}
                                        </td>
                                        <?php 
                                    $hasilpangkat[$i][$k] = pow($hasilKali[$i][$k], 1);
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
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title"> Menentukan matriks perbandingan AHP</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>

                                <th>Kriteria</th>
                                <th>travel</th>
                                <th>game</th>
                                <th>video</th>
                                <th>fotograpi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i=0 ;$i<count($hasilpangkat); $i++) <tr>
                                <td>
                                    @if($i==0) travel
                                    @elseif($i==1) game
                                    @elseif($i==2)video
                                    @elseif($i==3)fotograpi

                                    @endif
                                </td>
                                @for ($k=0 ; $k<count($hasilpangkat[$i]); $k++) <td>
                                    {{ round($hasilpangkat[$i][$k],2)    }}
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

    <div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title"> Normalisasi matriks
                </h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kriteria</th>
                                <th>travel</th>
                                <th>game</th>
                                <th>video</th>
                                <th>fotograpi</th>
                                <th>Rata-Rata</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i=0 ;$i<count($prioritas); $i++) <tr>
                                <td>
                                    @if($i==0) travel
                                    @elseif($i==1) game
                                    @elseif($i==2)video
                                    @elseif($i==3)fotograpi

                                    @endif
                                </td>
                                @for ($k=0 ; $k<count($prioritas[$i]); $k++) <td> {{ round($prioritas[$i][$k],4)    }}
                                    </td>
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

    <div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title">Hasil prioritas </h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kriteria</th>
                                <th>travel</th>
                                <th>game</th>
                                <th>video</th>
                                <th>fotograpi</th>
                                <th>jumlah perbaris </th>
                                <th> jumlah perbaris/nilai rata-rata </th>
                                <th></th>
                                <th></th>



                            </tr>
                        </thead>
                        <tbody>
                            @for ($i=0 ;$i<count($hasilPrioritas); $i++) <tr>
                                <td>
                                    @if($i==0) travel
                                    @elseif($i==1) game
                                    @elseif($i==2)video
                                    @elseif($i==3)fotograpi

                                    @endif
                                </td>
                                <?php $jumlah[$i] =0; ?>
                                @for ($k=0 ; $k<count($hasilPrioritas[$i]); $k++) <td>
                                    {{ round($hasilPrioritas[$i][$k],2)    }}
                                    </td>
                                    <?php 
                            $jumlah[$i]+= $hasilPrioritas[$i][$k];
                           
                        ?>
                                    @endfor
                                    <?php 
                               $jmlhRata[$i]=$jumlah[$i]/$rataPrioritas[$i];
                            ?>
                                    <td> {{ round($jumlah[$i],2)    }}</td>

                                    <td> {{ round($jmlhRata[$i],2)    }}</td>
                                    <td></td>
                                    <td></td>
                                    @endfor

                                    </tr>

                                    <?php
                            $lamda = array_sum($jmlhRata)/count($jmlhRata);
                            $ir =0.9   ;
                            $ci= ($lamda-4)/(4-1);
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

                                    </tr>
                        </tbody>

                    </table>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="d-none">
        <div class="row">
            <div class="col-12">
                <div class="card-box ">
                    <h4 class="header-title">matriks perbandingan Fuzzy AHP Responden Profile </h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>

                                    <th rowspan="2">Kriteria</th>
                                    <th colspan="3">travel</th>
                                    <th colspan="3">game</th>
                                    <th colspan="3">video</th>
                                    <th colspan="3">fotograpi</th>
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
                                </tr>
                                @for ($j=0 ;$j<count($hobi); $j++) <tr>
                                    <td>
                                        @if($j==0) travel
                                        @elseif($j==1) game
                                        @elseif($j==2)video
                                        @elseif($j==3)fotograpi

                                        @endif
                                    </td>
                                    @for ($k=0 ; $k<count($hobi[$j]); $k++) <td>
                                        {{ round($matrixFuzzy[$j][$k][0],2)}}
                                        </td>
                                        <td> {{ round($matrixFuzzy[$j][$k][1],2)}}</td>
                                        <td> {{ round($matrixFuzzy[$j][$k][2],2)}}</td>

                                        <?php                          
                                   
                             
                                   

                                    $hasilKaliMF[$j][$k][0]=$matrixFuzzy[$j][$k][0];
                                    $hasilKaliMF[$j][$k][1]=$matrixFuzzy[$j][$k][1];
                                    $hasilKaliMF[$j][$k][2]=$matrixFuzzy[$j][$k][2];
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
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title">matriks perbandingan Fuzzy AHP Responden Profile</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <tr>

                                <th rowspan="2">Kriteria</th>
                                <th colspan="3">travel</th>
                                <th colspan="3">game</th>
                                <th colspan="3">video</th>
                                <th colspan="3">fotograpi</th>
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
                            </tr>
                            @for ($i=0 ;$i<count($hasilKali); $i++) <tr>
                                <td>
                                    @if($i==0) travel
                                    @elseif($i==1) game
                                    @elseif($i==2)video
                                    @elseif($i==3)fotograpi

                                    @endif
                                </td>
                                @for ($k=0 ; $k<count($hasilKali[$i]); $k++) <td> {{ round($hasilKaliMF[$i][$k][0],2)}}
                                    </td>
                                    <td> {{ round($hasilKaliMF[$i][$k][1],2)}}</td>
                                    <td> {{ round($hasilKaliMF[$i][$k][2],2)}}</td>
                                    <?php 
                                    $hasilpangkatiMF[$i][$k][0] = pow($hasilKaliMF[$i][$k][0], 1);
                                    $hasilpangkatiMF[$i][$k][1] = pow($hasilKaliMF[$i][$k][1], 1);
                                    $hasilpangkatiMF[$i][$k][2] = pow($hasilKaliMF[$i][$k][2], 1);
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
                                <th colspan="3">travel</th>
                                <th colspan="3">game</th>
                                <th colspan="3">video</th>
                                <th colspan="3">fotograpi</th>
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
                            </tr>
                            @for ($i=0 ;$i<count($hasilpangkatiMF ); $i++) <tr>
                                <td>
                                    @if($i==0) travel
                                    @elseif($i==1) game
                                    @elseif($i==2)video
                                    @elseif($i==3)fotograpi

                                    @endif
                                </td>
                                @for ($k=0 ; $k<count($hasilpangkatiMF[$i]); $k++) <td>
                                    {{ round($hasilpangkatiMF[$i][$k][0],2)    }}

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
                <h4 class="header-title">2. Menentukan nilai sintesis fuzzy </h4>
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
                            @for ($i=0 ;$i<count($jP ); $i++) <tr>
                                <td>
                                    @if($i==0) travel
                                    <?php 
                                        $jumlah [0]=0;
                                        $jumlah [1]=0;
                                        $jumlah [2]=0;
                                    ?>
                                    @elseif($i==1) game
                                    @elseif($i==2)video
                                    @elseif($i==3)fotograpi
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
                                    <td> {{round($jumlah[1],5) }} </td>
                                    <td> {{round($jumlah[2],5) }} </td>
                                    <?php 
                                        $seperJumlah [0]=1/$jumlah[0];
                                        $seperJumlah [1]=1/$jumlah[1];
                                        $seperJumlah [2]=1/$jumlah[2];
                                    ?>
                                </tr>
                                <tr>
                                    <td> 1/ Jumlah </td>
                                    <td> {{ round($seperJumlah[0] ,5)}} </td>
                                    <td> {{round($seperJumlah[1],5) }} </td>
                                    <td> {{round($seperJumlah[2],5) }} </td>
                                    <?php 
                                          $seperJumlahBalik =array_reverse($seperJumlah);
                                        ?>
                                </tr>
                                <tr>
                                    <td> DIBALIK </td>
                                    <td> {{ round($seperJumlahBalik[0] ,5)}} </td>
                                    <td> {{round($seperJumlahBalik[1],5) }} </td>
                                    <td> {{round($seperJumlahBalik[2],5) }} </td>

                                </tr>

                        </tbody>

                    </table>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title">HASIL Si </h4>
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
                            @for ($i=0 ;$i<count($jP ); $i++) <tr>
                                <td>
                                    @if($i==0) travel
                                    <?php 
                                        $jumlah [0]=0;
                                        $jumlah [1]=0;
                                        $jumlah [2]=0;
                                    ?>
                                    @elseif($i==1) game
                                    @elseif($i==2)video
                                    @elseif($i==3)fotograpi

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
            
           
            for($i=0 ; $i<3 ; $i++){
                
                if($hasilSi[0][1]>$hasilSi[$i+1][1]){
                    $vektor[0][$i] = 1;
                } else if($hasilSi[$i+1][0]>$hasilSi[0][2]){
                    $vektor[0][$i] = 0;
                } else {
                    $vektor[0][$i]=($hasilSi[$i+1][0]-$hasilSi[0][2])/(($hasilSi[0][1]-$hasilSi[0][2])-($hasilSi[$i+1][1]-$hasilSi[$i+1][0]));
                }
                }

            for($i=0 ,$j=0; $i<4 ; $i++){    
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
                for($i=0 ,$j=0; $i<4 ; $i++){    
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
                for($i=0 ,$j=0; $i<3 ; $i++){   
                   
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
                            
           
        ?>

    </div>
    <div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title">Nilai Vektor </h4>
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

                                <td> v(S3 >= S @if($key<2) {{$key+1}} @else {{$key+2}} @endif )</td> <td>{{$v}} </td>
                            </tr>


                            @endforeach
                            <tr>

                                <td></td>
                                <td> </td>
                            </tr>
                            @foreach($vektor[3] as $key => $v)
                            <tr>

                                <td> v(S4 >= S @if($key<3) {{$key+1}} @else {{$key+2}} @endif )</td> <td>{{$v}} </td>
                            </tr>
                            @endforeach




                        </tbody>

                    </table>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->


    </div>


    <div class="row">

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

                                <td>V (S1 ≥ S2,S3,S4)</td>
                                <td>{{ min($vektor[0])}} </td>
                            </tr>
                            <tr>

                                <td>V (S2 ≥ S1,S3,S4)</td>
                                <td>{{ min($vektor[1])}} </td>
                            </tr>
                            <tr>

                                <td>V (S3 ≥ S1,S2,S4)</td>
                                <td>{{ min($vektor[2])}} </td>
                            </tr>
                            <tr>

                                <td>V (S4 ≥ S1,S2,S3)</td>
                                <td>{{ min($vektor[3])}} </td>
                            </tr>
                            <tr>
                                <?php 
                                    $minVektor = [ min($vektor[0]), min($vektor[1]), min($vektor[2]), min($vektor[3])];
                                    $totalminVektor=array_sum($minVektor);

                                    foreach($minVektor as $key => $a){
                                        $normalisasiBobotHobi[$key]=$a/$totalminVektor;
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

    </div>
    <div class="row">
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
                                <td>travel</td>
                                <td>{{ $normalisasiBobotHobi[0]}} </td>
                            </tr>
                            <tr>

                                <td>game</td>
                                <td>{{ $normalisasiBobotHobi[1]}} </td>
                            </tr>
                            <tr>

                                <td>video</td>
                                <td>{{ $normalisasiBobotHobi[2]}} </td>
                            </tr>
                            <tr>

                                <td>fotografi</td>
                                <td>{{ $normalisasiBobotHobi[3]}} </td>
                            </tr>
                            <tr>
                                <?php 
                                  
                                    $maxBobot =max($normalisasiBobotHobi);

                                 
                                ?>
                                <td>Max</td>
                                <td>{{ $maxBobot}} </td>
                            </tr>



                        </tbody>

                    </table>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->

    </div>


    <h4 class="header-title"> Alternatif Job</h4>

    <div class="d-none">
        <div class="row">
            <div class="col-12">
                <div class="card-box ">
                    <h4 class="header-title">Responden</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>


                                    <th>Kriteria</th>
                                    <th>rapat</th>
                                    <th>fitur</th>
                                    <th>email</th>
                                    <th>reading</th>
                                </tr>
                            </thead>
                            <tbody>

                                @for ($j=0 ;$j<count($job); $j++) <tr>
                                    <td>
                                        @if($j==0) rapat
                                        @elseif($j==1) fitur
                                        @elseif($j==2)email
                                        @elseif($j==3)reading

                                        @endif
                                    </td>
                                    @for ($k=0 ; $k<count($job[$j]); $k++) <td> {{ $job[$j][$k]}}</td>

                                        <?php
                                    if($job[$j][$k]==1){
                                        $matrixFuzzy[$j][$k][0]=1;
                                        $matrixFuzzy[$j][$k][1]=1;
                                        $matrixFuzzy[$j][$k][2]=1;
                                    }
                                    else if($job[$j][$k]==2){
                                        $matrixFuzzy[$j][$k][0]=1/2;
                                        $matrixFuzzy[$j][$k][1]=1;
                                        $matrixFuzzy[$j][$k][2]=3/2;
                                    }
                                    else if($job[$j][$k]==3){
                                        $matrixFuzzy[$j][$k][0]=1;
                                        $matrixFuzzy[$j][$k][1]=3/2;
                                        $matrixFuzzy[$j][$k][2]=2;
                                    }
                                    else if($job[$j][$k]==4){
                                        $matrixFuzzy[$j][$k][0]=3/2;
                                        $matrixFuzzy[$j][$k][1]=2;
                                        $matrixFuzzy[$j][$k][2]=5/2;
                                    }
                                    else if($job[$j][$k]==5){
                                        $matrixFuzzy[$j][$k][0]=2;
                                        $matrixFuzzy[$j][$k][1]=5/2;
                                        $matrixFuzzy[$j][$k][2]=3;
                                    }
                                    else if($job[$j][$k]==6){
                                        $matrixFuzzy[$j][$k][0]=5/2;
                                        $matrixFuzzy[$j][$k][1]=3;
                                        $matrixFuzzy[$j][$k][2]=7/2;
                                    } 
                                    else if($job[$j][$k]==7){
                                        $matrixFuzzy[$j][$k][0]=3;
                                        $matrixFuzzy[$j][$k][1]=7/2;
                                        $matrixFuzzy[$j][$k][2]=4;
                                    }
                                    else if($job[$j][$k]==8){
                                        $matrixFuzzy[$j][$k][0]=7/2;
                                        $matrixFuzzy[$j][$k][1]=4;
                                        $matrixFuzzy[$j][$k][2]=9/2;
                                    }
                                    else if($job[$j][$k]==9){
                                        $matrixFuzzy[$j][$k][0]=4;
                                        $matrixFuzzy[$j][$k][1]=9/2;
                                        $matrixFuzzy[$j][$k][2]=9/2;
                                    }
                                    else if(round($job[$j][$k],2)==0.5){
                                        $matrixFuzzy[$j][$k][0]=2/3;
                                        $matrixFuzzy[$j][$k][1]=1;
                                        $matrixFuzzy[$j][$k][2]=2;
                                    }
                                    else if(round($job[$j][$k],2)==0.33){
                                        $matrixFuzzy[$j][$k][0]=1/2;
                                        $matrixFuzzy[$j][$k][1]=2/3;
                                        $matrixFuzzy[$j][$k][2]=1;
                                    }
                                    else if(round($job[$j][$k],2)==0.25){
                                        $matrixFuzzy[$j][$k][0]=2/5;
                                        $matrixFuzzy[$j][$k][1]=1/2;
                                        $matrixFuzzy[$j][$k][2]=2/3;
                                    }
                                    else if(round($job[$j][$k],2)==0.2){
                                        $matrixFuzzy[$j][$k][0]=1/3;
                                        $matrixFuzzy[$j][$k][1]=2/5;
                                        $matrixFuzzy[$j][$k][2]=1/2;
                                    }
                                    else if(round($job[$j][$k],2)==0.17){
                                        $matrixFuzzy[$j][$k][0]=2/7;
                                        $matrixFuzzy[$j][$k][1]=1/3;
                                        $matrixFuzzy[$j][$k][2]=2/5;
                                    }
                                    
                                    else if(round($job[$j][$k],2)==0.14){
                                        $matrixFuzzy[$j][$k][0]=1/4;
                                        $matrixFuzzy[$j][$k][1]=2/7;
                                        $matrixFuzzy[$j][$k][2]=1/3;
                                    }
                                    else if(round($job[$j][$k],2)==0.13){
                                        $matrixFuzzy[$j][$k][0]=2/9;
                                        $matrixFuzzy[$j][$k][1]=1/4;
                                        $matrixFuzzy[$j][$k][2]=1/3;
                                    }
                                    else if(round($job[$j][$k],2)==0.11){
                                        $matrixFuzzy[$j][$k][0]=2/9;
                                        $matrixFuzzy[$j][$k][1]=2/9;
                                        $matrixFuzzy[$j][$k][2]=1/4;
                                    }
                                    
                                    
                                  
                                        $hasilKali[$j][$k]=1;    
                                

                                    $hasilKali[$j][$k]*=$job[$j][$k];
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
    </div>
    <!-- end row -->
    <div class="d-none">
        <div class="row">
            <div class="col-12">
                <div class="card-box ">
                    <h4 class="header-title">Perkalian Kriteria </h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>

                                    <th>Kriteria</th>
                                    <th>rapat</th>
                                    <th>fitur</th>
                                    <th>email</th>
                                    <th>reading</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i=0 ;$i<count($hasilKali); $i++) <tr>
                                    <td>
                                        @if($i==0) rapat
                                        @elseif($i==1) fitur
                                        @elseif($i==2)email
                                        @elseif($i==3)reading

                                        @endif
                                    </td>
                                    @for ($k=0 ; $k<count($hasilKali[$i]); $k++) <td> {{ round($hasilKali[$i][$k],2)}}
                                        </td>
                                        <?php 
                                    $hasilpangkat[$i][$k] = pow($hasilKali[$i][$k], 1);
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
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title"> Menentukan matriks perbandingan AHP</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>

                                <th>Kriteria</th>
                                <th>rapat</th>
                                <th>fitur</th>
                                <th>email</th>
                                <th>reading</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i=0 ;$i<count($hasilpangkat); $i++) <tr>
                                <td>
                                    @if($i==0) rapat
                                    @elseif($i==1) fitur
                                    @elseif($i==2)email
                                    @elseif($i==3)reading

                                    @endif
                                </td>
                                @for ($k=0 ; $k<count($hasilpangkat[$i]); $k++) <td>
                                    {{ round($hasilpangkat[$i][$k],2)    }}
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

    <div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title"> Normalisasi matriks
                </h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kriteria</th>
                                <th>rapat</th>
                                <th>fitur</th>
                                <th>email</th>
                                <th>reading</th>
                                <th>Rata-Rata</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i=0 ;$i<count($prioritas); $i++) <tr>
                                <td>
                                    @if($i==0) rapat
                                    @elseif($i==1) fitur
                                    @elseif($i==2)email
                                    @elseif($i==3)reading

                                    @endif
                                </td>
                                @for ($k=0 ; $k<count($prioritas[$i]); $k++) <td> {{ round($prioritas[$i][$k],4)    }}
                                    </td>
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

    <div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title">Hasil prioritas </h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kriteria</th>
                                <th>rapat</th>
                                <th>fitur</th>
                                <th>email</th>
                                <th>reading</th>
                                <th>jumlah perbaris </th>
                                <th> jumlah perbaris/nilai rata-rata </th>
                                <th></th>
                                <th></th>



                            </tr>
                        </thead>
                        <tbody>
                            @for ($i=0 ;$i<count($hasilPrioritas); $i++) <tr>
                                <td>

                                </td>
                                <?php $jumlah[$i] =0; ?>
                                @for ($k=0 ; $k<count($hasilPrioritas[$i]); $k++) <td>
                                    {{ round($hasilPrioritas[$i][$k],2)    }}
                                    </td>
                                    <?php 
                            $jumlah[$i]+= $hasilPrioritas[$i][$k];
                           
                        ?>
                                    @endfor
                                    <?php 
                               $jmlhRata[$i]=$jumlah[$i]/$rataPrioritas[$i];
                            ?>
                                    <td> {{ round($jumlah[$i],2)    }}</td>

                                    <td> {{ round($jmlhRata[$i],2)    }}</td>
                                    <td></td>
                                    <td></td>
                                    @endfor

                                    </tr>

                                    <?php
                            $lamda = array_sum($jmlhRata)/count($jmlhRata);
                            $ir =0.9   ;
                            $ci= ($lamda-4)/(4-1);
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

                                    </tr>
                        </tbody>

                    </table>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="d-none">
        <div class="row">
            <div class="col-12">
                <div class="card-box ">
                    <h4 class="header-title">matriks perbandingan Fuzzy AHP Responden Profile </h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>


                                    <th rowspan="2">Kriteria</th>
                                    <th colspan="3">rapat</th>
                                    <th colspan="3">fitur</th>
                                    <th colspan="3">email</th>
                                    <th colspan="3">reading</th>
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
                                </tr>
                                @for ($j=0 ;$j<count($job); $j++) <tr>
                                    <td>
                                        @if($i==0) rapat
                                        @elseif($i==1) fitur
                                        @elseif($i==2)email
                                        @elseif($i==3)reading

                                        @endif
                                    </td>
                                    @for ($k=0 ; $k<count($job[$j]); $k++) <td>
                                        {{ round($matrixFuzzy[$j][$k][0],2)}}
                                        </td>
                                        <td> {{ round($matrixFuzzy[$j][$k][1],2)}}</td>
                                        <td> {{ round($matrixFuzzy[$j][$k][2],2)}}</td>

                                        <?php                          
                                   
                             
                                   

                                    $hasilKaliMF[$j][$k][0]=$matrixFuzzy[$j][$k][0];
                                    $hasilKaliMF[$j][$k][1]=$matrixFuzzy[$j][$k][1];
                                    $hasilKaliMF[$j][$k][2]=$matrixFuzzy[$j][$k][2];
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
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title">matriks perbandingan Fuzzy AHP Responden Profile</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <tr>
                                <th rowspan="2">Kriteria</th>
                                <th colspan="3">rapat</th>
                                <th colspan="3">fitur</th>
                                <th colspan="3">email</th>
                                <th colspan="3">reading</th>
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
                            </tr>
                            @for ($i=0 ;$i<count($hasilKali); $i++) <tr>
                                <td>
                                    @if($i==0) rapat
                                    @elseif($i==1) fitur
                                    @elseif($i==2)email
                                    @elseif($i==3)reading

                                    @endif
                                </td>
                                @for ($k=0 ; $k<count($hasilKali[$i]); $k++) <td> {{ round($hasilKaliMF[$i][$k][0],2)}}
                                    </td>
                                    <td> {{ round($hasilKaliMF[$i][$k][1],2)}}</td>
                                    <td> {{ round($hasilKaliMF[$i][$k][2],2)}}</td>
                                    <?php 
                                    $hasilpangkatiMF[$i][$k][0] = pow($hasilKaliMF[$i][$k][0], 1);
                                    $hasilpangkatiMF[$i][$k][1] = pow($hasilKaliMF[$i][$k][1], 1);
                                    $hasilpangkatiMF[$i][$k][2] = pow($hasilKaliMF[$i][$k][2], 1);
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
                                <th colspan="3">rapat</th>
                                <th colspan="3">fitur</th>
                                <th colspan="3">email</th>
                                <th colspan="3">reading</th>
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
                            </tr>
                            @for ($i=0 ;$i<count($hasilpangkatiMF ); $i++) <tr>
                                <td>
                                    @if($i==0) rapat
                                    @elseif($i==1) fitur
                                    @elseif($i==2)email
                                    @elseif($i==3)reading

                                    @endif
                                </td>
                                @for ($k=0 ; $k<count($hasilpangkatiMF[$i]); $k++) <td>
                                    {{ round($hasilpangkatiMF[$i][$k][0],2)    }}

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
                <h4 class="header-title">2. Menentukan nilai sintesis fuzzy </h4>
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
                            @for ($i=0 ;$i<count($jP ); $i++) <tr>
                                <td>

                                    @if($i==0) rapat
                                    <?php 
                                        $jumlah [0]=0;
                                        $jumlah [1]=0;
                                        $jumlah [2]=0;
                                    ?>
                                    @elseif($i==1) fitur
                                    @elseif($i==2)email
                                    @elseif($i==3)reading

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
                                    <td> {{round($jumlah[1],5) }} </td>
                                    <td> {{round($jumlah[2],5) }} </td>
                                    <?php 
                                        $seperJumlah [0]=1/$jumlah[0];
                                        $seperJumlah [1]=1/$jumlah[1];
                                        $seperJumlah [2]=1/$jumlah[2];
                                    ?>
                                </tr>
                                <tr>
                                    <td> 1/ Jumlah </td>
                                    <td> {{ round($seperJumlah[0] ,5)}} </td>
                                    <td> {{round($seperJumlah[1],5) }} </td>
                                    <td> {{round($seperJumlah[2],5) }} </td>
                                    <?php 
                                          $seperJumlahBalik =array_reverse($seperJumlah);
                                        ?>
                                </tr>
                                <tr>
                                    <td> DIBALIK </td>
                                    <td> {{ round($seperJumlahBalik[0] ,5)}} </td>
                                    <td> {{round($seperJumlahBalik[1],5) }} </td>
                                    <td> {{round($seperJumlahBalik[2],5) }} </td>

                                </tr>

                        </tbody>

                    </table>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title">HASIL Si </h4>
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
                            @for ($i=0 ;$i<count($jP ); $i++) <tr>
                                <td> @if($i==0) rapat
                                    <?php 
                                        $jumlah [0]=0;
                                        $jumlah [1]=0;
                                        $jumlah [2]=0;
                                    ?>
                                    @elseif($i==1) fitur
                                    @elseif($i==2)email
                                    @elseif($i==3)reading

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
            
           
            for($i=0 ; $i<3 ; $i++){
                
                if($hasilSi[0][1]>$hasilSi[$i+1][1]){
                    $vektor[0][$i] = 1;
                } else if($hasilSi[$i+1][0]>$hasilSi[0][2]){
                    $vektor[0][$i] = 0;
                } else {
                    $vektor[0][$i]=($hasilSi[$i+1][0]-$hasilSi[0][2])/(($hasilSi[0][1]-$hasilSi[0][2])-($hasilSi[$i+1][1]-$hasilSi[$i+1][0]));
                }
                }

            for($i=0 ,$j=0; $i<4 ; $i++){    
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
                for($i=0 ,$j=0; $i<4 ; $i++){    
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
                for($i=0 ,$j=0; $i<3 ; $i++){   
                   
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
                            
           
        ?>

    </div>
    <div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title">Nilai Vektor </h4>
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

                                <td> v(S3 >= S @if($key<2) {{$key+1}} @else {{$key+2}} @endif )</td> <td>{{$v}} </td>
                            </tr>


                            @endforeach
                            <tr>

                                <td></td>
                                <td> </td>
                            </tr>
                            @foreach($vektor[3] as $key => $v)
                            <tr>

                                <td> v(S4 >= S @if($key<3) {{$key+1}} @else {{$key+2}} @endif )</td> <td>{{$v}} </td>
                            </tr>
                            @endforeach




                        </tbody>

                    </table>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->


    </div>


    <div class="row">

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

                                <td>V (S1 ≥ S2,S3,S4)</td>
                                <td>{{ min($vektor[0])}} </td>
                            </tr>
                            <tr>

                                <td>V (S2 ≥ S1,S3,S4)</td>
                                <td>{{ min($vektor[1])}} </td>
                            </tr>
                            <tr>

                                <td>V (S3 ≥ S1,S2,S4)</td>
                                <td>{{ min($vektor[2])}} </td>
                            </tr>
                            <tr>

                                <td>V (S4 ≥ S1,S2,S3)</td>
                                <td>{{ min($vektor[3])}} </td>
                            </tr>
                            <tr>
                                <?php 
                                    $minVektor = [ min($vektor[0]), min($vektor[1]), min($vektor[2]), min($vektor[3])];
                                    $totalminVektor=array_sum($minVektor);

                                    foreach($minVektor as $key => $a){
                                        $normalisasiBobotJob[$key]=$a/$totalminVektor;
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

    </div>
    <div class="row">
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
                                <td>rapat</td>
                                <td>{{ $normalisasiBobotJob[0]}} </td>
                            </tr>
                            <tr>

                                <td>fitur</td>
                                <td>{{ $normalisasiBobotJob[1]}} </td>
                            </tr>
                            <tr>

                                <td>email</td>
                                <td>{{ $normalisasiBobotJob[2]}} </td>
                            </tr>
                            <tr>

                                <td>reading</td>
                                <td>{{ $normalisasiBobotJob[3]}} </td>
                            </tr>
                            <tr>
                                <?php 
                                  
                                    $maxBobot =max($normalisasiBobotJob);

                                 
                                ?>
                                <td>Max</td>
                                <td>{{ $maxBobot}} </td>
                            </tr>



                        </tbody>

                    </table>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->

    </div>


    <h4 class="header-title"> Alternatif SOCIAL NETWORKING</h4>

    <div class="d-none">
        <div class="row">
            <div class="col-12">
                <div class="card-box ">
                    <h4 class="header-title">Responden</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>



                                    <th>Kriteria</th>
                                    <th>koneksi</th>
                                    <th>sosmed</th>
                                    <th>shopping</th>
                                    <th>akun</th>
                                </tr>
                            </thead>
                            <tbody>

                                @for ($j=0 ;$j<count($sn); $j++) <tr>
                                    <td>
                                        @if($j==0) koneksi
                                        @elseif($j==1) sosmed
                                        @elseif($j==2)shopping
                                        @elseif($j==3)akun

                                        @endif
                                    </td>
                                    @for ($k=0 ; $k<count($sn[$j]); $k++) <td> {{ $sn[$j][$k]}}</td>

                                        <?php
                                    if($sn[$j][$k]==1){
                                        $matrixFuzzy[$j][$k][0]=1;
                                        $matrixFuzzy[$j][$k][1]=1;
                                        $matrixFuzzy[$j][$k][2]=1;
                                    }
                                    else if($sn[$j][$k]==2){
                                        $matrixFuzzy[$j][$k][0]=1/2;
                                        $matrixFuzzy[$j][$k][1]=1;
                                        $matrixFuzzy[$j][$k][2]=3/2;
                                    }
                                    else if($sn[$j][$k]==3){
                                        $matrixFuzzy[$j][$k][0]=1;
                                        $matrixFuzzy[$j][$k][1]=3/2;
                                        $matrixFuzzy[$j][$k][2]=2;
                                    }
                                    else if($sn[$j][$k]==4){
                                        $matrixFuzzy[$j][$k][0]=3/2;
                                        $matrixFuzzy[$j][$k][1]=2;
                                        $matrixFuzzy[$j][$k][2]=5/2;
                                    }
                                    else if($sn[$j][$k]==5){
                                        $matrixFuzzy[$j][$k][0]=2;
                                        $matrixFuzzy[$j][$k][1]=5/2;
                                        $matrixFuzzy[$j][$k][2]=3;
                                    }
                                    else if($sn[$j][$k]==6){
                                        $matrixFuzzy[$j][$k][0]=5/2;
                                        $matrixFuzzy[$j][$k][1]=3;
                                        $matrixFuzzy[$j][$k][2]=7/2;
                                    } 
                                    else if($sn[$j][$k]==7){
                                        $matrixFuzzy[$j][$k][0]=3;
                                        $matrixFuzzy[$j][$k][1]=7/2;
                                        $matrixFuzzy[$j][$k][2]=4;
                                    }
                                    else if($sn[$j][$k]==8){
                                        $matrixFuzzy[$j][$k][0]=7/2;
                                        $matrixFuzzy[$j][$k][1]=4;
                                        $matrixFuzzy[$j][$k][2]=9/2;
                                    }
                                    else if($sn[$j][$k]==9){
                                        $matrixFuzzy[$j][$k][0]=4;
                                        $matrixFuzzy[$j][$k][1]=9/2;
                                        $matrixFuzzy[$j][$k][2]=9/2;
                                    }
                                    else if(round($sn[$j][$k],2)==0.5){
                                        $matrixFuzzy[$j][$k][0]=2/3;
                                        $matrixFuzzy[$j][$k][1]=1;
                                        $matrixFuzzy[$j][$k][2]=2;
                                    }
                                    else if(round($sn[$j][$k],2)==0.33){
                                        $matrixFuzzy[$j][$k][0]=1/2;
                                        $matrixFuzzy[$j][$k][1]=2/3;
                                        $matrixFuzzy[$j][$k][2]=1;
                                    }
                                    else if(round($sn[$j][$k],2)==0.25){
                                        $matrixFuzzy[$j][$k][0]=2/5;
                                        $matrixFuzzy[$j][$k][1]=1/2;
                                        $matrixFuzzy[$j][$k][2]=2/3;
                                    }
                                    else if(round($sn[$j][$k],2)==0.2){
                                        $matrixFuzzy[$j][$k][0]=1/3;
                                        $matrixFuzzy[$j][$k][1]=2/5;
                                        $matrixFuzzy[$j][$k][2]=1/2;
                                    }
                                    else if(round($sn[$j][$k],2)==0.17){
                                        $matrixFuzzy[$j][$k][0]=2/7;
                                        $matrixFuzzy[$j][$k][1]=1/3;
                                        $matrixFuzzy[$j][$k][2]=2/5;
                                    }
                                    
                                    else if(round($sn[$j][$k],2)==0.14){
                                        $matrixFuzzy[$j][$k][0]=1/4;
                                        $matrixFuzzy[$j][$k][1]=2/7;
                                        $matrixFuzzy[$j][$k][2]=1/3;
                                    }
                                    else if(round($sn[$j][$k],2)==0.13){
                                        $matrixFuzzy[$j][$k][0]=2/9;
                                        $matrixFuzzy[$j][$k][1]=1/4;
                                        $matrixFuzzy[$j][$k][2]=1/3;
                                    }
                                    else if(round($sn[$j][$k],2)==0.11){
                                        $matrixFuzzy[$j][$k][0]=2/9;
                                        $matrixFuzzy[$j][$k][1]=2/9;
                                        $matrixFuzzy[$j][$k][2]=1/4;
                                    }
                                    
                                    
                                  
                                        $hasilKali[$j][$k]=1;    
                                

                                    $hasilKali[$j][$k]*=$sn[$j][$k];
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
    </div>
    <!-- end row -->
    <div class="d-none">
        <div class="row">
            <div class="col-12">
                <div class="card-box ">
                    <h4 class="header-title">Perkalian Kriteria </h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Kriteria</th>
                                    <th>koneksi</th>
                                    <th>sosmed</th>
                                    <th>shopping</th>
                                    <th>akun</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i=0 ;$i<count($hasilKali); $i++) <tr>
                                    <td>
                                        @if($i==0) koneksi
                                        @elseif($i==1) sosmed
                                        @elseif($i==2)shopping
                                        @elseif($i==3)akun

                                        @endif
                                    </td>
                                    @for ($k=0 ; $k<count($hasilKali[$i]); $k++) <td> {{ round($hasilKali[$i][$k],2)}}
                                        </td>
                                        <?php 
                                    $hasilpangkat[$i][$k] = pow($hasilKali[$i][$k], 1);
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
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title"> Menentukan matriks perbandingan AHP</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kriteria</th>
                                <th>koneksi</th>
                                <th>sosmed</th>
                                <th>shopping</th>
                                <th>akun</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i=0 ;$i<count($hasilpangkat); $i++) <tr>
                                <td>
                                    @if($i==0) koneksi
                                    @elseif($i==1) sosmed
                                    @elseif($i==2)shopping
                                    @elseif($i==3)akun
                                    @endif
                                </td>
                                @for ($k=0 ; $k<count($hasilpangkat[$i]); $k++) <td>
                                    {{ round($hasilpangkat[$i][$k],2)    }}
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

    <div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title"> Normalisasi matriks
                </h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kriteria</th>
                                <th>koneksi</th>
                                <th>sosmed</th>
                                <th>shopping</th>
                                <th>akun</th>
                                <th>Rata-Rata</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i=0 ;$i<count($prioritas); $i++) <tr>
                                <td>
                                    @if($i==0) koneksi
                                    @elseif($i==1) sosmed
                                    @elseif($i==2)shopping
                                    @elseif($i==3)akun
                                    @endif
                                </td>
                                @for ($k=0 ; $k<count($prioritas[$i]); $k++) <td> {{ round($prioritas[$i][$k],4)    }}
                                    </td>
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

    <div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title">Hasil prioritas </h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kriteria</th>
                                <th>koneksi</th>
                                <th>sosmed</th>
                                <th>shopping</th>
                                <th>akun</th>
                                <th>jumlah perbaris </th>
                                <th> jumlah perbaris/nilai rata-rata </th>
                                <th></th>
                                <th></th>



                            </tr>
                        </thead>
                        <tbody>
                            @for ($i=0 ;$i<count($hasilPrioritas); $i++) <tr>
                                <td>

                                </td>
                                <?php $jumlah[$i] =0; ?>
                                @for ($k=0 ; $k<count($hasilPrioritas[$i]); $k++) <td>
                                    {{ round($hasilPrioritas[$i][$k],2)    }}
                                    </td>
                                    <?php 
                            $jumlah[$i]+= $hasilPrioritas[$i][$k];
                           
                        ?>
                                    @endfor
                                    <?php 
                               $jmlhRata[$i]=$jumlah[$i]/$rataPrioritas[$i];
                            ?>
                                    <td> {{ round($jumlah[$i],2)    }}</td>

                                    <td> {{ round($jmlhRata[$i],2)    }}</td>
                                    <td></td>
                                    <td></td>
                                    @endfor

                                    </tr>

                                    <?php
                            $lamda = array_sum($jmlhRata)/count($jmlhRata);
                            $ir =0.9   ;
                            $ci= ($lamda-4)/(4-1);
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

                                    </tr>
                        </tbody>

                    </table>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="d-none">
        <div class="row">
            <div class="col-12">
                <div class="card-box ">
                    <h4 class="header-title">matriks perbandingan Fuzzy AHP Responden Profile </h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>



                                    <th rowspan="2">Kriteria</th>
                                    <th colspan="3">koneksi</th>
                                    <th colspan="3">sosmed</th>
                                    <th colspan="3">shopping</th>
                                    <th colspan="3">akun</th>
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
                                </tr>
                                @for ($j=0 ;$j<count($sn); $j++) <tr>
                                    <td>
                                        @if($i==0) koneksi
                                        @elseif($i==1) sosmed
                                        @elseif($i==2)shopping
                                        @elseif($i==3)akun
                                        @endif
                                    </td>
                                    @for ($k=0 ; $k<count($sn[$j]); $k++) <td>
                                        {{ round($matrixFuzzy[$j][$k][0],2)}}
                                        </td>
                                        <td> {{ round($matrixFuzzy[$j][$k][1],2)}}</td>
                                        <td> {{ round($matrixFuzzy[$j][$k][2],2)}}</td>

                                        <?php                          
                                   
                             
                                   

                                    $hasilKaliMF[$j][$k][0]=$matrixFuzzy[$j][$k][0];
                                    $hasilKaliMF[$j][$k][1]=$matrixFuzzy[$j][$k][1];
                                    $hasilKaliMF[$j][$k][2]=$matrixFuzzy[$j][$k][2];
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
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title">matriks perbandingan Fuzzy AHP Responden Profile</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <tr>

                                <th rowspan="2">Kriteria</th>
                                <th colspan="3">koneksi</th>
                                <th colspan="3">sosmed</th>
                                <th colspan="3">shopping</th>
                                <th colspan="3">akun</th>
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
                            </tr>
                            @for ($i=0 ;$i<count($hasilKali); $i++) <tr>
                                <td>
                                    @if($i==0) koneksi
                                    @elseif($i==1) sosmed
                                    @elseif($i==2)shopping
                                    @elseif($i==3)akun
                                    @endif
                                </td>
                                @for ($k=0 ; $k<count($hasilKali[$i]); $k++) <td> {{ round($hasilKaliMF[$i][$k][0],2)}}
                                    </td>
                                    <td> {{ round($hasilKaliMF[$i][$k][1],2)}}</td>
                                    <td> {{ round($hasilKaliMF[$i][$k][2],2)}}</td>
                                    <?php 
                                    $hasilpangkatiMF[$i][$k][0] = pow($hasilKaliMF[$i][$k][0], 1);
                                    $hasilpangkatiMF[$i][$k][1] = pow($hasilKaliMF[$i][$k][1], 1);
                                    $hasilpangkatiMF[$i][$k][2] = pow($hasilKaliMF[$i][$k][2], 1);
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
                                <th colspan="3">koneksi</th>
                                <th colspan="3">sosmed</th>
                                <th colspan="3">shopping</th>
                                <th colspan="3">akun</th>
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
                            </tr>
                            @for ($i=0 ;$i<count($hasilpangkatiMF ); $i++) <tr>
                                <td> @if($i==0) koneksi
                                    @elseif($i==1) sosmed
                                    @elseif($i==2)shopping
                                    @elseif($i==3)akun
                                    @endif
                                </td>
                                @for ($k=0 ; $k<count($hasilpangkatiMF[$i]); $k++) <td>
                                    {{ round($hasilpangkatiMF[$i][$k][0],2)    }}

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
                <h4 class="header-title">2. Menentukan nilai sintesis fuzzy </h4>
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
                            @for ($i=0 ;$i<count($jP ); $i++) <tr>
                                <td> @if($i==0) koneksi
                                    <?php 
                                        $jumlah [0]=0;
                                        $jumlah [1]=0;
                                        $jumlah [2]=0;
                                    ?>
                                    @elseif($i==1) sosmed
                                    @elseif($i==2)shopping
                                    @elseif($i==3)akun
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
                                    <td> {{round($jumlah[1],5) }} </td>
                                    <td> {{round($jumlah[2],5) }} </td>
                                    <?php 
                                        $seperJumlah [0]=1/$jumlah[0];
                                        $seperJumlah [1]=1/$jumlah[1];
                                        $seperJumlah [2]=1/$jumlah[2];
                                    ?>
                                </tr>
                                <tr>
                                    <td> 1/ Jumlah </td>
                                    <td> {{ round($seperJumlah[0] ,5)}} </td>
                                    <td> {{round($seperJumlah[1],5) }} </td>
                                    <td> {{round($seperJumlah[2],5) }} </td>
                                    <?php 
                                          $seperJumlahBalik =array_reverse($seperJumlah);
                                        ?>
                                </tr>
                                <tr>
                                    <td> DIBALIK </td>
                                    <td> {{ round($seperJumlahBalik[0] ,5)}} </td>
                                    <td> {{round($seperJumlahBalik[1],5) }} </td>
                                    <td> {{round($seperJumlahBalik[2],5) }} </td>

                                </tr>

                        </tbody>

                    </table>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title">HASIL Si </h4>
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
                            @for ($i=0 ;$i<count($jP ); $i++) <tr>
                                <td> @if($i==0) koneksi
                                    <?php 
                                        $jumlah [0]=0;
                                        $jumlah [1]=0;
                                        $jumlah [2]=0;
                                    ?>
                                    @elseif($i==1) sosmed
                                    @elseif($i==2)shopping
                                    @elseif($i==3)akun
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
            
           
            for($i=0 ; $i<3 ; $i++){
                
                if($hasilSi[0][1]>$hasilSi[$i+1][1]){
                    $vektor[0][$i] = 1;
                } else if($hasilSi[$i+1][0]>$hasilSi[0][2]){
                    $vektor[0][$i] = 0;
                } else {
                    $vektor[0][$i]=($hasilSi[$i+1][0]-$hasilSi[0][2])/(($hasilSi[0][1]-$hasilSi[0][2])-($hasilSi[$i+1][1]-$hasilSi[$i+1][0]));
                }
                }

            for($i=0 ,$j=0; $i<4 ; $i++){    
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
                for($i=0 ,$j=0; $i<4 ; $i++){    
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
                for($i=0 ,$j=0; $i<3 ; $i++){   
                   
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
                            
           
        ?>

    </div>
    <div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title">Nilai Vektor </h4>
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

                                <td> v(S3 >= S @if($key<2) {{$key+1}} @else {{$key+2}} @endif )</td> <td>{{$v}} </td>
                            </tr>


                            @endforeach
                            <tr>

                                <td></td>
                                <td> </td>
                            </tr>
                            @foreach($vektor[3] as $key => $v)
                            <tr>

                                <td> v(S4 >= S @if($key<3) {{$key+1}} @else {{$key+2}} @endif )</td> <td>{{$v}} </td>
                            </tr>
                            @endforeach




                        </tbody>

                    </table>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->


    </div>


    <div class="row">

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

                                <td>V (S1 ≥ S2,S3,S4)</td>
                                <td>{{ min($vektor[0])}} </td>
                            </tr>
                            <tr>

                                <td>V (S2 ≥ S1,S3,S4)</td>
                                <td>{{ min($vektor[1])}} </td>
                            </tr>
                            <tr>

                                <td>V (S3 ≥ S1,S2,S4)</td>
                                <td>{{ min($vektor[2])}} </td>
                            </tr>
                            <tr>

                                <td>V (S4 ≥ S1,S2,S3)</td>
                                <td>{{ min($vektor[3])}} </td>
                            </tr>
                            <tr>
                                <?php 
                                    $minVektor = [ min($vektor[0]), min($vektor[1]), min($vektor[2]), min($vektor[3])];
                                    $totalminVektor=array_sum($minVektor);

                                    foreach($minVektor as $key => $a){
                                        $normalisasiBobotSN[$key]=$a/$totalminVektor;
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

    </div>
    <div class="row">
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

                                <td>koneksi</td>
                                <td>{{ $normalisasiBobotSN[0]}} </td>
                            </tr>
                            <tr>

                                <td>sosmed</td>
                                <td>{{ $normalisasiBobotSN[1]}} </td>
                            </tr>
                            <tr>

                                <td>shopping</td>
                                <td>{{ $normalisasiBobotSN[2]}} </td>
                            </tr>
                            <tr>

                                <td>akun</td>
                                <td>{{ $normalisasiBobotSN[3]}} </td>
                            </tr>
                            <tr>
                                <?php 
                                  
                                    $maxBobot =max($normalisasiBobotSN);

                                 
                                ?>
                                <td>Max</td>
                                <td>{{ $maxBobot}} </td>
                            </tr>



                        </tbody>

                    </table>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->

    </div>

    <div class="row">
        <div class="col-12">
            <div class="card-box ">
                <h4 class="header-title">PERANGKINGAN FUZZY AHP PROFILE USER CRITERIA-ALTERNATIF
                </h4>
                <?php 
                    $rankProfile = [
                        [
                        "tipe"=>"Travel",
                        "nilai"=>$normalisasiBobotHobi[0]*$normalisasiBobotKriteria[0]
                        ],
                        [
                        "tipe"=>"Game",
                        "nilai"=>$normalisasiBobotHobi[1]*$normalisasiBobotKriteria[0]
                        ],
                        [
                        "tipe"=>"Video",
                        "nilai"=>$normalisasiBobotHobi[2]*$normalisasiBobotKriteria[0]
                        ],
                        [
                        "tipe"=>"Fotografi",
                        "nilai"=>$normalisasiBobotHobi[3]*$normalisasiBobotKriteria[0]
                        ],
                        [
                        "tipe"=>"Rapat",
                        "nilai"=>$normalisasiBobotJob[0]*$normalisasiBobotKriteria[1]
                        ],
                        [
                        "tipe"=>"Fitur",
                        "nilai"=>$normalisasiBobotJob[1]*$normalisasiBobotKriteria[1]
                        ],
                        [
                        "tipe"=>"Email",
                        "nilai"=>$normalisasiBobotJob[2]*$normalisasiBobotKriteria[1]
                        ],
                        [
                        "tipe"=>"Reading",
                        "nilai"=>$normalisasiBobotJob[3]*$normalisasiBobotKriteria[1]
                        ],
                        [
                        "tipe"=>"Koneksi",
                        "nilai"=>$normalisasiBobotSN[0]*$normalisasiBobotKriteria[2]
                        ],
                        [
                        "tipe"=>"Sosmed",
                        "nilai"=>$normalisasiBobotSN[1]*$normalisasiBobotKriteria[2]
                        ],
                        [
                        "tipe"=>"Shopping",
                        "nilai"=>$normalisasiBobotSN[2]*$normalisasiBobotKriteria[2]
                        ],
                        [
                        "tipe"=>"Akun",
                        "nilai"=>$normalisasiBobotSN[3]*$normalisasiBobotKriteria[2]
                        ]
                    ];

                ?>
                <div class="table-responsive">
                    <table class="table table-bordered ">
                        <thead>
                            <tr>

                                <th> </th>
                                <th> hobby</th>
                                <th>job</th>
                                <th> social</th>
                                <th> bobot</th>
                            </tr>
                            <tr>

                                <th> </th>
                                <th> {{$normalisasiBobotKriteria[0]}}</th>
                                <th>{{$normalisasiBobotKriteria[1]}}</th>
                                <th> {{$normalisasiBobotKriteria[2]}}</th>
                                <th> {{ array_sum($normalisasiBobotKriteria)}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>travel</td>
                                
                                <td>{{ $normalisasiBobotHobi[0]}} </td>
                                <td>0</td>

                                <td>0</td>
                                <td>{{ $rankProfile[0]['nilai']   }}</td>
                            </tr>
                            <tr>

                                <td>game</td>
                                <td>{{ $normalisasiBobotHobi[1]}} </td>
                                <td>0</td>

                                <td>0</td>
                                <td>{{ $rankProfile[1]['nilai']   }}</td>
                            </tr>
                            <tr>

                                <td>video</td>
                                <td>{{ $normalisasiBobotHobi[2]}} </td>
                                <td>0</td>

                                <td>0</td>
                                <td>{{ $rankProfile[2]['nilai']   }}</td>
                            </tr>
                            <tr>

                                <td>fotografi</td>
                                <td>{{ $normalisasiBobotHobi[3]}} </td>
                                <td>0</td>

                                <td>0</td>
                                <td>{{ $rankProfile[3]['nilai']   }}</td>
                            </tr>

                            <tr>
                                <td>rapat</td>
                                <td>0</td>
                                <td>{{ $normalisasiBobotJob[0]}} </td>

                                <td>0</td>
                                <td>{{ $rankProfile[4]['nilai']   }}</td>
                            </tr>
                            <tr>

                                <td>fitur</td>
                                <td>0</td>
                                <td>{{ $normalisasiBobotJob[1]}} </td>

                                <td>0</td>
                                <td>{{ $rankProfile[5]['nilai']   }}</td>
                            </tr>
                            <tr>

                                <td>email</td>
                                <td>0</td>

                                <td>{{ $normalisasiBobotJob[2]}} </td>
                                <td>0</td>
                                <td>{{ $rankProfile[6]['nilai']   }}</td>
                            </tr>
                            <tr>

                                <td>reading</td>
                                <td>0</td>

                                <td>{{ $normalisasiBobotJob[3]}} </td>
                                <td>0</td>
                                <td>{{ $rankProfile[7]['nilai']   }}</td>
                            </tr>
                            <tr>

                                <td>koneksi</td>

                                <td>0</td>

                                <td>0</td>
                                <td>{{ $normalisasiBobotSN[0]}} </td>
                                <td>{{ $rankProfile[8]['nilai']   }}</td>
                            </tr>
                            <tr>

                                <td>sosmed</td>
                                <td>0</td>

                                <td>0</td>
                                <td>{{ $normalisasiBobotSN[1]}} </td>
                                <td>{{ $rankProfile[9]['nilai']   }}</td>
                            </tr>
                            <tr>

                                <td>shopping</td>

                                <td>0</td>

                                <td>0</td>
                                <td>{{ $normalisasiBobotSN[2]}} </td>
                                <td>{{ $rankProfile[10]['nilai']   }}</td>
                            </tr>
                            <tr>

                                <td>akun</td>

                                <td>0</td>

                                <td>0</td>
                                <td>{{ $normalisasiBobotSN[3]}} </td>
                                <td>{{ $rankProfile[11]['nilai']   }}</td>
                            </tr>




                        </tbody>

                    </table>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->

    </div>
    <div class="row">
            <div class="col-12">
                <div class="card-box ">
                    <h4 class="header-title">PERANGKINGAN FUZZY AHP PROFILE USER CRITERIA-ALTERNATIF
                    </h4>
                 <?php 
                     foreach ($rankProfile as $key => $row) {
                                    $attack[$key]  = $row['nilai'];
                                  }

                                  // Sort the data with attack descending
                                  array_multisort($attack, SORT_DESC, $rankProfile);
                 ?>
                    <div class="table-responsive">
                        <table class="table table-bordered ">
                            <thead>
                                <tr>
    
                                    <th> No</th>
                                    <th> Alternatif</th>
                                    <th>Nilai</th>
                                </tr>
                               
                            </thead>
                            <tbody>
                                @foreach($rankProfile as $key => $item)
                                <tr>
                                    <td>{{$key+1}}</td>
                    
                                    <td>{{ $item['tipe']   }}</td>
                                    <td>{{ $item['nilai']   }}</td>
                                </tr>   
                                @endforeach 
                            </tbody>
    
                        </table>
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->
    
        </div>


        <?php
        unset($item);
        unset($keyone);
        unset($bobot);
        unset($i);
        unset($j);
        unset($k);
        unset($matrixFuzzy);
        unset($hasilKali);
        unset($hasilpangkat);
        unset($hpBaru);
        unset($totalHP);
        unset($prioritas);
        unset($rataPrioritas);
        unset($items);
        unset($hasilPrioritas);
        unset($jumlah);
        unset($jmlhRata);
        unset($lamda);
        unset($ir);
        unset($ci);
        unset($cr);
        unset($hasilpangkatiMF);
        unset($jP);
        unset($seperJumlah);
        unset($seperJumlahBalik);
        unset($hasilSi);
        unset($vektor);
        unset($v);
        unset($key);
        unset($minVektor);
        unset($totalminVektor);
        unset($a);
        unset($minVektor);
        
        unset($maxBobot);


        ?>
        {{-- <div class="d-none"> --}}
                <div class="d-none">

        
                        @foreach ($alternatif as $keyone => $item)
                    
                    
                        <?php
                                    $bobot = json_decode($item->alBobot);
                                ?>
                        <h4 class="header-title">alternatif {{ $item->alJenis}}</h4>
                    
                        @for($i=0; $i<count($bobot) ; $i++)
                         <div class="row">
                            <div class="col-12">
                                <div class="card-box ">
                                    <h4 class="header-title">RESPONDEN {{$i+1  }}</h4>
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
                                            @for ($i=0 ;$i<count($hasilKali); $i++) <tr>
                                                <td>
                                                        @if($i==0) S.Note 10
                                                        @elseif($i==1) Iphone XS
                                                        @elseif($i==2) O. F11
                                                        @elseif($i==3) O. Reno
                                                        @elseif($i==4)  Hua P30
                                                        @elseif($i==5)V. Z1 Pro
                                                        @elseif($i==6) V.  S1
                                                        @elseif($i==7)Redmi N7
                                                        @endif
                                                </td>
                                                @for ($k=0 ; $k<count($hasilKali[$i]); $k++) <td> {{ round($hasilKali[$i][$k],2)}}</td>
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
                                            @for ($i=0 ;$i<count($hasilpangkat); $i++) <tr>
                                                <td>
                                                        @if($i==0) S.Note 10
                                                        @elseif($i==1) Iphone XS
                                                        @elseif($i==2) O. F11
                                                        @elseif($i==3) O. Reno
                                                        @elseif($i==4)  Hua P30
                                                        @elseif($i==5)V. Z1 Pro
                                                        @elseif($i==6) V.  S1
                                                        @elseif($i==7)Redmi N7
                                                        @endif
                                                </td>
                                                @for ($k=0 ; $k<count($hasilpangkat[$i]); $k++) <td> {{ round($hasilpangkat[$i][$k],2)    }}
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
                    
                    <div class="row">
                        <div class="col-12">
                            <div class="card-box ">
                                <h4 class="header-title">prioritas </h4>
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
                                            @for ($i=0 ;$i<count($prioritas); $i++) <tr>
                                                <td>
                                                        @if($i==0) S.Note 10
                                                        @elseif($i==1) Iphone XS
                                                        @elseif($i==2) O. F11
                                                        @elseif($i==3) O. Reno
                                                        @elseif($i==4)  Hua P30
                                                        @elseif($i==5)V. Z1 Pro
                                                        @elseif($i==6) V.  S1
                                                        @elseif($i==7)Redmi N7
                                                        @endif
                                                </td>
                                                @for ($k=0 ; $k<count($prioritas[$i]); $k++) <td> {{ round($prioritas[$i][$k],2)    }}</td>
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
                    
                    <div class="row">
                        <div class="col-12">
                            <div class="card-box ">
                                <h4 class="header-title">Hasil prioritas </h4>
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
                                                <th>Jumlah Baris</th>
                                                <th>jumlah perbaris/rata-rata</th>
                    
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @for ($i=0 ;$i<count($hasilPrioritas); $i++) <tr>
                                                <td>
                                                        @if($i==0) S.Note 10
                                                        @elseif($i==1) Iphone XS
                                                        @elseif($i==2) O. F11
                                                        @elseif($i==3) O. Reno
                                                        @elseif($i==4)  Hua P30
                                                        @elseif($i==5)V. Z1 Pro
                                                        @elseif($i==6) V.  S1
                                                        @elseif($i==7)Redmi N7
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
                                                $ir =1.41;
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
                                                <th  rowspan="2">{{ $item->alJenis}}</th>
                                                <th colspan="3">S.Note 10</th>
                                                <th colspan="3">Iphone XS</th>
                                                <th colspan="3">O. F11</th>
                                                <th colspan="3">O. Reno</th>
                                                <th colspan="3">Hua P30</th>
                                                <th colspan="3">V. Z1 Pro</th>
                                                <th colspan="3">V.  S1</th>
                                                <th colspan="3">Redmi N7</th>
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
                                                @for ($k=0 ; $k<count($bobot[$i][$j]); $k++) <td> {{ round($matrixFuzzy[$i][$j][$k][0],2)}}
                                                    </td>
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
                                                        <th  rowspan="2">{{ $item->alJenis}}</th>
                                                        <th colspan="3">S.Note 10</th>
                                                        <th colspan="3">Iphone XS</th>
                                                        <th colspan="3">O. F11</th>
                                                        <th colspan="3">O. Reno</th>
                                                        <th colspan="3">Hua P30</th>
                                                        <th colspan="3">V. Z1 Pro</th>
                                                        <th colspan="3">V.  S1</th>
                                                        <th colspan="3">Redmi N7</th>
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
                                                            @if($i==0) S.Note 10
                                                            @elseif($i==1) Iphone XS
                                                            @elseif($i==2) O. F11
                                                            @elseif($i==3) O. Reno
                                                            @elseif($i==4)  Hua P30
                                                            @elseif($i==5)V. Z1 Pro
                                                            @elseif($i==6) V.  S1
                                                            @elseif($i==7)Redmi N7
                                                            @endif
                                                    </td>
                                                    @for ($k=0 ; $k<count($hasilKali[$i]); $k++) <td> {{ round($hasilKaliMF[$i][$k][0],2)}}
                                                        </td>
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
                                                        <th  rowspan="2">{{ $item->alJenis}}</th>
                                                        <th colspan="3">S.Note 10</th>
                                                        <th colspan="3">Iphone XS</th>
                                                        <th colspan="3">O. F11</th>
                                                        <th colspan="3">O. Reno</th>
                                                        <th colspan="3">Hua P30</th>
                                                        <th colspan="3">V. Z1 Pro</th>
                                                        <th colspan="3">V.  S1</th>
                                                        <th colspan="3">Redmi N7</th>
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
                                                @for ($i=0 ;$i<count($hasilpangkatiMF ); $i++) <tr>
                                                    <td>
                                                            @if($i==0) S.Note 10
                                                            @elseif($i==1) Iphone XS
                                                            @elseif($i==2) O. F11
                                                            @elseif($i==3) O. Reno
                                                            @elseif($i==4)  Hua P30
                                                            @elseif($i==5)V. Z1 Pro
                                                            @elseif($i==6) V.  S1
                                                            @elseif($i==7)Redmi N7
                                                            @endif
                                                    </td>
                                                    @for ($k=0 ; $k<count($hasilpangkatiMF[$i]); $k++) <td>
                                                        {{ round($hasilpangkatiMF[$i][$k][0],2)    }}
                    
                                                        <th> {{ round($hasilpangkatiMF[$i][$k][1],2)    }}
                    
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
                                    <h4 class="header-title">2. Menentukan nilai sintesis fuzzy </h4>
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
                                                @for ($i=0 ;$i<count($jP ); $i++) <tr>
                                                    <td>
                                                        @if($i==0) {{ $item->alJenis}}
                                                        <?php 
                                                        $jumlah [0]=0;
                                                        $jumlah [1]=0;
                                                        $jumlah [2]=0;
                                                    ?>
                                                        @elseif($i==1)     S.Note 10
                                                        @elseif($i==2)      Iphone XS
                                                        @elseif($i==3) O. F11
                                                        @elseif($i==4)  O. Reno
                                                        @elseif($i==5)     Hua P30
                                                        @elseif($i==6)V. Z1 Pro
                                                        @elseif($i==7)V.  S1
                                                        @elseif($i==8)Redmi N7
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
                                                        <td> {{round($jumlah[1],5) }} </td>
                                                        <td> {{round($jumlah[2],5) }} </td>
                                                        <?php 
                                                            $seperJumlah [0]=1/$jumlah[0];
                                                            $seperJumlah [1]=1/$jumlah[1];
                                                            $seperJumlah [2]=1/$jumlah[2];
                                                        ?>
                                                    </tr>
                                                    <tr>
                                                        <td> 1/ Jumlah </td>
                                                        <td> {{ round($seperJumlah[0] ,5)}} </td>
                                                        <td> {{round($seperJumlah[1],5) }} </td>
                                                        <td> {{round($seperJumlah[2],5) }} </td>
                                                        <?php 
                                                              $seperJumlahBalik =array_reverse($seperJumlah);
                                                            ?>
                                                    </tr>
                                                    <tr>
                                                        <td> DIBALIK </td>
                                                        <td> {{ round($seperJumlahBalik[0] ,5)}} </td>
                                                        <td> {{round($seperJumlahBalik[1],5) }} </td>
                                                        <td> {{round($seperJumlahBalik[2],5) }} </td>
                    
                                                    </tr>
                    
                                            </tbody>
                    
                                        </table>
                                    </div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                            <div class="col-12">
                                <div class="card-box ">
                                    <h4 class="header-title">HASIL Si </h4>
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
                                                @for ($i=0 ;$i<count($jP ); $i++) <tr>
                                                    <td>
                                                        @if($i==0) S.Note 10
                                                        <?php 
                                                            $jumlah [0]=0;
                                                            $jumlah [1]=0;
                                                            $jumlah [2]=0;
                                                        ?>
                                                        @elseif($i==1)     Iphone XS 
                                                        @elseif($i==2)  O. F11   
                                                        @elseif($i==3) O. Reno
                                                        @elseif($i==4)   Hua P30
                                                        @elseif($i==5)    V. Z1 Pro
                                                        @elseif($i==6)V.  S1
                                                        @elseif($i==7)Redmi N7
                                                                                
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
                    
                                    for($i=0 ; $i<7 ; $i++){
                                        
                                        if($hasilSi[0][1]>$hasilSi[$i+1][1]){
                                            $vektor[0][$i] = 1;
                                        } else if($hasilSi[$i+1][0]>$hasilSi[0][2]){
                                            $vektor[0][$i] = 0;
                                        } else {
                                            $vektor[0][$i]=($hasilSi[$i+1][0]-$hasilSi[0][2])/(($hasilSi[0][1]-$hasilSi[0][2])-($hasilSi[$i+1][1]-$hasilSi[$i+1][0]));
                                        }
                                        }
                    
                                    for($i=0 ,$j=0; $i<8 ; $i++){    
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
                                        for($i=0 ,$j=0; $i<8 ; $i++){    
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
                                        for($i=0 ,$j=0; $i<8 ; $i++){    
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
                                        for($i=0 ,$j=0; $i<8 ; $i++){    
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
                                        for($i=0 ,$j=0; $i<8 ; $i++){    
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
                                        for($i=0 ,$j=0; $i<8 ; $i++){    
                                        if($i==6){
                                            $i++;
                                        }             
                                        if($hasilSi[6][1]>$hasilSi[$i][1]){
                                            $vektor[6][$j] = 1;
                                            $j++;
                                        } else if($hasilSi[$i][0]>$hasilSi[6][2]){
                                            $vektor[6][$j] = 0;
                                            $j++;
                                        }else {      
                                                $vektor[6][$j]=($hasilSi[$i][0]-$hasilSi[6][2])/(($hasilSi[6][1]-$hasilSi[6][2])-($hasilSi[$i][1]-$hasilSi[$i][0]));
                                         
                                                $j++;
                                            }
                                          
                                       
                                        }    
                                        for($i=0 ,$j=0; $i<8 ; $i++){    
                                                
                                        if($hasilSi[7][1]>$hasilSi[$i][1]){
                                            $vektor[7][$j] = 1;
                                            $j++;
                                        } else if($hasilSi[$i][0]>$hasilSi[7][2]){
                                            $vektor[7][$j] = 0;
                                            $j++;
                                        }else {      
                                                $vektor[7][$j]=($hasilSi[$i][0]-$hasilSi[7][2])/(($hasilSi[7][1]-$hasilSi[7][2])-($hasilSi[$i][1]-$hasilSi[$i][0]));
                                         
                                                $j++;
                                            }
                                          
                                       
                                        }                         
                                   
                                ?>
                    
                    
                    
                            <div class="col-12">
                                <div class="card-box ">
                                    <h4 class="header-title">Nilai Vektor </h4>
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
                    
                                                    <td> v(S3 >= S @if($key<2) {{$key+1}} @else {{$key+2}} @endif )</td> <td>{{$v}} </td>
                                                </tr>
                                                @endforeach
                                                <tr>
                    
                                                    <td></td>
                                                    <td> </td>
                                                </tr>
                                                @foreach($vektor[3] as $key => $v)
                                                <tr>
                    
                                                    <td> v(S4 >= S @if($key<3) {{$key+1}} @else {{$key+2}} @endif )</td> <td>{{$v}} </td>
                                                </tr>
                                                @endforeach
                                                <tr>
                    
                                                    <td></td>
                                                    <td> </td>
                                                </tr>
                                                @foreach($vektor[4] as $key => $v)
                                                <tr>
                    
                                                    <td> v(S5 >= S @if($key<4) {{$key+1}} @else {{$key+2}} @endif )</td> <td>{{$v}} </td>
                                                </tr>
                                                @endforeach
                                                <tr>
                    
                                                    <td></td>
                                                    <td> </td>
                                                </tr>
                                                @foreach($vektor[5] as $key => $v)
                                                <tr>
                    
                                                    <td> v(S6 >= S @if($key<5) {{$key+1}} @else {{$key+2}} @endif )</td> <td>{{$v}} </td>
                                                </tr>
                                                @endforeach
                                                @foreach($vektor[6] as $key => $v)
                                                <tr>
                    
                                                    <td> v(S7 >= S @if($key<6) {{$key+1}} @else {{$key+2}} @endif )</td> <td>{{$v}} </td>
                                                </tr>
                                                @endforeach
                                                @foreach($vektor[7] as $key => $v)
                                                <tr>
                    
                                                    <td> v(8 >= S @if($key<7) {{$key+1}} @else {{$key+2}} @endif )</td> <td>{{$v}} </td>
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
                    
                                                    <td>V (S1 ≥ S2,S3,S4,S5,S6,S7,S8)</td>
                                                    <td>{{ min($vektor[0])}} </td>
                                                </tr>
                                                <tr>
                    
                                                    <td>V (S2 ≥ S1,S3,S4,S5,S6,S7,S8)</td>
                                                    <td>{{ min($vektor[1])}} </td>
                                                </tr>
                                                <tr>
                    
                                                    <td>V (S3 ≥ S1,S2,S4,S5,S6,S7,S8)</td>
                                                    <td>{{ min($vektor[2])}} </td>
                                                </tr>
                                                <tr>
                    
                                                    <td>V (S4 ≥ S1,S2,S3,S5,S6,S7,S8)</td>
                                                    <td>{{ min($vektor[3])}} </td>
                                                </tr>
                                                <tr>
                    
                                                    <td>V (S5 ≥ S1,S2,S3,S4,S6,S7,S8)</td>
                                                    <td>{{ min($vektor[4])}} </td>
                                                </tr>
                                                <tr>
                    
                                                    <td>V (S6 ≥ S1,S2,S3,S4,S5,S7,S8)</td>
                                                    <td>{{ min($vektor[5])}} </td>
                                                </tr>
                                                 <tr>
                    
                                                    <td>V (S7 ≥ S1,S2,S3,S4,S5,S6,S8)</td>
                                                    <td>{{ min($vektor[6])}} </td>
                                                </tr>
                                                 <tr>
                    
                                                    <td>V (S8 ≥ S1,S2,S3,S4,S5,S6,S7)</td>
                                                    <td>{{ min($vektor[7])}} </td>
                                                </tr>
                                                <tr>
                                                    <?php 
                                                            $minVektor = [ min($vektor[0]), min($vektor[1]), min($vektor[2]), min($vektor[3]), min($vektor[4]), min($vektor[5]), min($vektor[6]), min($vektor[7] ) ];
                                                            $totalminVektor=array_sum($minVektor);
                    
                                                                foreach($minVektor as $key => $a){
                                                                    $normalisasiBobotAlternatif[$keyone][$key]=$a/$totalminVektor;
                                                                }
                                                        ?>
                                                    <td>Total</td>
                                                    <td>{{ array_sum($minVektor)}} </td>
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
                                                       
                                                    
                                                        <td>V (S1 ≥ S2,S3,S4,S5,S6,S7,S8)</td>
                                                        <td>{{ $normalisasiBobotAlternatif[$keyone][0]}} </td>
                                                    </tr>
                                                    <tr>
                        
                                                        <td>V (S2 ≥ S1,S3,S4,S5,S6,S7,S8)</td>
                                                        <td>{{ $normalisasiBobotAlternatif[$keyone][1]}} </td>
                                                    </tr>
                                                    <tr>
                        
                                                        <td>V (S3 ≥ S1,S2,S4,S5,S6,S7,S8)</td>
                                                        <td>{{ $normalisasiBobotAlternatif[$keyone][2]}} </td>
                                                    </tr>
                                                    <tr>
                        
                                                        <td>V (S4 ≥ S1,S2,S3,S5,S6,S7,S8)</td>
                                                        <td>{{ $normalisasiBobotAlternatif[$keyone][3]}} </td>
                                                    </tr>
                                                    <tr>
                        
                                                        <td>V (S5 ≥ S1,S2,S3,S4,S6,S7,S8)</td>
                                                        <td>{{ $normalisasiBobotAlternatif[$keyone][4]}} </td>
                                                    </tr>
                                                    <tr>
                        
                                                        <td>V (S6 ≥ S1,S2,S3,S4,S5,S7,S8)</td>
                                                        <td>{{ $normalisasiBobotAlternatif[$keyone][5]}} </td>
                                                    </tr>
                                                     <tr>
                        
                                                        <td>V (S7 ≥ S1,S2,S3,S4,S5,S6,S8)</td>
                                                        <td>{{ $normalisasiBobotAlternatif[$keyone][6]}} </td>
                                                    </tr>
                                                     <tr>
                        
                                                        <td>V (S8 ≥ S1,S2,S3,S4,S5,S6,S7)</td>
                                                        <td>{{ $normalisasiBobotAlternatif[$keyone][7]}} </td>
                                                    </tr>
                                            
                                            <tr>
                                                <?php 
                                                          
                                                            $maxBobot =max($normalisasiBobotAlternatif[$keyone]);
                    
                                                         
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
                      
                        </div>
                    
                      
                        <?php
                        unset($alternatif);
                        unset($item);
                        unset($keyone);
                        unset($bobot);
                        unset($i);
                        unset($j);
                        unset($k);
                        unset($matrixFuzzy);
                        unset($hasilKali);
                        unset($hasilpangkat);
                        unset($hpBaru);
                        unset($totalHP);
                        unset($prioritas);
                        unset($rataPrioritas);
                        unset($items);
                        unset($hasilPrioritas);
                        unset($jumlah);
                        unset($jmlhRata);
                        unset($lamda);
                        unset($ir);
                        unset($ci);
                        unset($cr);
                        unset($hasilpangkatiMF);
                        unset($jP);
                        unset($seperJumlah);
                        unset($seperJumlahBalik);
                        unset($hasilSi);
                        unset($vektor);
                        unset($v);
                        unset($key);
                        unset($minVektor);
                        unset($totalminVektor);
                        unset($a);
                        unset($minVektor);
                        unset($maxBobot);
                    
                    
                        
                        $kriteriaData = $kriteriaData::where('kriJenis',$rankProfile [0]['tipe'])->get();
                        $kriteria=$kriteriaData[0];
                                $bobot = json_decode($kriteria->bobot);
                            ?>
                        <h4 class="header-title"> Kriteria {{$kriteria->kriJenis}}</h4>
                    
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
                                            @for ($k=0 ; $k<count($prioritas[$i]); $k++) <td> {{ round($prioritas[$i][$k],2)    }}</td>
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
                                                $jumlah[$i]+= $hasilPrioritas[$i][$k];
                                               
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
                    <?php 
                    
                    ?>
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
                                                <th> {{ round($hasilpangkatiMF[$i][$k][0],2)    }}
                                                    
                                                <th> {{ round($hasilpangkatiMF[$i][$k][1],2)    }}
                                                    
                                                <td> {{ round($hasilpangkatiMF[$i][$k][2],2)    }}
                                                    </td>
                        
                                                   
                                                    @endfor
                                                  
                                                    </th>
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
                                                           
                                                            
                                                            
                                                        
                                                             
                                                       
                                                        
                                                        <td> RAM	</td>
                                                        <td>{{ $normalisasiBobot[0]}} </td>
                                                    </tr>
                                                     <tr>
                                                       
                                                        <td>ROM	</td>
                                                        <td>{{ $normalisasiBobot[1]}} </td>
                                                    </tr>
                                                     <tr>
                                                       
                                                        <td>KAMERA	</td>
                                                        <td>{{ $normalisasiBobot[2]}} </td>
                                                    </tr>
                                                     <tr>
                                                       
                                                        <td>PROCESSOR		</td>
                                                        <td>{{ $normalisasiBobot[3]}} </td>
                                                    </tr>
                                                     <tr>
                                                       
                                                        <td>LAYAR	</td>
                                                        <td>{{ $normalisasiBobot[4]}} </td>
                                                    </tr>
                                                     <tr>
                                                       
                                                        <td> BATERAI		</td>
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
                        
                                <div class="col-12">
                                    <div class="card-box ">
                                        <h4 class="header-title">Hasil </h4>
                                        <div class="table-responsive">
                                        <table class="table table-bordered ">
                                                <thead>
                                                    <tr>
                                                        <th> 	</th>
                                                        <th> RAM	</th>
                                                        <th>ROM	</th>
                                                        <th>KAMERA	</th>
                                                        <th>PROCESSOR		</th>
                                                        <th>LAYAR	</th>
                                                        <th> BATERAI		</th>
                                                        
                                                        <th> bobot		</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                     <tr>
                                                        <td> 	</td>
                                                        <td>{{ $normalisasiBobot[0]}} </td>
                                                        <td>{{ $normalisasiBobot[1]}} </td>
                                                        <td>{{ $normalisasiBobot[2]}} </td>
                                                        <td>{{ $normalisasiBobot[3]}} </td>
                                                        <td>{{ $normalisasiBobot[4]}} </td>
                                                        <td>{{ $normalisasiBobot[5]}} </td>
                                                        <td>{{ array_sum($normalisasiBobot)}} </td>
                                                     </tr>
                                                     @foreach($normalisasiBobotAlternatif[0] as $key=> $value)
                                                     <tr>
                                                        <td> 
                                                            <?php 
                                                                if($key==0) { $alter = "S.Note 10";  }
                                                                elseif($key==1) {  $alter = "Iphone XS"; }
                                                                elseif($key==2) {  $alter = "O. F11"; }
                                                                elseif($key==3) {  $alter = "O. Reno"; }
                                                                elseif($key==4) {   $alter = "Hua P30"; }
                                                                elseif($key==5) { $alter = "V. Z1 Pro"; }
                                                                elseif($key==6)  { $alter = "V.  S1"; }
                                                                elseif($key==7) { $alter = "Redmi N7"; }
                    
                                                                echo $alter;
                                                            ?>
                                                        </td>
                                                        <?php 
                                                            $hasilbobot= ($normalisasiBobotAlternatif[0][$key]*$normalisasiBobot[0])+($normalisasiBobotAlternatif[1][$key]*$normalisasiBobot[1])+($normalisasiBobotAlternatif[2][$key]*$normalisasiBobot[2])+($normalisasiBobotAlternatif[3][$key]*$normalisasiBobot[3])+($normalisasiBobotAlternatif[4][$key]*$normalisasiBobot[4])+($normalisasiBobotAlternatif[5][$key]*$normalisasiBobot[5]);
                                                            $hasilRekomendasi[$key]= [
                                                                "nama"=>$alter,
                                                                "bobot"=>$hasilbobot
                                                            ];
                                                        ?>
                                                        <td>{{ $value}} </td>
                                                        <td>{{ $normalisasiBobotAlternatif[1][$key]}} </td>
                                                        <td>{{ $normalisasiBobotAlternatif[2][$key]}} </td>
                                                        <td>{{  $normalisasiBobotAlternatif[3][$key]}}</td>
                                                        <td>{{  $normalisasiBobotAlternatif[4][$key]}} </td>
                                                        <td>{{  $normalisasiBobotAlternatif[5][$key]}} </td>
                                                    <td>{{$hasilbobot}}</td>
                                                     </tr>
                                                     @endforeach
                                                
                                                       
                                            </tbody>
                            
                                        </table>
                                        </div>
                                    </div> <!-- end card-box -->
                                </div> <!-- end col --> 
                                <?php 
                                ?>
                           <div class="col-12">
                                    <div class="card-box ">
                                        <h4 class="header-title">Hasil </h4>
                                        <div class="table-responsive">
                                        <table class="table table-bordered ">
                                                <thead>
                                                    <tr>
                                                        <th> Rekomendasi	</th>
                                                        <th> Bobot	</th>
                                                    </tr>
                                                </thead>
                                                <?php 
                                                foreach ($hasilRekomendasi as $key => $row) {
                                                               $attack1[$key]  = $row['bobot'];
                                                             }
                           
                                                             // Sort the data with attack descending
                                                             array_multisort($attack1, SORT_DESC, $hasilRekomendasi);
                                            ?>
                                                <tbody>
                                                    @foreach($hasilRekomendasi as $hR)
                                                     <tr>
                                                        <td>{{ $hR['nama']}}	</td>
                                                        <td>{{ $hR['bobot']}} </td>
                                                        
                                                     </tr>
                                                    @endforeach
                                                       
                                            </tbody>
                            
                                        </table>
                                        </div>
                                    </div> <!-- end card-box -->
                                </div> <!-- end col --> 
                        
                     
                        
                        </div> <!-- end row -->
                
    
                    <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                <h4 class="header-title mb-3"> Data {{$nama}}, dengan perkerjaan  {{$pekerjaan}}</h4>
        
                                    <div class="alert alert-primary" role="alert">
                                            <h3> Profile {{$nama}} termasuk {{$rankProfile[0]['tipe']}} disarankan untuk smartphone {{$hasilRekomendasi[0]['nama']}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
               
{{--             
        </div> --}}
</div> <!-- container -->

@endsection
