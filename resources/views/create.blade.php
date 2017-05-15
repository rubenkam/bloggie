@extends ('layouts.app')


@section ('content')



<div id="create-page" class="container">

<h2> Maak een post </h2>
<hr>

<div class="row">
     <form method="POST" action="/posts" class="col s12">
       {{ csrf_field()}}
       <div class="row">
         <div class="input-field col s6">
           <input id="title" type="text" data-length="10" name="title">
           <label for="input_text">Titel</label>
         </div>
       </div>

       <div class="row">
         <div class="input-field col s12">
           <textarea id="body" class="materialize-textarea" data-length="120" name="body"></textarea>
           <label for="textarea1">Post</label>
         </div>
       </div>

       <div class="row">
          <button class="btn waves-effect waves-light" type="submit" name="action">Publish
              <i class="material-icons right">cloud</i>
          </button>
      </div>

  @include ('layouts.errors')

     </form>





   </div>
 </div>



@endsection
