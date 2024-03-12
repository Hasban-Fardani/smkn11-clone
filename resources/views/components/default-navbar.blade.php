<nav x-data="accordion(6)"
    class="bg-white text-black flex flex-wrap items-center justify-center w-full tracking-wide relative z-50">
    <div class="flex flex-wrap items-center justify-between w-full py-4 pb-6 px-4 md:px-8 lg:px-14">
        <!-- Left nav -->
        <div class="flex items-center">
            <a href="/" class="text-xl md:text-3xl tracking-wide flex items-center gap-2 font-bold">
                <x-logo />
                <h1>SMKN 11 BANDUNG</h1>
            </a>
        </div>
        <!-- End left nav -->

        <!-- Right nav -->
        <!-- Show menu sm,md -->
        <!-- Toggle button -->
        <div @click="handleClick()" x-data="{ open: false }" class="block text-gray-600 cursor-pointer lg:hidden">
            <!-- Hamburger button -->
            <button @click="open = ! open" class="w-6 h-6 text-lg">
                <svg x-show="! open" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"
                    :clas="{ 'transition-full each-in-out transform duration-500': !open }">
                    <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect>
                    <path d="M7.94977 11.9498H39.9498" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path d="M7.94977 23.9498H39.9498" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path d="M7.94977 35.9498H39.9498" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg>

                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-x">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>
        <!-- End toggle button -->

        <!-- Toggle menu -->
        <div x-ref="tab" :style="handleToggle()"
            class="relative w-full h-auto overflow-y-scroll transition-all duration-700 lg:hidden max-h-0">
            <!-- Dropdown menu -->
            <!-- TODO: dropdown content -->
            <div class="flex flex-col my-3 space-y-2 text-lg hover:font-b text-gray-600 z-50">
                <x-link href="/" class="hover:text-gray-900"><span class="uppercase">beranda</span></x-link>
                <hr>
                <details class="d-dropdown">
                    <summary class="m-1 uppercase">profile</summary>
                    <ul class="p-2 d-menu dropdown-content z-[1] bg-base-100 w-full uppercase">
                        <li><a>Tentang</a></li>
                        <li><a>struktur organisasi</a></li>
                        <li><a>guru dan tenaga kependidikan</a></li>
                        <li><a>sarana dan prasarana</a></li>
                    </ul>
                </details>
                <hr>
                <details class="d-dropdown">
                    <summary class="m-1 uppercase">dunia industri</summary>
                    <ul class="p-2 d-menu dropdown-content z-[1] bg-base-100 w-full uppercase">
                        <li><a>industri kerjasama</a></li>
                        <li><a>bursa kerja</a></li>
                    </ul>
                </details>
                <hr>
                <details class="d-dropdown">
                    <summary class="m-1 uppercase">pojok siswa</summary>
                    <ul class="p-2 d-menu dropdown-content z-[1] bg-base-100 w-full uppercase">
                        <li><a>ekstrakulikuler</a></li>
                        <li><a>penghargaan</a></li>
                    </ul>
                </details>
                <hr>
                <details class="d-dropdown">
                    <summary class="m-1 uppercase">program keahlian</summary>
                    <ul class="p-2 d-menu dropdown-content z-[1] bg-base-100 w-full uppercase">
                        <li><a>akuntansi dan keuangan lembaga</a></li>
                        <li><a>manajemen perkantoran dan layanan bisnis</a></li>
                        <li><a>pemasaran</a></li>
                        <li><a>pengembangan perangkat lunak dan gim</a></li>
                        <li><a>desain komunikasi visual</a></li>
                        <li><a>teknik jaringan komputer dan telekomunikasi</a></li>
                    </ul>
                </details>
                <hr>
                <details class="d-dropdown">
                    <summary class="m-1 uppercase">program unggulan</summary>
                    <ul class="p-2 d-menu dropdown-content z-[1] bg-base-100 w-full uppercase">
                        <li><a>sekolah pusat unggulan</a></li>
                        <li><a>badan layanan usaha daerah</a></li>
                        <li><a>sekolah pencetak wirausaha</a></li>
                    </ul>
                </details>
                <hr>
                <x-link href="/" class="hover:text-gray-900"><span class="uppercase">Kontak</span></x-link>
            </div>
        </div>
        <!-- End toggle menu -->
        <!-- End show menu sm,md -->

        <div class="hidden w-full lg:flex lg:items-center lg:w-auto">
            <div class="items-center flex-1 pt-6 justify-center text-base gap-4 lg:pt-0 list-reset lg:flex">
                <div class="flex flex-col pr-2 border-r">
                    <span class="text-sm">
                        Telp
                    </span>
                    <span class="font-semibold">
                        022-6652442
                    </span>
                </div>
                <div class="flex flex-col pr-2 border-r">
                    <span class="text-sm">
                        Email
                    </span>
                    <span class="font-semibold">
                        smkn11bdg@gmail.com
                    </span>
                </div>
                <div class="flex flex-col">
                    <span class="text-sm">
                        Fax
                    </span>
                    <span class="font-semibold">
                        022-6613508
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- End right nav -->
    <!-- Show Menu lg -->
    <!-- TODO: urls -->
    <div class="hidden w-full lg:flex lg:items-center bg-blue-500 justify-between md:px-8 lg:px-14">
        <div class="w-full justify-between items-center pt-6 text-lg lg:pt-0 list-reset lg:flex">
            <!-- BERANDA -->
            <x-button href="/"
                class="font-semibold text-white bg-transparent hover:bg-transparent">BERANDA</x-button>
            <!-- END BERANDA -->

            <!-- Dropdown PROFILE -->
            <div x-data="{ open: false }" @mouseleave="open = false" class="relative inline-block"
                :class="{ 'text-gray-200': open, 'text-white': !open }">
                <!-- Dropdown Toggle Button -->
                <button @mouseover="open = true" class="flex items-center p-2 rounded-md">
                    <span class="mr-4 font-semibold">PROFILE</span>
                    <span :class="open = !open ? '' : '-rotate-180'"
                        class="transition-transform duration-500 transform">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </span>
                </button>
                <!-- End Dropdown Toggle Button -->

                <!-- Dropdown Menu -->
                <div x-show="open" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-90"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-90"
                    class="absolute left-1/2 transform -translate-x-1/2 py-1 text-gray-900 bg-white shadow-xl min-w-max border-t-4 border-t-yellow-500">
                    <a href="{{ route('tentang') }}"
                        class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100 border-b">TENTANG</a>
                    <a href="{{ route('struktur-organisasi') }}"
                        class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100 border-b">STRUKTUR
                        ORGANISASI</a>
                    <a href="{{ route('guru-dan-tenaga-kependidikan') }}"
                        class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100 border-b">GURU DAN
                        TENAGA KEPENDIDIKAN</a>
                    <a href="{{ route('sarana-dan-prasarana') }}"
                        class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100">SARANA DAN
                        PRASARANA</a>
                </div>
                <!-- End Dropdown Menu -->
            </div>
            <!-- End Dropdown PROFILE -->

            <!-- Dropdown DUNIA INDUSTRI -->
            <div x-data="{ open: false }" @mouseleave="open = false" class="relative inline-block"
                :class="{ 'text-gray-200': open, 'text-white': !open }">
                <!-- Dropdown Toggle Button -->
                <button @mouseover="open = true" class="flex items-center p-2 rounded-md">
                    <span class="mr-4 font-semibold">DUNIA INDUSTRI</span>
                    <span :class="open = !open ? '' : '-rotate-180'"
                        class="transition-transform duration-500 transform">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </span>
                </button>
                <!-- End Dropdown Toggle Button -->

                <!-- Dropdown Menu -->
                <div x-show="open" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-90"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-90"
                    class="absolute left-1/2 transform -translate-x-1/2 py-1 text-gray-900 bg-white shadow-xl min-w-max border-t-4 border-t-yellow-500">
                    <a href="#" class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100 border-b">INDUSTRI
                        KERJASAMA</a>
                    <a href="#" class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100">BURSA KERJA</a>
                </div>
                <!-- End Dropdown Menu -->
            </div>
            <!-- End Dropdown DUNIA INDUSTRI -->

            <!-- Dropdown POJOK SISWA -->
            <div x-data="{ open: false }" @mouseleave="open = false" class="relative inline-block"
                :class="{ 'text-gray-200': open, 'text-white': !open }">
                <!-- Dropdown Toggle Button -->
                <button @mouseover="open = true" class="flex items-center p-2 rounded-md">
                    <span class="mr-4 font-semibold">POJOK SISWA</span>
                    <span :class="open = !open ? '' : '-rotate-180'"
                        class="transition-transform duration-500 transform">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </span>
                </button>
                <!-- End Dropdown Toggle Button -->

                <!-- Dropdown Menu -->
                <div x-show="open" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-90"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-90"
                    class="absolute left-1/2 transform -translate-x-1/2 py-1 text-gray-900 bg-white shadow-xl min-w-max border-t-4 border-t-yellow-500">
                    <a href="#"
                        class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100 border-b">EXTRAKULIKULER</a>
                    <a href="#" class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100">PENGHARGAAN</a>
                </div>
                <!-- End Dropdown Menu -->
            </div>
            <!-- End Dropdown POJOK SISWA -->

            <!-- Dropdown PROGRAM KEAHLIAN -->
            <div x-data="{ open: false }" @mouseleave="open = false" class="relative inline-block"
                :class="{ 'text-gray-200': open, 'text-white': !open }">
                <!-- Dropdown Toggle Button -->
                <button @mouseover="open = true" class="flex items-center p-2 rounded-md">
                    <span class="mr-4 font-semibold">PROGRAM KEAHLIAN</span>
                    <span :class="open = !open ? '' : '-rotate-180'"
                        class="transition-transform duration-500 transform">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </span>
                </button>
                <!-- End Dropdown Toggle Button -->

                <!-- Dropdown Menu -->
                <div x-show="open" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-90"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-90"
                    class="absolute left-1/2 transform -translate-x-1/2 py-1 text-gray-900 bg-white shadow-xl min-w-max border-t-4 border-t-yellow-500">
                    <a href="#" class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100 border-b">
                        AKUNTANSI DAN KEUANGAN LEMBAGA
                    </a>
                    <a href="#" class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100 border-b">
                        MANAJEMEN PERKANTORAN DAN LAYANAN BISNIS
                    </a>
                    <a href="#" class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100 border-b">
                        PEMASARAN
                    </a>
                    <a href="#" class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100 border-b">
                        PENGEMBANGAN PERANGKAT LUNAK DAN GIM
                    </a>
                    <a href="#" class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100 border-b">
                        DESAIN KOMUNIKASI VISUAL
                    </a>
                    <a href="#" class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100">
                        TEKNIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI
                    </a>
                </div>
                <!-- End Dropdown Menu -->
            </div>
            <!-- End Dropdown PROGRAM KEAHLIAN -->

            <!-- Dropdown PROGRAM KEAHLIAN -->
            <div x-data="{ open: false }" @mouseleave="open = false" class="relative inline-block"
                :class="{ 'text-gray-200': open, 'text-white': !open }">
                <!-- Dropdown Toggle Button -->
                <button @mouseover="open = true" class="flex items-center p-2 rounded-md">
                    <span class="mr-4 font-semibold">PROGRAM KEUNGGULAN</span>
                    <span :class="open = !open ? '' : '-rotate-180'"
                        class="transition-transform duration-500 transform">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </span>
                </button>
                <!-- End Dropdown Toggle Button -->

                <!-- Dropdown Menu -->
                <div x-show="open" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-90"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-90"
                    class="absolute left-1/2 transform -translate-x-1/2 py-1 text-gray-900 bg-white shadow-xl min-w-max border-t-4 border-t-yellow-500">
                    <a href="#" class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100 border-b">SEKOLAH
                        PUSAT UNGGULAN</a>
                    <a href="#" class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100 border-b">BADAN
                        LAYANAN USAHA DAERAH</a>
                    <a href="#" class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100">SEKOLAH PENCETAK
                        WIRAUSAHA</a>
                </div>
                <!-- End Dropdown Menu -->
            </div>
            <!-- End Dropdown PROGRAM KEAHLIAN -->

            <x-button href="{{ route('kontak') }}"
                class="font-semibold text-white bg-transparent hover:bg-transparent">KONTAK</x-button>
        </div>
    </div>
    <!-- End show Menu lg -->
</nav>

@push('js')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('accordion', {
                tab: 0
            });
            Alpine.data('accordion', (idx) => ({
                init() {
                    this.idx = idx;
                },
                idx: -1,
                handleClick() {
                    this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
                },
                handleRotate() {
                    return this.$store.accordion.tab === this.idx ? '-rotate-180' : '';
                },
                handleToggle() {
                    return this.$store.accordion.tab === this.idx ?
                        `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                }
            }));
        })
    </script>
@endpush
