<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
@extends('layouts.adminlayout')

@section('homeContent')
    <div class="content-wrapper">
        <!-- <x-alert-message /> -->

        <!-- Edit Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
            <div class="modal-dialog" style="max-width: 75%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Hospital Detail</h5>
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
                                        <label class="col-sm-4 col-form-label">Hospital Name</label>
                                        <div class="col-sm-8">
                                            <input required type="text" id="e_hospital_name" name="e_hospital_name"
                                                class="form-control" placeholder="Enter Hospital Name...." />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Hospital Type</label>
                                        <div class="col-sm-9">
                                            <select id="e_hospital_type" name="e_hospital_type" class="form-control">
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
                                            <input type="text" required id="e_address" name="e_address"
                                                placeholder="Enter Hospital Address...." class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Phone No.</label>
                                        <div class="col-sm-9">
                                            <input name="e_phone_number" id="e_phone_number" required class="form-control"
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
                                            <input type="text" required id="e_city" name="e_city"
                                                placeholder="Enter Hospital City...." class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Country</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" required id="e_country" name="e_country"
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
                                            <input type="file" name="e_hospital_logo" class="file-upload-default"
                                                id="fileInput" style="display: none;">
                                            <div class="input-group">
                                                <input type="text" class="form-control file-upload-info" id="fileName"
                                                    disabled placeholder="Upload Image">
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
                                            <input class="form-control" required id="e_website" name="e_website"
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
                                            <input type="text" required id="e_admin_name" name="e_admin_name"
                                                placeholder="Enter Admin Name...." class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Admin Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" required id="e_admin_email" name="e_admin_email"
                                                placeholder="Enter Admin Email...." class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <select id="e_status" name="e_status" class="form-control">
                                                <option disabled selected>Select Type</option>
                                                <option value="Active">Active</option>
                                                <option alue="In Active">In Active</option>
                                            </select>
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
                        <input type="hidden" name="hospital_id" id="delete_hospital_id">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger" id="deleteForm">Delete</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <h3 class="font-weight-bold  ml-4 mb-4">All Hospital</h3>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive pt-3">

                        <table class="table table-bordered">
                            <thead>
                                <tr class="table-secondary">
                                    <th>Id</th>
                                    <th>Logo</th>
                                    <th>Hospital name</th>
                                    <th>Hospital Type</th>
                                    <th>Address</th>
                                    <th>Phone Number</th>
                                    <th>City</th>
                                    <th>Country</th>
                                    <th>Website</th>
                                    <th>Admin Name</th>
                                    <th>Admin Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
@php
    $count = 1;
@endphp
                                @foreach ($hospital as $data)
                                    <tr>
                                        <td>{{ $count }}</td>
                                        <td><img width="100px" src="{{ asset('backend/images/hospital')}}/{{ $data->logo }}">
                                        </td>
                                        <td>{{  $data->hospital_name }}</td>
                                        <td>{{  $data->hospital_type }}</td>
                                        <td>{{  $data->address }}</td>
                                        <td>{{  $data->phone_number }}</td>
                                        <td>{{  $data->city }}</td>
                                        <td>{{  $data->country }}</td>
                                        <td>{{  $data->website }}</td>
                                        <td>{{  $data->admin_name }}</td>
                                        <td>{{  $data->admin_email}}</td>
                                        <td>{{  $data->status}}</td>
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
                url: '/dashboard/hospital/' + id + '/edit',
                method: 'GET'
            }).done(function (val) {
                console.log(val)
                $.each(val, function (k, v) {
                    $('#e_id').val(v['id']);
                    $('#e_hospital_name').val(v['hospital_name']);
                    $('#e_hospital_type').val(v['hospital_type']);
                    $('#e_address').val(v['address']);
                    $('#e_phone_number').val(v['phone_number']);
                    $('#e_city').val(v['city']);
                    $('#e_country').val(v['country']);
                    $('#e_website').val(v['website']);
                    $('#e_admin_name').val(v['admin_name']);
                    $('#e_admin_email').val(v['admin_email']);
                    $('#e_status').val(v['status']);
                })
            })
        });


        // Edit AJAX Code
        $('#updateForm').submit(function (e) {
            e.preventDefault(); // Form ko reload hone se rokein
            var id = $('#e_id').val();
            var formData = new FormData(this)

            $.ajax({
                url: '/dashboard/hospital/' + id, // Resource route follow karein
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
            let hospitalId = $(this).data("id");
            console.log(hospitalId);

            $("#delete_hospital_id").val(hospitalId);
        });


        // Delete AJAX functionality
        $('#deleteForm').click(function () {
            var id = $("#delete_hospital_id").val();
            // console.log(id);
            $.ajax({
                url: '/dashboard/hospital/' + id,
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