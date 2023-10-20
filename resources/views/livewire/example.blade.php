<?php

use Livewire\Volt\Component;

new class extends Component {
    public $modal = false;
}; ?>

<div>
    <button
        class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600" 
        wire:click="$toggle('modal')">Open Modal</button>

        <x-main-modal name="open-modal" wire:model="modal" title="My Modal Test">
            <div class="px-5 py-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus laboriosam quis placeat aspernatur natus. Ipsum enim, nemo quaerat animi eius ullam eos ratione fuga perferendis aspernatur quas amet, dicta tempora.
            </div>

            <x-slot name="footer">
                <div class="px-5 py-3 border-t">
                    <x-primary-button>Save</x-primary-button>
                    <x-secondary-button wire:click="$toggle('modal')">Close</x-secondary-button>
                </div>
            </x-slot>
        </x-main-modal>
</div>
