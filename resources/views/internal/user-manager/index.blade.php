@extends('layouts.app')

@section('title', 'Dashboard pengguna')

@section('content')
<x-content-head title="Manager Pengguna " desc="Tambahkan pengguna administator" />

<div class="nk-block">
    <div class="card card-bordered card-stretch">
        <div class="card-inner-group">
            <div class="card-inner position-relative">
                <div class="card-title-group">
                    <div class="card-tools">
                        <div class="form-inline flex-nowrap gx-3">
                            <div class="form-wrap w-150px">
                                <select class="form-select form-select-sm" data-search="off" data-placeholder="Akses">
                                    <option value="">Akses</option>
                                    <option value="email">ADMIN</option>
                                    <option value="group">Normal</option>
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
                        </ul>
                    </div><!-- .card-tools -->
                </div><!-- .card-title-group -->
                <div class="card-search search-wrap" data-search="search">
                    <div class="card-body">
                        <div class="search-content">
                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Telusuri nama pengguna, contoh: Ayu Lestari">
                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                        </div>
                    </div>
                </div><!-- .card-search -->
            </div><!-- .card-inner -->
            <div class="card-inner p-0">
                <div class="nk-tb-list nk-tb-ulist">
                    <div class="nk-tb-item nk-tb-head">
                        <div class="nk-tb-col tb-col-mb"><span>Nama pengguna</span></div>
                        <div class="nk-tb-col tb-col-md"><span>Akses</span></div>
                        <div class="nk-tb-col tb-col-md"><span>Status</span></div>
                        <div class="nk-tb-col tb-col-md"><span>Ditambahkan pada</span></div>
                        <div class="nk-tb-col nk-tb-col-tools">&nbsp;</div>
                    </div><!-- .nk-tb-item -->
                    @foreach($users as $user)
                    <div class="nk-tb-item">
                        <div class="nk-tb-col">
                            <div class="user-card">
                                <div class="user-avatar">
                                    <em class="icon ni ni-user-fill"></em>
                                </div>
                                <div class="user-info">
                                    <span class="tb-lead">{{ Str::of($user->name)->title()  }} <span class="dot dot-success d-md-none ml-1"></span></span>
                                    <span>{{ $user->email }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="nk-tb-col">
                            <span>Akses</span>
                        </div>

                        <div class="nk-tb-col tb-col-md">
                            @if ($user->acitve)
                            <span class="tb-status text-info">Tersedia</span>
                            @else
                            <span class="tb-status text-danger">Ditangguhkan</span>
                            @endif
                        </div>

                        <div class="nk-tb-col tb-col-lg">
                            <span class="tb-date">{{ $user->created_at->locale('id_ID')->isoFormat('LLL') }}</span>
                        </div>

                        <div class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <a href="{{ route('user.edit', $user) }}" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Ubah">
                                        <em class="icon ni ni-pencil-fill-c"></em>
                                    </a>
                                </li>
                                <li>
                                    <form method="POST" action="">
                                        @csrf
                                        @method('POST')
                                        <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Hapus">
                                            <em class="icon ni ni-trash-fill"></em>
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div><!-- .nk-tb-item -->
                    @endforeach
                </div>
                @if (count($users) <= 0)
                <div class="text-center p-2">
                    <p>Tidak ada data yang tersedia</p>
                </div>
                @endif
            </div><!-- .card-inner -->
            {{ $users->links() }}
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
