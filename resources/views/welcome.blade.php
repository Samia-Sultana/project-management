@extends('master')
@section('welcome')


        <div class="account-content">
            <div class="container">

                <div class="account-logo">
                    <a href="admin-dashboard.html"><img src="assets/img/logo2.png" alt="Dreamguy's Technologies"></a>
                </div>

                <div class="account-box">
                    <div class="account-wrapper">
                        <h3 class="account-title">Login</h3>
                        <p class="account-subtitle">Access to our dashboard</p>

                        <form action="{{route('login')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Email Address</label>
                                <input class="form-control" type="email" value="admin@dreamguys.in" name="email">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label>Password</label>
                                    </div>
                                    <div class="col-auto">
                                        <a class="text-muted" href="forgot-password.html">
                                            Forgot password?
                                        </a>
                                    </div>
                                </div>
                                <div class="position-relative">
                                    <input class="form-control" type="password" value="123456" id="password" name="password">
                                    <span class="fa fa-eye-slash" id="toggle-password"></span>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary account-btn" type="submit">Login</button>
                            </div>
                            
                        </form>
                        <p>Don't have an account?<a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"> Register</a>
</p>

                    </div>
                </div>
            </div>
        </div>
    




@endsection