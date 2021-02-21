<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $page->siteDescription }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ $page->baseUrl }}/assets/images/favicons/apple-touch-icon.png?v=ngjRAej69d">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ $page->baseUrl }}/assets/images/favicons/favicon-32x32.png?v=ngjRAej69d">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ $page->baseUrl }}/assets/images/favicons/favicon-16x16.png?v=ngjRAej69d">
    <link rel="manifest" href="{{ $page->baseUrl }}/assets/images/favicons/site.webmanifest?v=ngjRAej69d">
    <link rel="mask-icon" href="{{ $page->baseUrl }}/assets/images/favicons/safari-pinned-tab.svg?v=ngjRAej69d" color="#ed279b">
    <link rel="shortcut icon" href="{{ $page->baseUrl }}/assets/images/favicons/favicon.ico?v=ngjRAej69d">

    <meta name="msapplication-TileColor" content="#141619">
    <meta name="msapplication-config" content="{{ $page->baseUrl }}/assets/images/favicons/browserconfig.xml?v=ngjRAej69d">
    <meta name="theme-color" content="#141619">

    <meta property="og:title" content="{{ $page->title }}"/>
    <meta property="og:site_name" content="{{ $page->siteName }}">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}" />
    <meta property="og:description" content="{{ $page->description ? $page->description : $page->siteDescription }}" />
    <meta property="og:image" content="{{ $page->baseUrl }}/assets/images/og_banner.png" />

    <title>{{ $page->title ? "{$page->title} | " : '' }}{{ $page->siteName }}</title>

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets') }}">
</head>
