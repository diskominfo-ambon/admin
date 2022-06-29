@props([
    'title' => '',
    'desc' => ''
])

<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between g-3">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">{{ $title }}</h3>
            <div class="nk-block-des text-soft">
                <p>{{ $desc }}</p>
            </div>
        </div>
        <div class="nk-block-head-content">
            <a href="#" data-toggle="tooltip" data-placement="left" title="Tambahkan akses pengguna" class="btn btn-outline-primary d-none d-sm-inline-flex"><em class="icon ni ni-user-check-fill"></em></a>
        </div>
    </div>
</div><!-- .nk-block-head -->
