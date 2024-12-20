        <x-layout>
            <div class="px-10 mt-10">
                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="{{ $article['date'] }}"
                            class="text-gray-500">{{ \Carbon\Carbon::parse($article['date'])->format('M d, Y') }}</time>
                        <a href="#"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $article['category'] }}</a>
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 hover:underline">
                            {{ $article['title'] }}
                        </h3>
                        <p class="mt-5 text-sm leading-6 text-gray-600">{{ $article['description'] }}</p>
                        <a href="/blog" class="hover:underline hover:text-indigo-500 text-sm">
                            <span class="absolute inset-0"></span>
                            Back to Articles
                        </a>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                        <img src="https://cdn.britannica.com/77/142177-050-4E8010A9/Albert-Einstein-1947.jpg" alt=""
                            class="h-10 w-10 object-cover rounded-full bg-gray-50">
                        <div class="text-sm leading-6">
                            <p class="font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    {{ $article->author->name }}
                                </a>
                            </p>
                            <p class="text-gray-600">{{ $article['role'] }}</p>
                        </div>
                    </div>
                </article>
            </div>
        </x-layout>
