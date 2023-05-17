@extends('template.main')
@section('konten')

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Daftar registrasi</div>
            <a href="{{ route('registrasi.create')}}"><button class="btn btn-primary btn-xs float-right">Tambah Costumer</button></a>

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
                        <th csope="col">Crud</th>
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
                        <td>{{$item->jk->jk}}</td>
                        <td>{{$item->alamat}}</td>
                        <td>{{$item->asal_sekolah}}</td>
                        <td>{{$item->agama}}</td>
                        <td>
                            <a href="{{ route('registrasi.edit',$item->id)}}" style="text-decoration: none">
                                <button type="button" class="btn btn-icon btn-round btn-secondary">
                                    <i class="fas fa-edit"></i>
                                </button></a> &nbsp;
                            <a href="{{ route('registrasi.destroy',$item->id)}}">
                                <button onclick="return confirm('Apakah yakin data ini dihapus?')" type="button" class="btn btn-icon btn-round btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button></a>
                        </td>

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
@include('sweetalert::alert')

@endsection