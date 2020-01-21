@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-hover">
            <thead style="border-bottom: 10px solid black;border-top: 10px solid black">
                <tr>
                <th scope="col"><h4>Name</h4></th>
                <th scope="col"><h4>Age</h4></th>
                <th scope="col"><h4>Address</h4></th>
                <th colspan="2"><h4 style="margin-left:29%">Action</h4></th>
                </tr>
            </thead>
            <tbody>
                @foreach($cruds as $crud)
                <tr>
                <td>{{ $crud['name'] }}</td>
                <td>{{ $crud['age'] }}</td>
                <td>{{ $crud['address'] }}</td>
                <td><a href=""></a><button class='btn-outline-danger'>DELETE</button></a></td>
                <td><button class='btn-outline-primary'>&nbsp;&nbsp;&nbsp;&nbsp;EDIT&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                </tr>
                @endforeach
            </tbody>
          
        </table>
        <center><a href=""></a><button class='btn-outline-success'>&nbsp;&nbsp;&nbsp;&nbsp;ADD&nbsp;&nbsp;&nbsp;&nbsp;</button></center>
        </div>
    </div>
</div>
@endsection