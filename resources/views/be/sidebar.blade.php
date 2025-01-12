<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{route('home')}}"><img src="{{asset('dist/assets/images/logo/logo.png')}}" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item @if(!@isset($menu)) active @endif">
                    <a href="{{route('home')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Home</span>
                    </a>
                </li>

                <li class="sidebar-item @if(@isset($menu) and $menu === 'Item_List') active @endif">
                    <a href="{{route('item')}}" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Item List</span>
                    </a>
                </li>

                <li class="sidebar-item @if(@isset($menu) and $menu === 'Borrowing_List') active @endif">
                    <a href="{{route('borrowing')}}" class='sidebar-link'>
                        <i class="bi bi-collection-fill"></i>
                        <span>Borrowing List</span>
                    </a>
                </li>


                <li class="sidebar-title">Report</li>

                <li class="sidebar-item @if(@isset($menu) and $menu === 'Borrowing_Report') active @endif ">
                    <a href="{{route('borrowing_report')}}" class='sidebar-link'>
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>Borrowing Report</span>
                    </a>
                </li>

                <li class="sidebar-title">Master Data</li>

                <li class="sidebar-item  @if(@isset($menu) and $menu === 'Teacher_List') active @endif">
                    <a href="{{route('teacher')}}" class='sidebar-link'>
                        <i class="bi bi-person-badge-fill"></i>
                        <span>Teacher Data</span>
                    </a>
                </li>

                <li class="sidebar-item @if(@isset($menu) and $menu === 'Student_List') active @endif">
                    <a href="{{route('student')}}" class='sidebar-link'>
                        <i class="bi bi-person-badge-fill"></i>
                        <span>Student Data</span>
                    </a>
                </li>

                <li class="sidebar-item @if(@isset($menu) and $menu === 'Item_Type') active @endif">
                    <a href="{{route('item_type')}}" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Item Type</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
