@extends('inc.layout')
@section('container')
    <div class="flex flex-col lg:flex-row  container justify-center m-auto left relative">
        <div class="h-full w-full md:w-7/12 lg:w-7/12 mx-auto">
            <div class="center layout">
                <div class="scroll-container single-page">
                    <div id="fullpage" class="scroll-hijack">
                        <div id="page308" class="h-full page-container -first -full-height">
                            <div class="flex items-center h-full w-full">
                                <div class="w-full">
                                    <div class="w-full">
                                        <div class="mb-8">
                                            <h1 class="header header-1 mb-2">It's time to give Zakat</h1>
                                            <p class="text text-gray-400">You can choose exactly how your Zakat is used or you can let NZF decide for you based on where it's needed most.</p>
                                        </div>
                                        <div class="gift-table flex flex-col mb-4">
                                            <div class="flex relative z-20">
                                                <div class="w-full">
                                                    <div class="sm:pr-4 text-blue-600 text-xl sm:text-2xl font-semibold  flex w-full mb-2">
                                                        <div class="w-full flex justify-start">
                                                            <span class="mr-2 font-heading-2">Zakat</span>
                                                            <div class="donation-tool-tip"></div>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <div class="donation-list-item-inputs">
                                                            <div class=" text-input-container w-full sm:pr-2 ">
                                                                <div class="flex flex-col justify-start align-center mb-4 md:mb-8 z-10 transition-border text-input">
                                                                    <!---->
                                                                    <div class="relative">
                                                                        <input type="text" title="" id="zakat" placeholder="Enter amount" class="focus:outline-none w-full input-container -currency -large">
                                                                    </div>
                                                                    <!---->
                                                                </div>
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!---->
                                            <!---->
                                            <hr>
                                            <div class="overflow-hidden">
                                                <div class="flex justify-between items-center cursor-pointer">
                                                    <div class="flex items-center">
                                                        <div class="w-full sm:pr-4 text-blue-600 text-xl sm:text-2xl font-semibold mb-2 font-heading-2">Fidyah/Kaffarah</div>
                                                        <div class="mb-1 pl-4">
                                                            <div class="sm:relative h-full flex justify-end" style="width: 50%;">
                                                                <div class="focus:outline-none text-blue-100 font-semibold block">
                                                                    <button data-original-title="null" class=" has-tooltip">
                                                                        <div class="bg-gray-200 w-4 h-4 flex justify-center items-center rounded-full cursor-pointer relative z-50">
                                                            <span class="icon-container -blue h-full overflow-hidden h-full">
                                                            <i class="ion-ios-help text-white help-icon h-full flex items-center"></i>
                                                            </span>
                                                                        </div>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="h-12 sm:h-8 w-4 relative text-4xl">
                                                        <!--                                                    <spanabsolute left-0 top-0 h-full flex justify-center items-center"><iion-ios-add"></i></span>-->
                                                    </div>
                                                </div>
                                                <div class=" text-input-container w-full sm:pr-2 ">
                                                    <div class="flex flex-col justify-start align-center mb-4 md:mb-8 z-10 transition-border text-input">
                                                        <!---->
                                                        <div class="relative">
                                                            <input type="number" step="0.10" title="" value="0.00" id="kaffarah" name="kaffarah" placeholder="Enter amount" class="focus:outline-none w-full input-container -currency -large">
                                                        </div>
                                                        <!---->
                                                    </div>
                                                    <!---->
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="w-full flex next-btn-container">
                                        <!---->
                                        <!---->
                                        <!---->
                                        <div class="w-full sm:w-1/2 continue-btn">
                                            <div class="btn font-semibold sm:text-lg next-btn text-green  -active" id="support-page-continue">
                                            <span class="inner-btn-text">
                                                <a href="#page334" id="support-page-continue-text" style="padding-left: 5px;">Continue</a>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="page327" class="h-full page-container -full-height" style="display: none;">
                            <div class="flex items-center h-full w-full">
                                <div class="w-full">
                                    <h3 class="header header-1 mb-4">Make my Zakat 100%?</h3>
                                    <p class="mb-8 ">We use up to 10% of your Zakat to cover the costs of distributing it accurately and effectively. If you prefer 100% of your Zakat to go directly to those who need it, you can give a voluntary (Sadaqah) add-on to cover the costs instead.</p>
                                    <div>
                                        <div class="flex justify-between w-full radio-component flex-col flex-wrap" name="donation-allocation-sliders">
                                            <div id="10-percent-zakat" class="input-container bg-white px-4 py-2 sm:p-4 radio-container flex justify-start align-center cursor-pointer mb-2 md:mb-6 selected w-full full-width">
                                                <input type="radio" id="10-percent-zakat" name="NZF can use up to 10% of my Zakat to cover costs, leaving RM0.00 for those who need it" checked="checked" class="radio-input" value="2">
                                                <label for="0NZFcanuseupto10%ofmyZakattocovercosts,leavingRM0.00forthosewhoneedit329" id="10-percent-zakat" class="mb-0 radio-label bold-dark ">
                                                    <div id="10-percent-zakat" class="absolute checkmark-icon"><i id="10-percent-zakat" class="text-green ion-ios-checkmark-circle radio-check-icon"></i>
                                                    </div>
                                                    <div id="10-percent-zakat" class="radio-btn-text ml-4 "><span id="10-percent-zakat" class="radio-text" style="float: left;">NZF can use up to 10% of my Zakat to cover costs, leaving RM0.00 for those who need it</span>
                                                    </div>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                </label>
                                            </div>
                                            <div id="100-percent-zakat" class="input-container bg-white px-4 py-2 sm:p-4 radio-container flex justify-start align-center cursor-pointer mb-2 md:mb-6 w-full full-width">
                                                <input type="radio" id="100-percent-zakat" name="I’ll add RM0.00 to cover costs so 100% of my Zakat goes to those who need it" checked="checked" class="radio-input" value="1">
                                                <label for="1I’lladdRM0.00tocovercostsso100%ofmyZakatgoestothosewhoneedit329" id="100-percent-zakat" class="mb-0 radio-label bold-dark ">
                                                    <!---->
                                                    <div id="100-percent-zakat" class="radio-btn-text ml-4 "><span id="100-percent-zakat" class="radio-text" style="float: left;">I’ll add RM0.00 to cover costs so 100% of my Zakat goes to those who need it</span>
                                                    </div>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!---->
                                    <div class="w-full flex next-btn-container -back-btn-show">
                                        <div class="w-full sm:w-1/2 pr-4">
                                            <div class="btn font-semibold sm:text-lg"><span class="inner-btn-text"> Back </span>
                                            </div>
                                        </div>
                                        <!---->
                                        <!---->
                                        <div class="w-full sm:w-1/2 continue-btn">
                                            <div class="btn font-semibold sm:text-lg next-btn text-green  -active md:ml-2" id="zakat-delivery"><span class="inner-btn-text"><span id="zakat-delivery-text">Continue</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="page334" class="h-full page-container allocation -z-40 -full-height mx-auto">
                            <div class="flex items-center h-full w-full">
                                <div class="w-full">
                                    <div class="w-full">
                                        <h3 class="header header-1 mb-4 text-[#1B3F92]">Choose how my Zakat is used</h3>
                                        <p class="mb-4 ">Choose the impact your Zakat has across three different funds. For a trial period, you can also decide exactly how much of your Zakat is used for support costs. Select one of the presets or move the sliders below.</p>
                                        <div class="w-full flex flex-col sm:flex-row min-h-fit my-10 justify-center items-center">
                                            <div class="my-4 sm:mx-2">
                                                <label for="let_us_decide" class="p-4 border-2 rounded">
                                                    <input type="radio" id="let_us_decide" checked name="how_my_zakat_is_used" class="how_my_zakat_is_used p-2" value="0">
                                                    Left us
                                                </label>
                                            </div>
                                            <div class="my-4 sm:mx-2">
                                                <label for="spread_equaly" class="p-4 border-2 rounded">
                                                    <input type="radio" id="spread_equaly" name="how_my_zakat_is_used" class="how_my_zakat_is_used" value="1">
                                                    Spread equally
                                                </label>
                                            </div>
                                            <!--                                        <div class="my-4 sm:mx-2">-->
                                            <!--                                            <label for="illdecide" class="p-4 border-2  rounded">-->
                                            <!--                                                <input type="radio" id="illdecide" name="how_my_zakat_is_used" class="how_my_zakat_is_used" value="2">-->
                                            <!--                                                I'll decide-->
                                            <!--                                            </label>-->
                                            <!--                                        </div>-->
                                        </div>
                                        <div class="w-full flex flex-col min-h-fit my-10">
                                            <div class="my-2 flex w-full justify-center items-center">
                                                <div id="hardship_relief_title" class="title w-3/12">Hardship Relief</div>
                                                <div id="hardship_relief_slider" name="hardship" class="slider w-7/12 mx-1"></div>
                                                <input type="text" name="hardship_relief_percentage" id="hardship_relief_percentage" class="w-16 mx-1 rounded border-slate-300 percentage" readonly value="0%">
                                                <div id="hardship_relief_amount" class="w-1/6 mx-2 amount font-bold">RM 0</div>
                                            </div>
                                            <div class="my-2 flex w-full justify-center items-center">
                                                <div id="housing_work_title" class=" w-3/12 title">Housing & Work</div>
                                                <div id="housing_work_slider" name="housing" class="slider w-7/12 mx-1"></div>
                                                <input type="text" name="housing_work_percentage" id="housing_work_percentage" class="w-16 mx-1 rounded border-slate-300 percentage" readonly value="0%">
                                                <div id="housing_work_amount" class="w-1/6 mx-2 amount font-bold">RM 0</div>
                                            </div>
                                            <div class="my-2 flex w-full justify-center items-center">
                                                <div id="education_title" class="w-3/12 title">Education</div>
                                                <div id="education_slider" name="education" class="w-7/12 slider"></div>
                                                <input type="text" name="education_percentage" id="education_percentage" class="w-16 mx-1 rounded border-slate-300 percentage" readonly value="0%">
                                                <div id="education_amount" class="w-1/6 mx-2 amount font-bold">RM 0</div>
                                            </div>
                                            <div class="my-2 flex w-full justify-center items-center">
                                                <div id="support_cost_title" class="w-3/12 title">Support cost</div>
                                                <div id="support_cost_slider" name="support" class="w-7/12 slider"></div>
                                                <input type="text" name="support_cost_percentage" id="education_percentage" class="w-16 mx-1 rounded border-slate-300 percentage" readonly value="0%">
                                                <div id="support_cost_amount" class="w-1/6 mx-2 amount font-bold">RM 0</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full flex next-btn-container -back-btn-show">
                                        <div class="w-full sm:w-1/2 pr-4">
                                            <div class="btn font-semibold sm:text-lg"><a href="#page308" class="inner-btn-text"> Back </a>
                                            </div>
                                        </div>
                                        <!---->
                                        <!---->
                                        <div class="w-full sm:w-1/2 continue-btn">
                                            <div class="btn font-semibold sm:text-lg next-btn text-green  -active md:ml-2" id="zakat-distribution"><span class="inner-btn-text">
                                                <a href="{{route('final.index')}}" id="zakat-distribution-text">Continue</a>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flash-container fixed z-50  h-auto bottom-0 left-0">
                    <!---->
                </div>
            </div>
            <div class="flash-container fixed z-50  h-auto bottom-0 left-0">
                <!---->
            </div>
        </div>
        <div class="w-full lg:w-3/12 right pt-nav-height">
            <div class="vue-sticky-el lg:fixed lg:top-[10%] lg:bottom-0 lg:right-[8%] w-full lg:w-1/4 lg:z-20">
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
                <p class="text-xs"><b>©</b>
                </p>
            </div>
        </div>
    </div>
@endsection
@section('footer_script')
    <script src="assests/js/give_zakat.js"></script>
@endsection
