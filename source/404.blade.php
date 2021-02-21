---
title: 404
permalink: 404.html
---
@extends('_layouts.app', ['body_class' => 'not-found'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="py-5 text-center">
                    <img class="img-fluid mb-3" src="assets/images/404.png" alt="404">
                    <p>The page you were searching is no longer here. But here is a cat for your trouble :)</p>
                    <img class="img-fluid" style="max-width: 250px" src="https://cataas.com/cat/gif" alt="cat gif">
                </div>
            </div>
        </div>
    </div>
@endsection