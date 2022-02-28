@if ($message = Session::get('success'))

<div class="alert alert-success alert-dismissible fade show col-12 d-flex justify-content-between align-items-center" role="alert">
    <strong>{{ $message }}</strong> 
    <button type="button" class="btn close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

@endif


@if ($message = Session::get('error'))

<div class="alert alert-danger alert-dismissible fade show col-12 d-flex justify-content-between align-items-center" role="alert">
    <strong>{{ $message }}</strong> 
    <button type="button" class="btn close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

@endif


@if ($message = Session::get('warning'))

<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>{{ $message }}</strong> 
    <button type="button" class="btn close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

@endif


@if ($message = Session::get('info'))

<div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong>{{ $message }}</strong> 
    <button type="button" class="btn close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

@endif


@if ($errors->any())

<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{ $message }}</strong> 
    <button type="button" class="btn close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

@endif