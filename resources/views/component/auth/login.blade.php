<main class="min-w-full h-screen flex flex-col justify-center">
  <form class="bg-gray-50 m-auto rounded-lg border border-gray-200 shadow-md px-20 py-14">
    <header class="font-roboto text-2xl font-semibold mb-5">Welcome to ngebola</header>
    <div class="mb-6">
      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email or
        Username</label>
      <input type="text" id="email"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
        placeholder="example@mail.com" required>
    </div>
    <div class="mb-3">
      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
      <input type="password" id="password"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
        placeholder="•••••••••••••••••••••" required>
    </div>
    <div class="flex items-start mb-6">
      <div class="flex items-center h-5">
        <input id="remember" type="checkbox" value="remember"
          class="w-4 h-4 text-emerald-500 bg-gray-100 rounded border-gray-300 focus:ring-emerald-500 dark:focus:ring-emerald-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
      </div>
      <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
    </div>
    <button type="submit"
      class="text-white bg-emerald-600 hover:bg-emerald-700 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm w-full sm:w-auto px-[7.5em] py-2 text-center dark:bg-emerald-600 dark:hover:bg-emerald-600 dark:focus:ring-emerald-700">Login</button>
    <p class="text-xs mt-2 text-center text-gray-800">Don't have an account? <a
        class="text-emerald-600 hover:opacity-90" href="/registration">Sign Up</a></p>
  </form>
</main>