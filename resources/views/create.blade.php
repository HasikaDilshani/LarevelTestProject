@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Shedule your class
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('form.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Description:</label>
              <input type="text" class="form-control" name="item_name"/>
          </div>
          <div class="form-group">
              <label for="price">Date :</label>
              <input type="text" class="form-control" name="sku_no"/>
          </div>
          <div class="form-group">
              <label for="quantity">Fee :</label>
              <input type="text" class="form-control" name="price"/>
          </div>
          <button type="submit" class="btn btn-primary">Add to my Timetable</button>
      </form>
  </div>
</div>
@endsection