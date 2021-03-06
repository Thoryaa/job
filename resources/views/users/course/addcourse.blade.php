@extends('users.layout.dash')
@section('con')
     <div class="container-xxl flex-grow-1 container-p-y">


<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>




<!-- Multi Column with Form Separator -->
<div class="card mb-4">
  <h5 class="card-header">Multi Column with Form Separator</h5>
  <form class="card-body" action="/save_user" method="POST">
    <h6>1. Account Details</h6>
    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label" for="multicol-username">Username</label>
        <input name="name" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
      </div>
       <div class="col-md-6">
        <label class="form-label" for="multicol-username">اسم الجهه</label>
        <input name="name" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
      </div>
     <div class="col-md-6">
        <label class="form-label" for="multicol-username">تاريخ النشر</label>
        <input name="name" type="date" id="multicol-username" class="form-control"  />
      </div>
     <div class="col-md-6">
        <label class="form-label" for="multicol-username">اخر موعد للتقديم</label>
        <input name="name" type='date' id="multicol-username" class="form-control"  />
      </div>
       <div class="col-md-6">
        <label class="form-label" for="multicol-username">التفاصيل</label>
        <input name="name" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
      </div>
     <div class="col-md-6">
        <label class="form-label" for="multicol-username">عدد ساعات العمل</label>
        <input name="name" type="number" id="multicol-username" class="form-control"  />
      </div>
    
    
    
      <div class="col-md-6">
        <div class="form-password-toggle">
          <label class="form-label" for="multicol-confirm-password">job activation</label>
          <div class="input-group input-group-merge">
          <label class="switch">
              <input name="is_active" value=1 type="checkbox" checked class="switch-input" />
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">is active</span>
            </label>
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