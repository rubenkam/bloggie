<div class="card small">
        <div class="card-image">
          <img src="https://secure.static.tumblr.com/3e609fe153419704388fd808c5e693c7/hyzum2u/eBso9dkqp/tumblr_static_tumblr_static_8o9jc5up7m8sccokscw0wwcog_640.jpg" alt="sample">
          <span class="card-title">

            <a href="/posts/{{ $post->id }}">

             {{ $post->title }}

            </a>
          </span>


        </div>
        <div class="card-content">
          <p class="ultra-small"> {{ $post->created_at->toFormattedDateString() }} </p>
          <p> {{ $post->body }} </p>

        </div>
        <div class="card-action">
          By <a id="name-color" href="#">Admin</a>
          <a href="#" class="right">Read more &gt;</a>
        </div>
  </div>
