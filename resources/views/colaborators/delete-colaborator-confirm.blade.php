<x-layout-app page-title="Delete colaborator">

    <div class="p-4 w-25">

        <h3>Delete colaborator</h3>

        <hr>

        <p>Are you sure you want to delete this colaborator?</p>

        <div class="text-center">
            <h3 class="my-5">{{ $colaborator->name }}</h3>
            <p>{{ $colaborator->email }}</p>
            <a href="{{ route('colaborators.all-colaborators') }}" class="px-5 btn btn-secondary">No</a>
            <a href="{{ route('colaborators.delete-confirm', ['id' => $colaborator->id ]) }}" class="px-5 btn btn-danger">Yes</a>
        </div>

    </div>

</x-layout-app>
