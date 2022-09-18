<aside class="fixed top-16">
  <div class="w-64 border-r ml-5" aria-label="Sidebar">
    <div class="overflow-y-auto py-4 px-3 bg-white rounded dark:bg-gray-800">
      {{-- <ul class="space-y-2">
        <li>
          <label class="font-semibold">Price (IDR)</label>
          <span class="flex mt-3">
            <input type="number" id="from"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 w-[100px] mr-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
              placeholder="From">
            <input type="number" id="to"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
              placeholder="Up to">
          </span>
        </li>
      </ul> --}}

      <ul class="pt-4 mt-1 space-y-1 dark:border-gray-700">
        <p class="font-semibold mb-2">Category</p>
        @foreach ($category as $item)
        <li>
          <a href="/category/{{ $item->category }}" class="flex items-center p-2 @if ($item->category === request()->segment(2)) bg-gray-200
            @endif text-sm font-medium text-gray-900 rounded-lg dark:text-white
            hover:bg-gray-200 dark:hover:bg-gray-700">
            <span class="flex-1 ml-2 whitespace-nowrap">{{ $item->category }}</span>
          </a>
        </li>
        @endforeach
      </ul>

      <ul class="pt-4 pb-24 mt-4 space-y-1 border-t border-gray-200 dark:border-gray-700">
        <p class="font-semibold mb-2">League</p>
        @foreach ($club as $item)
        <li>
          <a href="/club/{{ $item->club }}" class="flex items-center p-2  @if ($item->club === request()->segment(2)) bg-gray-200
            @endif text-sm font-medium text-gray-900 rounded-lg dark:text-white
            hover:bg-gray-200 dark:hover:bg-gray-700">
            <span class="flex-1 ml-2 whitespace-nowrap">{{ $item->club }}</span>
          </a>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</aside>