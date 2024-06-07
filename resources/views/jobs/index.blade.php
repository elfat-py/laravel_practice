<x-layout>
    <x-slot:heading>Looking for jobs!?</x-slot:heading>
    <x-slot:main>
        <div class="space-y-4">
        @foreach($jobs as $job)
                <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                    <div>{{ $job->employer->name }}</div>
                    <div>
                    <strong>{{ $job['title'] }}</strong> pays: {{ $job['salary'] }}
                    </div>
                </a>
        @endforeach
        </div>
        <div class="mt-4">
            {{ $jobs->links() }} <!-- Pagination links -->
        </div>
    </x-slot:main>
</x-layout>
