<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
        <div style="direction: rtl">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="https://www.gravatar.com/avatar/52f0fbcbedee04a121cba8dad1174462?s=200&d=mm&r=g" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{auth()->user()->name}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="/admin" class="nav-link {{ isActive('admin.') }}">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>پنل مدیریت</p>
                        </a>
                    </li>
                  @can('show-users')

                        <li class="nav-item has-treeview {{ isActive(['admin.users.index' , 'admin.users.create' , 'admin.users.edit'] , 'menu-open') }}">
                            <a href="#" class="nav-link {{ isActive('admin.users.index') }}">
                                <i class="nav-icon fa fa-users"></i>
                                <p>
                                    کاربران
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.users.index') }}" class="nav-link {{ isActive('admin.users.index') }}">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>لیست کاربران</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                  @endcan
                    @canany('show-permissions' , 'show-roles')
                    <li class="nav-item has-treeview {{ isActive(['admin.permissions.index' , 'admin.roles.index'] ,'menu-open') }}">
                        <a href="#" class="nav-link {{ isActive(['admin.permissions.index' , 'admin.roles.index']) }}">
                            <i class="nav-icon fa fa-barcode"></i>
                            <p>
                              اجازه دسترسی
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('show-roles')
                            <li class="nav-item">
                                <a href="{{ route('admin.roles.index') }}" class="nav-link {{ isActive('admin.roles.index') }}">
                                    <i class="fa fa-lock nav-icon"></i>
                                    <p>لیست مقام ها</p>
                                </a>
                            </li>
                            @endcan
                            @can('show-permissions')
                            <li class="nav-item ">
                                <a href="{{ route('admin.permissions.index') }}" class="nav-link {{ isActive('admin.permissions.index') }}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>همه دسترسی ها</p>
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcanany
                    @can('show-products')
                        <li class="nav-item has-treeview {{ isActive(['admin.products.index','admin.products.create'] ,'menu-open') }}">
                            <a href="#" class="nav-link {{ isActive(['admin.products.index' , 'admin.products.create']) }}">
                                <i class="nav-icon fa fa-product-hunt"></i>
                                <p>
                                    محصولات
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @can('show-products')
                                    <li class="nav-item">
                                        <a href="{{ route('admin.products.index') }}" class="nav-link {{ isActive('admin.products.index') }}">
                                            <i class="fa fa-list-alt nav-icon"></i>
                                            <p>لیست محصولات </p>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('show-category-products')
                        <li class="nav-item has-treeview {{ isActive(['admin.categoriesproduct.index','admin.categoriesproduct.create'] ,'menu-open') }}">
                            <a href="#" class="nav-link {{ isActive(['admin.categoriesproduct.index' , 'admin.categoriesproduct.create']) }}">
                                <i class="nav-icon fa fa-circle-o"></i>
                                <p>
                                    دسته بندی محصولات
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @can('show-products-category')
                                    <li class="nav-item">
                                        <a href="{{ route('admin.categoriesproduct.index') }}" class="nav-link {{ isActive('admin.categoriesproduct.index') }}">
                                            <i class="fa fa-list-alt nav-icon"></i>
                                            <p>لیست دسته بندی محصولات </p>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('show-sliders')
                        <li class="nav-item has-treeview {{ isActive(['admin.sliders.index','admin.sliders.create'] ,'menu-open') }}">
                            <a href="#" class="nav-link {{ isActive(['admin.sliders.index' , 'admin.sliders.create']) }}">
                                <i class="nav-icon fa fa-picture-o"></i>
                                <p>
                                   اسلایدرها
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @can('show-sliders')
                                    <li class="nav-item">
                                        <a href="{{ route('admin.sliders.index') }}" class="nav-link {{ isActive('admin.sliders.index') }}">
                                            <i class="fa fa-list-alt nav-icon"></i>
                                            <p>لیست اسلایدر ها</p>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('show-contents')
                        <li class="nav-item has-treeview {{ isActive(['admin.contents.index','admin.contents.create'] ,'menu-open') }}">
                            <a href="#" class="nav-link {{ isActive(['admin.contents.index' , 'admin.contents.create']) }}">
                                <i class="nav-icon fa fa-book"></i>
                                <p>
                                    مطالب
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @can('show-contents')
                                    <li class="nav-item">
                                        <a href="{{ route('admin.contents.index') }}" class="nav-link {{ isActive('admin.contents.index') }}">
                                            <i class="fa fa-list-alt nav-icon"></i>
                                            <p>لیست مطالب </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.contents.create') }}" class="nav-link {{ isActive('admin.contents.create') }}">
                                            <i class="fa fa-plus-circle nav-icon"></i>
                                            <p>افزودن مطلب </p>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('show-categories')
                        <li class="nav-item has-treeview {{ isActive(['admin.categories.index','admin.categories.create'] ,'menu-open') }}">
                            <a href="#" class="nav-link {{ isActive(['admin.categories.index' , 'admin.categories.create']) }}">
                                <i class="nav-icon fa fa-table"></i>
                                <p>
                                    دسبته بندی مطالب
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @can('show-categories')
                                    <li class="nav-item">
                                        <a href="{{ route('admin.categories.index') }}" class="nav-link {{ isActive('admin.categories.index') }}">
                                            <i class="fa fa-list-alt nav-icon"></i>
                                            <p>لیست دسبته بندی ها </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.categories.create') }}" class="nav-link {{ isActive('admin.categories.create') }}">
                                            <i class="fa fa-plus-circle nav-icon"></i>
                                            <p>افزودن دسته بندی جدید </p>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('show-galleries')
                        <li class="nav-item has-treeview {{ isActive(['admin.galleries.index','admin.galleries.create'] ,'menu-open') }}">
                            <a href="#" class="nav-link {{ isActive(['admin.galleries.index' , 'admin.galleries.create']) }}">
                                <i class="nav-icon fa fa-file-picture-o"></i>
                                <p>
                                 گالری تصاویر
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @can('show-categories')
                                    <li class="nav-item">
                                        <a href="{{ route('admin.galleries.index') }}" class="nav-link {{ isActive('admin.galleries.index') }}">
                                            <i class="fa fa-list-alt nav-icon"></i>
                                            <p>لیست گالری </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.galleries.create') }}" class="nav-link {{ isActive('admin.galleries.create') }}">
                                            <i class="fa fa-plus-circle nav-icon"></i>
                                            <p>افزودن گالری </p>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('show-potfolios')
                        <li class="nav-item has-treeview {{ isActive(['admin.portfolios.index','admin.portfolios.create'] ,'menu-open') }}">
                            <a href="#" class="nav-link {{ isActive(['admin.portfolios.index' , 'admin.portfolios.create']) }}">
                                <i class="nav-icon fa fa-th"></i>
                                <p>
                                    پروژه ها
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @can('show-portfolios')
                                    <li class="nav-item">
                                        <a href="{{ route('admin.portfolios.index') }}" class="nav-link {{ isActive('admin.portfolios.index') }}">
                                            <i class="fa fa-list-alt nav-icon"></i>
                                            <p>لیست پروژه ها </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.portfolios.create') }}" class="nav-link {{ isActive('admin.portfolios.create') }}">
                                            <i class="fa fa-plus-square nav-icon"></i>
                                            <p>افزودن پروژه  </p>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('show-category-potfolios')
                        <li class="nav-item has-treeview {{ isActive(['admin.categoriesportfolio.index','admin.categoriesportfolio.create'] ,'menu-open') }}">
                            <a href="#" class="nav-link {{ isActive(['admin.categoriesportfolio.index' , 'admin.categoriesportfolio.create']) }}">
                                <i class="nav-icon fa fa-table"></i>
                                <p>
                                    دسته بندی پروژه ها
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @can('show-portfolios')
                                    <li class="nav-item">
                                        <a href="{{ route('admin.categoriesportfolio.index') }}" class="nav-link {{ isActive('admin.categoriesportfolio.index') }}">
                                            <i class="fa fa-list-alt nav-icon"></i>
                                            <p>لیست دسته بندی ها </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.categoriesportfolio.create') }}" class="nav-link {{ isActive('admin.categoriesportfolio.create') }}">
                                            <i class="fa fa-plus-circle nav-icon"></i>
                                            <p>افزودن دسته بندی  </p>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('show-testimonials')
                        <li class="nav-item has-treeview {{ isActive(['admin.testimonials.index','admin.testimonials.create'] ,'menu-open') }}">
                            <a href="#" class="nav-link {{ isActive(['admin.testimonials.index' , 'admin.testimonials.create']) }}">
                                <i class="nav-icon fa fa-comments-o"></i>
                                <p>
                                   رضایت مشتریان
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @can('show-testimonials')
                                    <li class="nav-item">
                                        <a href="{{ route('admin.testimonials.index') }}" class="nav-link {{ isActive('admin.testimonials.index') }}">
                                            <i class="fa fa-list-alt nav-icon"></i>
                                            <p>لیست رضایت مشتریان </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.testimonials.create') }}" class="nav-link {{ isActive('admin.testimonials.create') }}">
                                            <i class="fa fa-plus-circle nav-icon"></i>
                                            <p>افزودن نظر جدید  </p>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('show-agent')
                        <li class="nav-item has-treeview {{ isActive(['admin.agents.index','admin.agents.create'] ,'menu-open') }}">
                            <a href="#" class="nav-link {{ isActive(['admin.agents.index' , 'admin.agents.create']) }}">
                                <i class="nav-icon fa fa-comments-o"></i>
                                <p>
                                   نمایندگان
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @can('show-agent')
                                    <li class="nav-item">
                                        <a href="{{ route('admin.agents.index') }}" class="nav-link {{ isActive('admin.agents.index') }}">
                                            <i class="fa fa-list-alt nav-icon"></i>
                                            <p>لیست نمایندگان </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.agents.create') }}" class="nav-link {{ isActive('admin.agents.create') }}">
                                            <i class="fa fa-plus-circle nav-icon"></i>
                                            <p>افزودن نماینده  </p>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('show-services')
                        <li class="nav-item has-treeview {{ isActive(['admin.services.index','admin.services.create'] ,'menu-open') }}">
                            <a href="#" class="nav-link {{ isActive(['admin.services.index' , 'admin.services.create']) }}">
                                <i class="nav-icon fa fa-book"></i>
                                <p>
                                    خدمات
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @can('show-services')
                                    <li class="nav-item">
                                        <a href="{{ route('admin.services.index') }}" class="nav-link {{ isActive('admin.services.index') }}">
                                            <i class="fa fa-list-alt nav-icon"></i>
                                            <p>لیست خدمات </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.contents.create') }}" class="nav-link {{ isActive('admin.services.create') }}">
                                            <i class="fa fa-plus-circle nav-icon"></i>
                                            <p>افزودن خدمات </p>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('show-category-service')
                        <li class="nav-item has-treeview {{ isActive(['admin.categoriesservice.index','admin.categoriesservice.create'] ,'menu-open') }}">
                            <a href="#" class="nav-link {{ isActive(['admin.categoriesservice.index' , 'admin.categoriesservice.create']) }}">
                                <i class="nav-icon fa fa-table"></i>
                                <p>
                                    دسبته بندی خدمات
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @can('show-category-service')
                                    <li class="nav-item">
                                        <a href="{{ route('admin.categoriesservice.index') }}" class="nav-link {{ isActive('admin.categoriesservice.index') }}">
                                            <i class="fa fa-list-alt nav-icon"></i>
                                            <p>لیست دسبته بندی ها </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.categoriesservice.create') }}" class="nav-link {{ isActive('admin.categoriesservice.create') }}">
                                            <i class="fa fa-plus-circle nav-icon"></i>
                                            <p>افزودن دسته بندی جدید </p>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('show-module')
                        <li class="nav-item has-treeview {{ isActive(['admin.modules.index','admin.modules.create'] ,'menu-open') }}">
                            <a href="#" class="nav-link {{ isActive(['admin.modules.index' , 'admin.modules.create']) }}">
                                <i class="nav-icon fa fa-table"></i>
                                <p>
                                     ماژول ها
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @can('show-category-module')
                                    <li class="nav-item">
                                        <a href="{{ route('admin.modules.index') }}" class="nav-link {{ isActive('admin.modules.index') }}">
                                            <i class="fa fa-list-alt nav-icon"></i>
                                            <p>لیست ماژول ها </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.modules.create') }}" class="nav-link {{ isActive('admin.modules.create') }}">
                                            <i class="fa fa-plus-circle nav-icon"></i>
                                            <p>افزودن ماژول جدید </p>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('show-category-module')
                        <li class="nav-item has-treeview {{ isActive(['admin.categoriesmodule.index','admin.categoriesmodule.create'] ,'menu-open') }}">
                            <a href="#" class="nav-link {{ isActive(['admin.categoriesmodule.index' , 'admin.categoriesmodule.create']) }}">
                                <i class="nav-icon fa fa-table"></i>
                                <p>
                                   دسته بندی ماژول ها
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @can('show-category-module')
                                    <li class="nav-item">
                                        <a href="{{ route('admin.categoriesmodule.index') }}" class="nav-link {{ isActive('admin.categoriesmodule.index') }}">
                                            <i class="fa fa-list-alt nav-icon"></i>
                                            <p>لیست دسبته بندی ها </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.categoriesmodule.create') }}" class="nav-link {{ isActive('admin.categoriesmodule.create') }}">
                                            <i class="fa fa-plus-circle nav-icon"></i>
                                            <p>افزودن دسته بندی جدید </p>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan


                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
