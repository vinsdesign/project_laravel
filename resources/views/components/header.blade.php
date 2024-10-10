@props(['name'])

<div class="bg-white">
    <div class="relative isolate px-6 xl:pt-14 lg:px-8">
        <div class="mx-auto max-w-2xl py-20 sm:py-28 lg:py-28 xl:py-20">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div
                    class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                    Welocome {{ $name }}. <a href="#" class="font-semibold text-indigo-600">
                        <span
                        class="absolute inset-0" aria-hidden="true">
                        </span> Read more <span
                            aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
            <div class="text-center">
                <h1 class="text-balance text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">The PHP Framework
                    for Web Artisans</h1>
                <p class="mt-6 text-lg leading-8 text-gray-600">Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation freeing you to create without sweating the small things.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#"
                        class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                        started</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Watch Laracasts <span
                            aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
