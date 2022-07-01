@extends('layouts.app')


@section('head')
<link rel="stylesheet" href="{{ asset('/vendor/css/editors/tinymce.css?ver=2.2.0') }}">
@endsection


@section('title', 'Tambahkan kegiatan')

@section('content')
<div class="components-preview wide-md mx-auto">
    <div class="nk-block-head nk-block-head-lg wide-sm">
        <div class="nk-block-head-content">
            <div class="nk-block-head-sub"><a class="back-to" href="{{ route('post.index') }}"><em class="icon ni ni-arrow-left"></em><span>Pengguna</span></a></div>
            <h3 class="nk-block-title fw-normal">Ubah pengguna</h3>
            <div class="nk-block-des">
                <p class="lead">Ubah pengguna {{ Str::of($user->name)->title() }}</p>
            </div>
        </div>
    </div><!-- .nk-block-head -->
    <div class="nk-block nk-block-lg">
        <form method="POST" enctype="multipart/form-data" action="{{ route('user.store') }}">
            @csrf
            @method('POST')

            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h6 class="title nk-block-title">Nama lengkap</h6>
                    <div class="nk-block-des">
                        <p>Masukan nama lengkap pengguna.</p>
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <input name="name" value="{{ $user->name }}" type="text" class="form-control form-control-lg">
            </div>


            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h6 class="title nk-block-title">Alamat email</h6>
                    <div class="nk-block-des">
                        <p>Masukan nama alamt email pengguna aktif.</p>
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <input name="email" value="{{ $user->email }}" type="text" class="form-control form-control-lg">
            </div>
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h6 class="title nk-block-title">Kata sandi</h6>
                    <div class="nk-block-des">
                        <p>Masukan kata sandi baru pengguna.</p>
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <input name="password" value="" type="password" class="form-control form-control-lg">
            </div>

            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h6 class="title nk-block-title">Status pengguna</h6>
                    <div class="nk-block-des">
                        <p>Pilih status akses pengguna</p>
                    </div>
                </div>
            </div>
            <div class="card card-bordered">
                <div class="card-inner">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="inactive" name="status" value="0" class="custom-control-input">
                        <label class="custom-control-label" for="inactive">Normal</label>
                    </div>
                    <div class="custom-control custom-radio ml-5">
                        <input type="radio" id="active" name="status" value="1" class="custom-control-input">
                        <label class="custom-control-label" for="active">ADMIN</label>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary mt-5">Simpan</button>
        </form>

    </div><!-- .nk-block -->
</div><!-- .components-preview -->
@endsection


@section('script')
<script src="{{ asset('/vendor/js/libs/editors/tinymce.js?ver=2.2.1') }}"></script>
<script src="{{ asset('/vendor/js/editors.js?ver=2.2.0') }}"></script>

@endsection
