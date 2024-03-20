<textarea name="content" class="d-none" id="content"></textarea>

<div class="mb-4 col-md-7">
    <label for="title">Judul Artikel</label>
    <x-form.input name="title" :value="$article?->title"/>
</div>
<div class="mb-4 col-12">
    <label>Konten Artikel</label>
    <div id="article-content">{!! $article?->content !!}</div>
</div>

<div class="col-12 d-flex justify-content-end">
    <button type="submit" class="btn btn-primary">
        <i class="fas fa-save me-2"></i> Simpan
    </button>
</div>

<x-vendor.wysiwyg/>

@push('script')
<script>
    const quill = new Quill('#article-content', {
        theme: 'snow',
    });

    $('#article-form').submit(function(e) {
        e.preventDefault();

        $('#content').val(quill.root.innerHTML);
        this.submit();
    });
</script>
@endpush
