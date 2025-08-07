@extends('admin.master')
@section('title')
    Show History
@endsection

@section('content')
    <div class="container-fluid px-4">
        <br>
        <br>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Manage Appointment
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Phone No.</th>
                            <th>Doctor Name </th>
                            <th>Messagee</th>
                            <th>fee</th>
                            <th>Status</th>
                            {{-- <th>Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $appoint)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $appoint->username }}</td>
                                <td>{{ $appoint->email }}</td>
                                <td>{{ $appoint->phone }}</td>
                                <td>{{ $appoint->doctor }}</td>
                                <td>{{ $appoint->message }}</td>
                                <td>{{ $appoint->fee }}</td>
                                <td>{{ $appoint->status }}</td>
                                {{-- <td class="d-flex">
                                    <div class="btn-group">
                                        <a href="{{ route('pescrib', $appoint->id) }}"
                                            class="btn btn-primary">Prescription</a>
                                        <a href="{{ route('cancelAppointDoc', $appoint->id) }}" class="btn btn-accent"
                                            style="margin-left: 3px; background-color: #b1dfbb;">Cancel</a>
                                    </div>
                                </td> --}}

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
