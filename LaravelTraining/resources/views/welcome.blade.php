@extends('layout')
@section('title','Training')
@section('sidebar')
    
@endsection('sidebar')
@section('content')

<link href="{{ asset('css/form.css') }}" rel="stylesheet">

<body class="background">
    <div class="image_hover_bg">
        <form class="form">
            <table id="customers">
                <tr>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Address</th>
                </tr>
            @foreach($humans as $human)
                <tr>
                    <td>{{ $human['first_name'] }}</td>
                    <td>{{ $human['middle_name'] }}</td>
                    <td>{{ $human['last_name'] }}</td>
                    <td>{{ $human['email'] }}</td>
                    <td>{{ $human['age'] }}</td>
                    @if($human['gender'] =='1')
                        <td>Male</td>
                    @else
                        <td>Female</td>
                    @endif
                    <td>{{ $human['address'] }}</td>
                </tr>
            @endforeach
            </table>
        </form> 
    </div>
</body>
@endsection