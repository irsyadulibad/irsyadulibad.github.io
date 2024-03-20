<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
            <div class="d-block mb-4 mb-md-0">
                <h2 class="h4">Dashboard</h2>
                <p class="mb-0">Halo {{ Auth::user()->name }}, {{ greeting() }}.</p>
            </div>
        </div>
    </x-slot>

    <div class="col-md-3">
        <div class="card">
            <div class="card-body p-2 d-flex align-items-center gap-3">
                <div class="bg-primary rounded p-3">
                    <i class="fas fa-fw fa-book dashboard-icon"></i>
                </div>
                <div>
                    <h5 class="card-title m-0">Draft</h5>
                    <p class="card-text m-0">{{ $drafts }} artikel</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-body p-2 d-flex align-items-center gap-3">
                <div class="bg-tertiary rounded p-3">
                    <i class="fas fa-fw fa-file-invoice dashboard-icon"></i>
                </div>
                <div>
                    <h5 class="card-title m-0">Menunggu Review</h5>
                    <p class="card-text m-0">{{ $approvals }} artikel</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-body p-2 d-flex align-items-center gap-3">
                <div class="bg-success rounded p-3">
                    <i class="fas fa-fw fa-book-open dashboard-icon"></i>
                </div>
                <div>
                    <h5 class="card-title m-0">Terpublikasi</h5>
                    <p class="card-text m-0">{{ $approves }} artikel</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-body p-2 d-flex align-items-center gap-3">
                <div class="bg-danger rounded p-3">
                    <i class="fas fa-fw fa-receipt dashboard-icon"></i>
                </div>
                <div>
                    <h5 class="card-title m-0">Ditolak</h5>
                    <p class="card-text m-0">{{ $denies }} artikel</p>
                </div>
            </div>
        </div>
    </div>

    @push('style')
    <style>
        .dashboard-icon {
            font-size: 1.5rem;
            color: white;
        }
    </style>
    @endpush
</x-app-layout>
