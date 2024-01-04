@props([
    'open' => true,
    'title' => "Accordion"
])

<div x-data="{ open: {{$open}} }" class="rounded-md overflow-clip mt-4" >
    <div class="w-full p-2 cursor-pointer flex justify-between bg-gray-100 hover:bg-gray-200 transition-colors" x-on:click="open = !open">                            
        <h1 class="w-full text-lg text-gray-800">{{$title}}</h1>
        <div class="fa fa-angle-down p-2 bg-white rounded-full text-gray-600" x-show="!open"></div>
        <div class="fa fa-angle-up p-2 bg-white rounded-full text-gray-600" x-show="open"></div>
    </div>
    <div class="flex flex-wrap bg-gray-50 pb-1" x-show="open">
        {{$slot}}
    </div>
</div>