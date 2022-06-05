@extends('admin/sidebar')
@section('content')

<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1 class="page-title"> Add About-Us</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">

                        <form>
                            <div class="row" style="margin-top: 30px;">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Heading <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="heading">
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Paragraph<span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="paragraph">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-sm-6">
                                <div class="form-group">
                                        <label>Image</label>
                                        <div class="profile-upload">
                                            <div class="upload-img">
                                                <img alt="" src="assets/img/user.jpg">
                                            </div>
                                            <div class="upload-input">
                                                <input type="file" class="form-control" id="image" name="image">
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                </div>
                                    <button style=" margin-left: 100px;" type="submit" class="btn btn-primary submit-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            @endsection              