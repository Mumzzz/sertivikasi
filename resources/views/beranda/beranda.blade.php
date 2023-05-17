@extends('template.main1')
@section('konten')
<div class="owl-carousel owl-theme hero-slider">
    <div class="slide slide2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 text-white">
                    <h1 class="display-3 my-4">Penerimaan Mahasiswa Baru<br /></h1>
                    <a href="{{ route('beranda.create')}}" class="btn btn-brand">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection