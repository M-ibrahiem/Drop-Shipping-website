 @extends('custom_layouts.app')
@section('title', 'LOgin')
@section('content')


<section class="sign sec_form">
  <div class="form_container">
    <p class="title">welcom back</p>
    <form action="" class="form">
      <input type="email" placeholder="Email">
      <input type="password" placeholder="password">
      <p class="page-link">
        <a href="#" class="page-link-label">Forgot Password?</a>
      </p>
      <button class="form-btn">Login</button>


    </form>

    <p class="sign-up-label">
      Don`t have an account? <a href="#" class="sign-up-link">sign up </a>
    </p>



   <div class="buttons-container">
    <div class="apple-login-buuton">
      <i class="fa-brands fa-apple"></i>
      <span>Login with Apple</span>
    </div>

    <div class="google-login-button">
      <i class="fa-brands fa-google"></i>
      <span>Login with Google</span>
    </div>
   </div>





  </div>
</section>

@endsection --}}
