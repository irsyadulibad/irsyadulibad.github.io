<x-auth-layout>
    <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
        <div class="container">
            {{-- <p class="text-center">
                <a href="/" class="d-flex align-items-center justify-content-center">
                    <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
                    Kembali ke beranda
                </a>
            </p> --}}
            <div class="row justify-content-center form-bg-image" data-background-lg="{{ asset('img/illustrations/signin.svg') }}">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                        <div class="text-center text-md-center mb-4 mt-md-0">
                            <h1 class="mb-0 h3">Login ke Platform Saya</h1>
                        </div>
                        <form action="" class="mt-4" method="POST">
                            @csrf

                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="email">Email Anda</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fa-solid fa-fw fa-envelope"></i>
                                    </span>
                                    <x-form.input name="email" placeholder="example@company.com" />
                                </div>
                            </div>
                            <!-- End of Form -->
                            <div class="form-group">
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="password">Password Anda</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon2">
                                            <i class="fa-solid fa-fw fa-lock"></i>
                                        </span>
                                        <x-form.input name="password" placeholder="Password" type="password" />
                                    </div>
                                </div>
                                <!-- End of Form -->
                                <div class="d-flex justify-content-between align-items-top mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" value="" id="remember">
                                        <label class="form-check-label mb-0" for="remember">
                                          Ingat saya
                                        </label>
                                    </div>
                                    <div><a href="{{ route('forgot-pass') }}" class="small text-right">Lupa password?</a></div>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-gray-800">Sign in</button>
                            </div>
                        </form>
                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <span class="fw-normal">
                                Belum terdaftar?
                                <a href="{{ route('register') }}" class="fw-bold">Buat akun</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-auth-layout>
