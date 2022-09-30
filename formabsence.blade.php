@extends('_layout.uside-master')
@section('title', 'Absence')

@section('content')
<section class="pt-32 pb-32">
  <div class="container">
    <div class="flex flex-wrap">
      <!-- FORM ENTRY ABSENCE START  -->
        <div class="w-full self-start px-4">
          <div class="mx-auto mb-7 max-w-xl px-4">
            <h2 class="text-xl font-bold text-slate-800 text-center mb-2 px-4">Form Izin Sakit</h2>
            <p class="text-sm font-semibold">Perhatikan maksimal pengajuan form sebelum mengajukan permintaan.</p>
          </div>
            <!-- Form Entry Absence Start -->
            <form>
              <div class="grid md:grid-cols-3 md:gap-6">
                <div class="relative z-0 mb-6 w-full group">
                  <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                  <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">NIK</label>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                  <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                  <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                  <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                  <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Department</label>
                </div>
              </div>
              <div class="grid md:grid-cols-3 md:gap-6">
                
              </div>
            </form>
            <!-- Form Entry Absence End  -->


            <!-- Button Submit - Clear  Mobile Verse Start -->
            <div class="grid grid-cols-2 gap-4 mt-14 visible text-center px-4">
              <a href="#" class="rounded-full bg-[#2632A5] text-white py-3 px-6 text-base font-semibold">Submit</a>
              <a href="#" class="rounded-full bg-[#F95252] text-white py-3 px-6 text-base font-semibold">Clear</a>
            </div>
            <!-- Button Submit - Clear Mobile Verse End  -->
        </div>  
      <!-- FORM ENTRY ABSENCE END  -->

    </div> <!-- div flex -->
  </div> <!-- div container -->
</section>
@stop