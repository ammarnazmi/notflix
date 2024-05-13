@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-10">
        <div class="max-w-4xl mx-auto relative" x-data="{
            activeSlide: 1,
            slides: [
                { id: 1, title: 'hello 1', body: 'lorem ipsum modor' },
                { id: 2, title: 'hello 2', body: 'lorem ipsum modor' },
                { id: 3, title: 'hello 3', body: 'lorem ipsum modor' },
                { id: 4, title: 'hello 4', body: 'lorem ipsum modor' },
                { id: 5, title: 'hello 5', body: 'lorem ipsum modor' },
                { id: 6, title: 'hello 6', body: 'lorem ipsum modor' },
            ]
        }">
            <!--Data Loop -->
            <template x-for="slide in slides" :key="slide.id" >
                <div x-show="activeSlide === slide.id"
                    class="h-72 text-black bg-slate-200 rounded-lg overflow-hidden"
                >
                    <div>
                        <img class="w-72" src="{{ asset('images/img_girl.jpg') }}" alt="Logo">
                        <h2 class="font-bold text-2xl" x-text="slide.title"></h2>
                        <p class="text-base" x-text="slide.body"></p>
                    </div>
                </div>
            </template>

            <!-- Back/next -->
            <div class="absolute flex inset-0">
                <div class="flex items-center justify-start w-1/2">
                    <button
                    x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1"
                    class="bg-slate-100 text-slate-500 font-bold w-10 h-10 shadow rounded-full items-center justify-center flex
                    -ml-16 hover:bg-red-600 hover:text-white transition"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </button>
                </div>

                <div class="flex items-center justify-end w-1/2">
                    <button x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1"
                        class="bg-slate-100 text-slate-500 font-bold w-10 h-10 shadow rounded-full items-center justify-center flex
                    -mr-16 hover:bg-red-600 hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
