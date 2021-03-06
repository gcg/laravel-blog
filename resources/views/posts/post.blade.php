<div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
    <div class="flex-shrink-0">
        <a href="/posts/view/{{$post->slug}}">
            <img class="h-48 w-full object-cover" src="{{ $post->image }}" alt="">
        </a>
    </div>
    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
        <div class="flex-1">
            <p class="text-sm font-medium text-indigo-600">
            <a href="#" class="hover:underline">
                Article
            </a>
            </p>
            <a href="/posts/view/{{$post->slug}}" class="block mt-2">
                <p class="text-xl font-semibold text-gray-900">
                {{ $post->title }}
                </p>
                <p class="mt-3 text-base text-gray-500">
                {{  \Illuminate\Support\Str::limit($post->body, 200) }}
                </p>
            </a>
        </div>
        <div class="mt-6 flex items-center">
            <div class="flex-shrink-0">
                <a href="#">
                    <span class="sr-only">{{ $post->user->name }}</span>
                    <img class="h-10 w-10 rounded-full" src="{{$post->user->image}}" alt="">
                </a>
            </div>
            <div class="ml-3">
                <p class="text-sm font-medium text-gray-900">
                <a href="#" class="hover:underline">
                    {{ $post->user->name }}
                </a>
                </p>
                <div class="flex space-x-1 text-sm text-gray-500">
                    <time datetime="2020-03-16">
                        {{ $post->created_at }}
                    </time>
                </div>
            </div>
        </div>
    </div>
</div>
