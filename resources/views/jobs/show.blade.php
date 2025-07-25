<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2 class="font-bold text-lg text-blue hover:underline">{{ $job['title'] }} </h2>
    <p>This job pays {{ $job['salary'] }} per year.</p>


    @can('edit-job', $job)
    <p class="mt-6">
       <x-button href="{{ route('jobs.edit', $job->id) }}">Edit Job</x-button>
    </p>
    @endcan
</x-layout>