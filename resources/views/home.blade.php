@extends('layouts.app')

@section('page.main')
<div class="container py-5">
    <h2 class="mb-3 fs-3">Train Board</h2>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Train Id</th>
            <th scope="col">Train Company</th>
            <th scope="col">From</th>
            <th scope="col">To</th>
            <th scope="col">Departure Time</th>
            <th scope="col">Arrival Time</th>
            <th scope="col">Carriage Num</th>
            <th scope="col">On Time</th>
            <th scope="col">Cancelled</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($trainList as $train)
          <tr>
            <th scope="row">{{ $train->Train_Id }}</th>
            <td>{{ $train->Train_Company }}</td>
            <td>{{ $train->From_Station }}</td>
            <td>{{ $train->To_Station }}</td>
            <td>{{ $train->Departure_Time }}</td>
            <td>{{ $train->Arrival_Time }}</td>
            <td>{{ $train->Carriage_Number }}</td>
            <td>{{ $train->On_Time }}</td>
            <td>{{ $train->Cancelled }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <h3 class="fs-3 mb-3">Train Departures Today</h3>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Train Id</th>
            <th scope="col">Train Company</th>
            <th scope="col">From</th>
            <th scope="col">To</th>
            <th scope="col">Departure Time</th>
            <th scope="col">Arrival Time</th>
            <th scope="col">Carriage Num</th>
            <th scope="col">On Time</th>
            <th scope="col">Cancelled</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($trainToday as $train)
          <tr>
            <th scope="row">{{ $train->Train_Id }}</th>
            <td>{{ $train->Train_Company }}</td>
            <td>{{ $train->From_Station }}</td>
            <td>{{ $train->To_Station }}</td>
            <td>{{ $train->Departure_Time }}</td>
            <td>{{ $train->Arrival_Time }}</td>
            <td>{{ $train->Carriage_Number }}</td>
            <td>{{ $train->On_Time }}</td>
            <td>{{ $train->Cancelled }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection
