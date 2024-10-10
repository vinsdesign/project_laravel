@props(['teams'])
<ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
    @foreach($teams as $team)
    <li>
        <div class="flex items-center gap-x-6">
            <img class="h-16 w-16 rounded-full  object-cover"
                src="{{ $team['image'] }}"
                alt="">
            <div>
                <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">{{ $team['name'] }}
                </h3>
                <p class="text-sm font-semibold leading-6 text-indigo-600">{{ $team['division'] }}</p>
            </div>
        </div>
    </li>
    @endforeach
</ul>