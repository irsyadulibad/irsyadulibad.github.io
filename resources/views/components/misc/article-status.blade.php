@php

$background = match ($status->value) {
    'draft' => 'primary',
    'approval' => 'info',
    'approved' => 'success',
    'denied' => 'danger',
}
@endphp

<span class="badge bg-{{ $background }}">{{ showArticleStatus($status) }}</span>
