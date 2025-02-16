<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
@extends('layouts.adminlayout')

@section('homeContent')

    <div class="content-wrapper">
        <!-- Edit Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
            <div class="modal-dialog" style="max-width: 75%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Vaccination Detail</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form enctype="multipart/form-data" class="form-sample" id="updateForm">
                            @csrf
                            @method('PUT')

                            <input type="hidden" name="_method" value="PUT">

                            <div class="row">
                                <input required type="hidden" id="e_id" name="e_id" class="form-control" />
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input required type="text" id="e_name" name="e_name" class="form-control"
                                                placeholder="Enter Name...." />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">CNIC Number</label>
                                        <div class="col-sm-9">
                                            <input required type="number" id="e_cnic" name="e_cnic" class="form-control"
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
                                            <input type="text" required id="e_dob" name="e_dob"
                                                placeholder="Enter Date of Birth...." class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Gender:</label>
                                        <div class="col-sm-9 mt-3 ">
                                            <input type="radio" class="mr-1" id="e_gender" name="e_gender" value="male">Male
                                            <input type="radio" class="ml-5" id="e_gender" name="e_gender" value="female">
                                            Female
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" required id="e_email" name="e_email"
                                                placeholder="Enter Email..." class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Phone No.</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="e_phone_number" required name="e_phone_number"
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
                                            <input type="text" required id="e_address" name="e_address"
                                                placeholder="Enter Address..." class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">City</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="e_city" required name="e_city"
                                                placeholder="Enter City Name...." type="text" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Country</label>
                                        <div class="col-sm-9">
                                            <input required type="text" id="e_country" name="e_country" class="form-control"
                                                placeholder="Enter Country Name...." />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Select Hospital</label>
                                        <div class="col-sm-9">
                                            <select name="e_hospital" id="e_hospital" class="form-control">
                                                <option disabled selected>Select Hospital</option>
                                                @foreach($hospitals as $item)
                                                    <option value="{{ $item->hospital_name }}">{{ $item->hospital_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <select id="e_status" id="e_status" name="e_status" class="form-control">
                                                <option disabled selected>Select Type</option>
                                                <option value="Pending">Pending</option>
                                                <option alue="Approved">Approved</option>
                                                <option alue="Disapproved">Disapproved</option>
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
                                            <input type="radio" class="mr-1" id="e_diagnosed" name="e_diagnosed"
                                                value="yes">Yes
                                            <input type="radio" class="ml-5 mr-1" id="e_diagnosed" name="e_diagnosed"
                                                value="no">No
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="form-label col-sm-12">Please check all Symptoms that apply:</label>
                                        <div class="col-sm-12  mt-2">
                                            <input type="checkbox" class="mr-2" name="e_symptoms[]" value="taste">Loss of
                                            taste/smell
                                            <input type="checkbox" class="ml-5 mr-1" name="e_symptoms[]"
                                                value="breathing">Difficulty Breathing
                                            <input type="checkbox" class="ml-5 mr-1" name="e_symptoms[]" value="cough">Cough
                                            <input type="checkbox" class="ml-5 mr-1" name="e_symptoms[]"
                                                value="runny_nose">Runny
                                            Nose
                                            <input type="checkbox" class="ml-5 mr-1" name="e_symptoms[]"
                                                value="body_aches">Body
                                            Aches
                                            <input type="checkbox" class="ml-5 mr-1" name="e_symptoms[]" value="throat">Sore
                                            throat
                                        </div>
                                    </div>
                                </div>
                            </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id="updateBtn" class="btn btn-primary">Save
                            changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Delete Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirm Deletion</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this hospital?</p>
                        <input type="hidden" name="hospital_id" id="delete_vaccination_id">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger" id="deleteForm">Delete</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <h3 class="font-weight-bold  ml-4 mb-4">All Vaccination</h3>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive pt-3">


                        <table class="table table-bordered">
                            <thead>
                                <tr class="table-secondary">
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>CNIC Number</th>
                                    <th>Date of Birth</th>
                                    <th>Gender</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Country</th>
                                    <th>Hospital</th>
                                    <th>Covid Diagnosed</th>
                                    <th>Symptoms</th>
                                    <th>Status</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

@php
    $count = 1;
@endphp

                                @foreach ($vaccinations as $data)
                                    <tr>
                                        <td>{{ $count }}</td>
                                        <td>{{  $data->name }}</td>
                                        <td>{{  $data->cnic }}</td>
                                        <td>{{  $data->dob }}</td>
                                        <td>{{  $data->gender }}</td>
                                        <td>{{  $data->email }}</td>
                                        <td>{{  $data->phone_number }}</td>
                                        <td>{{  $data->address }}</td>
                                        <td>{{  $data->city }}</td>
                                        <td>{{  $data->country }}</td>
                                        <td>{{  $data->hospital }}</td>
                                        <td>{{  $data->diagnosed }}</td>
                                        <td>{{  $data->symptoms }}</td>
                                        <td>{{  $data->status }}</td>

                                        <td> <button type="button" class="btn btn-success edit mr-2 btn-sm btn-icon-text"
                                                data-toggle="modal" data-target="#editModal" id="{{ $data->id }}">
                                                <i class="ti-pencil btn-icon-prepend"></i>
                                                Edit
                                            </button><button type="button" data-id="{{ $data->id }}" data-toggle="modal"
                                                data-target="#deleteModal"
                                                class="btn btn-danger deleteBtn btn-sm btn-icon-text">
                                                <i class="ti-trash btn-icon-prepend"></i>
                                                Delete
                                            </button>

                                    </tr>
                                    @php
                $count++;
            @endphp
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

<script>
    $(document).ready(function () {


        // Edit functionality
        $(document).on('click', '.edit', function () {
            var id = $(this).attr('id');
            // alert(id)
            $.ajax({
                url: '/dashboard/vaccination/' + id + '/edit',
                method: 'GET'
            }).done(function (val) {
                // console.log(val);
                $.each(val, function (k, v) {
                    $('#e_id').val(v['id']);
                    $('#e_name').val(v['name']);
                    $('#e_cnic').val(v['cnic']);
                    $('#e_dob').val(v['dob']);
                    $('#e_gender').val(v['gender']).prop('checked', true);
                    $('#e_email').val(v['email']);
                    $('#e_phone_number').val(v['phone_number']);
                    $('#e_address').val(v['address']);
                    $('#e_city').val(v['city']);
                    $('#e_country').val(v['country']);
                    $('#e_hospital').val(v['hospital']);
                    $('#e_status').val(v['status']);
                    $('#e_diagnosed').val(v['diagnosed']).prop('checked', true);

                    if (v['symptoms']) {
                        let symptomsArray = v['symptoms'].split(','); // Comma-separated values
                        $("input[name='e_symptoms[]']").each(function () {
                            $(this).prop('checked', symptomsArray.includes($(this).val()));
                        });
                    }

                    $('#e_hospital').val(v['hospital']).change();

                })
            });
        });

        // Edit AJAX Code
        $('#updateForm').submit(function (e) {
            e.preventDefault(); // Form ko reload hone se rokein
            var id = $('#e_id').val();
            var formData = new FormData(this)

            $.ajax({
                url: '/dashboard/vaccination/' + id, // Resource route follow karein
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Ensure this exists
                }

            }).done(function (res) {
                // alert('done')    
                $('#editModal').modal('hide');
                location.reload();
            });
        });



        // Delete functionality
        $(".deleteBtn").click(function () {
            let vaccinationId = $(this).data("id");
            console.log(vaccinationId);

            $("#delete_vaccination_id").val(vaccinationId);
        });

        // Delete AJAX functionality
        $('#deleteForm').click(function () {
            var id = $("#delete_vaccination_id").val();
            // console.log(id);
            $.ajax({
                url: '/dashboard/vaccination/' + id,
                type: 'DELETE',
                data: {
                    _token: $('input[name="_token"]').val(),
                },
                success: function (data) {
                    console.log('deleted');
                    $('#deleteModal').modal('hide');
                    location.reload();
                },
                error: function (res) {
                    console.log(res.message);

                }
            });
        });

    });

</script>