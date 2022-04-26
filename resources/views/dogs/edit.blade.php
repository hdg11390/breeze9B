<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pedigree') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in to the Edit page!
                </div>
<x-panel>
                <form action="/dogs/update/{{ $dog->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <x-form.input name="callName" :value="old('callName', $dog->callName)"/>
        
                    <x-form.input name="regName" :value="old('regName', $dog->regName)"/>

                    <x-form.input name="slug" :value="old('slug', $dog->slug)"/>   

                    <x-form.field>
                        <x-form.label name="sire" />
        
                            <select name="mped_id" id="mped_id">
                                @foreach (\App\Models\Mped::all()->sortBy('callName') as $mped)
                                <option 
                                    value="{{ $mped->id }}"
                                    {{ old('mped_id', $dog->mped_id) == $mped->id ? 'selected' : '' }}
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
                                    {{ old('fped_id', $dog->fped_id) == $fped->id ? 'selected' : '' }}
                                    >{{ ucwords($fped->callName) }}</option>
                                 @endforeach
                            </select>
                            
                        <x-form.error name="dame" />
                    </x-form.field>

                    <x-form.textarea name="clearances">{{ old('clearances', $dog->clearances) }}</x-form.textarea>
                    <x-form.input name="birthday" type="date" :value="old('birthday', $dog->birthday)"/>
                    <x-form.input name="pic" type="file"/>
                    <x-form.input name="wpage" :value="old('wpage', $dog->wpage)"/>
                    <x-form.input name="dogstat" :value="old('dogstat', $dog->dogstat)"/>
                    <x-form.input name="colour" :value="old('colour', $dog->colour)"/>
                    <x-form.input name="sex" :value="old('sex', $dog->sex)"/>
                    <x-form.textarea name="blurb">{{ old('blurb', $dog->blurb) }}</x-form.textarea>
                    @if($errors->any())
                        <ul>
                            @foreach($errors->all() as $error)
                            <li class="text-red-500 text-xs">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                 <x-form.button>Update Dog</x-form.button>
                 </form>
                 
            </x-panel>
            </div>
        </div>
    </div>

    
</x-app-layout>
