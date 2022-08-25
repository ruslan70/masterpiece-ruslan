@extends ('layouts/master')


{{-- HERE GOES THE CONTENT --}}
@section('postDetail')
    <div class="postDetailsBox">
        <img src="data:image/jpg;base64,{{ chunk_split(base64_encode($post->postPic)) }}"
            class="img-fluid rounded mx-auto d-block m-2" alt="Responsive image">

        <h2 class="title_header"><strong>{{ $post->title }}</strong></h2>
        <h3 class="title_header">{{ $post->author }}</h3>
        <p class="pMain">{{ $post->content }}</p>
    </div>
    @auth
        <div class="postDetailsBox">
            <h3 class="title_header"><strong> HINTERLASSEN SIE IHRE KOMMENTARE </strong></h3>
            <form action="/postDetail" method="post">

                    <!-- hidden field holding message->id to remember, which message
                    the new comment will belong to -->
                    <input type="hidden" name="post_id" value="{{ $post->id }}">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-white">Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{Auth::user()->name}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label text-white">Sag mir, was du denkst</label>
                    <textarea  name="comment" class="form-control" id="exampleFormControlTextarea1" rows="5" 
                    placeholder="Write an amazing comment"></textarea>
                   
                </div>
                @csrf
                <button type="submit" class="btn buttonCustom text-white">Submit</button>
            </form> 
        </div>
    

    @endauth
    </section>

    <h3 class="title_header">KOMMENTARE:</h3>


    <section class="postDetailsBox">

        @if (count($post->comments) >= 1)
            <!-- loop through the comment list of a message and display the comment text and user -->
            @foreach ($post->comments as $comment)
                <ul class="ul_comments text-white">
                    <li class="liComment">{{ $comment->comment }}</li>
                    <li class="liauthor">{{ $comment->author}}</li>
                </ul>
                @auth
                    
                    <form action="/comment/{{$comment->id}}" method="post">
                        @csrf
                        @method('delete')
                        {{-- <button class="btn buttonCustom text-white" type="submit">Edit</button> --}}
                        {{-- <a href="editComment" class="btn buttonCustom text-white">Edit</a> --}}
                        <button onclick="return confirm('Do You Really Want to Delete The post')"
                            class="btn buttonCustom text-white">Delete</button>

                    </form>
                @endauth

               
            @endforeach
        @else
            <h3 class="title_header liauthor text-black text-center">Es gibt keine Kommentare zu zeigen ... noch nicht !</h3>
            @guest
                <div class="postDetailsBox text-center">

                    <!-- <div class="createGuest"> -->

                        <h2 class="title_header">Um ein Kommentar zu erfassen, müssen Sie zuerst eingeloggt sein!</h2>
                        <h3 class="title_header">Ich lade Sie herzlich ein, sich anzumelden</h3>
                       
                    
                        <a href="/register" class=" title_header btn buttonCustom text-white">Register</a>
                    
                      
                    <!-- </div> -->
                </div>

            @endguest
        @endif


    </section>
@endsection