<div class="inline">
    <button
        wire:click="$toggle('confirmingModelDeletion')"
        class="text-red-600 hover:text-red-900 mb-2 mr-2">Delete</button>
    <x-confirmation-modal wire:model="confirmingModelDeletion">
        <x-slot name="title">
            Delete
        </x-slot>

        <x-slot name="content">
            Are you sure you want to delete this record?
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('confirmingModelDeletion')" wire:loading.attr="disabled">
                Nevermind
            </x-secondary-button>

             <form class="inline-block" action="{{ $action }}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button
                    type="submit"
                    class="inline-flex items-center justify-center ml-4 px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                    Delete
                </button>
            </form>
        </x-slot>
    </x-confirmation-modal>
</div>
