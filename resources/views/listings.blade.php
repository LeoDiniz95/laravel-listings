@extends('layout')

@section('content')
    <header class="mx-auto p-4 justify-between ">
        <div class="h1 font-semibold mx-auto max-w-sm w-full">{{ $heading }}</div>
    </header>
    <section class="flex flex-wrap mx-auto">
        @unless (count($listings) == 0)
            @foreach ($listings as $listing)
                <article class="w-80 sm:w-96 mx-auto mb-6 p-6 pl-10 bg-stone-100 shadow">
                    <img src="{{asset('images/glare-coding.png')}}" alt="glassy" class="w-24 h-auto mx-auto">

                    <h3 class="h3 font-semibold hover:text-stone-500">
                        <a href="/listing/{{ $listing['id'] }}">{{ $listing['title'] }}</a>
                    </h3>
                    <p>{{ $listing['description'] }}</p>

                    <div class="text-md font-bold mb-2">{{ $listing['company'] }}</div>

                    <ul class="flex">
                        <li class="flex items-center justify-center bg-black text-stone-100 rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">item</a>
                        </li>
                    </ul>
                    <div>{{$listing['location']}}</div>
                </article>
            @endforeach
        @else
            <h3>No listings found</h3>
        @endunless
    </section>

@endsection
