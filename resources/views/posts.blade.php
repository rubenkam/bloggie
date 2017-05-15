  @extends('layouts.app')

  @section('content')



  <div class="container">

  @foreach ($posts as $post)

  @include ('article')

  @endforeach

  </div>




  @endsection
