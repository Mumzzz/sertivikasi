<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cetakpdf</title>
</head>

<body>
    <table class="static" align="center" rules="all" border="1px" style="width:95%;">
        <tr>
            <th>No</th>
            <th>No Reg</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Asal Sekolah</th>
            <th>Jurusan</th>
        </tr>
        @php
        $no =1;
        @endphp
        @foreach($data as $item)
        <tr>
            <td>{{$no}}</td>
            <td>{{$item->no_reg}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->jk->jk}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->agama}}</td>
            <td>{{$item->asal_sekolah}}</td>
            <td>{{$item->jurusan->jurusan}}</td>
        </tr>
        @php
        $no++;
        @endphp
        @endforeach
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>