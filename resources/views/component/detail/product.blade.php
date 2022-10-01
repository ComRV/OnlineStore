<main class="mt-20">
  <div class="grid md:h-[160vh] grid-rows-3 w-screen md:grid-cols-4 md:grid-rows-4">
    <div
      class="md:col-span-3 pb-14 md:pb-0 border-r-2 row-span-3 flex flex-col items-center md:overflow-y-auto md:scrollbar-none md:row-span-4">
      <a href="/" class="absolute top-[12.5%] left-[8%] hidden md:block">
        <svg class="w-7 h-7 opacity-75 hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path>
        </svg>
      </a>
      <p class="text-lg w-52 font-semibold font-roboto">{{ $detail->name }}</p>
      <img class="max-w-[13em] bg-emerald-50 h-auto rounded-lg" src="/img/{{ $detail->image }}" alt="liverpool away">
      <p class="font-roboto text-lg font-medium my-2">Rp. {{ number_format($detail->price,2) }}</p>
      <div class="inline-flex rounded-md shadow-sm">
        <button
          class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-300 active:bg-gray-400"
          onclick="min()">-</button>
        <p class="py-2 px-14 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-300" id="qty">1
        </p>
        <button
          class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-300 active:bg-gray-400"
          onclick="plus()">+</button>
      </div>
      <button type="button"
        class="text-gray-900 bg-gray-300 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-14 py-1.5 text-center inline-flex items-center dark:focus:ring-gray-500 my-3">ADD
        TO CARD</button>
      <p class="w-[20em] md:w-[33em]">{{ $detail->description }}</p>
    </div>
    <div class="flex flex-col items-center overflow-y-auto pb-14 md:pb-0 md:row-span-6 md:scrollbar-none">
      <h1 class="font-roboto text-2xl tracking-wide font-semibold my-4">Recommended</h1>
      <div class="grid grid-cols-3 grid-rows-2 pb-5 md:grid-cols-1 md:grid-rows-6 gap-5">
        @foreach ($recommended as $item)
        <div
          class="max-w-[12em] bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
          <a href="/detail/{{ $item->name }}">
            <img class="rounded-t-lg w-[10em] py-4 m-auto" src="/img/{{ $item->image }}" alt="">
          </a>
          <div class="p-5">
            <a href="/detail/{{ $item->name }}">
              <h5 class="mb-1 text-center font-bold tracking-tight text-gray-900 dark:text-white">{{ $item->name }}
              </h5>
            </a>
            <h5 class="font-bold text-center text-gray-800 tracking-tight dark:text-gray-400">Rp. {{
              number_format($item->price,2)
              }}</h5>
            <button type="button"
              class="text-gray-900 ml-2.5 bg-gray-300 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-1.5 text-center inline-flex items-center dark:focus:ring-gray-500 mt-3">ADD
              TO CARD</button>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="ml-8 md:col-span-3 md-row-span-3 h-[30em] overflow-auto scrollbar-none">
      <h1 class="text-2xl font-semibold mb-5">Review</h1>
      @auth
      <form action="/comment/{{ request()->segment(2) }}" method="POST">
        @csrf
        <div class="mb-4 w-full bg-gray-50 rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600">
          <div class="py-2 px-4 bg-white rounded-t-lg dark:bg-gray-800">
            <label for="comment" class="sr-only">Your comment</label>
            @error('comment')
            <p class="my-1 text-xs text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
            <textarea id="comment" rows="4" name="comment"
              class="px-0 w-full text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
              placeholder="Write a comment as {{ auth()->user()->name }}....." required></textarea>
          </div>
          <div class="flex justify-between items-center py-2 px-3 border-t dark:border-gray-600">
            <button type="submit"
              class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-emerald-600 rounded-lg focus:ring-4 focus:ring-emerald-200 hover:bg-emerald-700">
              Post comment
            </button>
          </div>
        </div>
      </form>
      @endauth
      @if (count($comments) > 0)
      @foreach ($comments as $comment)
      <article class="my-8">
        <div class="flex items-center mb-4 space-x-4">
          <img class="w-10 h-10 rounded-full" src="/img/profile.jpg" alt="">
          <div class="space-y-1 font-medium dark:text-white">
            <p>{{ $comment->user->name }} <time datetime="{{ $comment->user->created_at }}"
                class="block text-sm text-gray-500 dark:text-gray-400">Joined
                on {{ $comment->user->created_at->format('F Y') }}</time></p>
          </div>
        </div>
        <footer class="mb-5 text-sm text-gray-500 dark:text-gray-400">
          <p>Reviewed on <time datetime="2017-03-03 19:00">{{ $comment->created_at->diffForHumans() }}</time></p>
        </footer>
        <p class="mb-3 font-light text-gray-500 dark:text-gray-400">{{ $comment->comment }}</p>
      </article>
      @endforeach
      @else
      <div class="flex justify-center h-[34.5vh]">
        <p class="font-roboto text-3xl self-center opacity-60">No Comment</p>
      </div>
      @endif
    </div>
  </div>
</main>