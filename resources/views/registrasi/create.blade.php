@extends('template.main')
@section('konten')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Form Elements</div>
        </div>
        <form action="{{ route('registrasi.store') }}" method="post">
            @method('PUT')
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 col-lg-3">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">No Reg</span>
                                </div>
                                <input name="no_reg" type="text" class="form-control {{ $errors->first('email') ? "is-invalid":""}}" placeholder="Masukan no reg" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="form-group form-floating-label">
                            <select name="jk_id" class="form-control input-border-bottom" id="selectFloatingLabel" required="">
                                @foreach($data1 as $item)
                                <option hidden></option>
                                <option value="{{$item->id}}">{{$item->jk}}</option>
                                @endforeach
                            </select>
                            <label for="selectFloatingLabel" class="placeholder">Jenis Kelamin</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Nama</span>
                                </div>
                                <input name="nama" type="text" class="form-control {{ $errors->first('kota') ? "is-invalid":""}}" placeholder="Masukan nama" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Alamat</span>
                                </div>
                                <input name="alamat" type="text" class="form-control {{ $errors->first('email') ? "is-invalid":""}}" placeholder="Masukan alamat" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Agama</span>
                                </div>
                                <input name="agama" type="text" class="form-control {{ $errors->first('email') ? "is-invalid":""}}" placeholder="Masukan agama" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Asal Sekolah</span>
                                </div>
                                <input name="asal_sekolah" type="text" class="form-control {{ $errors->first('email') ? "is-invalid":""}}" placeholder="Masukan Asal sekolah" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="form-group form-floating-label">
                            <select name="jurusan_id" class="form-control input-border-bottom" id="selectFloatingLabel" required="">
                                @foreach($data2 as $item)
                                <option hidden></option>
                                <option value="{{$item->id}}">{{$item->jurusan}}</option>
                                @endforeach
                            </select>
                            <label for="selectFloatingLabel" class="placeholder">Jurusan</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-action">
                <button class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection