@extends('layouts.app')

@section('content')


<div id="profile-page" class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <img src="/uploads/avatars/{{ $user->avatar }}" id="profile-image">
      <h2>{{ $user->name }}'s Profile</h2>
      <form enctype="multipart/form-data" action="/profile" method="POST">
        <label>Update je profile picture</label>
        <input type="file" name="avatar">
        <input type="hidden" name="_token" value="{{csrf_token() }}">
        <input type="submit" class="pull-right waves-effect waves-light btn">
    </div>
  </div>
</div>

@endsection
