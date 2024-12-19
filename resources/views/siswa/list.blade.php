@extends('template')
@section('content')
<h2>Data Siswa</h2>
<a href="{{url('/siswa/insert')}}">Tambah Siswa</a>
<table border="1" cellpadding="2" cellspacing="2">
<tr>
    <th>NIS</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Opsi</th>
</tr>
@foreach ($dt_siswa as $siswa)
<tr>
    <td>{{$siswa->nis_siswa}}</td>
    <td>{{$siswa->nama_siswa}}</td>
    <td>{{$siswa->alamat_siswa}}</td>
    <td>Ubah | Hapus</td>
</tr>
@endforeach
</table>
@endsection