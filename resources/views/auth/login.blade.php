@extends('layouts.public_app')
@section('content')

<div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign In</p>
                <div class="text-gray-400 fw-bold fs-4 text-center">
                    New Here?
                    <a href="/registration" class="link-success fw-bolder">Create an Account</a>
                </div>

                <form class="mx-1 mx-md-4 mt-5" id="submit_form">
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="email" class="form-control"  placeholder="Email"/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="password" class="form-control" placeholder="Password" />
                    </div>
                    
                  </div>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('password_reset') }}" class="link-success fs-6 fw-bolder">Forgot password?</a>
                        <div class="form-check mb-5">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                            <label class="form-check-label" for="form2Example3">
                                Remember Me
                            </label>
                        </div>
                    </div>
                 

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg">Continue</button>
                  </div>

                </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection


@push('scripts')
    <script src="{{ asset('js/user/login.js')}}"></script>
@endpush