@extends('layouts.master')

@section('preloader')
    {{-- @include('layouts.partials.preloader') --}}
@endsection

@section('header')
    @include('layouts.partials.headerContact')
@endsection

@section('subject')
    <!-- Page header -->
	<div class="page-top-section">
            <div class="overlay"></div>
            <div class="container text-right">
                <div class="page-info">
                    <h2>Contact</h2>
                    <div class="page-links">
                        <a href="/labs">Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page header end -->
    
    
        <!-- Google map -->
        <div class="map d-block" id="map-area"><iframe class="w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2518.6937653742602!2d4.3390587515234955!3d50.85535486588674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c38e9d8adfb1%3A0xf54cb863ac5a5ce3!2sPlace+de+la+Minoterie+10%2C+1080+Molenbeek-Saint-Jean!5e0!3m2!1sfr!2sbe!4v1540828353347" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe></div>
    
@endsection

@section('contact')
    @include('.layouts.partials.contact')
@endsection

@section('footer')
    @include('layouts.partials.footer')
@endsection
