@extends('_layouts.app', ['body_class' => 'article-view'])

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <div class="heading mb-5">
                    @if (!$page->hiddenDate)<span>{{ date('d M Y', $page->date) }}</span>@endif
                    <h1 class="title">{{ $page->title }}</h1>
                </div>
                @yield('article-content')
            </div>
        </div>
    </div>
@endsection
