<aside class="main-sidebar">
        <!-- sidebar-->
        <section class="sidebar">
            <div class="user-profile px-20 pt-15 pb-10">
                <div class="d-flex align-items-center">
                    <div class="image">
                        <img src="{{asset('/admin/images/avatar/avatar-13.png')}}" class="avatar avatar-lg bg-primary-light rounded100" alt="User Image">
                    </div>
                    <div class="info">
                        <a class="px-20" data-toggle="" href="#">Johen Doe</a>
                        <!-- <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><i class="ti-user"></i> Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                        </div> -->
                    </div>
                </div>
                <ul class="list-inline profile-setting mt-20 mb-0 d-flex justify-content-between">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Search"><i data-feather="search"></i></a></li>
                    <li><a href="/freelancer-panel/chat" data-toggle="tooltip" data-placement="top" title="Chat"><i data-feather="message-square"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Logout"><i data-feather="log-out"></i></a></li>
                </ul>
            </div>
            <!-- sidebar menu-->
            <ul class="sidebar-menu" data-widget="tree">
                <li>
                    <a href="/freelancer-panel">
                        <i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/freelancer-panel/applications">
                        <i class="icon-File"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        <span>Projects</span>
                    </a>
                </li>
                <li>
                    <a href="/freelancer-panel/chat">
                        <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
                        <span>Chat</span>
                    </a>
                </li>
                <li>
                    <a href="/freelancer-panel/commission">
                        <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
                        <span>Earning</span>
                    </a>
                </li>
            </ul>
        </section>
    </aside>