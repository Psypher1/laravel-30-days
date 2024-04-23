<x-layout>
    <x-slot:title>
        Home
    </x-slot:title>
    <x-slot:heading>
        Home
    </x-slot:heading>

    <section>

        @foreach ($jobs as $job)
            <li>{{ $job['title'] }} : Pays {{ $job['salary'] }} per year </li>
        @endforeach
    </section>
</x-layout>
