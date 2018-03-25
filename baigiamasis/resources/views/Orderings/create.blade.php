@extends('layouts.app')
@section('content')
<div class="containter">
    <div class="row justify-content-center">
        <div class="col-md-4">
                <form action={{ route('orderings.store') }} method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                          <label for="title">Vardas</label>
                          <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group">
                          <label for="phone">Telefono numeris</label>
                          <input type="number" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                          <label for="category_id">Gaminio tipas</label>
                          <select class="form-control" id="category_id" name="category_id">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Trumpas aprašymas</label>
                          <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                        <input type="file" name="attachments[]" id="file" multiple>
                    </div>
                        <button type="submit" class="btn btn-success">Create Post</button>
                      </form>
        </div>
    </div>
</div>
@endsection