<main class="mt-[5em] ml-[21em] w-[25vw]">
  <h1 class="text-lg font-semibold">Account</h1>
  <img src="/img/profile.jpg" alt="profile" class="rounded-full w-32 mt-4 mb-2">
  <p class="text-sm">Joined on {{ auth()->user()->created_at->format('F Y') }}</p>
  <form class="mt-5" action="/profile" method="post">
    @method('patch')
    @csrf
    @if (session()->has('success'))
    <div class="p-3 mb-2 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
      role="alert">
      <span class="font-medium">{{ session('success') }}</span>
    </div>
    @endif
    <div class="mb-6">
      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
      @error('name')
      <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $message }}
      </p>
      @enderror
      <input type="text" id="name"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
        name="name" value="{{ auth()->user()->name }}" required>
    </div>
    <div class="mb-6">
      <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Username</label>
      @error ('username')
      <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $message }}
      </p>
      @enderror
      <input type="text" id="username"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
        name="username" value="{{ auth()->user()->username }}" required>
    </div>
    <div class="mb-3">
      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
      @error ('email')
      <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $message }}
      </p>
      @enderror
      <input type="email" id="email"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
        name="email" value="{{ auth()->user()->email }}" required>
    </div>
    <div class="mb-3">
      <label for="alamat lengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alamat</label>
      @error (auth()->user()->alamat === null)
      <p class="mt-2 text-xs text-red-600 dark:text-red-500">Alamat lengkap, silahkan diisi
      </p>
      @enderror
      @error ('alamat')
      <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $message }}
      </p>
      @enderror
      <textarea id="message" rows="4"
        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="Alamat Lengkap" name="alamat">{{ auth()->user()->alamat }}</textarea>
    </div>
    <button type="submit"
      class="text-white bg-emerald-600 hover:bg-emerald-700 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm px-[1em] py-2 text-center dark:bg-emerald-600 dark:hover:bg-emerald-600 dark:focus:ring-emerald-700">Save
      Changes</button>
  </form>

</main>