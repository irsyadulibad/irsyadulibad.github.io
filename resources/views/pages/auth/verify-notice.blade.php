<x-auth-layout>
    <section class="vh-100 d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center d-flex align-items-center justify-content-center">
                    <div>
                        <h1 class="mt-5">Verifikasi Akun Anda</h1>
                        <p class="lead my-4">Anda harus memverifikasi akun anda terlebih dahulu untuk melanjutkan</p>

                        @if (!session()->has('resent'))
                            <p class="my-4">Tidak mendapatkan email verifikasi?</p>
                            <form action="{{ route('verification.resend') }}" method="post">
                                @csrf
                                <button type="submit" href="" class="btn btn-gray-800 d-inline-flex align-items-center justify-content-center mb-4">
                                    Kirim Ulang
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
                <div class="col-12">
                    @if (session()->has('resent'))
                    <div class="alert alert-success text-center">
                        Email verifikasi telah dikirimkan ke email anda
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</x-auth-layout>
