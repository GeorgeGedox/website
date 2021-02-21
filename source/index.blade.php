@extends('_layouts.app', ['body_class' => 'homepage'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="jumbo-logo">
                    <img src="assets/images/logo.png" alt="Large logo">
                </div>
                <p>Hey there! I’m George. I’m a full-stack web designer and developer, systems architect and cloud automation specialist.</p>
                <p class="mb-5">Currently, I’m the Lead Developer at <a href="https://potentpages.com/" target="_blank">Potent Pages</a>, a startup offering a wide range of services and custom solutions, primarily focused on web and cloud development.</p>
                <ul class="social">
                    <li class="anim-fadeInLeft"><a class="email-secure" data-email="{{ $page->encodedEmail }}" href="#" target="_blank" title="email"><i class="bx bx-envelope"></i> </a></li>
                    <li class="anim-fadeInLeft anim-delay-100"><a href="#" target="_blank" title="Github"><i class="bx bxl-github"></i> Github</a></li>
                    <li class="anim-fadeInLeft anim-delay-200"><a href="#" target="_blank" title="Dribbble"><i class="bx bxl-dribbble"></i> Dribbble</a></li>
                    <li class="anim-fadeInLeft anim-delay-300"><a href="#" target="_blank" title="LinkedIn"><i class="bx bxl-linkedin"></i> LinkedIn</a></li>
                </ul>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <div class="laptop-special">
                    <div class="laptop-image">
                        <img src="assets/images/laptop.png" alt="Laptop">
                    </div>
                    <div class="laptop-decor">
                        @include('_layouts._decoration_laptop_svg')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection