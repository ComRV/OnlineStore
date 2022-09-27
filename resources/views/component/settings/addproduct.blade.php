<main class="mt-[5em] ml-[21em] w-[70vw]"">
  
  <form class=" pb-5 md:pb-0" action="/admin/products/add" method="POST" enctype="multipart/form-data">
  <header class="font-roboto text-2xl font-semibold mb-5">Add Your Product</header>
  @csrf
  @if (session()->has('success'))
  <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
    role="alert">
    <span class="font-medium">{{ session('success') }}
  </div>
  @endif
  <div class="grid gap-x-6 gap-y-2 mb-2 md:grid-cols-2">
    <div>
      <label for="productname" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">Product
        Name</label>
      @error('name')
      <p class="my-1 text-xs text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
      <input type="text" id="productname"
        class="@error('name') bg-red-50 border-red-500 text-red-500 placeholder-red-700 focus:border-red-500 focus:ring-red-500 @else bg-gray-50 border-gray-300 text-gray-900 focus:ring-emerald-500 focus:border-emerald-500 @enderror border block w-full p-2.5 text-sm rounded-lg"
        placeholder="Product Name" name="name" value="{{ old('name') }}">
    </div>
    <div>
      <label for="productprice" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">Product
        Price</label>
      @error('price')
      <p class="my-1 text-xs text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
      <input type="number" id="productprice"
        class="@error('price') bg-red-50 border-red-500 text-red-500 placeholder-red-700 focus:border-red-500 focus:ring-red-500 @else bg-gray-50 border-gray-300 text-gray-900 focus:ring-emerald-500 focus:border-emerald-500 @enderror border block w-full p-2.5 text-sm rounded-lg"
        placeholder="Product Price" min="0" name="price" value="{{ old('price') ? old('productprice') : 0 }}">
    </div>
    <div>
      <label for="category_id" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">Category</label>
      @error('category_id')
      <p class="my-1 text-xs text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
      <select id="category_id" name="category_id"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500">
        @foreach ($category as $item)
        <option value="{{ $item->category }}">{{ $item->category }}</option>
        @endforeach
      </select>
    </div>
    <div>
      <label for="club_id" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">League</label>
      @error('club_id')
      <p class="my-1 text-xs text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
      <select id="club_id" name="club_id"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500">
        @foreach ($club as $item)
        <option value="{{ $item->club }}">{{ $item->club }}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="mb-2">
    <label for="image" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">Product
      Photo</label>
    @error('image')
    <p class="my-1 text-xs text-red-600 dark:text-red-500">{{ $message }}</p>
    @enderror
    <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer"
      aria-describedby="file_input_help" id="image" name="image" type="file">
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG, JPG or GIF (Recommended
      500x400px).
    </p>
  </div>
  <div class="mb-2">
    <label for="description" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">Description</label>
    @error('password')
    <p class="my-1 text-xs text-red-600 dark:text-red-500">{{ $message }}</p>
    @enderror
    <textarea id="description" rows="4"
      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-emerald-500 focus:border-emerald-500"
      placeholder="Description . . . . ." name="description">{{ old('description') }}</textarea>
  </div>
  <button type="submit"
    class="text-white bg-emerald-600 hover:bg-emerald-700 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center">Add
    Product</button>
  </form>
</main>