@extends('template.main')
@section('konten')

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Daftar registrasi</div>
            <a target="_blank" href="{{route('dashboard.cetak')}}">download pdf</a>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">No reg</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Asal sekolah</th>
                        <th scope="col">Agama</th>
                        <th csope="col">Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no =1;
                    @endphp
                    @foreach($data as $item)
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$item->no_reg}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->jk}}</td>
                        <td>{{$item->alamat}}</td>
                        <td>{{$item->asal_sekolah}}</td>
                        <td>{{$item->agama}}</td>
                        <td>{{$item->jurusan}}</td>
                    </tr>
                    @php
                    $no++;
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection