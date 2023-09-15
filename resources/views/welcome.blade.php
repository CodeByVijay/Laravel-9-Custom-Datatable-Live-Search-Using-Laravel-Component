@extends('app')
@section('title', 'Home')
@section('content')

<div class="container mx-5 my-5">
    <x-search.search-table url="/" name="search"/>
<div class="table-responsive">
    <table id="dataTbl" class="table table-bordered" style="width: 100%;">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($leads as $key=>$lead)
<tr>
    <td>{{$key+1}}</td>
    <td>{{$lead->title}} {{$lead->firstName}} {{$lead->lastName}}</td>
    <td>{{$lead->homePhone}}</td>
    <td>{{$lead->type}}</td>
    <td>
        <a href="#" class="btn btn-sm btn-success">Edit</a>
        <a href="#" class="btn btn-sm btn-danger">Delete</a>
    </td>

</tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection
