<x-layout>
    <x-slot:title>
        Jobs
    </x-slot:title>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    <section class="">
        <ul class="grid grid-cols-3 gap-8">

            @foreach ($jobs as $job)
                <li class="border border-gray-400 p-4 rounded">
                    <a href="/jobs/{{ $job['id'] }}" class="text-xl hover:underline text-blue-700">
                        <b>{{ $job['title'] }}</b>
                    </a>
                    <p class="text-base"> Pays {{ $job['salary'] }} per year</p>
                </li>
            @endforeach
        </ul>
    </section>
</x-layout>
