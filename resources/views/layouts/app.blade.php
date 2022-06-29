<!DOCTYPE html>
<html lang="en" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">

    <!-- Page Title  -->
    <title>@yield('title')</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('/vendor/css/dashlite.css?ver=2.2.0') }}">
    @yield('head')
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <x-sidebar />
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <x-header />
                <!-- content @s -->
                <div class="nk-content mt-4">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <x-footer/>
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ asset('/vendor/js/bundle.js?ver=2.2.0') }}"></script>
    <script src="{{ asset('/vendor/js/scripts.js?ver=2.2.0') }}"></script>
    <script src="{{ asset('/vendor/js/charts/gd-default.js?ver=2.2.0') }}"></script>
    @yield('script')
</body>

</html>
