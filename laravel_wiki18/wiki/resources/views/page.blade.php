
@extends('main');
@section('title', 'My index title')
@section('sidebar')
    @parent
    <p>Šitą dalį paveldėjo</p>
@endsection
@section('content')
@foreach($posts as $post)
  {{ $post->content }} <br><br><br>
@endforeach 

<form action={{ route('store_page') }} method="POST">
        @csrf
          <div class="form-group">
              <label for="subject">Author:</label>
              <input type="text" class="form-control" name="author">
          </div>

          <div class="form-group">
                <label for="content">Post Body:</label>
                <textarea class="form-control" name="content" id="content" rows="3"></textarea>
            </div>
           <input type="submit" name="send" class="btn btn-success" value="Save post">
        </form>

        
@endsection