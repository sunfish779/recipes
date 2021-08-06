@extends('layouts.default')

@section('title', '最新推荐')
@section('content')

<div class="text-center">
    @include('shared._user_info', ['user' => $user])
</div>

@endsection
