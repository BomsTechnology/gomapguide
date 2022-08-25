<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <meta name="title" content="SEO ° Référencement Google | MapGuide">
    <meta name="description"
        content="Optimisez vos revenus en vous positionnant parmi les premiers
                résultats sur Google et en bénéficiant d'un profil parfaitement
                sécurisé sur Google">
    <meta name="keywords"
        content="seo, googlz seo, référencement, site web, google my business, site web, website, référencement google, google referencing, canada, france, meilleur résultat, business, google">

    {{-- Open Graph and Facebook --}}
    <meta property="og:url" content="{{ url('') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="SEO ° Référencement Google | MapGuide" />
    <meta property="og:site_name" content="SEO ° Référencement Google | MapGuide">
    <meta property="og:description"
        content="Optimisez vos revenus en vous positionnant parmi les premiers
                résultats sur Google et en bénéficiant d'un profil parfaitement
                sécurisé sur Google" />
    <meta property="og:image" content="{{ asset('/images/logo/logo1.png') }}" />

    {{-- Twitter --}}
    <meta property="twitter:card" content="{{ asset('/images/logo/logo1.png') }}">
    <meta name="twitter:creator" content="@MarcelinSigha">
    <meta property="twitter:url" content="{{ url('') }}">
    <meta property="twitter:title" content="SEO ° Référencement Google | MapGuide">
    <meta property="twitter:description"
        content="Optimisez vos revenus en vous positionnant parmi les premiers
                résultats sur Google et en bénéficiant d'un profil parfaitement
                sécurisé sur Google">
    <meta property="twitter:image" content="{{ asset('/images/logo/logo1.png') }}">

    <title>SEO ° Référencement Google | MapGuide - Accueil</title>
    <link rel="icon" sizes="76x76" href="{{ asset('/images/icon/logo.png') }}">

</head>

<body class=" font-overpass bg-white text-lg">
    <main id="app"></main>
    @vite('resources/ts/app.ts')
</body>

</html>
