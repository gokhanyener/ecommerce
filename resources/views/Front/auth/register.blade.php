@extends('Front.layouts.master')
@section('title','Kayıt ol')
@section('content')
    <div class="span9">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
            <li class="active">Register</li>
        </ul>
        <h3> Register</h3>
        <hr class="soft"/>

        <div class="row">
            <div class="span4">
                <div class="well">
                    <h5>CREATE YOUR ACCOUNT</h5><br/>
                    Enter your e-mail address to create an account.<br/><br/><br/>
                    <form action="register.html">
                        <div class="control-group">
                            <label class="control-label" for="inputEmail0">E-mail address</label>
                            <div class="controls">
                                <input class="span3"  type="text" id="inputEmail0" placeholder="Email">
                            </div>
                        </div>
                        <div class="controls">
                            <button type="submit" class="btn block">Create Your Account</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="span1"> &nbsp;</div>
        </div>

    </div>
@endsection
