@extends('bandage.layout')

@section('content')
<div class="p-8 lg:px-48">
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="#" class="inline-flex items-center text-sm font-bold text-dark">
                Home
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-font_light mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <a href="#" class="ms-1 text-sm font-bold text-font_light md:ms-2">Shop</a>
                </div>
            </li>
        </ol>
    </nav>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Kolom Gambar -->
        <div class="grid-cols-1 mt-8">
            <div id="controls-carousel" class="relative w-full" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('assets/display_1.svg') }}" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="{{ asset('assets/display_2.svg') }}" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-1/2 left-4 z-30 flex items-center justify-center w-10 h-10 rounded-full bg-blue group-hover:bg-bg_light" data-carousel-prev>
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button type="button" class="absolute top-1/2 right-4 z-30 flex items-center justify-center w-10 h-10 rounded-full bg-blue group-hover:bg-bg_light" data-carousel-next>
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
                <!-- Thumbnail images -->
                <div class="flex justify-center mt-4 space-x-4">
                    <button data-carousel-slide-to="0" class="focus:outline-none">
                        <img src="{{ asset('assets/display_1.svg') }}" class="w-16 h-16 rounded-lg grayscale hover:grayscale-0" alt="Thumbnail 1">
                    </button>
                    <button data-carousel-slide-to="1" class="focus:outline-none">
                        <img src="{{ asset('assets/display_2.svg') }}" class="w-16 h-16 rounded-lg grayscale hover:grayscale-0" alt="Thumbnail 2">
                    </button>
                </div>
            </div>
        </div>


        <!-- Kolom Deskripsi Produk -->
        <div class="grid-cols-1 mt-8">
            <!-- Product Title -->
            <h1 class="text-3xl font-bold">Floating Phone</h1>

            <!-- Rating and Reviews -->
            <div class="flex items-center mt-8">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-yellow ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <svg class="w-6 h-6 text-yellow ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <svg class="w-6 h-6 text-yellow ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <svg class="w-6 h-6 text-yellow ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <svg class="w-6 h-6 ms-1 text-font_light" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                </div>
                <span class="ml-2 text-sm text-font_dark font-bold">10 Reviews</span>
            </div>

            <!-- Price -->
            <p class="text-2xl text-dark font-bold mt-8">$1,139.33</p>

            <!-- Availability -->
            <p class="mt-2 text-base font-bold text-font_dark">
                Availability: <span class="text-blue">In Stock</span>
            </p>

            <!-- Description -->
            <p class="mt-8 text-font_dark font-normal">
                Met minim Mollie non desert Alamo est sit cliquey dolor do met sent. RELIT official consequent door ENIM RELIT Mollie.
            </p>

            <hr class="my-8">

            <!-- Color Options -->
            <div class="flex items-center mt-4">
                <p class="mr-4">Color:</p>
                <div class="flex space-x-2">
                    <span class="w-6 h-6 rounded-full bg-blue border"></span>
                    <span class="w-6 h-6 rounded-full bg-light_green border"></span>
                    <span class="w-6 h-6 rounded-full bg-orange border"></span>
                    <span class="w-6 h-6 rounded-full bg-dark border"></span>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex space-x-8 mt-6">
                <button class="bg-blue text-white p-3 font-bold rounded-lg hover:text-font_light">
                    Select Options
                </button>
                <button class="bg-white text-font_dark p-2 border border-dark rounded-full hover:bg-font_light">
                    <svg class="w-6 h-6 text-dark dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                    </svg>
                </button>
                <button class="bg-white text-font_dark p-2 border border-dark rounded-full hover:bg-font_light">
                    <svg class="w-6 h-6 text-dark dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
                    </svg>
                </button>
                <button class="bg-white text-font_dark p-2 border border-dark rounded-full hover:bg-font_light">
                    <svg class="w-6 h-6 text-dark dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                        <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Bestseller Products -->
    <div class="mt-16">
        <h3 class="uppercase text-dark font-bold text-lg mb-8">Bestseller Products</h3>
        <hr class="h-px text-font_light">
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 my-8 gap-8">
        <div class="max-w-sm bg-white border hover:bg-bg_light rounded-lg shadow">
            <a href="#">
                <img class="rounded-t-lg w-full" src="{{ asset('assets/product_1.svg') }}" alt="product" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-4 text-xl font-bold text-dark">Graphic Design</h5>
                </a>
                <p class="mb-4 font-bold text-font_dark">English Department</p>
                <span class="text-lg font-bold text-font_light line-through">$16.48</span><span class="ms-4 text-lg font-bold text-dark_green">$6.48</span>
            </div>
        </div>
        <div class="max-w-sm bg-white border hover:bg-bg_light rounded-lg shadow">
            <a href="#">
                <img class="rounded-t-lg w-full" src="{{ asset('assets/product_2.svg') }}" alt="product" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-4 text-xl font-bold text-dark">Graphic Design</h5>
                </a>
                <p class="mb-4 font-bold text-font_dark">English Department</p>
                <span class="text-lg font-bold text-font_light line-through">$16.48</span><span class="ms-4 text-lg font-bold text-dark_green">$6.48</span>
            </div>
        </div>
        <div class="max-w-sm bg-white border hover:bg-bg_light rounded-lg shadow">
            <a href="#">
                <img class="rounded-t-lg w-full" src="{{ asset('assets/product_3.svg') }}" alt="product" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-4 text-xl font-bold text-dark">Graphic Design</h5>
                </a>
                <p class="mb-4 font-bold text-font_dark">English Department</p>
                <span class="text-lg font-bold text-font_light line-through">$16.48</span><span class="ms-4 text-lg font-bold text-dark_green">$6.48</span>
            </div>
        </div>
        <div class="max-w-sm bg-white border hover:bg-bg_light rounded-lg shadow">
            <a href="#">
                <img class="rounded-t-lg w-full" src="{{ asset('assets/product_4.svg') }}" alt="product" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-4 text-xl font-bold text-dark">Graphic Design</h5>
                </a>
                <p class="mb-4 font-bold text-font_dark">English Department</p>
                <span class="text-lg font-bold text-font_light line-through">$16.48</span><span class="ms-4 text-lg font-bold text-dark_green">$6.48</span>
            </div>
        </div>
        <div class="max-w-sm bg-white border hover:bg-bg_light rounded-lg shadow">
            <a href="#">
                <img class="rounded-t-lg w-full" src="{{ asset('assets/product_5.svg') }}" alt="product" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-4 text-xl font-bold text-dark">Graphic Design</h5>
                </a>
                <p class="mb-4 font-bold text-font_dark">English Department</p>
                <span class="text-lg font-bold text-font_light line-through">$16.48</span><span class="ms-4 text-lg font-bold text-dark_green">$6.48</span>
            </div>
        </div>
        <div class="max-w-sm bg-white border hover:bg-bg_light rounded-lg shadow">
            <a href="#">
                <img class="rounded-t-lg w-full" src="{{ asset('assets/product_6.svg') }}" alt="product" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-4 text-xl font-bold text-dark">Graphic Design</h5>
                </a>
                <p class="mb-4 font-bold text-font_dark">English Department</p>
                <span class="text-lg font-bold text-font_light line-through">$16.48</span><span class="ms-4 text-lg font-bold text-dark_green">$6.48</span>
            </div>
        </div>
        <div class="max-w-sm bg-white border hover:bg-bg_light rounded-lg shadow">
            <a href="#">
                <img class="rounded-t-lg w-full" src="{{ asset('assets/product_1.svg') }}" alt="product" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-4 text-xl font-bold text-dark">Graphic Design</h5>
                </a>
                <p class="mb-4 font-bold text-font_dark">English Department</p>
                <span class="text-lg font-bold text-font_light line-through">$16.48</span><span class="ms-4 text-lg font-bold text-dark_green">$6.48</span>
            </div>
        </div>
        <div class="max-w-sm bg-white border hover:bg-bg_light rounded-lg shadow">
            <a href="#">
                <img class="rounded-t-lg w-full" src="{{ asset('assets/product_2.svg') }}" alt="product" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-4 text-xl font-bold text-dark">Graphic Design</h5>
                </a>
                <p class="mb-4 font-bold text-font_dark">English Department</p>
                <span class="text-lg font-bold text-font_light line-through">$16.48</span><span class="ms-4 text-lg font-bold text-dark_green">$6.48</span>
            </div>
        </div>
    </div>


</div>
@endsection


