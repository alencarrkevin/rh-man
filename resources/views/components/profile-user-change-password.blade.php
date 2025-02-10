<div class="col-3">
    <div class="p-5 border shadow-sm">
        <form action="{{ route('user.profile.update-password') }}" method="post">

            @csrf

            <h3>Editar Senha</h3>

            <div class="mb-3">
                <label for="current_password" class="form-label">Senha Atual</label>
                <input type="password" name="current_password" id="current_password" class="form-control">
                @error('current_password')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="new_password" class="form-label">Nova password</label>
                <input type="password" name="new_password" id="new_password" class="form-control">
                @error('new_password')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="new_password_confirmation" class="form-label">Confirmar Nova password</label>
                <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control">
                @error('new_password_confirmation')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Atualizar Senha</button>
            </div>

        </form>

        @if(session('error'))
        <div class="mt-3 alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

        @if(session('success'))
        <div class="mt-3 alert alert-success">
            {{ session('success') }}
        </div>
        @endif
    </div>
</div>
