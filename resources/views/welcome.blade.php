@extends('inc.layout')
@section('container')
<div class="flex container justify-center m-auto left">
    <div class="h-full w-full md:w-9/12 lg:w-6/12 fullscreen  mx-auto">
        <div class="page center layout">
            <div>
                <div class="scroll-container">
                    <div id="fullpage" class="scroll-hijack">
                        <div id="page1234" class="h-full page-container sm:mt-20 -first -full-height">
                            <div class="flex items-center h-full w-full">
                                <div class="w-full">
                                    <h1 class="header-1 header mb-4 md:mb-12"> I'm ready to work out my Zakat </h1>
                                    <p class="mb-4 md:mb-10 text-base sm:text-lg ">Working out your Zakat isn’t always easy. Use our step-by-step calculator to make sure you get it right. Or if you know how much to give already, just 'Skip to Give Zakat'</p>
                                    <div class="w-full flex next-btn-container -align-left">
                                        <!---->
                                        <!---->
                                        <div class="w-full sm:w-1/2">
                                            <div class="btn font-semibold sm:text-lg mb-4 sm:mb-0  -active sm:ml-2" id="skip-to-give-zakat">
                                                <a class="inner-btn-text" href="/give_zakat.php">
                                                    <span  id="skip-to-give-zakat">Skip to Give Zakat</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="w-full sm:w-1/2 continue-btn -align-left">
                                            <div class="btn font-semibold sm:text-lg next-btn text-white  -active" id="get-started">
                                                <a class="inner-btn-text" href="#filter-section">
                                                    <span  id="get-started-text">Start Calculation</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="filter-section" class="h-full page-container sm:mt-20 -first scroll-container -full-height">
                            <div class="flex items-center h-full w-full">
                                <form action="" id="filter-form">
                                    <div class="w-full">
                                        <div>
                                            <div class="mb-6">
                                                <p class="mb-4 ">Please select the options that you think may apply to you. If you're not sure about an option, select it anyway and more information will follow to help you decide.</p>
                                                <div class="header-1 header mb-4 md:mb-12">What I Own</div>
                                                <div class="flex w-full flex-wrap checkbox mb-8">
                                                    <div class="checkbox-container flex justify-start align-center mb-8  w-1/2 sm:w-1/3 half-width">
                                                        <input type="checkbox" name="cash" id="Cash0" class="checkbox-input what_i_own_checkbox" value="cash-valuation">
                                                        <label for="Cash0" class="mb-0 text-md  items-start flex w-full font-semibold">
                                                <span class=" mb-1 w-4/5 relative text-lg">
                                                <span class="sm:absolute top-0 pr-2">Cash </span>
                                                </span>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-container flex justify-start align-center mb-8  w-1/2 sm:w-1/3 -half-width">
                                                        <input type="checkbox" name="pension" id="Pensions1" class="checkbox-input what_i_own_checkbox" value="pensions">
                                                        <label for="Pensions1" class="mb-0 text-md  items-start flex w-full font-semibold"> <span class=" mb-1 w-4/5 relative text-lg">
                                                <span class="sm:absolute top-0 pr-2"> Pensions </span>
                                                </span>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-container flex justify-start align-center mb-8  w-1/2 sm:w-1/3 -half-width">
                                                        <input type="checkbox" name="money_owed_to_me" id="Money owed to me2" class="checkbox-input what_i_own_checkbox" value="money-owed-to-you">
                                                        <label for="Money owed to me2" class="mb-0 text-md  items-start flex w-full font-semibold"> <span class=" mb-1 w-4/5 relative text-lg">
                                                <span class="sm:absolute top-0 pr-2"> Money owed to me </span>
                                                </span>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-container flex justify-start align-center mb-8  w-1/2 sm:w-1/3 -half-width">
                                                        <input type="checkbox" name="isas_and_trusts" id="ISAs and trusts3" class="checkbox-input what_i_own_checkbox" value="isas">
                                                        <label for="ISAs and trusts3" class="mb-0 text-md  items-start flex w-full font-semibold">
                                                <span class="mb-1 w-4/5 relative text-lg">
                                                <span class="sm:absolute top-0 pr-2"> ISAs and trusts </span>
                                                </span>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-container flex justify-start align-center mb-8 w-1/2 sm:w-1/3 -half-width">
                                                        <input type="checkbox" name="gold_and_sliver" id="Gold and Silver4" class="checkbox-input what_i_own_checkbox" value="gold-and-silver">
                                                        <label for="Gold and Silver4" class="mb-0 text-md  items-start flex w-full font-semibold">
                                                            <span class="mb-1 w-4/5 relative text-lg"><span class="sm:absolute top-0 pr-2">Gold and Silver</span></span>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-container flex justify-start align-center mb-8  w-1/2 sm:w-1/3 -half-width">
                                                        <input type="checkbox" name="crypto" id="Crypto5" class="checkbox-input what_i_own_checkbox" value="crypto">
                                                        <label for="Crypto5" class="mb-0 text-md  items-start flex w-full font-semibold"> <span class="mb-1 w-4/5 relative text-lg"><span class="sm:absolute top-0 pr-2"> Crypto </span>
                                                </span>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-container flex justify-start align-center mb-8  w-1/2 sm:w-1/3 -half-width">
                                                        <input type="checkbox" name="shares" id="Shares6" class="checkbox-input what_i_own_checkbox" value="shares-and-investments">
                                                        <label for="Shares6" class="mb-0 text-md  items-start flex w-full font-semibold"> <span class=" mb-1 w-4/5 relative text-lg">
                                                <span class="sm:absolute top-0 pr-2"> Shares </span>
                                                </span>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-container flex justify-start align-center mb-8  w-1/2 sm:w-1/3 -half-width">
                                                        <input type="checkbox" name="business_assets" id="Business assets7" class="checkbox-input what_i_own_checkbox" value="business-assets">
                                                        <label for="Business assets7" class="mb-0 text-md  items-start flex w-full font-semibold"> <span class=" mb-1 w-4/5 relative text-lg"><span class="sm:absolute top-0 pr-2"> Business assets </span>
                                                </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="header-1 header mb-4 md:mb-12 -red">What I Owe</div>
                                                <div class="flex w-full flex-wrap checkbox mb-8">
                                                    <div class="checkbox-container flex justify-start align-center mb-8  w-1/2 sm:w-1/3 -half-width">
                                                        <input type="checkbox" name="mortgage" id="Mortgage0" class="checkbox-input what_i_owe_checkbox" value="liabilities-mortgages">
                                                        <label for="Mortgage0" class="mb-0 text-md  items-start flex w-full font-semibold"> <span class=" mb-1 w-4/5 relative text-lg">
                                                <span class="sm:absolute top-0 pr-2"> Mortgage </span>
                                                </span>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-container flex justify-start align-center mb-8  w-1/2 sm:w-1/3 -half-width">
                                                        <input type="checkbox" name="utility_bills" id="Utility bills1" class="checkbox-input what_i_owe_checkbox" value="liabilities-bills">
                                                        <label for="Utility bills1" class="mb-0 text-md  items-start flex w-full font-semibold"> <span class=" mb-1 w-4/5 relative text-lg">
                                                <span class="sm:absolute top-0 pr-2"> Utility bills </span>
                                                </span>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-container flex justify-start align-center mb-8  w-1/2 sm:w-1/3 -half-width">
                                                        <input type="checkbox" name="personal_loans" id="Personal loans2" class="checkbox-input what_i_owe_checkbox" value="liabilities-personal-loans">
                                                        <label for="Personal loans2" class="mb-0 text-md  items-start flex w-full font-semibold"> <span class=" mb-1 w-4/5 relative text-lg">
                                                <span class="sm:absolute top-0 pr-2"> Personal loans </span>
                                                </span>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-container flex justify-start align-center mb-8  w-1/2 sm:w-1/3 -half-width">
                                                        <input type="checkbox" name="overdraft" id="Overdraft3" class="checkbox-input what_i_owe_checkbox value="liabilities-overdrafts">
                                                        <label for="Overdraft3" class="mb-0 text-md  items-start flex w-full font-semibold"> <span class=" mb-1 w-4/5 relative text-lg">
                                                <span class="sm:absolute top-0 pr-2"> Overdraft </span>
                                                </span>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-container flex justify-start align-center mb-8  w-1/2 sm:w-1/3 -half-width">
                                                        <input type="checkbox" name="credit_card" id="Credit card4" class="checkbox-input what_i_owe_checkbox" value="liabilities-credit-cards">
                                                        <label for="Credit card4" class="mb-0 text-md  items-start flex w-full font-semibold"> <span class=" mb-1 w-4/5 relative text-lg">
                                                <span class="sm:absolute top-0 pr-2"> Credit card </span>
                                                </span>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-container flex justify-start align-center mb-8  w-1/2 sm:w-1/3 -half-width">
                                                        <input type="checkbox" name="business_liabilities" id="Business liabilities5" class="checkbox-input what_i_owe_checkbox" value="liabilities-tax-etc">
                                                        <label for="Business liabilities5" class="mb-0 text-md  items-start flex w-full font-semibold"> <span class=" mb-1 w-4/5 relative text-lg">
                                                <span class="sm:absolute top-0 pr-2"> Business liabilities </span>
                                                </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full flex next-btn-container -align-left">
                                            <!---->
                                            <!---->
                                            <!---->
                                            <div class="w-full sm:w-1/2 continue-btn -align-left">
                                                <div class="btn font-semibold sm:text-lg next-btn text-white  -active md:ml-2" id="filter">
                                             <span class="inner-btn-text">
                                             <span id="filter-text">Start Calculation</span>
                                             </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <section id="cash" class="h-full page-container -full-height">
                            <div class="flex items-center h-full w-full">
                                <div class="w-full">
                                    <div class="flex justify-between items-start w-full">
                                        <h3 class="mb-2 md:mb-4 header-2 header">My Cash</h3>
                                        <div class="ml-2 mt-4 h-8 w-4 md:hidden -tool-tip-container">
                                            <div class="v-popover sm:relative w-full h-full">
                                                <div aria-describedby="popover_8ugap2td47" class="trigger" style="display: inline-block;">
                                                    <button class="focus:outline-none text-blue-100 font-semibold block tooltip-target">
                                                        <div class="bg-gray-400 w-4 h-4 flex justify-center items-center rounded-full mt-12 cursor-pointer relative z-50">
                                                            <span class="icon-container -blue h-full overflow-hidden h-full">
                                                                <i class="ion-ios-help text-white help-icon h-full flex items-center"></i>
                                                            </span>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-3 md:mb-6 body-text">Enter the amount of cash you have including money in your bank account(s), whatever the source (e.g. salary, rental income, benefits etc.).</p>
                                    <div class="v-popover sm:relative w-full h-full hidden md:block">
                                        <div aria-describedby="popover_vo1lgpvo1c" class="trigger" style="display: inline-block;">
                                            <button class="focus:outline-none text-blue-100 font-semibold block tooltip-target">
                                                <div>Need help?</div>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="flex flex-row flex-wrap justify-between w-full mt-6">
                                        <div class="w-full">
                                            <div  class="flex flex-col justify-start align-center mb-4 md:mb-8 z-10 transition-border text-input w-full">
                                                <label  for="input1253" class="mb-1 text-gray font-semibold sm:text-lg font-heading-2">Cash in hand</label>
                                                <div  class="relative">
                                                    <input  type="text" title="" id="input1253" name="cash_in_hand" value="0" placeholder="Enter amount" class="focus:outline-none w-full input-container i_have -currency -large">
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div  class="flex flex-col justify-start align-center mb-4 md:mb-8 z-10 transition-border text-input">
                                                <label  for="input1257" class="mb-1 text-gray font-semibold sm:text-lg font-heading-2">Cash in bank accounts</label>
                                                <div  class="relative">
                                                    <input  type="text" title="" id="input1257" name="cash_in_bank_accounts" value="0"  placeholder="Enter amount" class="focus:outline-none i_have w-full input-container -currency -large">
                                                    </span>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full flex next-btn-container -back-btn-show">
                                        <div class="w-full sm:w-1/2 pr-4 back">
                                            <div class="btn font-semibold sm:text-lg"><span class="inner-btn-text"> Back </span>
                                            </div>
                                        </div>
                                        <!---->
                                        <div class="w-full sm:w-1/2 continue-btn">
                                            <div class="btn font-semibold sm:text-lg next-btn text-white  -active md:ml-2" id="cash-valuation"><span class="inner-btn-text">
                                          <a href="#money_owed_to_me" class="scroller" id="cash-valuation-text">Continue</a>
                                          </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="money_owed_to_me" class="h-full page-container -full-height">
                            <div class="flex items-center h-full w-full">
                                <div class="w-full">
                                    <div class="flex justify-between w-full">
                                        <h3 class="text-3xl mb-2 md:mb-4 header-2 header">Money owed to me</h3>
                                        <div class="ml-2 mt-4 h-8 w-4 sm:hidden">
                                            <div class="v-popover sm:relative w-full h-full">
                                                <div aria-describedby="popover_uyqygo3d5w" class="trigger" style="display: inline-block;">
                                                    <button class="focus:outline-none text-blue-100 font-semibold block tooltip-target">
                                                        <div class="bg-gray-400 w-4 h-4 flex justify-center items-center rounded-full mt-12 cursor-pointer relative z-50"><span class="icon-container -blue h-full overflow-hidden h-full"><i class="ion-ios-help text-white help-icon h-full flex items-center"></i></span>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-6 body-text">If you have lent money to someone and are confident it will be repaid, or you’ve sold something and are due to receive payment, you need to pay Zakat on these amounts.</p>
                                    <div class="v-popover sm:relative w-full h-full hidden sm:block">
                                        <div aria-describedby="popover_4p25ji3kon" class="trigger" style="display: inline-block;">
                                            <button class="focus:outline-none text-blue-100 font-semibold block tooltip-target">
                                                <div>Need help?</div>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="flex flex-row flex-wrap justify-between w-full mt-4 md:mt-8 mb-2 md:mb-4">
                                        <div class="w-full">
                                            <div  class="flex flex-col justify-start align-center mb-4 md:mb-8 z-10 transition-border text-input">
                                                <label  for="input1275" class="mb-1 text-gray font-semibold sm:text-lg font-heading-2">Loan</label>
                                                <div  class="relative">
                                                    <input  type="text" title="" id="input1275" name="loan" value="0"  placeholder="Enter amount" class="focus:outline-none w-full input-container i_have -currency -large">
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div  class="flex flex-col justify-start align-center mb-4 md:mb-8 z-10 transition-border text-input">
                                                <label  for="input1279" class="mb-1 text-gray font-semibold sm:text-lg font-heading-2">Money expected from a sale</label>
                                                <div  class="relative">
                                                    <input  type="text" title="" id="input1279" name="money_expected_from_sale" value="0" placeholder="Enter amount" class="focus:outline-none w-full input-container i_have -currency -large">
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full flex next-btn-container -back-btn-show">
                                        <div class="w-full sm:w-1/2 pr-4 back">
                                            <div class="btn font-semibold sm:text-lg"><span class="inner-btn-text"> Back </span>
                                            </div>
                                        </div>
                                        <div class="w-full sm:w-1/2 continue-btn">
                                            <div class="btn font-semibold sm:text-lg next-btn text-white  -active md:ml-2" id="money-owed-to-you"><span class="inner-btn-text">
                                          <a  id="money-owed-to-you-text" class="scroller" href="#gold_and_sliver" class="no-underline">Continue</a>
                                          </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="gold_and_sliver" class="h-full page-container -full-height">
                            <div class="flex items-center h-full w-full">
                                <div class="w-full">
                                    <div class="flex justify-between w-full">
                                        <h3 class="text-3xl mb-2 md:mb-4 header-2 header">My Gold &amp; Silver</h3>
                                        <div class="ml-2 mt-4 h-8 w-4 md:hidden -tool-tip-container">
                                            <div class="v-popover sm:relative w-full h-full">
                                                <div aria-describedby="popover_jti0fkiarq" class="trigger" style="display: inline-block;">
                                                    <button class="focus:outline-none text-blue-100 font-semibold block tooltip-target">
                                                        <div class="bg-gray-400 w-4 h-4 flex justify-center items-center rounded-full mt-12 cursor-pointer relative z-50">
                                                   <span class="icon-container -blue h-full overflow-hidden h-full">
                                                   <i class="ion-ios-help text-white help-icon h-full flex items-center"></i>
                                                   </span>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-3 md:mb-6  body-text">If you’re not sure how much your gold and silver is worth you can enter the weight in grams. One tola is equal to 11.7 grams.</p>
                                    <div class="v-popover sm:relative w-full h-full hidden md:block">
                                        <div aria-describedby="popover_rplgwa2ubh" class="trigger" style="display: inline-block;">
                                            <button class="focus:outline-none text-blue-100 font-semibold block tooltip-target">
                                                <div>Need help?</div>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="flex flex-row flex-wrap justify-between w-full mt-8 mb-4">
                                        <div class="w-full">
                                            <div class="weight-input relative error" placeholder="Enter amount">
                                                <div class="relative">
                                                    <div class="mb-1 text-gray font-semibold sm:text-lg">Gold</div>
                                                    <div class="relative overflow-hidden mb-8 rounded">
                                                        <div  class="flex flex-col justify-start align-center z-10 transition-border text-input -no-container">
                                                            <!---->
                                                            <div  class="relative">
                                                                <input  type="text" title="" id="input1299" name="gold" value="0" placeholder="Enter price" class="focus:outline-none i_have w-full input-container -currency -large">
                                                            </div>
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div class="weight-input relative" placeholder="Enter amount">
                                                <div class="relative">
                                                    <div class="mb-1 text-gray font-semibold sm:text-lg">Silver</div>
                                                    <div class="relative overflow-hidden mb-8 rounded">
                                                        <div  class="flex flex-col justify-start align-center z-10 transition-border text-input -no-container">
                                                            <!---->
                                                            <div  class="relative">
                                                                <input  type="text" title="" id="input1304" name="silver" value="0" placeholder="Enter weight" class="focus:outline-none w-full input-container -currency i_have -large">
                                                            </div>
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full flex next-btn-container -back-btn-show">
                                        <div class="w-full sm:w-1/2 pr-4 back">
                                            <div class="btn font-semibold sm:text-lg"><span class="inner-btn-text"> Back </span>
                                            </div>
                                        </div>
                                        <!---->
                                        <div class="w-full sm:w-1/2 continue-btn">
                                            <a  id="gold-and-silver-text" class="scroller" href="#shares">
                                                <div class="btn font-semibold sm:text-lg next-btn text-white  -active md:ml-2" id="gold-and-silver">
                                                    <span class="inner-btn-text">Continue</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="shares" class="h-full page-container -full-height">
                            <div class="flex items-center h-full w-full">
                                <div class="w-full">
                                    <div class="flex justify-between w-full">
                                        <h3 class="text-3xl mb-4 header-2 header">My shares</h3>
                                        <div class="ml-2 mt-4 h-8 w-4 md:hidden -tool-tip-container">
                                            <div class="v-popover sm:relative w-full h-full">
                                                <div aria-describedby="popover_c9w3y76q0n" class="trigger" style="display: inline-block;">
                                                    <button class="focus:outline-none text-blue-100 font-semibold block tooltip-target">
                                                        <div class="bg-gray-400 w-4 h-4 flex justify-center items-center rounded-full mt-12 cursor-pointer relative z-50">
                                                            <span class="icon-container -blue h-full overflow-hidden h-full"><i class="ion-ios-help text-white help-icon h-full flex items-center"></i></span>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-3 md:mb-6 body-text">If you own stocks and shares, Zakat is due on them. Enter the current market value of these investments below.</p>
                                    <div class="v-popover sm:relative w-full h-full hidden md:block">
                                        <div aria-describedby="popover_w7t5mbx6uh" class="trigger" style="display: inline-block;">
                                            <button class="focus:outline-none text-blue-100 font-semibold block tooltip-target">
                                                <div>Need help?</div>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="flex flex-row flex-wrap justify-between w-full mt-4 md:mt-8 mb-2">
                                        <div class="w-full">
                                            <div  class="flex flex-col justify-start align-center mb-4 md:mb-8 z-10 transition-border text-input">
                                                <label  for="input1322" class="mb-1 text-gray font-semibold sm:text-lg font-heading-2">Shares bought exclusively to resell for capital gain</label>
                                                <div  class="relative">
                                                    <input  type="text" title="" id="input1322" value="0" name="shares_bought_exclusively_to_resell_for_capital_gain" placeholder="Enter amount" class="focus:outline-none i_have w-full input-container -currency -large">
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div  class="flex flex-col justify-start align-center mb-4 md:mb-8 z-10 transition-border text-input">
                                                <label  for="input1326" class="mb-1 text-gray font-semibold sm:text-lg font-heading-2">Shares bought for any other reason</label>
                                                <div  class="relative">
                                                    <input  type="text" title="" id="input1326" value="0" name="shares_bought_for_any_other_reason" placeholder="Enter amount" class="focus:outline-none i_have w-full input-container -currency -large">
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full flex next-btn-container -back-btn-show">
                                        <div class="w-full sm:w-1/2 pr-4">
                                            <div class="btn font-semibold sm:text-lg"><span class="inner-btn-text back"> Back </span>
                                            </div>
                                        </div>
                                        <!---->
                                        <div class="w-full sm:w-1/2 continue-btn">
                                            <a  id="gold-and-silver-text" class="scroller" href="#shares">
                                                <div class="btn font-semibold sm:text-lg next-btn text-white  -active md:ml-2" id="gold-and-silver">
                                                    <span class="inner-btn-text">Continue</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="pension" class="h-full page-container pension-container -full-height">
                            <div class="flex items-center h-full w-full">
                                <div class="w-full">
                                    <div class="flex justify-between w-full">
                                        <h3 class="text-3xl mb-4 header-2 header">My pensions</h3>
                                        <div class="ml-2 mt-4 h-8 w-4 md:hidden -tool-tip-container">
                                            <div class="v-popover sm:relative w-full h-full">
                                                <div aria-describedby="popover_lquyylmsge" class="trigger" style="display: inline-block;">
                                                    <button class="focus:outline-none text-blue-100 font-semibold block tooltip-target">
                                                        <div class="bg-gray-400 w-4 h-4 flex justify-center items-center rounded-full mt-12 cursor-pointer relative z-50">
                                                            <span class="icon-container -blue h-full overflow-hidden h-full">
                                                                <i class="ion-ios-help text-white help-icon h-full flex items-center"></i></span>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-3 md:mb-6 body-text">If you have a defined contribution pension scheme, Zakat is due on specific assets in the fund.</p>
                                    <div class="v-popover sm:relative w-full h-full hidden md:block">
                                        <div aria-describedby="popover_qmk7pimva6" class="trigger" style="display: inline-block;">
                                            <button class="focus:outline-none text-blue-100 font-semibold block tooltip-target">
                                                <div>Need help?</div>
                                            </button>
                                        </div>
                                    </div>
                                    <div aria-expanded="true" class="flex w-full">
                                        <div class="w-full">
                                            <div  class="flex flex-col justify-start align-center mb-4 md:mb-8 z-10 transition-border text-input" amount:name="getLabel('Full amount')">
                                                <!---->
                                                <div  class="relative">
                                                    <input  type="text" name="pension" title="" id="input1344" value="0" placeholder="Enter" class="focus:outline-none i_have w-full input-container -currency -large">
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                    <div aria-hidden="true" hidden="hidden" class="flex w-full flex-col sm:flex-row" style="height: 0px; overflow: hidden; transition-property: height; transition-duration: 500ms;">
                                        <div class="w-full sm:w-1/2 sm:mr-2 pb-4 md:pb-8 sm:pb-0 z-10">
                                            <div class="mb-1 text-gray font-semibold sm:text-lg">Type of pension scheme</div>
                                            <div id="selectid1349" class="relative">
                                                <div class="w-full relative h-auto select-input">
                                                    <div class="select pb-0 overflow-hidden
                                                border border-gray-400
                                                rounded list-none
                                                absolute w-full bg-white">
                                                        <div class="absolute right-0 cursor-pointer pr-2 sm:pr-4 top-0 flex items-center -large-arrow"><i class="ion-ios-arrow-down text-xl"></i>
                                                        </div>
                                                        <div id="option-selected" role="button" aria-labelledby="dropdown-label" class="select-input -custom-padding flex items-center"><span> Select </span>
                                                        </div>
                                                        <section class="ps-container ps" suppressscrollx="true">
                                                            <!---->
                                                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                                            </div>
                                                            <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                        <div class="w-full sm:w-1/2 sm:ml-2 z-0">
                                            <div  class="flex flex-col justify-start align-center mb-4 md:mb-8 z-10 transition-border text-input">
                                                <label  for="input1355" class="mb-1 text-gray font-semibold sm:text-lg font-heading-2">Total pension value</label>
                                                <div  class="relative">
                                                    <input  type="text" title="" id="input1355" name="total_pension_value" value="0" placeholder="Enter amount" class="focus:outline-none w-full input-container i_have -currency -large">
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full flex next-btn-container -back-btn-show">
                                        <div class="w-full sm:w-1/2 pr-4">
                                            <div class="btn font-semibold sm:text-lg"><span class="inner-btn-text back"> Back </span>
                                            </div>
                                        </div>
                                        <!---->
                                        <div class="w-full sm:w-1/2 continue-btn">
                                            <a  id="gold-and-silver-text" class="scroller" href="#shares">
                                                <div class="btn font-semibold sm:text-lg next-btn text-white  -active md:ml-2" id="gold-and-silver">
                                                    <span class="inner-btn-text">Continue</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="isas_and_trusts" class="h-full page-container -full-height">
                            <div class="flex items-center h-full w-full">
                                <div class="w-full">
                                    <div class="flex justify-between w-full">
                                        <h3 class="text-3xl mb-4 header-2 header">My ISAs, Junior ISAs &amp; Child Trust Funds</h3>
                                        <div class="ml-2 mt-4 h-8 w-4 md:hidden -tool-tip-container">
                                            <div class="v-popover sm:relative w-full h-full">
                                                <div aria-describedby="popover_9p5uuwgwa7" class="trigger" style="display: inline-block;">
                                                    <button class="focus:outline-none text-blue-100 font-semibold block tooltip-target">
                                                        <div class="bg-gray-400 w-4 h-4 flex justify-center items-center rounded-full mt-12 cursor-pointer relative z-50"><span class="icon-container -blue h-full overflow-hidden h-full"><i class="ion-ios-help text-white help-icon h-full flex items-center"></i></span>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-3 md:mb-6 body-text">Zakat is payable on ISAs and Child Trust Funds. It's important that you enter the full value of your investment and the calculator will do the rest.</p>
                                    <div class="v-popover sm:relative w-full h-full hidden md:block">
                                        <div aria-describedby="popover_og3bis8e6p" class="trigger" style="display: inline-block;">
                                            <button class="focus:outline-none text-blue-100 font-semibold block tooltip-target">
                                                <div>Need help?</div>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="flex flex-row flex-wrap justify-between w-full mt-4 md:mt-8">
                                        <div class="w-full">
                                            <div  class="flex flex-col justify-start align-center mb-4 md:mb-8 z-10 transition-border text-input">
                                                <label  for="input1371" class="mb-1 text-gray font-semibold sm:text-lg font-heading-2">Stocks &amp; shares ISA/CTF</label>
                                                <div  class="relative">
                                                    <input  type="text" title="" id="input1371" name="stocks_shares_isa_ctf" value="0" placeholder="Enter amount" class="focus:outline-none i_have w-full input-container -currency -large">
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div  class="flex flex-col justify-start align-center mb-4 md:mb-8 z-10 transition-border text-input">
                                                <label  for="input1375" class="mb-1 text-gray font-semibold sm:text-lg font-heading-2">Cash ISA</label>
                                                <div  class="relative">
                                                    <input  type="text" title="" id="input1375" name="cash_in_isa" value="0" placeholder="Enter amount" class="focus:outline-none w-full i_have input-container -currency -large">
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full flex next-btn-container -back-btn-show">
                                        <div class="w-full sm:w-1/2 pr-4 back">
                                            <div class="btn font-semibold sm:text-lg"><span class="inner-btn-text"> Back </span>
                                            </div>
                                        </div>
                                        <!---->
                                        <div class="w-full sm:w-1/2 continue-btn">
                                            <a  id="gold-and-silver-text" class="scroller" href="#shares">
                                                <div class="btn font-semibold sm:text-lg next-btn text-white  -active md:ml-2" id="gold-and-silver">
                                                    <span class="inner-btn-text">Continue</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="crypto" class="h-full page-container -full-height">
                            <div class="flex items-center h-full w-full">
                                <div class="w-full">
                                    <div class="flex justify-between w-full">
                                        <h3 class="text-3xl mb-4 header-2 header">My Crypto</h3>
                                        <div class="ml-2 mt-4 h-8 w-4 md:hidden -tool-tip-container">
                                            <div class="v-popover sm:relative w-full h-full">
                                                <div aria-describedby="popover_f2e2xhfn8j" class="trigger" style="display: inline-block;">
                                                    <button class="focus:outline-none text-blue-100 font-semibold block tooltip-target">
                                                        <div class="bg-gray-400 w-4 h-4 flex justify-center items-center rounded-full mt-12 cursor-pointer relative z-50"><span class="icon-container -blue h-full overflow-hidden h-full"><i class="ion-ios-help text-white help-icon h-full flex items-center"></i></span>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-3 md:mb-6 body-text">Enter the value of any cryptocurrencies you own in pounds.</p>
                                    <div class="v-popover sm:relative w-full h-full hidden md:block">
                                        <div aria-describedby="popover_xucsy3za6i" class="trigger" style="display: inline-block;">
                                            <button class="focus:outline-none text-blue-100 font-semibold block tooltip-target">
                                                <div>Need help?</div>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="flex flex-row flex-wrap justify-between w-full mt-4 md:mt-8">
                                        <div class="w-full">
                                            <div  class="flex flex-col justify-start align-center mb-4 md:mb-8 z-10 transition-border text-input">
                                                <label  for="input1393" class="mb-1 text-gray font-semibold sm:text-lg font-heading-2">Cryptocurrency value</label>
                                                <div  class="relative">
                                                    <input  type="text" title="" id="input1393" name="cryptocurrency_value" value="0" placeholder="Enter amount" class="focus:outline-none w-full i_have input-container -currency -large">
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full flex next-btn-container -back-btn-show">
                                        <div class="w-full sm:w-1/2 pr-4 back">
                                            <div class="btn font-semibold sm:text-lg"><span class="inner-btn-text"> Back </span>
                                            </div>
                                        </div>
                                        <!---->
                                        <div class="w-full sm:w-1/2 continue-btn">
                                            <a  id="gold-and-silver-text" class="scroller" href="#shares">
                                                <div class="btn font-semibold sm:text-lg next-btn text-white  -active md:ml-2" id="gold-and-silver">
                                                    <span class="inner-btn-text">Continue</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="business_assets" class="h-full page-container -full-height">
                            <div class="flex items-center h-full w-full">
                                <div class="w-full">
                                    <div class="flex justify-between w-full">
                                        <h3 class="text-3xl mb-4 header-2 header">My business assets</h3>
                                        <div class="ml-2 mt-4 h-8 w-4 md:hidden -tool-tip-container">
                                            <div class="v-popover sm:relative w-full h-full">
                                                <div aria-describedby="popover_ckf4o1fmjc" class="trigger" style="display: inline-block;">
                                                    <button class="focus:outline-none text-blue-100 font-semibold block tooltip-target">
                                                        <div class="bg-gray-400 w-4 h-4 flex justify-center items-center rounded-full mt-12 cursor-pointer relative z-50"><span class="icon-container -blue h-full overflow-hidden h-full"><i class="ion-ios-help text-white help-icon h-full flex items-center"></i></span>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-3 md:mb-6 body-text">Business assets include cash, receivables (money owed to the business) and stock. Stock should be valued at the retail price. If you have bought property with the sole intention to resell, then include an estimate of the current value of your equity in the property.</p>
                                    <div class="v-popover sm:relative w-full h-full hidden md:block">
                                        <div aria-describedby="popover_92b7czmj3p" class="trigger" style="display: inline-block;">
                                            <button class="focus:outline-none text-blue-100 font-semibold block tooltip-target">
                                                <div>Need help?</div>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="flex flex-row flex-wrap justify-between w-full mt-4 md:mt-8">
                                        <div class="w-full">
                                            <div  class="flex flex-col justify-start align-center mb-4 md:mb-8 z-10 transition-border text-input">
                                                <label  for="input1411" class="mb-1 text-gray font-semibold sm:text-lg font-heading-2">Cash</label>
                                                <div  class="relative">
                                                    <input  type="text" title="" id="input1411" name="owe_cash" placeholder="Enter amount" value="0" class="focus:outline-none w-full input-container i_have -currency -large">
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div  class="flex flex-col justify-start align-center mb-4 md:mb-8 z-10 transition-border text-input">
                                                <label  for="input1415" class="mb-1 text-gray font-semibold sm:text-lg font-heading-2">Receivables</label>
                                                <div  class="relative">
                                                    <input  type="text" title="" id="input1415" name="owe_receivables" placeholder="Enter amount" value="0" class="focus:outline-none w-full input-container -currency i_have -large">
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div  class="flex flex-col justify-start align-center mb-4 md:mb-8 z-10 transition-border text-input">
                                                <label  for="input1419" class="mb-1 text-gray font-semibold sm:text-lg font-heading-2">Stock</label>
                                                <div  class="relative">
                                                    <input  type="text" title="" id="input1419" name="owe_stock" placeholder="Enter amount" value="0" class="focus:outline-none w-full input-container -currency i_have -large">
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full flex next-btn-container -back-btn-show">
                                        <div class="w-full sm:w-1/2 pr-4 back">
                                            <div class="btn font-semibold sm:text-lg"><span class="inner-btn-text"> Back </span>
                                            </div>
                                        </div>
                                        <!---->
                                        <div class="w-full sm:w-1/2 continue-btn">
                                            <a  id="gold-and-silver-text" class="scroller" href="#shares">
                                                <div class="btn font-semibold sm:text-lg next-btn text-white  -active md:ml-2" id="gold-and-silver">
                                                    <span class="inner-btn-text">Continue</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="money_i_owe" class="h-full page-container -full-height">
                            <div class="flex items-center h-full w-full">
                                <div class="w-full">
                                    <div class="flex justify-between w-full">
                                        <h3 class="text-3xl mb-4 header-2 header -red">Money I owe</h3>
                                        <div class="ml-2 mt-4 h-8 w-4 md:hidden -tool-tip-container">
                                            <div class="v-popover sm:relative w-full h-full">
                                                <div aria-describedby="popover_5otqfs9pel" class="trigger" style="display: inline-block;">
                                                    <button class="focus:outline-none text-blue-100 font-semibold block tooltip-target">
                                                        <div class="bg-gray-400 w-4 h-4 flex justify-center items-center rounded-full mt-12 cursor-pointer relative z-50">
                                                            <span class="icon-container -blue h-full overflow-hidden h-full"><i class="ion-ios-help text-white help-icon h-full flex items-center"></i></span>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-6 body-text">For long-term debts (e.g. mortgage), payments and bills, only enter amounts that are either due now or overdue. For businesses, any tax liabilities in relation to a prior financial year that are still to be paid can also be deducted.</p>
                                    <div class="v-popover sm:relative w-full h-full hidden md:block">
                                        <div aria-describedby="popover_0g0k3dvc06" class="trigger" style="display: inline-block;">
                                            <button class="focus:outline-none text-blue-100 font-semibold block tooltip-target">
                                                <div>Need help?</div>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="w-full mt-4 md:mt-8">
                                        <div class="flex w-full flex-wrap sm:flex-nowrap">
                                            <div class="w-full sm:mr-4" id="i_owe_mortgage">
                                                <div  class="flex flex-col justify-start align-center mb-4 md:mb-8 z-10 transition-border text-input">
                                                    <label  for="input1437" class="mb-1 text-gray font-semibold sm:text-lg font-heading-2">Mortgage</label>
                                                    <div  class="relative">
                                                        <input  type="text" title="" id="input1437" name="owe_mortgage" value="0" placeholder="Enter amount" class="focus:outline-none w-full input-container i_owe -currency -large">
                                                    </div>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="w-full sm:mr-4" id="i_owe_utility_bills">
                                                <div  class="flex flex-col justify-start align-center mb-4 md:mb-8 z-10 transition-border text-input">
                                                    <label  for="input1441" class="mb-1 text-gray font-semibold sm:text-lg font-heading-2">Utility bills</label>
                                                    <div  class="relative">
                                                        <input  type="text" title="" id="input1441" name="owe_utility_bills" value="0" placeholder="Enter amount" class="focus:outline-none w-full input-container i_owe -currency -large">
                                                    </div>
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-wrap sm:flex-nowrap">
                                            <div class="w-full sm:mr-4" id="i_owe_personal_loans">
                                                <div  class="flex flex-col justify-start align-center mb-4 md:mb-8 z-10 transition-border text-input">
                                                    <label  for="input1445" class="mb-1 text-gray font-semibold sm:text-lg font-heading-2">Personal loans</label>
                                                    <div  class="relative">
                                                        <input  type="text" title="" id="input1445" name="owe_personal_loans" value="0" placeholder="Enter amount" class="focus:outline-none w-full input-container i_owe -currency -large">
                                                    </div>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="w-full sm:mr-4" id="i_owe_overdraft">
                                                <div  class="flex flex-col justify-start align-center mb-4 md:mb-8 z-10 transition-border text-input">
                                                    <label  for="input1449" class="mb-1 text-gray font-semibold sm:text-lg font-heading-2">Overdraft</label>
                                                    <div  class="relative">
                                                        <input  type="text" title="" id="input1449" name="owe_overdraft" value="0" placeholder="Enter amount" class="focus:outline-none w-full input-container i_owe -currency -large">
                                                    </div>
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-wrap sm:flex-nowrap">
                                            <div class="w-full sm:mr-4" id="i_owe_credit_card">
                                                <div  class="flex flex-col justify-start align-center mb-4 md:mb-8 z-10 transition-border text-input">
                                                    <label  for="input1453" class="mb-1 text-gray font-semibold sm:text-lg font-heading-2">Credit card</label>
                                                    <div  class="relative">
                                                        <input  type="text" title="" id="input1453" name="owe_credit_card" value="0" placeholder="Enter amount" class="focus:outline-none w-full input-container i_owe -currency -large">
                                                    </div>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="w-full sm:mr-4" id="i_owe_business_liabilities">
                                                <div  class="flex flex-col justify-start align-center mb-4 md:mb-8 z-10 transition-border text-input">
                                                    <label  for="input1457" class="mb-1 text-gray font-semibold sm:text-lg font-heading-2">Business liabilities</label>
                                                    <div  class="relative">
                                                        <input  type="text" title="" id="input1457" name="owe_business_liabilities" value="0" placeholder="Enter amount" class="focus:outline-none w-full input-container i_owe -currency -large">
                                                    </div>
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full flex next-btn-container -back-btn-show">
                                        <div class="w-full sm:w-1/2 pr-4 back">
                                            <div class="btn font-semibold sm:text-lg"><span class="inner-btn-text"> Back </span>
                                            </div>
                                        </div>
                                        <!---->
                                        <div class="w-full sm:w-1/2 continue-btn">
                                            <a  id="gold-and-silver-text" class="scroller" href="#shares">
                                                <div class="btn font-semibold sm:text-lg next-btn text-white  -active md:ml-2" id="gold-and-silver">
                                                    <span class="inner-btn-text">Continue</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="display-zakat-section" class="h-full page-container -z-40 -full-height">
                            <div class="flex items-center h-full w-full">
                                <div class="w-full">
                                    <div class="display-zakat">
                                        <h1 class="header header-2 text-3xl mb-4">All done!</h1>
                                        <p class="sub-text mb-6 sm:mb-12">Here's a summary of the information you've provided and how much Zakat you need to give.</p>
                                        <div class="flex sm:flex-row sm:-mx-4">
                                            <div class="w-1/2 sm:mx-4 mb-4">
                                                <hr>
                                                <div class="sub-text">What I have...</div>
                                                <div class="text-1-5xl sm:text-2-5xl .text-blue-400 font-semibold truncate" id="final_what_i_have">0</div>
                                            </div>
                                            <div class="w-1/2 sm:mx-4 mb-4">
                                                <hr>
                                                <div class="sub-text">...minus what I owe</div>
                                                <div class="text-1-5xl sm:text-2-5xl text-red-400 font-semibold truncate"  id="final_what_i_owe"></div>
                                            </div>
                                        </div>
                                        <div class="flex sm:flex-row sm:-mx-4 mb-6">
                                            <div class="w-1/2 sm:mx-4 mb-4">
                                                <hr>
                                                <div class="sub-text">is equal to:</div>
                                                <div class="text-1-5xl sm:text-2-5xl text-green-800  font-semibold truncate" id="final_is_equal_to">0</div>
                                            </div>
                                            <div class="w-1/2 sm:mx-4 ">
                                                <hr>
                                                <div class="sub-text">Today's Nisab is:</div>
                                                <div class="text-1-5xl sm:text-2-5xl text-black flex items-center">
                                                    <div class="font-semibold mr-4 today_nisab_is">RM 0</div>
                                                    <div>
                                                        <div class="relative w-full h-full">
                                                            <button class="focus:outline-none text-blue-100 font-semibold block h-full">
                                                                <div class="bg-gray-400 w-4 h-4 flex justify-center items-center rounded-full mt-12 cursor-pointer relative z-50"><span class="icon-container h-full overflow-hidden"><i class="ion-ios-help text-white help-icon h-full flex items-center"></i></span>
                                                                </div>
                                                            </button>
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items-center flex flex-col flex-wrap text-2xl p-4 sm:pt-8 sm:pb-5 sm:px-8 rounded border border-green bg-green-100 text-green-800 mb-10 md:mt-14">
                                            <div class="w-full text-sm text-gray text-base font-semibold">So my Zakat (2.5%) is:</div>
                                            <div class="w-full text-4xl font-style-2 font-semibold leading-none sm:leading-normal truncate zakat_is">RM37.50</div>
                                        </div>
                                    </div>
                                    <div class="w-full flex next-btn-container -back-btn-show">
                                        <div class="w-full sm:w-1/2 pr-4 back">
                                            <div class="btn font-semibold sm:text-lg"><span class="inner-btn-text"> Back </span>
                                            </div>
                                        </div>
                                        <div class="w-full sm:w-1/2 pr-2 pb-4">
                                            <div class="btn font-semibold sm:text-lg test" style="border: 1px solid rgb(44, 145, 220) !important;">
                                                <a href="{{route('give_zakat.index')}}" class="inner-btn-text">
                                                    Give Zakat
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden md:block md:w-3/12 lg:w-6/12 pl-12 right pt-nav-height relative">
        <div class="vue-sticky-el fixed top-[130px] bottom-0 right-[10%] w-1/4 z-20">
            <div data-v-01bc29a6="">
                <div data-v-78fe370b="" data-v-01bc29a6="" class="progress-calculator">
                    <div data-v-78fe370b="" class="flex flex-row-reverse md:flex-col justify-center items-center md:bg-white md:shadow-lg md:py-8 md:px-6 rounded md:mb-8  transition-all">
                        <p data-v-78fe370b="" class="w-3/12 md:w-full md:mb-6 flex justify-end md:justify-start .text-blue-400 font-semibold text-lg">Step <span class="current_step mx-1">1</span> of  <span class="total_step  mx-1">0</span></p>
                        <div data-v-8279d38c="" data-v-78fe370b="" class="w-full relative  w-9/12 md:w-full md:pb-1">
                            <div data-v-8279d38c="" class="w-full progress-bar h-2 bg-gray-400 opacity-25 rounded absolute"></div>
                            <div data-v-8279d38c="" class="progress-bar h-2 bg-green-800 rounded absolute" style="width: 10%;"></div>
                        </div>
                    </div>
                    <div data-v-1e1de131="" data-v-78fe370b="" class="progress-calculator">
                        <div data-v-1e1de131="" class="overflow-y-auto donation-sidebar justify-start text-sm md:bg-white md:shadow-lg rounded md:mb-8  transition-all">
                            <div data-v-1e1de131="" class="bg-white shadow-lg rounded overflow-hidden">
                                <div data-v-1e1de131="" class="p-4 text-black uppercase text-xs font-semibold tracking-widest">
                                    What I Owe
                                    <hr data-v-1e1de131="" class="mt-4 pb-0 mb-4">
                                    <div data-v-1e1de131="" class="flex justify-between w-full pt-4 ">
                                        <div data-v-1e1de131="" class="flex flex-col"><span data-v-1e1de131="" class=" .text-blue-400 font-semibold">What I have...</span>
                                        </div>
                                        <div data-v-1e1de131=""><span data-v-1e1de131="" class=".text-blue-400" id="what_i_have_right"> RM 0 </span>
                                        </div>
                                    </div>
                                    <div data-v-1e1de131="" class="flex justify-between w-full pt-4">
                                        <div data-v-1e1de131="" class="flex flex-col"><span data-v-1e1de131="" class="font-semibold text-red-400">...minus what I owe</span>
                                        </div>
                                        <div data-v-1e1de131=""><span data-v-1e1de131="" class="text-red-400" id="what_i_owe_right"> RM 0 </span>
                                        </div>
                                    </div>
                                    <div data-v-1e1de131="" class="flex justify-between w-full pt-4">
                                        <div data-v-1e1de131="" class="flex flex-col"><span data-v-1e1de131="" class=" text-black font-semibold text-green">is equal to:</span>
                                        </div>
                                        <div data-v-1e1de131=""><span data-v-1e1de131="" class="text-green" id="is_equal_to_right">RM 0 </span>
                                        </div>
                                    </div>
                                    <div data-v-1e1de131="" class="flex justify-between w-full pt-4">
                                        <div data-v-1e1de131="" class="flex flex-col"><span data-v-1e1de131="" class=" text-black font-semibold">Today's Nisab is:</span>
                                        </div>
                                        <div data-v-1e1de131=""><span data-v-1e1de131="" class="today_nisab_is">RM 0 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-v-1e1de131="" class="flex justify-between text-xl bold-dark"><span data-v-1e1de131="">Zakat (2.5%) is:</span><span data-v-1e1de131="" class="text-green zakat_is">RM 0</span>
                        </div>
                    </div>
                    <div data-v-78fe370b="" class="hidden md:block">
                        <p data-v-78fe370b="" class="text-xs mt-12">Still have questions? Email us on <a data-v-78fe370b="" href="#" class="text-blue-100">Get in touch</a> and we’d be happy to help with any questions you have.</p>
                    </div>
                </div>
            </div>
            <br>
            <p class="text-xs"><b>©2022</b>
            </p>
        </div>
    </div>
</div>

@endsection
@section('footer_script')
<script src="assests/js/snap-scroll.min.js"></script>
<script src="assests/js/script.js"></script>
@endsection
