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


    <h4 class="header-title"> Kriteria User</h4>

    <div class="row">
        <div class="col-12">
            <div class="card-box">
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

                        @for ($j=0 ;$j<count($kriteria); $j++) 
                        <tr>
                            <td>
                                @if($j==0) hobby
                                @elseif($j==1) job
                                @elseif($j==2) social networking
                            
                                @endif
                            </td>
                            
                            @for ($k=0 ; $k<count($kriteria[$j]); $k++)
                             <td> {{ $kriteria[$j][$k]}}</td>
                           
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
                                    else if($kriteria[$j][$k]==0.5){
                                        $matrixFuzzy[$j][$k][0]=2/3;
                                        $matrixFuzzy[$j][$k][1]=1;
                                        $matrixFuzzy[$j][$k][2]=2;
                                    }
                                    else if($kriteria[$j][$k]==0.33){
                                        $matrixFuzzy[$j][$k][0]=1/2;
                                        $matrixFuzzy[$j][$k][1]=2/3;
                                        $matrixFuzzy[$j][$k][2]=1;
                                    }
                                    else if($kriteria[$j][$k]==0.25){
                                        $matrixFuzzy[$j][$k][0]=2/5;
                                        $matrixFuzzy[$j][$k][1]=1/2;
                                        $matrixFuzzy[$j][$k][2]=2/3;
                                    }
                                    else if($kriteria[$j][$k]==0.2){
                                        $matrixFuzzy[$j][$k][0]=1/3;
                                        $matrixFuzzy[$j][$k][1]=2/5;
                                        $matrixFuzzy[$j][$k][2]=1/2;
                                    }
                                    else if($kriteria[$j][$k]==0.17){
                                        $matrixFuzzy[$j][$k][0]=2/7;
                                        $matrixFuzzy[$j][$k][1]=1/3;
                                        $matrixFuzzy[$j][$k][2]=2/5;
                                    }
                                    
                                    else if($kriteria[$j][$k]==0.14){
                                        $matrixFuzzy[$j][$k][0]=1/4;
                                        $matrixFuzzy[$j][$k][1]=2/7;
                                        $matrixFuzzy[$j][$k][2]=1/3;
                                    }
                                    else if($kriteria[$j][$k]==0.13){
                                        $matrixFuzzy[$j][$k][0]=2/9;
                                        $matrixFuzzy[$j][$k][1]=1/4;
                                        $matrixFuzzy[$j][$k][2]=1/3;
                                    }
                                    else if($kriteria[$j][$k]==0.11){
                                        $matrixFuzzy[$j][$k][0]=2/9;
                                        $matrixFuzzy[$j][$k][1]=2/9;
                                        $matrixFuzzy[$j][$k][2]=1/4;
                                    }
                                    $hpBaru[$k][$j] = $kriteria[$j][$k]; 
                                        $totalHP[$k] = array_sum($hpBaru[$k]);

                                   
                                    ?>


                                @endfor
                               
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
            <h4 class="header-title">Normalisasi matriks </h4>
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
                    @for ($i=0 ;$i<count($kriteria); $i++) <tr>
                        <td>
                            @if($i==0) hobby
                            @elseif($i==1) job
                            @elseif($i==2) social networking
                        
                            @endif
                        </td>
                        @for ($k=0 ; $k<count($kriteria[$i]); $k++)
                        <?php 
                                    $prioritas[$i][$k] =  $kriteria[$i][$k]/$totalHP[$k];

                        ?>
                        @endfor 
                        <?php 
                            $rataPrioritas[$i] =array_sum($prioritas[$j])/count($prioritas[$j]);
                        ?>
                         @for ($k=0 ; $k<count($kriteria[$i]); $k++)
                        <td> {{ round($prioritas[$i][$k],)    }}</td>
                            <?php 
                             $hasilPrioritas[$i][$k]= $kriteria[$i][$k]*$rataPrioritas[$k]; 
                        ?>
                            @endfor
                            <?php  
                            
                        ?>
                            <td> {{ round($rataPrioritas[$i],2)    }}</td>
                            </tr>

                            @endfor

                </tbody>

            </table>
            </div>
        </div> <!-- end card-box -->
    </div> <!-- end col -->
</div> <!-- end row -->

</div> <!-- container -->

@endsection
