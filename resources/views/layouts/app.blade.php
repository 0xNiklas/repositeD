<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>packagedD | @yield('title')</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSS  -->
    <link href="fonts/materialicon.css" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>

    <!-- Dropdown Structure -->
    <ul id="dropdown-nav" class="dropdown-content">
        <li>
            <a href="#!">Example 1</a>
        </li>
        <li>
            <a href="#!">Example 2</a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#!">Log out</a>
        </li>
    </ul>

    <nav>
        <div class="nav-wrapper white">
            <div class="row">
                <div class="col s12 m6 l9">
                    <form>
                        <div class="input-field" style="height: 64px;">
                            <input id="search-package" name="search-package" type="search" placeholder="Search packages or authors.">
                            <label class="label-icon " for="search-package ">
                                <i class="material-icons black-text ">search</i>
                            </label>
                            <i class="material-icons ">close</i> -->
                        </div>
                    </form>
                </div>
                <div class="col s12 m6 l3 ">
                    <ul class="right ">
                        <li>
                            <a href="!# ">
                                <i class="material-icons black-text ">help_outline</i>
                            </a>
                        </li>
                        <li>
                            <a href="!# ">
                                <i class="material-icons black-text ">chat</i>
                            </a>
                        </li>
                        <li>
                            <a href="!# ">
                                <i class="material-icons black-text ">notifications</i>
                            </a>
                        </li>
                        <!-- Dropdown Trigger -->
                        <li>
                            <a class="dropdown-trigger black-text " href="#! " data-target="dropdown-nav ">
                                John Doe
                                <i class="material-icons right ">arrow_drop_down</i>
                                <img src="images/pb.png " alt="Profile Picture " class="picture ">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <ul id="slide-out " class="sidenav sidenav-fixed blue-grey " style="padding-top: 50px; ">
        <li>
            <a class="waves-effect white-text " href="#! ">
                <i class="material-icons white-text ">home</i>Home
            </a>
        </li>
        <li>
            <a class="waves-effect white-text " href="#! ">
                <i class="material-icons white-text ">dashboard</i>Dashboard
            </a>
        </li>
        <li class="isActiveLi ">
            <a class="waves-effect white-text isActiveA " href="packages.html ">
                <i class="material-icons isActiveIcon ">person</i>Packages
            </a>
        </li>
        <li>
            <a class="waves-effect white-text " href="#! ">
                <i class="material-icons white-text ">help_outline</i>Help Center
            </a>
        </li>
        <li>
            <a class="waves-effect white-text " href="#! ">
                <i class="material-icons white-text ">settings</i>Settings
            </a>
        </li>
    </ul>
    <!-- <a href="# " data-target="slide-out " class="sidenav-trigger "><i class="material-icons ">menu</i></a> -->

    <div class="myContainer ">
        @yield('content')
    </div>

    <div class="row ">

        @yield('pageination')

        {{--  <ul class="pagination right-align ">
            <li class="disabled ">
                <a href="#! ">
                    <i class="material-icons ">chevron_left</i>
                </a>
            </li>
            <li class="isPageActiveLi ">
                <a class="white-text " href="#! ">1</a>
            </li>
            <li class="waves-effect ">
                <a href="#! ">2</a>
            </li>
            <li class="waves-effect ">
                <a href="#! ">3</a>
            </li>
            <li class="waves-effect ">
                <a href="#! ">4</a>
            </li>
            <li class="waves-effect ">
                <a href="#! ">5</a>
            </li>
            <li class="waves-effect ">
                <a href="#! ">
                    <i class="material-icons ">chevron_right</i>
                </a>
            </li>
        </ul>  --}}
    </div>
    </div>

    <!--  Scripts-->
    <script type="text/javascript " src="js/jquery.min.js "></script>
    <script type="text/javascript " src="js/materialize.js "></script>
    <script type="text/javascript " src="js/init.js "></script>

</body>

</html>