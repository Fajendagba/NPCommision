@extends('layouts.auth')

@section('content')

  <section>
    <div class="container py-3">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img
                  src="{{ asset('images/npcommision_wlcm.jpg') }}"
                  alt="NPCommision login form"
                  class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
                />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 text-black" style="background-color: #f8f1f9;">

                @include('errors.error_message')
                  

                  <form action="{{ route('login') }}" method="post">
                  @csrf

                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-user fa-2x me-1" style="color: #3d1540;"></i>
                      <span class="h1 fw-bold mb-0">NPCommision</span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Login to your account</h5>

                    <div class="form-outline mb-4">
                      <input type="emailorname" id="emailorname" name="emailorname" value="{{ old('emailorname') }}" 
                        required autocomplete="emailorname" placeholder="Email or Name"
                        class="form-control form-control-md @error('emailorname') border border-danger @enderror"/>
                      @error('ememailornameail')
                          <div class="text-danger">
                              {{ $message }}
                          </div>
                      @enderror
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" id="password" name="password" placeholder="Password"
                        class="form-control form-control-md @error('password') border border-danger @enderror" 
                        value="{{ old('password') }}"/>
                      @error('password')
                          <div class="text-danger">
                              {{ $message }}
                          </div>
                      @enderror
                    </div>

                    <div class="mb-2">
                      <div class="flex items-center">
                          <input type="checkbox" name="remember" id="remember" class="mr-2">
                          <label for="remember" class="form-label">Remember me</label>                        
                      </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-3"> <button class="btn mirror-button-back-color-strong btn-md btn-block" type="submit">Login</button> </div>
                    </div>
                    <a href="{{ route('terms') }}" class="small text-muted">Terms of use.</a>
                    <a href="{{ route('policy') }}" class="small text-muted">Privacy policy</a>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection