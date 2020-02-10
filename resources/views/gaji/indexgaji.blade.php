<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar Gaji</center>
    <table border = 1>
        <thead>
        <tr>
            <th>Nip</th>
            <th>Nama</th>
            <th>Agama</th>
            <th>Jenis_kelamin</th>
            <th>Alamat</th>
            <th>Jabatan</th>
            <th>Jam_Kerja</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($gaji as $gajian)
        <tr>
            <td>{{$gajian->nip}}</td>
            <td>{{$gajian->nama}}</td>
            <td>{{$gajian->agama}}</td>
            <td>{{$gajian->jenis_kelamin}}</td>
            <td>{{$gajian->alamat}}</td>
            <td>{{$gajian->jabatan}}</td>
            <td>{{$gajian->jam_kerja}}</td>
            <td><a href="/gaji/{{ $gajian->id }}">Lihat</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>