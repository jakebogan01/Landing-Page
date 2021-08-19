<main class="relative max-w-screen-3xl mx-auto overflow-hidden">

    <section class="relative 2xl:flex max-w-screen-xl mx-auto pb-20 xl:py-24 z-20">

        <div class="xl:flex xl:flex-col xl:justify-center xl:items-center 2xl:justify-start 2xl:items-baseline">
            <div class="text-gray-750 bg-white xl:w-735 px-4 py-8 xl:pl-12 xl:pt-12 xl:pb-12 xl:mb-24 2xl:mb-28 xl:rounded-4xl xl:shadow-big-cards text-center xl:text-left">
                <h3 class="font-bold text-22">{{session('status')}},</h3>
                <h1 class="font-bold text-45 xl:text-73 mb-10">Thank You</h1>
                <p class="font-medium text-xl leading-8 px-16 xl:px-0">
                    Ready to see how <a href="https://www.bill.com/" target="_blank" class="text-blue-500"><b>Bill.com</b></a> can help your firm?
                    <br>
                    <span class="font-bold text-22">Schedule</span> a live, personalized demo by clicking the asset button below, or visit our website:
                </p>
                <div class="flex justify-center items-center xl:justify-start xl:items-baseline mt-20">
                    <a href="#" class="flex flex-col xl:flex-row justify-center items-center xl:py-4 xl:px-4 xl:w-185 rounded-2xl-1/2 mr-12 xl:mr-10 xl:shadow-small-cards">
                        <div class="w-20 h-20 mb-2 xl:mb-0 xl:mr-5 rounded-2xl-1/2 flex justify-center items-center xl:shadow-extra-small-cards" style="background-image: linear-gradient(to bottom right, #552CFF, #C171FF);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="39.587" height="32.164" viewBox="0 0 39.587 32.164"><path d="M24.838,10.732,19.89,5.784H2.571V37.948H42.157V10.732Zm-2.474,23.5-8.66-8.66H19.89v-9.9h4.948v9.9h6.185Z" transform="translate(-2.571 -5.784)" fill="#fff"/></svg>
                        </div>
                        <p class="font-medium text-sm">Asset</p>
                    </a>
                    <a href="https://www.bill.com/" target="_blank" class="flex flex-col xl:flex-row items-center xl:py-4 xl:px-4 xl:w-185 rounded-2xl-1/2 xl:shadow-small-cards">
                        <div class="w-20 h-20 mb-2 xl:mb-0 xl:mr-5 rounded-2xl-1/2 flex justify-center items-center xl:shadow-extra-small-cards" style="background-image: linear-gradient(to bottom right, #E32CFF, #FF7171);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="39.557" height="31.646" viewBox="0 0 39.557 31.646"><path d="M38.6,6H6.956A3.95,3.95,0,0,0,3.02,9.956L3,33.69a3.967,3.967,0,0,0,3.956,3.956H38.6a3.967,3.967,0,0,0,3.956-3.956V9.956A3.967,3.967,0,0,0,38.6,6ZM28.712,33.69H6.956V25.779H28.712Zm0-9.889H6.956V15.889H28.712ZM38.6,33.69H30.69v-17.8H38.6Z" transform="translate(-3 -6)" fill="#fff"/></svg>
                        </div>
                        <p class="font-medium text-sm">Website</p>
                    </a>
                </div>
            </div>

            <div class="block my-12 xl:m-0 2xl:hidden xl:w-735">
                <img class="xl:rounded-4xl" src="{{ asset('img/table-meeting.png') }}" alt="Business People at table">
            </div>

            <div class="text-gray-750 bg-white xl:w-735 px-12 sm:px-4 xl:px-4 py-8 xl:p-12 xl:pl-12 xl:mt-24 2xl:mt-0 xl:rounded-4xl xl:shadow-big-cards">
                <h3 class="font-bold text-3xl text-center xl:text-left">Related Resources</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-x-8 lg:grid-cols-3 xl:grid-cols-2 gap-y-8 mt-10 xl:w-606">
                    <x-resource-card style="background-image: linear-gradient(to bottom right, #FF2C49, #C171FF);">
                        Lorem ipsum dolor sit amet consectetur adipiscing elit sit amet elit..
                    </x-resource-card>
                    <x-resource-card style="background-image: linear-gradient(to bottom right, #632CFF, #71FFEC);">
                        Lorem ipsum dolor sit amet consectetur adipiscing elit sit amet elit..
                    </x-resource-card>
                    <x-resource-card style="background-image: linear-gradient(to bottom right, #95FF2C, #717AFF);">
                        Lorem ipsum dolor sit amet consectetur adipiscing elit sit amet elit..
                    </x-resource-card>
                </div>
            </div>
        </div>

        <div class="relative hidden 2xl:block mt-24 w-full">
            <img class="absolute right-0" src="{{ asset('img/asset.png') }}" alt="PDF Asset">
        </div>

    </section>

{{-- background image --}}
    <div class="absolute hidden 2xl:block top-0 min-w-screen-3xl h-full">
        <img class="absolute top-1/2 transform -translate-y-1/2 2xl:right-665 small-desktop:right-765 desktop:right-865" src="{{ asset('img/bg-hero.svg') }}" alt="Hero Image">
    </div>
</main>