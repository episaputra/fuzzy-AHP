@extends('layout.main')

@section('konten')

<form action="/tambah_user/cek" method="POST">
@csrf
  First name:<br>
  <input type="text" name="name">
  <br>
  Email:<br>
  <input type="email" name="email">
  <br>
  Password:<br>
  <input type="password" name="password">
  <br>
  <select name="level">
  <option value="0">admin</option>
  <option value="1">user</option>
</select>
  <br><br>
  <button type="submit">Tambah</button>


</form> 


@endsection