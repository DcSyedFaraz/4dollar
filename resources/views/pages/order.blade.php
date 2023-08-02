@extends('layouts.web')
@section('title', 'Order Now')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')


    <div class="bg-gray-100 shadow-gray-400 shadow-md w-full">
        <div class="container mx-auto  flex flex-col md:flex-row justify-between mb-5 p-2 lg:p-6 ">
            <div>
                <h2 class="italic text-gray-600 text-3xl">
                    Order
                </h2>
            </div>
            <div class="mx-10">
                <div class="flex flx-col text-gray-500 text-base">
                    <a href="{{ route('home') }}" class=" mx-3"> Home </a>
                    <i class=" fa-solid fa-angle-right mt-1"></i>

                    <a href="{{ route('order') }}" class=" mx-2"> Order</a>
                    <i class=" fa-solid fa-angle-right mt-1"></i>
                </div>
            </div>
        </div>
    </div>

    <section class="container mx-auto xl:mt-14 ">
        @if (session('success'))
            <div class="md:w-1/2 my-4 mx-auto bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-lg" role="alert">
                <div class="flex">
                    <div class="py-1">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                            style="enable-background:new 0 0 50 50;" xml:space="preserve">
                            <circle style="fill:#25AE88;" cx="25" cy="25" r="25" />
                            <polyline
                                style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                                points="38,15 22,33 12,25 " />
                        </svg>
                    </div>
                    <div>
                        <p class="text-center font-bold">{{ session('success') }}</p>
                    </div>
                </div>
            </div>
        @endif
        <div class="grid grid-col-1 sm:grid-cols-6 my-4 gap-x-6 gap-y-4 mx-4">
            <div class="col-span-5 lg:col-span-4 xl:col-span-4">
                <div class="bg-white shadow-[2px_2px_6px_6px_rgba(0,0,0,0.2)]  rounded-xl p-9 border border-gray-300 ">

                    <form id="order-form" class="space-y-4" action="{{ route('order.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="xl:w-full">
                            <label class="font-semibold text-base">Type of paper*</label>
                            <select name="paper_type" id="paper_type"
                                class="get-fare @error('paper_type') border-red-500 @enderror form-select mt-2 bg-white"
                                onchange="copyDatad(this,'nspeakerVal')" value="{{ old('paper_type', '') }}">
                                <option hidden="" value="0" disabled="" selected="">Select Type of Paper</option>
                                @foreach ($paper_types as $paper_type)
                                    <option {{ old('paper_type') == $paper_type->id ? 'selected' : '' }}
                                        value="{{ $paper_type->id }}">{{ $paper_type->name }}</option>
                                @endforeach
                            </select>
                            @error('paper_type')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full">
                            <label class="font-semibold text-base">Academic level*</label>
                            <div id="writer-level" class=" mt-2">
                                <div class="btn-group grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5" role="group">
                                    @foreach ($academic_levels as $academic_level)
                                        <button type="button" class="get-fare btn-group-item" onclick="copyData('{{ $academic_level->name }}', 'al');"
                                            academic-level="{{ $academic_level->id }}">{{ $academic_level->name }}</button>
                                    @endforeach
                                </div>
                                <input type="hidden" name="academic_level" id="academic_level_id">
                            </div>
                            @error('academic_level')
                                <p class="text-center text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full">
                            <label class="font-semibold text-base">Title*</label>
                            <input type="text" name="paper_topic"
                                class="@error('paper_topic') border-red-500 @enderror form-input mt-2"
                                onkeyup="copyDatad(this,'pt');" placeholder="Your Topic"
                                value="{{ old('paper_topic', '') }}" />
                            @error('paper_topic')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full">
                            <label class="font-semibold text-base">Paper Instructions</label>
                            <textarea name="detail" rows="2" class="@error('detail') border-red-500 @enderror form-input mt-2"
                                placeholder="Type details here..." onkeyup="copyDatad(this,'pi');">{{ old('detail', '') }}</textarea>
                            @error('detail')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full">
                            <label class="font-semibold text-base">Paper Format*</label>
                            <div id="style" name="reference_style" class=" mt-2">
                                <div class="btn-group grid grid-cols-1  md:grid-cols-3  xl:grid-cols-5  gap-2"
                                    role="group">
                                    @foreach ($reference_styles as $reference_style)
                                        <button type="button" class="get-fare btn-group-item" onclick="copyData('{{ $reference_style->name }}', 'pf');"
                                            style="{{ $reference_style->name }}">{{ $reference_style->name }}</button>
                                    @endforeach
                                    <input type="hidden" name="reference_style" id="reference_style_id">
                                </div>
                            </div>
                            @error('style')
                                <p class="text-center text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-4 gap-y-4">
                            <div class="w-full">
                                <label class="font-semibold text-base">Deadline*</label>
                                <select id="deadline" name="deadline"
                                    class="form-select  mt-2 get-fare @error('deadline') border-red-500 @enderror bg-white" >
                                    <option hidden="" value="0" disabled="" selected="">Select Deadline</option>
                                    @foreach ($deadlines as $deadline)
                                        <option {{ old('deadline') == $deadline->id ? 'selected' : '' }}
                                            value="{{ $deadline->id }}">{{ $deadline->name }}</option>
                                    @endforeach
                                </select>
                                @error('deadline')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="w-full">
                                <label class="font-semibold text-base">No. of pages*</label>
                                <select name="number_of_pages" id="no_of_pages"
                                    class="get-fare @error('number_of_pages') border-red-500 @enderror form-select mt-2 bg-white"
                                    onchange="copyDatad(this,'nop');">
                                    <option hidden="" value="0" disabled="" selected="">Select Number Of Pages</option>
                                    @for ($p = 1; $p <= 200; $p++)
                                        <option value="{{ $p }}"
                                            {{ old('number_of_pages') == $p ? 'selected' : '' }}>
                                            {{ $p * 250 }} Words - {{ $p }} Pages
                                        </option>
                                    @endfor
                                </select>
                                @error('number_of_pages')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                             <div class="w-full">
                                <label class="font-semibold text-base">Spacing*</label>
                                <ul class=" grid grid-cols-2 gap-x-5 gap-y-4 mt-2 mx-auto">
                                    <li class=" relative">
                                        <input class="sr-only peer" type="radio" name="answer" id="answer_1" value="Single" onclick="copyDatad(this,'sp');">
                                        <label class="form-radiobtn" for="answer_1">Single</label>

                                    </li>
                                    <li class="relative">
                                        <input class="sr-only peer" type="radio" name="answer" id="answer_2" value="Double" onclick="copyDatad(this,'sp');">
                                        <label class="form-radiobtn" for="answer_2">Double</label>

                                    </li>
                                </ul>
                            </div>

                            <div class="w-full">
                                <label class="font-semibold text-base">No. of References*</label>
                                <select name="style"
                                    class="@error('reference') border-red-500 @enderror form-select mt-2 bg-white"
                                    onchange="copyDatad(this,'nor');">
                                    <option hidden="" value="0" disabled="" selected="">No. of
                                        References</option>
                                    @for ($i = 1; $i <= 20; $i++)
                                        <option value="{{ $i }}"
                                            {{ old('style') == $i ? 'selected' : '' }}>
                                            {{ $i }} </option>
                                    @endfor
                                </select>
                                @error('style')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="w-full">
                                <label class="font-semibold text-base">Name*</label>
                                <input type="text" class="@error('name') border-red-500 @enderror form-input mt-2"
                                    name="name" placeholder="Name:" value="{{ old('name') }}" />
                                @error('name')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="w-full">
                                <label class="font-semibold text-base">Email*</label>
                                <input type="text" class=" @error('email') border-red-500 @enderror form-input mt-2"
                                    name="email" placeholder="Email:" value="{{ old('email') }}" />
                                @error('email')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="w-full">
                                <label class="font-semibold text-base">Phone*</label>
                                <input type="tel" name="phone" id="phone" type="tel"
                                    class="@error('phone') border-red-500 @enderror form-input mt-2"
                                    placeholder="Contact Number" value="{{ old('phone') }}"
                                    oninput="this.value=this.value.replace(/[^0-9\+]/g,'');" autocomplete="off"
                                    data-intl-tel-input-id="0">
                                <input type="hidden" name="phone" id="phone2" />
                                @error('phone')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="w-full">
                                <label class="font-semibold text-base">Country*</label>
                                <select name="country"
                                    class="@error('country') border-red-500 @enderror form-select mt-2 bg-white">
                                    <option hidden="" value="0" disabled="" selected="">Select Country
                                    </option>
                                    @foreach ($countries as $country)
                                        <option {{ old('country') == $country->code ? 'selected' : '' }}
                                            value="{{ $country->name }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                                @error('country')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="w-full">
                                <label class="font-semibold text-base">Attach File</label>
                                <input size="40"
                                    class="@error('emailAttachments') border-red-500 @enderror block w-full cursor-pointer text-gray-700 focus:outline-none focus:border-transparent text-sm rounded p-2 "
                                    accept=".pdf,.ppt,.pptx,.doc,.docx,.xls,.xlsx,.csv,.txt,.jpeg,.jpg,.png,.gif,.sav,.sps,.spv,.spo,.mat,.zip,.rar"
                                    aria-describedby="email_attacements_help" id="email_attacements"
                                    name="emailAttachments[]" type="file" multiple="">
                                @if ($errors->has('emailAttachments.*'))
                                    @foreach ($errors->get('emailAttachments.*') as $message)
                                        <p class="text-red-600 text-sm">{{ $message[0] }}</p>
                                    @endforeach
                                @endif
                            </div>

                            <div class="justify-end text-center mt-4">
                                <button class="mt-4">
                                    <span class=" px-6 py-3 text-lg  text-white rounded-lg bg-primary-two ">
                                        Order Submit
                                    </span>
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <div class="col-span-5 md:col-span-5 lg:col-span-4 xl:col-span-2  flex flex-col space-y-4">
                <div class="panel w-full mt-10 md:mt-0 z-10 bg-gradient-to-r from-primary-one to-primary-two rounded-xl">
                    <div class=" bg-white m-4 rounded-xl">
                        <div class=" py-5 rounded-t-lg">
                            <p class="text-3xl font-semibold text-primary-one px-2">
                                Order Summary
                            </p>
                            <div class="space-y-1" style="max-height: 300px; overflow-x: auto;">
                                <div class="bg-blue-200 hidden overflow-auto div1-1">
                                    <ul class=" ">
                                        <li class="space-x-3 p-2  text-sm"><span>Type of paper:</span> <span
                                                class=" float-right" id="nspeakerVal"></span></li>
                                    </ul>
                                </div>
                                <div class="bg-blue-200 hidden overflow-auto">
                                    <ul class=" ">
                                        <li class="space-x-3 p-2  text-sm"><span>Academic level:</span> <span
                                                class=" float-right" id="al"></span></li>
                                    </ul>
                                </div>
                                <div class="bg-blue-200 hidden overflow-auto">
                                    <ul class=" ">
                                        <li class="space-x-3 p-2  text-sm"><span>Paper Topic:</span> <span
                                                class=" float-right" id="pt"></span></li>
                                    </ul>
                                </div>
                                <div class="bg-blue-200 hidden overflow-auto">
                                    <ul class=" ">
                                        <li class="space-x-3 p-2  text-sm"><span>Paper Instructions</span> <span
                                                class=" float-right" id="pi"></span></li>
                                    </ul>
                                </div>
                                <div class="bg-blue-200 hidden overflow-auto">
                                    <ul class=" ">
                                        <li class="space-x-3 p-2  text-sm"><span>Paper Format:</span> <span
                                                class=" float-right" id="pf"></span></li>
                                    </ul>
                                </div>
                                <div class="bg-blue-200 hidden overflow-auto">
                                    <ul class=" ">
                                        <li class="space-x-3 p-2  text-sm"><span>Deadline:</span> <span
                                                class=" float-right" id="dl"></span></li>
                                    </ul>
                                </div>
                                <div class="bg-blue-200 hidden overflow-auto">
                                    <ul class=" ">
                                        <li class="space-x-3 p-2  text-sm"><span>No. of Pages:</span> <span
                                                class=" float-right" id="nop"></span></li>
                                    </ul>
                                </div>
                                <div class="bg-blue-200 hidden overflow-auto">
                                    <ul class=" ">
                                        <li class="space-x-3 p-2 text-sm"><span>Spacing:</span> <span class=" float-right"
                                                id="sp"></span></li>
                                    </ul>
                                </div>
                                <div class="bg-blue-200 hidden overflow-auto">
                                    <ul class=" ">
                                        <li class="space-x-3 p-2 text-sm"><span>No. of References:</span> <span
                                                class=" float-right" id="nor"></span></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="my-2 space-y-2 ">

                                <li class="space-x-3 bg-primary-one text-base text-white p-2"><label>Per Page Price:<span
                                            class=" float-right ">$<span id="per_page_price" class=" float-right">
                                                0</span></span></li></label>
                                <li class="space-x-3 bg-primary-one text-base text-white p-2"><label>Total Price:<span
                                            class=" float-right ">$<span id="cost" class=" float-right">
                                                0</span></span></li></label>
                            </ul>
                        </div>
                        <div class=" px-4 my-2 space-x-1 overflow-hidden ">
                            <img class="h-10 mx-auto " src="../imgs/payments.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection




@section('scripts')
    <script>


        $("#writer-level .btn-group[role='group'] button").on('click', function() {
            $(this).siblings().removeClass('btn-active')
            $(this).addClass('btn-active');
            $('#academic_level_id').val($(this).attr('academic-level'));
        })

        $("#style .btn-group[role='group'] button").on('click', function() {
            $(this).siblings().removeClass('btn-active')
            $(this).addClass('btn-active');
            $('#reference_style_id').val($(this).attr('style'));
        })

        function copyDatad(el, targ) {

            console.log(el.value)

            document.getElementById(targ).innerHTML = el.value
            document.getElementById(targ).parentElement.parentElement.parentElement.classList.remove("hidden");
        }

        function copyData(value, targ) {

            console.log( value )

            document.getElementById(targ).innerHTML = value
            document.getElementById(targ).parentElement.parentElement.parentElement.classList.remove("hidden");
        }


        $(document).ready(function() {
            const phoneInputField = document.querySelector("#phone");
            const phoneInput = window.intlTelInput(phoneInputField, {
                preferredCountries: ["us"],
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            });

            $("#order-form").submit(function() {
                $('#order-form').find(':submit').attr("disabled", true);
                $('#btn-submit').html("Submitting...");
                const phoneNumber = phoneInput.getNumber();
                $('#phone2').val(phoneNumber);
                return true;
            });

            $(".get-fare").on("click", function(e) {
                e.preventDefault();

                var data = {
                    "_token": "{{ csrf_token() }}",
                    "deadline_id": $('#deadline').val(),
                    "academic_level_id": $('#academic_level_id').val(),
                }
                $.ajax({
                    method: 'POST',
                    url: '{{ route('get.fare') }}',
                    beforeSend: function() {
                        // $("#cost-per-page").html("Loading...")
                        const loading = ' ...'
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
                            1 : $("#no_of_pages").val())))
                    },
                    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                        console.log(JSON.stringify(jqXHR));
                        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                    }
                });
            });

            $(".get-fare").on("change", function(e) {
                e.preventDefault();
                var data = {
                    "_token": "{{ csrf_token() }}",
                    "deadline_id": $('#deadline').val(),
                    "academic_level_id": $('#academic_level_id').val(),
                }
                $.ajax({
                    method: 'POST',
                    url: '{{ route('get.fare') }}',
                    beforeSend: function() {
                        // $("#cost-per-page").html("Loading...")
                        const loading = ' ...'
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
                            1 : $("#no_of_pages").val())))
                    },
                    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                        console.log(JSON.stringify(jqXHR));
                        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                    }
                });
            });

        });
    </script>
@endsection
