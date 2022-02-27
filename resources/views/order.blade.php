@extends('inc.layout')
@section('container')
<div class="container w-4/5 mx-auto">
    <table class="table w-full" id="table">
        <thead>
        <tr>
            <th>SL</th>
            <th>Transaction</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Amount</th>
            <th>Method</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @forelse($order as $o)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$o->transaction_id}}</td>
            <td>{{$o->title}} {{$o->first_name}} {{$o->last_name}}</td>
            <td>{{$o->email}}</td>
            <td>{{$o->phone_number}}</td>
            <td>{{$o->amount}}</td>
            <td>{{$o->payment_method}}</td>
            <td>{{$o->payment_status == 1 ? 'Paid' : 'Unpaid'}}</td>
        </tr>
            @empty

        @endforelse
        </tbody>
    </table>
</div>
@endsection
@section("footer_script")
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#table").dataTable();
        })
    </script>
@endsection
@section('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
@endsection
