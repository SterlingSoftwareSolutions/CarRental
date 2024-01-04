@props([
    'open' => true,
    'title' => "Accordion"
])

<div x-data="{ open: {{$open}} }" class="rounded-md overflow-clip mt-4" >
    <div class="w-full p-2 cursor-pointer flex justify-between items-center bg-slate-200 bg-opacity-50 hover:bg-opacity-75 transition-colors" x-on:click="open = !open">                            
        <h1 class="w-full font-light text-slate-800">{{$title}}</h1>
        <div class="p-2 bg-white fa fa-angle-down fa-angle-up rounded-full text-slate-600" :class="{ 'fa-angle-up ': open }"></div>
    </div>
    <div class="flex flex-wrap bg-slate-50 pb-1" x-show="open">
        {{$slot}}
    </div>
</div>