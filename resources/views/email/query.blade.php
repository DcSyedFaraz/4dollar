@extends('email.layouts.layout')
@section('content')
    <div>

        <table align="center">
            <tbody>
                <tr>
                    <td>
                <tr>
                    <div style=" text-align: center;">
                        Greetings from {{ config('app.app_name') }},
                        <br>
                        <br>
                        Thank you for reaching out! We have successfully received your
                        query. Please make sure the following details are correct.
                        <br>
                        <br>
                    </div>
                </tr>

                <tr>
                    <th class="table_style">Email</th>
                    <td class="table_style"><strong>{{ $query->email }}</strong></td>
                </tr>
                <tr>
                    <th class="table_style">Number</th>
                    <td class="table_style"><strong>{{ $query->phone }}</strong></td>
                </tr>

                <tr>
                    <th class="table_style">Paper Type</th>
                    <td class="table_style"><strong>{{ $query->paper_type }}</strong></td>
                </tr>
                </td>
                </tr>
            </tbody>
        </table>


    </div>
@endsection
