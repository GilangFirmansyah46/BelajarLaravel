<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Show Gaji</legend>
        Nip : <b>{{$gaji->nip}}</b><br>
        Nama : <b>{{$gaji->nama}}</b><br>
        Agama : <b>{{$gaji->agama}}</b><br>
        Jenis_Kelamin : <b>{{$gaji->jenis_kelamin}}</b><br>
        Alamat : <b>{{$gaji->alamat}}</b><br>
        Jabatan : <b>{{$gaji->jabatan}}</b><br>
    @if($gaji->jabatan == 'Manager')
        @php $uanggaji = 5000000; @endphp
    @elseif($gaji->jabatan == 'Sekretaris')
        @php $uanggaji = 3500000; @endphp
    @else
        @php $uanggaji = 2500000; @endphp

    @endif    

    Jam_kerja : <b>{{$gaji->jam_kerja}}</b><br>
    
    @if($gaji->jam_kerja >= 250)
        @php $uang = $uanggaji*10/100; @endphp
    @elseif($gaji->jam_kerja >= 200)
        @php $uang = $uanggaji*7.5/100; @endphp
    @elseif($gaji->jam_kerja >= 150)
        @php $uang = $uanggaji*5/100; @endphp

    @endif

    Gaji : <b>{{ $uang }}</b><br>
    Total Gaji      : <b>{{ $uanggaji+$uang }}</b>
    </fieldset>
</body>
</html>