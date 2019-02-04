@extends('material-dashboard.index')
@section('content')
    <ul>
        @foreach ($users as $user)
            <li><a href="{{route('company.addform',$user->id)}}">{{$user->name}}</a></li>
        @endforeach
    </ul>
@endsection
