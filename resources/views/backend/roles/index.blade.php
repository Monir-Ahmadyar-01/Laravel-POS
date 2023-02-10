@extends('backend.layout.app') 

    @section('content')
           <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <style>
                th,td
                {
                    text-align:center;
                }
            </style>
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row" dir="rtl">
                            <div class="col-12">
                                <div class="card-box">
                                    <h2 style="text-align:center;">صلاحیت ها</h2>
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
                                                        <th>اصلاح</th>
                                                        <th>حذف</th>
                                                       
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($roles as $role)
                                                            {{-- expr --}}
                                                     
                                                    <tr>
                                                        <th>{{$role->id}}</th>
                                                        <td>{{uppercase($role->name)}}</td>
                                                        <td><a href="{{url('role/'.$role->id.'/edit')}}" class="btn btn-bordred-primary waves-effect  width-md waves-light">اصلاح</a></td>
                                                        <td><p  onclick="event.preventDefault();document.getElementById('del-form-{{$role->id}}').submit()" class="btn btn-bordred-danger waves-effect  width-md waves-light">حذف</p></td>

                                                        <form id="del-form-{{$role->id}}" action="{{url('role/'.$role->id)}}" method="POST" style="display:none;">
                                                            @method('DELETE')
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$role->id}}">
                                                           
                                                        </form>
                                                        

                                                       
                                                    </tr>
                                                      @endforeach
                                                    </tbody>
                                                </table>
                                            </div>


    
                                        </div>

                                    </div>
                                    {{$roles->links()}}
                                </div>

                            </div>
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

               

      @endsection()