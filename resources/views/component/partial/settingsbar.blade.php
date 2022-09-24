<aside class="fixed top-16">
  <div class="w-64 border-r ml-5" aria-label="Sidebar">
    <div class="overflow-y-auto py-4 px-3 bg-white rounded dark:bg-gray-800">
      <ul class="space-y-2">
        <li>
          <button type="button"
            class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group dark:text-white dark:hover:bg-gray-700"
            aria-controls="dropdown-profile" data-collapse-toggle="dropdown-profile">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
            </svg>
            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Account</span>
            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
          <ul id="dropdown-profile" class="py-2 space-y-2">
            <li>
              <a href="/profile" class="flex @if (request()->path() === 'profile') bg-gray-200
                @endif items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group
                hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700">Profile</a>
            </li>
            <li>
              <a href="/changepassword"
                class="flex @if (request()->path() === 'changepassword') bg-gray-200
                @endif items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700">Change
                Password</a>
            </li>
            <li>
              <a href="/changepin"
                class="flex @if (request()->path() === 'changepin') bg-gray-200
                @endif items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700">Change
                PIN</a>
            </li>
          </ul>
        </li>
        @can('admin')
        <li>
          <button type="button"
            class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group dark:text-white dark:hover:bg-gray-700"
            aria-controls="dropdown-admin" data-collapse-toggle="dropdown-admin">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
              </path>
            </svg>
            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Admin</span>
            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
          <ul id="dropdown-admin" class="py-2 space-y-2">
            <li>
              <a href="/admin/products" class="flex @if (request()->path() === 'admin/products') bg-gray-200
                @endif items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group
                hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700">Products</a>
            </li>
            <li>
              <a href="/changepassword"
                class="flex @if (request()->path() === 'changepassword') bg-gray-200
                @endif items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700">Category</a>
            </li>
            <li>
              <a href="/changepin"
                class="flex @if (request()->path() === 'changepin') bg-gray-200
                @endif items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700">League</a>
            </li>
          </ul>
        </li>
        @endcan
      </ul>
    </div>
  </div>
</aside>