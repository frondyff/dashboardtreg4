@extends('admin.main')
@section('title','Best Financial - ')
@section('content')
<h1> Best of Financial</h1>
<hr>
<p> Tabel Best of Financial
<table class="table table-striped mb-3">
  <tr>
    <th>Regional</th><th>Witel</th><th>Bulan</th><th>Tahun</th><th>Target</th><th>Real</th><th>Type</th>
  </tr>
  @foreach($data as $dt)
  <tr>
    <td>
      {{$dt->Regional}}
    </td>
    <td>
      {{$dt->Witel}}
    </td>
    <td>
      {{$dt->Bulan}}
    </td>
    <td>
      {{$dt->Tahun}}
    </td>
    <td>
      {{$dt->Target}}
    </td>
    <td>
      {{$dt->Real}}
    </td>
    <td>
      {{$dt->Type}}
    </td>
  </tr>
  @endforeach
</table>
@endsection
