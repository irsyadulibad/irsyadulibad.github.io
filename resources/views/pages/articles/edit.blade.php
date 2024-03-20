<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
            <div class="d-block mb-4 mb-md-0">
                <h2 class="h4">Edit Artikel</h2>
                <p class="mb-0">Edit konten artikel anda.</p>
            </div>
            @if (!in_array($article->status->value, ['approved', 'approval']))
            <div class="btn-toolbar mb-2 mb-md-0">
                <form action="{{ route('articles.approval', $article) }}" method="post" id="article-approval">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-tertiary d-inline-flex align-items-center">
                        <i class="fas fa-fw fa-file-invoice me-2"></i>
                        Review Admin
                    </button>
                </form>
            </div>
            @endif
        </div>
    </x-slot>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('articles.update', $article) }}" method="post" id="article-form">
                    @csrf
                    @method('PUT')

                    <x-article.form :article="$article" />
                </form>
            </div>
        </div>
    </div>

    @push('script')
    <script>
        $('#article-approval').submit(function(e) {
            e.preventDefault();

            Swal.fire({
                icon: 'question',
                title: 'Konfirmasi',
                text: 'Pastikan anda telah mengklik tombol simpan terlebih dahulu jika terdapat perubahan',
                showCancelButton: true,
            }).then((result) => {
                if(result.isConfirmed)
                    this.submit();
            });
        });
    </script>
    @endpush
</x-app-layout>
