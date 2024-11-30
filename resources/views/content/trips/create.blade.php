@extends('layouts/contentNavbarLayout')

@section('title', ' Vertical Layouts - Forms')

@section('content')
<!-- Basic Layout -->
<div class="row">
  <div class="col-xl">
    <div class="card mb-6">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Create a Trip</h5> <small class="text-body float-end">Admin View</small>
      </div>
      <div class="card-body">
        <form>
          <div class="mb-6">
            <label class="form-label" for="from_location">From Location</label>
            <input type="text" class="form-control" id="from_location" name="from_location" placeholder="" />
          </div>
          <div class="mb-6">
            <label class="form-label" for="to_location">To Location</label>
            <input type="text" class="form-control" id="to_location" name="to_location" placeholder="" />
          </div>
          <div class="mb-6">
            <label class="form-label" for="passenger">Passenger</label>
            <input type="text" class="form-control" id="passenger" name="passenger" placeholder="" />
          </div>
          <div class="mb-6">
            <label class="form-label" for="driver">Driver</label>
            <input type="text" class="form-control" id="driver" name="driver" placeholder="" />
          </div>
          <button type="submit" class="btn btn-primary bg-dark border-dark">Process Trip</button>
          <button type="submit" class="btn btn-primary">Create a Trip</button>
        </form>
      </div>
    </div>
  </div>
  <div class="col-xl">
    <div class="card mb-6">
      <div class="card-body">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d39709.91415931563!2d-0.13354331346748335!3d51.53395088551544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1732999364788!5m2!1sen!2slk"
          width="600" height="555" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</div>
@endsection