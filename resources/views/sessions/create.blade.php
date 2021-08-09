@extends('layouts.default')
@section('title', '登录')

@section('content')
<div class="card my-4 col-md-4 mx-auto">
  <div class="card ">
    <div class="card-header">
      <h5>登录</h5>
    </div>
    <div class="card-body">
      @include('shared._errors')

      <form method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}

        <div class="mb-2">
            <label for="email" class="form-label">邮箱</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
        </div>
        <div class="mb-2">
            <label for="password" class="form-label">密码（<a href="{{ route('password.request') }}">忘记密码</a>）</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="mb-2">
            <input type="checkbox" class="form-check-input" name="remember" id="check1">
            <label for="check1" class="form-check-label">记住我</label>
        </div>

        <button type="submit" class="btn btn-primary">登录</button>
      </form>

      <hr>

      <p>还没账号？<a href="{{ route('signup') }}">现在注册</a>!</p>
    </div>
  </div>
</div>
@stop
