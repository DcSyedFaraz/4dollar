@extends('layouts.web')

@section('title', 'Assignment Help – Cheap Assignment Writing Service in UK')
@section('description', 'A UK Based Writing Firm Providing Best And Cheap Assignment Writing Service to All The University Students With The Team of British Writers Available 24/7.')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

    <section>

        {{-- @include('partials.frontend.breadcrumb', ['first' => 'Home' , 'second' => 'Pricing']) --}}
        <header class="bg-primary-two p-2  flex flex-row justify-center items-end">
                <div class="container flex flex-row ">
                <a class="text-white text-xl pr-5" href="{{ route('home') }}">
                Home
                </a><i class="mt-2 fa fa-chevron-right text-white " aria-hidden="true"></i>
            <h2 class="text-white text-xl ml-5">Samples</h2>
            </div>
            </header>
         {{-- States --}}
    <section class="my-10">
          <h4 class="heading-primary text-center text-primary-one"> Sample of Our Papers </h4>

        <div class="container mx-auto my-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 text-white gap-4 px-8 md:px-8 lg:px-12 xl:px-36">

            <div>
                <div class=" px-9 rounded-lg bg-primary-two sm:px-14 md:px-8 md:py-3 ">
                    <h4 class=" heading-primary text-center font-bold ">ASSIGNMENT</h4>

                    <ul class="my-2 space-y-3 ">
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span class="text-lg">Title:</span> <strong class="text-lg ">Strategic change management</strong></li>
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span >Discipline:</span> <strong class=" ">Management</strong></li>
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span >Academic level:</span> <strong class=" ">Master’s</strong></li>
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span >Pages:</span> <strong class=" ">24</strong></li>
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span >Format:</span> <strong class=" ">Harvard</strong></li>
                    </ul>
                    <div class="flex flex-col items-center py-2 space-y-3">

                        <a href="{{asset('free-samples/strategic-change-management.docx')}}" class="text-white bg-primary-one p-2 pricebtn px-6">
                            Download Sample
                        </a>
                        <a href="{{ route('order') }}" class=" text-white bg-primary-one p-2 pricebtn px-12">
                            Order Now
                        </a>
                    </div>
                </div>
            </div>

            <div>
                <div class=" px-9 rounded-lg bg-primary-two sm:px-14 md:px-8 md:py-3 ">
                    <h4 class=" heading-primary text-center font-bold ">ASSIGNMENT</h4>
                    <ul class="my-2 space-y-3 ">
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span class="text-lg">Title:</span> <strong class="text-[1rem] ">Home-Made Food Online Business</strong></li>
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span >Discipline:</span> <strong class=" ">Business Plan</strong></li>
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span >Academic level:</span> <strong class=" ">Master’s</strong></li>
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span >Pages:</span> <strong class=" ">9</strong></li>
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span >Format:</span> <strong class=" ">APA</strong></li>
                    </ul>
                    <div class="flex flex-col items-center py-2 space-y-3">

                        <a href="{{asset('free-samples/Home-Made-Food-Online-Business.docx')}}" class="text-white bg-primary-one p-2 pricebtn px-6">
                            Download Sample
                        </a>
                        <a href="{{ route('order') }}" class=" text-white bg-primary-one p-2 pricebtn px-12">
                            Order Now
                        </a>
                    </div>
                </div>
            </div>

            <div class="md:col-span-2 md:mx-28 lg:mx-0 lg:col-span-1">
                <div class=" px-9 rounded-lg bg-primary-two sm:px-14 md:px-8 md:py-3 ">
                    <h4 class=" heading-primary text-center font-bold ">ASSIGNMENT</h4>

                    <ul class="my-2 space-y-3 ">
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span class="text-lg">Title:</span> <strong class="text-lg ">Hotel Room Technologies</strong></li>
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span >Discipline:</span> <strong class=" ">Tourism and Hotel</strong></li>
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span >Academic level:</span> <strong class=" ">Master’s</strong></li>
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span >Pages:</span> <strong class=" ">32</strong></li>
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span >Format:</span> <strong class=" ">Harvard</strong></li>
                    </ul>
                    <div class="flex flex-col items-center py-2 space-y-3 ">


                        <a href="{{asset('free-samples/business-plans.docx')}}" class="text-white bg-primary-one p-2 pricebtn px-6">
                            Download Sample
                        </a>
                        <a href="{{ route('order') }}" class=" text-white bg-primary-one p-2 pricebtn px-12">
                            Order Now
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="container mx-auto my-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 text-white gap-4 px-8 md:px-8 lg:px-12 xl:px-36">
            <div>
                <div class=" px-9 rounded-lg bg-primary-two sm:px-14 md:px-8 md:py-3 ">
                    <h4 class=" heading-primary text-center font-bold ">ASSIGNMENT</h4>

                    <ul class="my-2 space-y-3 ">
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span class="text-lg">Title:</span> <strong class="text-lg ">Strategic change management</strong></li>
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span >Discipline:</span> <strong class=" ">Management</strong></li>
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span >Academic level:</span> <strong class=" ">Master’s</strong></li>
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span >Pages:</span> <strong class=" ">17</strong></li>
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span >Format:</span> <strong class=" ">Harvard</strong></li>
                    </ul>
                    <div class="flex flex-col items-center py-2 space-y-3">

                        <a href="{{asset('free-samples/operations-management-mcdonalds.docx')}}" class="text-white bg-primary-one p-2 pricebtn px-6">
                            Download Sample
                        </a>
                        <a href="{{ route('order') }}" class=" text-white bg-primary-one p-2 pricebtn px-12">
                            Order Now
                        </a>
                    </div>
                </div>
            </div>

            <div>
                <div class=" px-9 rounded-lg bg-primary-two sm:px-14 md:px-8 md:py-3 ">
                    <h4 class=" heading-primary text-center font-bold ">ASSIGNMENT</h4>
                    <ul class="my-2 space-y-3 ">
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span class="text-lg">Title:</span> <strong class="text-[1rem] ">Home-Made Food Online Business</strong></li>
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span >Discipline:</span> <strong class=" ">Business Plan</strong></li>
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span >Academic level:</span> <strong class=" ">Master’s</strong></li>
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span >Pages:</span> <strong class=" ">14</strong></li>
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span >Format:</span> <strong class=" ">APA</strong></li>
                    </ul>
                    <div class="flex flex-col items-center py-2 space-y-3">

                        <a href="{{asset('free-samples/services-and-operations-sample-distinction.docx')}}" class="text-white bg-primary-one p-2 pricebtn px-6">
                            Download Sample
                        </a>
                        <a href="{{ route('order') }}" class=" text-white bg-primary-one p-2 pricebtn px-12">
                            Order Now
                        </a>
                    </div>
                </div>
            </div>

            <div class="md:col-span-2 md:mx-28 lg:mx-0 lg:col-span-1">
                <div class=" px-9 rounded-lg bg-primary-two sm:px-14 md:px-8 md:py-3 ">
                    <h4 class=" heading-primary text-center font-bold ">ASSIGNMENT</h4>

                    <ul class="my-2 space-y-3 ">
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span class="text-lg">Title:</span> <strong class="text-lg ">Hotel Room Technologies</strong></li>
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span >Discipline:</span> <strong class=" ">Tourism and Hotel</strong></li>
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span >Academic level:</span> <strong class=" ">Master’s</strong></li>
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span >Pages:</span> <strong class=" ">9</strong></li>
                        <li class="space-x-3 border-b pb-2 border-black border-dashed flex justify-between"><span >Format:</span> <strong class=" ">Harvard</strong></li>
                    </ul>
                    <div class="flex flex-col items-center py-2 space-y-3 ">


                        <a href="{{asset('free-samples/tourism-and-Hotel-Room-Technologies.docx')}}" class="text-white bg-primary-one p-2 pricebtn px-6">
                            Download Sample
                        </a>
                        <a href="{{ route('order') }}"class=" text-white bg-primary-one p-2 pricebtn px-12">
                            Order Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </section>

@endsection
