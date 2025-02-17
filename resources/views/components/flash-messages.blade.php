<div class="fixed bottom-4 right-4">
    @if(session()->has('error'))
        <div class="p-4 text-surface-900 dark:text-white bg-danger-300 dark:bg-danger-600 shadow-lg">
            <div class="flex justify-between">
                {{ session()->get('error') }}
                <button class="ml-4" onclick="event.target.parentNode.parentNode.parentNode.remove()"><i class="fa-solid fa-x hover:text-danger-500 hover:dark:text-danger-800"></i></button>
            </div>
        </div>
    @endif
    
    @if(session()->has('success'))
        <div class="p-4 text-surface-900 dark:text-white bg-success-300 dark:bg-success-600 shadow-lg">
            <div class="flex justify-between">
                {{ session()->get('success') }}
                <button class="ml-4" onclick="event.target.parentNode.parentNode.parentNode.remove()"><i class="fa-solid fa-x hover:text-success-500 hover:dark:text-success-800"></i></button>
            </div>
        </div>
    @endif

    @if(session()->has('info'))
        <div class="p-4 text-surface-900 dark:text-white bg-info-300 dark:bg-info-600 shadow-lg">
            <div class="flex justify-between">
                {{ session()->get('info') }}
                <button class="ml-4" onclick="event.target.parentNode.parentNode.parentNode.remove()"><i class="fa-solid fa-x hover:text-info-500 hover:dark:text-info-800"></i></button>
            </div>
        </div>
    @endif

    @if(session()->has('warning'))
        <div class="p-4 text-surface-900 dark:text-white bg-warning-300 dark:bg-warning-600 shadow-lg">
            <div class="flex justify-between">
                {{ session()->get('warning') }}
                <button class="ml-4" onclick="event.target.parentNode.parentNode.parentNode.remove()"><i class="fa-solid fa-x hover:text-warning-500 hover:dark:text-warning-800"></i></button>
            </div>
        </div>
    @endif
</div>