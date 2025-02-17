<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-surface-800 dark:bg-surface-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-surface-800 uppercase tracking-widest hover:bg-surface-700 dark:hover:bg-white focus:bg-surface-700 dark:focus:bg-white active:bg-surface-900 dark:active:bg-surface-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-surface-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
