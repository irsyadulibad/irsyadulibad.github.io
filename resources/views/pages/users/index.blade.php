<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
            <div class="d-block mb-4 mb-md-0">
                <h2 class="h4">Daftar Pengguna</h2>
                <p class="mb-0">Semua Pengguna yang Terdaftar.</p>
            </div>
        </div>
    </x-slot>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="users-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Nama</th>
                                <th>Peran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->role }}</td>
                                <td class="d-flex gap-1">
                                    <form action="{{ route('users.destroy', $user) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger text-white" title="Hapus">
                                            <i class="fas fa-fw fa-trash"></i>
                                        </button>
                                    </form>
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
            document.getElementById('users-table')
        );
    </script>
    @endpush
</x-app-layout>
