<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="{{ route('jobs.store') }}">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Create a New Job</h2>
                <p class="mt-1 text-sm text-gray-600">We just need a handful of details from you.</p>
                <p class="mt-1 text-sm text-orange-600">You need to be registered and logued to be able to add a job.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="title" id="title" placeholder="CEO" required />
                            <x-form-error name="title" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="salary">Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="salary" id="salary" placeholder="$50,000 USD" required />
                            <x-form-error name="salary" />
                        </div>
                    </x-form-field>

                </div>
                <!-- <div class="mt-10">
                    @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                        <li class="text-red-500 italic">{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div> -->
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="{{ route('home') }}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <x-form-button>Save</x-form-button>
            </div>
    </form>

</x-layout>