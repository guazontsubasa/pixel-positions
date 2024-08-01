<x-layout>
    <x-page-heading>Results</x-page-heading>

    <div class="space-y-6">
        @if ($jobs->isEmpty())
            <p class="text-center">No jobs found</p>
        @endif  
        @foreach($jobs as $job)
            <x-job-card-wide :$job />
        @endforeach
    </div>
</x-layout>