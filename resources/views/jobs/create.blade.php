<x-layout>
    <x-slot:title> Create Job </x-slot:title>
    <x-slot:heading> Create Job </x-slot:heading>

    <section>
        <form method="POST" action="/jobs">
            @csrf
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">
                        Create a new job
                    </h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">
                        We only need a little bit of info from you.
                    </p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <x-form-field>
                            <x-form-label for="title">Title</x-form-label>

                            <div class="mt-1">
                                <x-form-input required type="text" name="title" id="title"
                                    placeholder="Power Ranger" required />

                                <x-form-error name="title" />

                            </div>
                        </x-form-field>
                        <x-form-field>
                            <x-form-label for="salary">Salary</x-form-label>

                            <div class="mt-1">
                                <x-form-input required type="text" name="salary" id="salary"
                                    placeholder="$50 000" required />

                                <x-form-error name="salary" />

                            </div>
                        </x-form-field>

                    </div>
                    {{-- <div class="mt-6">
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-red-600 italic">{{ $error }}</li>
                                @endforeach
                            </ul>

                        @endif
                    </div> --}}
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">
                    Cancel
                </button>
                <x-form-button>Create</x-form-button>

            </div>
        </form>
    </section>
</x-layout>
