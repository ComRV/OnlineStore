<main class="mt-[5em] ml-[21em]">
  <h1 class="text-lg font-semibold">Change Password</h1>

  <form class="mt-8" action="/changepin" method="POST">
    @method('patch')
    @csrf
    @if (session()->has('success'))
    <div class="p-3 mb-2 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
      role="alert">
      <span class="font-medium">{{ session('success') }}</span>
    </div>
    @endif
    @if (auth()->user()->PIN !== null)
    <div class="mb-6">
      <label for="current_pin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Old
        PIN</label>
      @if (session()->has('matchpin'))
      <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ session('matchpin') }}
      </p>
      @endif
      @error('current_pin')
      <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $message }}
      </p>
      @enderror
      <input type="password" id="current_PIN"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
        name="current_pin" placeholder="123456" maxlength="6">
    </div>
    @else
    <p class="mb-2 text-sm text-red-600 dark:text-red-500">Your PIN not exist, please fill PIN
    </p>
    @endif
    <div class="mb-6">
      <label for="new_pin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">New
        PIN</label>
      @error('new_pin')
      <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $message }}
      </p>
      @enderror
      <input type="password" id="new_PIN"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
        name="new_pin" placeholder="123456" maxlength="6">
    </div>
    <div class="mb-3">
      <label for="confirm_PIN" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Confirm New
        PIN</label>
      @error('confirm_pin')
      <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $message }}
      </p>
      @enderror
      <input type="password" id="confirm_PIN"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
        name="confirm_pin" placeholder="123456" maxlength="6">
    </div>
    <button type="submit"
      class="text-white bg-emerald-600 hover:bg-emerald-700 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm px-[1em] py-2 text-center dark:bg-emerald-600 dark:hover:bg-emerald-600 dark:focus:ring-emerald-700">Change
      PIN</button>
  </form>

</main>