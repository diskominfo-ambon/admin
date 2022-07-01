@extends('layouts.app')

@section('title', 'Dashboard agenda')

@section('content')
<x-content-head title="Agenda" desc="Semua agenda Anda" />

<div class="nk-block">
    <div class="card card-bordered card-stretch">
        <div class="card-inner-group">
            <div class="card-inner position-relative">
                <div class="card-title-group">
                    <div class="card-tools">
                        <div class="form-inline flex-nowrap gx-3">
                            <div class="form-wrap w-150px">
                                <select class="form-select form-select-sm" data-search="off" data-placeholder="Status">
                                    <option value="">Status</option>
                                    <option value="email">Selesai</option>
                                    <option value="group">Aktif</option>
                                    <option value="group">Tangguhkan</option>
                                </select>
                            </div>
                            <div class="btn-wrap">
                                <span class="d-none d-md-block"><button class="btn btn-dim btn-outline-light disabled">Terapkan</button></span>
                                <span class="d-md-none"><button class="btn btn-dim btn-outline-light btn-icon disabled"><em class="icon ni ni-arrow-right"></em></button></span>
                            </div>
                        </div>
                    </div><!-- .card-tools -->
                    <div class="card-tools mr-n1">
                        <ul class="btn-toolbar gx-1">
                            <li>
                                <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                            </li>
                            <li class="btn-toolbar-sep"></li>
                            <li>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-toggle="dropdown">
                                        <div class="dot dot-primary"></div>
                                        <em class="icon ni ni-filter-alt"></em>
                                    </a>
                                    <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-right">
                                        <div class="dropdown-head">
                                            <span class="sub-title dropdown-title">Telusuri bedasarkan tanggal</span>
                                        </div>
                                        <div class="dropdown-body dropdown-body-rg">
                                            <div class="row gx-6 gy-3">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-left">
                                                                <em class="icon ni ni-calendar"></em>
                                                            </div>
                                                            <input type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <button type="button" class="btn btn-outline-primary">Telusuri</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-foot between">
                                            <a class="clickable" href="#">Reset Filter</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- .card-tools -->
                </div><!-- .card-title-group -->
                <div class="card-search search-wrap" data-search="search">
                    <div class="card-body">
                        <div class="search-content">
                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Telusuri kegiatan bedasarkan judul, contoh: kegiatan ....">
                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                        </div>
                    </div>
                </div><!-- .card-search -->
            </div><!-- .card-inner -->
            <div class="card-inner p-0">
                <div class="nk-tb-list nk-tb-ulist">
                    <div class="nk-tb-item nk-tb-head">
                        <div class="nk-tb-col tb-col-mb"><span>Judul</span></div>
                        <div class="nk-tb-col tb-col-md"><span>Status</span></div>
                        <div class="nk-tb-col tb-col-lg"><span>Jadwal</span></div>
                        <div class="nk-tb-col tb-col-lg"><span>Ditambahkan pada</span></div>
                        <div class="nk-tb-col"><span>Pengguna</span></div>
                        <div class="nk-tb-col nk-tb-col-tools">&nbsp;</div>
                    </div><!-- .nk-tb-item -->
                    @foreach ($plans as $plan)
                    <div class="nk-tb-item">

                        <div class="nk-tb-col">
                            <a href="#" class="font-weight-bold">{{ $plan->title }}</a>
                        </div>
                        <div class="nk-tb-col tb-col-md">
                            @if ($plan->active)
                            <span class="tb-status text-info">Sedang aktif</span>
                            @elseif($plan->inactive)
                            <span class="tb-status text-danger">Ditangguhkan</span>
                            @else
                            <span class="tb-status text-success">Selesai</span>
                            @endif

                        </div>
                        <div class="nk-tb-col tb-col-lg">
                            <span class="tb-date">
                                {{ $plan->started->locale('id_ID')->isoFormat('LL') }} - {{ $plan->ended->locale('id_ID')->isoFormat('LL') }}
                            </span>
                        </div>

                        <div class="nk-tb-col tb-col-lg">
                            <span class="tb-date">{{ $plan->created_at->locale('id_ID')->isoFormat('LLL') }}</span>
                        </div>

                        <div class="nk-tb-col">
                            <div class="user-card">
                                <div class="user-avatar">
                                    <em class="icon ni ni-user-fill"></em>
                                </div>
                                <div class="user-info">
                                    <span class="tb-lead">{{ Str::of($plan->user->name)->title() }} <span class="dot dot-success d-md-none ml-1"></span></span>
                                    <span>{{ $plan->user->name }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <a href="{{ route('plan.edit', $plan) }}" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="View">
                                        <em class="icon ni ni-pen-fill"></em>
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
                    @endforeach
                </div>
            </div><!-- .card-inner -->
            {{ $plans->links() }}
            {{-- <div class="card-inner">
                <ul class="pagination justify-content-center justify-content-md-start">
                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul><!-- .pagination -->
            </div><!-- .card-inner --> --}}
        </div><!-- .card-inner-group -->
    </div><!-- .card -->
</div><!-- .nk-block -->
@endsection
