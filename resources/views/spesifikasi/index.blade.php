@extends('layout.main')

@section('konten')

<div class="container-fluid">

<br>
<br>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: center;    
}
</style>
</head>
<body> <h3><center>SPESIFIKASI SMARTPHONE</center></h3>

<br>

<table style="width:100%">
  <tr>
    <th>No</th>
    
    <th>Merk</th>
    <th>RAM</th>
    <th>ROM</th>
    <th>Kamera Depan</th>
    <th>Kamera Belakang</th>
    <th>Processor</th>
    <th>Layar</th>
    <th>Baterai</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Samsung Note 10</td>
    <td>8 / 12</td>
    <td>256</td>
    <td>10</td>
    <td>16 & 12 & 12</td>
    <td>Exynos 9825</td>
    <td>Dinamic Amoled</td>
    <td>3.500</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Iphone XS</td>
    <td>4</td>
    <td>64 / 256 / 512</td>
    <td>7</td>
    <td>12 & 12</td>
    <td>Apple A12 Bionic</td>
    <td>Super Amoled</td>
    <td>2.658</td>
  </tr>
  <tr>
    <td>3</td>
    <td>Oppo F11</td>
    <td>4</td>
    <td>128</td>
    <td>16</td>
    <td>48 & 5</td>
    <td>Mediatek Helio P70</td>
    <td>LTPS IPS LCD</td>
    <td>4.020</td>
  </tr>
  <tr>
    <td>4</td>
    <td>Oppo Reno</td>
    <td>6</td>
    <td>256</td>
    <td>16</td>
    <td>48 & 5</td>
    <td>Qualcom Snapdragon 710</td>
    <td>Amoled</td>
    <td>3.765</td>
  </tr>
  <tr>
    <td>5</td>
    <td>Huawei P30</td>
    <td>8</td>
    <td>128</td>
    <td>32</td>
    <td>40 & 16 & 8</td>
    <td>Hisilicon Kirin 980</td>
    <td>OLED</td>
    <td>3.650</td>
  </tr>
  <tr>
    <td>6</td>
    <td>Vivo Z1 Pro</td>
    <td>4 / 6</td>
    <td>64</td>
    <td>32</td>
    <td>16 & 8 & 2</td>
    <td>Qualcom Snapdragon 712</td>
    <td>IPS LCD</td>
    <td>5.000</td>
  </tr>
  <tr>
    <td>7</td>
    <td>Vivo S1</td>
    <td>4</td>
    <td>128</td>
    <td>32</td>
    <td>16 & 8 & 2</td>
    <td>Mediatek Helio P65</td>
    <td>Super Amoled</td>
    <td>4.500</td>
  </tr>
  <tr>
    <td>8</td>
    <td>Redmi Note 7</td>
    <td>3 / 4</td>
    <td>32 / 64 / 128</td>
    <td>13</td>
    <td>48 & 5</td>
    <td>Qualcom Snapdragon 660</td>
    <td>IPS LCD</td>
    <td>4.000</td>
  </tr>
</table>

</body>
</html>

</div>

@endsection