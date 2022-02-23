@extends('layouts.base')

@section('documentTitle')
    {{ $title }}
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col">
        <form action="{{ route('monitors.store') }}" method="post">
        @csrf
        @method('POST')
        <div class="mb-3">
          <label for="brand" class="form-label">Brand</label>
          <input type="text" class="form-control" id="brand" name="brand">
        </div>
        <div class="mb-3">
          <label for="model" class="form-label">Model</label>
          <input type="text" class="form-control" id="model" name="model">
        </div>
        <div class="mb-3">
          <label for="inches" class="form-label">Inches</label>
          <input type="number" class="form-control" id="inches" name="inches">
        </div>
        <div class="mb-3">
          <label for="resolution" class="form-label">Resolution</label>
          <input type="text" class="form-control" id="resolution" name="resolution">
        </div>
        <div class="mb-3">
          <label for="frameRate" class="form-label">frameRate</label>
          <input type="number" class="form-control" id="frameRate" name="frameRate">
        </div>
        <div class="mb-3">
          <label for="lightness" class="form-label">lightness</label>
          <input type="number" class="form-control" id="lightness" name="lightness">
        </div>
        <div class="mb-3">
          <label for="photo" class="form-label">photo</label>
          <input type="text" class="form-control" id="photo" name="photo">
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">price</label>
          <input type="number" class="form-control" id="price" name="price">
        </div>

        <input class="btn btn-primary" type="submit" value="Invia">
      </form>
    </div>
  </div>
</div>
@endsection