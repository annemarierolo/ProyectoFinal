
<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="{{ asset('adminr/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- styles -->
    <link href="{{ asset('adminr/css/styles.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	{{ $packages }}
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Tio Ven</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
                            <li><a class="" href="#"><i class="" aria-hidden="true"></i>{{ Auth::user()->name }}</a></li>
                            <li><a class="" href="{{ url('/logout') }}"><i class="" aria-hidden="true"></i>Salir</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="{{ url('admin/paquetes') }}"><i class="glyphicon glyphicon-home"></i>Paquetes
                    </a></li>
                    <li><a href="calendar.html"><i class="glyphicon glyphicon-calendar"></i> Eventos</a></li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">

		  	<div class="row">
  				<div class="col-md-6">
  					<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title"></div>
							
							<div class="panel-options">
						
							</div>
						</div>
		  				<div class="panel-body">
		  					<table class="table">
				              <thead>
				                <tr>
				                  <th><img src="images/s1.jpg" alt="" /></th>
				                  <th>First Name</th>
				                  <th>Last Name</th>
				                  <th>Username</th>
				                </tr>
				              </thead>
				              <tbody>
				                <tr>
				                  <td>1</td>
				                  <td>Mark</td>
				                  <td>Otto</td>
				                  <td>@mdo</td>
				                </tr>
				                <tr>
				                  <td>2</td>
				                  <td>Jacob</td>
				                  <td>Thornton</td>
				                  <td>@fat</td>
				                </tr>
				                <tr>
				                  <td>3</td>
				                  <td>Larry</td>
				                  <td>the Bird</td>
				                  <td>@twitter</td>
				                </tr>
				              </tbody>
				            </table>
		  				</div>
		  			</div>
  				</div>
  				<div class="col-md-6">
  					<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">Striped Rows</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
								<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
							</div>
						</div>
		  				<div class="panel-body">
		  					<table class="table table-striped">
				              <thead>
				                <tr>
				                  <th>#</th>
				                  <th>First Name</th>
				                  <th>Last Name</th>
				                  <th>Username</th>
				                </tr>
				              </thead>
				              <tbody>
				                <tr>
				                  <td>1</td>
				                  <td>Mark</td>
				                  <td>Otto</td>
				                  <td>@mdo</td>
				                </tr>
				                <tr>
				                  <td>2</td>
				                  <td>Jacob</td>
				                  <td>Thornton</td>
				                  <td>@fat</td>
				                </tr>
				                <tr>
				                  <td>3</td>
				                  <td>Larry</td>
				                  <td>the Bird</td>
				                  <td>@twitter</td>
				                </tr>
				              </tbody>
				            </table>
		  				</div>
		  			</div>
  				</div>
  			</div>

  			<div class="row">
  				<div class="col-md-6">
  					<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">Border Table</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
								<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
							</div>
						</div>
		  				<div class="panel-body">
		  					<table class="table table-bordered">
				              <thead>
				                <tr>
				                  <th>#</th>
				                  <th>First Name</th>
				                  <th>Last Name</th>
				                  <th>Username</th>
				                </tr>
				              </thead>
				              <tbody>
				                <tr>
				                  <td>1</td>
				                  <td>Mark</td>
				                  <td>Otto</td>
				                  <td>@mdo</td>
				                </tr>
				                <tr>
				                  <td>2</td>
				                  <td>Jacob</td>
				                  <td>Thornton</td>
				                  <td>@fat</td>
				                </tr>
				                <tr>
				                  <td>3</td>
				                  <td>Larry</td>
				                  <td>the Bird</td>
				                  <td>@twitter</td>
				                </tr>
				              </tbody>
				            </table>
		  				</div>
		  			</div>
  				</div>
  				<div class="col-md-6">
  					<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">Hover Rows</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
								<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
							</div>
						</div>
		  				<div class="panel-body">
		  					<table class="table table-hover">
				              <thead>
				                <tr>
				                  <th>#</th>
				                  <th>First Name</th>
				                  <th>Last Name</th>
				                  <th>Username</th>
				                </tr>
				              </thead>
				              <tbody>
				                <tr>
				                  <td>1</td>
				                  <td>Mark</td>
				                  <td>Otto</td>
				                  <td>@mdo</td>
				                </tr>
				                <tr>
				                  <td>2</td>
				                  <td>Jacob</td>
				                  <td>Thornton</td>
				                  <td>@fat</td>
				                </tr>
				                <tr>
				                  <td>3</td>
				                  <td>Larry</td>
				                  <td>the Bird</td>
				                  <td>@twitter</td>
				                </tr>
				              </tbody>
				            </table>
		  				</div>
		  			</div>
  				</div>
  			</div>

  			<div class="row">
  				<div class="col-md-6">
  					<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">Condensed Table</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
								<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
							</div>
						</div>
		  				<div class="panel-body">
		  					<table class="table table-condensed">
				              <thead>
				                <tr>
				                  <th>#</th>
				                  <th>First Name</th>
				                  <th>Last Name</th>
				                  <th>Username</th>
				                </tr>
				              </thead>
				              <tbody>
				                <tr>
				                  <td>1</td>
				                  <td>Mark</td>
				                  <td>Otto</td>
				                  <td>@mdo</td>
				                </tr>
				                <tr>
				                  <td>2</td>
				                  <td>Jacob</td>
				                  <td>Thornton</td>
				                  <td>@fat</td>
				                </tr>
				                <tr>
				                  <td>3</td>
				                  <td>Larry</td>
				                  <td>the Bird</td>
				                  <td>@twitter</td>
				                </tr>
				              </tbody>
				            </table>
		  				</div>
		  			</div>
  				</div>
  				<div class="col-md-6">
  					<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">Table with row classes</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
								<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
							</div>
						</div>
		  				<div class="panel-body">
		  					<table class="table">
				              <thead>
				                <tr>
				                  <th>#</th>
				                  <th>First Name</th>
				                  <th>Last Name</th>
				                  <th>Username</th>
				                </tr>
				              </thead>
				              <tbody>
				                <tr class="success">
				                  <td>1</td>
				                  <td>Mark</td>
				                  <td>Otto</td>
				                  <td>@mdo</td>
				                </tr>
				                <tr class="danger">
				                  <td>2</td>
				                  <td>Jacob</td>
				                  <td>Thornton</td>
				                  <td>@fat</td>
				                </tr>
				                <tr class="warning">
				                  <td>3</td>
				                  <td>Larry</td>
				                  <td>the Bird</td>
				                  <td>@twitter</td>
				                </tr>
				              </tbody>
				            </table>
		  				</div>
		  			</div>
  				</div>
  			</div>

  			<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Responsive Tables</div>
				</div>
  				<div class="panel-body">
  					<div class="table-responsive">
  						<table class="table">
			              <thead>
			                <tr>
			                  <th>#</th>
			                  <th>First Name</th>
			                  <th>Last Name</th>
			                  <th>Username</th>
			                </tr>
			              </thead>
			              <tbody>
			                <tr>
			                  <td>1</td>
			                  <td>Mark</td>
			                  <td>Otto</td>
			                  <td>@mdo</td>
			                </tr>
			                <tr>
			                  <td>2</td>
			                  <td>Jacob</td>
			                  <td>Thornton</td>
			                  <td>@fat</td>
			                </tr>
			                <tr>
			                  <td>3</td>
			                  <td>Larry</td>
			                  <td>the Bird</td>
			                  <td>@twitter</td>
			                </tr>
			              </tbody>
			            </table>
  					</div>
  				</div>
  			</div>

  			<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Bootstrap dataTables</div>
				</div>
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>Rendering engine</th>
								<th>Browser</th>
								<th>Platform(s)</th>
								<th>Engine version</th>
								<th>CSS grade</th>
							</tr>
						</thead>
						<tbody>
							<tr class="odd gradeX">
								<td>Trident</td>
								<td>Internet
									 Explorer 4.0</td>
								<td>Win 95+</td>
								<td class="center"> 4</td>
								<td class="center">X</td>
							</tr>
							<tr class="even gradeC">
								<td>Trident</td>
								<td>Internet
									 Explorer 5.0</td>
								<td>Win 95+</td>
								<td class="center">5</td>
								<td class="center">C</td>
							</tr>
							<tr class="odd gradeA">
								<td>Trident</td>
								<td>Internet
									 Explorer 5.5</td>
								<td>Win 95+</td>
								<td class="center">5.5</td>
								<td class="center">A</td>
							</tr>
							<tr class="even gradeA">
								<td>Trident</td>
								<td>Internet
									 Explorer 6</td>
								<td>Win 98+</td>
								<td class="center">6</td>
								<td class="center">A</td>
							</tr>
							<tr class="odd gradeA">
								<td>Trident</td>
								<td>Internet Explorer 7</td>
								<td>Win XP SP2+</td>
								<td class="center">7</td>
								<td class="center">A</td>
							</tr>
							<tr class="even gradeA">
								<td>Trident</td>
								<td>AOL browser (AOL desktop)</td>
								<td>Win XP</td>
								<td class="center">6</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Firefox 1.0</td>
								<td>Win 98+ / OSX.2+</td>
								<td class="center">1.7</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Firefox 1.5</td>
								<td>Win 98+ / OSX.2+</td>
								<td class="center">1.8</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Firefox 2.0</td>
								<td>Win 98+ / OSX.2+</td>
								<td class="center">1.8</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Firefox 3.0</td>
								<td>Win 2k+ / OSX.3+</td>
								<td class="center">1.9</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Camino 1.0</td>
								<td>OSX.2+</td>
								<td class="center">1.8</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Camino 1.5</td>
								<td>OSX.3+</td>
								<td class="center">1.8</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Netscape 7.2</td>
								<td>Win 95+ / Mac OS 8.6-9.2</td>
								<td class="center">1.7</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Netscape Browser 8</td>
								<td>Win 98SE+</td>
								<td class="center">1.7</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Netscape Navigator 9</td>
								<td>Win 98+ / OSX.2+</td>
								<td class="center">1.8</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Mozilla 1.0</td>
								<td>Win 95+ / OSX.1+</td>
								<td class="center">1</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Mozilla 1.1</td>
								<td>Win 95+ / OSX.1+</td>
								<td class="center">1.1</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Mozilla 1.2</td>
								<td>Win 95+ / OSX.1+</td>
								<td class="center">1.2</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Mozilla 1.3</td>
								<td>Win 95+ / OSX.1+</td>
								<td class="center">1.3</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Mozilla 1.4</td>
								<td>Win 95+ / OSX.1+</td>
								<td class="center">1.4</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Mozilla 1.5</td>
								<td>Win 95+ / OSX.1+</td>
								<td class="center">1.5</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Mozilla 1.6</td>
								<td>Win 95+ / OSX.1+</td>
								<td class="center">1.6</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Mozilla 1.7</td>
								<td>Win 98+ / OSX.1+</td>
								<td class="center">1.7</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Mozilla 1.8</td>
								<td>Win 98+ / OSX.1+</td>
								<td class="center">1.8</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Seamonkey 1.1</td>
								<td>Win 98+ / OSX.2+</td>
								<td class="center">1.8</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Epiphany 2.20</td>
								<td>Gnome</td>
								<td class="center">1.8</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Webkit</td>
								<td>Safari 1.2</td>
								<td>OSX.3</td>
								<td class="center">125.5</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Webkit</td>
								<td>Safari 1.3</td>
								<td>OSX.3</td>
								<td class="center">312.8</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Webkit</td>
								<td>Safari 2.0</td>
								<td>OSX.4+</td>
								<td class="center">419.3</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Webkit</td>
								<td>Safari 3.0</td>
								<td>OSX.4+</td>
								<td class="center">522.1</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Webkit</td>
								<td>OmniWeb 5.5</td>
								<td>OSX.4+</td>
								<td class="center">420</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Webkit</td>
								<td>iPod Touch / iPhone</td>
								<td>iPod</td>
								<td class="center">420.1</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Webkit</td>
								<td>S60</td>
								<td>S60</td>
								<td class="center">413</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Presto</td>
								<td>Opera 7.0</td>
								<td>Win 95+ / OSX.1+</td>
								<td class="center">-</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Presto</td>
								<td>Opera 7.5</td>
								<td>Win 95+ / OSX.2+</td>
								<td class="center">-</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Presto</td>
								<td>Opera 8.0</td>
								<td>Win 95+ / OSX.2+</td>
								<td class="center">-</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Presto</td>
								<td>Opera 8.5</td>
								<td>Win 95+ / OSX.2+</td>
								<td class="center">-</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Presto</td>
								<td>Opera 9.0</td>
								<td>Win 95+ / OSX.3+</td>
								<td class="center">-</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Presto</td>
								<td>Opera 9.2</td>
								<td>Win 88+ / OSX.3+</td>
								<td class="center">-</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Presto</td>
								<td>Opera 9.5</td>
								<td>Win 88+ / OSX.3+</td>
								<td class="center">-</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Presto</td>
								<td>Opera for Wii</td>
								<td>Wii</td>
								<td class="center">-</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Presto</td>
								<td>Nokia N800</td>
								<td>N800</td>
								<td class="center">-</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>Presto</td>
								<td>Nintendo DS browser</td>
								<td>Nintendo DS</td>
								<td class="center">8.5</td>
								<td class="center">C/A<sup>1</sup></td>
							</tr>
							<tr class="gradeC">
								<td>KHTML</td>
								<td>Konqureror 3.1</td>
								<td>KDE 3.1</td>
								<td class="center">3.1</td>
								<td class="center">C</td>
							</tr>
							<tr class="gradeA">
								<td>KHTML</td>
								<td>Konqureror 3.3</td>
								<td>KDE 3.3</td>
								<td class="center">3.3</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeA">
								<td>KHTML</td>
								<td>Konqureror 3.5</td>
								<td>KDE 3.5</td>
								<td class="center">3.5</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeX">
								<td>Tasman</td>
								<td>Internet Explorer 4.5</td>
								<td>Mac OS 8-9</td>
								<td class="center">-</td>
								<td class="center">X</td>
							</tr>
							<tr class="gradeC">
								<td>Tasman</td>
								<td>Internet Explorer 5.1</td>
								<td>Mac OS 7.6-9</td>
								<td class="center">1</td>
								<td class="center">C</td>
							</tr>
							<tr class="gradeC">
								<td>Tasman</td>
								<td>Internet Explorer 5.2</td>
								<td>Mac OS 8-X</td>
								<td class="center">1</td>
								<td class="center">C</td>
							</tr>
							<tr class="gradeA">
								<td>Misc</td>
								<td>NetFront 3.1</td>
								<td>Embedded devices</td>
								<td class="center">-</td>
								<td class="center">C</td>
							</tr>
							<tr class="gradeA">
								<td>Misc</td>
								<td>NetFront 3.4</td>
								<td>Embedded devices</td>
								<td class="center">-</td>
								<td class="center">A</td>
							</tr>
							<tr class="gradeX">
								<td>Misc</td>
								<td>Dillo 0.8</td>
								<td>Embedded devices</td>
								<td class="center">-</td>
								<td class="center">X</td>
							</tr>
							<tr class="gradeX">
								<td>Misc</td>
								<td>Links</td>
								<td>Text only</td>
								<td class="center">-</td>
								<td class="center">X</td>
							</tr>
							<tr class="gradeX">
								<td>Misc</td>
								<td>Lynx</td>
								<td>Text only</td>
								<td class="center">-</td>
								<td class="center">X</td>
							</tr>
							<tr class="gradeC">
								<td>Misc</td>
								<td>IE Mobile</td>
								<td>Windows Mobile 6</td>
								<td class="center">-</td>
								<td class="center">C</td>
							</tr>
							<tr class="gradeC">
								<td>Misc</td>
								<td>PSP browser</td>
								<td>PSP</td>
								<td class="center">-</td>
								<td class="center">C</td>
							</tr>
							<tr class="gradeU">
								<td>Other browsers</td>
								<td>All others</td>
								<td>-</td>
								<td class="center">-</td>
								<td class="center">U</td>
							</tr>
						</tbody>
					</table>
  				</div>
  			</div>
		  </div>
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>

      <link href="{{('adminr/vendors/datatables/dataTables.bootstrap.css')}}" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('adminr/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('adminr/vendors/datatables/js/jquery.dataTables.min.js')}}"></script>

    <script src="{{ asset('adminr/vendors/datatables/dataTables.bootstrap.js')}}"></script>

    <script src="{{ asset('adminr/js/custom.js')}}"></script>
    <script src="{{ asset('adminr/js/tables.js')}}"></script>
  </body>
</html>