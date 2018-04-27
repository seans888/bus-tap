<div class="sidebar" data-background-color="white" data-active-color="info">
    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->
    
    <div class="sidebar-wrapper">  
        <ul class="nav">
            @guest
                <li>
                    <a href="{{ route('login') }}">
                        <p>Sign In</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('register') }}">
                        <p>Sign Up</p>
                    </a>
                </li>
            @else
                <li>
                    <a>
                        <p>Hello, {{ Auth::user()->name }}.</p>
                        <p>You are logged in as <br />{{ Auth::user()->user_type }}.</p>
                    </a>
                </li>
                @if ((Auth::user()->user_type == 'Employee') || (Auth::user()->user_type == 'Manager'))
                    <li>
                        <a href="/home">
                            <i class="ti-home"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="ti-announcement"></i>
                            <p>BGC Bus News</p>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/news">View News</a>
                            </li>
                            <li>
                                <a href="/news/create">Add News</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="ti-map"></i>
                            <p>Routes</p>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/routes">View Routes</a>
                            </li>
                            <li>
                                <a href="/routes/create">Add Routes</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="ti-map-alt"></i>
                            <p>Stops</p>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/stops">View Stops</a>
                            </li>
                            <li>
                                <a href="/stops/create">Add Stops</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="ti-car"></i>
                            <p>Buses</p>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/buses">View Buses</a>
                            </li>
                            <li>
                                <a href="/buses/create">Add Buses</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="ti-time"></i>
                            <p>Schedules</p>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/schedules">View Schedules</a>
                            </li>
                            <li>
                                <a href="/schedules/create">Add Schedules</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="/reservations">
                            <i class="ti-ticket"></i>
                            <p>Reservations</p>
                        </a>
                    </li>

                    <li>
                        <a href="/feedback">
                            <i class="ti-comment"></i>
                            <p>Passenger Feedback</p>
                        </a>
                    </li>
                @endif
            @endguest
        </ul>
    </div>
</div>