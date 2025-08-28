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
    <main class="flex flex-col md:flex-row my-36 md:my-36 px-4 md:my-36px-16 gap-y-8 md:gap-x-8">

        <!-- Konten Utama -->
        <div class="bg-white mx-0 md:mx-4 rounded-lg p-4 md:p-6 w-full md:w-3/4">
            <p class="text-center text-2xl md:text-4xl font-bold">Hotel Reservation Website</p>

            <p class="text-base md:text-lg font-semibold my-6 md:my-12 leading-relaxed">
                This is a hotel reservation website that allows users to book rooms online.<br><br>
                The website has four types of roles:
                <br><br>
                <strong>Guest:</strong> can register, log in, view the hotel dashboard, and see the list of rooms.<br>
                <strong>User:</strong> can make room reservations, view booking history, cancel bookings, and print
                booking receipts.<br>
                <strong>Receptionist:</strong> manages booking data and changes booking status.<br>
                <strong>Admin:</strong> has full authority to manage details of each room type, add new rooms, and
                deactivate rooms.<br><br>
                <em>Note:</em> This website uses an API that you can clone via the following GitHub link:
                <a class="text-blue-500 underline break-words" href="https://github.com/Rasheed151/rest-api"
                    target="_blank">https://github.com/Rasheed151/rest-api</a>
            </p>

            <!-- Guest Section -->
            <p class="text-center font-bold text-xl md:text-2xl my-8 md:my-12">Guest</p>
            <ol class="list-decimal pl-6 text-base md:text-lg">
                <li class="my-6 md:my-8">
                    <strong>Registration Page</strong> – This page is used to register a new user account and verify the
                    email address used during registration.
                    <img class="my-4 rounded-lg shadow max-w-full h-auto"
                        src="https://github.com/user-attachments/assets/118a3118-486e-4561-87a1-78f510c84673" />
                </li>
                <li class="my-6 md:my-8">
                    <strong>Successful Verification Notification Page</strong> – Displayed after successful
                    verification.
                    <img class="my-4 rounded-lg shadow max-w-full h-auto"
                        src="https://github.com/user-attachments/assets/65a94a95-63d8-4adb-883e-62b83eed4d54" />
                </li>
                <li class="my-6 md:my-8">
                    <strong>Login Page</strong> – Allows guests to log in and change their role to user.
                    <img class="my-4 rounded-lg shadow max-w-full h-auto"
                        src="https://github.com/user-attachments/assets/5c1a7cf2-2026-4c02-aecf-7b871cbdcfbe" />
                </li>
                <li class="my-6 md:my-8">
                    <strong>Hotel Dashboard</strong> – Shows hotel information and facilities.
                    <img class="my-4 rounded-lg shadow max-w-full h-auto"
                        src="https://github.com/user-attachments/assets/5a28e5fb-63c1-4eb6-818a-80e8f03c6232" />
                </li>
                <li class="my-6 md:my-8">
                    <strong>Room Information Page</strong> – Shows details about available rooms.
                    <img class="my-4 rounded-lg shadow max-w-full h-auto"
                        src="https://github.com/user-attachments/assets/48ec484c-619f-4281-b8d1-20f461ae06eb" />
                </li>
            </ol>

            <!-- User Section -->
            <p class="text-center font-bold text-xl md:text-2xl my-8 md:my-12">User</p>
            <ol class="list-decimal pl-6 text-base md:text-lg">
                <li class="my-6 md:my-8">
                    <strong>Room Booking Page</strong> – Select room type and dates to book.
                    <img class="my-4 rounded-lg shadow max-w-full h-auto"
                        src="https://github.com/user-attachments/assets/f43bb00a-df0d-4b1a-9101-919355862adb" />
                </li>
                <li class="my-6 md:my-8">
                    <strong>Booking History</strong> – Shows list of previous bookings.
                    <img class="my-4 rounded-lg shadow max-w-full h-auto"
                        src="https://github.com/user-attachments/assets/6d26a7ee-93b8-45c4-9e89-9024bf865723" />
                </li>
                <li class="my-6 md:my-8">
                    <strong>Print Booking History</strong> – Users can print their booking history.
                    <img class="my-4 rounded-lg shadow max-w-full h-auto"
                        src="https://github.com/user-attachments/assets/9c03f6cc-3203-4f44-b921-eb41d25c409d" />
                </li>
            </ol>

            <!-- Receptionist Section -->
            <p class="text-center font-bold text-xl md:text-2xl my-8 md:my-12">Receptionist</p>
            <ol class="list-decimal pl-6 text-base md:text-lg">
                <li class="my-6 md:my-8">
                    <strong>Receptionist Dashboard</strong> – Used to manage orders and bookings.
                    <img class="my-4 rounded-lg shadow max-w-full h-auto"
                        src="https://github.com/user-attachments/assets/8cf209ca-ce7d-4f18-b564-7678d7796b1a" />
                </li>
            </ol>

            <!-- Admin Section -->
            <p class="text-center font-bold text-xl md:text-2xl my-8 md:my-12">Admin</p>
            <ol class="list-decimal pl-6 text-base md:text-lg">
                <li class="my-6 md:my-8">
                    <strong>Admin Dashboard</strong> – Manage room types, add/edit/delete rooms.
                    <img class="my-4 rounded-lg shadow max-w-full h-auto"
                        src="https://github.com/user-attachments/assets/df549953-addc-4779-84dd-8f8b195af489" />
                </li>
            </ol>

            <!-- Contact -->
            <div class="mt-8 md:mt-12 border-t pt-4 text-base md:text-lg">
                <strong>Contact and Support:</strong><br>
                Email: <a class="text-blue-500 underline"
                    href="mailto:mrasheed.muhyiddien@gmail.com">mrasheed.muhyiddien@gmail.com</a>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="bg-white mx-0 md:mx-4 rounded-lg p-4 md:p-6 w-full md:w-1/4">
            <div class="flex flex-row items-center">
                <img src="img/astronaut.png" alt="" class="block h-16 md:h-auto">
                <p class="ml-4 text-base md:text-lg font-semibold">TITLE</p>
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