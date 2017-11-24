@extends('layouts.site')

@section('content')

<div class="container">
    <div class="row section">
        <h3 align="center">Imóvel</h3>
        <div class="divider"></div>
    </div>
    <div class="row section">
        <div class="col s12 m8">
            <div class="row">
                <div class="slider">
                    <ul class="slides">
                        <li>
                            <img src="{{ asset('img/modelo_detalhe_1.jpg') }}">
                            <div class="caption center-align">
                                <h3>Título da Imagem</h3>
                                <h5>Descrição do Slide</h5>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('img/modelo_detalhe_2.jpg') }}">
                            <div class="caption left-align">
                                <h3>Título da Imagem</h3>
                                <h5>Descrição do Slide</h5>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('img/modelo_detalhe_3.jpg') }}">
                            <div class="caption right-align">
                                <h3>Título da Imagem</h3>
                                <h5>Descrição do Slide</h5>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('img/modelo_detalhe_4.jpg') }}">
                            <div class="caption left-align">
                                <h3>Título da Imagem</h3>
                                <h5>Descrição do Slide</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row" align="center">
                <button onclick="sliderPrev()" class="btn blue">Anterior</button>
                <button onclick="sliderNext()" class="btn blue">Próxima</button>
            </div>
        </div>
        <div class="col s12 m4">
            <h4>Título do Imóvel</h4>
            <blockquote>
                Descrição breve sobre o imóvel.
            </blockquote>
            <p><b>Código:</b> 245 </p>
            <p><b>Status:</b> Vende </p>
            <p><b>Tipo:</b> Alvenaria </p>
            <p><b>Enderço:</b> Centro </p>
            <p><b>Cep:</b> 87023-010 </p>
            <p><b>Cidade:</b> Maringá </p>
            <p><b>Valor:</b> R$ 200.000,00 </p>
            <a class="btn deep-orange darken-1" href="{{ route('site.contato') }}">Entrar em contato</a>
        </div>
    </div>
</div>
@endsection