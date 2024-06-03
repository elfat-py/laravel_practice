{{--<x-layout>--}}
{{--<x-slot:heading>--}}

{{--</x-slot:heading>--}}
{{--<h1>We are at home page!</h1>--}}

{{--</x-layout>--}}


<x-layout>

    <x-slot:heading>We are in the about page!</x-slot:heading>

    <x-slot:main>
        <h1>This is the h1</h1>
{{--        @foreach($jobs as $job)--}}
{{--            <ul>--}}
{{--                <li> {{ $job['role'] }}</li>--}}
{{--                <li>{{ $job['pay'] }}</li>--}}
{{--                <hr>--}}
{{--                <br>--}}
{{--            </ul>--}}
{{--        @endforeach--}}
    </x-slot:main>

</x-layout>
