@extends('layouts.adminlayout')

@section('homeContent')

    <div class="content-wrapper">
        <x-alert-message />


        <h3 class="font-weight-bold  ml-4 mb-4">Add Hospital</h3>
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">

                    <form enctype="multipart/form-data" class="form-sample p-3" action="{{route('hospital.store')}}"
                        method="post">
                        @csrf
                        <p class="card-description">
                            Hospital info
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Hospital Name</label>
                                    <div class="col-sm-8">
                                        <input required type="text" name="hospital_name" class="form-control"
                                            placeholder="Enter Hospital Name...." />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Hospital Type</label>
                                    <div class="col-sm-9">
                                        <select name="hospital_type" class="form-control">
                                            <option disabled selected>Select Type</option>

                                            <option value="Private">Private</option>
                                            <option value="Government">Government</option>
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
                                        <input type="text" required name="address" placeholder="Enter Hospital Address...."
                                            class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Phone No.</label>
                                    <div class="col-sm-9">
                                        <input name="phone_number" required class="form-control"
                                            placeholder="Enter Hospital Phone Number...." type="number" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">City</label>
                                    <div class="col-sm-9">
                                        <input type="text" required name="city" placeholder="Enter Hospital City...."
                                            class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Country</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" required name="country"
                                            placeholder="Enter Hospital Country...." type="text" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Logo</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="hospital_logo" class="file-upload-default" id="fileInput"
                                            style="display: none;">
                                        <div class="input-group">
                                            <input type="text" class="form-control file-upload-info" id="fileName" disabled
                                                placeholder="Upload Image">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button"
                                                    id="uploadBtn">Upload</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Website</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" required name="website"
                                            placeholder="Enter Hospital Website...." type="text" />
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
                                        <input type="text" required name="admin_name" placeholder="Enter Admin Name...."
                                            class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Admin Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" required name="admin_email" placeholder="Enter Admin Email...."
                                            class="form-control" />
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