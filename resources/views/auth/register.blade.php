
@extends('../pages/layout/master')

@section('content')
    <!--  -->
    <section id="hero" class="bg-light text-dark text-center text-sm-start  py-5">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-center">

                <img src="{{ URL::asset('assest/images/undraw_mobile_login_re_9ntv.svg"') }}" alt="" class="d-none d-sm-block img-fluid w-50">
  <form class="row g-3" method="POST" action="{{ route('register') }}">
                       @csrf
                    <div class="col-md-12">
                        <h5>Create a Free Account</h5>
                        <label for="validationDefaultUsername" class="form-label  fw-bold" {{ __('Name') }}>Username</label>
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2">@</span>
                            <input  id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  id="validationDefaultUsername"
                                aria-describedby="inputGroupPrepend2"  required>

                                 @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    
                        <div class="col-md-12">
                            <label for="email" class="col-md-4 col-form-label fw-bold text-md-start">{{ __('Email Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                                      <div class="col-md-12">
                            <label for="password" class="col-md-4 col-form-label fw-bold text-md-start">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="password-confirm" class="col-md-4 col-form-label fw-bold text-md-start">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                     
             


                    <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit"
                            style=" background:#f4931e;border: 1px solid #f4931e;">Sign Up                                     {{ __('Register') }}
</button>
                        <p>Already have an account?<a href="{{ route('log') }}">Log in</a></p>
                    </div>
                </form>
      </div>
              
            </div>
        </div>
    </section>

@endsection