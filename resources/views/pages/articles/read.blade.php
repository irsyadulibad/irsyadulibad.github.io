<x-front-layout>
    <div class="row justify-content-center">
        <div class="col-md-8 mb-4">
            <h1 class="mt-4">{{ $article->title }}</h1>
            <h6 class="pb-4">{{ $article->created_at->format('d M Y') }}, {{ $article->user->name }}</h6>

            <hr class="mt-4">

            {!! $article->content !!}

            <div class="d-flex justify-content-end mt-4">
                <a href="{{ route('home') }}"><p>Kembali</p></a>
            </div>
        </div>
    </div>
</x-front-layout>
