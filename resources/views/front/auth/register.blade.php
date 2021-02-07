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

            @include('front.layouts.errors.errors')

            <form class="form-horizontal" method="post" action="{{route('register')}}">

                {{csrf_field()}}



                <div class="control-group">
                    <label class="control-label" for="inputFname1">First name <sup style="color: red">*</sup></label>
                    <div class="controls">
                        <input type="text" id="inputFname1" name="firstName" placeholder="First Name">
                        @if($errors->has('firstName'))
                            <strong style="color: red">{{$errors->first('firstName')}}</strong>
                        @endif
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label" for="inputLnam">Last name <sup style="color: red">*</sup></label>
                    <div class="controls">
                        <input type="text" id="inputLnam" name="lastName" placeholder="Last Name">
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
                        <input type="text" id="input_email" name="email" placeholder="Email" >
                        @if($errors->has('email'))
                            <strong style="color: red">{{$errors->first('email')}}</strong>
                        @endif
                    </div>

                </div>

                <div class="control-group">
                    <label class="control-label" for="inputPassword1">Password <sup style="color: red">*</sup></label>
                    <div class="controls">
                        <input type="password" id="inputPassword1" name="password" placeholder="Password" required>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="inputPassword1">Password Confirm <sup
                            style="color: red">*</sup></label>
                    <div class="controls">
                        <input type="password" id="inputPassword1" name="password_confirmation" placeholder="Password"
                               required>
                    </div>
                </div>

                <p><sup>*</sup>Required field </p>

                <div class="control-group">
                    <div class="controls">
                        <input class="btn btn-large btn-success" type="submit" value="Register"/>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection

@section('footer')

    <style>
        .textRed {
            color: red;
        }
    </style>

@endsection
