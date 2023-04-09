@extends('master')
@section('register')
<div class="account-content">
            <div class="container">

                <div class="account-logo">
                    <a href="admin-dashboard.html"><img src="assets/img/logo2.png" alt="Dreamguy's Technologies"></a>
                </div>

                <div class="account-box">
                    <div class="account-wrapper">
                        <h3 class="account-title">Register</h3>
                        <p class="account-subtitle">Access to our dashboard</p>

                        <form method="POST" action="{{ route('register') }}">
        @csrf
                        <div class="form-group">
                                <label>Name<span class="mandatory">*</span></label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label>Email<span class="mandatory">*</span></label>
                                <input class="form-control" type="email" name="email" >
                            </div>
                            <div class="form-group">
                                <label>Password<span class="mandatory">*</span></label>
                                <input class="form-control" type="password" name="password">
                            </div>
                            <div class="form-group">
                                <label>Repeat Password<span class="mandatory">*</span></label>
                                <input class="form-control" type="password" name="password_confirmation">
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary account-btn" type="submit">Register</button>
                            </div>
                            <div class="account-footer">
                                <p>Already have an account? <a href="index.html">Login</a></p>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

@endsection











