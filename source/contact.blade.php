---
title: Contact
activeNav: contact
---
@extends('_layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title mb-5 text-center">
                    <h1>Contact</h1>
                    <span>Here's how you can find me</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="pr-md-5 col-sm-6">
                <p>I'm quite easy to get in contact with given that most of my time is spent interacting with some form of computer.</p>
                <p>The easiest way to get in contact would probably be either via email (<a class="email-secure" data-email="{{ $page->encodedEmail }}" href="#"></a>) or Discord (<a
                            href="https://discord.com" target="_blank">GeorgeGedox#7782</a>) but other methods listed here can work too.</p>
                <p>I'm open to discussions about almost anything, from projects and programming stuff to movies, music and games.</p>
            </div>
            <div class="pl-md-5 col-sm-6">
                <ul class="social">
                    <li class="anim-fadeInRight"><a href="https://github.com/GeorgeGedox" target="_blank" title="Github"><i class="bx bxl-github"></i> GeorgeGedox</a></li>
                    <li class="anim-fadeInRight anim-delay-100"><a href="https://dribbble.com/GeorgeGedox" target="_blank" title="Dribbble"><i class="bx bxl-dribbble"></i> GeorgeGedox</a></li>
                    <li class="anim-fadeInRight anim-delay-200"><a href="https://www.linkedin.com/in/iamgeorgevi" target="_blank" title="LinkedIn"><i class="bx bxl-linkedin"></i> iamgeorgevi</a></li>
                    <li class="anim-fadeInRight anim-delay-300"><a href="https://discord.com" target="_blank" title="Discord"><i class="bx bxl-discord"></i> GeorgeGedox#7782</a></li>
                    <li class="anim-fadeInRight anim-delay-400"><a href="https://twitter.com/IamGeorgeVi" target="_blank" title="Twitter"><i class="bx bxl-twitter"></i> @IamGeorgeVi</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection