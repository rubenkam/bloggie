@extends('layouts.app')

@section('content')
 <!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>

            </div>
        </div>
    </div>
</div> -->
<br>
<div class="container">
  <div class="top-tron">
    <h2>Welkom {{ Auth::user()->name }}</h2>
  </div>

            <br>

            <div id="wrapje" class="row">
             <div id="col-links" class="col s6">
               <h4>Populairste post</h4>
               <h5>Titel</h5>
             </div>
             <div id="col-rechts" class="col s6">
               <h4>Populairste post</h4>
               <h5>Titel</h5>
             </div>
           </div>



            <!-- <div class="card small">
                    <div class="card-image">
                      <img src="http://wallpapercave.com/wp/WCAPmoW.png" alt="sample">
                      <span class="card-title">Lorem ipsum post</span>


                    </div>
                    <div class="card-content">
                      <p class="ultra-small">may 1, 2017</p>
                      <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>

                    </div>
                    <div class="card-action">
                      By <a href="#">John Doe</a>
                      <a href="#" class="right">Read more &gt;</a>
                    </div>
              </div> -->

              <br>








</div>







@endsection
