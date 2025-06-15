{{-- <h1>{{ __('ui.bookslist') }}</h1>

<x-language-selector />

<br>
appLocale:
{{ $locale }}
<br>
cookieLocale:
{{ $cookieLocale }}
<br>
preferredLocale
{{ $preferredLocale }} --}}


<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('ui.bookslist') }}</title>
{{--    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Viteを使用している場合 --> --}}
</head>
<body>
    <h1>{{ __('ui.bookslist') }}</h1>

<form action="{{ route('web.change-language', ['locale' => $locale]) }}" method="POST">
    @csrf <!-- CSRFトークンを生成 -->
    <select name="locale" onchange="this.form.submit()">
        <option value="en" {{ $locale === 'en' ? 'selected' : '' }}>English</option>
        <option value="ja" {{ $locale === 'ja' ? 'selected' : '' }}>日本語</option>
        <!-- 他の言語オプションを追加することもできます -->
    </select>
</form>

    <br>
    <strong>appLocale:</strong> {{ $locale }}
    <br>
    <strong>cookieLocale:</strong> {{ $cookieLocale }}
    <br>
    <strong>preferredLocale:</strong> {{ $preferredLocale }}
</body>
</html>

