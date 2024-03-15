@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Blog Posts


        </h1>
    </div>
</div>

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif



<div class="slideshow-container">
    @foreach ($posts as $index => $post)
    <div class="mySlides fade">
        <div class="flex flex-row justify-center py-4">{{ $index + 1 }} / {{ count($posts) }}</div>
        <!-- Next and previous buttons -->
        <div class="flex flex-row justify-center gap-2 text-4xl">
            <div class="cursor-pointer"><a class="" onclick="plusSlides(-1)">&#10094;</a></div>
            <div class="cursor-pointer"><a class="" onclick="plusSlides(1)">&#10095;</a></div>
        </div>
        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
            <div>
                <img src="{{ asset('images/' . $post->image_path) }}" alt="">
            </div>
            <div>
                <h2 class="text-gray-700 font-bold text-5xl pb-4">
                    {{ $post->title }}
                </h2>

                <span class="text-gray-500">
                        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
                    </span>

                <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                    {{ $post->description }}
                </p>

                <div class="animate-bounce">
                    <a href="/blog/{{ $post->slug }}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl ">
                        Keep Reading
                    </a>
                </div>

                @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                <span class="float-right">
                    <a
                        href="/blog/{{ $post->slug }}/edit"
                        class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                        Edit
                    </a>
                </span>
                

                <span class="float-right">
                    <form
                        action="/blog/{{ $post->slug }}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <!-- Taken from https://uiverse.io/seyed-mohsen-mousavi/warm-dingo-23 -->
                        <button
                                class="inline-flex items-center px-4 py-2 bg-red-600 transition ease-in-out delay-75 hover:bg-red-700 text-white text-sm font-medium rounded-md hover:-translate-y-1 hover:scale-110"
                                type="submit"
                        >
                          <svg
                                  stroke="currentColor"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  class="h-5 w-5 mr-2"
                                  xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                    stroke-width="2"
                                    stroke-linejoin="round"
                                    stroke-linecap="round"
                            ></path>
                          </svg>

                          Delete
                        </button>

                    </form>
                </span>
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- The dots/circles -->
<div style="text-align:center">
    @foreach ($posts as $index => $post)
    <span class="dot" onclick="currentSlide({{ $index + 1 }})"></span>
    @endforeach
</div>

@if (Auth::check())
<div class="pt-15 w-4/5 m-auto">
    Have your own news to share?
    <a
        href="/blog/create"
        class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
        Create post
    </a>
</div>
@endif

@endsection
