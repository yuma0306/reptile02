<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="container m-auto py-10 px-4 grid gap-5">
        <div class="p-4 sm:p-8 bg-white shadow rounded">
            <div class="max-w-xl">
                @include('owner.profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-white shadow rounded">
            <div class="max-w-xl">
                @include('owner.profile.partials.update-password-form')
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-white shadow rounded">
            <div>
                @include('owner.profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>
