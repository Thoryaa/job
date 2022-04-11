
@extends('admin.layout.dash')
@section('content')


<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Tables /</span> Basic Tables
  </h4>
  
  <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">Table Basic</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>id</th>
            <th>المهارة</th>

            <th>hgksfm</th>
            <th>الحالة</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
         
         @foreach ($skills as $skills)

         <tr>
           <td>{{ $loop->iteration }}</td>
          <td>{{ $skills->id }}</td>
          <td>{{ $skills->skills_name }}</td>
          <td>{{ $skills->percent }}</td>
      
         
          <td>
            @if($skills->is_active==1)  
            <span class="badge bg-label-success me-1">مفعل</span>
        
            @else
            <span class="badge bg-label-danger me-1">موقف</span>
            @endif

        </td>
           
            <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('edit_skills',$skills->id) }}"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                <a class="dropdown-item" href="{{ route('toggle_skills',$skills->id) }}"><i class="bx bx-trash me-2"></i> @if($skills->is_active==1)disable @else enable @endif</a>
              </div>
            </div>
          </td>
        </tr>
             
         @endforeach
        
         
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->


@endsection