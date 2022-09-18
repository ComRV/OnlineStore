<main class="mt-[5em] ml-[21em]">
  <div>
    <span id="badge-dismiss-default"
      class="inline-flex items-center py-1 px-2 mr-2 text-sm font-medium text-gray-800 bg-gray-100 rounded dark:bg-gray-200 dark:text-gray-800">
      Shoes
      <button type="button"
        class="inline-flex items-center p-0.5 ml-2 text-sm text-gray-400 bg-transparent rounded-sm hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-300 dark:hover:text-gray-900"
        data-dismiss-target="#badge-dismiss-default" aria-label="Remove">
        <svg aria-hidden="true" class="w-3.5 h-3.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
            clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Remove badge</span>
      </button>
    </span>
    <span id="badge-dismiss-default"
      class="inline-flex items-center py-1 px-2 mr-2 text-sm font-medium text-gray-800 bg-gray-100 rounded dark:bg-gray-200 dark:text-gray-800">
      La Liga
      <button type="button"
        class="inline-flex items-center p-0.5 ml-2 text-sm text-gray-400 bg-transparent rounded-sm hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-300 dark:hover:text-gray-900"
        data-dismiss-target="#badge-dismiss-default" aria-label="Remove">
        <svg aria-hidden="true" class="w-3.5 h-3.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
            clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Remove badge</span>
      </button>
    </span>
  </div>
  <div class="my-3">
    <a href="#"
      class="mx-2 font-semibold w-full rounded-t-lg border-gray-200 dark:border-gray-600 hover:border-b-4 hover:border-b-gray-800">Latest</a>
    <span class="font-extrabold">|</span>
    <a href="#"
      class="mx-2 font-semibold w-full border-gray-200 dark:border-gray-600 hover:border-b-4 hover:border-b-gray-800">Popular</a>
  </div>

  {{-- List product --}}
  <div class="grid gap-x-8 gap-y-6 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5">
    @if (count($products) > 0)
    @foreach ($products as $product)
    <div
      class="max-w-[13em] bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
      <a href="/detail/{{ $product->name }}">
        <img class="rounded-t-lg w-[9em] m-auto py-10" src="/img/{{ $product->image }}.jpg" alt="">
      </a>
      <div class="p-5">
        <a href="/detail/{{ $product->name }}">
          <h5 class="mb-2 font-bold tracking-tight text-gray-900 dark:text-white">{{ $product->name }}
          </h5>
        </a>
        <div>
          <p class="font-normal text-sm text-gray-700 dark:text-gray-400">Price : </p>
          <h5 class="font-bold text-gray-800 tracking-tight dark:text-gray-400">Rp. {{ number_format($product->price,2)
            }}</h5>
        </div>
      </div>
    </div>
    @endforeach
    @else
    <p class="ml-2 font-semibold text-lg font-roboto text-gray-900">Produk tidak ditemukan</p>
    @endif
</main>