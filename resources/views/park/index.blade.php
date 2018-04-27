@extends('layouts.app')

@section('head')
<ul class="breadcrumb">
  <li><a href="/home">Home</a> / </li>
  <li ><a class="active">Parking Manager</a> </li>
</ul>
@endsection


@section('content')

<br>
<table class="table" id="myTable">

        <tr>
      <th onclick="sortTable(0)" scope="col">ID</th>
      <th  onclick="sortTable(1)" scope="col">Photo</th>
      <th onclick="sortTable(2)" scope="col">Location</th>
      <th onclick="sortTable(3)" scope="col">address</th>
      <th onclick="sortTable(4)" scope="col">Owner</th>
      <th onclick="sortTable(5)" scope="col">Create Date</th>
      <th onclick="sortTable(6)" scope="col">Last Update</th>
      <th onclick="sortTable(7)" scope="col">Edit</th>
      <th onclick="sortTable(8)" scope="col">Delete</th>


    </tr>

    @foreach($park as $item)
    <tr>
      <td>{{ $loop->iteration }}</td>

      <td><img style="border-radius: 20%" width="150"  src="{{ $item->photo }}" alt=""></td>
      <td class="table-secondary"><a href="/parkings/{{ $item->id }}">{{ $item->location }}</a></td>
      <td class="table-secondary">{{ $item->address }}</td>
      <td > <a href="/userManager/show/{{$item->id_user}}">
        {{ $names[$item->id_user] }}
        </a> </td>
      <td class="table-secondary">{{ $item->created_at->diffForHumans() }}</td>
      <td class="table-secondary">{{ $item->updated_at->diffForHumans() }}</td>
      <td class="table-secondary"><a class="btn btn-primary" role="button"
         href="/parkings/{{ $item->id }}/edit">Edit</a></td>


      <td class="table-danger">
        <form class="" action="/parkings/{{ $item->id }}" method="post">
        @csrf
        @method('DELETE')
        <button onclick="return confirm('Are you sure you want to delete this parking?')" class="btn btn-danger" role="button"
            >Delete</button></td>
        </form>
    </tr>
    @endforeach

</table>

<style >
table {
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
    word-wrap: break-word;

}
th {
    cursor: pointer;
}

th, td {
    text-align: left;
    padding: 16px;
}

tr:nth-child(even) {
    background-color: #f2f2f2
}
</style>

<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  dir = "asc";
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("TR");
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          shouldSwitch= true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;

      switchcount ++;
    } else {
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>
@endsection
