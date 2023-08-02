@extends('layouts.web')

@section('title', $service->title ?? "-")
@section('description', $service->meta_description  ?? "-")
@section('canonical', $service->canonical  ?? "-")

@section('content')
    <style>
    
        
    
        /* Core CSS */
        .service-section h1 {
            --tw-text-opacity: 1;
            color: #2b7ebd;
            font-weight: bold;
            font-size: 1.75rem; 
            line-height: 2.5rem;
            margin: 1rem 0;
        }
        .service-section h2,h3 {
            --tw-text-opacity: 1;
            color: #2b7ebd;
            font-size: 1.75rem;
            font-weight: bold;
            line-height: 2.5rem;
            margin-top: 1rem;
            margin-bottom: 1rem;

        }
        .service-section h3 {
            --tw-text-opacity: 1;
            color: #3f81b4;
            font-size: 1.50rem;
            font-weight: bold;
            line-height: 2.5rem;
            margin-top: 1rem;
            margin-bottom: 1rem;

        }
        .service-section h5 {
            color: #2b7ebd;
            font: inherit;
            font-weight: 800;
        }
        .service-section h4{
            font-size: 24px;
            line-height: 42px;
            font-weight: 800;
            color: #2a7dc0;
        }
        /*.service-section h4, {*/
       
        /*   color: #2a7dc0;*/
          
        /*}*/
        .service-section p{
            color:#33383b;
            margin-top: 0.5rem;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        .service-section a{
            --tw-text-opacity: 1;
            color: #2b7ebd;
            font-weight: 700;
        }
        .service-section a:hover{
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity));
        }
        .service-section ul{
               color:#33383b;
               font: inherit;
            list-style-type: disc;
            font-size: 14px;
            font-weight: 600;
        }
        /* Mobile Size CSS */
        .service-section h1 {
            text-align: left;
        }
        .service-section ul{
            margin-left: 1rem;
        }
        /* md and greater screen size */
        @media (min-width: 768px) {
            .service-section h1 {
                font-size: 1.8rem;
                text-align: left;
            }
            .service-section ul{
                margin-left: 2.5rem;
            }
        }
        /* sm and greater screen size  screen size */
        /* @media (min-width: 640px) {

        } */

    </style>
<section class="container mx-auto mt-10 xl:mt-5">
     <div class="flex flex-col md:flex-row mx-auto xl:space-x-2">
        <div class="text-center sm:text-left flex flex-col w-[80%] sm:w-[75%] md:w-[60%]  lg:w-[60%] xl:w-3/4 xl:mx-0 mx-auto">
            <div class="mt-3 md:mt-6 lg:mt-10 xl:mt-16">
                            <p class="heading-primary xl:pl-5">{{ $service->name }} </p>
              </div>
           <div
            class="mx-4 lg:mx-2 mt-6 flex flex-row md:justify-start  items-center gap-2 lg:gap-4 sm:flex-row md:mt-8 lg:mt-10">
            <a href="javascript:void(Tawk_API.toggle())" class="btn bg-primary-two ">
                Live Chat
            </a>
            <a href="{{ route('order') }}" class="btn bg-primary-one ">
                Order Now
            </a>
        </div>


      
       <div class="mx-auto grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 sm:gap-x-[11rem] md:gap-x-[1rem] xl:gap-x-4 gap-y-5  my-8 w-full md:w-full  ">
           <div class="shadow-md shadow-primary-one md:mx-auto rounded-xl pr-[2rem] pl-2 md:pl-3 md:pr-3 lg:pr-[1rem]   2xl:pr-[1rem]  xl:pl-2">
                 <a href="https://www.sitejabber.com/reviews/4dollaressay.com ">
               <div class="flex items-center mt-2 sm:mt-4">
                   <img alt="profile" src="../imgs/sitejabbarimg.svg"
                       class="mx-2 sm:mx-auto rounded-full w-10 sm:w-8 md:w-10 mb-2 2xl:w-10 ">
                   <div class="flex flex-col sm:ml-2 justify-between">
                       <span class="text-primary-one text-sky-400 font-semibold text-base sm:text-lg lg:text-sm 2xl:text-lg">
                           Sitejabbar
                       </span>

                       <ul class="flex my-2">
                           <li class="my-auto ">
                               <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                   data-icon="star" class="w-4 sm:w-3 text-yellow-500 mr-1" role="img"
                                   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                   <path fill="currentColor"
                                       d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                   </path>
                               </svg>
                           </li>
                           <li class="my-auto">
                               <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                   data-icon="star" class="w-4 sm:w-3 text-yellow-500 mr-1" role="img"
                                   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                   <path fill="currentColor"
                                       d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                   </path>
                               </svg>
                           </li>
                           <li class="my-auto">
                               <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                   data-icon="star" class="w-4 sm:w-3 text-yellow-500 mr-1" role="img"
                                   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                   <path fill="currentColor"
                                       d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                   </path>
                               </svg>
                           </li>
                           <li class="my-auto">
                               <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                   data-icon="star" class="w-4 sm:w-3 text-yellow-500 mr-1" role="img"
                                   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                   <path fill="currentColor"
                                       d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                   </path>
                               </svg>
                           </li>
                           <li class="my-auto">
                               <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                   data-icon="star" class="w-4 sm:w-3 text-yellow-500 mr-1" role="img"
                                   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                   <path fill="currentColor"
                                       d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                   </path>
                               </svg>
                           </li>
                       </ul>
                   </div>

                   <span class="text-xl 2xl:text-xl mx-8 sm:ml-3 md:ml-0 ">
                       4.8
                   </span>
               </div>
                </a>
           </div>

           <div class="shadow-md shadow-primary-one md:mx-auto rounded-xl pr-[3rem] pl-2 md:pl-3 md:pr-3 lg:pr-[1rem]  2xl:pr-[1rem] xl:pl-2 gap-5">
                 <a href="https://www.trustpilot.com/review/4dollaressay.com">
               <div class="flex items-center mt-4">
                   <img alt="profil" src="../imgs/trustpilot.png"
                       class="mx-2 sm:mx-auto rounded-full w-10 sm:w-8 md:w-10 mb-2 2xl:w-10">

                       <div class="flex flex-col sm:ml-2 justify-between">
                        <span class="text-primary-one text-sky-400 font-semibold text-base sm:text-lg lg:text-sm 2xl:text-lg">
                            Trustpilot
                        </span>

                        <ul class="flex my-2">
                            <li class="my-auto ">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                    data-icon="star" class="w-4 sm:w-3 text-yellow-500 mr-1" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                    data-icon="star" class="w-4 sm:w-3 text-yellow-500 mr-1" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                    data-icon="star" class="w-4 sm:w-3 text-yellow-500 mr-1" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                    data-icon="star" class="w-4 sm:w-3 text-yellow-500 mr-1" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                    data-icon="star" class="w-4 sm:w-3 text-yellow-500 mr-1" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                        </ul>
                    </div>
                    <span class="text-xl 2xl:text-xl  mx-8 sm:ml-3 md:ml-0 ">
                        4.9
                    </span>
               </div>
               </a>
           </div>


           <div class="shadow-md shadow-primary-one md:mx-auto rounded-xl pr-[3rem] pl-2 md:pl-3 md:pr-3 lg:pr-[1rem]  2xl:pr-[1rem] xl:pl-2 gap-5">
               <a href="https://www.google.com/maps/place/4+Dollar+Essay/@29.7599004,-95.3661581,15z/data=!4m5!3m4!1s0x0:0xcfd30e0665a87a88!8m2!3d29.7599962!4d-95.3660717 ">
               <div class="flex items-center mt-4">
                   <img alt="profil" src="../imgs/google.png"
                       class="mx-2 sm:mx-auto rounded-full w-10 sm:w-8 md:w-10 mb-2 2xl:w-10">

                       <div class="flex flex-col sm:ml-2 justify-between">
                        <span class="text-primary-one text-sky-400 font-semibold text-base sm:text-lg lg:text-sm 2xl:text-lg">
                            Google
                        </span>

                        <ul class="flex my-2">
                            <li class="my-auto ">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                    data-icon="star" class="w-4 sm:w-3 text-yellow-500 mr-1" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                    data-icon="star" class="w-4 sm:w-3 text-yellow-500 mr-1" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                    data-icon="star" class="w-4 sm:w-3 text-yellow-500 mr-1" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                    data-icon="star" class="w-4 sm:w-3 text-yellow-500 mr-1" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                    data-icon="star" class="w-4 sm:w-3 text-yellow-500 mr-1" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                        </ul>
                    </div>

                    <span class="text-xl 2xl:text-xl  mx-8 sm:ml-3 md:ml-0 ">
                        4.8
                    </span>
               </div>
               </a>
           </div>

           <div  class="shadow-md shadow-primary-one md:mx-auto rounded-xl pr-[2rem] pl-2 md:pl-3 md:pr-3 lg:pl-2 lg:pr-2   2xl:pr-[1rem] xl:pl-2">
            <a href="https://reviewsbank.org/cheap-essay-writing-services/ ">
           <div class="flex items-center mt-4 lg:mt-2">
               <img alt="profil" src="../imgs/bnkpic2.png"
                   class="mx-2 sm:mx-auto rounded-full w-12 sm:w-14 xl:w-16 2xl:w-16">
               <div class="flex flex-col sm:ml-2 justify-between">
                   <span class="text-primary-one text-base text-sky-400 font-semibold sm:text-sm lg:text-sm xl:text-sm   ">
                        Reviews Bank
                   </span>

                   <ul class="flex my-2">
                       <li class="my-auto  ">
                           <svg aria-hidden="true" focusable="false" data-prefix="fas"
                               data-icon="star" class=" w-4 sm:w-3 text-yellow-500 mr-1" role="img"
                               xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                               <path fill="currentColor"
                                   d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                               </path>
                           </svg>
                       </li>
                       <li class="my-auto">
                           <svg aria-hidden="true" focusable="false" data-prefix="fas"
                               data-icon="star" class="w-4 sm:w-3 text-yellow-500 mr-1" role="img"
                               xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                               <path fill="currentColor"
                                   d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                               </path>
                           </svg>
                       </li>
                       <li class="my-auto">
                           <svg aria-hidden="true" focusable="false" data-prefix="fas"
                               data-icon="star" class="w-4 sm:w-3 text-yellow-500 mr-1" role="img"
                               xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                               <path fill="currentColor"
                                   d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                               </path>
                           </svg>
                       </li>
                       <li class="my-auto">
                           <svg aria-hidden="true" focusable="false" data-prefix="fas"
                               data-icon="star" class="w-4 sm:w-3 text-yellow-500 mr-1" role="img"
                               xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                               <path fill="currentColor"
                                   d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                               </path>
                           </svg>
                       </li>
                       <li class="my-auto">
                           <svg aria-hidden="true" focusable="false" data-prefix="fas"
                               data-icon="star" class="w-4 sm:w-3 text-yellow-500 mr-1" role="img"
                               xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                               <path fill="currentColor"
                                   d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                               </path>
                           </svg>
                       </li>
                   </ul>
               </div>
               <span class=" text-xl 2xl:text-xl ml-3 md:ml-0  ">
                   4.8
               </span>
           </div>
           </a>
       </div>
       </div>
       </div>
{{-- //sm:max-w-sm md:maxd-w-m --}}
        <div class="flex justify-center lg:w-[35%] xl:w-[40%] px-4 lg:px-0 xl:mt-10 ">
            <div
            class="mx-auto lg:mx-0 md:w-full lg:px-4 relative text-white rounded-[2.5rem] ">
            <div class=" text-center ">
                <span
                    class="relative top-3 lg:text-xl text-white text-sm font-semibold bg-primary-one p-2 md:p-2 rounded px-4 md:px-6 xl:px-10 ">
                    Get a Price Quote
                </span>
            </div>
            <form action="{{ route('get.fare') }}" method="Post">
                @csrf
                <div class="border-4 border-primary-one rounded-lg p-6 space-y-4"
                    action="https://assignmenthelpuae.com/get-fare">
                    <input type="hidden" name="academic_level" value="">
                    <div class="flex flex-col mt-2 md:mt-5">
                        <select id="academic_level" name="academic_level"
                            class="@error('academic_level') is-valid @enderror get-fare form-select bg-white"
                            data-value="{{ $data ?? '' ? $data->value : old('academic_level') }}">
                            <option hidden="" value="0" disabled="" selected="">Select Academic level</option>
                            @foreach ($academic_levels as $academic_level)
                                <option value="{{ $academic_level->id }}">
                                    {{ $academic_level->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('academic_level')
                            <div style="color:rgb(248, 12, 12);">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="flex flex-col">
                        <select id="deadline" name="deadline"
                            class="get-fare @error('deadline') is-valid @enderror form-select bg-white"
                            data-value="{{ $data ?? '' ? $data->value : old('deadline') }}">
                            <option hidden="" value="0" disabled="" selected="">Deadline</option>
                            @foreach ($deadlines as $deadline)
                                <option value="{{ $deadline->id }}">
                                    {{ $deadline->name .
                                        ' / ' .
                                        \Carbon\Carbon::now()->addDays($deadline->duration_in_days)->format('D, M j') }}
                                </option>
                            @endforeach
                        </select>
                        @error('deadline')
                            <div style="color:rgb(252, 7, 7);">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="flex flex-col">
                        <select id="no_of_pages" name="number_of_pages"
                            class="get-fare @error('number_of_pages') is-valid @enderror form-select bg-white">
                            <option hidden="" value="0" disabled="" selected="">Select No of Pages</option>
                            @for ($p = 1; $p <= 200; $p++)
                                <option value="{{ $p }}"> {{ $p * 250 }} Words -
                                    {{ $p }} Pages</option>
                            @endfor
                        </select>
                        @error('number_of_pages')
                            <div style="color:rgb(252, 11, 11);">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col space-y-4 xl:flex-row lg:space-y-2 xl:space-y-0 xl:space-x-4 justify-center items-center text-black ">

                        <div class="bg-primary-one p-3  h-[4.5rem] leading-5 text-white rounded w-full  text-center text-sm  font-semibold">Per Page Price: <br>
                            $ <span id="per_page_price">0</span>
                        </div>
                        <div class="bg-primary-one p-3 h-[4.5rem] leading-5 text-white rounded w-full text-center text-sm  font-semibold">Total Price: <br>
                           $ <span id="cost">0</span>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <a href="{{ route('order') }}" class="p-2 rounded-md text-center text-lg bg-primary-two w-full">
                            Proceed To Order
                        </a>
                    </div>
            </form>
        </div>
        </div>

     </div>

    </section>
   <section class="mx-auto container mt-5 ">
        <div class=" mx-[2rem] sm:mx-4">
        <div class="flex flex-col lg:flex-row md:space-x-2 lg:space-x-8 items-center  md:flex-row space-y-4 md:space-y-0  ">
            <div target-data="3" class="divbutton cursor-pointer bg-primary-next5 w-full md:w-[60%]  px-8 lg:px-3 py-3 rounded-xl flex flex-row space-x-4">
                <img alt="profil" src="../imgs/checklist.png" class="h-14 block ">
                <p class="text-white text-primary md:text-sm lg:text-primary font-semibold mt-3  md:mt-3">Top Quality Papers</p>
            </div>
            <div target-data="4" class="divbutton cursor-pointer bg-primary-next w-full md:w-[60%]  px-8 lg:px-3 py-3 rounded-xl flex flex-row space-x-4">
                <img alt="profil" src="../imgs/clock.png" class="h-14 block ">
                <p class="text-white text-primary md:text-sm lg:text-primary font-semibold cursor-pointer mt-3 md:mt-3">On TIme Delivery</p>
            </div>
            <div target-data="5" class="divbutton cursor-pointer bg-primary-next1  w-full md:w-[60%]  px-8 lg:px-3 py-3 rounded-xl flex flex-row space-x-4">
                <img alt="profil" src="../imgs/settings.png" class="h-14">
                <p class="text-white text-primary md:text-xs lg:text-primary font-semibold  cursor-pointer md:mt-3">24/7 Customer Support</p>
            </div>
        </div>
    </div>
    </section>

    {{-- Service Dynamic Content --}}
    <section class="service-section container mx-auto px-8 sm:px-3 my-6 md:min-h-[15rem]">
        {!! $service->html !!}
         
    </section>
        <div
            class="my-6 flex flex-row md:justify-center  xl:pl-5 items-center justify-center gap-2 lg:gap-4 sm:flex-row md:mt-8 lg:mt-10">
            <a href="javascript:void(Tawk_API.toggle())" class="btn bg-primary-two ">
                Live Chat
            </a>
            <a href="{{ route('order') }}" class="btn bg-primary-one ">
                Order Now
            </a>
        </div>
    {{-- Help --}}
    <!--<div class=" bg-cyan-900 text-center py-6">-->
    <!--    <h4 class="font-bold text-white text-3xl text-center py-4 px-3">-->
    <!--        Get Your Troubles Sorted with our Leading Assignment Writing Dubai UAE-->
    <!--    </h4>-->

    <!--    <a href="{{ route('order') }}"-->
    <!--        class="inline-flex bg-gradient-to-r from-cyan-400 to-blue-600 text-white border-0 py-2 px-6 my-4 hover:bg-cyan-600 rounded text-lg up-animate">-->
    <!--        Order Now-->
    <!--    </a>-->

    <!--    <p class="text-white text-center text-lg py-4">-->
    <!--        Worrying about grades is outdated, seeking professional help is a forward-looking approach, remember it.-->
    <!--    </p>-->
    <!--</div>-->
@endsection
@section('scripts')
    {{-- Count Up --}}
    {{-- <script src="https://inorganik.github.io/countUp.js/dist/countUp.umd.js"></script> --}}
    {{-- Core JS --}}
    <script>

$(".get-fare").change(function(e) {
                e.preventDefault();
                var data = {
                    "_token": "{{ csrf_token() }}",
                    "deadline_id": $('#deadline').val(),
                    "academic_level_id": $('#academic_level').val(),
                }
                $.ajax({
                    method: 'POST',
                    url: '{{ route('get.fare') }}',
                    beforeSend: function() {
                        // $("#cost-per-page").html("Loading...")
                        const loading =
                            '<svg class="inline-block " width="50px" height="50px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" stroke="#2793d4"><g transform="rotate(0 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(30 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(60 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(90 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(120 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(150 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(180 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(210 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(240 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(270 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(300 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(330 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate></rect></g></svg>'
                        $("#cost").html(loading)
                    },
                    complete: function() {
                        // $("#loading").removeClass("d-block");
                    },
                    data: data,
                    success: function(res) {
                        // console.log(res);
                        $("#per_page_price").html(res.per_page_price);
                        $("#cost").html((res.per_page_price * ($("#no_of_pages").val() == null ?
                            1 : $(
                                "#no_of_pages").val())))
                    },
                    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                        console.log(JSON.stringify(jqXHR));
                        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                    }
                });
            });
    </script>
@endsection
