<x-auth-layout>
    <!-- Section -->
    <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center form-bg-image" data-background-lg="{{ asset('img/illustrations/signin.svg') }}">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                        <div class="text-center text-md-center mb-4 mt-md-0">
                            <h1 class="mb-0 h3">Buat akun baru </h1>
                        </div>
                        <form action="" class="mt-4" method="POST">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="name">Nama Lengkap</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fa-solid fa-fw fa-envelope"></i>
                                    </span>
                                    <x-form.input name="name" placeholder="Nama anda" />
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="email">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fa-solid fa-fw fa-envelope"></i>
                                    </span>
                                    <x-form.input name="email" placeholder="example@company.com" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group mb-4">
                                    <label for="password">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon2">
                                            <i class="fa-solid fa-fw fa-lock"></i>
                                        </span>
                                        <x-form.input type="password" name="password" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="confirm_password">Konfirmasi Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon2">
                                            <i class="fa-solid fa-fw fa-lock"></i>
                                        </span>
                                        <x-form.input type="password" name="confirm_password" placeholder="Konfirmasi Password" />
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-gray-800">Buat Akun</button>
                            </div>
                        </form>
                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <span class="fw-normal">
                                Sudah mempunyai akun?
                                <a href="{{ route('login') }}" class="fw-bold">Login</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-auth-layout>
