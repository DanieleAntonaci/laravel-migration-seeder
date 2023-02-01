@extends('layout.main-layout')

@section('list-train')
<table>
    <tr>
      <th> place_of_departure</th>
      <th> departure_time</th>
      <th> departure_date</th>
      <th> place_of_arrival</th>
      <th> arrival_time</th>
      <th> arrival_date</th>
      <th> price</th>
      <th> train_code</th>
      <th> owner_company</th>
    </tr>
    @foreach ($trains as $train)
        <tr>
            <td>
            
                {{$train ->  place_of_departure}}
            </td>
            <td>
            
                {{$train ->  departure_time}}
            </td>
            <td>
            
                {{$train ->  departure_date}}
            </td>
            <td>
            
                {{$train ->  place_of_arrival}}
            </td>
            <td>
            
                {{$train ->  arrival_time}}
            </td>
            <td>
            
                {{$train ->  arrival_date}}
            </td>
            <td>
            
                {{$train ->  price}}
            </td>
            <td>
            
                {{$train ->  train_code}}
            </td>
            <td>
            
                {{$train ->  owner_company}}
            </td>
        </tr>
        

    @endforeach


  </table>


@endsection