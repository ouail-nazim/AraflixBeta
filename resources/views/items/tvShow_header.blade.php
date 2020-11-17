<header>
    <!-- <img src="1.jpg" alt=""> -->
    <div class="banner">
        <h1>Tv Shows</h1>
        <ul>
            <li class="dropdown-btn" onclick="showlist(this)" >
                Category &nbsp; <i class="fa fa-chevron-down"></i>
                <ul class="dropdown-box hide">
                    @foreach($Categorys as $Category)
                        <a href="/tvShow?Category={{$Category->name}}">{{$Category->name}}</a>
                    @endforeach


                </ul>
            </li>
        </ul>
        <ul>
            <li class="dropdown-btn" onclick="showlist(this)" >
                Rating &nbsp; <i class="fa fa-chevron-down"></i>
                <ul class="dropdown-box hide">
                    <a href="/tvShow">All</a>
                    <a href="/tvShow?Rating=18">+18 &nbsp; [PG]</a>
                    <a href="/tvShow?Rating=16">+16 &nbsp; [Tv-16]</a>
                    <a href="/tvShow?Rating=14">+14 &nbsp; [Tv-14]</a>
                    <a href="/tvShow?Rating=12">+12 &nbsp; [Tv-12]</a>
                    <a href="/tvShow?Rating=Y-12">-12 &nbsp; [Y-12]</a>
                </ul>
            </li>
        </ul>


    </div>
</header>
