    @extends('layouts.adminlayout')

    @section('homeContent')

    <div class="content-wrapper">

        <h3 class="font-weight-bold  ml-4 mb-4">Add Hospital</h3>
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <!-- <h4 class="card-title">Horizontal Two column</h4> -->

                    <form class="form-sample p-3" action="{{route('hospital.store')}}" method="post">
                        @csrf
                        <p class="card-description">
                            Hospital info
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Hospital Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="hospital_name" class="form-control" placeholder="Enter Hospital Name...." />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Hospital Type</label>
                                    <div class="col-sm-9">
                                        <select class="form-control">
                                            <option disabled selected>Select Type</option>

                                            <option>Private</option>
                                            <option>Government</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="address" placeholder="Enter Hospital Address...." class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Phone No.</label>
                                    <div class="col-sm-9">
                                        <input name="phone_number" class="form-control" placeholder="Enter Hospital Phone Number...."
                                            type="number" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">City</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="city" placeholder="Enter Hospital City...." class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Country</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="country" placeholder="Enter Hospital Country...." type="text" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">City</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Website</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="website"  placeholder="Enter Hospital Website...." type="text" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="card-description">
                            Admin Info
                        </p>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Admin Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="admin_name" placeholder="Enter Admin Name...." class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Admin Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="admin_email" placeholder="Enter Admin Email...." class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>


                    <input type="submit" class="btn btn-primary mr-2" value="Submit" />
                    <button class="btn btn-light">Cancel</button>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection