@extends ('layouts/master')


@section('header')
    <header>

        <img src="{{ asset('img/foto-ruslan-2.png') }}" class="img-fluid rounded mx-auto d-block m-2"
            alt="Responsive image">

        <h1 class="title_header">Hallo, ich bin Ruslan Khatuev,<br> Web Developer aus Zürich</h1>
        
        <p class="pMain bg-opacity-10 bg-primary">Als Flüchtling in die Schweiz gekommen, 
            konnte ich nicht auf meinem ursprünglichen Beruf als Arzt arbeiten und habe mich daher gründlich neu orientiert. 
            In einem herausfordernden Prozess und durch verschiedene gemeinnützige Tätigkeiten 
            durfte ich insbesondere meine Fähigkeiten im Umgang mit verschiedenen Informationstechniken und Technologien entdecken. </p>

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
                    <h5 class="card-title text-black"><strong>{{ $post->title }}</strong></h5>
                    <div class="aYd">
                        <h6 class="card-subtitle mb-2 text-black">{{ $post->author }}</h6>
                        <h6 class="card-subtitle mb-2 fw-lighter text-black">{{ $post->created_at }}</h6>
                    </div>
                    <p class="card-text cTextElip text-black">{{ $post->content }}</p>
                    <a href="/postdetail/{{ $post->id }}" class="bg-primary hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Full post</a>
                </div>
            </div>
        @endforeach
    </section>
@endsection