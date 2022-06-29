@extends('layouts.app')


@section('head')
<link rel="stylesheet" href="{{ asset('/vendor/css/editors/tinymce.css?ver=2.2.0') }}">
@endsection


@section('title', 'Tambahkan agenda')

@section('content')
<div class="components-preview wide-md mx-auto">
    <div class="nk-block-head nk-block-head-lg wide-sm">
        <div class="nk-block-head-content">
            <div class="nk-block-head-sub"><a class="back-to" href="{{ route('plan.index') }}"><em class="icon ni ni-arrow-left"></em><span>Agenda</span></a></div>
            <h3 class="nk-block-title fw-normal">Tambahkan Agenda</h3>
            <div class="nk-block-des">
                <p class="lead">Tambahkan agenda baru Anda</p>
            </div>
        </div>
    </div><!-- .nk-block-head -->
    <div class="nk-block nk-block-lg">
        <form method="POST" enctype="multipart/form-data" action="{{ route('plan.store') }}">
            @csrf
            @method('POST')

            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h6 class="title nk-block-title">Judul</h6>
                    <div class="nk-block-des">
                        <p>Masukan judul agenda Anda</p>
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <input name="title" value="{{ old('title') }}" type="text" class="form-control form-control-lg">
            </div>

            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h6 class="title nk-block-title">Deskripsi konten</h6>
                    <div class="nk-block-des">
                        <p>Masukan dekripsi konten agenda Anda</p>
                    </div>
                </div>
            </div>
            <div class="card card-bordered">
                <div class="card-inner">
                    <div name="content" class="tinymce-inline">
                        {{ old('content') }}
                    </div>
                </div>
            </div>
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h6 class="title nk-block-title">Waktu mulai & akhir</h6>
                    <div class="nk-block-des">
                        <p>Atur waktu mulai dan akhir agenda Anda</p>
                    </div>
                </div>
            </div>
            <div class="card card-bordered">
                <div class="card-inner">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="started" class="label">Waktu mulai</label>
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-left">
                                        <em class="icon ni ni-calendar"></em>
                                    </div>
                                    <input type="text" name="started" class="form-control date-picker" data-date-format="yyyy-mm-dd">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="ended" class="label">Waktu akhir</label>
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-left">
                                        <em class="icon ni ni-calendar"></em>
                                    </div>
                                    <input type="text" name="ended" class="form-control date-picker" data-date-format="yyyy-mm-dd">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary mt-5">Tambahkan agenda</button>
        </form>

    </div><!-- .nk-block -->
</div><!-- .components-preview -->
@endsection


@section('script')
<script src="{{ asset('/vendor/js/libs/editors/tinymce.js?ver=2.2.1') }}"></script>
<script src="{{ asset('/vendor/js/editors.js?ver=2.2.0') }}"></script>

@endsection
