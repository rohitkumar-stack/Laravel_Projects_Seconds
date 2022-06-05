@extends('admin/sidebar')
@section('content')

<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1 class="page-title"> Edit-Contactus</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">

                        <form action="/update_contactus" method="POST">
                          @csrf
                           <input type="hidden" name="id"  value="{{$data['id']}}"> 

                            <div class="row" style="margin-top: 30px;">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Full Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="name" value="{{$data['name']}}">
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Phone Number<span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="phone" value="{{$data['phone']}}" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email Address <span class="text-danger">*</span></label>
                                        <input class="form-control" type="email" name="email" value="{{$data['email']}}">
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Massage <span class="text-danger">*</span></label>
                                            <textarea class="form-control" rows="3" cols="30"  type="text" name="massage" value="{{$data['massage']}}"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button style=" margin-left: 100px;" type="submit" class="btn btn-primary submit-btn">Update Contact</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            @endsection              