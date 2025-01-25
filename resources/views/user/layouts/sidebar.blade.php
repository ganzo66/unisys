<div class="page-wrapper chiller-theme toggled">
    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
      <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar" class="sidebar-wrapper">
      <div class="sidebar-content">
        <div class="sidebar-brand">
          <a href="#" style="text-decoration: none">Их сургуулийн систем</a>
          <div id="close-sidebar">
            <i class="fas fa-times"></i>
          </div>
        </div>
        <div class="sidebar-header">
          <div class="user-pic">
            <img class="img-responsive img-rounded" src="https://img.freepik.com/free-vector/young-man-black-shirt_1308-173618.jpg?t=st=1731255498~exp=1731259098~hmac=6d28833989a2bd7af06da4be97ba8409d890c6ab444732318c8b60fa03aa8c16&w=740"
              alt="User picture"/>
          </div>
          <div class="user-info">
            <span class="user-name">
              <strong>Т.Ганзориг</strong>
            </span>
            <span class="user-role">Системийн удирдагч</span>
            <span class="user-status">
              <i class="fa fa-circle"></i>
              <span>Идэвхитэй</span>
            </span>
          </div>
        </div>

        <div class="sidebar-foot">
            <a href="#">
              <i class="fa fa-bell"></i>
              <span class="badge badge-pill badge-warning notification">3</span>
            </a>
            <a href="#">
              <i class="fa fa-envelope"></i>
              <span class="badge badge-pill badge-success notification">7</span>
            </a>
            <a href="#">
              <i class="fa fa-cog"></i>
              <span class="badge-sonar"></span>
            </a>
            <a href="#" onclick="document.getElementById('logout-form').submit();" title="Logout">
              <i class="fa fa-power-off"></i>
            </a>

            <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            
          </div>
        <!-- sidebar-header  -->
        {{-- <div class="sidebar-search">
          <div>
            <div class="input-group">
              <input type="text" class="form-control search-menu" placeholder="Search...">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </span>
              </div>
            </div>
          </div>
        </div> --}}


        <!-- sidebar-search  -->
        <div class="sidebar-menu">
          <ul>
            <li class="header-menu">
              <span>General</span>
            </li>
            <li class="sidebar-dropdown">
              <a href="#">
                <i class="fa fa-tachometer-alt"></i>
                <span>Хяналтын самбар</span>
                <span class="badge badge-pill badge-warning">Шинэ</span>
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li>
                    <a href="#">Их сургууль
                      <span class="badge badge-pill badge-success">Pro</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">Багш</a>
                  </li>
                  <li>
                    <a href="#">Оюутан</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="sidebar-dropdown">
              <a href="#">
                <i class="fa fa-shopping-cart"></i>
                <span>Их сургуулийн бүртгэл</span>
                <span class="badge badge-pill badge-danger">3</span>
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li>
                    <a href="#">Тэнхимийн бүртгэл

                    </a>
                  </li>
                  <li>
                    <a href="#">Анги танхимийн бүртгэл</a>
                  </li>
                  <li>
                    <a href="#">Номын сангийн бүртгэл</a>
                  </li>
                  <li>
                      <a href="#">Багшийн бүртгэл</a>
                    </li>
                    <li>
                      <a href="#">Оюутны бүртгэл</a>
                    </li>
                    <li>
                      <a href="#">Хичээлийн бүртгэл</a>
                    </li>
                    <li>
                      <a href="#">Дотуур байрны бүртгэл</a>
                    </li>
                </ul>
              </div>
            </li>
            <li class="sidebar-dropdown">
              <a href="#">
                <i class="far fa-gem"></i>
                <span>Багшийн бүртгэл</span>
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li>
                    <a href="{{url('teachers')}}">Багш нарын бүртгэл</a>
                  </li>
                  <li>
                    <a href="{{url('teacher/create')}}">Шинээр багш бүртгэх</a>
                  </li>
                  <li>
                    <a href="#">Орсон цагийн бүртгэл</a>
                  </li>
                  <li>
                    <a href="#">Оюутны дүнгийн бүртгэл</a>
                  </li>
                  {{-- <li>
                    <a href="#">Forms</a>
                  </li> --}}
                </ul>
              </div>
            </li>
            <li class="sidebar-dropdown">
              <a href="#">
                <i class="fa fa-chart-line"></i>
                <span>Оюутны бүртгэл</span>
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li>
                    <a href="{{url('admin/students')}}">Оюутны бүртгэл</a>
                  </li>
                  <li>
                    <a href="{{url('admin/student/create')}}">Оюутан шинээр бүртгэх</a>
                  </li>
                  <li>
                    <a href="#">Дүнгийн бүртгэл</a>
                  </li>
                  <li>
                    <a href="#">Төлбөрийн бүртгэл</a>
                  </li>
                  <li>
                      <a href="#">Ирцийн бүртгэл</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="sidebar-dropdown">
              <a href="#">
                <i class="fa fa-globe"></i>
                <span>Номын сангийн бүртгэл</span>
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li>
                    <a href="#">Номын бүртгэл</a>
                  </li>
                  <li>
                    <a href="#">Ном ашиглалтын бүртгэл</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="header-menu">
              <span>Extra</span>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-book"></i>
                <span>Documentation</span>
                <span class="badge badge-pill badge-primary">Beta</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-calendar"></i>
                <span>Calendar</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-folder"></i>
                <span>Examples</span>
              </a>
            </li>
          </ul>
        </div>
        <!-- sidebar-menu  -->
      </div>
      <!-- sidebar-content  -->
      {{-- <div class="sidebar-footer">
        <a href="#">
          <i class="fa fa-bell"></i>
          <span class="badge badge-pill badge-warning notification">3</span>
        </a>
        <a href="#">
          <i class="fa fa-envelope"></i>
          <span class="badge badge-pill badge-success notification">7</span>
        </a>
        <a href="#">
          <i class="fa fa-cog"></i>
          <span class="badge-sonar"></span>
        </a>
        <a href="#">
          <i class="fa fa-power-off"></i>
        </a>
      </div> --}}
    </nav>
    <!-- sidebar-wrapper  -->
    @include('user.layouts.mcontent')

  </div>


<!-- page-wrapper -->
