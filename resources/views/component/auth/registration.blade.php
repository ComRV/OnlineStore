<main class="m-auto relative top-24 md:top-2 w-3/4 md:w-[40%] h-screen flex flex-col justify-center">

  <form class="pb-5 md:pb-0" action="/registration" method="POST">
    <header class="font-roboto text-2xl font-semibold mb-5">Registration</header>
    @csrf
    <div class="grid gap-x-6 gap-y-2 mb-6 md:grid-cols-2">
      <div>
        <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">First
          name</label>
        @error('firstName')
        <p class="my-1 text-xs text-red-600 dark:text-red-500">{{ $message }}</p>
        @enderror
        <input type="text" id="first_name"
          class="@error('firstName') bg-red-50 border-red-500 text-red-500 placeholder-red-700 focus:border-red-500 focus:ring-red-500 @else bg-gray-50 border-gray-300 text-gray-900 focus:ring-emerald-500 focus:border-emerald-500 @enderror border block w-full p-2.5 text-sm rounded-lg"
          placeholder="First Name" name="firstName" value="{{ old('firstName') }}">
      </div>
      <div>
        <label for="last_name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">Last name</label>
        @error('lastName')
        <p class="my-1 text-xs text-red-600 dark:text-red-500">{{ $message }}</p>
        @enderror
        <input type="text" id="last_name"
          class="@error('lastName') bg-red-50 border-red-500 text-red-500 placeholder-red-700 focus:border-red-500 focus:ring-red-500 @else bg-gray-50 border-gray-300 text-gray-900 focus:ring-emerald-500 focus:border-emerald-500 @enderror border block w-full p-2.5 text-sm rounded-lg"
          placeholder="Last Name" name="lastName" value="{{ old('lastName') }}">
      </div>
      <div>
        <label for="username" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">Username</label>
        @error('username')
        <p class="my-1 text-xs text-red-600 dark:text-red-500">{{ $message }}</p>
        @enderror
        <input type="text" id="username"
          class="@error('username') bg-red-50 border-red-500 text-red-500 placeholder-red-700 focus:border-red-500 focus:ring-red-500 @else bg-gray-50 border-gray-300 text-gray-900 focus:ring-emerald-500 focus:border-emerald-500 @enderror border block w-full p-2.5 text-sm rounded-lg"
          placeholder="Username" name="username" value="{{ old('username') }}">
      </div>
      <div>
        <label for="phone" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">Phone number</label>
        @error('phoneNumber')
        <p class="my-1 text-xs text-red-600 dark:text-red-500">{{ $message }}</p>
        @enderror
        <input type="tel" id="phone"
          class="@error('phoneNumber') bg-red-50 border-red-500 text-red-500 placeholder-red-700 focus:border-red-500 focus:ring-red-500 @else bg-gray-50 border-gray-300 text-gray-900 focus:ring-emerald-500 focus:border-emerald-500 @enderror border text-sm rounded-lg block w-full p-2.5"
          placeholder="08xxxxxxxxxx" name="phoneNumber" value="{{ old('phoneNumber') }}">
      </div>
    </div>
    <div class="mb-6">
      <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">Email address</label>
      @error('email')
      <p class="my-1 text-xs text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
      <input type="text" id="email"
        class="@error('email') bg-red-50 border-red-500 text-red-500 placeholder-red-700 focus:border-red-500 focus:ring-red-500 @else bg-gray-50 border-gray-300 text-gray-900 focus:ring-emerald-500 focus:border-emerald-500 @enderror border block w-full p-2.5 text-sm rounded-lg"
        placeholder="example@mail.com" name="email" value="{{ old('email') }}">
    </div>
    <div class="mb-6">
      <label for="password" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
      @error('password')
      <p class="my-1 text-xs text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
      <input type="password" id="password"
        class="@error('password') bg-red-50 border-red-500 text-red-500 placeholder-red-700 focus:border-red-500 focus:ring-red-500 @else bg-gray-50 border-gray-300 text-gray-900 focus:ring-emerald-500 focus:border-emerald-500 @enderror border block w-full p-2.5 text-sm rounded-lg"
        placeholder="•••••••••••••••••••••" name="password">
    </div>
    <div class="mb-6">
      <label for="confirm_password" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">Confirm
        password</label>
      @error('confirmPassword')
      <p class="my-1 text-xs text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
      <input type="password" id="confirm_password"
        class="@error('confirmPassword') bg-red-50 border-red-500 text-red-500 placeholder-red-700 focus:border-red-500 focus:ring-red-500 @else bg-gray-50 border-gray-300 text-gray-900 focus:ring-emerald-500 focus:border-emerald-500 @enderror border block w-full p-2.5 text-sm rounded-lg"
        placeholder="•••••••••••••••••••••" name="confirmPassword">
    </div>
    <button type="submit"
      class="text-white bg-emerald-600 hover:bg-emerald-700 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">Sign
      Up</button>
  </form>

</main>