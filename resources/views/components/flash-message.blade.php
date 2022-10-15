@props(['status' => 'info'])

@php
  if(session('status') === 'info'){{ $bgColor = 'bg-blue-300'; }}
  if(session('status') === 'alert'){{ $bgColor = 'bg-red-300'; }}
@endphp

@if(session('message'))
  <div class="{{ $bgColor }} w-1/2 mx-auto my-4 py-2 px-10 text-white text-center text-xl font-black rounded">
    {{ session('message') }}
  </div>
@endif