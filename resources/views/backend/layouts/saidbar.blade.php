<!-- Brand Logo -->
<a href="/" class="brand-link">
    <img src="{{asset('frontend/img/logo/1.png')}}" alt="smartBox" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">ٍSmartBox</span>
  </a>
@php
    $name = explode(' ',auth('admin')->user()->name)
@endphp
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ucfirst($name[0])}} </a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Banners
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('banner.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Banner </p>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{route('banner.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Banner </p>
                </a>
              </li>
          </ul>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                afileate
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('ref_level.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ref_level </p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('ref_level.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add ref_level </p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('ref_category.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>ref_category </p>
                    </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('ref_category.create')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add ref_category </p>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('task.index')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>tasks </p>
                        </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{route('task.create')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add tasks </p>
                          </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('user_task.index')}}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>user tasks </p>
                            </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{route('user_task.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add user tasks  </p>
                              </a>
                            </li>
            </ul>
          </li>



        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                about
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('about.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>about </p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('about.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add about </p>
                  </a>
                </li>
            </ul>
          </li>



          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                media
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('media.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>media </p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('media.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add media </p>
                  </a>
                </li>
            </ul>
          </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                order
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('order.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>order </p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('order.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add order </p>
                  </a>
                </li>
            </ul>
          </li>


        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                group Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('groupro.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> group Products </p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('groupro.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add group Products </p>
                  </a>
                </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Winner
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('winner.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Winner </p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('winner.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Winner</p>
                  </a>
                </li>
            </ul>
          </li>

         <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Product
              <i class="fas fa-angle-left right"></i>

            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('product.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>product </p>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{route('product.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add product </p>
                </a>
              </li>
          </ul>
        </li>


        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                supplier
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('supplier.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>supplier </p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('supplier.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add supplier </p>
                  </a>
                </li>
            </ul>
          </li>


         <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Category
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('category.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All categpry</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{route('category.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add category</p>
                </a>
              </li>
          </ul>
        </li>

         <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Brand
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('brand.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All brand</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{route('brand.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add brand</p>
                </a>
              </li>
          </ul>
        </li>

        <li class="nav-item">

            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Focus
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('focus.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Focus</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('focus.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Focus</p>
                  </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>Art<i class="fas fa-angle-left right"></i> </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('art.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All art</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('art.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add art</p>
                  </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>clients<i class="fas fa-angle-left right"></i> </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('client.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All client</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('client.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add client</p>
                  </a>
                </li>
            </ul>
        </li>


        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>User Account<i class="fas fa-angle-left right"></i> </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('user.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All user</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('user.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add user</p>
                  </a>
                </li>
            </ul>
        </li>



        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>emp Account<i class="fas fa-angle-left right"></i> </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('emp.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All emp</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('emp.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add emp</p>
                  </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>faq Account<i class="fas fa-angle-left right"></i> </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('faq.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All faq</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('faq.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add faq</p>
                  </a>
                </li>
            </ul>
        </li>









        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Setting Edit
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('setting.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All setting</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('setting.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Setting Add </p>
                  </a>
                </li>
            </ul>
        </li>




        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Team Edit
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('team.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Team</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('team.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Teanm Add </p>
                  </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                branch
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('branch.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All branch</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('branch.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>add branch </p>
                  </a>
                </li>
            </ul>
        </li>


         <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Testimonials
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('testim.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Testimonials </p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('testim.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>add Testimonials  </p>
                  </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Project
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('project.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All project </p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('project.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>add project  </p>
                  </a>
                </li>
            </ul>
        </li>



         <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               FrontEnd Edit
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Slid</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Slid</p>
                  </a>
                </li>
            </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
