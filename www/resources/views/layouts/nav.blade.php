<nav id="TopMenu" class="light">
    <ul>
        <!-- Logo -->
        <li class="logo"><a href="/">{{ config('app.name', 'Laravel') }}</a></li>
        <!-- Right side -->
        <li 
            @if (isset($active) && $active === 1)
                class="active"
            @endif
        ><a href="/movies/">Movies</a></li>
        <li @if (isset($active) && $active === 2)
                class="active"
            @endif
        ><a href="/skema/">Skema</a></li>
        <!-- Right side -->
        <li class="search icon right"><span><input placeholder="Search..." type="search"><i class="fa fa-search"></i></span></li>
        <li class="icon"><a href="/contact/"><i class="fa fa-envelope"></i></a></li>
        <li class="icon"><a href="/settings/"><i class="fa fa-cog"></i></a></li>
        <li class="icon"><a href="/login/"><i class="fa fa-user"></i></a></li>
    </ul>
</nav>