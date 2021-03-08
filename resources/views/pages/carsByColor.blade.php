@extends('template.main')
@section('content')
    {{-- cars by color --}}
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Color</th>
            <th scope="col">Cars</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($colors as $color)
            <tr>
              <th scope="row">{{$color->id}}</th>
              <td style="background-color: {{$color->color}}">{{$color->color}}</td>
              <td>
                  @foreach ($color->cars as $car_by_color)
                      <p class="font-weight-bold">{{$car_by_color->brand}} <span class="text-muted">{{$car_by_color->year}}</span></p>
                  @endforeach
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
@endsection