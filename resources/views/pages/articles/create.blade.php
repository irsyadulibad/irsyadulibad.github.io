<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
            <div class="d-block mb-4 mb-md-0">
                <h2 class="h4">Tambah Artikel</h2>
                <p class="mb-0">Tulis artikel baru anda.</p>
            </div>
        </div>
    </x-slot>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('articles.store') }}" method="post" id="article-form">
                    @csrf

                    <x-article.form :article="null" />
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
