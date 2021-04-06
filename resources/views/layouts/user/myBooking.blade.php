@extends('layouts.partials.master')
@section('title')
    Tavel Express | UserDashboard
@endsection

@section('content')
    @include('layouts.partials.navbar')
    <div class="container-fluid mt-3 mb-5">
        <div class="row">
            <div class="col-md-2">
                <div class="list-group list-group-flush bg-dark">
                    <h3 class="text-white text-center text-uppercase">Dashboard</h3>
                    <a href="/user/my-booking" class="list-group-item list-group-item-action list-group-item-info active">My
                        Bookings</a>
                    <a href="/user/profile" class="list-group-item list-group-item-action list-group-item-info">Account</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Booking Id</th>
                                        <th scope="col">Tour Name</th>
                                        <th scope="col">Persons</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Journey Date</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Tour Id</th>
                                        <th scope="col">Package Id</th>
                                        <th scope="col">User Id</th>
                                        <th scope="col">Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bookings as $booking)
                                        <tr>
                                            <td>{{ $booking->booking_id }}</td>
                                            <td>{{ $booking->trip_name }}</td>
                                            <td>{{ $booking->persons }}</td>
                                            <td>{{ $booking->mobile }}</td>
                                            <td>{{ $booking->price }}</td>
                                            <td>{{ $booking->journey_date }}</td>
                                            <td>{{ $booking->status }}</td>
                                            <td>{{ $booking->trip_id }}</td>
                                            <td>{{ $booking->package_id }}</td>
                                            <td>{{ $booking->user_id }}</td>
                                            <td>
                                                <button class="btn btn-primary"> <i class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.partials.footer')
@endsection
