@props(['articles'])

<div
    class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">

    {{-- <article class="flex max-w-xl flex-col items-start justify-between">
            <div class="flex items-center gap-x-4 text-xs">
                <time datetime="{{ $article['date'] }}" class="text-gray-500">{{ \Carbon\Carbon::parse($article['date'])->format('M d, Y') }}</time>
                <a href="/category/{{ $article->Category->slug }}" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $article ->Category->name }}</a>
            </div>
            <div class=" relative">
                <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900">
                    <a href="/blog/{{ $article['slug'] }}" class="hover:underline hover:text-indigo-500">
                        <span class="absolute inset-0"></span>
                        {{ $article['title'] }}
                    </a>
                </h3>
                <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">{{ $article['description'] }}</p>
                <a href="/blog/{{ $article['slug'] }}" class="hover:underline hover:text-indigo-500 text-sm">
                    <span class="absolute inset-0"></span>
                    Read More 
                </a>
            </div>
            <div class="relative mt-8 flex items-center gap-x-4">
                <img src="https://cdn.britannica.com/77/142177-050-4E8010A9/Albert-Einstein-1947.jpg" alt="" class="h-10 w-10 object-cover rounded-full bg-gray-50">
                <div class="text-sm leading-6">
                    <p class="font-semibold text-gray-900">
                        <a class="hover:text-blue-500" href="/author/{{ $article->author->username }}">
                            <span class="absolute inset-0 "></span>
                            {{ $article->author->name }}
                        </a>
                    </p>
                    <p class="text-gray-600">{{ $article['role'] }}</p>
                </div>
            </div>
        </article> --}}
    @foreach ($articles as $article)
        <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <div class="flex justify-between items-center mb-5 text-gray-500">
                <span
                    class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                    <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                        </path>
                    </svg>
                    Tutorial
                </span>
                <span class="text-sm">14 days ago</span>
            </div>
            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">How to
                    quickly deploy a static website</a></h2>
            <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Static websites are now used to bootstrap lots
                of websites and are becoming the basis for a variety of tools that even influence both web designers and
                developers influence both web designers and developers.</p>
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <img class="w-7 h-7 rounded-full"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                        alt="Jese Leos avatar" />
                    <span class="font-medium dark:text-white">
                        Jese Leos
                    </span>
                </div>
                <a href="#"
                    class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                    Read more
                    <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </article>
    @endforeach
</div>
