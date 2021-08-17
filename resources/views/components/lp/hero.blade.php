<main class="relative max-w-screen-3xl mx-auto overflow-x-hidden">

     <section class="flex flex-col relative max-w-screen-xl mx-auto md:flex-row lg:justify-between xl:justify-center xl:pt-32 xl:pb-52 z-10">

{{-- hero headings --}}
          <div class="bg-white bg-opacity-60 px-4 py-44 lg:px-28 xl:px-4 sm:m-0 md:mt-0 lg:mx-auto xl:mx-0 xl:w-605 xl:bg-transparent xl:bg-opacity-0 2xl:mx-0 2xl:p-0 sm:flex sm:flex-col sm:justify-center sm:items-center">
               <h3 class="w-full font-bold text-lg text-orange-550 xl:text-22">
                    FREE WHITEPAPER
               </h3>
               <h1 class="w-full text-4xl font-bold mt-3 text-blue-450 md:text-3xl lg:text-4xl xl:text-45 xl:leading-snug 2xl:text-58">
                    Gain Visibility, Control and Scalability for your High Net Worth Clients
               </h1>
               <p class="w-full text-xl md:text-2xl font-medium mt-10 xl:text-3xl sm:text-gray-750 xl:leading-10">
                    Why wealth management firms and family offices should offer bill pay services now.
               </p>
          </div>

{{-- hero form --}}
          <div>
               <div class="bg-white px-9 py-6 sm:rounded-3xl sm:min-w-460 sm:mx-auto md:rounded-none md:w-full xl:w-460 xl:ml-32 xl:rounded-4xl 2xl:mr-20" style="box-shadow: -23px 30px 60px rgba(0,0,0,0.17)">
                    <h3 class="text-center font-bold text-2xl text-gray-750 mb-4">Gain Access</h3>
                    <form action="">
                         <div class="pb-3.5">
                              <label for="first_name" class="sr-only">First Name</label>
                              <input type="text" class="w-full bg-gray-250 py-2.5 px-4 placeholder-gray-250 text-xl font-medium text-gray-500 focus:ring-cards-buttonHover focus:uttonHover 0 rounded-rg" name="first_name" id="first_name" placeholder="First Name" value="" required="true">
                         </div>
                         <div class="pb-3.5">
                              <label for="last_name" class="sr-only">Last Name</label>
                              <input type="text" class="w-full bg-gray-250 py-2.5 px-4 placeholder-gray-250 text-xl font-medium text-gray-500 focus:ring-cards-buttonHover focus:uttonHover 0 rounded-rg" name="last_name" id="last_name" placeholder="Last Name" value="" required="true">
                         </div>
                         <div class="pb-3.5">
                              <label for="business_email" class="sr-only">Business Email</label>
                              <input type="text" class="w-full bg-gray-250 py-2.5 px-4 placeholder-gray-250 text-xl font-medium text-gray-500 focus:ring-cards-buttonHover focus:uttonHover 0 rounded-rg" name="business_email" id="business_email" placeholder="Business Email" value="" required="true">
                         </div>
                         <div class="pb-3.5">
                              <label for="business_phone" class="sr-only">Business Phone</label>
                              <input type="text" class="w-full bg-gray-250 py-2.5 px-4 placeholder-gray-250 text-xl font-medium text-gray-500 focus:ring-cards-buttonHover focus:uttonHover 0 rounded-rg" name="business_phone" id="business_phone" placeholder="Business Phone" value="" required="true">
                         </div>
                         <div class="">
                              <label for="company_name" class="sr-only">Company Name</label>
                              <input type="text" class="w-full bg-gray-250 py-2.5 px-4 placeholder-gray-250 text-xl font-medium text-gray-500 focus:ring-cards-buttonHover focus:uttonHover 0 rounded-rg" name="company_name" id="company_name" placeholder="Company Name" value="" required="true">
                         </div>
                         <div class="mb-7">
                              <label for="employee_count" class="block font-medium text-xl text-gray-750 py-3">Number of Employees</label>
                              <select name="employee_count" class="w-full bg-gray-250 py-2.5 px-4 text-xl font-medium text-gray-500 placeholder-gray-350 focus:ring-cards-buttonHover focus:uttonHover 0 rounded-rg" required="true">
                                   <option value="" disabled="" selected="" >Select Option</option>
                                   <option value="1">1</option>
                                   <option value="2_to_10">2-10</option>
                                   <option value="11_to_25">11-25</option>
                                   <option value="26_to_50">26-50</option>
                                   <option value="51_to_100">51-100</option>
                                   <option value="101_to_250">101-250</option>
                                   <option value="251_to_500">251-500</option>
                                   <option value="500+">500+</option>
                              </select>
                         </div>
                         <div class="mb-12">
                              <button class="w-full font-bold text-2xl text-white rounded-rg py-5" style="background-image: linear-gradient(to right, #5B87EA , #6335E0);">Download Now</button>
                         </div>
                         <div>
                              <img src="{{ asset('img/bill.png') }}" alt="">
                         </div>
                    </form>
               </div>
          </div>

     </section>

{{-- background image --}}
     <div class="absolute top-0 left-0 w-full h-full">
          <div class="absolute left-0 bg-center bg-no-repeat bg-cover w-full h-full md:w-1/2 lg:w-3/5 xl:w-1/3 xl:left-auto xl:right-0 2xl:w-48" style="filter: blur(0.4375rem); background-image: url('{{ asset('img/meeting.png') }}')"></div>
     </div>

</main>