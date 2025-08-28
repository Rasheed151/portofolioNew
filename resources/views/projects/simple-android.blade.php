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
    <main class="flex-grow my-32 px-4 sm:px-8 md:px-16">

        <div class="bg-white mx-4 sm:mx-12 lg:mx-24 rounded-lg p-4 sm:p-6 md:p-8 shadow-lg">

            <!-- Judul -->
            <p class="text-center text-2xl sm:text-3xl md:text-4xl font-bold">
                SIMPLE ANDROID APPLICATION
            </p>

            <!-- Deskripsi -->
            <p class="text-base sm:text-lg md:text-xl font-semibold my-8 sm:my-12 leading-relaxed">
                This project is a simple Android application designed as a basic implementation
                example of mobile app development using Kotlin. The application is read-only,
                allowing users to view the available content without modifying any data. In addition,
                the project includes several simple navigation features to provide an overview
                of the general structure of an Android application as well as the interaction
                flow between different screens.
            </p>

            <!-- Intro Section -->
            <p class="font-bold text-lg sm:text-xl my-6 sm:my-12">
                In addition, this application consists of three main types of pages:
            </p>

            <!-- List -->
            <ol class="list-decimal pl-6 space-y-6 sm:space-y-8">

                <!-- Items List -->
                <li>
                    <strong>Items List Page</strong> – displays a list of available items.
                    <div class="my-4 flex justify-center">
                        <img src="img/p-simple_android/items-list.jpg"
                            class="h-auto w-full sm:w-1/2 md:w-1/3 lg:w-1/4 object-cover rounded-lg shadow-md">
                    </div>
                </li>

                <!-- Item Details -->
                <li>
                    <strong>Item Details Page</strong> – provides detailed information about a selected item.
                    <div class="my-4 flex justify-center">
                        <img src="img/p-simple_android/item-details.jpg"
                            class="h-auto w-full sm:w-1/2 md:w-1/3 lg:w-1/4 object-cover rounded-lg shadow-md">
                    </div>
                </li>

                <!-- Profile -->
                <li>
                    <strong>Profile Page</strong> – presents basic information about the user or application profile.
                    <div class="my-4 flex justify-center">
                        <img src="img/p-simple_android/profile.jpg"
                            class="h-auto w-full sm:w-1/2 md:w-1/3 lg:w-1/4 object-cover rounded-lg shadow-md">
                    </div>
                </li>

            </ol>
        </div>

    </main>


    <footer>
        <div class="flex justify-center items-center m-0 shadow-top bg-black">
            <p class="text-center text-white p-4">© 2025 M. Rasheed • Web & Mobile Developer</p>
        </div>
    </footer>
</body>

</html>