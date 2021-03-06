<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard')}}">
                <i class="ti-shield menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-newuser" aria-expanded="false" aria-controls="ui-basic">
                <i class="ti-palette menu-icon"></i>
                <span class="menu-title">USER</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-newuser">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('newuser.index')}}">User List</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('newuser.create')}}">Create User</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-Category" aria-expanded="false" aria-controls="ui-basic">
                <i class="ti-android menu-icon"></i>
                <span class="menu-title">CATEGORIES</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-Category">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('category.index')}}">Category List</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('category.create')}}">Create a Category</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-Author" aria-expanded="false" aria-controls="ui-basic">
                <i class="ti-window menu-icon"></i>
                <span class="menu-title">AUTHORS</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-Author">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('author.index')}}">Author List</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('author.create')}}">Create a Author</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-post" aria-expanded="false" aria-controls="ui-basic">
                <i class="ti-light-bulb menu-icon"></i>
                <span class="menu-title">POST</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-post">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('post.index')}}">All Postt</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('post.create')}}">Create a Post</a></li>
                </ul>
            </div>
        </li>



    </ul>
</nav>
