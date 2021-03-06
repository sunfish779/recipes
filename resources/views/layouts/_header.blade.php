<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container ">
        <a class="navbar-brand" href="/">中华美食</a>
        <ul class="navbar-nav justify-content-end">
            @if (Auth::check())
                <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">用户列表</a></li>
                <div class="dropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                          </a>
                          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('users.show', Auth::user()) }}">个人中心</a></li>
                            <li><a class="dropdown-item" href="{{ route('users.edit', Auth::user()) }}">编辑资料</a></li>
                            <li><a class="dropdown-item" id="logout" href="#">
                                <form action="{{ route('logout') }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-block btn-danger btn-sm" type="submit" name="button">退出</button>
                                </form>
                            </a></li>
                          </ul>
                        </li>
                      </ul>
                  </div>
            @else
                <li class="nav-item"><a class="nav-link" href="">帮助</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('login')}}">登录</a></li>
            @endif
        </ul>
    </div>
</nav>
