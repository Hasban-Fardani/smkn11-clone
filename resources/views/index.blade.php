@extends('layouts.app')

@section('content')
    <x-carousel />

    {{-- <!-- Program Keahlian -->
   <section class="py-12 px-4 md:px-8 lg:px-14 w-screen">

   </section> --}}

    <!-- Program Keahlian -->
    <section class="py-12 px-4 md:px-8 lg:px-14 w-screen">
        <h2 class="text-2xl font-bold text-center">PROGRAM KEAHLIAN</h2>
        <div class="flex justify-center items-center">
            <div class="grid lg:grid-rows-3 lg:grid-cols-3 mt-8 w-full justify-items-center gap-4">
                <div class="w-full h-[210px] border rounded-lg">
                    <div class="border-b p-4">
                        <x-icon name="banknotes" class="w-10 h-10">
                            <x-slot:right>
                                <h3 class="text-lg font-semibold">
                                    AKUNTANSI DAN KEUANGAN LEMBAGA
                                </h3>
                            </x-slot:right>
                        </x-icon>
                    </div>
                    <p class="p-4">
                        Pembelajaran Neraca Balance, Buku Besar, Myob, Excel dan seputar keuangan dan akuntansi
                    </p>
                </div>

                <div class="w-full h-[210px] border rounded-lg">
                    <div class="border-b p-4">
                        <x-icon name="calendar" class="w-10 h-10">
                            <x-slot:right>
                                <h3 class="text-lg font-semibold">
                                    MANAJEMEN PERKANTORAN DAN LAYANAN BISNIS
                                </h3>
                            </x-slot:right>
                        </x-icon>
                    </div>
                    <p class="p-4">
                        Pembelajaran Pengadministrasian Dokumen, Microsoft Office, Mengetik Cepat, dan seputar administrasi
                        perkantoran
                    </p>
                </div>

                <div class="w-full h-[210px] border rounded-lg">
                    <div class="border-b p-4">
                        <x-icon name="building-storefront" class="w-10 h-10">
                            <x-slot:right>
                                <h3 class="text-lg font-semibold">
                                    PEMASARAN
                                </h3>
                            </x-slot:right>
                        </x-icon>
                    </div>
                    <p class="p-4">
                        Pembelajaran Bisnis Online, Kasir, Display Produk, Marketing, dan seputar pemasaran
                    </p>
                </div>

                <div class="w-full h-[210px] border rounded-lg">
                    <div class="border-b p-4">
                        <x-icon name="truck" class="w-10 h-10">
                            <x-slot:right>
                                <h3 class="text-lg font-semibold">
                                    MANAJEMEN LOGISTIK
                                </h3>
                            </x-slot:right>
                        </x-icon>
                    </div>
                    <p class="p-4">
                        Pembelajaran Administrasi Gudang, Warehouse, Ekspedisi, dan seputar logistik
                    </p>
                </div>

                <div class="w-full h-[210px] border rounded-lg">
                    <div class="border-b p-4">
                        <x-icon name="code-bracket" class="w-10 h-10">
                            <x-slot:right>
                                <h3 class="text-lg font-semibold">
                                    PENGEMBANGAN PERANGKAT LUNAK DAN GIM
                                </h3>
                            </x-slot:right>
                        </x-icon>
                    </div>
                    <p class="p-4">
                        Pembelajaran Pemograman Dasar, Basis Data, Web Service, Android Service, dan seputar perangkat lunak
                    </p>
                </div>

                <div class="w-full h-[210px] border rounded-lg">
                    <div class="border-b p-4">
                        <x-icon name="banknotes" class="w-10 h-10">
                            <x-slot:right>
                                <h3 class="text-lg font-semibold">
                                    DESAN KOMUNIKASI VISUAL
                                </h3>
                            </x-slot:right>
                        </x-icon>
                    </div>
                    <p class="p-4">
                        Pembelajaran Edit, Video, Photo, UI/UX, Broadcasting, AR/VR dan seputar multimedia
                    </p>
                </div>
                <div class="w-full h-[210px] border rounded-lg">
                    <div class="border-b p-4">
                        <x-icon name="computer-desktop" class="w-10 h-10">
                            <x-slot:right>
                                <h3 class="text-lg font-semibold">
                                    TEKNIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI
                                </h3>
                            </x-slot:right>
                        </x-icon>
                    </div>
                    <p class="p-4">
                        Pembelajaran Komputer, Sistem Operasi, Jaringan, Telekomunikasi dan seputar komputer jaringan
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Postingan terkini -->
    <section class="py-12 px-4 md:px-8 lg:px-14 w-screen">
        <h2 class="text-2xl font-bold text-center">POSTINGAN TERKINI</h2>
        <div class="overflow-x-scroll pb-8" id="posts">
           <div class="flex w-fit gap-4 mt-8 ">
               <a class="group w-96 h-96" href="/">
                   <div class="group relative overflow-hidden rounded-xl ">
                       <img src="https://picsum.photos/1000/1000" alt=""
                           class="duration-200 group-hover:scale-105 object-cover">
                       <div
                           class="absolute inset-0 flex flex-col justify-end gap-2 bg-gradient-to-b from-transparent from-50% to-sky-900 p-4 rounded-b-xl">
                           <h3>Judul</h3>
                           <p>Deskripsi</p>
                       </div>
                   </div>
               </a>
               <a class="group w-96 h-96" href="/">
                  <div class="group relative overflow-hidden rounded-xl ">
                      <img src="https://picsum.photos/1000/1000" alt=""
                          class="duration-200 group-hover:scale-105 object-cover">
                      <div
                          class="absolute inset-0 flex flex-col justify-end gap-2 bg-gradient-to-b from-transparent from-50% to-sky-900 p-4 rounded-b-xl">
                          <h3>Judul</h3>
                          <p>Deskripsi</p>
                      </div>
                  </div>
              </a>
              <a class="group w-96 h-96" href="/">
               <div class="group relative overflow-hidden rounded-xl ">
                   <img src="https://picsum.photos/1000/1000" alt=""
                       class="duration-200 group-hover:scale-105 object-cover">
                   <div
                       class="absolute inset-0 flex flex-col justify-end gap-2 bg-gradient-to-b from-transparent from-50% to-sky-900 p-4 rounded-b-xl">
                       <h3>Judul</h3>
                       <p>Deskripsi</p>
                   </div>
               </div>
            </a>
               <a class="group w-96 h-96" href="/">
                   <div class="group relative overflow-hidden rounded-xl ">
                       <img src="https://picsum.photos/1000/1000" alt=""
                           class="duration-200 group-hover:scale-105 object-cover">
                       <div
                           class="absolute inset-0 flex flex-col justify-end gap-2 bg-gradient-to-b from-transparent from-50% to-sky-900 p-4 rounded-b-xl">
                           <h3>Judul</h3>
                           <p>Deskripsi</p>
                       </div>
                   </div>
               </a>
               <a class="group w-96 h-96" href="/">
                   <div class="group relative overflow-hidden rounded-xl ">
                       <img src="https://picsum.photos/1000/1000" alt=""
                           class="duration-200 group-hover:scale-105 object-cover">
                       <div
                           class="absolute inset-0 flex flex-col justify-end gap-2 bg-gradient-to-b from-transparent from-50% to-sky-900 p-4 rounded-b-xl">
                           <h3>Judul</h3>
                           <p>Deskripsi</p>
                       </div>
                   </div>
               </a>
           </div>
        </div>
    </section>

    
@endsection
@push('styles')
<style>
/* width */
::-webkit-scrollbar {
    width: 10px;
}
 
/* Track */
::-webkit-scrollbar-track {
    background: #f1f1f1;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 5px;
}
 
/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #555;
}
</style>
@endpush