<main class="relative max-w-screen-3xl mx-auto overflow-x-hidden">

    <section class="relative max-w-screen-xl mx-auto pb-20 desktop:py-24 z-20">

        <div>
            <div class="text-gray-750 bg-white desktop:w-835 px-4 py-8 desktop:pl-12 desktop:pt-9 desktop:pb-24 desktop:mb-28 desktop:rounded-4xl desktop:shadow-big-cards text-center desktop:text-left">
                <h3 class="font-bold text-22">{{session('status')}},</h3>
                <h1 class="font-bold text-45 desktop:text-73 mb-10">Thank You</h1>
                <p class="font-medium text-xl leading-8 px-16 desktop:px-0">
                    Ready to see how <a href="https://www.bill.com/" target="_blank" class="text-blue-500"><b>Bill.com</b></a> can help your firm?
                    <br>
                    <span class="font-bold text-22">Schedule</span> a live, personalized demo by clicking the asset button below, or visit our website:
                </p>
                <div class="flex justify-center items-center desktop:justify-start desktop:items-baseline mt-20">
                    <a href="#" class="flex flex-col desktop:flex-row justify-center items-center desktop:py-6 desktop:px-9 desktop:w-226 rounded-2xl-1/2 mr-12 desktop:mr-10 desktop:shadow-small-cards">
                        <div class="w-20 h-20 mb-2 desktop:mb-0 desktop:mr-5 rounded-2xl-1/2 flex justify-center items-center desktop:shadow-extra-small-cards" style="background-image: linear-gradient(to bottom right, #552CFF, #C171FF);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="39.587" height="32.164" viewBox="0 0 39.587 32.164"><path d="M24.838,10.732,19.89,5.784H2.571V37.948H42.157V10.732Zm-2.474,23.5-8.66-8.66H19.89v-9.9h4.948v9.9h6.185Z" transform="translate(-2.571 -5.784)" fill="#fff"/></svg>
                        </div>
                        <p class="font-medium text-sm">Asset</p>
                    </a>
                    <a href="https://www.bill.com/" target="_blank" class="flex flex-col desktop:flex-row justify-center items-center desktop:py-6 desktop:px-9 desktop:w-226 rounded-2xl-1/2 desktop:shadow-small-cards">
                        <div class="w-20 h-20 mb-2 desktop:mb-0 desktop:mr-5 rounded-2xl-1/2 flex justify-center items-center desktop:shadow-extra-small-cards" style="background-image: linear-gradient(to bottom right, #E32CFF, #FF7171);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="39.557" height="31.646" viewBox="0 0 39.557 31.646"><path d="M38.6,6H6.956A3.95,3.95,0,0,0,3.02,9.956L3,33.69a3.967,3.967,0,0,0,3.956,3.956H38.6a3.967,3.967,0,0,0,3.956-3.956V9.956A3.967,3.967,0,0,0,38.6,6ZM28.712,33.69H6.956V25.779H28.712Zm0-9.889H6.956V15.889H28.712ZM38.6,33.69H30.69v-17.8H38.6Z" transform="translate(-3 -6)" fill="#fff"/></svg>
                        </div>
                        <p class="font-medium text-sm">Website</p>
                    </a>
                </div>
            </div>

            <div class="block my-12 md:hidden">
                <img src="{{ asset('img/table-meeting.png') }}" alt="Business People at table">
            </div>

            <div class="text-gray-750 bg-white desktop:w-835 px-20 desktop:px-4 py-8 desktop:pl-12 desktop:pt-9 desktop:pb-24 desktop:mb-28 desktop:rounded-4xl desktop:shadow-big-cards">
                <h3 class="font-bold text-3xl text-center desktop:text-left">Related Resources</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-x-8 gap-y-8 mt-20">
                    <a href="https://www.bill.com/" target="_blank" class="p-4 w-full desktop:w-80 h-40 rounded-2xl-1/2 desktop:shadow-long-cards" style="background-image: linear-gradient(to bottom right, #FF2C49, #C171FF);">
                        <div class="text-white text-right text-xl">
                            <i class="fa fa-external-link" aria-hidden="true"></i>
                        </div>
                        <p class="font-medium text-lg text-white">Lorem ipsum
                            dolor sit amet consectetur adipiscing elit sit amet consectetur adipiscing elit..</p>
                    </a>
                    <a href="https://www.bill.com/" target="_blank" class="p-4 w-full desktop:w-80 h-40 rounded-2xl-1/2 desktop:shadow-long-cards" style="background-image: linear-gradient(to bottom right, #95FF2C, #717AFF);">
                        <div class="text-white text-right text-xl">
                            <i class="fa fa-external-link" aria-hidden="true"></i>
                        </div>
                        <p class="font-medium text-lg text-white">Lorem ipsum
                            dolor sit amet consectetur adipiscing elit sit amet consectetur adipiscing elit..</p>
                    </a>
                    <a href="https://www.bill.com/" target="_blank" class="p-4 w-full desktop:w-80 h-40 rounded-2xl-1/2 desktop:shadow-long-cards" style="background-image: linear-gradient(to bottom right, #632CFF, #71FFEC);">
                        <div class="text-white text-right text-xl">
                            <i class="fa fa-external-link" aria-hidden="true"></i>
                        </div>
                        <p class="font-medium text-lg text-white">Lorem ipsum
                            dolor sit amet consectetur adipiscing elit sit amet consectetur adipiscing elit..</p>
                    </a>
                </div>
            </div>
        </div>

    </section>

{{-- background image --}}
    <div class="absolute top-0 min-w-screen-3xl h-full">
        <img class="absolute top-1/2 transform -translate-y-1/2" style="right: -865px;" src="{{ asset('img/bg-hero.svg') }}" alt="Hero Image">
    </div>
</main>