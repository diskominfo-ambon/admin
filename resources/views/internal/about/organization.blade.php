@extends('layouts.app')


@section('head')
<link rel="stylesheet" href="{{ asset('/vendor/css/editors/tinymce.css?ver=2.2.0') }}">
@endsection


@section('title', 'Tambahkan tupoksi')

@section('content')
<div class="components-preview wide-md mx-auto">
    <div class="nk-block-head nk-block-head-lg wide-sm">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title fw-normal">Tambahkan Struktur organisasi</h3>
            <div class="nk-block-des">
                <p class="lead">Struktur organisasi Anda</p>
            </div>
        </div>
    </div><!-- .nk-block-head -->
    <div class="nk-block nk-block-lg">
        <form method="POST" enctype="multipart/form-data" action="{{ route('app.organization.store') }}">
            @csrf
            @method('PUT')

            @if (Str::of($organization?->content)->isNotEmpty())
            <div class="mb-4 img-thumbnail">
                <img class="w-100" src="{{ asset('/storage/'. $organization->content) }}" alt="struktur organization">
            </div>
            @endif
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h6 class="title nk-block-title">Unggah konten</h6>
                    <div class="nk-block-des">
                        <p>Masukan struktur organisasi Anda </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="form-control-wrap">
                    <div class="input-group input-group-lg">
                        <input type="file" name="pictureUrl" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                </div>
            </div>
            @error('pictureUrl')
            <span class="d-block my-1 text-danger">{{ $message }}</span>
            @enderror
            <button class="btn btn-primary mt-4">Simpan perubahan</button>
        </form>

    </div><!-- .nk-block -->
</div><!-- .components-preview -->
@endsection


@section('script')
<script src="{{ asset('/vendor/js/libs/editors/tinymce.js?ver=2.2.1') }}"></script>
<script src="{{ asset('/vendor/js/editors.js?ver=2.2.0') }}"></script>

@endsection
