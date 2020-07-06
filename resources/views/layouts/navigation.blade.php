    <nav>
        <div class="logo">
            <h4>LARAVEL</h4>
        </div>
        <ul>
            <li class="{{ request()->is('/') ? 'active' : ''}}"> <a href="/">Home</a></li>
            <li class="{{ request()->is('about') ? 'active' : ''}}"><a href="/about">About</a></li>
            <li class="{{ request()->is('contact') ? 'active' : ''}}"><a href="/contact">Contact</a></li>
            <li class="{{ request()->is('logout') ? 'active' : ''}}"><a href="/logout">Log Out</a></li>
        </ul>
    </nav>
