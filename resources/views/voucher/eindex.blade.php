@extends('layout.eApp')
@section('content')
<div class="container ">
               <div class="table-responsive">
                    <div class="table-wrapper">
                         <div class="table-title">
                              <div class="row">
                                   <div class="col-xs-5">
                                        <h2>Add Employee </h2>
                                   </div>
                                   <div class="col-xs-7">

                                        <a href="{{ url()->previous() }}" class="btn btn-primary"><i
                                                  class="material-icons">&#xe5c4;</i>
                                             <span>Back</span>
                                        </a>
                                   </div>
                              </div>
                         </div>

                         <section class="get-in-touch">
                              <form action="{{route('employee.add')}}" method="post" class="contact-form row"
                                   enctype="multipart/form-data">
                                   {{@csrf_field()}}
                                   <div class="form-field col-lg-6">
                                        <label class="label" for="ename">Employee Name</label>
                                        <input name="ename" value="{{old('ename')}}" class="input-text js-input"
                                             type="text">
                                        @error('ename')
                                        <span>{{$message}}</span><br>
                                        @enderror


                                   </div>

                                   <div class="form-field col-lg-6">
                                        <label class="label" for="eemail">Email</label>
                                        <input name="eemail" value="{{old('eemail')}}" class="input-text js-input"
                                             type="email">

                                        @error('eemail')
                                        <span>{{$message}}</span><br>
                                        @enderror
                                   </div>
                                   <div class="form-field col-lg-6 ">
                                        <label class="label" for="epassword">Password</label>
                                        <input name="epassword" value="{{old('epassword')}}" class="input-text js-input"
                                             type="password">

                                        @error('epassword')
                                        <span>{{$message}}</span><br>
                                        @enderror
                                   </div>
                                   <div class="form-field col-lg-6 ">
                                        <label class="label" for="ephone">Phone No</label>
                                        <input name="ephone" value="{{old('ephone')}}" class="input-text js-input"
                                             type="text">

                                        @error('ephone')
                                        <span>{{$message}}</span><br>
                                        @enderror
                                   </div>
                                   <div class="form-field col-lg-6 ">
                                        <label class="label" for="eaddress">Address</label>
                                        <input name="eaddress" value="{{old('eaddress')}}" class="input-text js-input"
                                             type="text">

                                        @error('eaddress')
                                        <span>{{$message}}</span><br>
                                        @enderror
                                   </div>
                                   <div class="form-field col-lg-6 ">
                                        <label class="label" for="esalary">Salary</label>
                                        <input name="esalary" value="{{old('esalary')}}" class="input-text js-input"
                                             type="text">

                                        @error('esalary')
                                        <span>{{$message}}</span><br>
                                        @enderror
                                   </div>
                                   <div class="form-field col-lg-6 ">
                                        <label class="label" for="eschedule">Schedule</label>
                                        <input name="eschedule" value="{{old('eschedule')}}" class="input-text js-input"
                                             type="text">

                                        @error('eschedule')
                                        <span>{{$message}}</span><br>
                                        @enderror
                                   </div>

                                   <div class="form-field col-lg-6">
                                        <label class="image-label" for="eimage">Image</label>
                                        <input name="eimage" class="input-text js-input form-control-file" type="file">
                                        @error('eimage')
                                        <span>{{$message}}</span><br>
                                        @enderror
                                   </div>


                                   {{-- <div class="form-field col-lg-12">
                                   <label class="image-label" for="message">Image</label>
                                    <input name="image" class="input-text js-input form-control-file" type="file" required>
                                 </div> --}}
                                   <div class="form-field  col-lg-12 mb-3">
                                        <input class="submit-btn" type="submit" value="Submit">
                                   </div>

                              </form>
                         </section>

                    </div>

               </div>

          </div>
@endsection