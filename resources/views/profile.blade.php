@extends('layouts.app')

@section('content')
    <x-section>
        <div class="flex flex-wrap lg:flex-nowrap gap-8">
            <div class="lg:w-1/2">
                <h2 class="font-bold text-3xl uppercase">TENTANG SMKN 11 BANDUNG</h2>
                <p class="text-sm  text-gray-600 mt-4 leading-6">
                    SMK Negeri 11 Bandung merupakan salah satu Lembaga Pendidikan Menengah Kejuruan di Kota Bandung, Jawa
                    Barat. SMKN 11 Bandung dipercaya pada tahun 2021 menjadi salah satu sekolah menegah kejuruan di
                    Indonesia yang menjadi Sekolah Pusat Keunggulan di bidang Hospitality jurusan Manajemen Perkantoran dan
                    Layanan Bisnis. Selain itu SMKN 11 Bandung menjadi salah satu dari 35 sekolah di Jawa Barat yang menjadi
                    sekolah Badan Layanan Usaha Daerah Provinsi Jawa Barat.
                </p>
                <p class="text-sm  text-gray-600 mt-4 leading-6">
                    Selain itu program - program unggulan lain seperti Sekolah Pencetak Wirausaha, Teaching Factory,
                    Inkubasi Start Up, Roots Indonesia - Let's Fight Bullying dan masih banyak lagi program unggulan untuk
                    memajukan sumber daya manusia termasuk Siswa, Guru dan Tenaga Kependidikan
                </p>
            </div>
            <div class="lg:w-1/2">
                <h2 class="font-bold text-3xl uppercase">Landasan</h2>
                <p class="text-sm  text-gray-600 mt-4 leading-6 mb-4">
                    SMK Negeri 11 Bandung mempunyai visi, misi, dan sejarah yang menjadi landasan utama kami untuk pelayanan
                    pendidikan yang dapat menghasilkan SDM berkualitas.
                </p>

                <x-tab selected="Misi" :personalize="[
                    'wrapper' => [
                        'replace' => [
                            'rounded-lg' => 'rounded-none'
                        ]
                    ]
                ]">
                    <x-tab.items tab="Misi">
                        <p>Menghasilkan lulusan yang berahlak mulia, peduli lingkungan hidup, mandiri, tangguh dalam
                            berwirausaha, menguasai teknologi, dan siap bersaing di industri dunia usaha dan dunia kerja
                            (IDUKA) tingkat nasional maupun internasional pada tahun 2024.</p>
                    </x-tab.items>
                    <x-tab.items tab="Visi">
                        <ul class="list-disc px-4">
                            <li>
                                Meningkatkan keimanan dan ketaqwaan kepada Tuhan Yang Maha esa.
                            </li>
                            <li>
                                Mengembangkan kurikulum implementatif melalui penyelarasan kurikulum dengan IDUKA berskala
                                nasional dan internasional.
                            </li>
                            <li>
                                Meningkatkan kualitas manajemen dan sumber daya manusia.
                            </li>
                            <li>
                                Meningkatkan kompetensi pendidik dan tenaga kependidikan melalui pelatihan di dalam dan luar
                                negeri.
                            </li>
                            <li>
                                Meningkatkan kepedulian peserta didik akan lingkungan hidup.
                            </li>
                            <li>
                                Penguatan pendidikan karakter di setiap mata pelajaran.
                            </li>
                            <li>
                                Meningkatkan pengembangan program kewirausahaan.
                            </li>
                            <li>
                                Meningkatkan kualitas pelayanan pendidikan dan pelatihan berbasis teknologi industri 4.0.
                            </li>
                            <li>
                                Meningkatkan kualitas dan kuantitas sarana dan prasarana pendidikan mengacu pada IDUKA
                            </li>
                            <li>
                                Meningkatkan kerjasama dengan pihak IDUKA berskala nasional maupun internasional
                            </li>
                            <li>
                                Meningkatkan keterserapan tamatan pada IDUKA berskala nasional dan internasional
                            </li>
                        </ul>
                    </x-tab.items>
                    <x-tab.items tab="Sejarah">
                        Keberadaan SMK Negeri 11 Bandung, diawali dengan berdirinya SMEA Cimahi sebagai Filial SMEA Negeri 1
                        Negeri Bandung pada tahun 1968, dengan menempati SMP Negeri 2 Cimahi, kemudian pindah menempati SD
                        Utama Leuwi Gajah sampai dengan tahun 1969. Awal tahun 1970 sempat pindah menempati SMP Negeri 1
                        Cimahi sampai tanggal 1 April 1970. Sejak tanggal 1 April 1970 tersebut SMEA Cimahi mengawali
                        sejarah baru menempati bangunan, yang semula diperuntukkan untuk Sekolah Teknik, berlokasi di jalan
                        Budi Cilember. Tanggal 30 Juli 1980, dengan SK Mendikbud no 0207/0/1980, melepas status filialnya
                        menjadi SMEA Negeri Cimahi. Pada tanggal 7 April 1987 dengan SK Mendikbud RI (nomenklatur SMK),
                        nomor 036/0/1987 berubah nama menjadi SMK Negeri 11. Juni 2003, SMKN 11 membuka program keahlian
                        Rekayasa Perangkat Lunak, merupakan program re-engenering Dikmenjur. SMKN 11 Bandung berlokasi di
                        jalan Budi Cilember, kelurahan Sukaraja, Kecamatan Cicendo, berbatasan dengan Kota Cimahi. Jalan
                        Budi terletak di jalan raya Cilember, dari arah Bandung, terletak sebelah kanan, setelah melewati
                        jembatan Cimindi. Dari arah Jakarta, terdapat di sebelah kiri, sebelum jembatan Cimindi. Di Belakang
                        Radio LITA Fm Berdasarkan SK Mendiknas Nomor : 3587/C5.3/Kep/KU/2007 tanggal 27 Juli 2007 SMK Negeri
                        11 Bandung dinominasikan menjadi Rintisan Sekolah berstandar Internasional. Tahun 2007 merupakan era
                        baru dengan akan diterapkannya pencapaian visi lembaga berdasarkan profil Sekolah Berstandar
                        Internasional. Pada tanggal 03 Agustus 2008 memperoleh sertifikat ISO 9001:2000 , dengan sistem
                        manajemen mutu ISO 9001:2000, SMK Negeri 11 Bandung siap melayani dan melaksanakan peningkatan mutu
                        sumber daya pendidikan yang mampu bersaing di era global.
                    </x-tab.items>
                </x-tab>
            </div>
        </div>
    </x-section>
@endsection
