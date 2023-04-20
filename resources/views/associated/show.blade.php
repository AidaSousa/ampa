@extends('dashboard')

@section('title', 'Asociados')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-users"></i> Asociados</h1>
          <button class="btn btn-primary" type="button" onclick="openModal();" >Nuevo</button>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Asociados</a></li>
        </ul>
      </div>
      
        <div class="row">
            <div class="col-md-12">
              <div class="tile">
                <div class="tile-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="tableUsuarios">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Situación</th>
                          <th>Nombre</th>
                          <th>Apelidos</th>
                          <th>Dirección</th>
                          <th>D.N.I</th>
                          <th>Teléfono</th>
                          <th>E-mail</th>
                          <th>Comedor</th>
                          <th>Colaborador</th>
                          <th>Pagos</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Alta Nueva</td>
                          <td>Julio</td>
                          <td>Peréz</td>
                          <td>calle Uria, 57, Gijón Asturias 33209</td>
                          <td>35669277M</td>
                          <td>656654332</td>
                          <td>julio@gmail.com</td>
                          <td>SI</td>
                          <td>SI</td>
                          <td>Transferencia</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Renovación</td>
                          <td>Marta</td>
                          <td>Fernández</td>
                          <td>calle Río de oro, 5, Gijón Asturias 33203</td>
                          <td>35827657C</td>
                          <td>652630092</td>
                          <td>Marta@gmail.com</td>
                          <td>No</td>
                          <td>SI</td>
                          <td>PayPal</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Modificación</td>
                          <td>Manu</td>
                          <td>Gimenez</td>
                          <td>calle Felipe II, 106, Gijón Asturias 33204</td>
                          <td>35888527V</td>
                          <td>655530332</td>
                          <td>manu@gmail.com</td>
                          <td>SI</td>
                          <td>SI</td>
                          <td>Transferencia</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.temp.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/chart.js"></script>
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>