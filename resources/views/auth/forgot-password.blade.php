<x-layout-guest page-title="Recuperar senha">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-5">

                <!-- logo -->
                <div class="mb-5 text-center">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" width="200px">
                </div>

                <!-- forgot password -->
                <div class="p-5 card">

                    @if(!session('status'))

                        <p>Para recuperar a sua senha, por favor indique o seu email. Irá receber um email com um link para recuperar a senha.</p>

                        <form action="{{ route('password.email') }}" method="post">

                            @csrf

                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('login') }}">Já sei a minha senha?</a>
                                <button type="submit" class="px-4 btn btn-primary">Enviar email</button>
                            </div>

                        </form>

                    @else

                        <div class="mb-5 text-center">
                            <p>Se está registado nesta plataforma, irá receber um email com um link para recuperar a sua senha.</p>
                            <p class="mb-5">Por favor verifique a sua caixa de correio.</p>
                            <a href="{{ route('login') }}" class="px-4 btn btn-primary">Voltar ao login</a>
                        </div>

                    @endif

                </div>

            </div>s
        </div>
    </div>

</x-layout-guest>
