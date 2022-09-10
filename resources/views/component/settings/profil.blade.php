<main class="mt-[5em] ml-[21em]">
  <h1 class="text-lg font-semibold">Account</h1>
  <img src="/img/profile.jpg" alt="profile" class="rounded-full w-32 my-4">

  <form class="mt-8">
    @csrf
    <div class="mb-6">
      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
      <input type="text" id="name"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
        name="name" value="{{ auth()->user()->name }}" required>
    </div>
    <div class="mb-6">
      <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Username</label>
      <input type="text" id="username"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
        name="username" value="{{ auth()->user()->username }}" required>
    </div>
    <div class="mb-3">
      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
      <input type="email" id="email"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
        name="email" value="{{ auth()->user()->email }}" required>
    </div>
    <button type="submit"
      class="text-white bg-emerald-600 hover:bg-emerald-700 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm px-[1em] py-2 text-center dark:bg-emerald-600 dark:hover:bg-emerald-600 dark:focus:ring-emerald-700">Save
      Changes</button>
  </form>

</main>