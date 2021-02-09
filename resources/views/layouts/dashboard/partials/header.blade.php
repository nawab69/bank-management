<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center" data-nav="brand-center">
    <div class="navbar-header d-xl-block d-none">
        <ul class="nav navbar-nav">
            <li class="nav-item"><a class="navbar-brand" href="../../../html/ltr/horizontal-menu-template/index.html"><span class="brand-logo">
                            </span>
                    <h2 class="brand-text mb-0">{{ setting('site_title', 'Laravel') }}</h2>
                </a></li>
        </ul>
    </div>
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ml-auto">
            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder">{{Auth::user()->first_name.' '.Auth::user()->last_name}}</span><span class="user-status">{{Auth::user()->role->name}}</span></div><span class="avatar"><img class="round" src="{{ Auth::user()->getFirstMediaUrl('avatar') != null ? Auth::user()->getFirstMediaUrl('avatar') : config('app.placeholder').'160' }}" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user"><a class="dropdown-item" href="javascript:void(0);"><i class="mr-50" data-feather="user"></i> Profile</a><a class="dropdown-item" href="javascript:void(0);"><i class="mr-50" data-feather="mail"></i> Inbox</a><a class="dropdown-item" href="javascript:void(0);"><i class="mr-50" data-feather="check-square"></i> Task</a><a class="dropdown-item" href="javascript:void(0);"><i class="mr-50" data-feather="message-square"></i> Chats</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="javascript:void(0);"><i class="mr-50" data-feather="settings"></i> Settings</a><a class="dropdown-item" href="javascript:void(0);"><i class="mr-50" data-feather="credit-card"></i> Pricing</a><a class="dropdown-item" href="javascript:void(0);"><i class="mr-50" data-feather="help-circle"></i> FAQ</a><a class="dropdown-item" href="javascript:void(0);" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="mr-50" data-feather="power"></i> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- END: Header-->
