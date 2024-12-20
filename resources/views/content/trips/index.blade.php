@extends('../layouts/contentNavbarLayout')

@section('title', 'All Trips')

@section('content')
<!-- Basic Bootstrap Table -->
<div class="card">
  <h5 class="card-header">Trips</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Trip ID</th>
          <th>Passenger</th>
          <th>Driver</th>
          <th>Status</th>
          <th></th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <tr>
          <td><i class="bx bx-hash bx-md text-info me-4"></i> <span>88888888</span></td>
          <td>Albert Cook</td>
          <td>
            <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                class="avatar avatar-xs pull-up" title="Lilian Fuller">
                <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                class="avatar avatar-xs pull-up" title="Christina Parker">
                <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar" class="rounded-circle">
              </li>
            </ul>
          </td>
          <td><span class="badge bg-label-primary me-1">Active</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i
                  class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td><i class="bx bxl-react bx-md text-info me-4"></i> <span>React Project</span></td>
          <td>Barry Hunter</td>
          <td>
            <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                class="avatar avatar-xs pull-up" title="Lilian Fuller">
                <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                class="avatar avatar-xs pull-up" title="Christina Parker">
                <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar" class="rounded-circle">
              </li>
            </ul>
          </td>
          <td><span class="badge bg-label-success me-1">Completed</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i
                  class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td><i class="bx bxl-vuejs bx-md text-success me-4"></i> <span>VueJs Project</span></td>
          <td>Trevor Baker</td>
          <td>
            <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                class="avatar avatar-xs pull-up" title="Lilian Fuller">
                <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                class="avatar avatar-xs pull-up" title="Christina Parker">
                <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar" class="rounded-circle">
              </li>
            </ul>
          </td>
          <td><span class="badge bg-label-info me-1">Scheduled</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i
                  class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td><i class="bx bxl-bootstrap bx-md text-primary me-4"></i> <span>Bootstrap Project</span></td>
          <td>Jerry Milton</td>
          <td>
            <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                class="avatar avatar-xs pull-up" title="Lilian Fuller">
                <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                class="avatar avatar-xs pull-up" title="Christina Parker">
                <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar" class="rounded-circle">
              </li>
            </ul>
          </td>
          <td><span class="badge bg-label-warning me-1">Pending</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i
                  class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<!--/ Basic Bootstrap Table -->

<hr class="my-12">

@endsection