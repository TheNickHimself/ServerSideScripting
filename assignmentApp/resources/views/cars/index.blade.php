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
                  <a href="{{ route('cars.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add Car</a>
                </div>
              </div>
            </div>
          <div class="card-body">

          @include('cars._filter')

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
              <tbody>            
                @if ($cars->count())
                  @foreach ($cars as $index => $car)
                    <tr>
                      <th scope="row">{{ $index + 1 }}</th>
                      <td>{{ $car->model }}</td>
                      <td>{{ $car->year }}</td>
                      <td>{{ $car->salesperson_email }}</td>
                      <td>{{ $car->manufacturer->name }}</td>
                      <td width="150">
                        <a href="{{ route('cars.show', $car->id) }}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                        <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                        <a href="{{ route('cars.destroy', $car->id) }}" class="btn-delete btn btn-sm btn-circle btn-outline-danger" title="Delete"><i class="fa fa-times"></i></a>                      </td>
                    </tr>
                  @endforeach
                  <form id="form-delete" method="POST" style="display: none">
                    @method('DELETE')
                    @csrf
                  </form>
                @endif
              </tbody>
            </table> 


          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection