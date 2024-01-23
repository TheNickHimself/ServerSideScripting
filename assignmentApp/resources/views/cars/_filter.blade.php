<div class="row">
  <div class="col-md-6"></div>
  <div class="col-md-6">
    <div class="row">
      <div class="col">
        <div class="input-group mb-3">
            <select id="fltr_make_id" name="manufacturer_id" class="custom-select">
              @foreach ($makes as $id => $name)
              <option {{ $id == request('manufacturer_id')? 'selected' : ''}} values="{{$id}}">{{ $name }}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>