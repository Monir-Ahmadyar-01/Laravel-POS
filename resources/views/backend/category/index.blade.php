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
                                    <h2 style="text-align:center;">کتگوری</h2>
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
                                                        <th>وضعیت</th>
                                                        <th>اصلاح</th>
                                                        <th>حذف</th>
                                                       
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if (isset($categories))
                                                           
                                                       
                                                        @foreach ($categories as $cc)
                                                           
                                                     
                                                    <tr>
                                                        <th>{{$cc->id}}</th>
                                                        <td>{{uppercase($cc->name)}}</td>
                                                        <td><span class="badge badge-{{check_class($cc->status)}}">{{uppercase(check_status($cc->status))}}</span></td>
                                                       
                                                        <td><a href="{{url('category/'.$cc->id.'/edit')}}" class="btn btn-bordred-primary waves-effect  width-md waves-light">اصلاح</a></td>
                                                        <td><p  onclick="event.preventDefault();document.getElementById('del-form-{{$cc->id}}').submit()" class="btn btn-bordred-danger waves-effect  width-md waves-light">حذف</p></td>

                                                        <form id="del-form-{{$cc->id}}" action="{{url('category/'.$cc->id)}}" method="POST" style="display:none;">
                                                            @method('DELETE')
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$cc->id}}">
                                                           
                                                        </form>
                                                        

                                                       
                                                    </tr>
                                                      @endforeach

                                                       @endif
                                                    </tbody>
                                                </table>
                                            </div>


    
                                        </div>

                                    </div>
                                    {{$categories->links()}}
                                </div>

                            </div>
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

               

      @endsection()