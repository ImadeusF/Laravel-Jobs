<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="first_name">First Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="first_name" id="first_name" placeholder="Write your first name" required />
                            <x-form-error name="first_name" />
                        </div>
                    </x-form-field>

                     <x-form-field>
                        <x-form-label for="last_name">Last Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="last_name" id="last_name" placeholder="Write your last name" required />
                            <x-form-error name="last_name" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="email" id="email" type="email" placeholder="Write your email" required />
                            <x-form-error name="email" />
                        </div>
                    </x-form-field>

                     <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password" id="password" type="password" placeholder="Write your password" required />
                            <x-form-error name="password" />
                        </div>
                    </x-form-field>

                     <x-form-field>
                        <x-form-label for="password_confirmation">Password Confirmation</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password_confirmation" id="password_confirmation" type="password" placeholder="Write your password again" required />
                            <x-form-error name="password_confirmation" />
                        </div>
                    </x-form-field>
                </div>
                
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="{{ route('home') }}" class="text-sm/6 font-semibold text-gray-900">
                <x-form-button>Register</x-form-button>
            </div>
    </form>

</x-layout>