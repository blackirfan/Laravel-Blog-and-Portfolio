

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
        <th> Title</th>
        <th> Journal Name</th>
        <th>Year </th>
        <th> Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($publicationDetails as $key => $publicationDetail)
      <tr>
        <td>{{ $publicationDetail->id ?? '' }}</td>
        <td>{{ $publicationDetail->name?? '' }}</td>
        <td> {{ $publicationDetail->journalname?? '' }}</td>
        <td> {{ $publicationDetail->year?? '' }}</td>
        <td><a href="{{ route('publicationDetails.edit', $publicationDetail->id) }}">Edit</a></td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
