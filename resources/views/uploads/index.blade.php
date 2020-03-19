@extends('layouts.app')
@section('file')
<div class="container">
<table class="table mt-5">
  <thead class="grey lighten-2">
    <tr>
      <th scope="col">TITLE</th>
      <th scope="col">PATH</th>
      <th scope="col">URL</th>
      <th scope="col">CREATED DARE </th>
    </tr>
  </thead>
  <tbody>
  @isset($files)
  @forelse($files as $f )
    <tr>
      <th scope="row">1</th>
      <td>{{ $f }}</td>
      <td>
        <a href="{{ $f }}"> view </a>
      </td>
      <td>@mdo</td>
    </tr>
    @empty 
    <tr> 
        <td>no data </td>
    </tr>

    @endforelse

@endisset
  </tbody>
</table>
</div>

@endsection