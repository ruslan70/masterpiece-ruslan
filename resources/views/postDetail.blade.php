@extends ('layouts/master')


{{-- HERE GOES THE CONTENT --}}
@section('postDetail')
<h3 class="title_header">Es ist alles zu kommentieren: Kode, Design, Funktionalität</h3>
    <div class="postDetailsBox">
        <img src="data:image/jpg;base64,{{ chunk_split(base64_encode($post->postPic)) }}"
            class="img-fluid rounded mx-auto d-block m-2" alt="Responsive image">

        <h2 class="title_header"><strong>{{ $post->title }}</strong></h2>
        <h3 class="title_header">{{ $post->author }}</h3>
        <p class="pMain">{{ $post->content }}</p>
        <h2 class="title_header">Site Details:</h2>
        

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true">
        
        <div class="carousel-inner">
        <?php
            $isActive = 'active';
        ?>
        @foreach($photos as $photo)
            <div class="carousel-item {{$isActive}}">
                
                    <h3 class="title_header">{{$photo->title}}</h3>
                    
                    <img src = "data:image/png;base64,{{ base64_encode($photo->photo) }}" 
                        class="img-fluid rounded mx-auto d-block m-4" id="max_size" alt="Responsive image">
                    
                
            </div>
        <?php
            $isActive = '';
        ?>
        @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>          
        
        
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
                <button type="submit" class="bg-primary hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
            </form> 
        </div>
    

    @endauth
    </section>

    <!-- <h3 class="title_header">KOMMENTARE:</h3> -->


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
                        {{-- <button class="bg-primary hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Edit</button> --}}
                        {{-- <a href="editComment" class="btn buttonCustom text-white">Edit</a> --}}
                        <button onclick="return confirm('Do You Really Want to Delete The post')"
                            class="bg-primary hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Delete</button>

                    </form>
                @endauth

               
            @endforeach
        @else
            <h3 class="title_header liauthor text-white text-center">Es gibt keine Kommentare zu zeigen ... noch nicht !</h3>
            @guest
                <div class="postDetailsBox text-center">

                    <!-- <div class="createGuest"> -->

                        <h2 class="title_header">Um ein Kommentar zu erfassen, müssen Sie zuerst eingeloggt sein!</h2>
                        <h3 class="title_header pb-5">Ich lade Sie herzlich ein, sich anzumelden</h3>
                       
                    
                        <a href="/register" class="h3 bg-primary hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Register</a>
                    
                      
                    <!-- </div> -->
                </div>

            @endguest
        @endif


    </section>
@endsection