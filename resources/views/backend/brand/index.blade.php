@extends('backend.layout.app') 

    @section('content')
           <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row" dir="rtl">
                            <div class="col-12">
                                <div class="card-box">
                                    <h2 style="text-align:center;">برند ها</h2>
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
                                                        <th>وضعیت</th>
                                                        <th>اصلاح</th>
                                                        <th>حذف</th>
                                                       
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if (isset($brands))
                                                           
                                                       
                                                        @foreach ($brands as $bb)
                                                           
                                                     
                                                    <tr>
                                                        <th>{{$bb->id}}</th>
                                                        <td>{{uppercase($bb->name)}}</td>
                                                        <td>{{$bb->category->name}}</td>
                                                        <td><span class="badge badge-{{check_class($bb->status)}}">{{uppercase(check_status($bb->status))}}</span></td>
                                                       
                                                        <td><a href="{{url('brand/'.$bb->id.'/edit')}}" class="btn btn-bordred-primary waves-effect  width-md waves-light">اصلاح</a></td>
                                                        <td><p  onclick="event.preventDefault();document.getElementById('del-form-{{$bb->id}}').submit()" class="btn btn-bordred-danger waves-effect  width-md waves-light">حذف</p></td>

                                                        <form id="del-form-{{$bb->id}}" action="{{url('brand/'.$bb->id)}}" method="POST" style="display:none;">
                                                            @method('DELETE')
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$bb->id}}">
                                                           
                                                        </form>
                                                        

                                                       
                                                    </tr>
                                                      @endforeach

                                                       @endif
                                                    </tbody>
                                                </table>
                                            </div>


    
                                        </div>

                                    </div>
                                    {{$brands->links()}}
                                </div>

                            </div>
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

               

      @endsection()