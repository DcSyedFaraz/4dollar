@extends('layouts.web')

@section('title', 'Sitemap- 4Dollar Essay')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path() )
@section('content')

<section class="container mx-auto ">
    <h4 class="text-primary-one text-4xl text-center mt-5 mb-5 ">Sitemap
    </h4>
    <h4 class="text-black text-lg text-center mb-5 lg:mb-10 ">Don't just get lost find your way here!
       <div class="containr flex flex-col md:flex-row justify-center md:space-x-10 ">
           <div class=" px-4 xl:px-8">
               <h4 class="text-primary-one text-left my-3 text-lg xl:text-2xl md:mt-8 lg:mt-10">4 DOLLARESSAY</h4>
           <ul class="text-red-500 text-base xl:text-lg text-left list-disc md:ml-10 mx-2">

         <a href="{{route('services.show','admission-essay-writing')}}">
           <li> Admission Wrtiting</li>
        </a>
         <a href="{{route('services.show','article-writing')}}">
           <li> Article Wrtiting</li>
        </a>
        <a href="{{route('services.show','book-review')}}">
           <li> Book Review </li>
        </a>
        <a href="{{route('services.show','case-study')}}">
           <li> case Study </li>
        </a>
         <a href="{{route('services.show','assignment-writing')}}">
           <li> Assignment Wrtiting </li>
        </a>
        <a href="{{route('services.show','coursework-writing')}}">
           <li> Coursework Wrting </li>
        </a>
        <a href="{{route('services.show','dissertation-writing')}}">
           <li> Dissertation Wrting </li>
        </a>
        <a href="{{route('services.show','film-review')}}">
           <li> Film Review </li>
        </a>
         <a href="{{route('services.show','homework-writing')}}">
           <li> Home Work Wrtiting </li>
        </a>
        <a href="{{route('services.show','lab-report')}}">
           <li> Lab Report</li>
        </a>
        <a href="{{route('services.show','presentation-designing')}}">
           <li> Presentation Designing </li>
        </a>
        <a href="{{route('services.show','research-paper')}}">
           <li> Research Paper </li>
        </a>
        <a href="{{route('services.show','research-proposal-writing')}}">
           <li> Research Proposal Wrting </li>
        </a>
        <a href="{{route('services.show','speech-writing')}}">
           <li> Speech Wrting </li>
        </a>

       <a href="{{route('services.show', 'term-papers')}}">
           <li> Term Paper</li>
        </a>
       </ul>

       <h4 class="text-primary-one text-left my-3 text-lg xl:text-2xl lg:mt-10 ">Some More Services</h4>
       <ul class="text-red-500 text-left text-base xl:text-lg list-disc md:ml-10 mx-2">

             <a href="{{route('services.show', 'argumentative-essays')}}">
             <li>Argumentative Essays</li></a>

             <a href="{{route('services.show', 'descriptive-essays')}}">
              <li>Descriptive Essays</li></a>

            <a href="{{route('services.show', 'narrative-essays')}}">
              <li> Narative Essays </li></a>

              <a href="{{route('services.show', 'personal-statement-essay')}}">
              <li> Personal Statment Essays</li></a>
          </ul>
       </div>
       <div class="px-4 xl:px-14">

              <h4 class="text-primary-one mt-8 my-3 text-lg xl:text-2xl text-left">Subject Based Services
            </h4>
              <ul class="text-red-500 text-left list-disc md:ml-10 mx-2">

              <a href="{{route('services.show', 'business-essay')}}">
                 <li> Business Essay Help</li></a>
                <a href="{{'literature-essay'}}">
                  <li>Literature Essay Help</li>
                 </a>

                 <a href="{{route('services.show', 'marketing-essay')}}">
                  <li>Marketing Essay Help</li>
                </a>
                 <a href="{{route('services.show', 'nursing-essay')}}">
                  <li>Nursing Essay</li>
                </a>

                <a href="{{route('services.show', 'political-science-essay')}}">
                  <li>Political Science Essay</li>
                </a>

                <a href="{{route('services.show', 'sociology-essay')}}">
                  <li>Sociology Essay</li>
                </a>
              </ul>
              <h4 class="text-primary-one text-lg xl:text-2xl my-3 text-left mt-5m lg:mt-10 ">Resume Writing Services</h4>
           <ul class="text-red-500 text-base xl:text-lg text-left list-disc md:ml-10 mx-2">

               <a href="{{route('services.show', 'cover-letter-writing')}}">
                   <li> Cover Letter Writing</li></a>

             <a href="{{route('services.show', 'cv-editing')}}">
                  <li>Cv Editing</li>
              </a>
              <a href="{{route('services.show', 'cv-writing')}}">
                  <li> Cv Writing </li>
              </a>
              </ul>
              <h4 class="text-primary-one text-lg xl:text-2xl my-3 mt-12 text-left ">Editing Services</h4>
              <ul class="text-red-500 text-base xl:text-lg  text-left list-disc md:ml-10 mx-2">

                  <a href="{{route('services.show', 'editing-service')}}">
                 <li>Editing Service</li>
                </a>

                <a href="{{route('services.show', 'formatting')}}">
                  <li>Formatting</li>
                </a>

                <a href="{{route('services.show', 'proofreading')}}">
                  <li>Proofreading</li>
                </a>
              </ul>
       </div>
       <div class=" px-4 lg:px-14">
              <h4 class="text-primary-one text-lg xl:text-2xl my-3 mt-8 text-left ">Legal</h4>
              <ul class="text-red-500 text-base xl:text-lg  text-left list-disc md:ml-10 mx-2">

                  <a href="{{route('privacy')}}">
                 <li>Privacy Policy </li>
                </a>

                <a href="{{route('refund')}}">
                  <li>Refund Policy</li>
                </a>

                <a href="{{route('terms-and-conditions')}}">
                  <li>Terms and condition</li>
                </a>

              </ul>

              <h4 class="text-primary-one text-lg xl:text-2xl my-3 mt-12 text-left ">Company</h4>
              <ul class="text-red-500 text-base xl:text-lg  text-left list-disc md:ml-10 mx-2">
                  <a href="{{route('home')}}">
                 <li>Home</li>
                </a>

                <a href="{{route('about')}}">
                  <li>About Us</li>
                </a>

                <a href="{{route('contact')}}">
                  <li>Contact</li>
                </a>

                <a href="{{route('order')}}">
                <li>Order</li>
                </a>

                <a href="{{route('pricing')}}">
                  <li>Pricing</li>
                </a>

                <a href="{{route('services')}}">
                  <li>Services</li>
                </a>

                <a href="{{route('blogs')}}">
                    <li>Blogs</li>
                  </a>

              </ul>
       </div>
   </div>
   </section>
@endsection
