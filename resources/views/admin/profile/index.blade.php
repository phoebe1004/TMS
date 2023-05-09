@extends('layouts.admin')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Profile Page</h4>
            <p class="card-category">Basic Information</p>
          </div>
          <div class="card-body">
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="bmd-label-floating text-black">Name</label>
                    <input type="text" name="username" id="username" value="" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating text-black">Email address</label>
                    <input type="email" name="email_address" id="email_address" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating text-black">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating text-black">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating text-black">Address</label>
                    <input type="text" name="address" id="address" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating text-black">City</label>
                    <input type="text" name="city" id="address" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating text-black">Country</label>
                    <input type="text" name="country" id="country" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating text-black">Postal Code</label>
                    <input type="text" name="postal_code" id="postal_code" class="form-control">
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-avatar">
            <a href="javascript:;">
              <img class="img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZS0Kqxq8W1qDdpKeq4Sip_QHe7vpsvqYGhQ&usqp=CAU" />
            </a>
          </div>
          <div class="card-body">
            <h6 class="card-category text-gray">CEO / Co-Founder</h6>
            <h4 class="card-title">Assumption College of Davao</h4>
            <p class="card-description">
              Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
            </p>
            <a href="javascript:;" class="btn btn-primary btn-round">Follow</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
