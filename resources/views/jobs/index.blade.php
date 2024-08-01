<x-layout>
    <div class="space-y-10">

        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">
                Let's find you a job
            </h1>
            
            <x-forms.form action="{{url('/search')}}" class="mt-6">
                <x-forms.input name="q" placeholder="Web developer.." :label="false" />
            </x-forms.form>

        </section>

        <section class="pt-10">
            <x-section-heading>Feauterd Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 space-x-1">
                @foreach($tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach($unfeaturedJobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
