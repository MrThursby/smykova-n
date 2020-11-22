@extends('layouts.app')

@section('content')
    <header class="flex-center position-ref d-none d-sm-block overflow-hidden"
         style='@if($settings->wall_id != null)
                background-image: url("{{ asset('img/wall.jpg') }}");
             @else
                 background: rgb(6,5,80);
                 background: -moz-linear-gradient(90deg, rgba(6,5,80,1) 0%, rgba(9,9,121,1) 29%, rgba(3,134,203,1) 100%);
                 background: -webkit-linear-gradient(90deg, rgba(6,5,80,1) 0%, rgba(9,9,121,1) 29%, rgba(3,134,203,1) 100%);
                 background: linear-gradient(90deg, rgba(6,5,80,1) 0%, rgba(9,9,121,1) 29%, rgba(3,134,203,1) 100%);
                 filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#060550",endColorstr="#0386cb",GradientType=1);
             @endif background-size: cover; background-position: center;'>
        <div class="container">
            <div class="my-5 p-5 text-white text-center">
                <div class="h1 m-b-md mb-3">{{
                    $settings->headline == '' ? config('app.name') : $settings->headline
                }}</div>
                <div class="h3 mb-4">{{
                    $settings->sub_headline == '' ? __('Jack Tersby\'s Blog') : $settings->sub_headline
                }}</div>
            </div>
        </div>
    </header>
    <div class="container content about-author position-ref">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 p-0">
                <div class="author-info-photo h-100 w-100" style="background-image: url('{{ asset('/img/main_user.jpg') }}')"></div>
            </div>
            <div class="col-md-6 col-lg-8">
                <div class="row h-100">
                    <div class="col author-info-text align-self-center py-3 pt-sm-3 pb-sm-3 p-md-5">
                        <h1 class="font-weight-bold"> Здравствуйте, </h1>
                        <p class="mt-4">
                            Я Смыкова Наталия, учитель-дефектолог, родилась 15 июля1975г. Закончила Высоковскую среднюю школу в 1992г.
                            В этом же году поступила в Торжокское педагогическое училище. Закончила  - в 1994г, получив диплом «Учитель начальных классов». В 1994г.
                            Принята в Высоковскую среднюю школу в качестве учителя русского языка и литературы.
                            В 2017г принята в МБДОУ №27 в качестве воспитателя. В 2018г принята вГКОУ Вышневолоцкая школа интернат №1, где и работаю в натоящее время.
                        </p>
                        <p>
                            Здесь будут собраны материалы по развитию зрительного восприятия, ориентировки в пространстве,
                            социально-бытовой ориентировки, развитию тактильной чувствительности и мелкой моторики,  полезные
                            ссылки и многое другое. Материалы представлены как и из открытых источников с указанием автора.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($posts->count() > 0)
        <div class="container content">
            <div class="row mt-5">
                <div class="col-md-12">
                    <h1 class="font-weight-bold">Последнее</h1>
                </div>
                <div class="card-columns w-100 p-3">
                    @foreach($posts as $post)
                        @include('main.includes.posts.index', ['type' => $post->type])
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@endsection
