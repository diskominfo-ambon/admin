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
                <input name="title" value="{{ old('title') }}" type="text" class="form-control form-control-lg">
            @error('title')
            <span class="d-block text-danger mb-3 mt-1">{{ $message }}</span>
            @enderror
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
                        {!! old('content') !!}
                    </div>
                    <textarea name="content" class="d-hide" id="editor">{{ old('content') }}</textarea>
                </div>
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
                        <input type="file" name="attachment" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                </div>
                @error('attachment')
                <span class="d-block text-danger mb-3 mt-1">{{ $message }}</span>
                @enderror
            </div>




            <button class="btn btn-primary">Tambahkan</button>
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
