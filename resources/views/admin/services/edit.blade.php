

<h4 class="fw-bold py-3 mb-4">
  </h4>
  
  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">
        <h5 class="card-header">Default</h5>
        <div class="card-body">
          @if ($errors->any())
          @foreach ($errors->all() as $err)
          <p class="alert alert-danger">{{ $err }}</p>
              
          @endforeach
              
          @endif
          
          
          <form method="POST" action="{{ route('update_services',$services->id) }}" enctype="multipart/form-data">
            @csrf

            <div class="row g-3">
            <div class="col-md-6">
              <div class="row">
                <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-first-name"> الإسم العربي</label>
                <div class="col-sm-9">
                  <input type="text"  value="{{ $services->ser_name }}" name="ser_name" id="formtabs-first-name" class="form-control" placeholder="John" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name"> الإسم الانجليزي</label>
                <div class="col-sm-9">
                  <input type="text" name="desc" value="{{ $services->desc }}" id="formtabs-last-name" class="form-control" value="{{ $services->ser_name }}" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-country">is active</label>
                <div class="col-sm-9">
                  <select  name="is_active" id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                    
                    <option @if($services->is_active==1) selected @endif value="1">مفعل</option>
                    <option  @if($services->is_active==-1) selected @endif value="-1">معطل</option>
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
          <input type="submit" name="submit" id="formtabs-first-name"  value="تعديل"class="form-control" placeholder="John" />

        </form>


        </div>
      </div>
    </div>
    
  
  
  
  
  
  </div>
  @endsection
