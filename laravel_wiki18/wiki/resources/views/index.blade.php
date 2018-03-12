
@extends('main');
@section('title', 'My index title')
@section('sidebar')
    @parent
    <p>Šitą dalį paveldėjo</p>
@endsection
@section('content')
@component('alerts.danger', [
    'klaidos' => ["viena", "antra", "trecia"] 
])
    @slot('title')
        Forbidden
    @endslot
    @slot('slot')
        Forbidaaaden
    @endslot
@endcomponent

<div class= "card" > <div class= "card-body" > This is some text within a card body. </div> </div> <br>
<div class="row">
    <div class="alert alert-success">Labas</div> 
</div>
<form action="" method="GET">
        @csrf
        <input type="text" name="input" id="">
        <input type="submit" value="Done">
      </form>

     
@endsection