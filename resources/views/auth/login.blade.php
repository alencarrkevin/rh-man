<x-layout-guest page-title="Login">

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row justify-content-center w-100">
            <div class="col-lg-4 col-md-6 col-sm-8 col-10">

                <!-- Logo -->
                <div class="mb-4 text-center">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" width="150">
                </div>

                <!-- Login Form -->
                <div class="p-4 border-0 shadow-sm card rounded-3">
                    <h4 class="mb-3 text-center fw-bold">Bem-vindo de volta</h4>

                    <form action="{{ route('login') }}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                            @error('email')
                                <div class="mt-1 text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="password" name="password">
                            @error('password')
                                <div class="mt-1 text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 d-flex justify-content-between align-items-center">
                            <a href="{{ route('password.request') }}" class="text-decoration-none small text-primary">Esqueceu sua senha?</a>
                        </div>

                        <button type="submit" class="py-2 btn btn-primary w-100">Entrar</button>
                    </form>

                    @if(session('status'))
                        <div class="mt-3 text-center alert alert-success small">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>

            </div>
        </div>
    </div>

</x-layout-guest>
