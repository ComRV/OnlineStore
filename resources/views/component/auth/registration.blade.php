<main class="m-auto relative top-24 md:top-2 w-3/4 md:w-[40%] h-screen flex flex-col justify-center">

  <form class="pb-5 md:pb-0">
    <header class="font-roboto text-2xl font-semibold mb-5">Registration</header>
    <div class="grid gap-x-6 gap-y-2 mb-6 md:grid-cols-2">
      <div>
        <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">First
          name</label>
        <input type="text" id="first_name"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
          placeholder="First Name" required>
      </div>
      <div>
        <label for="last_name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">Last name</label>
        <input type="text" id="last_name"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
          placeholder="Last Name" required>
      </div>
      <div>
        <label for="username" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">Username</label>
        <input type="text" id="username"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
          placeholder="Username" required>
      </div>
      <div>
        <label for="phone" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">Phone number</label>
        <input type="tel" id="phone"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
          placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
      </div>
    </div>
    <div class="mb-6">
      <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">Email address</label>
      <input type="email" id="email"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
        placeholder="example@mail.com" required>
    </div>
    <div class="mb-6">
      <label for="password" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
      <input type="password" id="password"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
        placeholder="•••••••••••••••••••••" required>
    </div>
    <div class="mb-6">
      <label for="confirm_password" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">Confirm
        password</label>
      <input type="password" id="confirm_password"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
        placeholder="•••••••••••••••••••••" required>
    </div>
    <button type="submit"
      class="text-white bg-emerald-600 hover:bg-emerald-700 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">Sign
      Up</button>
  </form>

</main>