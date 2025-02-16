@extends('layouts.adminlayout')

@section('homeContent')

    <div class="content-wrapper">

        @if($vaccinations->isEmpty())
            <div class="alert ">
                <strong>No record found!</strong> You have not registered for vaccination.
            </div>
        @else

            <h3 class="font-weight-bold  ml-4 mb-4 ">Vaccination Report</h3>
            <div class="col-12 grid-margin ">
                <div class="card p-3">
                    <div class="card-body ">
                        <table class="table table-bordered">

                            <tbody class="p-2">
                                @foreach ($vaccinations as $vaccination)
                                    <tr>
                                        <th>Name</th>
                                        <td>{{ $vaccination->name }}</td>
                                        <th>CNIC</th>
                                        <td>{{ $vaccination->cnic }}</td>
                                        <th>Status</th>
                                        <td style="
                                                    @if($vaccination->status == 'Approved') color: green; font-weight: bold; 
                                                    @elseif($vaccination->status == 'Disapproved') color: red; font-weight: bold;
                                                        @else color: black; font-weight: bold;
                                                    @endif
                                                ">{{ $vaccination->status }}</td>
                                    </tr>
                                    <tr class="mt-2">
                                        <th>Date of Birth</th>
                                        <td>{{ $vaccination->dob }}</td>
                                        <th>Gender</th>
                                        <td>{{ $vaccination->gender }}</td>
                                        <th>Phone Number</th>
                                        <td>{{ $vaccination->phone_number }}</td>
                                    </tr>
                                    <tr class="mt-2">
                                        <th>Address</th>
                                        <td>{{ $vaccination->address }}</td>
                                        <th>City</th>
                                        <td>{{ $vaccination->city }}</td>
                                        <th>Country</th>
                                        <td>{{ $vaccination->country }}</td>
                                    </tr>
                                    <tr class="mt-2">
                                        <th>Hospital</th>
                                        <td>{{ $vaccination->hospital }}</td>
                                        <th>Diagnosed</th>
                                        <td>{{ $vaccination->diagnosed }}</td>
                                        <th>Symptoms</th>
                                        <td>{{ $vaccination->symptoms }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


        @endif
    </div>

@endsection