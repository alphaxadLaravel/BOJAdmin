
@extends('layouts.app')

@section('pages')
<div class="pagetitle d-flex justify-content-end">
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Summaries</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
           <h6 class="card-title">All Summaries</h6>
           <a href="dashboard.html" class="btn rrs-btn btn-sm text-white " type="submit">Add New</a>
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
                <input type="text" name="name" class="form-control" placeholder="Search Summary.."  >
              </div>
          </div>

          <!-- Companies table with stripped rows -->
          <table class="table table-striped text-center">
            <thead>
              <tr>
                <th>#</th>
                <th>Image</th>
                <th class="d-none d-md-table-cell">Title</th>
                <th class="d-none d-md-table-cell">Speaker Name</th>
                <th class="d-none d-md-table-cell">PDF</th>
                <th class="d-none d-md-table-cell">Update</th>
                <th class="d-none d-md-table-cell">Delete</th>
              </tr>
            </thead>
            <tbody>
              @for ($i = 0; $i < 10; $i++)
              <tr>
                <th scope="row">1</th>
                <td><img src="{{asset('img/alpha.png')}}" style="width: 20px; height: 20px;" ></td>
                <td>Hili neno nio official..</td>
                <td class="d-none d-md-table-cell">Alphaxad Jozee</td>
                <td class="d-none d-md-table-cell"><span class="text-success">Attached</span></td>
                <td class="d-none d-md-table-cell">
                  <i class="bi bi-eye"></i>
                </td>
                <td class="d-none d-md-table-cell">
                  <i class="bi bi-eye"></i>
                </td>
              </tr>
              @endfor
              
            </tbody>
          </table>

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


