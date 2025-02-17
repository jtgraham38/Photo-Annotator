<form wire:submit.prevent="save">
    <label for="file-upload" class="
        inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150
    ">
        <i class="fa fa-upload mr-3 fa-2x"></i>
        Upload Image
        <input id="file-upload" type="file" class="hidden" multiple wire:model="photos">
    </label>
 
    @error('photos.*') <span class="error">{{ $message }}</span> @enderror
 
    <button type="submit">Save Photo</button>
</form>