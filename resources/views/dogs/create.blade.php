<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Dogs To The Database') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  Enter the Dog's Credentials
                </div>
<x-panel>
                <form action="/store" method="POST" enctype="multipart/form-data">
                    @csrf

                    <x-form.input name="callName"/>
        
                    <x-form.input name="regName"/>

                    <x-form.input name="slug"/>   

                    <x-form.field>
                        <x-form.label name="sire" />
        
                            <select name="mped_id" id="mped_id">
                                @foreach (\App\Models\Mped::all()->sortBy('callName') as $mped)
                                <option 
                                    value="{{ $mped->id }}"
                                    {{ old('mped_id') == $mped->id ? 'selected' : '' }}
                                    >{{ ucwords($mped->callName) }}</option>
                                 @endforeach
                            </select>
                            
                        <x-form.error name="sire" />
                    </x-form.field>

                    <x-form.field>
                        <x-form.label name="dame" />
        
                            <select name="fped_id" id="fped_id">
                                @foreach (\App\Models\Fped::all()->sortBy('callName') as $fped)
                                <option 
                                    value="{{ $fped->id }}"
                                    {{ old('fped_id') == $fped->id ? 'selected' : '' }}
                                    >{{ ucwords($fped->callName) }}</option>
                                 @endforeach
                            </select>
                            
                        <x-form.error name="dame" />
                    </x-form.field>

                    <x-form.textarea name="clearances"/>
                    <x-form.input name="birthday" type="date"/>
                    <x-form.input name="pic" type="file"/>
                    <x-form.input name="wpage"/>
                    <x-form.input name="dogstat"/>
                    <x-form.input name="colour"/>
                    <x-form.input name="sex"/>
                    <x-form.textarea name="blurb"/>
                    @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                        <li class="text-red-500 text-xs">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                 <x-form.button>Add Dog</x-form.button>
                 </form>
                 
            </x-panel>
            </div>
        </div>
    </div>

    
</x-app-layout>
