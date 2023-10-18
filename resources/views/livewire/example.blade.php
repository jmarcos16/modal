<?php

use Livewire\Volt\Component;

new class extends Component {
    public $modal = true;
}; ?>

<div>
    <button
        class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600" 
        wire:click="$toggle('modal')">Open Modal</button>

        <x-main-modal name="open-modal" wire:model="modal"></x-main-modal>
</div>
