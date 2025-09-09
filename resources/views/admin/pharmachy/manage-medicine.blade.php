@extends('admin.master')
@section('title')
    Manage Pharmachy
@endsection

@section('content')
    <div class="container-fluid px-4">
        <br>
        <br>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Manage Medicine

                <div class="d-flex justify-content-end" style="margin-top: -25px;"><a href="{{ route('pharmachy.create') }}"
                        class="btn btn-primary">Add Medicine</a></div>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th style="width: 150px;">Medicine Name</th>
                            <th style="width: 100px;">Medicine Code</th>
                            <th style="width: 80px;">Price</th>
                            <th style="width: 80px;">Pcs</th>
                            <th style="width: 80px;">Quantity</th>
                            <th style="width: 200px;">Description</th>
                            <th style="width: 150px;">Exp Date</th>
                            <th style="width: 120px;">Image</th>
                            <th style="width: 150px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($medicines as $food)
                            <tr>
                                <td>{{ $food->name }}</td>
                                <td>{{ $food->code }}</td>
                                <td>{{ $food->price }}</td>
                                <td>{{ $food->pcs }}</td>
                                <td>{{ $food->quantity }}</td>
                                <td>{{ $food->description }}</td>
                                <td style="width: 100px;">{{ \Carbon\Carbon::parse($food->date)->format('d-m-Y') }}</td>
                                <td>
                                    <img src="{{ asset($food->image) }}" alt="" class="img-fluid" width="50px"
                                        height="50px">
                                </td>
                                <td class="d-flex">
                                    <div class="btn-group">
                                        <a href="{{ route('pharmachy.edit', $food->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('pharmachy.destroy', $food->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn" value="Delete"
                                                style="background-color: deeppink;color: white;margin-left: 5px;">
                                        </form>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
