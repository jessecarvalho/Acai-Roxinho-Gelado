@extends('layout.default')
@section('content')

    <div class="container-contact" style="margin-bottom: 3%">
        <div class="whatsapp">
            <h1>Entre em contato conosco via Whatsapp</h1>
            <i class="whats-icon icofont-whatsapp purple"></i>
            <h2>11 94851-8009</h2>
            <hr style="width: 100%">
            <h1>Ou envie-nos um email e em breve retornaremos o contato!</h1>
        </div>

        <form method="get" action="{{route("sendMail")}}">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputName">Nome</label>
                    <input type="name" class="custom-form form-control" id="inputName" name="name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail">E-mail</label>
                    <input type="email" class="custom-form form-control" id="inputEmail" name="email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputTel">Telefone</label>
                    <input type="tel" class="custom-form form-control" id="inputTel" name="tel">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputAssunto">Assunto</label>
                    <input type="text" class="custom-form form-control" id="inputAssunto" name="assunto">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputMensagem">Mensagem</label> <br>
                    <textarea rows="5" id="inputMensagem" name="mensagem"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-dark" style="float: right;">Enviar</button>
        </form>
    </div>

@endsection
