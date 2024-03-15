@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left0">
    <div class="py-5">
        <img src="{{ asset('images/' . $post->image_path) }}" alt="Blog Photo" width="700">
        <h1 class="text-6xl  py-10">
            {{ $post->title }}
        </h1>

    </div>
</div>

<div class="w-4/5 m-auto pt-5">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
        <span class="pl-10">
         <a class="underline hover:font-bold" href="/enquires/create?post_id={{ $post->id}}">Enquire</a></span>
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->content }}
    </p>
</div>

<div class="pt-15 w-4/5 m-auto flex flex-row justify-start">
    <a
        href="/blog"
        class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
        Return
    </a>
</div>

@endsection
