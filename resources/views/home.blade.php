@extends('layout.app')
@section('main')


    <main class="flex-grow">
        <!-- Home -->
        <div class="Home" id="home">
            <!-- PNG backgorung -->
            <img src="https://res.cloudinary.com/dvugdsa0z/image/upload/v1756707378/projectku/esqeuwdgmfpwbizrdrhx.png"
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 opacity-30 w-80 z-[-10]" />

            <!-- Main Kontent -->
            <div class=" flex flex-col justify-center items-center my-36  space-y-12">
                <div class="greeting">
                    <p class="font-bold text-4xl text-center">HEY, I’M M. RASHEED MUHYIDDIEN</p>
                </div>
                <div class="description text-center">
                    <p class="text-lg font-medium">Vocational school graduate in Software Development with interest in
                        Web &
                        Mobile Development.</p>
                </div>
                <div class="bg-black rounded-lg py-2 px-4 my-20">
                    <a href="/projects">
                        <p class="font-semibold text-xl text-white">PROJECTS</p>
                    </a>
                </div>
            </div>
        </div>

        <!-- About -->
        <div class="bg-white py-8 pb-36" id="about">
            <p class="font-bold text-center text-4xl">ABOUT ME</p>

            <div class="flex flex-col justify-center items-center m-6">
                <div class="flex flex-col md:flex-row justify-between items-center mx-4 my-12">
                    <img src="https://res.cloudinary.com/dvugdsa0z/image/upload/v1756737684/projectku/hsuofxjb9rjx5apruoxo.jpg"
                        class="rounded-lg w-full md:w-1/2 mb-8">
                    <p class="font-medium text-center w-full md:w-1/2 md:pl-8">
                        "Completed vocational education at Wikrama 1 Vocational High School Garut in 2025,
                        majoring in Software Development, with an academic average score of 83.46
                        and a vocational competency score of 87.10."
                    </p>
                </div>

                <div class="flex flex-col md:flex-row justify-between items-center mx-4 my-12">
                    <img src="https://res.cloudinary.com/dvugdsa0z/image/upload/v1756737913/projectku/asfzuzqaat3qobtnmtdc.jpg"
                        class="rounded-lg w-full md:w-1/2 mb-8">
                    <p class="font-medium text-center w-full md:w-1/2 md:pl-8">
                        "Actively participated in scouting activities and served as
                        a committee member in the operational activities division."
                </div>
            </div>

            <p class="font-bold text-center text-2xl my-12">CERTIFICATE</p>

            <div x-data class="relative overflow-hidden w-full">
                <!-- Tombol Navigasi -->
                <button @click="$refs.slider.scrollBy({ left: -$refs.slider.offsetWidth, behavior: 'smooth' })"
                    class="absolute left-2 top-1/2 -translate-y-1/2 bg-black text-white px-3 py-1 rounded-full z-10">
                    ←
                </button>

                <button @click="$refs.slider.scrollBy({ left: $refs.slider.offsetWidth, behavior: 'smooth' })"
                    class="absolute right-2 top-1/2 -translate-y-1/2 bg-black text-white px-3 py-1 rounded-full z-10">
                    →
                </button>

                <!-- Wrapper Slide -->
                <div x-ref="slider" class="flex overflow-x-auto snap-x snap-mandatory scroll-smooth hide-scrollbar w-full"
                    style="scrollbar-width: none; -ms-overflow-style: none;">

                    <!-- Slide 1 -->
                    <div class="flex-shrink-0 w-full snap-center flex items-center justify-center min-h-screen">
                        <div class="flex flex-col justify-center items-center p-4">
                            <img src="https://res.cloudinary.com/dvugdsa0z/image/upload/v1756738887/projectku/rupdk7ms5cdhljoorttg.png"
                                class="w-2/4 h-full rounded-lg" />
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="flex-shrink-0 w-full snap-center flex items-center justify-center min-h-screen">
                        <div class="flex flex-col justify-center items-center p-4">
                            <img src="https://res.cloudinary.com/dvugdsa0z/image/upload/v1756739304/projectku/b3mahfpesjs5kyamyzuz.jpg"
                                class="w-3/4 h-full rounded-lg" />
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="flex-shrink-0 w-full snap-center flex items-center justify-center min-h-screen">
                        <div class="flex flex-col justify-center items-center p-4">
                            <img src="https://res.cloudinary.com/dvugdsa0z/image/upload/v1756739339/projectku/guofv8pvmsoeo9rffhrs.jpg"
                                class="w-3/4 h-full rounded-lg" />
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="flex-shrink-0 w-full snap-center flex items-center justify-center min-h-screen">
                        <div class="flex flex-col justify-center items-center p-4">
                            <img src="https://res.cloudinary.com/dvugdsa0z/image/upload/v1756739367/projectku/vamsmp50pbxna6zgcccz.jpg"
                                class="w-3/4 h-full rounded-lg" />
                        </div>
                    </div>

                    <!-- Slide 5 -->
                    <div class="flex-shrink-0 w-full snap-center flex items-center justify-center min-h-screen">
                        <div class="flex flex-col justify-center items-center p-4">
                            <img src="https://res.cloudinary.com/dvugdsa0z/image/upload/v1756739391/projectku/dmkgjfxwhqbhrkjnug9k.jpg"
                                class="w-3/4 h-full rounded-lg" />
                        </div>
                    </div>

                    <!-- Slide 6 -->
                    <div class="flex-shrink-0 w-full snap-center flex items-center justify-center min-h-screen">
                        <div class="flex flex-col justify-center items-center p-4">
                            <img src="https://res.cloudinary.com/dvugdsa0z/image/upload/v1756739196/projectku/nshgbjdo9cklydwco2cd.png"
                                class="w-2/4 h-full rounded-lg" />
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection