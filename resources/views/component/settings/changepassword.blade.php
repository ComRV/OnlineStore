<main class="mt-[5em] ml-[21em]">
  <h1 class="text-lg font-semibold">Change Password</h1>
  <form class="mt-8">
    @csrf
    <div class="mb-6">
      <label for="oldpassword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Old
        Password</label>
      <input type="password" id="oldpassword"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
        name="oldpassword" placeholder="•••••••••••••••••••••" required>
    </div>
    <div class="mb-6">
      <label for="newpassword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">New
        Password</label>
      <input type="password" id="newpassword"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
        name="newpassword" placeholder="•••••••••••••••••••••" required>
    </div>
    <div class="mb-3">
      <label for="cnewpassword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Confirm New
        Password</label>
      <input type="password" id="cnewpassword"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
        name="cnewpassword" placeholder="•••••••••••••••••••••" required>
    </div>
    <button type="submit"
      class="text-white bg-emerald-600 hover:bg-emerald-700 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm px-[1em] py-2 text-center dark:bg-emerald-600 dark:hover:bg-emerald-600 dark:focus:ring-emerald-700">Change
      Password</button>
  </form>

</main>