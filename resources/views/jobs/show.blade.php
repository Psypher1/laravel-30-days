<x-layout>
    <x-slot:title>
        Create Job
    </x-slot:title>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <section class="">
        <h2 class="text-2xl font-bold">{{ $job->title }} </h2>
        <p>This job pays {{ $job->salary }} per year </p>
        <div class="mt-6">
            <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
        </div>
    </section>

</x-layout>
