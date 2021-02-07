@extends('front.layouts.master')
@section('title','Kayıt ol')
@section('content')
    <div class="span9">
        <ul class="breadcrumb">
            <li><a href="{{route('homepage')}}">Home</a> <span class="divider">/</span></li>
            <li class="active">Registration</li>
        </ul>
        <h3> Registration</h3>
        <div class="well">
            <!--
            <div class="alert alert-info fade in">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
             </div>
            <div class="alert fade in">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
             </div>
             <div class="alert alert-block alert-error fade in">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
             </div> -->
            <form class="form-horizontal" method="post" action="{{route('register')}}">

                {{csrf_field()}}


                <div class="control-group">
                    <label class="control-label" for="inputFname1">First name <sup style="color: red">*</sup></label>
                    <div class="controls">
                        <input type="text" id="inputFname1" name="firstName" placeholder="First Name" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputLnam">Last name <sup style="color: red">*</sup></label>
                    <div class="controls">
                        <input type="text" id="inputLnam" name="lastName" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="input_email">Phone <sup style="color: red">*</sup></label>
                    <div class="controls">
                        <input type="text" id="input_email" name="phone" placeholder="Phone" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="input_email">Email <sup style="color: red">*</sup></label>
                    <div class="controls">
                        <input type="email" id="input_email" name="email" placeholder="Email" required>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="inputPassword1">Password <sup style="color: red">*</sup></label>
                    <div class="controls">
                        <input type="password" id="inputPassword1" name="password" placeholder="Password" required>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="inputPassword1">Password Confirm <sup  style="color: red">*</sup></label>
                    <div class="controls">
                        <input type="password" id="inputPassword1" name="password_confirmation" placeholder="Password" required>
                    </div>
                </div>

                <p><sup>*</sup>Required field	</p>

                <div class="control-group">
                    <div class="controls">
                        <input class="btn btn-large btn-success" type="submit" value="Register" />
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection

@section('footer')

    <style>
        .textRed{
            color: red;
        }
    </style>

    @endsection
