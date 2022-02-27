@extends('inc.layout')
@section('container')
    <div class="flex container justify-center m-auto left">
        <div class="h-full w-full md:w-9/12 lg:w-6/12">
            <form action="{{route('paypal.checkout')}}" method="post" id="payment-form">
                @if ($errors->any())
                    <div class="alert alert-danger p-5 m-5 shadow-lg">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-red-400 p-1 shadow">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{csrf_field()}}
                <input type='hidden' name='business' value='sb-7j4hl606677@personal.example.com'>
                <input type='hidden' name='item_name' value='Zakat Payment'>
                <input type='hidden' name='item_number' value='<?php echo rand() ?>'>
                <!--<input type='hidden' name='amount' value='10'>-->
                <input type='hidden' name='no_shipping' value='1'>
                {{--                <input type='hidden' name='currency_code' value='{{config('payment.currency')}}'>--}}
                {{--                <input type='hidden' name='notify_url' value='<?php echo $payment->route("notify", "") ?>'>--}}
                {{--                <input type='hidden' name='cancel_return' value='<?php echo $payment->route(BASE_URL."/final.php", "") ?>'>--}}
                {{--                <input type='hidden' name='return' value='<?php echo $payment->route("return", BASE_URL."/final.php") ?>'>--}}
                <input type="hidden" name="cmd" value="_xclick">
                <div class="scroll-container center layout" id="top">
                    <div id="fullpage" class="scroll-hijack">
                        <div class="pt-32 pb-10 px-4" style="z-index: 30;">
                            <h1 class="header-2 header mb-3">My payment details</h1>
                            <p class="mb-6"> Nearly done! Please double-check your basket before completing the payment process below. Please wait for your payment to process when you click 'Complete Payment'. </p>
                            <div class="w-full sm:w-1/2 mb-8 sm:pr-4">
                                <input type="hidden" name="amount" value="" id="form-amount">
                                <label class="font-semibold text-gray font-semibold text-sm sm:text-lg" id="title"> Title* </label>
                                <select name="title" id="title" class="w-full rounded">
                                    <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Ms">Ms</option>
                                    <option value="Miss">Miss</option>
                                    <option value="Dr">Dr</option>
                                </select>
                            </div>
                            <div class="flex flex-col sm:flex-row sx:flex-row">
                                <div class="w-full sm:w-1/2 sx:w-1/2 sm:mr-4">
                                    <div class="flex flex-col justify-start align-center mb-4 md:mb-8 z-10 transition-border text-input">
                                        <label for="firstname" class="mb-1 text-gray font-semibold sm:text-lg font-heading-2">First name*</label>
                                        <div class="relative">
                                            <input type="text" id="firstname" inputmode="text" name="first_name" value="{{old('first_name')}}" placeholder="Enter your name" class="focus:outline-none w-full input-container -small pt-0-5"><!---->
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full sm:w-1/2 sx:w-1/2 sm:ml-4 sm:ml-4 sx:ml-4">
                                    <div class="flex flex-col justify-start align-center mb-4 md:mb-8 z-10 transition-border text-input">
                                        <label for="lastname" class="mb-1 text-gray font-semibold sm:text-lg font-heading-2">Last name*</label>
                                        <div class="relative">
                                            <input type="text" id="lastname" inputmode="text" name="last_name" value="{{old('last_name')}}" placeholder="Enter your last name" class="focus:outline-none w-full input-container -small pt-0-5"><!---->
                                        </div>
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col sm:flex-row sx:flex-row">
                                <div class="w-full sm:w-1/2 sx:w-1/2 sm:mr-4">
                                    <div class="flex flex-col justify-start align-center mb-4 md:mb-8 z-10 transition-border text-input">
                                        <label for="emailaddress" class="mb-1 text-gray font-semibold sm:text-lg font-heading-2">Email address*</label>
                                        <div class="relative">
                                            <input type="text" id="emailaddress" inputmode="text" value="{{old('email')}}" name="email" placeholder="Enter your email address" class="focus:outline-none w-full input-container -small pt-0-5"><!---->
                                        </div>
                                        <!---->
                                    </div>
                                </div>
                                <div class="w-full sm:w-1/2 sx:w-1/2 sm:ml-4 sx:ml-4">
                                    <div class="flex flex-col justify-start align-center mb-4 md:mb-8 z-10 transition-border text-input">
                                        <label for="phonenumber" class="mb-1 text-gray font-semibold sm:text-lg font-heading-2">Phone number*</label>
                                        <div class="relative">
                                            <input type="text" id="phonenumber" inputmode="numeric" name="phone_number" value="{{old('phone_number')}}" placeholder="Enter your phone number" class="focus:outline-none w-full input-container -small pt-0-5"><!---->
                                        </div>
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <div class="relative z-70">
                                <!---->
                                <div>
                                    <div class="flex flex-col sm:flex-row sx:flex-row">
                                        <div class="w-full sm:mr-4 mb-2 sm:mb-0">
                                            <div class="flex flex-col justify-start align-center mb-4 md:mb-8 z-10 transition-border text-input">
                                                <label for="addresslineone" class="mb-1 text-gray font-semibold sm:text-lg font-heading-2">Address</label>
                                                <div class="relative">
                                                    <input type="text" value="{{old('address')}}" id="addresslineone" inputmode="text" name="address" placeholder="Enter address line 1" class="focus:outline-none w-full input-container -small pt-0-5"><!---->
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---->
                    <div id="card-details" class="pb-6 sx:pb-1 xs:pb-1 px-4" style="z-index: 20;">
                        <div class="header header-3 font-style-2 font-semibold mb-4">
                            <span>Pay one-off  <span id="pay_amount"></span></span>
                        </div>
                        <!---->
                        <div>
                            <div class="flex justify-between w-full radio-component flex-col flex-wrap" name="paymentType">
                                <div id="card-element" class="form-control">
                                    <!-- A Stripe Element will be inserted here. -->

                                    <!-- Used to display form errors. -->
                                    <div id="card-errors" role="alert"></div>
                                </div>
                                <div class="flex flex-col sm:flex-row w-full">
                                    <button type="Submit" id="card" name="card" class="w-full sm:w-1/2 px-4 border-2 rounded-full bg-green-500">Stripe</button>
                                    <button type="Submit" name="paypal" id="paypal" class="w-full sm:w-1/2 px-4 border-2 rounded-full bg-green-600">PayPal</button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <!----><!---->
                        </div>
                    </div>
                    <!---->

                    <div class="pb-12 px-4">
                        <p class="text-sm leading-normal"> Your details are safe with us and you can withdraw consent at any time via . Check out our <a href="" target="_blank" class="text-blue-100">Privacy Policy</a>. </p>
                    </div>
                    <div class="flash-container fixed z-50  h-auto bottom-0 left-0">
                        <!---->
                    </div>
                </div>
            </form>
        </div>
        <div class="flash-container fixed z-50  h-auto bottom-0 left-0">
            <!---->
        </div>
    </div>
    <div class="hidden lg:block w-full w-full sm:w-3/12 pl-12 right pt-nav-height relative">
        <div></div>
        <div class="vue-sticky-placeholder" style="padding-top: 876.594px;"></div>
        <div sticky-offset="{top: 130}" sticky-z-index="20" class="vue-sticky-el top-sticky" style="position: fixed; top: 130px; bottom: auto; left: 1409.5px; width: 362px; z-index: 20;">
            <div>
                <section class="ps-container scroll-area ps ps--active-y">
                    <div class="overflow-y-auto donation-sidebar  text-sm pb-20 px-4">
                        <h3 class="text-xl mb-6 bold-dark">My basket</h3>
                        <!---->
                        <div>
                            <div class="bg-white shadow-lg rounded mb-4 overflow-hidden">
                                <div class="p-4 text-blue-600 uppercase text-xs font-semibold tracking-widest">
                                    One-off payment
                                    <hr class="mt-4 pb-0 mb-0">
                                </div>
                                <div class="p-4 pt-0">
                                    <div>
                                        <div class="text-sm">
                                            <div class="pb-2">
                                                <div>
                                                    <div class="flex justify-between mb-2 text-sm">
                                                        <div class="pr-4">
                                                            <div class="text-gray-700">Hardship Relief</div>
                                                        </div>
                                                        <div id="hardship_relief" class="basket_item" name="hardship">RM12.76</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex justify-between mb-2 text-sm">
                                                        <div class="pr-4">
                                                            <div class="text-gray-700">Housing &amp; Work</div>
                                                        </div>
                                                        <div id="housing_work" class="basket_item" name="housing">RM5.62</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex justify-between mb-2 text-sm">
                                                        <div class="pr-4">
                                                            <div class="text-gray-700">Education</div>
                                                        </div>
                                                        <div id="education" class="basket_item" name="education">RM16.12</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex justify-between mb-2 text-sm">
                                                        <div class="pr-4">
                                                            <div class="text-gray-700">Support cost</div>
                                                        </div>
                                                        <div id="support_cost" class="basket_item" name="support">RM0</div>
                                                    </div>
                                                </div>
                                                <!---->
                                            </div>
                                            <div class="flex justify-between h-12">
                                                <div class="flex flex-col"><span class="cursor-pointer text-blue-300font-semibold">Zakat</span></div>
                                                <div><span class="bold-dark zakat_amount">RM 0</span></div>
                                            </div>
                                            <div class="flex justify-between w-full">
                                                <div class="flex flex-col">
                                                    <span class="cursor-pointer text-gray-700 font-semibold">Fidyah/Kaffarah </span><!----><!---->
                                                </div>
                                                <div>
                                                    <div><span class="bold-dark my_kaffarah"> RM 0 </span></div>
                                                </div>
                                            </div>
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="p-4 pt-0 flex justify-between bold-dark"><span>Subtotal:</span>  <span class="subtotal_amount">RM 0</span>
                                </div>
                            </div>
                        </div>
                        <!---->
                        <!---->
                        <div class="mb-4">
                            <div>
                                <div class="flex justify-between text-xl bold-dark"><span>Total:</span><span class="total_amount">RM 0</span>
                                </div>
                                <!---->
                            </div>
                            <p class="mt-2 mb-2"></p>
                            <!---->
                            <!---->
                        </div>
                        <hr class="mb-4">
                        <div class="text-sm">
                            <div class="mb-4"><a href="/other-ways" class="text-blue-300 font-semibold"> Explore other ways to give </a>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <p class="text-xs">We make sure Muslims in need receive your Zakat within a lunar year. Rarely, there may not be enough need in your chosen fund in that year. If so, we’ll transfer your Zakat to the fund where the need is greatest.
                                <br>
                                <br>Still have questions? Email us on <a href="#" class="text-blue-100">Get in touch</a> and we’d be happy to help with any questions you have.
                            </p>
                        </div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 831px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 626px;"></div>
                    </div>
                </section>
            </div>
            <br>
            <p class="text-xs"><b>©️ 2022 National Zakat Foundation</b></p>
        </div>
    </div>
    </div>
@endsection
@section('footer_script')
    <script src="assests/js/final.js"></script>
@endsection
