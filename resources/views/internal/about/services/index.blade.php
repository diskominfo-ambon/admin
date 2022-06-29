@extends('layouts.app')

@section('title', 'Dashboard layanan')

@section('content')
<x-content-head title="Layanan" desc="Tambahkan layanan" />

<div class="nk-block">
    <div class="card card-bordered card-stretch">
        <div class="card-inner-group">
            <div class="card-inner position-relative">
                <div class="card-title-group">
                    <div class="card-tools mr-n1">
                        <ul class="btn-toolbar gx-1">
                            <li>
                                <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                            </li>
                        </ul>
                    </div><!-- .card-tools -->
                </div><!-- .card-title-group -->
                <div class="card-search search-wrap" data-search="search">
                    <div class="card-body">
                        <div class="search-content">
                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Telusuri nama layanan, contoh: E-LAPOR ....">
                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                        </div>
                    </div>
                </div><!-- .card-search -->
            </div><!-- .card-inner -->
            <div class="card-inner p-0">
                <div class="nk-tb-list nk-tb-ulist">
                    <div class="nk-tb-item nk-tb-head">
                        <div class="nk-tb-col tb-col-mb"><span>Nama layanan</span></div>
                        <div class="nk-tb-col tb-col-md"><span>Status</span></div>
                        <div class="nk-tb-col tb-col-lg"><span>Ditambahkan pada</span></div>
                        <div class="nk-tb-col"><span>Pengguna</span></div>
                        <div class="nk-tb-col nk-tb-col-tools">&nbsp;</div>
                    </div><!-- .nk-tb-item -->
                    <div class="nk-tb-item">

                        <div class="nk-tb-col">
                            <a href="#" class="font-weight-bold">Halo</a>
                        </div>
                        <div class="nk-tb-col tb-col-md">
                            <span class="tb-status text-info">Pending</span>
                        </div>

                        <div class="nk-tb-col tb-col-lg">
                            <span class="tb-date">03 Jan, 2020 12:45 AM</span>
                        </div>

                        <div class="nk-tb-col">
                            <div class="user-card">
                                <div class="user-avatar">
                                    <em class="icon ni ni-user-fill"></em>
                                </div>
                                <div class="user-info">
                                    <span class="tb-lead">Lonnie Ferguson <span class="dot dot-success d-md-none ml-1"></span></span>
                                    <span>UD01120</span>
                                </div>
                            </div>
                        </div>
                        <div class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <a href="html/kyc-details-regular.html" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="View">
                                        <em class="icon ni ni-eye-fill"></em>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Tangguhkan">
                                        <em class="icon ni ni-check-fill-c"></em>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Hapus">
                                        <em class="icon ni ni-trash-fill"></em>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- .nk-tb-item -->
                </div>
            </div><!-- .card-inner -->
            <div class="card-inner">
                <ul class="pagination justify-content-center justify-content-md-start">
                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul><!-- .pagination -->
            </div><!-- .card-inner -->
        </div><!-- .card-inner-group -->
    </div><!-- .card -->
</div><!-- .nk-block -->
@endsection
