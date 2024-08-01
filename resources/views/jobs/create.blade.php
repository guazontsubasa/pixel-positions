<x-layout>
    <x-page-heading>Create a Job</x-page-heading>

    <x-forms.form method="POST" action="{{url('/jobs')}}">
        <x-forms.input name="title" label="Title" placeholder="CEO" />
        <x-forms.input name="salary" label="Salary" placeholder="100.000" />
        <x-forms.input name="location" label="Location" placeholder="Remote" />

        <x-forms.select label="schedule" name="schedule">
            <option value="Full Time">Full time</option>
            <option value="Part Time">Part time</option>
        </x-forms.select>

        <x-forms.input name="url" label="URL" placeholder="https://example.com" />

        <x-forms.checkbox name="featured" label="Featured (costs extra)" />

        <x-forms.divider />

        <x-forms.input name="tags" label="Tags (comma separated)" placeholder="backend, frontend, fullstack.." />

        <x-forms.button>Create Job</x-forms.button>
    </x-forms.form>
</x-layout>