@extends ('layouts.app')


@section ('content')


<div id="show-container" class="container">


  <h1>{{ $post->title }}</h1>
<hr>


<div class="#">
<div class="show-page">

  {{ $post->body }}

</div>
</div>

<br>

<div class="show-down">
  <p>{{ $post->created_at->toFormattedDateString() }}</p>
  <p>Posted by&nbsp;<img src="/uploads/avatars/{{ $post->user->avatar }}" style="width:40px; height: 40px; border-radius: 50%;">&nbsp;Admin<br></p>
</div>

<div class="show_reactions">
  <h2 style="color: #359bff;">Reacties:</h2>
  <hr style="border-top: 1px solid #4d4dff;">


<ul class="collection">
  @foreach ($post->comments as $comment)
  <li class="collection-item">



  <strong>
    <p class="comment-font-size">{{ $comment->body }}</p>
    {{ $comment->created_at->diffForHumans() }}:&nbsp;
    by {{ $comment->user->name }}&nbsp; <img src="{{ '/uploads/avatars/' . $comment->user->avatar }}" style="width:30px; height: 30px; border-radius: 50%;">
  </strong>

  <!-- {{ $comment->body }} -->
</li><br>
  @endforeach
</ul>

</div>
<br>
<div class="comment">

  <h4>Reageren</h4>

<form method="POST" action="/posts/{{ $post->id }}/comments">

   {{ csrf_field() }}

  <div class="input-field col s12">
    <textarea name="body" id="icon_prefix2" class="materialize-textarea"></textarea>
    <label for="icon_prefix2" class="">Your message</label>
  </div>
    <button class="btn waves-effect waves-light" type="submit" name="action" style="float:right;">Publish
    <i class="material-icons right">cloud</i>
    </button>
</form>

@include ('layouts.errors')


</div>
<br>

</div>


@endsection
