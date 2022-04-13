@extends('admin.layout.dash')
@section('content')

<h4 class="fw-bold py-3 mb-4">
  </h4>
  
  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">
        <h5 class="card-header">الخدمات</h5>
        <div class="card-body">
          @if ($errors->any())
          @foreach ($errors->all() as $err)
          <p class="alert alert-danger">{{ $err }}</p>
              
          @endforeach
              
          @endif
          
          
          <form method="POST" action="{{ route('save_services') }}" enctype="multipart/form-data">
            @csrf

            <div class="row g-3">
            <div class="col-md-6">
              <div class="row">
                <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-first-name"> اسم الخدمة</label>
                <div class="col-sm-9">
                  <input type="text" name="ser_name" id="formtabs-first-name" class="form-control" placeholder="John" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name"> الوصف</label>
                <div class="col-sm-9">
                  <input type="text" name="desc" id="formtabs-last-name" class="form-control" placeholder="Doe" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-country">الحالة</label>
                <div class="col-sm-9">
                  <select  name="is_active" id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                    
                    <option value="1">مفعل</option>
                    <option value="-1">معطل</option>
                  </select>
                </div>
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="row">
                <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-birthdate">الصورة</label>
                <div class="col-sm-9">
                  <input type="file" name="image" id="formtabs-birthdate" class="form-control dob-picker" />
                </div>
              </div>
            </div>
           
          </div>



          
        </div>
        <div class="card-footer">
    <div class="pt-4">
      <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
      <button type="reset" class="btn btn-label-secondary">Cancel</button>
    </div>
        </form>


        </div>
      </div>
    </div>
    
  
  
  
  
  
  </div>
@endsection