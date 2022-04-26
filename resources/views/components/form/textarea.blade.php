@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}" />

    <textarea  class="border border-gray-200 p-1 w-full rounded"
        name="{{ $name }}"
        id="{{ $name }}"
        rows="5" 
    >{{ $slot ?? old($name) }}</textarea>

    <x-form.error name="{{ $name }}" />

</x-form.field>