<main class="mt-[5em] ml-[21em] w-[70vw]"">
  
  <form class=" pb-5 md:pb-0" action="/admin/products/add" method="POST">
  <header class="font-roboto text-2xl font-semibold mb-5">Add Your Product</header>
  @csrf
  <div class="grid gap-x-6 gap-y-2 mb-2 md:grid-cols-2">
    <div>
      <label for="productname" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">Product
        Name</label>
      @error('productName')
      <p class="my-1 text-xs text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
      <input type="text" id="productname"
        class="@error('productName') bg-red-50 border-red-500 text-red-500 placeholder-red-700 focus:border-red-500 focus:ring-red-500 @else bg-gray-50 border-gray-300 text-gray-900 focus:ring-emerald-500 focus:border-emerald-500 @enderror border block w-full p-2.5 text-sm rounded-lg"
        placeholder="Product Name" name="productName" value="{{ old('productName') }}">
    </div>
    <div>
      <label for="productprice" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">Product
        Price</label>
      @error('productPrice')
      <p class="my-1 text-xs text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
      <input type="number" id="productprice"
        class="@error('productPrice') bg-red-50 border-red-500 text-red-500 placeholder-red-700 focus:border-red-500 focus:ring-red-500 @else bg-gray-50 border-gray-300 text-gray-900 focus:ring-emerald-500 focus:border-emerald-500 @enderror border block w-full p-2.5 text-sm rounded-lg"
        placeholder="Product Price" min="0" name="productPrice"
        value="{{ old('productPrice') ? old('productprice') : 0 }}">
    </div>
    <div>
      <label for="category" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">Category</label>
      @error('category')
      <p class="my-1 text-xs text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
      <select id="category"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500">
        @foreach ($category as $item)
        <option value="{{ $item->category }}">{{ $item->category }}</option>
        @endforeach
      </select>
    </div>
    <div>
      <label for="league" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">League</label>
      @error('league')
      <p class="my-1 text-xs text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
      <select id="league"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500">
        @foreach ($club as $item)
        <option value="{{ $item->club }}">{{ $item->club }}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="mb-2">
    <label for="productphoto" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">Product
      Photo</label>
    @error('productphoto')
    <p class="my-1 text-xs text-red-600 dark:text-red-500">{{ $message }}</p>
    @enderror
    <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer"
      aria-describedby="file_input_help" id="productphoto" name="productphoto" type="file">
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).
    </p>
  </div>
  <div class="mb-2">
    <label for="description" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">Description</label>
    @error('password')
    <p class="my-1 text-xs text-red-600 dark:text-red-500">{{ $message }}</p>
    @enderror
    <textarea id="description" rows="4"
      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-emerald-500 focus:border-emerald-500"
      placeholder="Description . . . . ."></textarea>
  </div>
  <button type="submit"
    class="text-white bg-emerald-600 hover:bg-emerald-700 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center">Add
    Product</button>
  </form>
</main>