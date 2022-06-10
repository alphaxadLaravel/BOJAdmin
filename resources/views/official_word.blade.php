
@extends('layouts.app')

@section('pages')
<div class="pagetitle d-flex justify-content-end">
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Companies</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  @if (Session::has('uploaded'))
<div class="alert alert-success alert-dismissible" role="alert">
  Official Word has been uploaded successfully!!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
           <h6 class="card-title">All Official  Words</h6>
           <a href="/add_official_word" class="btn rrs-btn btn-sm text-white " type="submit">Add New</a>
          </div>

          <div class="d-flex justify-content-between mb-3">
              <div class="filter d-none d-md-block">
                <select class="form-control text-muted" name="" id="">
                    <option> Display only..</option>
                    <option>5</option>
                    <option>10</option>
                    <option>50</option>
                    <option>100</option>
                </select>
              </div>
              <div class="search">
                <input type="text" name="name" class="form-control" placeholder="Search official_word.."  >
              </div>
          </div>

          <!-- Companies table with stripped rows -->
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Title</th>
                  <th class="">Speaker</th>
                  <th class="">Category</th>
                  <th class="">PDF</th>
                  <th class="">Audio</th>
                  <th class="">Video</th>
                  <th class="">Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($official as $word)
                <tr>
                  <td>{{$word->title}}</td>
                  <td class="">{{$word->speaker}}</td>
                  <td class="">{{$word->category}}</td>
                  <td class="">
                    @if ($word->pdf)
                    <span class="text-success">Attached</span>
                    @else 
                    <span class="text-danger">Absent</span>
                    @endif
                  </td>
                  <td class="">
                    @if ($word->audio)
                    <span class="text-success">Attached</span>
                    @else 
                    <span class="text-danger">Absent</span>
                    @endif
                  </td>
                  <td class="">
                    @if ($word->video)
                    <span class="text-success">Attached</span>
                    @else 
                    <span class="text-danger">Absent</span>
                    @endif
                  </td>
                 
                  <td class=" text-danger">
                    <a href="#" class="btn btn-outline-danger btn-sm"><i class="bi bi-trash"></i></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>

        </div>
      </div>
      <div class="d-flex justify-content-end">
          <nav aria-label="Page navigation">
            <ul class="pagination">
              <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
      </div>
    </div>
  </div>

</section>
@endsection


