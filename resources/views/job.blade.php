<x-layout>
    <x-slot:heading>Here you will get the job description!</x-slot:heading>
    <x-slot:main>
    <h1 class="font-bold text-lg">Job title: {{ $job['title'] }}</h1>
    <p>
        This job pays: {{ $job['salary'] }}
    </p>
        </x-slot:main>
</x-layout>
