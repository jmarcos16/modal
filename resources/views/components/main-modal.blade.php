<div x-data="{
    show: true,
    @if($attributes->wire('model')->value())
        show: @entangle($attributes->wire('model')->value()),
    @endif
    }"
    {{-- Show modal if $name --}}
    x-on:open-modal.window="show =($event.detail.name === {{$name}})"
    x-on:close-modal.window="show !($event.detail.name === {{$name}})"
    {{-- Close modal if click outside --}}
    x-on:click.away="show = false"
    x-on:keydown.escape.window="show = false"
    {{-- Transitions modal --}}
    x-transition:enter="ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    x-show="show"
    {{-- Style default --}}
    class="fixed inset-0 z-20 p-4 everflow"
    style="display: none;"
    >

    {{-- background blur --}}
    <div 
        x-on:click="show = false"  
        class="absolute inset-0 overflow-hidden transition-opacity bg-gray-400 bg-opacity-75"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0
        aria-hidden="true">
    </div>

    {{-- Modal body --}}
    <div class="flex flex-col w-full max-w-2xl mx-auto transform bg-white rounded shadow"> 
        <div class="flex items-center justify-between px-5 py-3 border-b">
            <div>Title Modal</div>
            <button x-on:click="show = false" class="text-2xl"> 
                &times;
            </button>
        </div>

        <div class="p-5">
            My body
        </div>

        <div class="flex items-center justify-end gap-2 p-3 border-t">
            <button class="px-4 py-2 text-white bg-indigo-500 rounded hover:bg-indigo-600">Save</button>
            {{-- <button class="px-4 py-2 text-red-600 bg-gray-200 border rounded">Cancel</button> --}}
            {{-- close button --}}
            <button 
                x-on:click="show = false"
                class="px-4 py-2 text-red-600 bg-gray-200 border rounded">Cancel</button>
            </button>

        </div>

    </div>



</div>