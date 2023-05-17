@extends('template.main')
@section('konten')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Form Elements</div>
        </div>
        <form action="{{ route('jurusan.update', $edit['id']) }}" method="post">
            @method('PUT')
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 col-lg-3">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Nama Jurusan</span>
                                </div>
                                <input value="{{$edit['jurusan']}}" name="jurusan" type="text" class="form-control {{ $errors->first('email') ? "is-invalid":""}}" placeholder="Masukan jurusan" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
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