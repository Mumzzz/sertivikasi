@extends('template.main1')
@section('konten')

<div class="container-fluid mb-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Form Pendaftaran Siswa Baru</div>
            </div>
            <form action="{{ route('beranda.store') }}" method="post">
                @method('PUT')
                @csrf
                <div class="container-fluid">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No registrasi</label>
                        <input name="no_reg" required="ew" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama</label>
                        <input name="nama" type="text" class="form-control" id="exampleInputPassword1" required="p">
                    </div>
                    <div class="form-group form-floating-label">
                        <label for="exampleInputPassword1" class="form-label">Jenis KElamin</label>
                        <select name="jk_id" class="form-select" aria-label="Default select example">
                            @foreach($data1 as $item)
                            <option hidden></option>
                            <option value="{{$item->id}}">{{$item->jk}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input name="alamat" required="ew" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Agama</label>
                        <input name="agama" required="ew" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Asal sekolah</label>
                        <input name="asal_sekolah" required="ew" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group form-floating-label mb-3">
                        <label for="exampleInputPassword1" class="form-label">Jurusan</label>
                        <select name="jurusan_id" class="form-select" aria-label="Default select example">
                            @foreach($data2 as $item)
                            <option hidden></option>
                            <option value="{{$item->id}}">{{$item->jurusan}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mb-1">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection