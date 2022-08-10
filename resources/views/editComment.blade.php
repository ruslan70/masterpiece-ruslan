@extends ('layouts/master')

@section('editComment')
    <div class="postDetailsBox">

        <h2 class="title_header"><strong>Edit your comment</strong></h2>
        <p class="pMain">Here you could see your comment</p>
    </div>

    <div class="postDetailsBox">
        <form action="" method="">
            <label for="input-title" class="form-label text-white">Title</label>
            <input type="text" name="title" value="" class="form-control mb-3">
            <label for="input-content" class="form-label text-white">Message</label>
            <input type="text" name="content" value="" class="form-control mb-3">
            @csrf

            <a href="#" class="btn buttonCustom text-white">update</a>
        </form>

        <form action="" method="">
            @csrf
            @method('delete')
            <a href="#" class="btn buttonCustom text-white">delete</a>

        </form>
    </div>
@endsection