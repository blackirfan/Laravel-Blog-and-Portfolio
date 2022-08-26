<!-- <h1>{{$educations}}</h1> -->
<style>

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: "Inter", sans-serif;
  color: #343a40;
  line-height: 1;
  display: flex;
  justify-content: center;
}

table {
  width: 800px;
  margin-top: 80px;
  /* border: 1px solid #343a40; */
  border-collapse: collapse;
  font-size: 18px;
}

th,
td {
  /* border: 1px solid #343a40; */
  padding: 16px 24px;
  text-align: left;
}

thead th {
  background-color: #087f5b;
  color: #fff;
  width: 25%;
}

tbody tr:nth-child(even) {
  background-color: #f8f9fa;
}

tbody tr:nth-child(odd) {
  background-color: #e9ecef;
}
</style>
<div class="card">

<table>
    <thead>
      <tr>
        <th> ID </th>
        <th> Institution Name</th>
        <th> Institution Type</th>
        <th> Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($educations as $key => $education)
      <tr>
        <td>{{ $education->id ?? '' }}</td>
        <td>{{ $education->institutionname?? '' }}</td>
        <td> {{ $education->institutiontype?? '' }}</td>
        <td>--</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
