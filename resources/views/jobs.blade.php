<x-layout>
    <x-slot:heading>Looking for jobs!?</x-slot:heading>
    <x-slot:main>
        @foreach($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}">
                    <strong>{{ $job['title'] }}</strong> pays: {{ $job['salary'] }}
                </a>
            </li>
        @endforeach
    </x-slot:main>
</x-layout>
