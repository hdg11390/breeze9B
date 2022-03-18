@props(['name'])

<label  class="block mb-1 uppercase font-bold text-xs text-gray-700"
    for="{{ $name }}">
    {{ ($name) }}
</label>