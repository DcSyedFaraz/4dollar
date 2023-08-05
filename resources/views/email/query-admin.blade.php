@extends('email.layouts.layout')
@section('content')
    <div>

        <table align="center">
            <tbody>
                <tr>
                    <td>
                <tr>
                    <div align='center' style="line-height: 46.8px; font-size: 36px;">
                        {{ env('APP_NAME', config('app.name')) }} Contact Query Details,
                        <br>
                        <br>
                        <strong>Client’s Information:</strong>
                        <hr>
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
