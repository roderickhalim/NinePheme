@extends('layouts.default')
@section('content')
<!-- Main -->
<div class="main" role="main">

        <!-- Page Heading -->
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Login</h1>
                    </div>
                    <div class="col-md-6">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            {{-- <li><a href="#">Pages</a></li> --}}
                            <li class="active">Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Heading / End -->

        <!-- Page Content -->
        <section class="page-content">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
                            <h3>Login</h3>
                            <form action="#" method="POST" role="form">
                                <div class="form-group">
                                    <label>Username or email address <span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <div class="clearfix">
                                        <label class="pull-left">
                                            Password <span class="required">*</span>
                                        </label>
                                        <span class="pull-right"><a href="#">Lost password?</a></span>
                                    </div>
                                    <input type="password" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary btn-inline">Login</button>&nbsp; &nbsp; &nbsp; 
                                <label for="remember" class="checkbox-inline">
                                    <input type="checkbox" name="remember" id="remember"> Remember me
                                </label>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="spacer-lg visible-sm visible-xs"></div>
                        <div class="box">
                            <h3>Register</h3>
                            <form action="#" method="POST" role="form">
                                <div class="form-group">
                                    <label>Email address <span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>
                                                Password <span class="required">*</span>
                                            </label>
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>
                                                Re-enter Password <span class="required">*</span>
                                            </label>
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Register</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>

@stop    