<x-app-layout>
    <x-slot name="header">
        <h2 class="h5 mb-0">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <diV>
        <h1>hello</h1>
    </diV>

    <!-- <div class="row justify-content-center my-5">
        <div class="col">
            <h1>A</h1>
            <div class="card shadow-sm">
                <div class="card-body">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="card shadow-sm mt-4">
                <div class="card-body">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="card shadow-sm mt-4">
                <div class="card-body">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div> -->
</x-app-layout>
