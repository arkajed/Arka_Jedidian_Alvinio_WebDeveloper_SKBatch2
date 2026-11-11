<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Karir | Sekolah Karir</title>
    <link rel="stylesheet" href="{{ asset('css/recruitment.css') }}">
</head>
<body>
    <section class="recruitment" id="karir" aria-labelledby="karir-title">
        <div class="container">
            <header class="hero">
                <p class="eyebrow">{{ $content['eyebrow'] }}</p>
                <h1 id="karir-title">{{ $content['headline'] }}</h1>
                <p class="lead">{{ $content['subheadline'] }}</p>
                <a class="btn btn-primary" href="{{ $content['cta_url'] }}">{{ $content['cta_label'] }}</a>
            </header>

            <div class="role-grid" id="lamar">
                @foreach ($content['roles'] as $role)
                    <article class="role-card">
                        <div class="role-meta">
                            <span>{{ $role['type'] }}</span>
                            <span>{{ $role['location'] }}</span>
                        </div>
                        <h2>{{ $role['title'] }}</h2>
                        <p>{{ $role['summary'] }}</p>
                        <ul class="tags">
                            @foreach ($role['tags'] as $tag)
                                <li>{{ $tag }}</li>
                            @endforeach
                        </ul>
                        <a class="btn btn-outline" href="{{ $content['cta_url'] }}" aria-label="Lamar posisi {{ $role['title'] }}">Lamar posisi ini</a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
</body>
</html>
