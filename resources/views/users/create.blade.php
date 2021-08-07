@extends('layouts.default')

@section('title', '注册')

@section('content')
    <div class="card my-4 col-md-4 mx-auto">
        <div class="card-header">
            <h5>注册</h5>
        </div>
        <div class="card-body">
            @include('shared._errors')
            <form method="POST" action="{{ route('users.store') }}">
                {{ csrf_field() }}
                <div class="mb-2">
                    <label for="name" class="form-label">用户名</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">邮箱</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                </div>
                <div class="mb-2">
                    <label for="password" class="form-label">密码</label>
                    <input type="password" class="form-control" name="password" value="{{ old('password') }}">
                </div>
                <div class="mb-2">
                    <label for="password_confirmation" class="form-label">确认密码</label>
                    <input type="password" class="form-control" name="password_confirmation"
                        value="{{ old('password_confirmation') }}">
                </div>
                <button type="submit" class="btn btn-primary">注册</button>
            </form>
        </div>
    @stop
