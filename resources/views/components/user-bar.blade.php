<div class="px-3 py-1 text-white d-flex justify-content-between bg-color-1">

    <!-- logo -->
    <div class="d-flex align-items-center">
        <a href="{{ route('home') }}">
            <img src="{{ asset('assets/images/favicon.png') }}" alt="logo" width="50px" class="img-fluid">
        </a>
        <h4 class="p-0 m-0 ms-3 text-primary">
            {{ config('app.name') }}
        </h4>
    </div>

    <!-- user -->
    <div class="d-flex align-items-center">
        <i class="fas fa-user-circle me-3"></i>
        <a href="{{ route('user.profile') }}" class="text-primary me-3">
            {{ auth()->user()->name }}
        </a>

        {{-- logout --}}
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-sm btn-danger">
                <i class="fas fa-sign-out-alt"></i>
            </button>
        </form>
    </div>

</div>
