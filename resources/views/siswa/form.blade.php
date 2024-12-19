@extends('template')
@section('content')
<h3>Tambah Data Siswa</h3>
<form method="POST">
@csrf
<table border="1" cellpadding="2" cellspacing="2">
<tr>
    <td>NIS</td>
    <td><input type="text" name="nis"></td>
</tr>
<tr>
    <td>Nama</td>
    <td><input type="text" name="nama"></td>
</tr>
<tr>
    <td>Alamat</td>
    <td><textarea name="alamat" rows="3"></textarea></td>
</tr>
<tr>
    <td colspan="2"><button type="submit">SIMPAN</button> | <a href="{{url('siswa')}}">Kembali</a></td>
</tr>
</table>
</form>
@endsection