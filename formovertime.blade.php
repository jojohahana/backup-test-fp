@extends('_layout.uside-master')
@section('title', 'Overtime')

@section('content')
<section class="pt-32 pb-32">
  <div class="container">
    <div class="flex flex-wrap">
      <!-- FORM ENTRY OVERTIME START  -->
        <div class="w-full self-start px-4 lg:w-1/2">
          <div class="mx-auto mb-7 max-w-xl px-4">
            <h2 class="text-xl font-bold text-slate-800 text-center mb-2 px-4">Form Overtime</h2>
            <p class="text-sm font-semibold">Perhatikan maksimal pengajuan form sebelum mengajukan permintaan.</p>
          </div>
            <!-- Form Entry Overtime Start -->
            <form>
              <div class="w-full">
                <div class="w-full mb-3 px-4">
                  <label for="nameuser" class="text-base font-semibold">NIK</label>
                  <input type="text" class="w-full rounded-md bg-slate-100 text-dark focus:border-primary focus:outline-double focus:ring-1 focus:ring-primary">
                </div>
                <div class="w-full mb-3 px-4">
                  <label for="nameuser" class="text-base font-semibold">Nama</label>
                  <input type="text" class="w-full rounded-md bg-slate-100 text-dark focus:border-primary focus:outline-double focus:ring-1 focus:ring-primary">
                </div>
                <div class="w-full mb-3 px-4">
                  <label for="nameuser" class="text-base font-semibold">Dept</label>
                  <input type="text" class="w-full rounded-md bg-slate-100 text-dark focus:border-primary focus:outline-double focus:ring-1 focus:ring-primary">
                </div>
                <div class="w-full mb-3 px-4">
                  <label for="nameuser" class="text-base font-semibold">Tanggal</label>
                  <input type="text" class="w-full rounded-md bg-slate-100 text-dark focus:border-primary focus:outline-double focus:ring-1 focus:ring-primary">
                </div>
                <div class="w-full mb-3 px-4">
                  <label for="nameuser" class="text-base font-semibold">Jam</label>
                  <input type="text" class="w-full rounded-md bg-slate-100 text-dark focus:border-primary focus:outline-double focus:ring-1 focus:ring-primary">
                </div>
              </div>
            </form>
            <!-- Form Entry Overtime End  -->
            <!-- Button Submit - Clear  Mobile Verse Start -->
            <div class="grid grid-cols-2 gap-4 mt-14 visible text-center px-4">
              <a href="#" class="rounded-full bg-[#2632A5] text-white py-3 px-6 text-base font-semibold">Submit</a>
              <a href="#" class="rounded-full bg-[#F95252] text-white py-3 px-6 text-base font-semibold">Clear</a>
            </div>
            <!-- Button Submit - Clear Mobile Verse End  -->
        </div>  
      <!-- FORM ENTRY OVERTIME END  -->

      <!-- FORM CHECK OVERTIME START  -->
        <div class="w-full self-start px-4 mt-10 border border-t-4 border-red-700 lg:mt-0 lg:w-1/2">
          <div class="mx-auto mb-7 max-w-xl px-4">
            <h2 class="text-xl font-bold text-gray-800 text-center mb-2 px-4">Check Overtime</h2>
            <p class="text-sm font-semibold">Check Status Overtime untuk mengetahui apakah overtime sudah disetujui atau belum.</p>
          </div>
          <!-- Form Entry Check Status Overtime Start  -->
          <form>
            <div class="w-full">
              <div class="w-full mb-3 px-4">
                <label for="nikuserheck" class="text-base font-semibold">NIK</label>
                <input type="text" class="w-full rounded-xl bg-slate-100 text-dark focus:border-primary focus:outline-double focus:ring-1 focus:ring-primary">
              </div>
            </div>
          </form>
          <!-- Form Entry Check Status Overtime End  -->
          <!-- Button check overtime start  -->
          <div class="w-full px-4 mt-10">
            <button class="w-full bg-[#54CF85] py-3 px-8 text-base font-semibold rounded-full">Check Overtime</button>
          </div>
          <!-- Button check overtime end  -->
        </div>
      <!-- FORM CHECK OVERTIME END  -->

    </div> <!-- div flex -->
  </div> <!-- div container -->
</section>
@stop