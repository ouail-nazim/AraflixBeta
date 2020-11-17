<nav>
    <div class="menu-icon"><span class="fa fa-bars"></span></div>
    <div class="logo"> <a href="/"><img width="200px" src="/images/logo.png" alt="logo"></a> </div>
    <div class="nav-items">
        <li><a href="/">Home</a></li>
        <li><a href="/movies">Movies</a></li>
        <li><a href="/tvShow">Tv Shows</a></li>
        <li><a href="/anime">Anime</a></li>
    </div>
    <div class="search-icon"><span class="fa fa-search"></span></div>
    <div class="cancel-icon"><span class="fa fa-times"></span></div>
    <form action="#" method="post">
        @csrf
        <input type="search" class="search-data" required placeholder="search ....">
        <button class="fa fa-search"></button>
    </form>
</nav>
