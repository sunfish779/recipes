@extends('layouts.default')
@section('title', '所有用户')

@section('content')
<div class="my-4 col-md-4 mx-auto">
  <h2 class="mb-4 text-center">所有用户</h2>
  <ul class="list-group list-group-flush">
    @foreach ($users as $user)
      @include('users._user')
    @endforeach
  </ul>

  <div class="mt-3">
      {!! $users->render() !!}
  </div>
</div>
@stop
