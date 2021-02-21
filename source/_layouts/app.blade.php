<!doctype html>
<html lang="en">
@include('_layouts.head')
<body @if(!empty($body_class))class="{{ $body_class }}"@endif>
<div class="decoration top_left">
    @include('_layouts._decoration_svg')
</div>
<header>
    <div class="container">
        <div class="row justify-content-center justify-content-sm-between align-items-center flex-column flex-sm-row">
            <div class="logo">
                <a href="/">
                    @include('_layouts._logo_svg')
                </a>
            </div>
            <nav class="navigation">
                @include('_layouts.navigation')
            </nav>
        </div>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer>
    <p>&copy; georgev.design</p>
    <div class="decoration bottom_right d-none d-md-block">
        @include('_layouts._decoration_svg')
    </div>
</footer>
<script src="{{ mix('js/main.js', 'assets') }}"></script>
@stack('scripts')
</body>
</html>
