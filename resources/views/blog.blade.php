<x-layout>
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">From the blog</h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">Learn how to grow your business with our expert advice.</p>
          </div>
          {{-- Team --}}
         <!-- resources/views/blog.blade.php -->
          <x-article :articles="$articles"></x-article>
          </div>
        </div>
    </div>
</x-layout>