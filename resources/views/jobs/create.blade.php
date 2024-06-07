<x-layout>
    <x-page-heading>New  Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="ksh 120,000" />
        <x-forms.input label="Location" name="location" placeholder="Focus Center, Nairobi" />

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://www.focuskenya.org/" />
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma seperated)" name="tags" Placeholder="MTec, Video, Education" />

        <x-forms.button>Publish</x-forms.button>

    </x-forms.form>
</x-layout>
