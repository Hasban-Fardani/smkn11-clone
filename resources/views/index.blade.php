@extends('layouts.app')

@section('content')
    <!-- Carousel Section -->
    <section class="pb-12">
        <x-carousel />
    </section>

    <!-- Sambutan Kepala sekolah -->
    <section class="py-12 px-4 md:px-8 lg:px-14 w-screen">
        <div class="flex gap-8 w-full flex-wrap lg:flex-nowrap">
            <div class="lg:w-1/2">
                <h2 class="font-bold text-3xl uppercase">Sambutan Kepala Sekolah</h2>
                <div class="mt-4">
                    <p class="text-gray-600 text-lg text-justify">
                        Bismillaahirrohmaanirrohiim. Assalaamualaikum Warahmatullahi Wabarakatuh.
                        Alhamdulillahirobbilalamin puji serta syukur kami panjatkan kehadirat Allah SWT, karena atas berkat
                        limpahan rahmat dan karunia serta hidayah, website terbaru dari SMKN 11 Bandung dapat diakses untuk
                        memudahkan informasi serta pembelajaran dari sekolah kedepannya. Website salah satu media informasi
                        yang juga mendukungnya dan salah satu penopang content creatif sekolah sebagai sekolah pusat
                        keunggulan.
                    </p>
                    <x-link href="/" text="Selengkapnya" icon="arrow-up-right" position="right" class="mt-2" />
                </div>
            </div>
            <img src="/images/kepalasekolah.jpg" width="700" height="300"
                class="lg:w-1/2 h-[300px] object-center object-cover" alt="">
        </div>
    </section>

    <!-- Info Sekolah -->
    <section class="py-12 w-screen">
        <div class="flex flex-wrap gap-8 w-full justify-evenly bg-blue-600 py-6 px-4 md:px-8 lg:px-14 ">
            <div class="flex flex-col justify-center text-center gap-4 max-w-40">
                <div class="justify-center">
                    <x-icon name="users" class="w-12 h-12 text-white">
                        <x-slot:right>
                            <p class="text-3xl font-bold text-white">86</p>
                        </x-slot:right>
                    </x-icon>
                </div>
                <p class="font-semibold text-white uppercase">GURU DAN TENAGA PENDIDIKAN</p>
            </div>
            <div class="flex flex-col justify-center text-center gap-4 max-w-40">
                <div class="justify-center">
                    <x-icon name="academic-cap" class="w-12 h-12 text-white">
                        <x-slot:right>
                            <p class="text-3xl font-bold text-white">549</p>
                        </x-slot:right>
                    </x-icon>
                </div>
                <p class="font-semibold text-white uppercase">Siswa kelas x</p>
            </div>
            <div class="flex flex-col justify-center text-center gap-4 max-w-40">
                <div class="justify-center">
                    <x-icon name="academic-cap" class="w-12 h-12 text-white">
                        <x-slot:right>
                            <p class="text-3xl font-bold text-white">505</p>
                        </x-slot:right>
                    </x-icon>
                </div>
                <p class="font-semibold text-white uppercase">siswa kelas xi</p>
            </div>
            <div class="flex flex-col justify-center text-center gap-4 max-w-40">
                <div class="justify-center">
                    <x-icon name="academic-cap" class="w-12 h-12 text-white">
                        <x-slot:right>
                            <p class="text-3xl font-bold text-white">526</p>
                        </x-slot:right>
                    </x-icon>
                </div>
                <p class="font-semibold text-white uppercase">siswa kelas xii</p>
            </div>
        </div>
    </section>

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

    <!-- Berita terkini -->
    <section class="py-12 px-4 md:px-8 lg:px-14 w-screen">
        <h2 class="text-2xl font-bold text-center uppercase">Berita TERKINI</h2>
        <div class="overflow-x-scroll pb-8" id="posts">
            <div class="flex w-fit gap-4 mt-8 ">
                <x-post-card
                    title="Judul"
                    description="Deskripsi"
                    image="https://picsum.photos/1000/1000"
                    category="Kategori"
                    url="/" 
                />
                <x-post-card
                    title="Judul"
                    description="Deskripsi"
                    image="https://picsum.photos/1000/1000"
                    category="Kategori"
                    url="/" 
                />
                <x-post-card
                    title="Judul"
                    description="Deskripsi"
                    image="https://picsum.photos/1000/1000"
                    category="Kategori"
                    url="/" 
                />
                <x-post-card
                    title="Judul"
                    description="Deskripsi"
                    image="https://picsum.photos/1000/1000"
                    category="Kategori"
                    url="/" 
                />
                <x-post-card
                    title="Judul"
                    description="Deskripsi"
                    image="https://picsum.photos/1000/1000"
                    category="Kategori"
                    url="/" 
                />
            </div>
        </div>
        <x-button href="/" text="Selengkapnya" icon="arrow-up-right" position="right" class="mt-4" />
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
