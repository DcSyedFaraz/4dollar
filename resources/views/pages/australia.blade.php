@extends('layouts.web')

@section('title', 'Hire Australia’s No.1 Online Cheap Essay Writing Service')
@section('description',
    'Looking for a Cheap Essay Writing Service in Australia? Now you can get quality writing help from Expert Academic Writers at Affordable Price.',)
@section('canonical', config('app.app_url'))
@section('content')

<section class="container mx-auto mt-10 xl:mt-5">
    <div class="flex flex-col md:flex-row mx-auto xl:space-x-2">
       <div class="text-left flex flex-col w-[80%] sm:w-[75%] md:w-[60%]  lg:w-[60%] xl:w-3/4 xl:mx-0 mx-auto">
           <h1 class="heading-primary md:mt-8 lg:mt-5">Get Your Essay from the Best Essay Writing Service Australia
        </h1>
           <div class="mt-3 md:mt-6">
               <p class="primary-para">
                What’s the top priority to excel in your academics? Homeworks and assignments? You must have said, ‘Yes.’ But if the workload still wrinkle your head, we have a solution. We offer essay writing services to relieve your burden. Our prices start from $4 only.
               </p>
            <!--   <p class="primary-para mt-3">-->
            <!--    We’re here to let go of all your worries through a one-stop solution - 4 Dollar Essay. We offer-->
            <!--     a cheap essay writing Canada to keep you going amidst all the chaos. From essays to homework to-->
            <!--      assignments, you name it and we’ll offer it all in a few steps.-->
            <!--</p>-->
           </div>
           <div
           class="mt-6 flex flex-col md:justify-start xl:pl-5 items-center gap-4 sm:flex-row md:mt-8 lg:mt-10">
           <a href="javascript:void(Tawk_API.toggle())" class="btn bg-primary-one">
               Live Chat
           </a>
           <a href="{{ route('order') }}" class="btn bg-primary-two ">
               Order Now
           </a>
       </div>
       <div class="mx-auto grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 sm:gap-x-[11rem] md:gap-x-[1rem] xl:gap-x-4 gap-y-5  my-8 w-[68%] sm:w-[54%] md:w-full  ">
           <div class="shadow-md shadow-primary-one md:mx-auto rounded-xl pr-[2rem] pl-2 md:pl-3 md:pr-3 lg:pr-[1rem]  xl:pr-[3rem] 2xl:pr-[1rem]  xl:pl-2">
               <div class="flex items-center mt-4">
                   <img alt="profile" src="../imgs/sitejabbarimg.svg"
                       class="mx-auto rounded-full w-8 md:w-10 mb-2 2xl:w-10 ">
                   <div class="flex flex-col sm:ml-2 justify-between">
                       <span class="text-primary-one text-sm sm:text-lg lg:text-sm 2xl:text-lg">
                           Sitejabbar
                       </span>

                       <ul class="flex my-2">
                           <li class="my-auto ">
                               <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                   data-icon="star" class="w-2 sm:w-3 text-yellow-500 mr-1" role="img"
                                   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                   <path fill="currentColor"
                                       d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                   </path>
                               </svg>
                           </li>
                           <li class="my-auto">
                               <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                   data-icon="star" class="w-2 sm:w-3 text-yellow-500 mr-1" role="img"
                                   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                   <path fill="currentColor"
                                       d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                   </path>
                               </svg>
                           </li>
                           <li class="my-auto">
                               <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                   data-icon="star" class="w-2 sm:w-3 text-yellow-500 mr-1" role="img"
                                   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                   <path fill="currentColor"
                                       d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                   </path>
                               </svg>
                           </li>
                           <li class="my-auto">
                               <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                   data-icon="star" class="w-2 sm:w-3 text-yellow-500 mr-1" role="img"
                                   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                   <path fill="currentColor"
                                       d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                   </path>
                               </svg>
                           </li>
                           <li class="my-auto">
                               <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                   data-icon="star" class="w-2 sm:w-3 text-yellow-500 mr-1" role="img"
                                   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                   <path fill="currentColor"
                                       d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                   </path>
                               </svg>
                           </li>
                       </ul>
                   </div>

                   <span class=" text-sm sm:text-xl 2xl:text-xl ml-3 md:ml-0 ">
                       4.8
                   </span>
               </div>
           </div>

           <div class="shadow-md shadow-primary-one md:mx-auto rounded-xl pr-[3rem] pl-2 md:pl-3 md:pr-3 lg:pr-[1rem]  xl:pr-[3rem] 2xl:pr-[1rem] xl:pl-2 gap-5">
               <div class="flex items-center mt-4">
                   <img alt="profil" src="../imgs/trustpilot.png"
                       class="mx-auto rounded-full w-8 md:w-10 mb-2 2xl:w-10">

                   <div class="flex flex-col ml-2 justify-between">
                       <span class=" text-primary-one text-sm sm:text-lg lg:text-sm 2xl:text-lg">
                           Trustpilot
                       </span>

                       <ul class="flex my-2">
                           <li class="my-auto ">
                               <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                   data-icon="star" class="w-2 sm:w-3 text-yellow-500 mr-1" role="img"
                                   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                   <path fill="currentColor"
                                       d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                   </path>
                               </svg>
                           </li>
                           <li class="my-auto">
                               <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                   data-icon="star" class="w-2 sm:w-3 text-yellow-500 mr-1" role="img"
                                   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                   <path fill="currentColor"
                                       d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                   </path>
                               </svg>
                           </li>
                           <li class="my-auto">
                               <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                   data-icon="star" class="w-2 sm:w-3 text-yellow-500 mr-1" role="img"
                                   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                   <path fill="currentColor"
                                       d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                   </path>
                               </svg>
                           </li>
                           <li class="my-auto">
                               <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                   data-icon="star" class="w-2 sm:w-3 text-yellow-500 mr-1" role="img"
                                   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                   <path fill="currentColor"
                                       d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                   </path>
                               </svg>
                           </li>
                           <li class="my-auto">
                               <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                   data-icon="star" class="w-2 sm:w-3 text-yellow-500 mr-1" role="img"
                                   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                   <path fill="currentColor"
                                       d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                   </path>
                               </svg>
                           </li>
                       </ul>
                   </div>
                   <span class="text-sm sm:text-xl 2xl:text-xl ml-3">
                       4.9
                   </span>
               </div>
           </div>

           <div class="shadow-md shadow-primary-one md:mx-auto rounded-xl pr-[3rem] pl-2 md:pl-3 md:pr-3 lg:pr-[1rem]  xl:pr-[3rem] 2xl:pr-[1rem] xl:pl-2 gap-5">

               <div class="flex items-center mt-4">
                   <img alt="profil" src="../imgs/google.png"
                       class="mx-auto rounded-full  w-8 md:w-10 mb-2 2xl:w-10">

                   <div class="flex flex-col ml-2 justify-between">
                       <span class="text-primary-one text-sm sm:text-lg lg:text-sm 2xl:text-lg">
                           Google
                       </span>

                       <ul class="flex my-2">
                           <li class="my-auto  ">
                               <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                   data-icon="star" class=" w-2 sm:w-3 text-yellow-500 mr-1" role="img"
                                   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                   <path fill="currentColor"
                                       d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                   </path>
                               </svg>
                           </li>
                           <li class="my-auto">
                               <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                   data-icon="star" class="w-2 sm:w-3 text-yellow-500 mr-1" role="img"
                                   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                   <path fill="currentColor"
                                       d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                   </path>
                               </svg>
                           </li>
                           <li class="my-auto">
                               <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                   data-icon="star" class="w-2 sm:w-3 text-yellow-500 mr-1" role="img"
                                   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                   <path fill="currentColor"
                                       d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                   </path>
                               </svg>
                           </li>
                           <li class="my-auto">
                               <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                   data-icon="star" class="w-2 sm:w-3 text-yellow-500 mr-1" role="img"
                                   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                   <path fill="currentColor"
                                       d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                   </path>
                               </svg>
                           </li>
                           <li class="my-auto">
                               <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                   data-icon="star" class="w-2 sm:w-3 text-yellow-500 mr-1" role="img"
                                   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                   <path fill="currentColor"
                                       d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                   </path>
                               </svg>
                           </li>
                       </ul>
                   </div>
                   <span class="text-sm sm:text-xl 2xl:text-xl  ml-3">
                       4.8
                   </span>
               </div>
           </div>
           <div
           class="shadow-md shadow-primary-one md:mx-auto rounded-xl pr-[2rem] pl-2 md:pl-3 md:pr-3 lg:pl-2 lg:pr-2  xl:pr-[3rem] 2xl:pr-[1rem] xl:pl-2">

           <div class="flex items-center mt-4 lg:mt-2">
               <img alt="profil" src="../imgs/bnkpic2.png"
                   class="mx-auto rounded-full w-12 sm:w-14 xl:w-16 2xl:w-16">
               <div class="flex flex-col sm:ml-2 justify-between">
                   <span class="text-primary-one text-sm sm:text-sm lg:text-sm xl:text-sm   ">
                        Reviews Bank
                   </span>

                   <ul class="flex my-2">
                       <li class="my-auto  ">
                           <svg aria-hidden="true" focusable="false" data-prefix="fas"
                               data-icon="star" class=" w-2 sm:w-3 text-yellow-500 mr-1" role="img"
                               xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                               <path fill="currentColor"
                                   d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                               </path>
                           </svg>
                       </li>
                       <li class="my-auto">
                           <svg aria-hidden="true" focusable="false" data-prefix="fas"
                               data-icon="star" class="w-2 sm:w-3 text-yellow-500 mr-1" role="img"
                               xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                               <path fill="currentColor"
                                   d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                               </path>
                           </svg>
                       </li>
                       <li class="my-auto">
                           <svg aria-hidden="true" focusable="false" data-prefix="fas"
                               data-icon="star" class="w-2 sm:w-3 text-yellow-500 mr-1" role="img"
                               xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                               <path fill="currentColor"
                                   d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                               </path>
                           </svg>
                       </li>
                       <li class="my-auto">
                           <svg aria-hidden="true" focusable="false" data-prefix="fas"
                               data-icon="star" class="w-2 sm:w-3 text-yellow-500 mr-1" role="img"
                               xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                               <path fill="currentColor"
                                   d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                               </path>
                           </svg>
                       </li>
                       <li class="my-auto">
                           <svg aria-hidden="true" focusable="false" data-prefix="fas"
                               data-icon="star" class="w-2 sm:w-3 text-yellow-500 mr-1" role="img"
                               xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                               <path fill="currentColor"
                                   d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                               </path>
                           </svg>
                       </li>
                   </ul>
               </div>
               <span class=" text-sm sm:text-xl 2xl:text-xl ml-3 md:ml-0  ">
                   4.8
               </span>
           </div>
       </div>
       </div>
       </div>
{{-- //sm:max-w-sm md:maxd-w-m --}}
       <div class="flex justify-center lg:w-[35%] xl:w-[40%]  px-2 lg:px-0 xl:mt-10 ">
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
               <div class="border-4 border-primary-one rounded-lg p-6  space-y-4"
                   action="https://assignmenthelpuae.com/get-fare">
                   <input type="hidden" name="academic_level" value="">
                   <div class="flex flex-col mt-2 md:mt-5">
                       <select id="academic_level" name="academic_level"
                           class="@error('academic_level') is-valid @enderror get-fare form-select"
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
                           class="get-fare @error('deadline') is-valid @enderror form-select"
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
                           class="get-fare @error('number_of_pages') is-valid @enderror form-select">
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


   <!-- Service Work -->
   <section class="container mx-auto my-10">

    <p class=" heading-primary text-center mx-5">Wondering How Can You Hire Our Essay Writing Help Australia?
    </p>
    {{-- <p class="text-center my-6  mx-8 primary-para">Getting your papers done through our platform is only a 4-step process.</p> --}}


    <div class="mt-5 grid grid-cols-1 md:grid-cols-2 md:gap-x-10 lg:gap-x-32 gap-y-8 mx-[2rem] lg:mx-[6rem] xl:mx-[2rem] ">
        <div class="bg-primary-one px-[0.5rem] md:px-8 py-[2rem] md:py-[2rem] lg:py-14 rounded-xl">
            <img src="../imgs/Submit-Your-Requirements.png"
                class=" bg-gradient-to-r from-[#cfe1f1] to-[#6ba5d3] rounded-xl h-[3.5rem] md:h-24 lg:h-28 sm:mt-4 md:mt-2  -ml-[2rem] md:-ml-[4rem] lg:-ml-24 p-[0.5rem] md:p-6 absolute ">
            <h4 class="text-white text-xl lg:text-2xl mb-2 ml-11 ">Enter Details    </h4>
            <p class="text-white  text-sm xl:text-lg space-y-2 ml-11">Fill the order form and enter the
                complete details of your paper. The more details you provide, the higher are the chances of
                 getting your desired essay.
            </p>
        </div>
        {{-- .-ml-12 {
    margin-left: -3rem;
  } --}}
        <div class="bg-primary-two px-[0.5rem] md:px-8 py-[2rem]  md:py-[2rem] lg:py-14  rounded-xl">
            <img src="../imgs/Confirm-Order.png"
                class=" bg-gradient-to-r from-[#d5ead7] to-[#76bd7e] rounded-xl h-[3.5rem] md:h-24 lg:h-28  8 sm:mt-4 md:mt-2 -ml-[2rem] md:-ml-[4rem] lg:-ml-24 p-[0.5rem] md:p-6 absolute ">
            <h4 class="text-white text-xl lg:text-2xl  mb-2 ml-11">Submit Order  </h4>
            <p class="text-white  text-sm xl:text-lg space-y-2  ml-11">After entering the details, you’ll get
                 an order summary and the payment methods next to the form. Click on ‘Submit Order’ to confirm.
            </p>
        </div>

        <div class="bg-primary-three px-[0.5rem] md:px-8 py-[2rem]  md:py-[2rem] lg:py-14  rounded-xl">
            <img src="../imgs/Proceed-To-Payment.png"
                class=" bg-gradient-to-r from-[#fbd4bf] to-[#f4935f] rounded-xl h-[3.5rem] md:h-24 lg:h-28  sm:mt-4 md:mt-2 -ml-[2rem] md:-ml-[4rem] lg:-ml-24 p-[0.5rem] md:p-6 absolute ">
            <h4 class="text-white text-xl lg:text-2xl mb-2 ml-11">Select the Payment Method            </h4>
            <p class="text-white  text-sm xl:text-lg space-y-2  ml-11">We offer five different payment methods.
                 You can choose the one that you find easy and proceed to pay us.
            </p>
        </div>

        <div class="bg-primary-four px-[0.5rem] md:px-8 py-[2rem]  md:py-[2rem] lg:py-14  rounded-xl">
            <img src="../imgs/Wait-For-Submission.png"
                class=" bg-gradient-to-r from-[#eed1e6] to-[#ce7cb7] rounded-xl h-[3.5rem] md:h-24 lg:h-28  sm:mt-4 md:mt-2 -ml-[2rem] md:-ml-[4rem] lg:-ml-24 p-[0.5rem] md:p-6 absolute ">
            <h4 class="text-white text-xl lg:text-2xl  mb-2 ml-11">Wait till the Deadline </h4>
            <p class="text-white text-sm xl:text-lg  ml-11">When you send us your order, we assign you a
                deadline. Wait till our writers finish your essay and deliver to your inbox before the deadline.
            </p>
        </div>

    </div>
</section>

     <!-- Academics -->
     <section class="px-4  my-10 xl:mt-28">
        <div class="container mx-auto flex flex-col lg:flex-row justify-center items-center px-6 xl:px-0">
            <div class="mx-6   py-6 w-full lg:px-0 xl:w-3/4 lg:w-3/4">

                <h3 class="heading-primary pb-4 ">
                    Hire Our Best Essay Writer Australia for Ultimate Success

                </h3>
                <p class="text-primary pb-4  primary-para">
                    Finding the best writers in Australia is a daunting task. You need to look here and there,
                     and everywhere to find the one top-notch writer. But when you choose us for your essays,
                      you get access to the best essay writers Australia.
                </p>
                <p class="text-primary pb-4  primary-para">
                    They brainstorm ideas, plan the write-ups, do the job according to your requirements and send
                     it to the quality assurance department to get it double-check. So, instead of searching for
                      the best essay writing service Australia reddit, try our well-appreciated, well-trained,
                       and exceptional writers who don’t forget to astound you with their unique papers.
                </p>
                <p class="text-primary pb-4  primary-para">
                    And the best part is you can talk to our writers to discuss your papers. They won’t only feel
                     good to guide you but will also step out of their comfort zone to make you win the grades.
                     This isn’t true in words only, you’ll get to know the results once you hire them. Try Today!
                </p>

                <div class="mt-6 flex flex-col md:justify-start items-center gap-4 sm:flex-row md:mt-8 lg:mt-10">
                    <a href="javascript:void(Tawk_API.toggle())" class="btn bg-primary-two animate-move">
                        Live Chat
                    </a>
                    <a href="{{ route('order') }}" class="btn bg-primary-one ">
                        Order Now
                    </a>

                </div>

            </div>

            <div class=" w-full sm:w-[75%] md:w-[50%] lg:w-[45%] xl:w-[35%] ">
                <div class="py-2 px-9 border-4 rounded-xl border-primary-three bg-primary-box  md:p-4 ">
                    <h4 class="text-white text-2xl font-semibold text-center">Free Features</h4>

                    <ul class="my-3 space-y-1 ">
                        <li
                            class="space-x-3 border-b pb-2 text-sm border-white border-dashed text-white flex justify-between">
                            <p class="w-[48%] lg:my-1 ">Plagiarism Report</p>
                            <span class="text-center lg:my-1  ">for <del>$4</del></span>
                            <strong class="float-right lg:my-1 ">Free</strong>
                        </li>

                        <li
                            class="space-x-3  border-b text-sm pb-2 border-white border-dashed text-white text-lg flex justify-between">
                            <p class="w-[48%] lg:my-1 ">Formatting</p>
                            <span class="text-center lg:my-1">for <del>$4</del></span>
                            <strong class="float-right lg:my-1 ">Free</strong>
                        </li>

                        <li  class="space-x-3 border-b pb-2 text-sm border-white border-dashed text-white text-lg flex justify-between">
                            <p class="w-[48%] lg:my-1 ">Title page</p>
                            <span class="text-center lg:my-1">for <del>$4</del></span>
                            <strong class="float-right lg:my-1">Free</strong>
                        </li>

                        <li class="space-x-3 border-b pb-2 text-sm border-white border-dashed text-white text-lg flex justify-between">
                            <p class="w-[48%] lg:my-1">Bibliography</p>
                            <span class="text-center lg:my-1">for <del>$4</del></span>
                            <strong class="float-right lg:my-1">Free</strong>
                        </li>

                        <li class="space-x-3 border-b pb-2 text-sm border-white border-dashed text-white text-lg flex justify-between">
                            <p class="w-[48%] lg:my-1 ">Outline</p>
                            <span class="text-center lg:my-1">for <del>$4</del></span>
                            <strong class="float-right lg:my-1">Free</strong>
                        </li>

                        <li class="space-x-3 border-b pb-2 text-sm border-white border-dashed text-white text-lg flex justify-between">
                            <span class="w-[49%] lg:my-1">Limitless Amendments</span>
                            <span class="text-center lg:my-1">for <del>$4</del></span>
                            <strong class="float-right lg:my-1 ">Free</strong>
                        </li>
                    </ul>

                    <h4 class="text-white text-base lg:text-xl font-semibold py-2 lg:py-0 text-center">Get all these features for</h4>
                    <div class="grid grid-cols-2 w-3/5 mx-auto">
                        <div class="mx-auto">
                            <span class="font-semibold text-base lg:text-xl text-white"><del>$24</del></span>
                        </div>
                        <div class="mx-auto">
                            <span class="font-semibold text-base lg:text-xl text-white">FREE</span>
                        </div>
                    </div>

                    <div class="flex justify-center items-center ">
                        <a href="{{ route('order') }}" class="py-2 px-4 primary-para rounded-full bg-white text-black mt-4">
                            Order Now
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Service Work -->
    <section class="container mx-auto w-3/4 xl:w-3/4 my-10">
        <p class="heading-primary text-left">Are You Still Searching: “Write My Essay Australia”?
        </p>
        <p class="primary-para my-3  font-semibold ">When you have the cheapest writing platform around, you no longer need
             to search for ‘do my essay Australia.’ We guarantee successful papers that get you on top of other
              candidates because of its unique structure and high standards of writing.
        </p>
        <p class="text-left  primary-para font-semibold ">Here are the subjects we proudly covers:
       </p>

    <ul class=" primary-para text-left list-disc md:ml-8 space-y-2 mx-4  mt-2">

    <li>Law Papers  </li>

    <li> Nursing Essays  </li>

    <li> Term Papers  </li>

    <li> Thesis Writing  </li>

    <li> Paper Writing  </li>

    <li>MBA Assignment Help  </li>

    <li> Dissertation Writing  </li>

    <li>Literature Essays  </li>

    <li>PowerPoint Presentation  </li>

    <li> Admission Essay  </li>

</ul>

<p class="text-left my-3 primary-para mx-2">If you want any other unique papers, feel free to use our live chat support
    for instant answers.
</p>
<p class="text-left   my-3 primary-para mx-2">When you submit us your orders, our writers start from understanding your
    requirements and researching in-depth about the topic. Our access to vast internet resources helps us to
     structure your paper with thoughtful paragraphs that later leads to success.
</p>
<p class="text-left   my-3 primary-para font-semibold mx-2">So, if you’re someone who’s tired of rejections or looking to free your
     hours then know that our cheap essay writing service Australia is 24/7 available for you. No matter if
     you’re in Sydney, Melbourne, Perth, Brisbane, Canberra or any other city of Australia, our services are
     always open for you.
</p>

    </section>

     <!-- Guarantee -->
<section class="container mx-auto  xl:w-[85%] my-10">
    <h3 class="heading-primary pb-10 text-center mx-2">
        Here’s Why Should You Choose Us?
    </h3>

    <div class="grid grid-cols-1 xl:grid-cols-2 gap-x-20 gap-y-8 mx-2">
        <div class="space-y-4 md:space-y-8 my-auto mx-auto ">

            <div class="flex flex-col md:space-x-8 items-center md:flex-row space-y-4 md:space-y-0">
                <div target-data="0" class="divbutton bg-primary-next5 w-full md:w-[50%] xl:w-full px-8 lg:px-4 py-4 rounded-xl flex flex-row space-x-4">
                    <img src="../imgs/pie-chart.png" class="h-14">
                    <p id='' class="text-white text-primary font-semibold ">Unique Papers</p>
                </div>

                <div target-data="1" class="divbutton  bg-primary-next w-full md:w-[50%] xl:w-full px-8 py-4 rounded-xl flex flex-row space-x-4">
                    <img src="../imgs/equalizer.png" class="h-14">
                    <p class="text-white text-primary font-semibold ">Best Writers</p>
                </div>
            </div>

            <div class="flex flex-col md:space-x-8 items-center md:flex-row space-y-4 md:space-y-0">

                <div target-data="2" class="divbutton bg-primary-next1 w-full md:w-[50%]  px-8 lg:px-4 py-4 rounded-xl flex flex-row space-x-4">
                    <img src="../imgs/ribbon.png" class="h-14">
                    <p class="text-white text-primary font-semibold ">Customized Papers</p>
                </div>

                <div target-data="3" class="divbutton bg-primary-next2 w-full md:w-[50%] px-8 lg:px-4 py-4 rounded-xl flex flex-row space-x-4">
                    <img src="../imgs/checklist.png" class="h-14">
                    <p class="text-white text-primary font-semibold ">Free Revisions</p>
                </div>

            </div>

            <div class="flex flex-col md:space-x-8 items-center md:flex-row space-y-4 md:space-y-0">

                <div target-data="4" class="divbutton bg-primary-next3 w-full md:w-[50%]  px-8 py-4 rounded-xl flex flex-row space-x-4">
                    <img src="../imgs/clock.png" class="h-14">
                    <p class="text-white text-primary font-semibold ">Data Privacy</p>
                </div>

                <div target-data="5" class="divbutton bg-primary-next4 w-full md:w-[50%]  px-8 lg:px-2 py-4 rounded-xl flex flex-row space-x-4">
                    <img src="../imgs/settings.png" class="h-14">
                    <p class="text-white text-primary font-semibold">Cheap Prices</p>
                </div>
            </div>
        </div>
        <div id='colors' class="px-8 py-2 h-[100%] rounded-xl my-auto w-full sm:w-[75%] md:w-[75%] lg:w-[50%] xl:w-full mx-auto ">
            <h4 id='title' class="text-white text-center text-xl lg:text-3xl font-semibold py-4 mt-4">
            </h4>
            <p id='content' class="text-white text-center text-primary text-lg"></p>
            <div class="flex justify-center items-center ">
                <button id="button" class=" bg-white text-lg text-black rounded-full py-1  mt-4 w-2/3 md:w-1/4">
                    Next
                </button>
            </div>
        </div>
    </div>
</section>

     <!-- Form -->
     <section class="container mx-auto px-2 xl:px-2 my-20">
        <p class="heading-primary text-center">
            What Are You Waiting For? Our Cheap Paper Writing Service is 24/7 Available for You

        </p>
        <div id="msg-bag"></div>
        <div class="flex flex-col md:px-2 w-full mt-12">
            <form method="POST" id="query-form" action="{{ route('order.query') }}">
                @csrf
                <div class="flex flex-wrap ">
                    <div class=" px-3 md:px-1 w-full md:w-1/2 lg:w-1/4  mb-3">
                        <label class="text-red-500 text-sm lg:text-base ml-3 block">I Need</label>
                        <select name="paper_type"
                            class="@error('paper_type') border-red-500 @enderror  placeholder-black w-full text-gray-700 shadow-xl rounded-full border-2 border-blue-800 bg-white  focus:border-purple-400 focus:ring-2 focus:ring-purple-200 text-base h-10 outline-none  px-3 leading-8 transition-colors duration-200 ease-in-out"
                            value="{{ old('paper_type', '') }}">
                            @foreach ($paper_types as $paper_type)
                                <option {{ old('paper_type') == $paper_type->id ? 'selected' : '' }}
                                    value="{{ $paper_type->id }}">{{ $paper_type->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="px-3 md:px-1 w-full md:w-1/2 lg:w-1/4  mb-3">
                        <label class="text-red-500 text-sm lg:text-base ml-3  block">My Email</label>
                        <input type="text"
                            class=" @error('email') border-red-500 @enderror placeholder-black w-full text-gray-700 shadow-xl rounded-full border-2 border-blue-800 bg-white  focus:border-purple-400 focus:ring-2 focus:ring-purple-200 text-base h-10 outline-none py-2 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            name="email" placeholder="Example@gmail.com" value="{{ old('email') }}">
                    </div>

                    <div class="px-3 md:px-1 w-full md:w-1/2 lg:w-1/4  mb-3">
                        <label class="text-red-500 text-sm lg:text-base ml-3  block">My Number</label>
                        <input type="tel" name="Phone" id="phone" type="tel"
                            class="@error('phone') border-red-500 @enderror  placeholder-black w-full text-gray-700 shadow-xl rounded-full border-2 border-blue-800 bg-white focus:border-purple-400
                            focus:ring-2 focus:ring-purple-200 text-base h-10 outline-none py-2 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            placeholder="Contact Number" value="{{ old('phone') }}"
                            oninput="this.value=this.value.replace(/[^0-9\+]/g,'');" autocomplete="off"
                            data-intl-tel-input-id="0">
                            <input type="hidden" name="phone" id="phone2" />
                        @error('phone')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full px-3 md:px-1 md:w-1/2 lg:w-1/4  mb-3 mt-5 lg:mt-6 ">
                        <button id="btn-submit" type="submit"
                            class="text-white shadow-xl bg-blue-800 border-0 h-10 outline-none  px-6 py-2 focus:outline-none hover:bg-purple-600 rounded-full text-lg w-full">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </section>


    <style>
        .swiper-button-next {
            color: white;
            right: 0;
            height: 2rem !important;
            border-radius: 50%;
        }

        .swiper-button-prev {
            color: white;
            height: 2rem !important;
            border-radius: 50%;
            left: 0px;
        }

        .swiper-button-next:after {
            font-size: 1.2rem !important;
        }

        .swiper-button-prev:after {
            font-size: 1.2rem !important;
        }
    </style>

<!-- Testimonial -->
<section class=" px-2 my-5">
<p class="heading-primary text-center">4 Dollar Essay Reviews</p>
<p class="text-center my-6 primary-para">This is how our customers remember us.</p>
<!-- Swiper -->
<div class="container mx-auto mt-2 swiper mySwiper">
<div class="mb-5 swiper-wrapper ">
  <div class="swiper-slide ">
      <div class="p-4 text-gray-800 rounded-2xl shadow-md bg-red-600 max-h-full md:max-h-screen">
          <div class="mb-2">
            <ul class="my-3 space-y-5 text-sm text-white ">
                <li class="space-x-3"><span>Order: #17770851</span> <span class=" float-right">Pages:
                        12</span></li>
            </ul>
            <p class="mb-2 text-center text-sm text-white italic ">
                "They came at the right time to save my grades from falling. I hired them for my essay on politics and I must say I was 100 percent satisfied with their work."
            </p>
            <div class="flex flex-col items-center justify-center ">
              {{-- <div class="w-12 h-12 overflow-hidden bg-white border-2 border-indigo-100 rounded-full">
                <img src="https://cdn.pixabay.com/photo/2017/05/19/12/38/entrepreneur-2326419__340.jpg" alt="img" class="object-cover object-center w-full h-full" />
              </div> --}}
              <p class="my-3 text-center text-sm text-white ">Discipline: Politics Essay</p>
          </div>
          </div>
        </div>
  </div>
  <div class="swiper-slide ">
    <div class="p-4 text-gray-800 rounded-2xl shadow-md bg-red-600 ">
        <div class="mb-2">
          <ul class="my-6 space-y-5 text-sm text-white ">
              <li class="space-x-3"><span>Order: #17550851</span> <span class=" float-right">Pages:
                      60</span></li>
          </ul>

          <p class="mb-2 text-center text-sm text-white italic   md:my-6 ">
            "I received my paper on time and I also scored a good grade on it. Thank You" </p>
          <div class="flex flex-col items-center justify-center ">
            <p class="my-3 text-center text-sm text-white ">Discipline: Journalism</p>
        </div>
        </div>
      </div>
</div>
<div class="swiper-slide ">
    <div class="p-4 text-gray-800 rounded-2xl shadow-md bg-red-600 ">
        <div class="mb-2">
          <ul class="my-5 space-y-5 text-sm text-white ">
              <li class="space-x-3"><span>Order: #17770951</span> <span class=" float-right">Pages:
                      3</span></li>
          </ul>
          <p class="mb-2 text-center text-sm text-white italic ">
            "Very good writing by their writers, on-time submission and they also adjusted my revisions in the
             given price. If required, I’d definitely hire them again."
            </p>
          <div class="flex flex-col items-center justify-center ">
            <p class="my-1 text-center text-sm text-white ">Discipline: Thesis</p>
        </div>
        </div>
      </div>
</div>
<div class="swiper-slide ">
    <div class="p-4 text-gray-800 rounded-2xl shadow-md bg-red-600 ">
        <div class="mb-2">
          <ul class="my-3 space-y-5 text-sm text-white ">
              <li class="space-x-3"><span>Order: #96770851</span> <span class=" float-right">Pages:
                      5</span></li>
          </ul>
          <p class="mb-2 text-center text-sm text-white italic ">
            "Nobody offers this awesome service at such a cheap cost. I value their mission to create this platform to help students."
          </p>
          <div class="flex flex-col items-center justify-center ">

            <p class="my-6 text-center text-sm text-white ">Discipline: Coursework</p>
        </div>
        </div>
      </div>
</div>
<div class="swiper-slide ">
    <div class="p-4 text-gray-800 rounded-2xl shadow-md bg-red-600 ">
        <div class="mb-2">
          <ul class="my-2 space-y-5 text-sm text-white ">
              <li class="space-x-3"><span>Order: #17770851</span> <span class=" float-right">Pages:
                      12</span></li>
          </ul>
          <p class="mb-2 text-center text-sm text-white italic  ">
            "They came at the right time to save my grades from falling. I hired them for my essay on politics and I must say I was
             100 percent satisfied with their work."
          </p>
          <div class="flex flex-col items-center justify-center ">
            <p class="my-4 text-center text-sm text-white ">Discipline: Politics Essay</p>
        </div>
        </div>
      </div>
</div>
<div class="swiper-slide ">
    <div class="p-4 text-gray-800 rounded-2xl shadow-md bg-red-600 ">
        <div class="mb-2">
          <ul class="my-5 space-y-5 text-sm text-white ">
              <li class="space-x-3"><span>Order: #17550851</span> <span class=" float-right">Pages:
                      60</span></li>
          </ul>
          <p class="mb-2 text-center text-sm text-white italic ">
            "I received my paper on time and I also scored a good grade on it. Thank You"
          </p>
          <div class="flex flex-col items-center justify-center ">
            <p class="my-6 text-center text-sm text-white ">Discipline: Journalism</p>
        </div>
        </div>
      </div>
</div>
<div class="swiper-slide ">
    <div class="p-4 text-gray-800 rounded-2xl shadow-md bg-red-600 ">
        <div class="mb-2">
          <ul class="my-5 space-y-5 text-sm text-white ">
              <li class="space-x-3"><span>Order: #17770951</span> <span class=" float-right">Pages:
                      3</span></li>
          </ul>
          <p class="mb-2 text-center text-sm text-white ">
            "Very good writing by their writers, on-time submission and they also adjusted my revisions in the given price. If required, I’d definitely hire them again."          </p>
          <div class="flex flex-col items-center justify-center ">
            <p class="my-1 text-center text-sm text-white ">Discipline: Thesis</p>
        </div>
        </div>
      </div>
</div>
<div class="swiper-slide ">
    <div class="p-4 text-gray-800 rounded-2xl shadow-md bg-red-600 ">
        <div class="mb-2">
          <ul class="my-3 space-y-5 text-sm text-white ">
              <li class="space-x-3"><span>Order: #96770851</span> <span class=" float-right">Pages:
                      5</span></li>
          </ul>
          <p class="mb-2 text-center text-sm text-white ">
            "Nobody offers this awesome service at such a cheap cost. I value their mission to create this platform to help students."
          </p>
          <div class="flex flex-col items-center justify-center ">
            <p class="my-6 text-center text-sm text-white ">Discipline: Coursework</p>
        </div>
        </div>
      </div>
</div>
</div>
<div class="swiper-button-next "></div>
<div class="swiper-button-prev "></div>
</div>
</section>
<div class="flex justify-center items-center mt-4 mb-4 md:mb-[3rem]">
<a href={{ route('reviews') }} class="btn bg-primary-one">
    View all Reviews
</a>
</div>


    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        grid: {
          rows: 1,
        },
        spaceBetween: 30,
        pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
            breakpoints: {
                40: {
                    slidesPerView: 1,

                },
                768: {
                    slidesPerView: 2,

                },
                1024: {
                    slidesPerView: 3,

                },
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });


    </script>
@endsection

@section('scripts')
    <script>
       $(document).ready(function() {
            const phoneInputField = document.querySelector("#phone");
            const phoneInput = window.intlTelInput(phoneInputField, {
                preferredCountries: ["us"],
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            });

            $('#query-form').on('submit', function(e) {
                e.preventDefault();

                const phoneNumber = phoneInput.getNumber();
                $('#phone2').val(phoneNumber);

                $.ajax({
                    url: "{{ route('order.query') }}",
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: $('#query-form').serialize(),
                    beforeSend: function() {
                        $(".query-form-error").empty();

                        $('#query-form').find(':submit').attr("disabled", true);
                        $('#btn-submit').html("Submitting...");
                    },
                    complete: function() {
                        $('#query-form').find(':submit').attr("disabled", false);
                        $('#btn-submit').html("Submit");
                    },
                    success: function(res) {

                        console.log(res)

                        $('#msg-bag').empty();

                        let msg =
                            '  <div class="mx-auto text-sm w-3/4 bg-green-100 text-center border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">';
                        msg += '    <strong class="font-bold">Success!</strong>';
                        msg += '    <span class="block sm:inline">' + res.success + '</span>';
                        msg += ' </div>';

                        $('#msg-bag').append(msg);

                        $(':input', 'form')
                            .not(':button, :submit, :reset, :hidden')
                            .val('')
                            .prop('checked', false)
                            .prop('selected', false);
                    },
                    error: function(err) {
                        if (err.status == 422) {

                            $('#msg-bag').empty();

                            let msg =
                                '<div class="mx-auto text-sm w-3/4 bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">';
                            msg += '    <strong class="font-bold">Error!</strong>';
                            msg += '    <span class="block sm:inline">Invalid Data</span>';
                            msg += ' </div>';

                            $('#msg-bag').append(msg);
                            $.each(err.responseJSON.errors, function(i, error) {
                                var el = $('#query-form').find('[name="' + i + '"]');
                                el.after($('<span class="text-sm query-form-error text-red-600">' +
                                    error[0] + '</span>'));
                            });

                            $('.query-form-error').delay(8000).fadeOut();
                        }

                    },
                });
            });

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
 '<svg class="inline-block "  width="40px" height="40px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" stroke="#2793d4"><g transform="rotate(0 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(30 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(60 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(90 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(120 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(150 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(180 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(210 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(240 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(270 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(300 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(330 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate></rect></g></svg>'
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
        });

        (function() {
            let sliderOpen = $('.openSlide');
            sliderOpen.hide();
            sliderOpen.eq(0).show();
            $('.questions').on('click', function() {
                let dataNo = $(this).attr('data-no');
                let xy = $(this);
                $('.content').each(function() {
                    let eachdatano = $(this).attr('data-no');
                    if (dataNo == eachdatano) {
                        xy.next().slideToggle();
                        xy.addClass('active');
                        xy.find('i').toggleClass("fa-plus-square fa-minus-square");
                    } else if (dataNo != eachdatano) {
                        $(this).find('p#openSlide' + eachdatano).slideUp();
                        $(this).find('.questions').removeClass("active");;
                        $(this).find('i').removeClass("fa-minus-square");;
                        $(this).find('i').addClass("fa-plus-square");;
                    }
                })
            })
        })();
        var guarantee = [
            {
                 'title': 'Papers Written for You Only',
                'content': 'We neither copy nor rephrase the existing papers to complete your projects. Our writers start from scratch from excellent ideas and then write your papers which leads to our credibility and to your success.',
               'color': 'bg-primary-next5',
               'colordiv': '#F06A22'
             },
            {
                 'title': 'Get Your Papers by the Best Australian Writers',
                'content': 'It’s only the writers who can let you shine in the crowd and add to your growth in academics. With us you can keep this worry aside as we have best Australian writers from different cities who are working with us for a long time.',
               'color': 'bg-primary-next',
               'colordiv': '#BA4B9C'

             },
            {
                'title': 'Unique and Authentic Papers',
                'content': 'Are you worried if we’ll submit general papers to you? Take a Pause! We only aim to help students and this is only possible with customized, unique papers. So, every paper we ink is based on your requirements only.',
                'color': 'bg-primary-next1',
                'colordiv': '#5CD3CB'

            },
            {
                'title': 'We Don’t Charge for Revisions',
                'content': 'We always submit quality papers before the time. But still, if you feel there’s something missing in your essays, you can ask us for free revisions. We don’t charge for revisions unless it requires a huge amount of effort.',
                'color': 'bg-primary-next2',
                'colordiv': '#71B243'

            },
            {
                'title': 'Your Identity Remains Confidential',
                'content': 'We serve a great deal of students on a regular basis, so we have a cluster of data with us. But we never shared it with anyone. We aim to keep you anonymous since this is what you expect from us.',
                'color': 'bg-primary-next3',
                'colordiv': '#2A7DC0'

            },
            {
                'title': 'We Charge $4 for Each Page',
                'content': 'We started with the vision to help students. That’s why we have kept the pricing of our essay help Australia as low as $4. This gives you the flexibility to hire us even when you’re short of budget. Isn’t that amazing?',
                'color': 'bg-primary-next4',
                'colordiv': '#FFA949'

            },
        ]

        i = 0;

        $('#button').on('click', function updateContent() {
            if (i === guarantee.length) {
                i = 0;
            }

            $('#title').text(guarantee[i].title);
            $('#content').text(guarantee[i].content);

            // guarantee.forEach(element => {
            //     $("#colors").removeClass(element.color);
            // });

            // $("#colors").addClass(guarantee[i].color);

            $('#colors').css("background-color", guarantee[i].colordiv);
            i++;

            return false;
        });

        var divButtons=document.getElementsByClassName('divbutton');
            console.log(divButtons);

            for (let i = 0; i < divButtons.length; i++) {
                let colordiv;
                divButtons[i].addEventListener("click",updateContent);

            // console.log(personImage);
        }

        function updateContent() {


            var tabInfo = this == window ? 0 : this.getAttribute('target-data');
             console.log(tabInfo);
            document.getElementById("title").innerHTML = guarantee[tabInfo].title;
            document.getElementById("content").innerHTML = guarantee[tabInfo].content;
            document.getElementById('colors').style.backgroundColor = guarantee[tabInfo].colordiv;

        }
        updateContent();


    </script>
@endsection
