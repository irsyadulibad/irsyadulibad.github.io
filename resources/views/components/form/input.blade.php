<input class="form-control @error($name) is-invalid @enderror" placeholder="{{ $placeholder ?? '' }}" id="{{ $name }}" name="{{ $name }}" type="{{ $type ?? 'text' }}">

@error($name)
    <div class="invalid-feedback">{{ $message }}</div>
@enderror
