
<div class="container col-8 offset-2">
    <form action="/add_branch" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row form-group">
            <label for="name" class="col-form-label text-md-end">{{ __('name') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" autofocus>
        </div>

        <div class="row form-group">
            <label for="postal_code" class="col-form-label text-md-end">{{ __('postal_code') }}</label>
            <input id="postal_code" type="text" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" autofocus>
        </div>

        <div class="row form-group">
            <label for="location_lat" class="col-form-label text-md-end">{{ __('location_lat') }}</label>
            <input id="location_lat" type="text" class="form-control-file @error('location_lat') is-invalid @enderror" name="location_lat"  autofocus>
        </div>

        <div class="row form-group">
            <label for="location_lng" class="col-form-label text-md-end">{{ __('location_lng') }}</label>
            <input id="location_lng" type="text" class="form-control-file @error('location_lng') is-invalid @enderror" name="location_lng"  autofocus>
        </div>

        <select class="form-control"
                name="country_id">

            @foreach($countries as $country)
            <option value="{{$country->id}}">
                {{$country->name}}  </option>
            @endforeach

        </select>
        <button type="submit"> ADD </button>
    </form>
</div>
