@extends('layout.app')
@section('main')
    <main class="flex-grow my-36">

        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($data as $d)
                    <!-- Project 1 -->
                    <a href="{{ route('detail', $d->id) }}"
                        class="block bg-gray-200 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                        <!-- Gambar Project dengan rasio 16:9 -->
                        <div class="aspect-[16/9] bg-gray-300 flex items-center justify-center overflow-hidden">
                            <img src="{{ $d->cover }}" class="object-cover w-full h-full">
                        </div>

                        <!-- Konten -->
                        <div class="p-4">
                            <h2 class="text-lg font-bold text-gray-800">{{ $d->name }}</h2>

                            <p class="mt-3 text-sm text-gray-700">
                                <span class="font-semibold">Language:</span> {{ $d->language }}
                            </p>
                            <p class="mt-1 text-sm text-gray-700">
                                <span class="font-semibold">Framework:</span> {{ $d->framework }}
                            </p>

                            <!-- Tombol -->
                            <div class="mt-4">
                                <span
                                    class="inline-block bg-blue-600 text-white text-sm px-4 py-2 rounded hover:bg-blue-700 transition-colors">
                                    View Project
                                </span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>



    </main>
@endsection