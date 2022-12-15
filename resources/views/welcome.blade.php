<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SaeeAM Data Visualization Dashboard</title>
        

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="style.css">
      
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css"
  rel="stylesheet"
/>
    </head>
    <body class="antialiased">
        
        <!--Main Navigation-->
<header>
  <!-- Sidebar -->
  <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
        <a
          href="/data"
          class="list-group-item list-group-item-action py-2 ripple"
          aria-current="true"
        >
          <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Graph dashboard</span>
        </a>
        
      </div>
    </div>
  </nav>
  <!-- Sidebar -->




  <!-- Navbar -->
  <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#sidebarMenu"
        aria-controls="sidebarMenu"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>

      <!-- Brand -->
      <a class="navbar-brand" href="#">
      SaeeAM Data Visualization Dashboard
      </a>
 <!-- Fuction For Data Extract From Data  -->
<?php


function Extractdata(&$Data, &$name, &$noofdata) {

$items = array();
foreach($Data as $username) {
 $items[] = $username;
}

$filterdata = array();
for ($x = 0; $x <= $noofdata; $x++) {
  $filterdata[] = $items[$x]->$name;
}

foreach($filterdata as $key => $value)         
    if(empty($value))
        unset($filterdata[$key]);

return $filterdata;
};


$Data = $coffer; // database name
$noofdata = 50; //no of data extract
$name = "end_year";  //column name
$End_Year=Extractdata($Data, $name, $noofdata);  //function call to data extract
$Topicname = "topic"; //column name
$Tdata=Extractdata($Data, $Topicname, $noofdata);  //function call to data extract
$Sectorname = "sector";   //column name
$Sdata=Extractdata($Data, $Sectorname, $noofdata);   //function call to data extract
$Regionname = "region";    //column name
$Rdata=Extractdata($Data, $Regionname, $noofdata);   //function call to data extract
$Sourcename = "source";   //column name
$Sodata=Extractdata($Data, $Sourcename, $noofdata);   //function call to data extract
$Countryname = "country";   //column name
$Cdata=Extractdata($Data, $Countryname, $noofdata);   //function call to data extract




?>
<!-- Fuction For Data Extract From Data  -->


      <!-- Search form -->
      <form class="d-none d-md-flex input-group w-auto my-auto">
        <input
          autocomplete="off"
          type="search"
          class="form-control rounded"
          placeholder='Search (Type Here)'
          style="min-width: 225px;"
        />
        <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
      </form>

      <!-- Right links -->
      <ul class="navbar-nav ms-auto d-flex flex-row">
        

        <!-- Icon -->
        <li class="nav-item">
          <a class="nav-link me-3 me-lg-0" href="#">
            <i class="fas fa-fill-drip"></i>
          </a>
        </li>
        <!-- Icon -->
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="#">
            <i class="fab fa-github"></i>
          </a>
        </li>

        <!-- Icon dropdown -->
       

        <!-- Avatar -->
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center"
            href="#"
            id="navbarDropdownMenuLink"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            <img
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp"
              class="rounded-circle"
              height="22"
              alt="Avatar"
              loading="lazy"
            />
          </a>
        
        </li>
      </ul>
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main style="margin-top: 58px;">
  <div class="container pt-4">
            <h1 id="saeeam">SaeeAM Dashboard</h1>
  </div>

<!-- Dropdown Box for Data extract and show then according to table -->

  <div class="row">
    <div class="col-sm-2">
      <div class="card">
      <div class="card-body">
        <h5 class="card-title">End_year</h5>
        
        <select name="version" >
    
    @foreach ($End_Year as $coldata)
      
  
        <option value="{{ $coldata }}" @selected(old('coldata') == $coldata)>
            {{ Str::limit($coldata, 7) }}
        </option>
        
    @endforeach

</select>
        <a href="#" class="btn btn-primary">Go</a>
      </div>
    </div>
  </div>
  <div class="col-sm-2">
      <div class="card">
      <div class="card-body">
        <h5 class="card-title">Topic</h5>
        <select name="version">
    @foreach ($Tdata as $tdata)
        <option value="{{ $tdata }}" @selected(old('coldata') == $tdata)>
            {{ Str::limit($tdata, 7)}}
        </option>
    @endforeach
</select>
<a href="#" class="btn btn-primary">Go</a>
      </div>
    </div>
  </div>

  <div class="col-sm-2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Sector</h5>
        <select name="version">
    @foreach ($Sdata as $secdata)
        <option value="{{ $secdata }}" @selected(old('coldata') == $secdata)>
            {{ Str::limit($secdata, 7)}}
        </option>
    @endforeach
</select>
<a href="#" class="btn btn-primary">Go</a>
      </div>
    </div>
  </div>
  <div class="col-sm-2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Region</h5>
        <select name="version">
    @foreach ($Rdata as $coldata)
   
        <option value="{{ $coldata }}" @selected(old('coldata') == $coldata)>
            {{ Str::limit($coldata, 7) }}
        </option>
    
    @endforeach
</select>
<a href="#" class="btn btn-primary">Go</a>
      </div>
    </div>
  </div>
  <div class="col-sm-2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Source</h5>
        <select name="version">
    @foreach ($Sodata as $coldata)
        <option value="{{ $coldata }}" @selected(old('coldata') == $coldata)>
        {{ Str::limit($coldata, 7) }}
        </option>
    @endforeach
</select>
<a href="#" class="btn btn-primary">Go</a>
      </div>
    </div>
  </div>
  <div class="col-sm-2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Country</h5>
        <select name="version">
    @foreach ($Cdata as $coldata)
        <option value="{{ $coldata }}" @selected(old('coldata') == $coldata)>
            {{ Str::limit($coldata, 7) }}
        </option>
    @endforeach
</select>
<a href="#" class="btn btn-primary">Go</a>
      </div>
    </div>
  </div>
  
</div>
<?php
$noindex = array(0,1,2,3,4,5);
?>
  <?php
$nameindex = array("End_year", "Sector","Topics","Region","Source","Country");

?>



  <div class="container"><h3>Data Table </h3></div>
<div id="exTab1" class="container">	
<ul  class="nav nav-tabs mb-3">
			

      @foreach ($noindex as $indexno)
      
        
    
      <li class="nav-item">
        <a class="nav-link" href="#{{$indexno+1}}a" data-toggle="tab"><i class="fas fa-chart-line fa-fw me-2"></i>{{$nameindex[$indexno]}}</a>
			</li>
      
      @endforeach
			
</ul>

			<div class="tab-content clearfix">
			  
         <div class="tab-pane show active" id="1a">
         @foreach ($End_Year as $year)
          <h3>{{$year}}</h3>
        @endforeach
				</div>

				<div class="tab-pane" id="2a">
         @foreach ($Tdata as $tdata)
          <h3>{{$tdata}}</h3>
        @endforeach
				</div>
        <div class="tab-pane" id="3a">
        @foreach ($Sdata as $sdata)
          <h3>{{$sdata}}</h3>
        @endforeach
				</div>
          <div class="tab-pane" id="4a">
          @foreach ($Rdata as $rdata)
          <h3>{{$rdata}}</h3>
        @endforeach
				</div>
        <div class="tab-pane" id="5a">
          @foreach ($Sodata as $sodata)
          <h3>{{$sodata}}</h3>
        @endforeach
				</div>
        <div class="tab-pane" id="6a">
          @foreach ($Cdata as $cdata)
          <h3>{{$cdata}}</h3>
        @endforeach
				</div>
        
        
			</div>
  </div>

<!-- whole Data Show here -->
  <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
    @foreach ($noindex as $indexno)
      <th>{{$nameindex[$indexno]}}</th>
      
      @endforeach
    </tr>
  </thead>
  <tbody>
  @foreach ($coffer as $data)

 
    
    <tr>
    
    <th >{{$data->end_year}}</th>
      <td>{{$data->sector}}</td>
      <td>{{$data->topic}}</td>
      <td>{{$data->region}}</td>
      <td>{{$data->pestle}}</td>
      <td>{{$data->source}}</td>
      <td>{{$data->country}}</td>

    </tr>
    <tr>
    @endforeach
  </tbody>
</table>


  </main>
<!--Main layout-->

                
    </body>
    <!-- <script src="../js/app.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</html>
