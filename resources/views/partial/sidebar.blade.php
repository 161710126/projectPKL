<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/FB_IMG_1505046377047.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">M Junika Berli</a>
        </div>
      </div>

      
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-navicon"></i>
              <p>
                DATA MTs
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{Route('gurus.index')}}" class="nav-link ">
                  <i class="fa fa-user-plus nav-icon"></i>
                  <p> Guru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{Route('eskuls.index')}}" class="nav-link">
                  <i class="fa fa-soccer-ball-o nav-icon"></i>
                  <p>Eskul</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{Route('kategorisartikel.index')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Kategori Artikel</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{Route('kategorisfasilitas.index')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Kategori Fasilitas</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{Route('kategorisgaleri.index')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Kategori Galeri</p>
                </a>
               <li class="nav-item">
                <a href="{{Route('artikels.index')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Artikel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{Route('fasilitas.index')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Fasilitas</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{Route('galeris.index')}}" class="nav-link">
                  <i class="fa fa-image nav-icon"></i>
                  <p>Galeri</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{Route('prestasis.index')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Prestasi</p>
                </a>
              </li>
            </ul>
          </li>
          
          
          <li class="nav-item">
            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="nav-link">
                                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
              <i class="nav-icon fa fa-sign-out text-danger">
              <p class="text">Logout</p></i>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>