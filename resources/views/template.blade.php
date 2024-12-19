<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelas Laravel</title>
</head>
<body>
    <h1>Website Kelas Laravel</h1>
    <hr>
    <a href="{{url('/')}}">Home</a>
    <a href="{{url('/tentang')}}">Tentang</a>
    <a href="{{url('/kontak')}}">Kontak</a>
    <a href="{{url('/siswa')}}">Data Siswa</a>
    <hr>
    @yield('content')
</body>
</html>