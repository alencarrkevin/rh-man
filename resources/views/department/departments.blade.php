<x-layout-app page-title="Departments">

    <div class="p-4 w-100">

        <h3>Departamentos</h3>

        <hr>

        @if($departments->count() === 0)

            <div class="my-5 text-center">
                <p>Nenhum Departamento encontrado.</p>
                <a href="{{ route('departments.new-department') }}" class="btn btn-primary">Criar Um Novo Departamento</a>
            </div>

        @else

            <div class="mb-3">
                <a href="{{ route('departments.new-department') }}" class="btn btn-primary">Criar Novo Departamento</a>
            </div>

            <table class="table" id="table">
                <thead class="table-dark">
                    <th>Departamentos</th>
                    <th></th>
                </thead>
                <tbody>

                    @foreach ($departments as $department)

                        <tr>
                            <td>{{ $department->name }}</td>
                            <td>

                                <div class="gap-3 d-flex justify-content-end">
                                    @if(in_array($department->id, [1,2]))
                                        <i class="fa-solid fa-lock"></i>
                                    @else
                                        <a href="{{ route('departments.edit-department', ['id' => $department->id]) }}" class="btn btn-sm btn-outline-dark ms-3"><i class="fa-regular fa-pen-to-square me-2"></i>Editar</a>
                                        <a href="{{ route('departments.delete-department', ['id' => $department->id])}}" class="btn btn-sm btn-outline-dark ms-3"><i class="fa-regular fa-trash-can me-2"></i>Deletar</a>
                                    @endif
                                </div>

                            </td>
                        </tr>

                    @endforeach

                </tbody>
            </table>

        @endif

    </div>

</x-layout-app>
