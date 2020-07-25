@extends('layout.default')


@section('content')


    <div class="container-home">
        <img class="hvr-buzz-out" src="{{asset("img/icon.png")}}">
        <h1>ROXINHO GELADO</h1>
        <h2>PEÇA UM DELICIOSO AÇAI A PARTIR DE <t class="lightPurple">APENAS R$5,00 CADA</t></h2>
        <button class="hvr-buzz-out">Faça seu pedido agora mesmo!</button>
    </div>

    <div class="row icons">
        <div class="col-3 text-center">
        </div>
        <div class="col-2 text-center">
            <a href="{{route('order')}}" class="icons-link">
                <div class="square">
                    <i class="icofont icofont-heart-eyes"></i>
                    <h1>Peça Online</h1>
                    <h2>Peça um delicioso açai diretamente pelo site</h2>
                </div>
            </a>
        </div>

        <div class="col-2 text-center">
            <a href="{{route('about')}}" class="icons-link">
                <div class="square">
                    <i class="icofont icofont-read-book-alt"></i>
                    <h1>Sobre nós</h1>
                    <h2>Apaixone-se mais pela sua açaiteria favorita conhecendo nossa história</h2>
                </div>
            </a>
        </div>

        <div class="col-2 text-center">
            <a href="{{route('contact')}}" class="icons-link">
                <div class="square">
                    <i class="icofont icofont-ui-contact-list"></i>
                    <h1>Entre em contato</h1>
                    <h2>Fale conosco sobre assuntos diversos</h2>
                </div>
            </a>
        </div>
        <div class="col-3 text-center"></div>
    </div>


@endsection
