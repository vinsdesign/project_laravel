<x-layout>
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="mb-2 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">{{ $title }}</h2>
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">We use an agile approach to test assumptions and connect with the needs of your audience early and often.</p>
          </div>
          {{-- Team --}}
         <!-- resources/views/blog.blade.php -->
          <x-article :articles="$articles"></x-article>
        </div>
    </div>
</x-layout>