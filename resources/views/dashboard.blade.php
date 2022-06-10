@extends('layouts.app')

@section('pages')
<div class="pagetitle d-flex justify-content-between">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Admin</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-xxl-4 col-md-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center justify-content-between">
            <div class="">
              <span class="text-success small pt-1 fw-bold">10</span> 
            </div>
            <h5 class="card-title">Users </h5>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xxl-4 col-md-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center justify-content-between">
            <div class="">
              <span class="text-success small pt-1 fw-bold">30</span> 
            </div>
            <h5 class="card-title">Documents </h5>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xxl-4 col-md-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center justify-content-between">
            <div class="">
              <span class="text-success small pt-1 fw-bold">34</span> 
            </div>
            <h5 class="card-title">Media </h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Latest Users</h5>

          <!-- Companies table with stripped rows -->
          <table class="table table-striped text-center">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Fullname</th>
                <th scope="col" class="d-none d-md-table-cell">Country</th>
                <th scope="col" class="d-none d-md-table-cell">Phone</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Alphaxad Jozee</td>
                <td class="d-none d-md-table-cell">Burundi</td>
                <td class="d-none d-md-table-cell">+88 903 996 34</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Danniel Charles</td>
                <td class="d-none d-md-table-cell">Uganda</td>
                <td class="d-none d-md-table-cell">+88 903 996 99</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Alphaxad Jozee</td>
                <td class="d-none d-md-table-cell">Rwanda</td>
                <td class="d-none d-md-table-cell">+88 903 996 35</td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Latest Announcements</h5>
          <!-- coodinators table with stripped rows -->
          <table class="table table-striped text-center">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col" >Date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Vijana Choir</td>
                <td>20/20/22</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Vijana Choir</td>
                <td>20/20/22</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Vijana Choir</td>
                <td>20/20/22</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</section>
<!-- Button trigger modal -->

@endsection