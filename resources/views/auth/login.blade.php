<x-layout>
    <x-slot:title> Login </x-slot:title>
    <x-slot:heading> Login </x-slot:heading>

    <section>
        <form method="POST" action="/login">
            @csrf
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">


                    <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">



                        <x-form-field>
                            <x-form-label for="email">Email</x-form-label>

                            <div class="mt-1">
                                <x-form-input required type="email" name="email" id="email"
                                    placeholder="name@example.com" autocomplete="off" required />

                                <x-form-error name="email" />

                            </div>
                        </x-form-field>
                        <x-form-field>
                            <x-form-label for="password">Password</x-form-label>

                            <div class="mt-1">
                                <x-form-input required type="password" name="password" id="password"
                                    placeholder="********" autocomplete="off" required />

                                <x-form-error name="password" />

                            </div>
                        </x-form-field>


                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/" class="text-sm font-semibold leading-6 text-gray-900">
                    &larr; Back
                </a>
                <x-form-button>Login</x-form-button>

            </div>
        </form>
    </section>
</x-layout>
