<tr>
<td class="header">
{{-- <a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a> --}}
<a href="{{route('home')}}" target="_blank">
    <img  src="{{ asset('imgs/logo.png') }}" alt="{{env('APP_NAME', config('app.name'))}}" style=" width:20%;">
</a>
</td>
</tr>
