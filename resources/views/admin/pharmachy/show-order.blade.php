@extends('admin.master')
@section('title')
    Show Medicine Order
@endsection

@section('content')
    <div class="container-fluid px-4">
        <br>
        <br>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Manage Medicine Order

                {{--                <div class="d-flex justify-content-end" style="margin-top: -25px;"><a href="{{route('lab.create')}}" class="btn btn-primary">Add Tests</a></div> --}}
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Medicine Name</th>
                            <th>Price </th>
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Phone No.</th>
                            <th>Payment Status</th>
                            <th>Delivery Status</th>
                            <th>Action</th>
                            <th>Print Receipt</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($medi as $order)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $order->m_name }}</td>
                                <td>{{ $order->price }}</td>
                                <td>{{ $order->u_name }}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->phone }}</td>
                                <td>{{ $order->payment_status }}</td>
                                <td>{{ $order->delivery_status }}</td>
                                <td class="d-flex">
                                    @if ($order->payment_status === 'InProgress' || $order->payment_status === 'UnPaid')
                                        <div class="btn-group">

                                            <a href="{{ route('update-mediorder', $order->id) }}"
                                                class="btn btn-primary">Done</a>

                                            <a href="{{ route('cancel-mediorder', $order->id) }}" class="btn btn-accent"
                                                style="margin-left: 3px; background-color: #b1dfbb;">Cancel</a>

                                            <form action="{{ route('delete-mediorder', $order->id) }}" method="POST"
                                                style="display:inline-block;">
                                                @csrf
                                                @method('POST')
                                                <input type="submit" class="btn" value="Delete"
                                                    style="background-color: deeppink;color: white;margin-left: 5px;">
                                            </form>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('print-Medi-order', $order->id) }}" class="btn btn-secondary">Print
                                        PDF</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
