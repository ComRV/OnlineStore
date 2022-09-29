<main class="mt-[5em] ml-[21em] w-[70vw]">
  <a href="products/add"
    class="text-white bg-emerald-500 hover:bg-emerald-600 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2 mb-5 text-center inline-flex items-center mr-2">
    <svg class="mr-2 -ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd"
        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd">
      </path>
    </svg>
    Add Product
  </a>
  @if (session()->has('success'))
  <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
    role="alert">
    <span class="font-medium">{{ session('success') }}
  </div>
  @endif
  <div
    class="overflow-x-auto relative shadow-md pb-10 sm:rounded-lg scrollbar-thin scrollbar-thumb-gray-400 scrollbar-thumb-rounded-lg hover:scrollbar-thumb-gray-500">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="py-3 px-6">
            Product name
          </th>
          <th scope="col" class="py-3 px-6">
            League
          </th>
          <th scope="col" class="py-3 px-6">
            Category
          </th>
          <th scope="col" class="py-3 px-6">
            Price
          </th>
          <th scope="col" class="py-3 px-6">
            Action
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
          <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            {{ $product->name }}
          </th>
          <td class="py-4 px-6">
            {{ $product->club->club }}
          </td>
          <td class="py-4 px-6">
            {{ $product->category->category }}
          </td>
          <td class="py-4 px-6">
            {{ number_format($product->price,2) }}
          </td>
          <td class="flex items-center py-4 px-6 space-x-3">
            <a href="/detail/{{ $product->name }}"
              class="font-medium text-blue-600 dark:text-blue-500 hover:text-blue-800">Show</a>
            <a href="/admin/products/edit/{{ $product->name }}"
              class="font-medium text-blue-600 dark:text-blue-500 hover:text-blue-800">Edit</a>
            <form action="/admin/products/delete/{{ $product->id }}" method="POST">
              @csrf
              @method('delete')
              <button class="font-medium text-red-600 dark:text-red-500 hover:text-red-800"
                onclick="return confirm('Are you sure?')">Remove</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</main>