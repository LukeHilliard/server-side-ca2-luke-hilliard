@extends('layouts.app')

@section('content')
@if (Auth::check())
<div class="pt-15 w-4/5 m-auto">
    <a
        href="/blog/create"
        class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
        Make enquiry
    </a>
</div>
@endif

<div class="w-4/5 m-auto pt-20">
    <form
        action="/blog"
        method="POST"
        enctype="multipart/form-data">
        @csrf

        <input
            type="text"
            name="title"
            placeholder="Title..."
            class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">

        <input
            type="text"
            name="email"
            placeholder="Email..."
            class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">

        <textarea
            name="message"
            placeholder="Message..."
            class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>

        <div class="bg-grey-lighter pt-15">
            <label for="is_urgent" class="block">
                <input type="checkbox" name="is_urgent" id="is_urgent" class="mr-2">
                Is this urgent?
            </label>
        </div>

        <button
            type="submit"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Submit Enquiry
        </button>
    </form>
</div>
@endsection
