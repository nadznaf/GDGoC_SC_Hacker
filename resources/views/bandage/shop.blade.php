@extends('bandage.layout')

@section('content')
<div class="px-8 lg:px-48 lg:py-16">
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

    <div class="grid grid-cols-2">
        <div class="grid-cols-1 mt-8">
            <img src="{{ asset('assets/display_1.svg') }}" alt="product" class="w-full h-full object-cover">
        </div>
        <div class="grid-cols-1">

        </div>
    </div>
</div>
@endsection


