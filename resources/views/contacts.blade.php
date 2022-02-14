@extends('layouts.main')

@section('container')
<div class="title-top mb-5">
  <h2 class="fw-bold">Contact Us</h2>
</div>
<form method="post" action="{{route('contacts.store')}}">
  {{csrf_field()}}
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="inputname" placeholder="Nama" name="name">
  <label for="inputname">Name</label>
</div>
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="inputemail" placeholder="Email" name="email">
  <label for="inputemail" class="form-label">Email</label>
</div>
<div class="form-floating mb-3">
  <textarea class="form-control" placeholder="Tinggalkan pesan disini" id="floatingTextarea2" style="height: 100px" name="message"></textarea>
  <label for="floatingTextarea2">Message</label>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection