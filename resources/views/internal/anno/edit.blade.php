@extends('layouts.app')


@section('head')
<link rel="stylesheet" href="{{ asset('/vendor/css/editors/tinymce.css?ver=2.2.0') }}">
@endsection


@section('title', 'Ubah penggumuman')

@section('content')
<div class="components-preview wide-md mx-auto">
    <div class="nk-block-head nk-block-head-lg wide-sm">
        <div class="nk-block-head-content">
            <div class="nk-block-head-sub"><a class="back-to" href="{{ route('anno.index') }}"><em class="icon ni ni-arrow-left"></em><span>Penggumuman</span></a></div>
            <h3 class="nk-block-title fw-normal">Ubah Penggumuman</h3>
            <div class="nk-block-des">
                <p class="lead">Ubah penggumuman Anda</p>
            </div>
        </div>
    </div><!-- .nk-block-head -->
    <div class="nk-block nk-block-lg">
        <form method="POST" enctype="multipart/form-data" action="{{ route('anno.update', $anno) }}">
            @csrf
            @method('PUT')
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
            @error('title')
            <span class="d-block text-danger mb-3 mt-1">{{ $message }}</span>
            @enderror

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
                <textarea name="content" class="d-hide" id="editor">{!! $anno->content !!}</textarea>
            </div>
            @error('content')
            <span class="d-block text-danger mb-3 mt-1">{{ $message }}</span>
            @enderror

            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h6 class="title nk-block-title">Unggah berkas</h6>
                    <div class="nk-block-des">
                        <p>Upload berkas untuk tambahan penggumuman Anda.</p>
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <div class="form-control-wrap">
                    <div class="input-group input-group-lg">
                        <input type="file" name="pictureUrl" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                </div>
            </div>
            @error('attachment')
            <span class="d-block text-danger mb-3 mt-1">{{ $message }}</span>
            @enderror

            <ul class="list-group mb-5">
                <li class="list-group-item">
                    <a href="{{ asset('/storage/'. $anno->attachmentUrl) }}">{{ $anno->attachment }}</a>
                </li>
            </ul>

            <button class="btn btn-primary mt-5">Simpan perubahan</button>
        </form>

    </div><!-- .nk-block -->
</div><!-- .components-preview -->
@endsection


@section('script')
<script src="{{ asset('/vendor/js/libs/editors/tinymce.js?ver=2.2.1') }}"></script>
<script src="{{ asset('/vendor/js/editors.js?ver=2.2.0') }}"></script>
<script>
    $('.tinymce-inline').on('keyup', function () {
        const content = $(this).html();
        $('#editor').val(content);
    });
</script>
@endsection
