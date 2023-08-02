@extends('layouts.web')
@section('title', 'Blogs')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())
@section('content')
    <div class="bg-gray-100 shadow shadow-gray-400 shadow-lgw-full">
        <div class="container mx-auto  flex flex-col md:flex-row justify-between mb-5 p-2 lg:p-6
    ">
            <div>
                <h2 class=" italic  text-gray-600   lg:pl-[10rem] text-4xl  ">
                    Blogs</h2>
            </div>
            <div class="mx-10">
                <div class="flex flx-col text-gray-500 text-lg">
                    <a href="{{ route('home') }}" class=" mx-3 mx-2">Home </a>
                    <i class=" fa-solid fa-angle-right  mt-2"></i>
                    <a href="{{ route('blogs') }}" class=" mx-2">Blogs</a>
                    <!--<i class=" fa-solid fa-angle-right mt-1"></i>-->
                </div>

            </div>
        </div>
    </div>
    <section class="container mx-auto my-10 ">

        @if (!empty($blogs))
            @foreach ($blogs as $blog)
                <div class="flex md:justify-center md:items-center flex-wrap py-4 flex-col lg:flex-row px-4 md:px-0">
                    <div class="w-[100%] lg:w-[30%] overflow-hidden flex-shrink-0 m-auto md:m-0 rounded md:mt-10"><a
                            href="{{ $blog->slug }}">
                            <img src="{{ URL('storage/' . $blog->image_path) }}" class=" border-8 border-gray-100 " />
                        </a>
                    </div>

                    <div class="container lg:pl-10 sm:pt-4 flex-1">
                        <div class="flex mb-6">
                            <div class=" flex flex-wrap md:w-auto w-full md:mb-0 mb-4 ">
                                <p class="text-sm md:text-lg py-2 md:py-4  mx-2 md:mx-0">Published by <i
                                        class="fa fa-user px-1"></i> admin on <i class="fa fa-clock-o px-1"></i>
                                    {{ Carbon\Carbon::parse($blog->created_at)->format('jS F Y ') }} </p>
                                <a href="{{ route('blogs.show', [$blog->slug]) }}" class="">
                                    <h2
                                        class="mx-2 xl:mx-0 text-xl md:text-3xl text-gray-800 w-full mb-3 text-left mt-4 sm:mt-0">
                                        {{ $blog->title }}
                                    </h2>
                                </a>

                                <p class="leading-normal text-sm md:text-lg py -2 mx-2 xl:mx-0 text-left">

                                    {{ \Illuminate\Support\Str::limit(strip_tags($blog->description), 200) }}
                                    @if (strlen(strip_tags($blog->description)) > 200)
                                        <a href="{{ route('blogs.show', [$blog->slug]) }}" class="">Read More</a>
                                    @endif
                                </p>
                                <div class="w-full bg-gray-100 px-4  md:space-y-4 py-2 text-sm md:text-lg mt-2">
                                    <span class=" float-left text-sm md:text-lg "> Do you like it ?
                                        <i class="fa fa-heart text-primary-one"></i>
                                    </span>
                                    <a href="{{ route('blogs.show', [$blog->slug]) }}"
                                        class="text-primary-one font-semibold float-right border-l border-gray-400 pl-2 ">
                                        <i class="text-sm md:text-base fa fa-comments-o text-black"></i> 0 <i
                                            class="fa fa-file-text-o pl-2 text-black  "></i> Read more</a>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            @endforeach

        @endif

        <div class="container mx-auto flex  justify-center items-center">
            {{$blogs->links()}}
            


        </div>
    </section>

@endsection
