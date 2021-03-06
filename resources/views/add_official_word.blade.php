
@extends('layouts.app')

@section('pages')
<div class="pagetitle d-flex justify-content-end">
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active"><a href="#">Official Word</a></li>
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
            <h6 class="card-title">New Official Word</h6>
           <a href="add_official_word.html" class="btn rrs-btn btn-sm text-white " type="submit">New category</a>
            
          </div>
          
          <form class="row g-3 " action="/add_official_word" enctype="multipart/form-data" method="POST" >
            @csrf
            <div class="row my-4">
              <div class="col-md-4">
                <label for="yourEmail" class="form-label">Word Category <span class="text-danger">*</span></label>
                  <select class="form-control" name="category" id="">
                      <option value="">Choose Category..</option>
                      <option value="Ubatizo">Ubatizo</option>
                      <option value="maombi">Maombi</option>
                      <option value="sadaka">Sadaka</option>
                      <option value="uzinzi">Uzinzi</option>
                  </select>
                  <small class="text-danger">
                    @error('category')
                        {{$message}}
                    @enderror
                </small>
              </div>
              <div class="col-md-4">
                <label for="" class="form-label">Word Title <span class="text-danger">*</span></label>
                <input type="text" name="title" class="form-control"  >
                <small class="text-danger">
                  @error('title')
                      {{$message}}
                  @enderror
              </small>
              </div>
              <div class="col-md-4">
                <label for="" class="form-label">Speaker Name <span class="text-danger">*</span></label>
                <input type="text" name="speaker" class="form-control"  >
                <small class="text-danger">
                  @error('speaker')
                      {{$message}}
                  @enderror
              </small>
              </div>
            </div>
            <div class="row mt-1 mb-2">
              
              <div class="col-md-4">
                <label for="" class="form-label">Attach PDF</label>
                <input type="file" name="pdf" class="form-control"  >
                <small class="text-danger">
                  @error('pdf')
                      {{$message}}
                  @enderror
              </small>
              </div>
              <div class="col-md-4">
                <label for="" class="form-label">Attach Audio</label>
                <input type="file" name="audio" class="form-control"  >
                <small class="text-danger">
                  @error('audio')
                      {{$message}}
                  @enderror
              </small>
              </div>
              <div class="col-md-4">
                <label for="" class="form-label">Attach Video</label>
                <input type="file" name="video" class="form-control"  >
                <small class="text-danger">
                  @error('video')
                      {{$message}}
                  @enderror
              </small>
              </div>
            </div>
            <div class="d-flex justify-content-end mt-4">
              <button type="submit" class="btn rrs-btn text-white " >Publish</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</section>
@endsection


