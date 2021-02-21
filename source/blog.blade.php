---
title: Blog
activeNav: blog
---
@extends('_layouts.app', ['body_class' => 'blog'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title mb-5 text-center">
                    <h1>Blog</h1>
                    <span>Sacred place of ramblings</span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7">
                <article class="articles">
                    @foreach($articles as $article)
                        <article class="mb-3">
                            <div class="title">
                                <span><time>{{ date('d M Y', $article->date) }}</time></span>
                                <h2><a href="{{ $article->getUrl() }}">{{ $article->title }}</a></h2>
                            </div>
                            <div class="body">
                                <p>{{ $article->excerpt() }}</p>
                                <a href="{{ $article->getUrl() }}" class="button">Read more</a>
                            </div>
                            <div class="divider">
                                @include('_layouts._article_div_svg')
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
