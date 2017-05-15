@if (count($errors))
<br><br>
 <div class="form-group">
    <div id="card-alert" class="card red">
      <div class="card-content white-text">
        <p><i class="mdi-alert-error"></i>
          @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
          @endforeach
        </p>
      </div>
    </div>
  </div>
@endif
