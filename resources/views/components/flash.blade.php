@if(session()->has('success'))
<div x-data="{ show: true}"
    x-init="setTimeout(() => show = false, 5000)"
    x-show="show"
    class="bg-blue-500 text-white px-4 rounded-xl ">
    <p>{{ session('success') }}</p>
</div>
 @endif