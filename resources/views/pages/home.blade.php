<x-front-layout>
    <h3 class="mt-4 text-center">Daftar Artikel</h3>

    <div class="row justify-content-center mt-4 gap-3">
        @foreach ($articles as $article)
        <div class="col-md-7">
            <a class="card text-decoration-none" href="{{ route('articles.read', $article) }}">
                <div class="card-body">
                    <h4>{{ $article->title }}</h4>
                    <p>{!! Str::limit($article->content, 175) !!}</p>
                    <small>{{ $article->created_at->format('d M Y') }}, {{ $article->user->name }}</small>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</x-front-layout>
