@extends('layouts.web')

@section('title', 'Reviews')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())
@section('content')

<style>
    .heart{
      animation: beat .7s infinite alternate;
      transform-origin: center;
    }

    @keyframes beat {
      to {
        transform: scale(1.4);
      }
    }
  </style>

<section class="container mx-auto grid grid-cols-1 md:grid-cols-2 py-14 px-4">

    <div>
          
        <div class="mx-auto border-8 rounded-full w-52 h-52 md:w-44 md:h-44 lg:w-52 lg:h-52 border-primary-one mt-8 md:mt-0">
            <a href="https://goo.gl/maps/2pLdA5c3XPqidEXP6">
            <img src="../imgs/4dollaressay-google-reviews.png" class="h-16 mx-auto mt-14 md:mt-10 lg:mt-14">

            <p class="font-semibold text-blue-600 text-sm text-center mx-4 "> 4.8</p>
             </a>
        </div>
       

        
        <div class="flex flex-col md:flex-row space-y-4 md:space-y-0">
          <div class="mx-auto border-8 rounded-full w-52 h-52 md:w-44 md:h-44 lg:w-52 lg:h-52 border-primary-one mt-8 md:mt-0">
              <a href="https://www.trustpilot.com/review/4dollaressay.com">

            <img src="../imgs/4dollaressay-trustpilot-review.png" class="h-16 mx-auto mt-14">
            <p class="font-semibold text-blue-600 text-sm text-center mx-4 "> 4.8</p>
            </a>
          </div>
          

        <div class=" mx-auto border-8 rounded-full w-52 h-52 md:w-44 md:h-44 lg:w-52 lg:h-52 border-primary-one mt-8 md:mt-0 ">
            <a href="https://www.sitejabber.com/reviews/4dollaressay.com">
            <img src="../imgs/4dollaressay-sitejabbar-reviews.png" class="h-16 mx-auto mt-14">
            <p class="font-semibold text-blue-600 text-sm text-center mx-4 "> 4.8</p>
             </a>
        </div>

        </div>

    </div>

    <div class="space-y-4">
        <p class="heading-primary text-center">Customer Reviews</p>
        <p class="text-4xl font-semibold text-center">4.9/5</p>
        <img src="../imgs/star-rating.png" class="h-4 mx-auto">
        <p class="text-center my-6 text-lg">OVER ALL RATING</p>

        <div class="mt-6 flex flex-col justify-center gap-4 sm:flex-row md:mt-8 lg:mt-10">
            <a href="javascript:void(Tawk_API.toggle())" class="btn bg-primary-two " >
                Live Chat
            </a>
            <a href="{{ route('order') }}" class="btn bg-primary-one " >
                Order Now
            </a>
        </div>

        <div class="flex justify-center items-center " >

            <button class="btn bg-primary-three mt-10" onclick="window.scrollBy(0, 900)">
                    View all Reviews
            </button>

        </div>
        <div class="text-center text-5xl text-red-600 pt-8">
            <!-- <i class="fa fa-hand-o-down heart"></i> -->
            <img src="../imgs/red-arrow.gif" class="w-10 mx-auto heart"  onclick="window.scrollBy(0, 900)">
        </div>
    </div>
</section>

<section class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-x-4 gap-y-8 mb-4 mx-auto  py-8">

    <div class="shadow-[1px_1px_3px_3px_rgba(0,0,0,0.3)] mx-8 md:mx-auto rounded-xl p-4">
        <div class="flex items-center mt-4">
            <a href="#" class="block relative">
                <img alt="profil" src="../imgs/user-review-male.png" class="mx-auto rounded-full h-28 ">
            </a>
            <div class="">
                <span class="text-xl md:text-2xl">
                    User Id: 4de0519
                </span>
                <ul class="flex my-2">

                    <li class="my-auto ">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                </ul>
                <span class=" text-primary-one text-lg">
                    Cleveland, Ohio
                </span>
            </div>
        </div>

        <p class="px-4 text-base md:text-lg">
            <span class="font-bold text-primary-two text-lg">
                “
            </span>
            I have tried a lot of sites for my assignments and academic papers but this one is the best out there and I am completely satisfied with the results I have gotten. The writers here understood all my requirements and came up with the perfect outcome.
            <span class="font-bold text-primary-two text-lg">
                ”
            </span>
        </p>
    </div>

    <div class="shadow-[1px_1px_3px_3px_rgba(0,0,0,0.3)] mx-8 md:mx-auto rounded-xl p-4">
        <div class="flex items-center mt-4">
            <a href="#" class="block relative">
                <img alt="profil" src="../imgs/user-review-male.png" class="mx-auto rounded-full h-28 ">
            </a>
            <div class="">
                <span class="text-xl md:text-2xl">
                    User Id: 4de0529
                </span>
                <ul class="flex my-2">

                    <li class="my-auto ">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                </ul>
                <span class=" text-primary-one text-lg">
                    Utica, New York
                </span>
            </div>
        </div>

        <p class="px-4 text-base md:text-lg">
            <span class="font-bold text-primary-two text-lg">
                “
            </span>
            I approached them with my business assignments and not so high hopes but their professionalism and perfection impressed me a lot. This is the best place to get your business assignments and research proposals. They helped me greatly and solved my problems in an instance.

            <span class="font-bold text-primary-two text-lg">
                ”
            </span>
        </p>

    </div>

    <div class="shadow-[1px_1px_3px_3px_rgba(0,0,0,0.3)] mx-8 md:mx-auto rounded-xl p-4">
        <div class="flex items-center mt-4">
            <a href="#" class="block relative">
                <img alt="profil" src="../imgs/user-review-male.png" class="mx-auto rounded-full h-28 ">
            </a>
            <div class="">
                <span class="text-xl md:text-2xl">
                    User Id: 4de0429
                </span>
                <ul class="flex my-2">

                    <li class="my-auto ">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                </ul>
                <span class=" text-primary-one text-lg">
                    Camden, New Jersey
                </span>
            </div>
        </div>



        <p class="px-4 text-base md:text-lg">
            <span class="font-bold text-primary-two text-lg">
                “
            </span>
            My writer did not fully understand the concept I wanted to go for and completed a task which I was not satisfied with but when I asked for the revision and made things clear, they understood it and rewrote the essay which I was satisfied with.
            <span class="font-bold text-primary-two text-lg">
                ”
            </span>
        </p>

    </div>

    <div class="shadow-[1px_1px_3px_3px_rgba(0,0,0,0.3)] mx-8 md:mx-auto rounded-xl p-4">
        <div class="flex items-center mt-4">
            <a href="#" class="block relative">
                <img alt="profil" src="../imgs/user-review-male.png" class="mx-auto rounded-full h-28 ">
            </a>
            <div class="">
                <span class="text-xl md:text-2xl">
                    User Id: 4de5429
                </span>
                <ul class="flex my-2">

                    <li class="my-auto ">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                </ul>
                <span class=" text-primary-one text-lg">
                    North Las Vegas, Nevada
                </span>
            </div>
        </div>



        <p class="px-4 text-base md:text-lg">
            <span class="font-bold text-primary-two text-lg">
                “
            </span>
            Writing a Nursing assignment is not easy and only a professional can do it without any difficulties. Here I got the best writer who grasped the concepts immediately and wrote an assignment that got me the highest marks in the class.
            <span class="font-bold text-primary-two text-lg">
                ”
            </span>
        </p>

    </div>

    <div class="shadow-[1px_1px_3px_3px_rgba(0,0,0,0.3)] mx-8 md:mx-auto rounded-xl p-4">
        <div class="flex items-center mt-4">
            <a href="#" class="block relative">
                <img alt="profil" src="../imgs/user-review-male.png" class="mx-auto rounded-full h-28 ">
            </a>
            <div class="">
                <span class="text-xl md:text-2xl">
                    User Id: 4de0459
                </span>
                <ul class="flex my-2">

                    <li class="my-auto ">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                </ul>
                <span class=" text-primary-one text-lg">
                    Fremont, Nebraska
                </span>
            </div>
        </div>



        <p class="px-4 text-base md:text-lg">
            <span class="font-bold text-primary-two text-lg">
                “
            </span>
            I needed an urgent report for my designing class and it caused a lot of confusion for me after which I approached them for urgent delivery. They made my report in just a few hours and enabled me to submit my report within the submission date.
            <span class="font-bold text-primary-two text-lg">
                ”
            </span>
        </p>

    </div>

    <div class="shadow-[1px_1px_3px_3px_rgba(0,0,0,0.3)] mx-8 md:mx-auto rounded-xl p-4">
        <div class="flex items-center mt-4">
            <a href="#" class="block relative">
                <img alt="profil" src="../imgs/user-review-male.png" class="mx-auto rounded-full h-28 ">
            </a>
            <div class="">
                <span class="text-xl md:text-2xl">
                    User Id: 4de0489
                </span>
                <ul class="flex my-2">

                    <li class="my-auto ">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                </ul>
                <span class=" text-primary-one text-lg">
                    London, England
                </span>
            </div>
        </div>



        <p class="px-4 text-base md:text-lg  ">
            <span class="font-bold text-primary-two text-lg">
                “
            </span>
            I have been with this service for over a year now and they have never delivered a flawed assignment. The wide variety of qualified writers is their USP which is why I have trusted them with the number of my assignments and essays for different courses.
            <span class="font-bold text-primary-two text-lg">
                ”
            </span>
        </p>

    </div>

    <div class="shadow-[1px_1px_3px_3px_rgba(0,0,0,0.3)] mx-8 md:mx-auto rounded-xl p-4">
        <div class="flex items-center mt-4">
            <a href="#" class="block relative">
                <img alt="profil" src="../imgs/user-review-male.png" class="mx-auto rounded-full h-28 ">
            </a>
            <div class="">
                <span class="text-xl md:text-2xl">
                    User Id: 4de0789
                </span>
                <ul class="flex my-2">

                    <li class="my-auto ">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                </ul>
                <span class=" text-primary-one text-lg">
                    Liverpool, England
                </span>
            </div>
        </div>

        <p class="px-4 text-base md:text-lg ">
            <span class="font-bold text-primary-two text-lg">
                “
            </span>
            My friend recommended this site for quality assignments and I must say choosing them for my course works was the best thing I did for my academic life. The best part about them is that they believe in listening to their clients and I appreciate their team for always putting up with my changes and orders.
            <span class="font-bold text-primary-two text-lg">
                ”
            </span>
        </p>

    </div>

    <div class="shadow-[1px_1px_3px_3px_rgba(0,0,0,0.3)] mx-8 md:mx-auto rounded-xl p-4">
        <div class="flex items-center mt-4">
            <a href="#" class="block relative">
                <img alt="profil" src="../imgs/user-review-male.png" class="mx-auto rounded-full h-28 ">
            </a>
            <div class="">
                <span class="text-xl md:text-2xl">
                    User Id: 4de4789
                </span>
                <ul class="flex my-2">

                    <li class="my-auto ">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                </ul>
                <span class=" text-primary-one text-lg">
                    Poznan, Poland
                </span>
            </div>
        </div>

        <p class="px-4 text-base md:text-lg">
            <span class="font-bold text-primary-two text-lg">
                “
            </span>
            I came to them for assistance with my computer science assignment because I wasn’t able to write it myself. They proficiently collected all the data and added only the relevant information to my assignment to make it effective. 10/10 would recommend to other people.
            <span class="font-bold text-primary-two text-lg">
                ”
            </span>
        </p>

    </div>

    <div class="shadow-[1px_1px_3px_3px_rgba(0,0,0,0.3)] mx-8 md:mx-auto rounded-xl p-4">
        <div class="flex items-center mt-4">
            <a href="#" class="block relative">
                <img alt="profil" src="../imgs/user-review-male.png" class="mx-auto rounded-full h-28 ">
            </a>
            <div class="">
                <span class="text-xl md:text-2xl">
                    User Id: 4de4459
                </span>
                <ul class="flex my-2">

                    <li class="my-auto ">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                </ul>
                <span class=" text-primary-one text-lg">
                    Ankara, Turkey
                </span>
            </div>
        </div>

        <p class="px-4 text-base md:text-lg">
            <span class="font-bold text-primary-two text-lg">
                “
            </span>
            I am grateful to the writers here for helping me with my Human Resources assignment in a short period and allowed me to meet my deadline. The assignment was not only well written but it was also free from any plagiarism as well. I am satisfied with their services and will work with them again.
            <span class="font-bold text-primary-two text-lg">
                ”
            </span>
        </p>
    </div>

    <div class="shadow-[1px_1px_3px_3px_rgba(0,0,0,0.3)] mx-8 md:mx-auto rounded-xl p-4">
        <div class="flex items-center mt-4">
            <a href="#" class="block relative">
                <img alt="profil" src="../imgs/user-review-male.png" class="mx-auto rounded-full h-28 ">
            </a>
            <div class="">
                <span class="text-xl md:text-2xl">
                    User Id: 4de2359
                </span>
                <ul class="flex my-2">

                    <li class="my-auto ">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                </ul>
                <span class=" text-primary-one text-lg">
                    Richmond, Kentucky
                </span>
            </div>
        </div>



        <p class="px-4 text-base md:text-lg">
            <span class="font-bold text-primary-two text-lg">
                “
            </span>
            Best quality at an affordable price, what more could a student ask for? They made my Economics assignment at the cheapest rates and maintained their promise of providing high-quality results. I am totally satisfied with their services.
            <span class="font-bold text-primary-two text-lg">
                ”
            </span>
        </p>

    </div>

    <div class="shadow-[1px_1px_3px_3px_rgba(0,0,0,0.3)] mx-8 md:mx-auto rounded-xl p-4">
        <div class="flex items-center mt-4">
            <a href="#" class="block relative">
                <img alt="profil" src="../imgs/user-review-male.png" class="mx-auto rounded-full h-28 ">
            </a>
            <div class="">
                <span class="text-xl md:text-2xl">
                    User Id: 4de9359
                </span>
                <ul class="flex my-2">

                    <li class="my-auto ">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                </ul>
                <span class=" text-primary-one text-lg">
                    Boone, Iowa
                </span>
            </div>
        </div>



        <p class="px-4 text-base md:text-lg">
            <span class="font-bold text-primary-two text-lg">
                “
            </span>
            I was reluctant of hiring an online service for my dissertation writing but they delivered an adequately researched and properly structured dissertation which got me an A+. My teacher was impressed with my dissertation and praised me for the effort.
            <span class="font-bold text-primary-two text-lg">
                ”
            </span>
        </p>

    </div>

    <div class="shadow-[1px_1px_3px_3px_rgba(0,0,0,0.3)] mx-8 md:mx-auto rounded-xl p-4">
        <div class="flex items-center mt-4">
            <a href="#" class="block relative">
                <img alt="profil" src="../imgs/user-review-male.png" class="mx-auto rounded-full h-28 ">
            </a>
            <div class="">
                <span class="text-xl md:text-2xl">
                    User Id: 4de7159
                </span>
                <ul class="flex my-2">

                    <li class="my-auto ">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                </ul>
                <span class=" text-primary-one text-lg">
                    Chicago, Illinois
                </span>
            </div>
        </div>



        <p class="px-4 text-base md:text-lg">
            <span class="font-bold text-primary-two text-lg">
                “
            </span>
            I didn’t have time to finish my History assignment and I asked them to finish it for me which they did very quickly and returned to me a well-written assignment. I am absolutely satisfied with their services and will recommend them to all of my friends.
            <span class="font-bold text-primary-two text-lg">
                ”
            </span>
        </p>

    </div>

    <div class="shadow-[1px_1px_3px_3px_rgba(0,0,0,0.3)] mx-8 md:mx-auto rounded-xl p-4">
        <div class="flex items-center mt-4">
            <a href="#" class="block relative">
                <img alt="profil" src="../imgs/user-review-male.png" class="mx-auto rounded-full h-28 ">
            </a>
            <div class="">
                <span class="text-xl md:text-2xl">
                    User Id: 4de1159
                </span>
                <ul class="flex my-2">

                    <li class="my-auto ">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                </ul>
                <span class=" text-primary-one text-lg">
                    Brooklyn, New
                </span>
            </div>
        </div>



        <p class="px-4 text-base md:text-lg">
            <span class="font-bold text-primary-two text-lg">
                “
            </span>
            Multitasking is not my forte and I had quite a few assignments to complete. I asked them to help me in completing my Mass Communication assignment and I needed it urgently. They got back to me almost immediately and understood all my requirements.
            <span class="font-bold text-primary-two text-lg">
                ”
            </span>
        </p>

    </div>

    <div class="shadow-[1px_1px_3px_3px_rgba(0,0,0,0.3)] mx-8 md:mx-auto rounded-xl p-4">
        <div class="flex items-center mt-4">
            <a href="#" class="block relative">
                <img alt="profil" src="../imgs/user-review-male.png" class="mx-auto rounded-full h-28 ">
            </a>
            <div class="">
                <span class="text-xl md:text-2xl">
                    User Id: 4de1100
                </span>
                <ul class="flex my-2">

                    <li class="my-auto ">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                </ul>
                <span class=" text-primary-one text-lg">
                    Duncan, Oklahoma
                </span>
            </div>
        </div>



        <p class="px-4 text-base md:text-lg">
            <span class="font-bold text-primary-two text-lg">
                “
            </span>
            I wanted someone to fulfill all the requirements given by my institute and their experts did it with absolute perfection. My final paper was up to the mark and all the requirements were carefully added.
            <span class="font-bold text-primary-two text-lg">
                ”
            </span>
        </p>

    </div>

    <div class="shadow-[1px_1px_3px_3px_rgba(0,0,0,0.3)] mx-8 md:mx-auto rounded-xl p-4">
        <div class="flex items-center mt-4">
            <a href="#" class="block relative">
                <img alt="profil" src="../imgs/user-review-male.png" class="mx-auto rounded-full h-28 ">
            </a>
            <div class="">
                <span class="text-xl md:text-2xl">
                    User Id: 4de1190
                </span>
                <ul class="flex my-2">

                    <li class="my-auto ">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                    <li class="my-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                            </path>
                        </svg>
                    </li>
                </ul>
                <span class=" text-primary-one text-lg">
                    Cincinnati, Ohio
                </span>
            </div>
        </div>



        <p class="px-4 text-base md:text-lg">
            <span class="font-bold text-primary-two text-lg">
                “
            </span>
            It was my first experience with an online service and to be honest I was very scared because the deadline was very near and there was no time to waste. The writers here made me satisfied and wrote an outstanding assignment.
            <span class="font-bold text-primary-two text-lg">
                ”
            </span>
        </p>

    </div>


</section>
@endsection
