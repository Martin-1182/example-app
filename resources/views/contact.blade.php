<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                     <h1 class="text-2xl">Contact Page</h1>
                </div>
                <div class="flex flex-wrap -mx-2 overflow-hidden p-6">
                    <livewire:contact-form />
                <div class="my-2 px-6 w-full overflow-hidden lg:w-full xl:w-1/2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo animi delectus in sit, minus vitae. Magni optio deserunt unde facere maiores sapiente perspiciatis a, doloribus praesentium, mollitia aspernatur perferendis quaerat accusamus dolorem, temporibus et. Voluptatum cupiditate repellat explicabo laboriosam vero.
                </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
