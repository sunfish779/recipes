<a href="{{ route('users.show', $user->id) }}">
    <img src="{{ $user->gravatar('100') }}" alt="{{ $user->name }}" class="gravatar"/>
  </a>
  <h5 class='mt-2'>{{ $user->name }}</h5>
