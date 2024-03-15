@extends('layouts.app')

@section('content')


    <!-- Taken from https://uiverse.io/themrsami/proud-fireant-91 -->
<div class="w-4/5 m-auto pt-5">
    <h1 class="text-6xl ">Enquire about<br/> <span class="font-semibold text-4xl">"{{ $post->title }}"</span></h1>
    <p class="text-gray-500 text-xl">By {{ $post->user->name }}</p>
    <div class="flex flex-col items-center justify-center h-screen">
        <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Enquiry Form</h2>

            <form class="flex flex-col"
                  action="/blog"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                <input type="text" name="first_name" placeholder="First name" class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150">
                <input type="text" name="last_name" placeholder="Last name" class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150">
                <input type="email" name="email" placeholder="Email" class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150">
                <textarea name="cover_letter" placeholder="Enquiry" class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"></textarea>

                <button type="submit" class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white font-bold py-2 px-4 rounded-md mt-4 hover:bg-indigo-600 hover:to-blue-600 transition ease-in-out duration-150">Submit</button>
            </form>
        </div>
    </div>


    </div>
    @endsection

