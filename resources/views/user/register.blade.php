@include('partials.header')
<form action="/store" method="POST">
    
<section class="vh-100" style="background-color: #5A5A5A;">
  <div class="container py-5 h-90">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Create An Account</h3>
            @csrf 

            @error('email')
            <p>'Invalid Account'</p>
            @enderror

            <div class="form-outline mb-4">
              <input type="text" 
              id="name" 
              class="form-control form-control-lg"
              name="name"/>

              <label class="form-label" 
              for="name">Name</label>
            </div>

            <div class="form-outline mb-4">
              <input type="email" 
              id="typeEmailX-2" 
              class="form-control form-control-lg"
              name="email"/>

              <label class="form-label" 
              for="typeEmailX-2"
             >Email</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" 
              id="typePasswordX-2" 
              class="form-control form-control-lg"
              name="password" />
              <label class="form-label" 
              for="typePasswordX-2">Password</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" 
              id="confirmPassword" 
              class="form-control form-control-lg"
              name="password_confirmation" />
              <label class="form-label" 
              for="confirmPassword">Confirm Password</label>
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit" style="background-color: #5A5A5A;">Sign Up</button>
            <h3></h3>
            <h6><a href={{"/login"}} style="color:black">Already Have an Account? Sign In Here!</a></h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</section>
@include('partials.footer')