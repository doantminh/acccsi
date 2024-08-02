@extends('layouts.auth')

@section('content')

<div class="col-xl-5">
    <div class="row">
        <div class="col-md-7 mx-auto">
            <div class="mb-0 border-0 p-md-5 p-lg-0 p-4">
                <div class="mb-4 p-0">
                    <a class='auth-logo' href='index.html'>
                        <img src="{{ asset('assets/admin/images/logo-dark.png')}}" alt="logo-dark" class="mx-auto" height="28" />
                    </a>
                </div>
                <div class="pt-0">
                    <form action="{{route('register')}}" method="POST" class="my-4">
                    @csrf
                        <div class="form-group mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input class="form-control @error('name') is-invalid @enderror" name="name" type="text" id="username" required="" placeholder="Enter your Username" value="{{ old('name') }}">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="emailaddress" class="form-label">Email address</label>
                            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" required="" placeholder="Enter your email" value="{{ old('email') }}">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control @error('password') is-invalid @enderror" type="password" required="" name="password" placeholder="Enter your password" value="{{ old('password') }}">
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group d-flex mb-3">
                            <div class="col-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                    <label class="form-check-label" for="checkbox-signin">I agree to the <a href="#" class="text-primary fw-medium"> Terms and Conditions</a></label>
                                </div>
                            </div><!--end col-->
                        </div>

                        <div class="form-group mb-0 row">
                            <div class="col-12">
                                <div class="d-grid">
                                    <button class="btn btn-primary" type="submit"> Register</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="saprator my-4"><span>or sign in with</span></div>

                    <div class="text-center text-muted mb-4">
                        <p class="mb-0">Already have an account ?<a class='text-primary ms-2 fw-medium' href="{{route('login')}}">Login here</a></p>
                    </div>

                    
                </div>

            </div>
        </div>
    </div>
</div>

@endsection