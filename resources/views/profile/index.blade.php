@extends('layout.main1')
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
                        <li class="breadcrumb-item active">KUISIONER</li>
                    </ol>
                </div>
                <h4 class="page-title">KUISIONER</h4>
            </div>
        </div>
    </div>

    <!--Pricing Column-->
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="header-title">KUISIONER PENENTUAN BOBOT PROFILE USER</h4>
                <h1 style="margin-top:12.0pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:150%;font-size:21px;font-family:&quot;Calibri Light&quot;,sans-serif;color:#2F5496;font-weight:normal;"><strong><span style="line-height:150%;font-family:&quot;Times New Roman&quot;,serif;font-family:&quot;Times New Roman&quot;,serif;font-size:12.0pt;color:windowtext;">Petunjuk Pengisian</span></strong></h1>
<ol style="list-style-type: decimal;">
  <li><span style="line-height:150%;font-size:12.0pt;">Menjawab dengan memberi nilai pada kotak dengan menggunakan angka 1-9.</span></li>
  <li><span style="line-height:150%;font-size:12.0pt;">Cukup menilai pilihan mana yang lebih penting.</span></li>
  <li><span style="line-height:150%;font-size:12.0pt;">Kemudian memberi nilai berupa angka 1-9 yang menandakan tingkat lebihnya.</span></li>
  <li><span style="line-height:150%;font-size:12.0pt;">Jika indikator pada kolom 1 (sebelah kiri) &nbsp;lebih penting dari pada indikator 2 (sebelah kanan) maka nilai perbandingan ini diisikan pada kolom 1 dan jika sebaliknya maka diisikan pada kolom 2.</span></li>
</ol>
<div align="center" style="margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:&quot;Calibri&quot;,sans-serif;">
  <table border="1" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border:none;">
    <tbody>
      <tr>
        <td style="width: 67.05pt;border: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;" valign="top" width="16.54275092936803%">
          <p style="margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:&quot;Calibri&quot;,sans-serif;text-align:center;"><span style="font-family:  &quot;Times New Roman&quot;,serif;">Intensitas Kepentingan AHP</span></p>
        </td>
        <td style="width: 336.5pt;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;vertical-align: top;" valign="top" width="83.45724907063197%">
          <p style="margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:&quot;Calibri&quot;,sans-serif;text-align:center;"><span style="font-family:  &quot;Times New Roman&quot;,serif;">Himpunan Linguistik</span></p>
        </td>
      </tr>
      <tr>
        <td style="width: 67.05pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;vertical-align: top;" valign="top" width="16.54275092936803%">
          <p style="margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:&quot;Calibri&quot;,sans-serif;text-align:center;"><span style="font-family:  &quot;Times New Roman&quot;,serif;">1</span></p>
        </td>
        <td style="width: 336.5pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;" valign="top" width="83.45724907063197%">
          <p style="margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:&quot;Calibri&quot;,sans-serif;"><span style="font-family:&quot;Times New Roman&quot;,serif;">Kedua Elemen Sama Pentingnya (<em>Just Equal</em>)</span></p>
        </td>
      </tr>
      <tr>
        <td style="width: 67.05pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;vertical-align: top;" valign="top" width="16.54275092936803%">
          <p style="margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:&quot;Calibri&quot;,sans-serif;text-align:center;"><span style="font-family:  &quot;Times New Roman&quot;,serif;">3</span></p>
        </td>
        <td style="width: 336.5pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;" valign="top" width="83.45724907063197%">
          <p style="margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:&quot;Calibri&quot;,sans-serif;"><span style="font-family:&quot;Times New Roman&quot;,serif;">Agak lebih penting yang satu atas lainnya.</span></p>
        </td>
      </tr>
      <tr>
        <td style="width: 67.05pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;vertical-align: top;" valign="top" width="16.54275092936803%">
          <p style="margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:&quot;Calibri&quot;,sans-serif;text-align:center;"><span style="font-family:  &quot;Times New Roman&quot;,serif;">5</span></p>
        </td>
        <td style="width: 336.5pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;" valign="top" width="83.45724907063197%">
          <p style="margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:&quot;Calibri&quot;,sans-serif;"><span style="font-family:&quot;Times New Roman&quot;,serif;">Elemen yang satu lebih penting daripada yang lainnya</span></p>
        </td>
      </tr>
      <tr>
        <td style="width: 67.05pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;vertical-align: top;" valign="top" width="16.54275092936803%">
          <p style="margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:&quot;Calibri&quot;,sans-serif;text-align:center;"><span style="font-family:  &quot;Times New Roman&quot;,serif;">7</span></p>
        </td>
        <td style="width: 336.5pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;" valign="top" width="83.45724907063197%">
          <p style="margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:&quot;Calibri&quot;,sans-serif;"><span style="font-family:&quot;Times New Roman&quot;,serif;">Satu elemen jelas lebih mutlak penting daripada elemen lainnya</span></p>
        </td>
      </tr>
      <tr>
        <td style="width: 67.05pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;vertical-align: top;" valign="top" width="16.54275092936803%">
          <p style="margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:&quot;Calibri&quot;,sans-serif;text-align:center;"><span style="font-family:  &quot;Times New Roman&quot;,serif;">9</span></p>
        </td>
        <td style="width: 336.5pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;" valign="top" width="83.45724907063197%">
          <p style="margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:&quot;Calibri&quot;,sans-serif;"><span style="font-family:&quot;Times New Roman&quot;,serif;">Satu elemen ekstrem mutlak penting daripada elemen lainnya</span></p>
        </td>
      </tr>
      <tr>
        <td style="width: 67.05pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;vertical-align: top;" valign="top" width="16.54275092936803%">
          <p style="margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:&quot;Calibri&quot;,sans-serif;text-align:center;"><span style="font-family:  &quot;Times New Roman&quot;,serif;">2,4,6,8</span></p>
        </td>
        <td style="width: 336.5pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;" valign="top" width="83.45724907063197%">
          <p style="margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:&quot;Calibri&quot;,sans-serif;"><span style="font-family:&quot;Times New Roman&quot;,serif;">Pertengahan (<em>Intermediate</em>)</span></p>
        </td>
      </tr>
    </tbody>
  </table>
</div>
<p style="margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:39.3pt;line-height:150%;font-size:15px;font-family:&quot;Calibri&quot;,sans-serif;text-align:justify;"><span style="font-size:16px;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;">Contoh pengisian: &nbsp; Berikan tanda (√) pada penilaian Bapak/Ibu terhadap pertanyaan dibawah ini sesuai dengan petunjuk pengisian angket kuisioner. Bandingkan indikator pada kolom kriteria A dengan indikator pada kolom kriteria B.&nbsp;</span></p>
<p>
<center><img src="tabel.jpg"></center><span style="font-size:16px;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;">
    <br>&nbsp;
  </span></p>

 
                <form class="form-horizontal" action="/profile/cek" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="simpleinput">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="simpleinput" placeholder="Some text value..." required name="nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="simpleinput">Pekerjaan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="simpleinput" placeholder="Some text value..." required  name="pekerjaan">
                        </div>
                    </div>
                    <p class="sub-header">
                        1. Pertanyaan Kriteria
                    </p>

                    <table class="table table-bordered dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kriteria A</th>
                                <th>Skala</th>
                                <th>Skala</th>
                                <th>Kriteria B</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Hobby </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="no11">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="no12">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                </td>
                                <td>Job </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Hobby </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="no21">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="no22">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                </td>
                                <td>Social Network </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Job </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="no31">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="no32">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                </td>
                                <td>Social Network </td>
                            </tr>
                        </tbody>

                    </table>
                    <p class="sub-header">
                        2. Pertanyaan Alternatif
                        <br />
                        a. Hobby
                    </p>

                    <table class="table table-bordered dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kriteria A</th>
                                <th>Skala</th>
                                <th>Skala</th>
                                <th>Kriteria B</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Travel </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="hobi11">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="hobi12">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                </td>
                                <td>Game </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Travel </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="hobi21">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="hobi22">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                </td>
                                <td>Video </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Travel </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="hobi31">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="hobi32">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                </td>
                                <td>Fotografi</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Game </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="hobi41">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="hobi42">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                </td>
                                <td>Video</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Game </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="hobi51">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="hobi52">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                </td>
                                <td>Fotografi</td>
                            </tr>
                            <tr>
                                <td>6 </td>
                                <td>Video </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="hobi61">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="hobi62">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                </td>
                                <td>Fotografi</td>
                            </tr>
                        </tbody>

                    </table>
                    <p>
                        b. Job
                    </p>

                    <table class="table table-bordered dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kriteria A</th>
                                <th>Skala</th>
                                <th>Skala</th>
                                <th>Kriteria B</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Rapat </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="job11">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="job12">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                </td>
                                <td>Fitur  </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Rapat </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="job21">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="job22">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                </td>
                                <td>Email </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Rapat </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="job31">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="job32">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                </td>
                                <td>Reading</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Fitur </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="job41">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="job42">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                </td>
                                <td>Email   </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Fitur </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="job51">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="job52">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                </td>
                                <td>Reading</td>
                            </tr>
                            <tr>
                                <td>6 </td>
                                <td>Email </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="job61">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <select class="form-control" name="job62">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                </td>
                                <td>Reading</td>
                            </tr>
                        </tbody>
                      


                        </table>
                        <p>
                            <br/>
                            c. Social Network
                        </p>

                        <table class="table table-bordered dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kriteria A</th>
                                    <th>Skala</th>
                                    <th>Skala</th>
                                    <th>Kriteria B</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>Koneksi </td>
                                    <td>
                                        <div class="form-group row">

                                            <div class="col-sm-10">
                                                <select class="form-control" name="sn11">
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group row">

                                            <div class="col-sm-10">
                                                <select class="form-control" name="sn12">
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                </select>
                                            </div>
                                    </td>
                                    <td>Sosmed </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Koneksi </td>
                                    <td>
                                        <div class="form-group row">

                                            <div class="col-sm-10">
                                                <select class="form-control" name="sn21">
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group row">

                                            <div class="col-sm-10">
                                                <select class="form-control" name="sn22">
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                </select>
                                            </div>
                                    </td>
                                    <td>Shopping </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Koneksi </td>
                                    <td>
                                        <div class="form-group row">

                                            <div class="col-sm-10">
                                                <select class="form-control" name="sn31">
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group row">

                                            <div class="col-sm-10">
                                                <select class="form-control" name="sn32">
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                </select>
                                            </div>
                                    </td>
                                    <td>Akun</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Sosmed </td>
                                    <td>
                                        <div class="form-group row">

                                            <div class="col-sm-10">
                                                <select class="form-control" name="sn41">
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group row">

                                            <div class="col-sm-10">
                                                <select class="form-control" name="sn42">
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                </select>
                                            </div>
                                    </td>
                                    <td>Shopping</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Sosmed </td>
                                    <td>
                                        <div class="form-group row">

                                            <div class="col-sm-10">
                                                <select class="form-control" name="sn51">
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group row">

                                            <div class="col-sm-10">
                                                <select class="form-control" name="sn52">
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                </select>
                                            </div>
                                    </td>
                                    <td>Akun</td>
                                </tr>
                                <tr>
                                    <td>6 </td>
                                    <td>Shopping </td>
                                    <td>
                                        <div class="form-group row">

                                            <div class="col-sm-10">
                                                <select class="form-control" name="sn61">
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group row">

                                            <div class="col-sm-10">
                                                <select class="form-control" name="sn62">
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                </select>
                                            </div>
                                    </td>
                                    <td>Akun</td>
                                </tr>
                            </tbody>

                        </table>
                        <button type="submit" class="btn btn-primary waves-effect waves-light width-md"> Cek</button>
                </form>

            </div> <!-- end card-box -->
        </div><!-- end col -->
    </div>
</div>

<!-- end row -->



</div> <!-- container -->

@endsection
