@extends('layouts.app')

@section('content')
    <section class="pb-12 relative">
        <img src="{{asset('images/gedungrps.jpeg')}}" alt="gedung rps" width="1600" height="500" class="object-cover object-center max-h-[500px] opacity-50 brightness-75" data-aos="fade-up">
        <div class="absolute top-1/2 -translate-y-2/3 left-1/2 -translate-x-1/2 w-screen uppercase px-2 py-4 text-white">
            <div class="backdrop-blur-sm backdrop-brightness-75 text-center" data-aos="fade-up">
                <p class="text-lg lg:text-2xl pt-6 px-4" data-aos="fade-up">"TEACHING, LOVING AND CARING each other"</p>
                <h2 class="text-3xl lg:text-5xl font-bold w-full pb-6 px-4" data-aos="fade-up">selamat datang di website smkn 11 bandung</h2>
            </div>
        </div>
    </section>
    <!-- Sambutan Kepala sekolah -->
    <x-section>
        <div class="flex gap-8 w-full flex-wrap lg:flex-nowrap">
            <div class="lg:w-1/2">
                <h2 class="font-bold text-3xl uppercase" data-aos="fade-up">Sambutan Kepala Sekolah</h2>
                <div class="mt-4" data-aos="fade-up">
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
                class="lg:w-1/2 h-[300px] object-center object-cover" data-aos="fade-up" alt="kepala sekolah" loading="lazy">
        </div>
    </x-section>

    <!-- Kerjasama industri -->
    <x-section>
        <h2 class="text-3xl font-bold text-center uppercase" data-aos="fade-up">Kerjasama industri</h2>
        <div class="flex justify-center gap-4 mt-8" data-aos="fade-up">
            <img src="{{ asset('images/clients/altra.png')}}" alt="altra" width="210" height="105">
            <img src="{{ asset('images/clients/djp.png')}}" alt="djp" width="210" height="105">
            <img src="{{ asset('images/clients/len.png')}}" alt="len" width="210" height="105">
            <img src="{{ asset('images/clients/millealab.png')}}" alt="millealab" width="210" height="105">
            <img src="{{ asset('images/clients/yogya.png')}}" alt="yogya" width="210" height="105">
        </div>
    </x-section>

    <!-- Info Sekolah -->
    <x-section-fluid data-aos="fade-up">
        <div class="flex flex-col justify-center text-center gap-4 max-w-40" data-aos="fade-up">
            <div class="justify-center">
                <x-icon name="users" class="w-12 h-12 text-white">
                    <x-slot:right>
                        <p class="text-3xl font-bold text-white">86</p>
                    </x-slot:right>
                </x-icon>
            </div>
            <p class="font-semibold text-white uppercase">GURU DAN TENAGA PENDIDIKAN</p>
        </div>
        <div class="flex flex-col justify-center text-center gap-4 max-w-40" data-aos="fade-up">
            <div class="justify-center">
                <x-icon name="academic-cap" class="w-12 h-12 text-white">
                    <x-slot:right>
                        <p class="text-3xl font-bold text-white">549</p>
                    </x-slot:right>
                </x-icon>
            </div>
            <p class="font-semibold text-white uppercase">Siswa kelas x</p>
        </div>
        <div class="flex flex-col justify-center text-center gap-4 max-w-40" data-aos="fade-up">
            <div class="justify-center">
                <x-icon name="academic-cap" class="w-12 h-12 text-white">
                    <x-slot:right>
                        <p class="text-3xl font-bold text-white">505</p>
                    </x-slot:right>
                </x-icon>
            </div>
            <p class="font-semibold text-white uppercase">siswa kelas xi</p>
        </div>
        <div class="flex flex-col justify-center text-center gap-4 max-w-40" data-aos="fade-up">
            <div class="justify-center">
                <x-icon name="academic-cap" class="w-12 h-12 text-white">
                    <x-slot:right>
                        <p class="text-3xl font-bold text-white">526</p>
                    </x-slot:right>
                </x-icon>
            </div>
            <p class="font-semibold text-white uppercase">siswa kelas xii</p>
        </div>
    </x-section-fluid>

    <!-- Program Keahlian -->
    <x-section>
        <h2 class="text-3xl font-bold text-center" data-aos="fade-up">PROGRAM KEAHLIAN</h2>
        <div class="flex justify-center items-center">
            <div class="grid lg:grid-rows-3 lg:grid-cols-3 mt-8 w-full justify-items-center gap-4">
                <div class="w-full h-[210px] border rounded-lg" data-aos="fade-up">
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

                <div class="w-full h-[210px] border rounded-lg" data-aos="fade-up">
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

                <div class="w-full h-[210px] border rounded-lg" data-aos="fade-up">
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

                <div class="w-full h-[210px] border rounded-lg" data-aos="fade-up">
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

                <div class="w-full h-[210px] border rounded-lg" data-aos="fade-up">
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

                <div class="w-full h-[210px] border rounded-lg" data-aos="fade-up">
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
                <div class="w-full h-[210px] border rounded-lg" data-aos="fade-up">
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
    </x-section>

    <!-- Berita terkini -->
    <x-section>
        <h2 class="text-3xl font-bold text-center uppercase" data-aos="fade-up">Berita TERKINI</h2>
        <x-button href="{{ route('posts.index') }}" text="Selengkapnya" icon="arrow-up-right" position="right" data-aos="fade-up"/>
        <div class="overflow-x-scroll pb-8" id="posts">
            <div class="flex w-fit gap-4 mt-8 ">
                @foreach ($posts as $post)
                    <div data-aos="fade-up">

                        <x-post-card
                            title="{{ $post->title }}"
                            description="{{ $post->description }}"
                            image="{{ $post->image }}"
                            category="{{ $post->category->name }}"
                            url="{{ route('posts.show', $post->slug) }}"
                        />
                    </div>
                @endforeach
            </div>
        </div>
    </x-section>
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
