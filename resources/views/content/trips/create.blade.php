@extends('layouts/contentNavbarLayout')

@section('title', 'Create a Trip')

@section('content')

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuDR-Q5bWeEKg3enSBe1bnr5gfPNRaLBw&libraries=places" async
  defer></script>

<!-- Basic Layout -->
<div class="row">
  <div class="col-xl">
    <div class="card mb-6">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Create a Trip</h5> <small class="text-body float-end">Admin View</small>
      </div>
      <div class="card-body">
        <form id="tripForm">
          <div class="mb-6">
            <label class="form-label" for="from_location">From Location</label>
            <input type="text" class="form-control" id="from_location" name="from_location"
              placeholder="Search location" />
          </div>
          <div class="mb-6">
            <label class="form-label" for="to_location">To Location</label>
            <input type="text" class="form-control" id="to_location" name="to_location" placeholder="Search location" />
          </div>
          <!-- !TODO: -->
          <div class="mb-6">
            <label class="form-label" for="trip_distance">Distance (KM)</label>
            <input type="text" class="form-control" id="trip_distance" name="trip_distance"
              placeholder="Search location" />
          </div>
          <div class="mb-6">
            <label class="form-label" for="trip_fare">Fare (Rs)</label>
            <input type="text" class="form-control" id="trip_fare" name="trip_fare" placeholder="Search location" />
          </div>
          <div class="mb-6">
            <label class="form-label" for="trip_fare">Status</label>
            <input type="text" class="form-control" id="trip_fare" name="trip_fare" placeholder="Search location" />
          </div>
          <div class="mb-6">
            <label class="form-label" for="trip_fare">Status Changed at</label>
            <input type="text" class="form-control" id="trip_fare" name="trip_fare" placeholder="Search location" />
          </div>
          <div class="mb-6">
            <label class="form-label" for="passenger">Passenger</label>
            <input type="text" class="form-control" id="passenger" name="passenger" placeholder="" />
          </div>
          <div class="mb-6">
            <label class="form-label" for="driver">Driver</label>
            <input type="text" class="form-control" id="driver" name="driver" placeholder="" />
          </div>
          <button type="button" class="btn btn-primary bg-dark border-dark" id="processTrip">Process Trip</button>
          <button type="button" class="btn btn-primary" id="processTrip">Create Trip</button>
        </form>
      </div>
    </div>
  </div>
  <div class="col-xl">
    <div class="card mb-6">
      <div class="card-body">
        <div id="map" style="width: 100%; height: 555px;"></div>
      </div>
    </div>
  </div>
</div>

<script>
  function initMap() {
    const defaultLocation = { lat: 6.919557, lng: 79.867582 };

    // Initialize the map
    const map = new google.maps.Map(document.getElementById("map"), {
      center: defaultLocation,
      zoom: 12,
      mapTypeControl: false,
    });

    const directionsService = new google.maps.DirectionsService();
    const directionsRenderer = new google.maps.DirectionsRenderer();
    directionsRenderer.setMap(map);

    const fromInput = document.getElementById('from_location');
    const toInput = document.getElementById('to_location');

    const fromAutocomplete = new google.maps.places.Autocomplete(fromInput, {
      componentRestrictions: { country: 'lk' },
      fields: ['geometry', 'name']
      // types: ['geocode']
    });

    const toAutocomplete = new google.maps.places.Autocomplete(toInput, {
      componentRestrictions: { country: 'lk' },
      fields: ['geometry', 'name']
      // types: ['geocode']
    });

    document.getElementById("processTrip").addEventListener("click", () => {
      const fromPlace = fromAutocomplete.getPlace();
      const toPlace = toAutocomplete.getPlace();

      if (fromPlace && toPlace) {
        const origin = fromPlace.geometry.location;
        const destination = toPlace.geometry.location;

        calculateAndDisplayRoute(directionsService, directionsRenderer, origin, destination);
      } else {
        alert("Please select valid locations for both From and To fields.");
      }
    });

    function calculateAndDisplayRoute(directionsService, directionsRenderer, origin, destination) {
      directionsService.route(
        {
          origin: origin,
          destination: destination,
          travelMode: google.maps.TravelMode.DRIVING,
        },
        (response, status) => {
          if (status === "OK") {
            directionsRenderer.setDirections(response);
          } else {
            alert("Directions request failed due to " + status);
          }
        }
      );
    }
  }

  window.onload = initMap;
</script>
<style>
  #map {
    width: 100%;
    height: 555px;
  }

  .form-control {
    margin-bottom: 10px;
  }
</style>

@endsection