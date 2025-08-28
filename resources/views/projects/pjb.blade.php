<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Home</title>
</head>

<body x-data="{ open: false, scaleSosmed: false }" class="bg-gray-200 flex flex-col min-h-screen">
    <!-- NAVBAR -->
    <div
        class="nav fixed top-0 left-0 w-full z-50 flex justify-between items-center bg-white py-4 px-6 md:px-16 rounded-b-lg shadow">

        <!-- Left (Logo & Name) -->
        <div class="flex items-center space-x-2">
            <img src="img/profile.jpg" class="size-12 rounded-full" />
            <p class="text-lg font-medium">M. Rasheed Muhyiddien</p>
        </div>

        <!-- Right (Menu) -->
        <ul class="hidden md:flex items-center space-x-6 font-medium text-lg">
            <li><a href="/" class="hover:text-blue-600 transition-all">HOME</a></li>
            <li><a href="/#about" class="hover:text-blue-600 transition-all">ABOUT</a></li>
            <li><a href="/projects" class="hover:text-blue-600 transition-all">PROJECTS</a></li>
            <li><a href="#" @click="scaleSosmed = true; setTimeout(() => scaleSosmed = false, 400)"
                    class="hover:text-blue-600">CONTACT</a>
            </li>
        </ul>

        <!-- Hamburger Button -->
        <button @click="open = !open" class="block md:hidden focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Side Navbar (mobile) -->
        <div x-show="open" @click.away="open = false"
            class="fixed top-0 right-0 h-full w-2/5 bg-white shadow-2xl z-50 p-6 transform transition-transform duration-300 ease-in-out block md:hidden"
            x-transition:enter="translate-x-full" x-transition:enter-start="translate-x-full"
            x-transition:enter-end="translate-x-0" x-transition:leave="translate-x-0"
            x-transition:leave-end="translate-x-full">
            <div class="flex justify-end mb-6 ">
                <button @click="open = false" class="text-3xl hover:text-gray-400">&times;</button>
            </div>
            <ul class="flex flex-col space-y-6 text-lg font-semibold">
                <li class="flex justify-between"><a href="/" class="hover:text-blue-600">HOME</a><span>&gt;</span></li>
                <li class="flex justify-between"><a href="/#about"
                        class="hover:text-blue-600">ABOUT</a><span>&gt;</span>
                </li>
                <li class="flex justify-between"><a href="/projects"
                        class="hover:text-blue-600">PROJECTS</a><span>&gt;</span>
                </li>
                <li class="flex justify-between">
                    <a href="#" @click="scaleSosmed = true; setTimeout(() => scaleSosmed = false, 400), open = false"
                        class="hover:text-blue-600">CONTACT</a><span>&gt;</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Contact oberlay -->
    <div x-show="scaleSosmed" x-transition.opacity.duration.300ms class="fixed inset-0 bg-black bg-opacity-40 z-40">
    </div>

    <!-- Contact Sidebar -->
    <div :class="scaleSosmed ? 'scale-125' : 'scale-100'"
        class="fixed left-4 top-1/2 -translate-y-1/2 bg-white rounded-lg shadow-2xl flex flex-col items-center justify-center transition-transform duration-300 origin-center p-1 z-50">
        <ul class="space-y-4 [&>*]:px-1 [&>*]:py-2 flex flex-col">
            <li>
                <a href="mailto:mrasheed.muhyiddien@gmail.com" onclick="if(window.innerWidth>768){
                window.open('https://mail.google.com/mail/?view=cm&fs=1&to=mrasheed.muhyiddien@gmail.com', '_blank');
                return false;
             }">
                    <img src="img/gmail-logo.png" class="size-10 transition-transform duration-300 hover:scale-125">
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/000mrasheed/" target="_blank">
                    <img src="img/instagram-logo.png" class="size-10 transition-transform duration-300 hover:scale-125">
                </a>
            </li>
            <li>
                <a href="https://www.linkedin.com/in/rasheed-muhyiddien-5a139b280/?originalSubdomain=id"
                    target="_blank">
                    <img src="img/linkedin-logo.png" class="size-10 transition-transform duration-300 hover:scale-125">
                </a>
            </li>
            <li>
                <a href="https://github.com/Rasheed151" target="_blank">
                    <img src="img/github-logo.png" class="size-10 transition-transform duration-300 hover:scale-125">
                </a>
            </li>
        </ul>
    </div>
    <main class="flex-grow my-32 px-4 sm:px-6 md:px-16">

        <div class="bg-white mx-2 sm:mx-8 md:mx-24 rounded-lg p-4 sm:p-6 shadow-lg">

            <!-- Judul -->
            <p class="text-center text-2xl sm:text-3xl md:text-4xl font-bold">
                Village Procurement Management System
            </p>

            <!-- Deskripsi -->
            <p class="text-base sm:text-lg md:text-xl font-semibold my-8 sm:my-12 leading-relaxed">
                This website is designed to assist village governments in managing their annual activities, starting
                from the initial community meetings (musyawarah) up to the handover of project results. The system
                provides structured data and documentation, making it easier for village officials to handle tasks such
                as document submission and instant document printing.
                <br><br>
                <b>Note:</b> This project was developed by a team of four during an <b>internship at PT Klipaa Solusi
                    Indonesia</b>. The author of this documentation was responsible for system workflow and programming,
                while the interface design was handled by another team member.
            </p>

            <!-- Guest Section -->
            <p class="font-bold text-lg sm:text-xl my-6 sm:my-12">
                Guest Access
                <span class="block font-normal text-gray-700">For users who have not logged in, access to the system is
                    limited. Only specific public pages are available to visitors, while full functionality can only be
                    accessed after successful authentication.</span>
            </p>

            <p class="font-bold text-lg my-4">Guest page:</p>
            <div class="space-y-6">
                <div class="flex justify-center">
                    <img src="img/p-pjb/guest-page1.png" class="w-full sm:w-3/4 md:w-1/2 lg:w-1/3 rounded-lg shadow">
                </div>
                <div class="flex justify-center">
                    <img src="img/p-pjb/guest-page2.png" class="w-full sm:w-3/4 md:w-1/2 lg:w-1/3 rounded-lg shadow">
                </div>
                <div class="flex justify-center">
                    <img src="img/p-pjb/guest-page3.png" class="w-full sm:w-3/4 md:w-1/2 lg:w-1/3 rounded-lg shadow">
                </div>
                <div class="flex justify-center">
                    <img src="img/p-pjb/login-page.png" class="w-full sm:w-3/4 md:w-1/2 lg:w-1/3 rounded-lg shadow">
                </div>
            </div>

            <!-- Main Modules -->
            <p class="text-center font-bold text-lg sm:text-xl my-12">
                Main Project Modules (Accessible After Login)
            </p>

            <div class="text-base sm:text-lg md:text-xl space-y-8 sm:space-y-12">

                <!-- Data Umum -->
                <div>
                    <p class="font-semibold text-lg sm:text-xl">1. Data Umum</p>
                    <p class="my-2 text-gray-700">
                        This module contains the village’s core identity and organizational structure, managed primarily
                        by the village secretary.
                    </p>
                    <ul class="list-disc ml-6 space-y-8 font-medium">
                        <li>
                            Data Desa – Village identity details such as office location, village head’s name, and
                            village code.
                            <div class="flex justify-center mt-2">
                                <img src="img/p-pjb/data-umum/profil-page.png"
                                    class="rounded-lg shadow w-full sm:w-3/4 md:w-1/2 lg:w-1/3">
                            </div>
                        </li>
                        <li>
                            Data Aparat Desa – List of village officials (head, secretary, treasurer, operators, etc.).
                            <div class="flex justify-center mt-2">
                                <img src="img/p-pjb/data-umum/general-data1.png"
                                    class="rounded-lg shadow w-full sm:w-3/4 md:w-1/2 lg:w-1/3">
                            </div>
                        </li>
                        <li>
                            Data PKA – Registered PKA members (automatically synchronized with Data Aparat Desa).
                            <div class="flex justify-center mt-2">
                                <img src="img/p-pjb/data-umum/general-data2.png"
                                    class="rounded-lg shadow w-full sm:w-3/4 md:w-1/2 lg:w-1/3">
                            </div>
                        </li>
                        <li>
                            Data TPK – Established TPK groups along with decree numbers (Nomor SK).
                            <div class="flex justify-center mt-2">
                                <img src="img/p-pjb/data-umum/general-data3.png"
                                    class="rounded-lg shadow w-full sm:w-3/4 md:w-1/2 lg:w-1/3">
                            </div>
                        </li>
                        <li>
                            Data Penyedia – List of providers who are officially registered to collaborate with the
                            village.
                            <div class="flex justify-center mt-2">
                                <img src="img/p-pjb/data-umum/general-data4.png"
                                    class="rounded-lg shadow w-full sm:w-3/4 md:w-1/2 lg:w-1/3">
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Data Perencanaan -->
                <div>
                    <p class="font-semibold text-lg sm:text-xl">2. Data Perencanaan</p>
                    <p class="my-2 text-gray-700">
                        This module records the results of village meetings (musyawarah) and outlines decisions
                        regarding upcoming activities, methods of execution, and responsible parties.
                    </p>
                    <ul class="list-disc ml-6 space-y-8 font-medium">
                        <li>
                            Bamusrenbangdes – Records of village planning discussions (participants, outcomes, etc.),
                            exportable to PDF.
                            <div class="flex justify-center mt-2">
                                <img src="img/p-pjb/data-perencanaan/plan-data1.png"
                                    class="rounded-lg shadow w-full sm:w-3/4 md:w-1/2 lg:w-1/3">
                            </div>
                        </li>
                        <li>
                            RKP – List of planned projects/activities including details such as name, scope, timeline,
                            method (Swakelola/Penyedia), and responsible person(s).
                            <div class="flex justify-center mt-2">
                                <img src="img/p-pjb/data-perencanaan/plan-data2.png"
                                    class="rounded-lg shadow w-full sm:w-3/4 md:w-1/2 lg:w-1/3">
                            </div>
                        </li>
                        <li>
                            Pengumuman – Official announcements declaring the commencement of activities and their
                            method of implementation.
                            <div class="flex justify-center mt-2">
                                <img src="img/p-pjb/data-perencanaan/plan-data3.png"
                                    class="rounded-lg shadow w-full sm:w-3/4 md:w-1/2 lg:w-1/3">
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Data Persiapan -->
                <div class="mt-12">
                    <p class="font-semibold text-lg sm:text-xl">3. Data Persiapan</p>
                    <p class="my-2 text-gray-700">
                        Preparation modules are divided into two categories: <b>Swakelola</b> (self-managed projects)
                        and <b>Penyedia</b> (projects through external providers).
                    </p>

                    <!-- Swakelola -->
                    <div class="mt-6">
                        <p class="font-semibold">Swakelola</p>
                        <div class="flex justify-center mt-2 mb-8">
                            <img src="img/p-pjb/data-persiapan/prepare-data1.png"
                                class="rounded-lg shadow w-full sm:w-3/4 md:w-1/2 lg:w-1/3">
                        </div>

                        <ul class="list-disc ml-6 space-y-6 font-normal">
                            <li>Spesifikasi Teknis
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-2 mb-8">
                                    <img src="img/p-pjb/data-persiapan/prepare-swakelola/1.1.png"
                                        class="rounded-lg shadow w-full">
                                    <img src="img/p-pjb/data-persiapan/prepare-swakelola/1.2.png"
                                        class="rounded-lg shadow w-full">
                                </div>
                            </li>
                            <li>Analisa Harga Satuan
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-2 mb-8">
                                    <img src="img/p-pjb/data-persiapan/prepare-swakelola/2.1.png"
                                        class="rounded-lg shadow w-full">
                                    <img src="img/p-pjb/data-persiapan/prepare-swakelola/2.2.png"
                                        class="rounded-lg shadow w-full">
                                </div>
                            </li>
                            <li>Rencana Anggaran Biaya (RAB)
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-2 mb-8">
                                    <img src="img/p-pjb/data-persiapan/prepare-swakelola/3.1.png"
                                        class="rounded-lg shadow w-full">
                                    <img src="img/p-pjb/data-persiapan/prepare-swakelola/3.2.png"
                                        class="rounded-lg shadow w-full">
                                </div>
                            </li>
                            <li>RPTKBPS
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-2 mb-8">
                                    <img src="img/p-pjb/data-persiapan/prepare-swakelola/4.1.png"
                                        class="rounded-lg shadow w-full">
                                    <img src="img/p-pjb/data-persiapan/prepare-swakelola/4.2.png"
                                        class="rounded-lg shadow w-full">
                                </div>
                            </li>
                            <li>Jadwal Pelaksanaan Kegiatan
                                <div class="flex justify-center mt-2 mb-8">
                                    <img src="img/p-pjb/data-persiapan/prepare-swakelola/5.1.png"
                                        class="rounded-lg shadow w-full sm:w-3/4 md:w-1/2">
                                </div>
                            </li>
                            <li>Data KAK
                                <div class="flex justify-center mt-2 mb-8">
                                    <img src="img/p-pjb/data-persiapan/prepare-swakelola/6.1.png"
                                        class="rounded-lg shadow w-full sm:w-3/4 md:w-1/2">
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Penyedia -->
                    <div class="mt-10">
                        <p class="font-semibold">Penyedia</p>
                        <div class="flex justify-center mt-2 mb-8">
                            <img src="img/p-pjb/data-persiapan/prepare-data2.png"
                                class="rounded-lg shadow w-full sm:w-3/4 md:w-1/2 lg:w-1/3">
                        </div>

                        <ul class="list-disc ml-6 space-y-6 font-normal">
                            <li>Jadwal Pelaksanaan
                                <div class="flex justify-center mt-2 mb-8">
                                    <img src="img/p-pjb/data-persiapan/prepare-penyedia/1.1.png"
                                        class="rounded-lg shadow w-full sm:w-3/4 md:w-1/2">
                                </div>
                            </li>
                            <li>Kerangka Acuan Kerja (KAK)
                                <div class="flex justify-center mt-2 mb-8">
                                    <img src="img/p-pjb/data-persiapan/prepare-penyedia/2.1.png"
                                        class="rounded-lg shadow w-full sm:w-3/4 md:w-1/2">
                                </div>
                            </li>
                            <li>Spesifikasi Teknis
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-2 mb-8">
                                    <img src="img/p-pjb/data-persiapan/prepare-penyedia/3.1.png"
                                        class="rounded-lg shadow w-full">
                                    <img src="img/p-pjb/data-persiapan/prepare-penyedia/3.2.png"
                                        class="rounded-lg shadow w-full">
                                </div>
                            </li>
                            <li>Analisa Harga Satuan
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-2 mb-8">
                                    <img src="img/p-pjb/data-persiapan/prepare-penyedia/4.1.png"
                                        class="rounded-lg shadow w-full">
                                    <img src="img/p-pjb/data-persiapan/prepare-penyedia/4.2.png"
                                        class="rounded-lg shadow w-full">
                                </div>
                            </li>
                            <li>Harga Perkiraan Sendiri
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-2 mb-8">
                                    <img src="img/p-pjb/data-persiapan/prepare-penyedia/5.1.png"
                                        class="rounded-lg shadow w-full">
                                    <img src="img/p-pjb/data-persiapan/prepare-penyedia/5.2.png"
                                        class="rounded-lg shadow w-full">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>


                <!-- Data Pelaksanaan -->
                <div>
                    <p class="font-semibold text-lg sm:text-xl">4. Data Pelaksanaan</p>
                    <p class="my-2 text-gray-700">
                        This section manages the implementation phase of activities, which can be carried out either
                        through <span class="font-semibold">Swakelola</span> or <span
                            class="font-semibold">Penyedia</span>.
                    </p>

                    <ul class="list-disc ml-6 space-y-6">
                        <li>
                            <span class="font-semibold">Swakelola</span> – Activities managed internally by the village.
                            <div class="flex justify-center mt-2 mb-8">
                                <img src="img/p-pjb/data-pelaksanaan/implementation-data1.png"
                                    class="rounded-lg shadow w-full sm:w-3/4 md:w-1/2 lg:w-1/3">
                            </div>
                        </li>
                        <li>
                            <span class="font-semibold">Penyedia</span> – Activities managed by providers, with two
                            possible methods:
                            <div class="flex justify-center mt-2 mb-8">
                                <img src="img/p-pjb/data-pelaksanaan/implementation-data2.png"
                                    class="rounded-lg shadow w-full sm:w-3/4 md:w-1/2 lg:w-1/3">
                            </div>
                            <ul class="list-decimal ml-6 space-y-4">
                                <li>Secara Lelang (via tender)
                                    <div class="flex justify-center mt-2 mb-8">
                                        <img src="img/p-pjb/data-pelaksanaan/implemention-penyedia/1.1.png"
                                            class="rounded-lg shadow w-full sm:w-3/4 md:w-1/2 lg:w-1/3">
                                    </div>
                                </li>
                                <li>Secara Penawaran (via direct offer)
                                    <div class="flex justify-center mt-2 mb-8">
                                        <img src="img/p-pjb/data-pelaksanaan/implemention-penyedia/2.1.png"
                                            class="rounded-lg shadow w-full sm:w-3/4 md:w-1/2 lg:w-1/3">
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>

        </div>

    </main>


    <footer>
        <div class="flex justify-center items-center m-0 shadow-top bg-black">
            <p class="text-center text-white p-4">© 2025 M. Rasheed • Web & Mobile Developer</p>
        </div>
    </footer>
</body>

</html>