@extends('layouts.app')


@section('head')
<link rel="stylesheet" href="{{ asset('/vendor/css/editors/tinymce.css?ver=2.2.0') }}">
@endsection


@section('title', 'Tambahkan penggumuman')

@section('content')
<div class="components-preview wide-md mx-auto">
    <div class="nk-block-head nk-block-head-lg wide-sm">
        <div class="nk-block-head-content">
            <div class="nk-block-head-sub"><a class="back-to" href="{{ route('anno.index') }}"><em class="icon ni ni-arrow-left"></em><span>Penggumuman</span></a></div>
            <h3 class="nk-block-title fw-normal">Tambahkan Penggumuman</h3>
            <div class="nk-block-des">
                <p class="lead">Tambahkan penggumuman baru Anda</p>
            </div>
        </div>
    </div><!-- .nk-block-head -->
    <div class="nk-block nk-block-lg">
        <form method="POST" enctype="multipart/form-data" action="{{ route('anno.store') }}">
            @csrf
            @method('POST')
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h6 class="title nk-block-title">Judul penggumuman</h6>
                    <div class="nk-block-des">
                        <p>Masukan judul yang baik dan mudah dimengerti.</p>
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <input name="title" value="{{ $anno->title }}" type="text" class="form-control form-control-lg">
            </div>

            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h6 class="title nk-block-title">Deskripsi konten</h6>
                    <div class="nk-block-des">
                        <p>Masukan dekripsi konten penggumuman Anda</p>
                    </div>
                </div>
            </div>
            <div class="card card-bordered">
                <div class="card-inner">
                    <div name="content" class="tinymce-inline">
                        {!! $anno->content !!}
                    </div>
                </div>
            </div>
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h6 class="title nk-block-title">Status konten</h6>
                    <div class="nk-block-des">
                        <p>Pilih status konten Anda saat pertama kali dibuat</p>
                    </div>
                </div>
            </div>
            <div class="card card-bordered">
                <div class="card-inner">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="inactive" {{ $anno->inactive && 'checked' }}name="status" value="0" class="custom-control-input">
                        <label class="custom-control-label" for="inactive">Tangguhkan</label>
                    </div>
                    <div class="custom-control custom-radio ml-5">
                        <input type="radio" id="active"{{ $anno->active && 'checked' }} name="status" value="1" class="custom-control-input">
                        <label class="custom-control-label" for="active">Aktif</label>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary mt-5">Simpan perubahan</button>
        </form>

    </div><!-- .nk-block -->
</div><!-- .components-preview -->
@endsection


@section('script')
<script src="{{ asset('/vendor/js/libs/editors/tinymce.js?ver=2.2.1') }}"></script>
<script src="{{ asset('/vendor/js/editors.js?ver=2.2.0') }}"></script>

@endsection
