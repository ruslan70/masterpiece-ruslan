@extends ('layouts/master')


{{-- HERE GOES THE CONTENT --}}
@section('post1')
    <div class="postDetailsBox">
      
        <h2>Photo Details:</h2>
 
        <h3>{{$photo->title}}</h3>
        <p>{{$photo->photo_created}}</p>
        <p>
        <img src = "data:image/png;base64,{{ base64_encode($photo->photo) }}" width = "50px" height = "50px"/>
        </p>
    </div>
    @auth
        <div class="postDetailsBox">
            <h3 class="title_header"><strong> HINTERLASSEN SIE IHRE KOMMENTARE </strong></h3>
            <form action="/postDetail" method="post">

                    <!-- hidden field holding message->id to remember, which message
                    the new comment will belong to -->
                   

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

    
@endsection