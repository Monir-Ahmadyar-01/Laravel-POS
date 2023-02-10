@extends('backend.layout.app') 

    @section('content')
           <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <style>
                th,td
                {
                    text-align:center !important;
                }
            </style>

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row" dir="rtl">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="row">
                                            <div class="col-md-12">
                                            <h2 style="text-align:center;">فروشات</h2>
                                            </div>
                                            <div class="col-md-3" style="padding-top: 10px;">
                                                <div class="dropdown">
                                              <button type="button" class=" btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                <i class="ti-filter"></i>
                                                 فلتر کردن

                                              </button>
                                               
                                               @if (Request()->has('name'))
                                                  
                                               <a href="{{route('orders.filter',['customer' => Request()->customer])}}" title="" >حذف فلتر</a>
                                              @endif
                                              <div class="dropdown-menu">
                                               
                                                <a class="dropdown-item" href="{{route('orders.filter',['customer'=>Request()->customer,'name' => 'date'])}}">تاریخ</a>
                                                <a class="dropdown-item" href="{{route('orders.filter',['customer'=>Request()->customer,'name' => 'price'])}}">قیمت</a>
                                                <a class="dropdown-item" href="{{route('orders.filter',['customer'=>Request()->customer,'name' => 'This-Week'])}}">هفت روز گذشته</a>
                                                <a class="dropdown-item" href="{{route('orders.filter',['customer'=>Request()->customer,'name' => 'This-Month'])}}">این ماه</a>
                                                

                                              </div>

                                            </div>
                                            
                                    </div> 
                                {{-- end of row --}}
                                    
                                     
                                    <div class="responsive-table-plugin" style="padding-bottom: 15px;">
                                        @if (Session::has('success'))
                                            <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <strong>Success!</strong> {{Session::get('success')}}
                                        </div>    
                                        @endif
                                        
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table table-striped mb-0">
                                                    <thead>
                                                    <tr>
                                                       
                                                        <th>آی دی</th>
                                                        <th data-priority="1">نام مشتری</th>
                                                        <th>مجموع مقدار</th>
                                                        <th>نوعیت پرداخت</th>
                                                        <th>وضعیت فروش</th>
                                                        <th>نام فروشنده</th>
                                                        <th>زمان فروش</th>
                                                        <th>جزیات</th>
                                                        <th>حذف</th>
                                                       
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if (isset($orders))
                                                           
                                                        
                                                        @foreach ($orders as $order)
                                                            {{-- expr --}}
                                                     
                                                    <tr>
                                                        <td>{{$order->id}}</td>
                                                        <td>{{uppercase($order->customer->name)}}</td>
                                                        <th>{{$order->total_amount}}</th>
                                                        <th>{{$order->payment_method}}</th>
                                                        <th>{{$order->order_status}}</th>
                                                        <th>{{$order->cashier_name}}</th>
                                                        <th>{{$order->created_at->format('l jS \\of F Y h:i:sa')}}</th>
                                                        <td><a href="{{url('order/'.$order->id)}}" class="btn btn-bordred-primary waves-effect  width-md waves-light">نمایش جزیات</a></td>
                                                        <td>
                                                            <p  onclick="event.preventDefault();document.getElementById('del-form-{{$order->id}}').submit()" class="btn btn-bordred-danger waves-effect  width-md waves-light">حذف</p></td>

                                                        <form id="del-form-{{$order->id}}" action="{{url('order/'.$order->id)}}" method="POST" style="display:none;">
                                                            @method('DELETE')
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$order->id}}">
                                                           
                                                        </form>
                                                        

                                                       
                                                    </tr>
                                                      @endforeach
                                                      @else
                                                       <tr>
                                                        <th colspan="6">
                                                            <h2 class="text-center">No data found</h2>
                                                        </th>
                                                       </tr>
                                                      @endif
                                                    </tbody>
                                                </table>
                                            </div>


    
                                        </div>

                                    </div>
                                    {{$orders->links()}}
                                </div>

                            </div>
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

               

      @endsection()