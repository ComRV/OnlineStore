<aside class="fixed top-16">
  <div class="w-64 border-r ml-5" aria-label="Sidebar">
    <div class="overflow-y-auto py-4 px-3 bg-white rounded dark:bg-gray-800">
      <ul class="space-y-2">
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
      </ul>

      <ul class="pt-4 mt-4 space-y-2 border-t border-gray-200 dark:border-gray-700">
        <label class="font-semibold">Category</label>
        <li class="flex items-center mr-4">
          <input id="clothing" type="checkbox" value=""
            class="w-4 h-4 text-emerald-500 bg-gray-100 rounded border-gray-300 focus:ring-emerald-500 dark:focus:ring-emerald-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="clothing" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Clothing</label>
        </li>
        <li class="flex items-center mr-4">
          <input id="shoes" type="checkbox" value=""
            class="w-4 h-4 text-emerald-500 bg-gray-100 rounded border-gray-300 focus:ring-emerald-500 dark:focus:ring-emerald-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="shoes" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Shoes</label>
        </li>
        <li class="flex items-center mr-4">
          <input id="accessories" type="checkbox" value=""
            class="w-4 h-4 text-emerald-500 bg-gray-100 rounded border-gray-300 focus:ring-emerald-500 dark:focus:ring-emerald-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="accessories" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Accessories</label>
        </li>
        <li class="flex items-center mr-4">
          <input id="balls" type="checkbox" value=""
            class="w-4 h-4 text-emerald-500 bg-gray-100 rounded border-gray-300 focus:ring-emerald-500 dark:focus:ring-emerald-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="balls" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Balls</label>
        </li>
      </ul>

      <ul class="pt-4 pb-24 mt-4 space-y-2 border-t border-gray-200 dark:border-gray-700">
        <label class="font-semibold">League</label>
        <li class="flex items-center mr-4">
          <input id="mancity" type="checkbox" value=""
            class="w-4 h-4 text-emerald-500 bg-gray-100 rounded border-gray-300 focus:ring-emerald-500 dark:focus:ring-emerald-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="mancity" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">English Premier
            League</label>
        </li>
        <li class="flex items-center mr-4">
          <input id="liverpool" type="checkbox" value=""
            class="w-4 h-4 text-emerald-500 bg-gray-100 rounded border-gray-300 focus:ring-emerald-500 dark:focus:ring-emerald-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="liverpool" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">La Liga</label>
        </li>
        <li class="flex items-center mr-4">
          <input id="chelsea" type="checkbox" value=""
            class="w-4 h-4 text-emerald-500 bg-gray-100 rounded border-gray-300 focus:ring-emerald-500 dark:focus:ring-emerald-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="chelsea" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Serie A</label>
        </li>
        <li class="flex items-center mr-4">
          <input id="manunited" type="checkbox" value=""
            class="w-4 h-4 text-emerald-500 bg-gray-100 rounded border-gray-300 focus:ring-emerald-500 dark:focus:ring-emerald-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="manunited" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bundesliga</label>
        </li>
        <li class="flex items-center mr-4">
          <input id="manunited" type="checkbox" value=""
            class="w-4 h-4 text-emerald-500 bg-gray-100 rounded border-gray-300 focus:ring-emerald-500 dark:focus:ring-emerald-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="manunited" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ligue 1</label>
        </li>
      </ul>
      <button type="button"
        class="focus:outline-none text-white bg-emerald-600 hover:bg-emerald-700 focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Apply
        Filter</button>
    </div>
  </div>
</aside>