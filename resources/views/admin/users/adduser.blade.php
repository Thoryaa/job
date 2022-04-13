@extends('admin.layout.dash')
@section('con')
     <div class="container-xxl flex-grow-1 container-p-y">






<!-- Multi Column with Form Separator -->
<div class="card mb-4">
  <form class="card-body" action="/save_user" method="POST">
    <h6>create user</h6>
    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label" for="multicol-username">Username</label>
        <input name="user_name" type="text"  class="form-control" placeholder="john.doe" />
      </div>
      <div class="col-md-6">
        <label class="form-label" for="multicol-email">Email</label>
        <div class="input-group input-group-merge">
          <input  name="user_email"type="text"  class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="multicol-email2" />
          <span class="input-group-text" >@example.com</span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-password-toggle">
          <label class="form-label" for="multicol-password">Password</label>
          <div class="input-group input-group-merge">
            <input  name="user_password" type="password"  class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multicol-password2" />
            <span class="input-group-text cursor-pointer" ><i class="bx bx-hide"></i></span>
          </div>
        </div>
      </div>
     <div class="col-md-6">
        <div class="form-password-toggle">
          <label class="form-label" for="multicol-password">confirm Password</label>
          <div class="input-group input-group-merge">
            <input  name="confirm_password" type="password"  class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multicol-password2" />
            <span class="input-group-text cursor-pointer" ><i class="bx bx-hide"></i></span>
          </div>
        </div>
      </div>
    </div>


    <div class="pt-4">
      <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
      <button type="reset" class="btn btn-label-secondary">Cancel</button>
    </div>
  </form>
</div>

          </div>
          @endsection