@extends ('layouts/master')


@section('header')
    <header>

        <img src="{{ asset('img/logo_big_data_white.png') }}" class="img-fluid rounded mx-auto d-block"
            alt="Responsive image">

        <h1 class="title_header">Big Data: Nach dem Hype ist vor der Chance</h1>

        <p class="pMain">Der Begriff „Big Data“ bezeichnet die große Menge an strukturierten und unstrukturierten Daten, die
            Unternehmen Tag für Tag überschwemmen. Nicht die Daten selbst sind so wichtig. Was zählt, ist das, was
            Unternehmen mit den Daten machen. Große Datenmengen können analysiert werden, um Erkenntnisse zu gewinnen
            und
            auf deren Grundlage bessere Entscheidungen zu treffen und das Unternehmen strategisch auszurichten.</p>

    </header>
@endsection

{{-- THIS WOULD BE THE FORMAT OF THE POST --}}
@section('posts')
    <section class="post_bbox text-white">
        @foreach ($posts as $post)
            <div class="card cardBgColor cardBoxStyle">

                <img class="card-img-top imgSize" src="data:image/jpg;base64,{{ chunk_split(base64_encode($post->postPic)) }}"
                    alt="Card image cap">
                <div class="card-body cardedit">
                    <h5 class="card-title "><strong>{{ $post->title }}</strong></h5>
                    <div class="aYd">
                        <h6 class="card-subtitle mb-2 text-white">{{ $post->author }}</h6>
                        <h6 class="card-subtitle mb-2 fw-lighter">{{ $post->created_at }}</h6>
                    </div>
                    <p class="card-text cTextElip">{{ $post->content }}</p>
                    <a href="/postdetail/{{ $post->id }}" class="btn buttonCustom text-white">Full post</a>
                </div>
            </div>
        @endforeach
    </section>
@endsection