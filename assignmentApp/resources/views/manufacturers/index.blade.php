@extends('layouts.main')


@section('content')
<main class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
            <div class="card-header card-title">
              <div class="d-flex align-items-center">
                <h2 class="mb-0">All Manufacturers</h2>
                <div class="ml-auto">
                  <a href="{{ route('cars.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add Car</a>
                </div>
              </div>
            </div>
          <div class="card-body">

            <table class="table table-striped table-hover">
              <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                </tr>
              </thead>
              <tbody>            
                @if ($manufacturer->count())
                  @foreach ($manufacturer as $index => $mano)
                    <tr>
                      <th scope="row">{{ $index + 1 }}</th>
                      <td>{{ $mano->name }}</td>
                      <td>{{ $mano->address }}</td>
                      <td>{{ $mano->phone }}</td>
                      <td width="150">
                        <a href="show.html" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                        <a href="form.html" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-sm btn-circle btn-outline-danger" title="Delete" onclick="confirm('Are you sure?')"><i class="fa fa-times"></i></a>
                      </td>
                    </tr>
                  @endforeach
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