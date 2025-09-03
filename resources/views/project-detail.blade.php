<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="{{ asset('img/astronaut.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Portofolio Rasheed</title>
</head>

<body x-data="{ open: false, scaleSosmed: false }" class="bg-gray-200 flex flex-col min-h-screen">
    <!-- NAVBAR -->
    <div
        class="nav fixed top-0 left-0 w-full z-50 flex justify-between items-center bg-white py-4 px-6 md:px-16 rounded-b-lg shadow">

        <!-- Left (Logo & Name) -->
        <div class="flex items-center space-x-2">
            <img src="https://res.cloudinary.com/dvugdsa0z/image/upload/v1756737059/projectku/epvqqnsmsanxldqw0diq.jpg"
                class="size-12 rounded-full" />
            <p class="text-lg font-semibold">M. Rasheed Muhyiddien</p>
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
                    <img src="https://res.cloudinary.com/dvugdsa0z/image/upload/v1756737202/projectku/kfcxwamujaeymk9j7uvz.png"
                        class="size-10 transition-transform duration-300 hover:scale-125">
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/000mrasheed/" target="_blank">
                    <img src="https://res.cloudinary.com/dvugdsa0z/image/upload/v1756737242/projectku/swph6o6mrjl6hzi1xywi.png"
                        class="size-10 transition-transform duration-300 hover:scale-125">
                </a>
            </li>
            <li>
                <a href="https://www.linkedin.com/in/rasheed-muhyiddien-5a139b280/?originalSubdomain=id"
                    target="_blank">
                    <img src="https://res.cloudinary.com/dvugdsa0z/image/upload/v1756737269/projectku/z4f4bk7aq4nius0x1ao3.png"
                        class="size-10 transition-transform duration-300 hover:scale-125">
                </a>
            </li>
            <li>
                <a href="https://github.com/Rasheed151" target="_blank">
                    <img src="https://res.cloudinary.com/dvugdsa0z/image/upload/v1756737300/projectku/qvkezzlpuw6zpkxjgque.png"
                        class="size-10 transition-transform duration-300 hover:scale-125">
                </a>
            </li>
        </ul>

    </div>
    <main class="flex-grow my-32 px-4 sm:px-8 md:px-16">
        <div class="flex flex-col lg:flex-row gap-8">
            <div class="bg-white flex-1 rounded-lg p-4 sm:p-6 md:p-8 shadow-lg">


                {!! $data->content !!}

            </div>
            <!-- Sidebar -->
            <aside class="bg-white w-full lg:w-1/3 rounded-lg p-4 md:p-6 shadow-lg h-fit">
                <h2 class="text-xl font-bold mb-4 text-gray-800 border-b pb-2">Other Projects</h2>
                <div class="space-y-6">
                    @foreach ($sidebar as $d)
                        <a href="{{ route('detail', $d->id) }}" 
                        class="block bg-gray-100 rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                            <div class="aspect-[16/9] bg-gray-300 flex items-center justify-center overflow-hidden">
                                <img src="{{ $d->cover }}" class="object-cover w-full h-full">
                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-semibold text-gray-800">{{ $d->name }}</h3>
                                <p class="mt-2 text-sm text-gray-700">
                                    <span class="font-semibold">Language:</span> {{ $d->language }}
                                </p>
                                <p class="mt-1 text-sm text-gray-700">
                                    <span class="font-semibold">Framework:</span> {{ $d->framework }}
                                </p>
                                <div class="mt-3">
                                    <span
                                        class="inline-block bg-blue-600 text-white text-sm px-3 py-1 rounded hover:bg-blue-700 transition">
                                        View Project
                                    </span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </aside>
        </div>
    </main>
    <footer>
        <div class="flex justify-center items-center m-0 shadow-top bg-black">
            <p class="text-center text-white p-4">© 2025 M. Rasheed • Web & Mobile Developer</p>
        </div>
    </footer>
</body>

</html>