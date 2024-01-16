@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')


    <div class="bg-white mb-1 rounded ">

            <label for="timePeriod">Select Time Period:</label>
            <select id="timePeriod" class="btn btn-sm btn-outline-primary " name="timePeriod">
                <option value="today" selected>today</option>
                <option value="week" >This Week</option>
                <option value="month" >This Month</option>
                <option value="quarter" >This Quarter</option>
                <option value="semester" >THis Semester</option>
                <option value="year" >This Year</option>
            </select>

            <label for="startDate">Select Start Date:</label>
            <input type="date" id="startDate" class="btn btn-sm btn-outline-primary ">

            <label for="timePeriod">Select End Date:</label>
            <input type="date" id="endDate" class="btn btn-sm btn-outline-primary ">

    </div>

    <div>
        <canvas id="myChart"></canvas>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
@stop