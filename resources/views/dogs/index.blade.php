<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List Of Dogs In The Database') }}
        </h2>
        
    </x-slot>
    <div class="py-12">
        <div class="max-w-6xl min-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <x-flash />
                  
<form action="" method="GET">
  <div class="flex justify-end p-4" >
    <input type="search" id="search" name ="search"
    placeholder="Search Call Names..."
    value={{ request('search') }}
   >
    <button class="px-6 bg-gray-200 border-2 border-gray-300 hover:bg-gray-400 rounded-md">Search</button>
  
</form>                 
</div>
<table class="table-fixed w-full">
  <thead class="">
    <tr class="border-b-2">
      <th>Call Name</th>
      <th>Sire Call Name</th>
      <th>Dame Call Name</th>
	  <th>Pedigree</th>
	  <th>Edit</th>
	  <th>Delete</th>
    </tr>
  </thead>
  <tbody>
		@foreach ($dogs as $dog )
		<tr class=" justify-items-center hover:bg-gray-100">
		<td class="border-b  font-bold">{{ $dog->callName }}</td>
		<td class="border-b ">{{ $dog->mped->callName }}</td>
		<td class="border-b ">{{ $dog->fped->callName }}</td>
		<td class="border-b text-center justify-items-center ">
      <a href="/dogs/show/{{ $dog->id }}">
      <button class=" 'inline-flex items-center px-2 py-1 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-800 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
        Pedigree</button></a>
    </td>
		<td class="border-b text-center justify-items-center ">
      <a href="/dogs/edit/{{ $dog->id }}">
      <button class=" 'inline-flex items-center px-6 py-1 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-800 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
        Edit</button></a>
    </td>
    <td class="border-b text-center justify-items-center ">
      <button class=" 'inline-flex items-center px-2 py-1 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-800 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
       Delete</button>
    </td>
    </tr>	
    	@endforeach

  </tbody>
</table>
<div class="pt-6">
  {{ $dogs->links() }}
</div>

				</div>
			</div>
		</div>
	</div>

                
</x-app-layout>