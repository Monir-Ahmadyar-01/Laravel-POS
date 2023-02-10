<div class="left-side-menu">


    <div class="slimscroll-menu">

        <!-- User box -->
        <div class="user-box text-center">
            <img src="{{asset('images/'.Auth::user()->thumbnail)}}" alt="user-img" title="Admin"
                class="rounded-circle img-thumbnail avatar-lg">
            <div class="dropdown">
                <a href="#" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                    data-toggle="dropdown">{{uppercase(Auth::user()->name)}}</a>
               
            </div>
            <p class="text-muted">
                @foreach (Auth::user()->role as $roles)
                {{$roles->name}},
                @endforeach
            </p>

           
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">


                <li>
                    <a href="{{route('home')}}" style="text-align:right;">
                        <span> صفحه اصلی </span>
                        <i class="mdi mdi-view-dashboard"></i>
                    </a>
                </li>

                @can('view-product', User::class)


                <li>
                    <a href="javascript: void(0);" style="text-align:right;">
                        <span> محصول</span>
                        <i class="ti-flag"></i>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('product.index')}}" style="text-align:right;" class="mr-3">نمایش</a></li>
                        <li><a href="{{route('product.create')}}" style="text-align:right;" class="mr-3">ثبت</a></li>

                    </ul>
                </li>
                @endcan

                @can('view-order', User::class)


                <li>
                    <a href="javascript: void(0);" style="text-align:right;">
                        <span>فروشات</span>
                        <i class="ti-flag"></i>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('order.index')}}" style="text-align:right;" class="mr-3">نمایش</a></li>
                        <li><a href="{{route('order.create')}}" style="text-align:right;" class="mr-3">ثبت</a></li>

                    </ul>
                </li>
                @endcan



                @can('view-customer', User::class)


                <li>
                    <a href="javascript: void(0);" style="text-align:right;">
                        <span>مشتری</span>
                        <i class="ti-flag"></i>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('customer.index')}}" style="text-align:right;" class="mr-3">نمایش</a></li>

                    </ul>
                </li>
                @endcan



                @can('view-user', User::class)
                {{-- expr --}}

                <li>
                    <a href="javascript: void(0);" style="text-align:right;">
                        <span> حساب کاربری</span>
                        <i class="ti-user"></i>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('user.index')}}" style="text-align:right;" class="mr-3">نمایش</a></li>
                        <li><a href="{{route('user.create')}}" style="text-align:right;" class="mr-3">ثبت</a></li>
                    </ul>
                </li>
                @endcan

                @can('view-role', User::class)
                {{-- expr --}}

                <li>
                    <a href="javascript: void(0);" style="text-align:right;">
                        <span> صلاحیت ها </span>
                        <i class="ti-crown"></i>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('role.index')}}" style="text-align:right;" class="mr-3">نمایش</a></li>
                        <li><a href="{{route('role.create')}}" style="text-align:right;" class="mr-3">ثبت</a></li>
                    </ul>
                </li>
                @endcan

                <!-- @can('view-permission', User::class)
                {{-- expr --}}

                <li>
                    <a href="javascript: void(0);">
                        <i class="ti-flag"></i>
                        <span> Permissions</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('permission.index')}}">View</a></li>
                        <li><a href="{{route('permission.create')}}">Create</a></li>
                        {{-- <li><a href="ui-draggable-cards.html">Draggable Cards</a></ --}}
                    </ul>
                </li>
                @endcan -->


                @can('view-category', User::class)
                {{-- expr --}}

                <li>
                    <a href="javascript: void(0);" style="text-align:right;">
                        <span> کتگوری</span>
                        <i class="ti-flag"></i>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('category.index')}}" style="text-align:right;" class="mr-3">نمایش </a></li>
                        <li><a href="{{route('category.create')}}" style="text-align:right;" class="mr-3">ثبت</a></li>
                    </ul>
                </li>
                @endcan


                @can('view-brands', User::class)
                {{-- expr --}}

                <li>
                    <a href="javascript: void(0);" style="text-align:right;">
                        <span> برند ها</span>
                        <i class="ti-flag"></i>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('brand.index')}}" style="text-align:right;" class="mr-3">نمایش</a></li>
                        <li><a href="{{route('brand.create')}}" style="text-align:right;" class="mr-3">ثبت</a></li>
                    </ul>
                </li>
                @endcan






            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>