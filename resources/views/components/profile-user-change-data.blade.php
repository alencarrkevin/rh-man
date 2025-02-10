<div class="col-3">
    <div class="p-5 border shadow-sm">
        <form action="{{ route('user.profile.update-user-data') }}" method="post">

            @csrf

            <h3>Editar Dados do Usuário</h3>

            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $colaborator->name) }}">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email (Username)</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $colaborator->email) }}">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Atualizar Dados Do Usuário</button>
            </div>

        </form>

        @if(session('success_change_data'))
            <div class="mt-3 alert alert-success">
                {{ session('success_change_data') }}
            </div>
        @endif
    </div>
</div>
