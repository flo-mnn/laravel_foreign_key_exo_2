@extends('template.main')
@section('content')
    {{-- add color --}}
    <form action="/colors" method="POST" class="mt-5">
        @csrf
        <div class="form-group">
          <label>Pick a color</label>
          <input type="color" class="form-control" name="color">
        </div>
        <button type="submit" class="btn btn-warning">Add Color</button>
    </form>
    {{--  add car--}}
    <form class="mt-5" action="/cars" method="POST">
        @csrf
        <div class="form-group">
          <label>Brand</label>
          <input type="text" class="form-control" name="brand">
        </div>
        <div class="form-group">
          <label>Year</label>
          <input type="number" class="form-control" max="2021" name="year">
        </div>
        <div class="my-4 border border-dark p-5 form-control" style="background-color: {{$colors[0]->color}}" id="colorPreview">

        </div>
        <div class="form-group">
          <label>Choose among colors available</label>
          <select class="form-control" name="color_id" id="colorInput">
              @foreach ($colors as $color)
                <option value="{{$color->id}}">{{$color->color}}</option>
              @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-success">Add a Car</button>
    </form>
    <hr>
    {{-- all cars with their color --}}
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Brand</th>
            <th scope="col">Year</th>
            <th scope="col">Color</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
            <tr>
              <th scope="row">{{$car->id}}</th>
              <td>{{$car->brand}}</td>
              <td>{{$car->year}}</td>
              <td style="background-color: {{$car->colors->color}}">{{$car->colors->color}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
@endsection