<!-- resources/views/cars/index.blade.php -->

@extends('layouts.main')

@section('content')
<main class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
            <div class="card-header card-title">
              <div class="d-flex align-items-center">
                <h2 class="mb-0">All Cars</h2>
                <div class="ml-auto">
                  <a href="{{ route('cars.index') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i>Cars</a>
                </div>
              </div>
            </div>
          <div class="card-body">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Model</th>
                  <th scope="col">Year</th>
                  <th scope="col">Salesperson Email</th>
                  <th scope="col">Manufacturer</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
            </table> 
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection