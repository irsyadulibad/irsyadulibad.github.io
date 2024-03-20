<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
            <div class="d-block mb-4 mb-md-0">
                <h2 class="h4">Artikel</h2>
                <p class="mb-0">Semua artikel yang ditulis.</p>
            </div>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="{{ route('articles.create') }}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                    <i class="fas fa-fw fa-plus me-2"></i>
                    Tambah Baru
                </a>
            </div>
        </div>
    </x-slot>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="article-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul</th>
                                @role('admin')
                                <th>Penulis</th>
                                @endrole
                                <th>Status</th>
                                <th>Dibuat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $article->title }}</td>
                                @role('admin')
                                <td>{{ $article->user->name }}</td>
                                @endrole
                                <td><x-misc.article-status :status="$article->status" /></td>
                                <td>{{ $article->created_at->format('d/m/Y')  }}</td>
                                <td class="d-flex gap-1">
                                    <x-article.table-action :article="$article"/>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push('script')
    <script>
        new simpleDatatables.DataTable(
            document.getElementById('article-table')
        );
    </script>
    @endpush
</x-app-layout>
