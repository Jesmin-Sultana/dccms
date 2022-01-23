@extends('admin.master')
@section('main')





<!--Report-->
<a href="{{route('report.form')}}" ></a>

<div>
    <form>
        <div class="input-group rounded mt-3 mb-2">
            <input type="date" class="form-control rounded" value="{{request()->from_date}}" name="from_date" placeholder="Search" aria-label="Search"
                   aria-describedby="search-addon" />
            <input type="date" class="form-control rounded" value="{{request()->to_date}}" name="to_date" placeholder="Search" aria-label="Search"
                   aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
    <button type="submit">submit</button>
  </span>
        </div>
    </form>
</div>

<form class="print_order">
        <input class="btn btn-danger" type="button" onClick="PrintDiv();" value="Print">
    </form>
<div id="divToPrint">
    
<center>
  <h1>Report</h1>
</center>

<table class="table">
  <thead>
    <tr>
    <th scope="col">NID Number</th>
      <th scope="col">Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Area</th>
      <th scope="col">Problem Type</th>
      <!-- <th scope="col">Description of Problem</th> -->
      <th scope="col">Date</th> 
    </tr>
  </thead>


  <tbody>


  @foreach($problem as $data )

    <tr>
      <th scope="row">{{$data->nid_number}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->phone_number}}</td>
      <td>{{$data->area}}</td>

      <td>{{optional($data->problemtype)->problem_type}}</td>

      <!-- <td>{{$data->description_problem}}</td> -->
      <td>{{$data->date}}</td>

    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>

@endsection

 <script language="javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=1100,height=700');
        popupWin.document.open();
        popupWin.document.write('<html><head><link href="http://127.0.0.1:8000/css/style.css" rel="stylesheet"></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script> 



