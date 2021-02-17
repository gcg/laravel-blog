
@extends('layouts.app')


@section('title', $post->title)

@section('content')

<div class="bg-white overflow-hidden shadow rounded-lg">
    <div class="px-4 py-5 sm:p-6">
        <!-- Content goes here -->

        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="sm:flex">
            <div class="mb-4 flex-shrink-0 sm:mb-0 sm:mr-4">
                <img src="{{ $post->image }}" alt="{{ $post->title }}" width="150" height="150" />
            </div>
            <div>
                <h4 class="text-lg font-bold">
                    <a href="/posts/view/{{$post->slug}}">
                        {{ $post->title }}
                    </a>
                </h4>
                <p class="mt-1">
                {{  $post->body }}
                </p>
            </div>
        </div>

        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="relative">
            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center">
                <a href="/" type="button" class="inline-flex items-center shadow-sm px-4 py-1.5 border border-gray-300 text-sm leading-5 font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <!-- Heroicon name: solid/plus-sm -->
                    <svg class="-ml-1.5 mr-1 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                    </svg>
                    <span>Go Back</span>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
