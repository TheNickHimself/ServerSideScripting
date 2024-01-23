@extends('layouts.main')

@section('content')
<main class="py-5">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-title">
            <strong>Add New Car</strong>
          </div>           
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label for="car_model" class="col-md-3 col-form-label">Car Model</label>
                  <div class="col-md-9">
                    <input type="text" name="car_model" id="car_model" class="form-control">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="make_year" class="col-md-3 col-form-label">Make Year</label>
                  <div class="col-md-9">
                    <input type="text" name="make_year" id="make_year" class="form-control">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="email" class="col-md-3 col-form-label">Sales Rep Email</label>
                  <div class="col-md-9">
                    <input type="text" name="email" id="email" class="form-control">
                  </div>
                </div>
                <hr>
                <div class="form-group row mb-0">
                  <div class="col-md-9 offset-md-3">
                      <button type="submit" class="btn btn-primary">Save</button>
                      <a href="{{ route('cars.index') }}" class="btn btn-outline-secondary">Cancel</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection