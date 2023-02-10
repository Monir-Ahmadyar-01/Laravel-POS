@extends('backend.layout.app')
@section('content')

<!-- Begin page -->

<!-- end Topbar -->

<!-- ========== Left Sidebar Start ========== -->

<!-- Left Sidebar End -->

<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row" dir="rtl">

                <div class="col-xl-3 col-md-6">
                    <div class="card-box">
                        <div class="dropdown float-right">
                            
                            
                        </div>

                        <h4 class="header-title mt-0 mb-2 text-right">مجموع عواید</h4>

                        <div class="widget-chart-1">
                    
                            <div class="widget-detail-1 text-right">
                                <h2 class="font-weight-normal pt-2 mb-1"> {{numberformat($revenue_today[0])}} </h2>
                            </div>
                        </div>
                    </div>

                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <div class="card-box">
                        <div class="dropdown float-right">
                            
                            
                        </div>

                        <h4 class="header-title mt-0 mb-2 text-right">تعداد محصول در گدام</h4>

                        <div class="widget-box-2">
                            <div class="widget-detail-2 text-right">
                              
                                <h2 class="font-weight-normal pt-2 mb-1"> {{$products}} </h2>
                               
                            </div>
                          
                        </div>
                    </div>

                </div><!-- end col -->


                <div class="col-xl-3 col-md-6">
                    <div class="card-box">
                        <div class="dropdown float-right">
                            
                        </div>

                        <h4 class="header-title mt-0 mb-2 text-right">تعداد فروشات روز</h4>

                        <div class="widget-box-2">
                            <div class="widget-detail-2 text-right">
                               
                                <h2 class="font-weight-normal pt-2 mb-1"> {{$dailysales}} </h2>
                            </div>
                           
                        </div>
                    </div>

                </div><!-- end col -->

            </div>
            <!-- end row -->


            <div class="row" dir="rtl">

                @if (isset($user))
                @foreach ($user as $members)
                {{-- expr --}}

                <div class="col-xl-3 col-md-6">
                    <div class="card-box widget-user">
                        <div>
                            <div class="avatar-lg float-left mr-3">
                                <img src="{{asset('images/'.$members->thumbnail)}}" class="img-fluid rounded-circle"
                                    alt="user">
                            </div>
                            <div class="wid-u-info">
                                <h5 class="mt-0">{{$members->name}}</h5>
                                <p class="text-muted mb-1 font-13 text-truncate">{{$members->email}}</p>
                                <small class="text-warning"><b>{{$members->role->pluck('name')}}</b></small>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
                @endforeach
                @endif
            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->

    <!-- Right Sidebar -->
    @endsection()