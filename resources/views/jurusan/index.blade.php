@extends('template.main')
@section('konten')

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Daftar registrasi</div>
            <a href="{{ route('jurusan.create')}}"><button class="btn btn-primary btn-xs float-right">Tambah Costumer</button></a>

        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Crud</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no =1;
                    @endphp
                    @foreach($data as $item)
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$item->jurusan}}</td>
                        <td>
                            <a href="{{ route('jurusan.edit',$item->id)}}" style="text-decoration: none">
                                <button type="button" class="btn btn-icon btn-round btn-secondary">
                                    <i class="fas fa-edit"></i>
                                </button></a> &nbsp;
                            <a href="{{ route('jurusan.destroy',$item->id)}}">
                                <button type="button" class="btn btn-icon btn-round btn-danger">
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
@endsection