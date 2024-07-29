
<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
        <span class="app-brand-text demo menu-text fw-bolder ms-2">TransitionPlus</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item active">
        <a href="{{ route('main.index')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Dashboard</div>
        </a>
        </li>

        <li class="menu-header small text-uppercase">
        <span class="menu-header-text">User & Accounts</span>
        </li>
        <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-arms-up" viewBox="0 0 16 16">
                <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
                <path d="m5.93 6.704-.846 8.451a.768.768 0 0 0 1.523.203l.81-4.865a.59.59 0 0 1 1.165 0l.81 4.865a.768.768 0 0 0 1.523-.203l-.845-8.451A1.5 1.5 0 0 1 10.5 5.5L13 2.284a.796.796 0 0 0-1.239-.998L9.634 3.84a.7.7 0 0 1-.33.235c-.23.074-.665.176-1.304.176-.64 0-1.074-.102-1.305-.176a.7.7 0 0 1-.329-.235L4.239 1.286a.796.796 0 0 0-1.24.998l2.5 3.216c.317.316.475.758.43 1.204Z"/>
              </svg></i>
            <div data-i18n="Account Settings">Mentors</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
            <a href="{{ route('product.new')}}" class="menu-link">
                <div data-i18n="Account">New Mentor</div>
            </a>
            </li>
            <li class="menu-item">
            <a href="{{ route('product.list')}}" class="menu-link">
                <div data-i18n="Notifications">List Mentors</div>
            </a>
            </li>
        </ul>
        </li>
        <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
              </svg></i>
            <div data-i18n="Authentications">Students</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
            <a href="{{ route('club.new')}}" class="menu-link">
                <div data-i18n="Basic">Student Registration</div>
            </a>
            </li>
            <li class="menu-item">
            <a href="{{ route('club.list')}}" class="menu-link">
                <div data-i18n="Basic">List Students</div>
            </a>
            </li>
        </ul>
        </li>

        <!-- Forms & Tables -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Management</span></li>
        <!-- Forms -->
        
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-git" viewBox="0 0 16 16">
                    <path d="M15.698 7.287 8.712.302a1.03 1.03 0 0 0-1.457 0l-1.45 1.45 1.84 1.84a1.223 1.223 0 0 1 1.55 1.56l1.773 1.774a1.224 1.224 0 0 1 1.267 2.025 1.226 1.226 0 0 1-2.002-1.334L8.58 5.963v4.353a1.226 1.226 0 1 1-1.008-.036V5.887a1.226 1.226 0 0 1-.666-1.608L5.093 2.465l-4.79 4.79a1.03 1.03 0 0 0 0 1.457l6.986 6.986a1.03 1.03 0 0 0 1.457 0l6.953-6.953a1.03 1.03 0 0 0 0-1.457"/>
                </svg></i>
                <div data-i18n="Misc">Resource Management</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('scout.new')}}" class="menu-link">
                        <div data-i18n="Error">New Publication</div>
                    </a>
                    </li>
                    <li class="menu-item">
                    <a href="{{ route('scout.list')}}" class="menu-link">
                        <div data-i18n="Under Maintenance">Publication List</div>
                    </a>
                    </li>
                </li>
                <li class="menu-item">
                    <a href="{{ route('scout.action.list')}}" class="menu-link">
                        <div data-i18n="Under Maintenance">Mentorship Request</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
        <a href="{{ route('report.transfer')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-copy"></i>
            <div data-i18n="Tables">Mentorship Report</div>
        </a>
        </li>
        <li class="menu-item">
        <a
            href=""
            class="menu-link"
        >
            <i class="menu-icon tf-icons bx bx-support"></i>
            <div data-i18n="Support">Support</div>
        </a>
        </li>
    </ul>
</aside>
<!-- / Menu -->
