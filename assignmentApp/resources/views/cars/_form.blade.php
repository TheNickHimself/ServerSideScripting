<div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label for="model" class="col-md-3 col-form-label">Car Model</label>
                  <div class="col-md-9">
                    <input type="text" name="model" id="model" class="form-control @error('model') is-invalid @enderror">
                    @error('model')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <label for="year" class="col-md-3 col-form-label ">Make Year</label>
                  <div class="col-md-9">
                    <input type="text" name="year" id="year" class="form-control @error('year') is-invalid @enderror">
                    @error('year')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror                  
                  </div>
                </div>

                <div class="form-group row">
                  <label for="salesperson_email" class="col-md-3 col-form-label">Sales Rep Email</label>
                  <div class="col-md-9">
                    <input type="text" name="salesperson_email" id="salesperson_email" class="form-control @error('salesperson_email') is-invalid @enderror">
                    @error('emasalesperson_emailil')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror                  
                  </div>
                </div>

                <div class="form-group row">
                  <label for="manufacturer_id" class="col-md-3 col-form-label">Select a Make:</label>
                  <div class="col-md-9">
                  <select name="manufacturer_id" id="manufacturer_id" class="form-control @error('manufacturer_id') is-invalid @enderror">
                      @foreach ($makes as $id => $make)
                      <option {{ $id == old('make_id') ? 'selected' : '' }} value="{{ $make->id }}">{{ $make->name }}</option>
                      @endforeach
                    </select>
                    @error('manufacturer_id')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror 
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