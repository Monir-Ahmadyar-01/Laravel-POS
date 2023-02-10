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
                                <h2 style="text-align:center;">کاربران</h2>
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
                                                        <th>عکس</th>
                                                        <th>اصلاح</th>
                                                        <th>حذف</th>
                                                       
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if (isset($users))
                                                           
                                                       
                                                        @foreach ($users as $user)
                                                           
                                                     
                                                    <tr>
                                                        <th>{{$user->id}}</th>
                                                        <td>{{uppercase($user->name)}}</td>
                                                        <td><img  style="width:60px;height:60px;" 
                                                        src="{{asset('images/'.Auth::user()->thumbnail)}}" alt=""></td>
                                                        <td><a href="{{url('user/'.$user->id.'/edit')}}" class="btn btn-bordred-primary waves-effect  width-md waves-light">اصلاح</a></td>
                                                        <td><p  onclick="event.preventDefault();document.getElementById('del-form-{{$user->id}}').submit()" class="btn btn-bordred-danger waves-effect  width-md waves-light">حذف</p></td>

                                                        <form id="del-form-{{$user->id}}" action="{{url('user/'.$user->id)}}" method="POST" style="display:none;">
                                                            @method('DELETE')
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$user->id}}">
                                                           
                                                        </form>
                                                        

                                                       
                                                    </tr>
                                                      @endforeach

                                                       @endif
                                                    </tbody>
                                                </table>
                                            </div>


    
                                        </div>

                                    </div>
                                    {{$users->links()}}
                                </div>

                            </div>
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

               

      @endsection()