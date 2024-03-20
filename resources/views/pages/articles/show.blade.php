<x-app-layout>
    @php
        $isReview = isset($isReview) ? true : false;
    @endphp

    <x-slot name="header">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
            <div class="d-block mb-4 mb-md-0">
                @if ($isReview)
                <h2 class="h4">Review Artikel</h2>
                <p class="mb-0">Review Artikel dari Penulis.</p>
                @else
                <h2 class="h4">Lihat Artikel</h2>
                <p class="mb-0">Detail Artikel.</p>
                @endif
            </div>
        </div>
    </x-slot>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>{{ $article->title }}</h2>
                <div class="d-flex gap-2">
                    <h6>{{ $article->user->name }}</h6>
                    |
                    <h6>{{ $article->created_at->format('d/m/Y') }}</h6>
                    |
                    <x-misc.article-status :status="$article->status"/>
                </div>
                <div class="mt-4">
                    {!! $article->content !!}
                </div>

                @if ($isReview && !in_array($article->status->value, ['approved', 'denied']))
                <hr class="mt-6">
                <div class="d-flex justify-content-end gap-2">
                    <form action="{{ route('articles.denied', $article) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger text-white">
                            <i class="fas fa-fw fa-xmark me-1"></i> Tolak
                        </button>
                    </form>

                    <form action="{{ route('articles.approved', $article) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-success text-white">
                            <i class="fas fa-fw fa-check me-1"></i> Terima
                        </button>
                    </form>
                </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
