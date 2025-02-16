@extends('layouts.adminlayout')

@section('homeContent')

<div class="content-wrapper">
   
    @if($vaccinations->isEmpty())
        <div class="alert ">
            <strong>No record found!</strong> You have not registered for vaccination.
        </div>
    @else
    Vaccination Report
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>CNIC</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Hospital</th>
                <th>Symptoms</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vaccinations as $vaccination)
            <tr>
                <td>{{ $vaccination->name }}</td>
                <td>{{ $vaccination->cnic }}</td>
                <td>{{ $vaccination->dob }}</td>
                <td>{{ $vaccination->gender }}</td>
                <td>{{ $vaccination->hospital }}</td>
                <td>{{ $vaccination->symptoms }}</td>
                <td>{{ $vaccination->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>

@endsection