<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Reja Dashboard</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

<!-- c3 Charts -->
    <link href="css/plugins/c3/c3.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            {{-- <img alt="image" class="img-circle" src="img/avatar.png" /> --}}
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">intelipro</strong>
                             </span> <span class="text-muted text-xs block">Manager<b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Contacts</a></li>
                            <li><a href="#">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html">Logout</a></li>
                        </ul>
                    </div>
                </li>
                <li class="active">
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li class="active"><a href="dashboard_2.html">Summary</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
                <li>
                    <a class="right-sidebar-toggle">
                        <i class="fa fa-tasks"></i>
                    </a>
                </li>
            </ul>
        </nav>
        </div>
     <div class="wrapper wrapper-content">
         <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Revenue</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins" id="totalrevenue"></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Customers</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins" id="totalcustomers"></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Transactions</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins" id="totaltransactions"></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                     <form role="form" class="form-inline">
                        <div class="form-group">
                            <label for="networks" class="sr-only">Span</label>
                            <select id="span" class="form-control" v-model="network">
                                <option value="30Days" selected>30Days</option>
                                <option value="60Days">60Days</option>
                                <option value="90Days">90Days</option>
                            </select>
                        </div>
                        </form>
                  </div>
             </div><!--close Navbar row-->
         </div><!--close class Wrapper-->
                                     <div class="tabs-container">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#tab-1"> Revenue</a></li>
                                            <li class=""><a data-toggle="tab" href="#tab-2">Transactions</a></li>
                                            <li class=""><a data-toggle="tab" href="#tab-3">Customers</a></li>
                                        </ul>
                                        <div class="tab-content">
                                        <div id="tab-1" class="tab-pane active">
                                         <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="ibox float-e-margins">
                                                    <div class="ibox-content">
                                                    <div class="row">
                                                    <div class="ibox float-e-margins">
                                                            <div class="ibox-content">
                                                                <div>
                                                                <canvas id="revenue"></canvas>
                                                                </div>
                                                        </div>
                                                     </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--close col-lg-12-->
                                </div><!--close row-->
                                </div>
                                </div><!--close tab-pane-->
                                <div id="tab-2" class="tab-pane">
                                 <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="ibox float-e-margins">
                                                    <div class="ibox-content">
                                                    <div class="row">
                                                    <div class="ibox float-e-margins">
                                                            <div class="ibox-content">
                                                                <div>
                                                                <canvas id="transactions"></canvas>
                                                                </div>
                                                        </div>
                                                     </div>
                                                </div>
                                            </div>
                                        </div>
                                      </div><!--close col-lg-12-->
                                     </div><!--close row-->
                                  </div>
                                </div><!--close tab-panel-->

                                <div id="tab-3" class="tab-pane">
                                 <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="ibox float-e-margins">
                                                    <div class="ibox-content">
                                                    <div class="row">
                                                    <div class="ibox float-e-margins">
                                                            <div class="ibox-content">
                                                                <div>
                                                                <canvas id="customers"></canvas>
                                                                </div>
                                                        </div>
                                                     </div>
                                                </div>
                                            </div>
                                        </div>
                                      </div><!--close col-lg-12-->
                                     </div><!--close row-->
                                  </div>
                                </div><!--close tab-panel-->
                            </div><!--close tab content-->
                        </div><!--close close tab-container-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>



    <!-- d3 and c3 charts -->
    <script src="js/plugins/d3/d3.min.js"></script>
    <script src="js/plugins/c3/c3.min.js"></script>
    <script src="js/plugins/chartJs/Chart.min.js"></script>
    <script>
     $(document).ready(function () {
            $.ajax({
            type:"GET",
            url:"/summary/{token}/{days}",
            data:{token:"{!! $accessToken !!}",days:"30Days"},
              success: function(data) {
                var totalRevenue = 0;
                var totalCustomers = 0;
                var totalTransactions = 0;

                var Revenue = [];
                var Transaction = [];
                var Customers = [];
                var Dates = [];
             var values = JSON.parse(data);
             console.log(values.length);
              for(let i = 0, l = values.length; i < l; i++) {
                  totalRevenue = totalRevenue + values[i].revenue;
                  totalCustomers = totalCustomers + values[i].customers;
                  totalTransactions = totalTransactions + values[i].transactions;

                        Revenue.push(values[i].revenue);
                        Transaction.push(values[i].transactions)
                        Customers.push(values[i].customers)
                        Dates.push(values[i].date)
                     }
                   // $('#totalrevenue').value = totalRevenue;
                    $('#totalrevenue').append('<span>'+totalRevenue+'</span>');
                     $('#totalcustomers').append('<span>'+totalCustomers+'</span>');
                      $('#totaltransactions').append('<span>'+totalTransactions+'</span>');



                     var GraphOptions = {
                                        responsive: true,
                                        scales: {
                                                    xAxes: [{
                                                        scaleLabel: {
                                                            display: true,
                                                            labelString: "Dates"
                                                        },
                                                        type: "time",
                                                        distribution: "linear",
                                                        time: {
                                                            unit: 'day',
                                                            round: 'day',
                                                            // displayFormats: {
                                                            //     day: 'MMM D'
                                                            // }
                                                        },
                                                        // offset: true
                                                    }],
                                                    xAxes: [{offset: true}],
                                                    yAxes: [{
                                                        scaleLabel: {
                                                            display: true,
                                                            labelString: "Rev/cust/trans"
                                                        },
                                                        ticks: {
                                                            beginAtZero:true
                                                        }
                                                    }]
                                                }
                                           }; //close graph options
                      var ctx2 = document.getElementById("revenue").getContext("2d");
                      var ctx3 = document.getElementById("transactions").getContext("2d");
                      var ctx4 = document.getElementById("customers").getContext("2d");
                      //plot graphs
                       var mixedChart = new Chart(ctx2, {
                                        type: 'bar',
                                        data: {
                                            datasets: [
                                                {
                                                label: 'Revenue',
                                                data: Revenue,
                                                borderColor:'rgb(179, 179, 255)',
                                                fill: false,
                                                lineTension: 0,
                                                type: 'line'
                                                },
                                            ],
                                            labels: Dates
                                        },
                                        options: GraphOptions
                                    });

                                    var mixedChart = new Chart(ctx3, {
                                        type: 'bar',
                                        data: {
                                            datasets: [
                                                {
                                                label: 'Transactions',
                                                data: Transaction,
                                                borderColor:'#9676b9',
                                                fill: false,
                                                lineTension: 0,
                                                type: 'line'
                                                },
                                            ],
                                            labels: Dates
                                        },
                                        options: GraphOptions
                            });

                             var mixedChart = new Chart(ctx4, {
                                        type: 'bar',
                                        data: {
                                            datasets: [
                                              {
                                                label: 'Customers',
                                                data: Customers,
                                                borderColor:'#ff2d20',
                                                fill: false,
                                                lineTension: 0,
                                                type: 'line'
                                                },
                                            ],
                                            labels: Dates
                                        },
                                        options: GraphOptions
                            });
            }
         }); //close ajax function



                 $('#span').change(function(){
                    // alert();

          $.ajax({
            type:"GET",
            url:"/summary/{token}/{days}",
            data:{token:"{!! $accessToken !!}",days:$('#span').find(":selected").text()},
              success: function(data) {
                var totalRevenue = 0;
                var totalCustomers = 0;
                var totalTransactions = 0;

                var Revenue = [];
                var Transaction = [];
                var Customers = [];
                var Dates = [];
             var values = JSON.parse(data);
             console.log(values.length);
              for(let i = 0, l = values.length; i < l; i++) {
                  totalRevenue = totalRevenue + values[i].revenue;
                  totalCustomers = totalCustomers + values[i].customers;
                  totalTransactions = totalTransactions + values[i].transactions;

                        Revenue.push(values[i].revenue);
                        Transaction.push(values[i].transactions)
                        Customers.push(values[i].customers)
                        Dates.push(values[i].date)
                     }
                   // $('#totalrevenue').value = totalRevenue;
                    $('#totalrevenue').append('<span>'+totalRevenue+'</span>');
                     $('#totalcustomers').append('<span>'+totalCustomers+'</span>');
                      $('#totaltransactions').append('<span>'+totalTransactions+'</span>');



                     var GraphOptions = {
                                        responsive: true,
                                        scales: {
                                                    xAxes: [{
                                                        scaleLabel: {
                                                            display: true,
                                                            labelString: "Dates"
                                                        },
                                                        type: "time",
                                                        distribution: "linear",
                                                        time: {
                                                            unit: 'day',
                                                            round: 'day',
                                                            // displayFormats: {
                                                            //     day: 'MMM D'
                                                            // }
                                                        },
                                                        // offset: true
                                                    }],
                                                    xAxes: [{offset: true}],
                                                    yAxes: [{
                                                        scaleLabel: {
                                                            display: true,
                                                            labelString: "Rev/cust/trans"
                                                        },
                                                        ticks: {
                                                            beginAtZero:true
                                                        }
                                                    }]
                                                }
                                           }; //close graph options
                      var ctx2 = document.getElementById("revenue").getContext("2d");
                      var ctx3 = document.getElementById("transactions").getContext("2d");
                      var ctx4 = document.getElementById("customers").getContext("2d");
                      //plot graphs
                       var mixedChart = new Chart(ctx2, {
                                        type: 'bar',
                                        data: {
                                            datasets: [
                                                {
                                                label: 'Revenue',
                                                data: Revenue,
                                                borderColor:'rgb(179, 179, 255)',
                                                fill: false,
                                                lineTension: 0,
                                                type: 'line'
                                                },
                                            ],
                                            labels: Dates
                                        },
                                        options: GraphOptions
                                    });

                                    var mixedChart = new Chart(ctx3, {
                                        type: 'bar',
                                        data: {
                                            datasets: [
                                                {
                                                label: 'Transactions',
                                                data: Transaction,
                                                borderColor:'#9676b9',
                                                fill: false,
                                                lineTension: 0,
                                                type: 'line'
                                                },
                                            ],
                                            labels: Dates
                                        },
                                        options: GraphOptions
                            });

                             var mixedChart = new Chart(ctx4, {
                                        type: 'bar',
                                        data: {
                                            datasets: [
                                              {
                                                label: 'Customers',
                                                data: Customers,
                                                borderColor:'#ff2d20',
                                                fill: false,
                                                lineTension: 0,
                                                type: 'line'
                                                },
                                            ],
                                            labels: Dates
                                        },
                                        options: GraphOptions
                            });
            }
         }); //close ajax function
          }); // close span
        });
    </script>
</body>
</html>
