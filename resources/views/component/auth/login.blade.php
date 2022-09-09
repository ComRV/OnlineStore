<main class="min-w-full h-screen flex flex-col justify-center">
  <form class="bg-gray-50 m-auto rounded-lg border border-gray-200 shadow-md px-20 py-14" action="/login" method="POST">
    @csrf
    <header class="font-roboto text-2xl font-semibold mb-5">Welcome to ngebola</header>
    @if (session()->has('success'))
    <div class="p-3 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
      role="alert">
      <span class="font-medium">{{ session('success') }}</span>
    </div>
    @endif
    @if (session()->has('loginerror'))
    <div class="p-3 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
      <span class="font-medium">{{ session('loginerror') }}</span>
    </div>
    @endif
    <div class="mb-6">
      <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Username</label>
      <input type="text" id="username"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
        placeholder="Username" name="username" required>
    </div>
    <div class="mb-3">
      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
      <input type="password" id="password"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
        placeholder="•••••••••••••••••••••" name="password" required>
    </div>
    <button type="submit"
      class="text-white bg-emerald-600 hover:bg-emerald-700 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm w-full px-[7.5em] py-2 text-center dark:bg-emerald-600 dark:hover:bg-emerald-600 dark:focus:ring-emerald-700">Login</button>
    <p class="text-xs mt-2 text-center text-gray-800">Don't have an account? <a
        class="text-emerald-600 hover:opacity-90" href="/registration">Sign Up</a></p>
  </form>
</main>