
@extends('layouts.app')

@section('pages')
<div class="pagetitle d-flex justify-content-end">
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active"><a href="#">Special Word</a></li>
      <li class="breadcrumb-item active">Add</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <h6 class="card-title">New Special Word</h6>
            
          </div>
          
          <form class="row g-3 " action="#" method="POST" >
            
            <div class="row my-4">
              
              <div class="col-md-4">
                <label for="" class="form-label">Word Title <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control"  >
              </div>
              <div class="col-md-4">
                <label for="" class="form-label">Speaker Name <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control"  >
              </div>
              
              <div class="col-md-4">
                <label for="" class="form-label">Attach Image</label>
                <input type="file" name="name" class="form-control"  >
              </div>
              
            </div>
            <div class="row mt-1 mb-2">
              
              <div class="col-md-4">
                <label for="" class="form-label">Attach PDF</label>
                <input type="file" name="name" class="form-control"  >
              </div>
              <div class="col-md-4">
                <label for="" class="form-label">Attach Audio</label>
                <input type="file" name="name" class="form-control"  >
              </div>
              <div class="col-md-4">
                <label for="" class="form-label">Attach Video</label>
                <input type="file" name="name" class="form-control"  >
              </div>
            </div>
            <div class="d-flex justify-content-end mt-4">
              <a href="signup-admin.html" class="btn rrs-btn text-white " >Publish</a>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</section>
@endsection


