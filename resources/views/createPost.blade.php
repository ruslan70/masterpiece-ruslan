@extends ('layouts/master')


{{-- HERE GOES THE CONTENT --}}

@section('createpost')
    @auth
        <img src="{{ asset('img/logo-name.png') }}" class="img-fluid rounded mx-auto d-block m-2" alt="Responsive image">
        <div class="postDetailsBox">
            <br>
            <h1 class="title_header"><strong> Eigenen Beitrag erstellen </strong></h1>
            <p class="pMain">Hier können Sie Ihren eigenen Beitrag erstellen, damit später Leute darüber diskutieren können</p>
        </div>

        <div class="postDetailsBox">
            <form action="/" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-white">Title of the post</label>
                    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label text-white">Author</label>
            <input type="text" name="author" class="form-control" id="exampleFormControlInput1" placeholder="{{Auth::user()->name}}" readonly>
</div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label text-white">Hier sollten Sie Ihren Beitrag schreiben</label>
                    <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="5"
                        placeholder="Write an amazing comment"></textarea>
                </div>
                @csrf
                <button class="btn buttonCustom text-white">Submit</button>

            </form>
        @endauth
    </div>
    @guest

        <div class="createGuest">
            <img src="{{ asset('img/logo-name.png') }}" class="img-fluid rounded mx-auto d-block m-2"
                alt="Responsive image">
            {{-- <img src="data:image/jpg;base64,{{ chunk_split(base64_encode($post->postPic)) }}" --}}
            {{-- class="img-fluid rounded mx-auto d-block m-2" alt="Responsive image"> --}}

            <h2 class="title_header"><strong>Zuerst müssen Sie eingeloggt sein!</strong></h2>
            <h3 class="title_header">Wir laden Sie herzlich ein, sich anzumelden</h3>

            <a href="/register" class=" title_header btn buttonCustom text-white">Register</a>

        </div>

    @endguest

    </section>
@endsection