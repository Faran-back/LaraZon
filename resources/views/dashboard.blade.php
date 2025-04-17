<x-app-layout>

    <style>
        .filament-alert {
        font-size: 14px;
        padding: 8px 16px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);  /* Soft shadow */
    }
    </style>

@if (session()->has('success'))
<script>
    document.addEventListener("DOMContentLoaded", function () {
        window.dispatchEvent(new CustomEvent("filament-notification", {
            detail: {
                title: "Success",
                message: "{{ session('success') }}",
                type: "success",
            },
        }));
    });
</script>
@endif

@if (session()->has('error'))
<script>
    document.addEventListener("DOMContentLoaded", function () {
        window.dispatchEvent(new CustomEvent("filament-notification", {
            detail: {
                title: "Error",
                message: "{{ session('error') }}",
                type: "danger",
            },
        }));
    });
</script>
@endif


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Welcome ") }} {{ auth()->user()->name }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
