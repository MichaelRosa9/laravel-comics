<header class="container flex-center-between">
  <a href="/">
    <img src="{{ asset('img/dc-logo.png') }}" alt="Logo">
  </a>
  <ul>
    <li>
      <a class="{{ (request()->is('/')) ? 'active' : '' }}" href="/">
        Characters
      </a>
    </li>
    <li>
      <a class="{{ (request()->is('comics')) ? 'active' : '' }}" href="{{ route('comics') }}">
        Comics
      </a>
    </li>
    <li>
      <a class="{{ (request()->is('')) ? 'active' : '' }}" href="#">
        Movies
      </a>
    </li>
    <li>
      <a class="{{ (request()->is('')) ? 'active' : '' }}" href="#">
        Tv
      </a>
    </li>
    <li>
      <a class="{{ (request()->is('')) ? 'active' : '' }}" href="#">
        Games
      </a>
    </li>
    <li>
      <a class="{{ (request()->is('')) ? 'active' : '' }}" href="#">
        Collectibles
      </a>
    </li>
    <li>
      <a class="{{ (request()->is('')) ? 'active' : '' }}" href="#">
        Videos
      </a>
    </li>
    <li>
      <a class="{{ (request()->is('')) ? 'active' : '' }}" href="#">
        Fans
      </a>
    </li>
    <li>
      <a class="{{ (request()->is('')) ? 'active' : '' }}" href="#">
        News
      </a>
    </li>
    <li>
      <a class="{{ (request()->is('')) ? 'active' : '' }}" href="#">
        Shop
      </a>
    </li>
  </ul>
</header>