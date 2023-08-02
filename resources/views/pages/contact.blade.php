@extends('layouts.web')

@section('title', 'Contact')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

<section class="container mx-auto flex  justify-evenly">
    <div class="grid grid-col-1 sm:grid-cols-4 my-4 gap-y-4 mx-4 mt-10  ">
        <div class="col-span-4 md:col-start-2 md:col-span-2 xl:col-span-1 flex flex-col space-y-8 mt-8 ">
            <a href="mailto:info@4dollaressay.com">
            <div class="bg-primary-three px-2 xl:px-4 py-4 rounded-xl flex flex-row space-x-4 xl:space-x-1 ">
                <img src="../imgs/email.png" class="h-14 ">
                <span href="mailto:info@4dollaressay.com" class="text-white text-base font-semibold my-auto xl:px-4 ">info@4dollaressay.com</span>
            </div>
        </a>
        <a href="tel:(001)224-338-5225">
            <div class="bg-primary-four px-2 py-4 rounded-xl flex flex-row space-x-3">
                <img src="../imgs/telephone.png" class="h-14 px-2">
                <span href="tel:(001)224-338-5225" class="text-white text-base font-semibold my-auto">(001)224-338-5225</span>
            </div>
        </a>

        <a href="https://api.whatsapp.com/send/?phone=0012243385225">
            <div class="bg-primary-two px-2 py-4 rounded-xl flex flex-row space-x-3">
                <img src="../imgs/whatsapp.png" class="h-14 px-2">
                <span href="https://api.whatsapp.com/send/?phone=0012243385225" class="text-white text-base font-semibold my-auto">(001)224-338-5225</span>
            </div>
        </a>
        </div>
        <!-- form -->
        <div class="col-span-4 xl:col-span-3 md:px-8 px-2">
            <div class="mx-auto  relative rounded-[1rem] border-2 border-primary-two px-4 py-3">
                <div class=" text-center ">
                    <span class="relative top-3 md:text-2xl text-white text-sm font-semibold bg-primary-one p-2 md:p-2 rounded-lg px-4 lg:px-[5rem]">
                        Get In Touch
                    </span>
                </div>
                <div class="border-2 border-primary-one rounded-[1rem] py-4 px-8 space-y-4" >
                    @if (session('success'))
              <div class="md:w-1/2 my-4 mx-auto bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                  <div class="flex">
                  <div class="py-1">
                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
              <circle style="fill:#25AE88;" cx="25" cy="25" r="25"/>
              <polyline style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="
                  38,15 22,33 12,25 "/></svg>
                      </div>
                  <div>
                      <p class="text-center font-bold">{{ session('success') }}</p>
                  </div>
                  </div>
              </div>
                 @endif
                    <form class="grid grid-cols-1 md:grid-cols-2 gap-x-2 gap-y-4 mt-8" id="contact-form" action="{{route('contact.store')}}" method="POST">
                        @csrf

                        <div class="w-full">
                            <input type="text" name="name" class="@error('name') border-red-500 @enderror form-input placeholder-black " placeholder="Name:" value="{{ old('name', '') }}">
                            @error('name')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full">
                            <input type="text" name="email" class=" @error('email') border-red-500 @enderror form-input placeholder-black"  placeholder="Email" value=""
                             name="email" placeholder="Email:" value="{{ old('email', '') }}" />
                            @error('email')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                           @enderror
                        </div>

                        <div class="w-full">
                            <input id="phone" name="phone" type="text" class="form-select @error('phone') border-red-500 @enderror placeholder-black" value="{{ old('phone') }}"
                            oninput="this.value=this.value.replace(/[^0-9\+]/g,'');" autocomplete="off" data-intl-tel-input-id="0"
                            placeholder="Contact Number"/>
                                <input type="hidden" name="phone" id="phone2" />
                                @error('phone')
                                 <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                        </div>


                        <div class="w-full">
                            <select name="country" class=" w-full text-black border bg-white border-primary-one rounded  focus:border-primary-two focus:ring-2 focus:ring-primary-two text-base outline-none py-3 px-3 leading-8 @error('country') border-red-500 @enderror placeholder-black placeholder-bg-black ">
                                <option hidden="" value="0" disabled="" selected="">Select Country</option>
                                @foreach ($countries as $country)
                                 <option value="{{ $country->code }}" {{ old('country') == $country->code ? 'selected' : '' }}>{{ $country->name }}</option>
                                @endforeach
                            </select>
                            @error('country')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full md:col-span-2">
                            <input type="text" name="subject" class="@error('subject') border-red-500 @enderror placeholder-black form-input" name="paper_topic"
                            placeholder="Contact Subject" value="{{ old('subject', '') }}" placeholder="Contact Subject" value="" />
                            @error('subject')
                          <p class="text-red-600 text-sm">{{ $message }}</p>
                          @enderror
                        </div>

                        <div class="w-full md:col-span-2">
                            <textarea name="detail" rows="" class="@error('detail') border-red-500 @enderror  form-input placeholder-black" placeholder="Your Details " placeholder="Your Details">{{ old('detail', '') }}</textarea>
                        </div>
                        @error('detail')
                        <p class="text-red-600 -mt-10  text-sm">{{ $message }}</p>
                        @enderror


                        <div class="md:col-span-2 text-center ">
                            <button type="submit" class=" inline-flex focus:outline-none">
                                <span id="btn-submit" class="w-full text-lg px-6 py-2 text-white bg-primary-two rounded-md">
                                    Contact Now
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
</section>


@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            const phoneInputField = document.querySelector("#phone");
            const phoneInput = window.intlTelInput(phoneInputField, {
                preferredCountries: ["us"],
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            });

            $("#contact-form").submit(function() {
                $('#contact-form').find(':submit').attr("disabled", true);
                $('#btn-submit').html("Submitting...");
                const phoneNumber = phoneInput.getNumber();
                $('#phone2').val(phoneNumber);
                return true;
            });
        });
    </script>
@endsection
