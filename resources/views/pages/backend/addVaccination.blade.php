@extends('layouts.adminlayout')

@section('homeContent')

    <div class="content-wrapper">
        <x-alert-message />


        <h3 class="font-weight-bold  ml-4 mb-4">Vaccination Form</h3>
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">


                    <form enctype="multipart/form-data" action="{{route('vaccination.store')}}" class="form-sample p-3" method="post">
                        @csrf
                        <!-- <p class="card-description">
                            Hospital info
                        </p> -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input required type="text" name="name" class="form-control"
                                            placeholder="Enter Name...." />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">CNIC Number</label>
                                    <div class="col-sm-9">
                                        <input required type="number" name="cnic" class="form-control"
                                            placeholder="Enter Cnic Number ...." />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Date of Birth</label>
                                    <div class="col-sm-9">
                                        <input type="text" required name="dob" placeholder="Enter Date of Birth...."
                                            class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Gender:</label>
                                    <div class="col-sm-9 mt-3 ">
                                        <input type="radio" class="mr-1" name="gender" value="male">Male
                                        <input type="radio" class="ml-5" name="gender" value="female"> Female
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" required name="email" placeholder="Enter Email..."
                                            class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Phone No.</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" required name="phone_number"
                                            placeholder="Enter Phone Number...." type="number" />
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" required name="address" placeholder="Enter Address..."
                                            class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">City</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" required name="city" placeholder="Enter City Name...."
                                            type="text" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Country</label>
                                    <div class="col-sm-9">
                                        <input required type="text" name="country" class="form-control"
                                            placeholder="Enter Country Name...." />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Select Hospital</label>
                                    <div class="col-sm-9">
                                        <select name="hospital" class="form-control">
                                        <option disabled selected>Select Hospital</option>
                                            @foreach($hospitals as $item)
                                                <option value="{{ $item->hospital_name }}">{{ $item->hospital_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="card-description">
                            Health Info
                        </p>

                        <div class="row mt-4">

                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="form-label col-sm-4">Have you been Diagnosed with Covid-19:</label>
                                    <div class="col-sm-6 ">
                                        <input type="radio" class="mr-1" name="diagnosed" value="yes">Yes
                                        <input type="radio" class="ml-5 mr-1" name="diagnosed" value="no">No
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="form-label col-sm-12">Please check all Symptoms that apply:</label>
                                    <div class="col-sm-12  mt-2">
                                        <input type="checkbox" class="mr-2" name="symptoms[]" value="taste">Loss of taste/smell
                                        <input type="checkbox" class="ml-5 mr-1" name="symptoms[]"
                                            value="breathing">Difficulty Breathing
                                        <input type="checkbox" class="ml-5 mr-1" name="symptoms[]" value="cough">Cough
                                        <input type="checkbox" class="ml-5 mr-1" name="symptoms[]" value="runny_nose">Runny
                                        Nose
                                        <input type="checkbox" class="ml-5 mr-1" name="symptoms[]" value="body_aches">Body
                                        Aches
                                        <input type="checkbox" class="ml-5 mr-1" name="symptoms[]" value="throat">Sore throat
                                    </div>
                                </div>
                            </div>
                        </div>
                       <input type="submit" class="btn btn-primary mt-4 mr-2" value="Submit" />
                        <button class="btn btn-light mt-4 ">Cancel</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection