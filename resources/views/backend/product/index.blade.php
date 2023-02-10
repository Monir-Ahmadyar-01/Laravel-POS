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
                                    <h2 style="text-align:center;">محصولات</h2>
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
                                                        <th data-priority="1">نام</th>
                                                        <th>کتگوری</th>
                                                        <th>برند</th>
                                                        <th>قیمت</th>
                                                        <th>تعداد</th>
                                                        <th>تکس (%)</th>
                                                        <th>وضعیت</th>
                                                        <th>اصلاح</th>
                                                        <th>حذف</th>
                                                       
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if (isset($products))
                                                           
                                                       
                                                        @foreach ($products as $pp)
                                                          
                                                     
                                                    <tr>
                                                        <th>{{$pp->id}}</th>
                                                        <td>{{uppercase($pp->name)}}</td>
                                                        <td>{{$pp->category->name}}</td>
                                                        <td>{{$pp->brand->name}}</td>
                                                        <td>{{$pp->price}}</td>
                                                        <td>{{$pp->quantity}}</td>
                                                        <td>{{$pp->tax}}</td>
                                                        <td><span class="badge badge-{{check_class($pp->status)}}">{{uppercase(check_status($pp->status))}}</span></td>
                                                       
                                                        <td><a href="{{url('product/'.$pp->id.'/edit')}}" class="btn btn-bordred-primary waves-effect  width-md waves-light">اصلاح</a></td>
                                                      
                                                        
                                                        <td><p  onclick="event.preventDefault();document.getElementById('del-form-{{$pp->id}}').submit()" class="btn btn-bordred-danger waves-effect  width-md waves-light">حذف</p></td>
                              
                                                        <form id="del-form-{{$pp->id}}" action="{{url('product/'.$pp->id)}}" method="POST" style="display:none;">
                                                            @method('DELETE')
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$pp->id}}">
                                                           
                                                        </form>
                                                        

                                                       
                                                    </tr>
                                                      @endforeach

                                                       @endif
                                                    </tbody>
                                                </table>
                                            </div>


    
                                        </div>

                                    </div>
                                    {{$products->links()}}
                                </div>

                            </div>
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

               

      @endsection()