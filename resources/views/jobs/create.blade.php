<x-layout>
    <x-slot:heading>Create a new job!</x-slot:heading>
    <x-slot:slot>
        <form method="POST" action="/jobs">
            @csrf
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h1 class="text-base font-semibold leading-7 text-gray-900">Create a new job</h1>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Completing this fields would add a record in the
                        database</p>
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="title"
                                   class="block text-sm font-medium leading-6 text-gray-900">Job title</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="title" id="title"
                                           class="block flex-1 border-0 bg-transparent py-1.5 px-4 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                           placeholder="Programmer" required>
                                </div>
                                @error('title')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <label for="salary"
                                   class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="salary" id="salary" autocomplete="salary"
                                           class="block flex-1 border-0 bg-transparent py-1.5 px-4 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                           placeholder="Salary" required>
                                </div>
                                @error('salary')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        @if($errors->any())
                            <div class="sm:col-span-6">
                                <div
                                    class="mt-2 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                                    role="alert">
                                    <strong class="font-bold">Holy smokes!</strong>
                                    <span class="block sm:inline">Something seriously bad happened.</span>
                                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Save
                </button>
            </div>
        </form>
    </x-slot:slot>
</x-layout>
