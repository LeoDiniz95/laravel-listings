@extends('layout')

@section('content')
    <header class="mx-auto p-4 justify-between ">
        <div class="h1 font-semibold mx-auto max-w-sm w-full">{{ $heading }}</div>
    </header>

    <section class="flex flex-wrap mx-auto max-w-lg">
        @unless (empty($listing))
            <article class="w-auto mx-auto mb-6 p-6 pl-10  bg-stone-100 shadow">
                <div class="mx-auto w-full"><img src="{{asset('images/')}}" alt="" /></div>
                <div class="font-semibold mx-auto h-3">{{ $listing['title'] }}</div>
                <p class="text-md mt-10 mb-2">{{ $listing['description'] }}</p>
                <p class="text-md font-bold mb-2">{{ $listing['company'] }}</p>
            </article>
        @else
            <article class="mx-auto">
                <h3 class="w-full font-bold h-16">No listings found</h3>
            </article>
        @endunless
    </section>
@endsection
