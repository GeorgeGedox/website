---
title: Personal website
---
@extends('_layouts.app', ['body_class' => 'homepage'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="jumbo-logo">
                    <img src="assets/images/logo.png" alt="Large logo">
                </div>
                <p>Hey there! I’m <strong>George</strong>.</p>
                <p>I’m a Full-Stack Web Developer, Web Designer and DevOps Engineer. Feel free to check out my <a href="{{ $page->baseUrl }}/blog">blog</a> or the <a href="{{ $page->baseUrl }}/stack">stack</a> page to see what I'm currently using. Most of my code can be found on GitHub, including the code for this website.</p>
                <p class="mb-5">Currently, I work at <a href="https://ro.deloittedigital.com/" target="_blank">Deloitte Digital</a> as a DevOps Engineer. My previous work history can be found on my LinkedIn profile.</p>
                <ul class="social">
                    <li class="anim-fadeInLeft"><a class="email-secure" data-email="{{ $page->encodedEmail }}" href="#" target="_blank" title="email"><i class="bx bx-envelope"></i> </a></li>
                    <li class="anim-fadeInLeft anim-delay-100"><a href="https://github.com/GeorgeGedox" target="_blank" title="Github"><i class="bx bxl-github"></i> Github</a></li>
                    <li class="anim-fadeInLeft anim-delay-200"><a href="https://dribbble.com/GeorgeGedox" target="_blank" title="Dribbble"><i class="bx bxl-dribbble"></i> Dribbble</a></li>
                    <li class="anim-fadeInLeft anim-delay-300"><a href="https://www.linkedin.com/in/iamgeorgevi" target="_blank" title="LinkedIn"><i class="bx bxl-linkedin"></i> LinkedIn</a></li>
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