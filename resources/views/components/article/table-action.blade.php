@role('admin')
    @if ($article->status->value == 'approval')
    <a href="{{ route('articles.review', $article) }}" class="btn btn-sm btn-tertiary text-white" title="Review">
        <i class="fas fa-fw fa-file-invoice"></i>
    </a>
    @else
    <a href="{{ route('articles.show', $article) }}" class="btn btn-sm btn-success text-white" title="Lihat">
        <i class="fas fa-fw fa-eye"></i>
    </a>
    @endif
@endrole

@role('writer')
<div class="btn-group">
    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-ellipsis"></i>
    </button>
    <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1" style="">
        <a class="dropdown-item d-flex align-items-center" href="{{ route('articles.edit', $article) }}">
            <i class="fas fa-fw fa-edit me-2"></i> Edit
        </a>
        @if (!in_array($article->status->value, ['approved', 'approval']))
        <form action="{{ route('articles.approval', $article) }}" method="post">
            @csrf
            <button class="dropdown-item d-flex align-items-center" type="submit">
                <i class="fas fa-fw fa-file-invoice me-2"></i> Review Admin
            </button>
        </form>
        @endif
    </div>
</div>
<form action="{{ route('articles.destroy', $article) }}" method="post">
    @csrf
    @method('DELETE')
    <i class="fas fa-fw fa-circle-xmark text-danger icon-submit" type="submit" title="Hapus"></i>
</form>
@endrole
