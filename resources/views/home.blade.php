@extends('layouts.app')

@section('content')

<br>
<div class="container">
  <div class="top-tron">
    <h2>Welkom {{ Auth::user()->name }}</h2>
  </div>

            <br>

            <div id="wrapje" class="row">
             <div id="col-links" class="col s6">
               <h4>Laatste post</h4>
               <h5>Titel</h5>
             </div>
             <div id="col-rechts" class="col s6">
               <h4>Populairste post</h4>
               <h5>Titel</h5>
             </div>
           </div>




<br>








</div>







@endsection
