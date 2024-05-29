<x-layout>
    <x-slot:title>
        {{ $job->title }}
    </x-slot:title>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <section class="">
        <h2 class="text-2xl font-bold">{{ $job->title }} </h2>
        <p>This job pays {{ $job->salary }} per year </p>

        @can('edit', $job)
            <div class="mt-6">
                <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
            </div>
        @endcan
    </section>

</x-layout>
