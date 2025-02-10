<x-layout-app page-title="User Profile">

    <div class="p-4 w-100">

        <h3>Perfil do usuário</h3>

        <hr>

        <x-profile-user-data />

        <hr>

        <div class="p-0 m-0 mt-5 container-fluid">
            <div class="row">

                <x-profile-user-change-password />

                <x-profile-user-change-data :colaborator="$colaborator" />

                <x-profile-user-change-address :colaborator="$colaborator" />

            </div>
        </div>

    </div>

</x-layout-app>
