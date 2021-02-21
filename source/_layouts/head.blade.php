<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""> {{-- TODO: Add SEO descriptions --}}
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/icon.ico">
    @stack('open-graph')

    <title>{{ $page->title ? "{$page->title} | " : '' }}{{ $page->siteName }}</title>

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets') }}">
</head>
