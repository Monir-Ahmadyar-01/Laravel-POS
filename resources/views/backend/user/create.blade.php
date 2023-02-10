@extends('backend.layout.app')
@section('content')            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <style>
                label
                {
                    float:right;
                }
            </style>
            <div class="content-page">
                <div class="content">

                        <!-- end row -->

                        <div class="row" dir="rtl">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <h2  class="mt-0 mb-3" style="text-align:center;">ثبت کاربر</h2>

                                    @if (Session::has('success'))
                                        {{-- expr --}}
                                    
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>Success!</strong> <span>{{Session::get('success')}}</span>
                                        
                                    </div>
                                    @endif
                                    <form role="form" action=@if(isset($user) )
                                    "{{route('user.update',$user->id)}}" @else() "{{route('user.store')}}" @endif method="post" enctype='multipart/form-data'>
                                    @if (isset($user))
                                        @method('PUT')
                                    @endif

                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">نام</label>
                                            <input type="text" class="form-control" name="name" ="exampleInputEmail1" aria-describedby="emailHelp"  value="{{@$user->name}}">
                                            

                                            @error('name')
                                            <span>
                                                <strong class="text-danger">{{$message}}</strong>
                                            </span>
                                            @enderror()
                                        </div>
                                         <div class="form-group">
                                            <label for="exampleInputEmail1">ایمیل</label>
                                            <input type="email" class="form-control" name="email" ="exampleInputEmail1" aria-describedby="emailHelp"  value="{{@$user->email}}">
                                            

                                            @error('email')
                                            <span>
                                                <strong class="text-danger">{{$message}}</strong>
                                            </span>
                                            @enderror()
                                        </div>

                                         <div class="form-group">
                                            <label for="exampleInputEmail1">رمز عبور</label>
                                            <input type="password" class="form-control" name="password" ="exampleInputEmail1" aria-describedby="emailHelp"  value="">
                                            

                                            @error('password')
                                            <span>
                                                <strong class="text-danger">{{$message}}</strong>
                                            </span>
                                            @enderror()



                                           

                                        </div>
                                          <div class="form-group">
                                            <label for="exampleInputEmail1">عکس</label>
                                            <input type="file" class="form-control" name="image" >
                                            

                                            @error('image')
                                            <span>
                                                <strong class="text-danger">{{$message}}</strong>
                                            </span>
                                            @enderror()



                                           

                                        </div>

                                           
                                           
                                        <div class="card" style="margin-top: 20px;">
                                      <div class="card-header">صلاحیت</div>
                                            @error('roles')
                                            <span>
                                                <strong class="text-danger">{{$message}}</strong>
                                            </span>
                                            @enderror()
                                            {{-- {{dd($user)}} --}}
                                        <div class="card-body">

                                            <div class="row">
                                            @foreach ($roles as $role)
                                          
                                                <div class="col-md-2 col-sm-2 col-4">
                                                   <label class="switch checkbox-inline">
                                                  <input type="checkbox" name="roles[{{$role->id}}]" @if(isset($user) && in_array($role->id,role_name($user))) checked @endif>
                                                  <span class="slider round"></span>

                                                </label>
                                                <p>{{$role->name}}</p>
                                                </div> 

                                                
                                            @endforeach
                                 
                                            </div>

                                        </div>
                                     
                                          
                                       </div>

                                        <button type="submit" class="btn btn-primary w-100">ذخیره</button>
                                    </form>
                                </div>
                            </div>
                            <!-- end col -->

                           

                        </div>
                        <!-- end row -->
                    
                </div>


                       
              @endsection()