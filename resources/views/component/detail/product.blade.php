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
      <img class="max-w-[13em] bg-emerald-50 h-auto rounded-lg" src="/img/{{ $detail->image }}.jpg"
        alt="liverpool away">
      <p class="font-roboto text-lg font-medium my-2">Rp. {{ number_format($detail->price,2) }}</p>
      <div class="inline-flex rounded-md shadow-sm">
        <button
          class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-300 active:bg-gray-400">-</button>
        <p class="py-2 px-14 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-300">1</p>
        <button
          class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-300 active:bg-gray-400">+</button>
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
          class="max-w-[12em] -pb-2 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
          <a href="/detail/{{ $item->name }}">
            <img class="rounded-t-lg w-[10em] m-auto" src="/img/{{ $item->image }}.jpg" alt="">
          </a>
          <div class="p-5">
            <a href="/detail/{{ $item->name }}">
              <h5 class="mb-1 font-bold tracking-tight text-gray-900 dark:text-white">{{ $item->name }}
              </h5>
            </a>
            <h5 class="font-bold text-gray-800 tracking-tight dark:text-gray-400">Rp. {{ number_format($item->price,2)
              }}</h5>
            <button type="button"
              class="text-gray-900 bg-gray-300 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-1.5 text-center inline-flex items-center dark:focus:ring-gray-500 mt-3">ADD
              TO CARD</button>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="ml-8 md:col-span-3 md-row-span-3 h-[30em] overflow-auto scrollbar-none">
      <h1 class="text-2xl font-semibold mb-5">Review</h1>
      <article class="my-8">
        <div class="flex items-center mb-4 space-x-4">
          <img class="w-10 h-10 rounded-full" src="/img/profile.jpg" alt="">
          <div class="space-y-1 font-medium dark:text-white">
            <p>Jese Leos <time datetime="2014-08-16 19:00" class="block text-sm text-gray-500 dark:text-gray-400">Joined
                on August 2014</time></p>
          </div>
        </div>
        <div class="flex items-center mb-1">
          <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <title>First star</title>
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <title>Second star</title>
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <title>Third star</title>
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <title>Fourth star</title>
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <title>Fifth star</title>
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
        </div>
        <footer class="mb-5 text-sm text-gray-500 dark:text-gray-400">
          <p>Reviewed on <time datetime="2017-03-03 19:00">March 3, 2017</time></p>
        </footer>
        <p class="mb-2 font-light text-gray-500 dark:text-gray-400">This is my third Invicta Pro Diver. They are just
          fantastic value for money. This one arrived yesterday and the first thing I did was set the time, popped on an
          identical strap from another Invicta and went in the shower with it to test the waterproofing.... No problems.
        </p>
        <p class="mb-3 font-light text-gray-500 dark:text-gray-400">It is obviously not the same build quality as those
          very expensive watches. But that is like comparing a Citroën to a Ferrari. This watch was well under £100! An
          absolute bargain.</p>
      </article>
      <article class="my-8">
        <div class="flex items-center mb-4 space-x-4">
          <img class="w-10 h-10 rounded-full" src="/img/profile.jpg" alt="">
          <div class="space-y-1 font-medium dark:text-white">
            <p>Jese Leos <time datetime="2014-08-16 19:00" class="block text-sm text-gray-500 dark:text-gray-400">Joined
                on August 2014</time></p>
          </div>
        </div>
        <div class="flex items-center mb-1">
          <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <title>First star</title>
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <title>Second star</title>
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <title>Third star</title>
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <title>Fourth star</title>
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <title>Fifth star</title>
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
        </div>
        <footer class="mb-5 text-sm text-gray-500 dark:text-gray-400">
          <p>Reviewed on <time datetime="2017-03-03 19:00">March 3, 2017</time></p>
        </footer>
        <p class="mb-2 font-light text-gray-500 dark:text-gray-400">This is my third Invicta Pro Diver. They are just
          fantastic value for money. This one arrived yesterday and the first thing I did was set the time, popped on an
          identical strap from another Invicta and went in the shower with it to test the waterproofing.... No problems.
        </p>
        <p class="mb-3 font-light text-gray-500 dark:text-gray-400">It is obviously not the same build quality as those
          very expensive watches. But that is like comparing a Citroën to a Ferrari. This watch was well under £100! An
          absolute bargain.</p>
      </article>
      <article class="my-8">
        <div class="flex items-center mb-4 space-x-4">
          <img class="w-10 h-10 rounded-full" src="/img/profile.jpg" alt="">
          <div class="space-y-1 font-medium dark:text-white">
            <p>Jese Leos <time datetime="2014-08-16 19:00" class="block text-sm text-gray-500 dark:text-gray-400">Joined
                on August 2014</time></p>
          </div>
        </div>
        <div class="flex items-center mb-1">
          <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <title>First star</title>
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <title>Second star</title>
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <title>Third star</title>
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <title>Fourth star</title>
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <title>Fifth star</title>
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
        </div>
        <footer class="mb-5 text-sm text-gray-500 dark:text-gray-400">
          <p>Reviewed on <time datetime="2017-03-03 19:00">March 3, 2017</time></p>
        </footer>
        <p class="mb-2 font-light text-gray-500 dark:text-gray-400">This is my third Invicta Pro Diver. They are just
          fantastic value for money. This one arrived yesterday and the first thing I did was set the time, popped on an
          identical strap from another Invicta and went in the shower with it to test the waterproofing.... No problems.
        </p>
        <p class="mb-3 font-light text-gray-500 dark:text-gray-400">It is obviously not the same build quality as those
          very expensive watches. But that is like comparing a Citroën to a Ferrari. This watch was well under £100! An
          absolute bargain.</p>
      </article>

    </div>
  </div>
</main>