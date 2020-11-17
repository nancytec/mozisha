<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span><i class="fe fe-home"></i> Main</span>
                </li>
                <li class="active">
                    <a href="{{route('admin.home')}}"><span>Dashboard</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><span>Users</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="" href="#"> Mentor </a></li>
                        <li><a class="" href="#"> Apprentices </a></li>
                        <li><a class="" href="#"> Admins </a></li>
                        <li><a class="" href="{{route('admin.register')}}"> New </a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="{{route('admin.settings')}}"><span>Settings</span></a>
                </li>
                <li class="menu-title">
                    <span><i class="fe fe-document"></i> Actions</span>
                </li>
                <li class="">
                    <a href="{{route('admin.profile')}}"><span>Profile</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><span>Blog</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="" href="{{route('blog.new')}}"> New </a></li>
                        <li><a class="" href="{{route('blog.list')}}"> Blogs </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><span>Team</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="" href="{{route('team.add')}}"> New </a></li>
                        <li><a class="" href="{{route('team.list')}}"> List </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
