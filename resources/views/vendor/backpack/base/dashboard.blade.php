@extends(backpack_view('blank'))


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style/style.css">
    <title>Document</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);
          function drawChart() {
    
            var data = google.visualization.arrayToDataTable([
            ['User', 'Count'],
            ['Users ', {{DB::table("users")->count();}}],
            ['Driver', {{DB::table("driversignup")->count();}}],
            ['Vehicle', {{DB::table("upload")->count();}}],
            ['Booking',{{DB::table("bookings")->count();}}],
            ['Enquiries', {{DB::table("contact_enquiries")->count();}}],
            ['Insurance', {{DB::table("insurances")->count();}}],
            ['Maintenance', {{DB::table("maintenances")->count();}}],
            ['RentalRequest', {{DB::table("rentvehicles")->count();}}]
        ]);
    
            var options = {
              title: ' Daily Activities'
            };
    
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
            chart.draw(data, options);
          }
        </script>

<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Year', 'VehicleRent', 'Income'],
      ['2020',  10,     30000],
      ['2021',  20,     60000],
      ['2022',  50,      80000],
      
    ]);

    var options = {
      title: 'Company Performance',
      curveType: 'function',
      legend: { position: 'bottom' }
    };

    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

    chart.draw(data, options);
  }
</script>
   
</head>
<body>

    @section('content')
<div class="dashboardcontent">

    <div class="widgets">
        <div class="one u">
            <h1 class="text-center text-white "> Users</h1>
            <hr>
            <br>
            <p class="text-center text-white  ">
                {{DB::table("users")->count();}}

            </p>
        </div>
        <div class="one v">
            <h1 class="text-center text-white "> Drivers</h1>
                        <hr>
                        <br>

            <p class="text-center text-white">
            {{DB::table("driversignup")->count();}}

            </p>
        </div>
        <div class="one i">
            <h1 class="text-center text-white "> Vehicles</h1>
                        <hr>
                        <br>

            <p class="text-center text-white">
            {{DB::table("upload")->count();}}

            </p>
        </div>
        <div class="one inc">
            <h1 class="text-center text-white "> Booking</h1>
                        <hr>
                        <br>

            <p class="text-center text-white">
           {{ DB::table("bookings")->count();}}

            </p>
        </div>

        <div class="one e">
            <h1 class="text-center text-white"> Enquiries</h1>
                        <hr>
                        <br>

            <p class="text-center text-white">
            {{DB::table("contact_enquiries")->count();}}

            </p>
        </div>
        <div class="one ins">
            <h1 class="text-center text-white "> Insurance</h1>
                        <hr>
                        <br>

            <p class="text-center text-white">
           {{ DB::table("insurances")->count();}}

            </p>
        </div>
       
        <div class="one maintain">
            <h1 class="text-center text-white ">Maintenance</h1>
                        <hr>
                        <br>

            <p class="text-center text-white">
           {{ DB::table("maintenances")->count();}}

            </p>
        </div>

        
        <div class="one rent">
            <h1 class="text-center text-white ">Rental Request</h1>
                        <hr>
                        <br>

            <p class="text-center text-white">
           {{ DB::table("rentvehicles")->count();}}

            </p>
        </div>

        <div class="one rent">
            <h1 class="text-center text-white ">Today Income</h1>
                        <hr>
                        <br>

            <p class="text-center text-white">
                Rs.{{DB::table('bookings')->where('bok_status', 'verified')->sum('amount');}}


            </p>
        </div>
    </div>

    <div class="charts ">
        <div id="piechart" class="mt-5" style="width: 600px; height: 400px;"></div>
        <div id="curve_chart" class="mt-5" style="width: 600px; height: 400px"></div>

    </div>

    <div class="incomes">
        <div class="inc">
            <h1 class="text-center">Income</h1>
            <p class="text-center">(year 2020)</p>
            <p class="text-center">Rs.30000</p>

        </div>
        <div class="inc">
            <h1 class="text-center">Income</h1>
            <p class="text-center">(year 2022)</p>
            <p class="text-center">Rs.60000</p>

        </div>
        <div class="inc">
            <h1 class="text-center">Income</h1>
            <p class="text-center">(year 2023)</p>
            <p class="text-center">Rs.80000</p>

        </div>
    </div>

</div>
@endsection

</body>
</html>


