@extends('layouts.app')


@section('head')
<link rel="stylesheet" href="{{ asset('/vendor/css/editors/tinymce.css?ver=2.2.0') }}">
@endsection


@section('title', 'Tambahkan tupoksi')

@section('content')
<div class="components-preview wide-md mx-auto">
    <div class="nk-block-head nk-block-head-lg wide-sm">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title fw-normal">Tambahkan tugas & fungsional</h3>
            <div class="nk-block-des">
                <p class="lead">Tambahkan agenda baru Anda</p>
            </div>
        </div>
    </div><!-- .nk-block-head -->
    <div class="nk-block nk-block-lg">
        <form method="POST" action="{{ route('app.task.store') }}">
            @csrf
            @method('PUT')


            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h6 class="title nk-block-title">Deskripsi konten</h6>
                    <div class="nk-block-des">
                        <p>Masukan dekripsi mengenai tugas & fungsional </p>
                    </div>
                </div>
            </div>
            <div class="card card-bordered">
                <div class="card-inner">
                    <div name="content" class="tinymce-inline">
                        {!! $task?->content !!}
                    </div>
                    <textarea name="content" class="d-hide" id="editor"></textarea>
                </div>
            </div>

            <button class="btn btn-primary mt-5">Simpan perubahan</button>
            <a class="btn btn-dark text-white mt-5">Lihat contoh</a>
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
