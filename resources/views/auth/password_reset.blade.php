@extends('layouts.public_app')
@section('content')

<div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
                <div class="text-gray-400 fw-bold fs-4 text-center">
                    Forgot password??
                    <p class="fs-5 fw-normal">Enter your email address to reset your password</p>
                </div>

                <form class="mx-1 mx-md-4 mt-5" id="submit_form">
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="email" class="form-control"  placeholder="Email"/>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg">Send</button>
                  </div>
                </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection


@push('scripts')
    <script src="{{ asset('js/user/password_reset.js')}}"></script>
@endpush