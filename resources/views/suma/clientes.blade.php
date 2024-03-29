@extends('layouts.suma')
@section('clientes','active')

@if(App::getLocale()=='es')
    @section('title','Suma - Clientes ')
    @section('content')
        @include('suma.es.clientesEs')
    @endsection
@else
    @section('title','Suma - Customers ')
    @section('content')
        @include('suma.en.clientesEn')
    @endsection
@endif

@section('content2')
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/cota2.png')}}" alt="Cota 2" class="fluid">
            </div>
            <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/cede.png')}}" alt="Fundación Cede" class="fluid">
            </div>
            <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/martinezcomin.png')}}" alt="Martinez Comin" class="fluid">
            </div>
            <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/plein.png')}}" alt="Philipp Plein" class="fluid">
            </div>
            <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/mandyskin.png')}}" alt="Mandy Skin" class="fluid">
            </div>
            <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/alpify.jpg')}}" alt="Alpify" class="fluid">
            </div>
            <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/BeeButterfly.png')}}" alt="BeeButterfly" class="fluid">
            </div>
            <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/bonavista.jpg')}}" alt="bonavista" class="fluid">
            </div>
            <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/business_basecamp.jpg')}}" alt="business_basecamp" class="fluid">
            </div>
            <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/cintora.jpg')}}" alt="cintora" class="fluid">
            </div>
            <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/floch.png')}}" alt="floch" class="fluid">
            </div>
            <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/fmiro.jpg')}}" alt="fmiro" class="fluid">
            </div>
            <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/FRE.png')}}" alt="FRE" class="fluid">
            </div>
            {{-- <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/ilumia.jpg')}}" alt="ilumia" class="fluid">
            </div> --}}
            <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/inmobar.jpg')}}" alt="inmobar" class="fluid">
            </div>
            <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/alektum.png')}}" alt="Alektum" class="fluid">
            </div>
            <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/leve.jpg')}}" alt="leve" class="fluid">
            </div>
            <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/Logo-LC-cuadrado2.jpg')}}" alt="lewis" class="fluid">
            </div>
            <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/ltc.jpg')}}" alt="ltc" class="fluid">
            </div>
            <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/keyrock.jpg')}}" alt="keyrock" class="fluid">
            </div>
            {{-- <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/malamar.jpg')}}" alt="malamar" class="fluid">
            </div> --}}
            <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/nae.jpg')}}" alt="nae" class="fluid">
            </div>
            <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/nalmat.jpg')}}" alt="nalmat" class="fluid">
            </div>
            <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/nomasvello.png')}}" alt="nomasvello" class="fluid">
            </div>
            {{-- <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/rdvfrance.jpg')}}" alt="rdvfrance" class="fluid">
            </div> --}}
            <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/sahita.jpg')}}" alt="sahita" class="fluid">
            </div>
            {{-- <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/smokeDataRedim.png')}}" alt="smoke" class="fluid bg-dark">
            </div> --}}
            {{-- <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/sputch.jpg')}}" alt="sputch" class="fluid">
            </div> --}}
            <div class="col-md-4 col-sm-6 p-5">
                <img src="{{ asset('storage/img/clientes/wine.jpg')}}" alt="wine" class="fluid">
            </div>
        </div>
    </div>
@endsection

@section('scriptsextra')
    <script>
        // Get the current year for the copyright
        $('#year').text(new Date().getFullYear());

        // Botón subir
        $(document).ready(function() {
            // Show or hide the sticky footer button
            $(window).scroll(function() {
                if ($(this).scrollTop() > 200) {
                    $('.go-top').fadeIn(200);
                } else {
                    $('.go-top').fadeOut(200);
                }
            });

            // Animate the scroll to top
            $('.go-top').click(function(event) {
                event.preventDefault();
                $('html, body').animate({scrollTop: 0}, 1200);
            })
        });
    </script>
@endsection
