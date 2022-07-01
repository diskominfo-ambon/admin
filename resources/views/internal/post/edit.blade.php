@extends('layouts.app')


@section('head')
<link rel="stylesheet" href="{{ asset('/vendor/css/editors/tinymce.css?ver=2.2.0') }}">
@endsection


@section('title', 'Tambahkan kegiatan')

@section('content')
<div class="components-preview wide-md mx-auto">
    <div class="nk-block-head nk-block-head-lg wide-sm">
        <div class="nk-block-head-content">
            <div class="nk-block-head-sub"><a class="back-to" href="{{ route('post.index') }}"><em class="icon ni ni-arrow-left"></em><span>Kegiatan</span></a></div>
            <h3 class="nk-block-title fw-normal">Ubah kegiatan</h3>
            <div class="nk-block-des">
                <p class="lead">Ubah & simpan kegiatan Anda</p>
            </div>
        </div>
    </div><!-- .nk-block-head -->
    <div class="nk-block nk-block-lg">
        <form method="PUT" enctype="multipart/form-data" action="{{ route('post.update', $post) }}">
            @csrf
            @method('PUT')

            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h6 class="title nk-block-title">Gambar</h6>
                    <div class="nk-block-des">
                        <p>Upload gambar cover untuk kegiatan Anda.</p>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <div class="form-control-wrap">
                    <div class="input-group input-group-lg">
                        <input type="file" name="pictureUrl" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                </div>
            </div>

            <div class="mb-5">
                <img src="{{ asset('/storage/'.$post->pictureUrl) }}" alt="cover" class="img-thumbnail w-100">
            </div>
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h6 class="title nk-block-title">Judul kegiatan</h6>
                    <div class="nk-block-des">
                        <p>Masukan judul yang baik dan mudah dimengerti.</p>
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <input name="title" value="{{ $post->title }}" type="text" class="form-control form-control-lg">
            </div>

            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h6 class="title nk-block-title">Deskripsi konten</h6>
                    <div class="nk-block-des">
                        <p>Masukan dekripsi konten kegiatan Anda</p>
                    </div>
                </div>
            </div>
            <div class="card card-bordered">
                <div class="card-inner">
                    <div name="content" class="tinymce-inline">
                        {!! $post->content !!}
                    </div>
                    <textarea name="content" class="d-hide" id="editor">{{ $post->content }}</textarea>
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
                        <input type="radio" {{ $post->inactive && 'checked'  }}  value="0" id="inactive" name="status" class="custom-control-input">
                        <label class="custom-control-label" for="inactive">Tangguhkan</label>
                    </div>
                    <div class="custom-control custom-radio ml-5">
                        <input type="radio" {{ $post->active && 'checked'  }} id="active" value="1" name="status" class="custom-control-input">
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
<script>
    $('.tinymce-inline').on('keyup', function () {
        const content = $(this).html();
        $('#editor').val(content);
    });
</script>
@endsection
