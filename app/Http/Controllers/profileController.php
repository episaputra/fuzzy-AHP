<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profile;
use App\alternatif;
use App\kriteria;
class profileController extends Controller
{
    //
    public function indexdata(){
        $profile = profile::all();


        return view('profile.data', compact('profile'));
    }
    public function index(){


        return view('profile.index');
    }
    public function cek(Request $request){

        $no11 = $request['no11'];
        $no12 = $request['no12'];
        $no21 = $request['no21'];
        $no22 = $request['no22'];
        $no31 = $request['no31'];
        $no32 = $request['no32'];



        if($no11==0){
            $data21= $no12;
            $data12= 1/$no12;
        }
        else{
            $data21= 1/$no11;
            $data12= $no11;
        }
        if($no21==0){
            $data31= $no22;
            $data13= 1/$no22;
        }
        else{
            $data31= 1/$no21;
            $data13= $no21;
        }
        if($no31==0){
            $data32= $no32;
            $data23= 1/$no32;
        }
        else{
            $data32= 1/$no31;
            $data23= $no31;
        }
        


        $kriteria =[ 
            [
                1,
                $data12,
                $data13
            ],
            [
                $data21,
                1,
                $data23
            ],
            [
                $data31,
                $data32,
                1
                ]
            ];

            $sn11 = $request['sn11'];
            $sn12 = $request['sn12'];
            $sn21 = $request['sn21'];
            $sn22 = $request['sn22'];
            $sn31 = $request['sn31'];
            $sn32 = $request['sn32'];
            $sn41 = $request['sn41'];
            $sn42 = $request['sn42'];
            $sn51 = $request['sn51'];
            $sn52 = $request['sn52'];
            $sn61 = $request['sn61'];
            $sn62 = $request['sn62'];
            if($sn11==0){
                $data21= $sn12;
                $data12= 1/$sn12;
            }
            else{
                $data21= 1/$sn11;
                $data12= $sn11;
            }
            if($sn21==0){
                $data31= $sn22;
                $data13= 1/$sn22;
            }
            else{
                $data31= 1/$sn21;
                $data13= $sn21;
            }
            if($sn31==0){
                $data41= $sn32;
                $data14= 1/$sn32;
            }
            else{
                $data41= 1/$sn31;
                $data14= $sn31;
            }
            if($sn41==0){
                $data32= $sn42;
                $data23= 1/$sn42;
            }
            else{
                $data32= 1/$sn41;
                $data23= $sn41;
            }
            if($sn51==0){
                $data42= $sn52;
                $data24= 1/$sn52;
            }
            else{
                $data42= 1/$sn51;
                $data24= $sn51;
            }
            if($sn61==0){
                $data43= $sn62;
                $data34= 1/$sn62;
            }
            else{
                $data43 = 1/$sn61;
                $data34 = $sn61;
            }
            $sn = [ 
                [
                    1,
                    $data12,
                    $data13,
                    $data14
                ],
                [
                    $data21,
                    1,
                    $data23,
                    $data24
                ],
                [
                    $data31,
                    $data32,
                    1,
                    $data34
                    ],
                
                [
                    $data41,
                    $data42,
                    $data43,
                    1
                    ]
                ];

        $hobi11 = $request['hobi11'];
        $hobi12 = $request['hobi12'];
        $hobi21 = $request['hobi21'];
        $hobi22 = $request['hobi22'];
        $hobi31 = $request['hobi31'];
        $hobi32 = $request['hobi32'];
        $hobi41 = $request['hobi41'];
        $hobi42 = $request['hobi42'];
        $hobi51 = $request['hobi51'];
        $hobi52 = $request['hobi52'];
        $hobi61 = $request['hobi61'];
        $hobi62 = $request['hobi62'];
        if($hobi11==0){
            $data21= $hobi12;
            $data12= 1/$hobi12;
        }
        else{
            $data21= 1/$hobi11;
            $data12= $hobi11;
        }
        if($hobi21==0){
            $data31= $hobi22;
            $data13= 1/$hobi22;
        }
        else{
            $data31= 1/$hobi21;
            $data13= $hobi21;
        }
        if($hobi31==0){
            $data41= $hobi32;
            $data14= 1/$hobi32;
        }
        else{
            $data41= 1/$hobi31;
            $data14= $hobi31;
        }
        if($hobi41==0){
            $data32= $hobi42;
            $data23= 1/$hobi42;
        }
        else{
            $data32= 1/$hobi41;
            $data23= $hobi41;
        }
        if($hobi51==0){
            $data42= $hobi52;
            $data24= 1/$hobi52;
        }
        else{
            $data42= 1/$hobi51;
            $data24= $hobi51;
        }
        if($hobi61==0){
            $data43= $hobi62;
            $data34= 1/$hobi62;
        }
        else{
            $data43 = 1/$hobi61;
            $data34 = $hobi61;
        }
        $hobi = [ 
            [
                1,
                $data12,
                $data13,
                $data14
            ],
            [
                $data21,
                1,
                $data23,
                $data24
            ],
            [
                $data31,
                $data32,
                1,
                $data34
                ],
            
            [
                $data41,
                $data42,
                $data43,
                1
                ]
            ];

            $job11 = $request['job11'];
            $job12 = $request['job12'];
            $job21 = $request['job21'];
            $job22 = $request['job22'];
            $job31 = $request['job31'];
            $job32 = $request['job32'];
            $job41 = $request['job41'];
            $job42 = $request['job42'];
            $job51 = $request['job51'];
            $job52 = $request['job52'];
            $job61 = $request['job61'];
            $job62 = $request['job62'];
            if($job11==0){
                $data21= $job12;
                $data12= 1/$job12;
            }
            else{
                $data21= 1/$job11;
                $data12= $job11;
            }
            if($job21==0){
                $data31= $job22;
                $data13= 1/$job22;
            }
            else{
                $data31= 1/$job21;
                $data13= $job21;
            }
            if($job31==0){
                $data41= $job32;
                $data14= 1/$job32;
            }
            else{
                $data41= 1/$job31;
                $data14= $job31;
            }
            if($job41==0){
                $data32= $job42;
                $data23= 1/$job42;
            }
            else{
                $data32= 1/$job41;
                $data23= $job41;
            }
            if($job51==0){
                $data42= $job52;
                $data24= 1/$job52;
            }
            else{
                $data42= 1/$job51;
                $data24= $job51;
            }
            if($job61==0){
                $data43= $job62;
                $data34= 1/$job62;
            }
            else{
                $data43 = 1/$job61;
                $data34 = $job61;
            }
            $job = [ 
                [
                    1,
                    $data12,
                    $data13,
                    $data14
                ],
                [
                    $data21,
                    1,
                    $data23,
                    $data24
                ],
                [
                    $data31,
                    $data32,
                    1,
                    $data34
                    ],
                
                [
                    $data41,
                    $data42,
                    $data43,
                    1
                    ]
                ];
        // echo json_encode($kriteria);
        // echo "<br/>";
        // echo json_encode($hobi);
        // echo "<br/>";
        // echo json_encode($job);
        // echo "<br/>"; 
        // echo json_encode($sn);
        // echo "<br/>"; 
        // die;

        $profile = new profile;
        $profile->nama= $request['nama'];
        $profile->pekerjaan= $request['pekerjaan'];
        $profile->kriteria= json_encode($kriteria);
        $profile->hobi= json_encode($hobi);
        $profile->job= json_encode($job);
        $profile->sn=json_encode($sn);
        $profile->save();
        $nama = $request['nama'];
        $pekerjaan = $request['pekerjaan'];
        $kriteriaData = new kriteria;
        $alternatif =  alternatif::all();
        return view('profile.hasil',compact('kriteria','hobi','job','sn','kriteriaData','alternatif','nama','pekerjaan'));
    }
    public function cekdata($id){
        $profile = profile::find($id);
        $kriteria = json_decode($profile->kriteria);
        $hobi = json_decode($profile->hobi);
        $job = json_decode($profile->job);
        $sn = json_decode($profile->sn);     
        $kriteriaData = new kriteria;
        $alternatif =  alternatif::all();
        $pekerjaan = $profile->pekerjaan;
        $nama = $profile->nama;
        return view('profile.hasildata',compact('kriteria','hobi','job','sn','kriteriaData','alternatif','nama','pekerjaan'));
    }
    public function destroy($id){
        $profile = profile::find($id);
        $profile->delete();
        return redirect('/profile/data');
    }
}
