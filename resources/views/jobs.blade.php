<x-layout>
    <x-slot:title>
        Jobs
    </x-slot:title>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    <section class="mt-12">
        <ul class="grid grid-cols-3 gap-8">

            @foreach ($jobs as $job)
               
                    <a href="/jobs/{{ $job['id'] }}" class="text-xl border border-gray-300 p-5 rounded hover:shadow-md">
                        <span class="text-sm text-gray-600">{{ $job->employer->name }} </span>
                        <h3 class="text-blue-600 font-bold">{{ $job['title'] }}</h3>
                        <p class="text-base"> Pays {{ $job['salary'] }} per year</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>
    <div>
        {{ $jobs->links() }}
    </div>
</x-layout>
