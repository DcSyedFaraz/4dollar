@extends('layouts.web')

@section('title', $blog->title ?? '-')
@section('description', $blog->meta_description ?? '-')
@section('canonical', $blog->canonical ?? '-')


@section('content')
    <style>
        /* Core CSS */
        .service-section h1 {
            --tw-text-opacity: 1;
            color: rgb(88 28 135 / var(--tw-text-opacity));
            font-weight: 600;
            font-size: 2.25rem;
            line-height: 2.5rem;
            margin: 1rem 0;
        }

        .service-section h2,
        h3 {
            text-align: left;
            --tw-text-opacity: 1;
            color: #08090a;
            font-weight:bold;
            font-size: 1.5rem;
            line-height: 3.5rem;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

         .service-section h4 {
            /*text-align: center;*/
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity));
            font-size: 1.5rem;
            line-height: 2.5rem;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }
        .service-section h5 {
            /*text-align: center;*/
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity));
            font-size: 1.5rem;
            line-height: 2.5rem;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }
        .service-section ol{
            color: rgb(0 0 0 / var(--tw-text-opacity));
             margin-left: 1.5rem;
             line-height: 2.5rem;
            list-style-type: decimal;
            font-size:16px;
        }

        .service-section p {
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .service-section a {
            --tw-text-opacity: 1;
            /*rgb(26, 83, 255)*/
            color: rgb(2 132 199 / var(--tw-text-opacity));
            font-weight: 700;
        }

        .service-section a:hover {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity));
        }

        .service-section ul{
            color: rgb(0 0 0 / var(--tw-text-opacity));
             margin-left: 2.5rem;
            list-style-type: disc;
        }

        /*.service-section ol{*/
        /*    color: rgb(0 0 0 / var(--tw-text-opacity));*/
        /*     margin-left: 2.5rem;*/
        /*    list-style-type: decimal;*/
        /*    font-size:19px;*/
        /*}*/

        /* Mobile Size CSS */
        .service-section h1 {
            text-align: center;
        }

        .service-section ul {
            margin-left: 1rem;
            list-style-type: disc;

        }

        /* md and greater screen size */
        @media (min-width: 768px) {
            .service-section h1 {
                text-align: left;
            }

            .service-section ul {
                margin-left: 2.5rem;
               list-style-type: disc;

            }
        }

        /* sm and greater screen size  screen size */
        /* @media (min-width: 640px) {

        } */

    </style>




 <div class="bg-gray-100 shadow shadow-gray-400 shadow-md w-full">
    <div class="container mx-auto flex flex-col md:flex-row justify-between mb-5 p-4 lg:p-8
    ">
    <div>
        <h2 class=" italic  text-gray-600  text-3xl  ">
        {{ $blog->title ?? '' }}...</h2></div>
    <div class="mx-10">
        <div class="flex flx-col text-gray-500 text-lg">
         <a href="{{route('home')}}" class=" mx-3 mx-2">Home </a>
          <i class=" fa-solid fa-angle-right mt-1"></i>
         <a href="{{route('blogs')}}" class=" mx-2">Blogs</a>
          <i class=" fa-solid fa-angle-right mt-1"></i>
    </div>
    <div >
        <h2 class="px-2 text-gray-500 text-base"> {{ $blog->title ?? '' }}...</h2>
    </div>
    </div>
</div>
</div>
    <div class="container mx-auto text-lg">
        <p class="py-4  md:mx-0 lg:pl-20 ">Published by
            <i class="fa fa-user px-1"></i>
            admin on
            <i class="fa fa-clock-o px-1"></i>
          {{ Carbon\Carbon::parse($blog->created_at)->format('jS F Y ')  }}</p>
        </div>

    <div class="container mx-auto service-section md:col-span-7 lg:col-span-8 flex-1 flex flex-col overflow-hidden my-10">
        <div class=" ">
            <img src="{{ URL('storage/' . $blog->image_path) }}" alt="blog-image" class="mx-auto border-8 border-gray-100  " />
    </div>
        @if (!empty($blog))
            <div class="flex-1 px-2  text-base">
                {!! $blog->description !!}
            </div>
        @endif
    </div>
@endsection
