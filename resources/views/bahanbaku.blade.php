<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Winpack.com</title>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/materialize/css/materialize.min.css" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand waves-effect waves-dark" href="index.html"><i class="large material-icons">insert_chart</i> <strong>PT.WINAPACK</strong></a>
                
        <div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
            </div>

            <ul class="nav navbar-top-links navbar-right" > 
                
                  
                  <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1" ><i class="fa fa-user fa-fw" style="margin-left: 20px;"></i> <b>Gudang</b> <i class="materiall-icons right" style="margin-left: 30px;"></i></a></li>
            </ul>
        </nav>
        <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
<li><a href="/masuk"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
</li>
</ul>


       <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class=" waves-effect waves-dark" href="/gudang"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="formbahanbaku" class="active-menu waves-effect waves-dark"><i class="fa fa-qrcode"></i>Tambah Bahan Baku</a>
                    </li>
                    <li>
                        <a href="viewbahanbakuGudang" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i> Bahan Baku</a>
                    </li>
                    <li>
                        <a href="viewsetengahjadi" class="waves-effect waves-dark"><i class="fa fa-sitemap"></i> Barang Setengah Jadi</a>
                    </li>
                    
       
                    

                    

            </div>

             @if(Session::has('message'))
        <div class="col s12">
            <div class="alert2">
                {{ Session::get('message') }}
            </div>
        </div>
        @endif

        </nav>
        <!-- /. NAV SIDE  -->
      
        <div id="page-wrapper">
          <div class="header"> 
                        <h1 class="page-header">
                            Bahan Baku
                        </h1>
                        <ol class="breadcrumb">
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Bahan Baku</a></li>
                      <li class="active">Data</li>
                    </ol> 
                                    
        </div>
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                             {{ date('d M Y') }}
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">   
                                <table style="border: 0;text-align: center;">

                                    <thead style="border: 0;">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Bahan</th>
                                            <th>Stok</th>
                                            <th>Bulan</th>
                                           <!--  <th>peramalan</th> -->
                                            <th></th>
                                            
                                        </tr>

                                    </thead>

                                    

                                    <tbody  >

                                <?php $no=1; ?>
                                @foreach($besis as $besi)
                                        
                                    
                                        <tr>
                                            <td><br></td>
                                            <td><br></td>
                                            <td><br></td>
                                            <td><br></td>
                                            
                                        </tr>
                                        


                                        <tr>
                                            <th>{{$no++}}</th>
                                            <td>{{ $besi->namabahan }}</td>
                                            <td>{{ $besi->jumlah }} unit</td>
                                            <td>{{ date("F", strtotime("2001-" . $besi->bulan . "-01")) }} {{ date('Y', strtotime($besi->created_at)) }}</td>
                                            <!-- <td>{{ $besi->peramalan }}</td> -->
                                            <td>
                                            <form method="POST" action="hapusbesi{{$besi->id_besi}}" accept-charset="UTF-8">
                                            <input name="_method" type="hidden" value="DELETE">
                                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                             <input onclick="return confirm('Anda yakin akan menghapus data ini ?');" type="submit" class="waves-effect waves-light btn" tabindex="0" value="Hapus" style="width: 80px;"
                                            /> 
                                            </form>
                                            </td>
                                            
                                        </tr>
                                         
                               @endforeach
                               
                                    </tbody>
                                    
                                </table>
                               
                            </div>

                            
                        </div>
                    </div>



                    <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                             {{ date('d M Y') }}
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">


                                
                                <table style="border: 0;text-align: center;">

                                    <thead style="border: 0;">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Bahan</th>
                                            <th>Stok</th>
                                            <th>Bulan</th>
                                           <!--  <th>peramalan</th> -->
                                            <th></th>
                                            
                                        </tr>

                                    </thead>

                                    

                                    <tbody  >

                                <?php $no=1; ?>
                                @foreach($almuniums as $almunium)
                                        
                                    
                                        <tr>
                                            <td><br></td>
                                            <td><br></td>
                                            <td><br></td>
                                            <td><br></td>
                                           
                                        </tr>
                                        


                                        <tr>
                                            <th>{{$no++}}</th>
                                            <td>{{ $almunium->namabahan }}</td>
                                            <td>{{ $almunium->jumlah }} unit</td>
                                            <td>{{ date("F", strtotime("2001-" . $almunium->bulan . "-01")) }} {{ date('Y', strtotime($almunium->created_at)) }}</td>
                                            <!-- <td>{{ $almunium->peramalan }}</td> -->
                                            <td>
                                            <form method="POST" action="hapusalmunium{{$almunium->id_almunium}}" accept-charset="UTF-8">
                                            <input name="_method" type="hidden" value="DELETE">
                                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                             <input onclick="return confirm('Anda yakin akan menghapus data ini ?');" type="submit" class="waves-effect waves-light btn" tabindex="0" value="Hapus" style="width: 80px;"
                                            /> 
                                            </form>
                                            </td>

                                        </tr>
                                         
                               @endforeach
                               
                                    </tbody>
                                    
                                </table>
                               
                            </div>

                            
                        </div>
                    </div>


                    <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                             {{ date('d M Y') }}
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">


                                
                                <table style="border: 0;text-align: center;">

                                    <thead style="border: 0;">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Bahan</th>
                                            <th>Stok</th>
                                            <th>Bulan</th>
                                            <!-- <th>peramalan</th> -->
                                            <th></th>
                                            
                                        </tr>

                                    </thead>

                                    

                                    <tbody  >

                                <?php $no=1; ?>
                                @foreach($sengs as $seng)
                                        
                                    
                                        <tr>
                                            <td><br></td>
                                            <td><br></td>
                                            <td><br></td>
                                            <td><br></td>
                                            
                                        </tr>
                                        


                                        <tr>
                                            <th>{{$no++}}</th>
                                            <td>{{ $seng->namabahan }}</td>
                                            <td>{{ $seng->jumlah }} unit</td>
                                            <td>{{ date("F", strtotime("2001-" . $seng->bulan . "-01")) }} {{ date('Y', strtotime($seng->created_at)) }}</td>
                                           <!--  <td>{{ $seng->peramalan }}</td> -->
                                           <td>
                                            <form method="POST" action="hapusseng{{$seng->id_seng}}" accept-charset="UTF-8">
                                            <input name="_method" type="hidden" value="DELETE">
                                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                             <input onclick="return confirm('Anda yakin akan menghapus data ini ?');" type="submit" class="waves-effect waves-light btn" tabindex="0" value="Hapus" style="width: 80px;"
                                            /> 
                                            </form>
                                            </td>
                                           
                                        </tr>
                                         
                               @endforeach
                               
                                    </tbody>
                                    
                                </table>
                               
                            </div>

                            
                        </div>
                    </div>


                    <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                             {{ date('d M Y') }}
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">


                                
                                <table style="border: 0;text-align: center;">

                                    <thead style="border: 0;">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Bahan</th>
                                            <th>Stok</th>
                                            <th>Bulan</th>
                                           <!--  <th>peramalan</th> -->
                                            <th></th>
                                            
                                        </tr>

                                    </thead>

                                    

                                    <tbody  >

                                <?php $no=1; ?>
                                @foreach($plastiks as $plastik)
                                        
                                    
                                        <tr>
                                            <td><br></td>
                                            <td><br></td>
                                            <td><br></td>
                                            <td><br></td>
                                            
                                        </tr>
                                        


                                        <tr>
                                            <th>{{$no++}}</th>
                                            <td>{{ $plastik->namabahan }}</td>
                                            <td>{{ $plastik->jumlah }} unit</td>
                                            <td>{{ date("F", strtotime("2001-" . $plastik->bulan . "-01")) }} {{ date('Y', strtotime($plastik->created_at)) }}</td>
                                            <!-- <td>{{ $plastik->peramalan }}</td> -->
                                            <td>
                                            <form method="POST" action="hapusplastik{{$plastik->id_plastik}}" accept-charset="UTF-8">
                                            <input name="_method" type="hidden" value="DELETE">
                                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                             <input onclick="return confirm('Anda yakin akan menghapus data ini ?');" type="submit" class="waves-effect waves-light btn" tabindex="0" value="Hapus" style="width: 80px;"
                                            /> 
                                            </form>
                                            </td>
                                            
                                        </tr>
                                         
                               @endforeach
                               
                                    </tbody>
                                    
                                </table>
                               
                            </div>

                            
                        </div>
                    </div>

                    <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                             {{ date('d M Y') }}
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">


                                
                                <table style="border: 0;text-align: center;">

                                    <thead style="border: 0;">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Bahan</th>
                                            <th>Stok</th>
                                            <th>Bulan</th>
                                          <!--   <th>peramalan</th> -->
                                            <th></th>
                                            
                                        </tr>

                                    </thead>

                                    

                                    <tbody  >

                                <?php $no=1; ?>
                                @foreach($kacamikas as $kacamika)
                                        
                                    
                                        <tr>
                                            <td><br></td>
                                            <td><br></td>
                                            <td><br></td>
                                            <td><br></td>
                                            
                                        </tr>
                                        


                                        <tr>
                                            <th>{{$no++}}</th>
                                            <td>{{ $kacamika->namabahan }}</td>
                                            <td>{{ $kacamika->jumlah }} unit</td>
                                            <td>{{ date("F", strtotime("2001-" . $kacamika->bulan . "-01")) }} {{ date('Y', strtotime($kacamika->created_at)) }}</td>
                                            <!-- <td>{{ $kacamika->peramalan }}</td> -->
                                            <td>
                                            <form method="POST" action="hapuskacamika{{$kacamika->id_kacamika}}" accept-charset="UTF-8">
                                            <input name="_method" type="hidden" value="DELETE">
                                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                             <input onclick="return confirm('Anda yakin akan menghapus data ini ?');" type="submit" class="waves-effect waves-light btn" tabindex="0" value="Hapus" style="width: 80px;"
                                            /> 
                                            </form>
                                            </td>
                                        </tr>
                                         
                               @endforeach
                               
                                    </tbody>
                                    
                                </table>
                               
                            </div>

                            
                        </div>
                    </div>
                  
                    <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                             {{ date('d M Y') }}
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">


                                
                                <table style="border: 0;text-align: center;">

                                    <thead style="border: 0;">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Bahan</th>
                                            <th>Stok</th>
                                            <th>Bulan</th>
                                            <!-- <th>peramalan</th> -->
                                            <th></th>
                                           
                                        </tr>

                                    </thead>

                                    

                                    <tbody  >

                                <?php $no=1; ?>
                                @foreach($tembagas as $tembaga)
                                        
                                    
                                        <tr>
                                            <td><br></td>
                                            <td><br></td>
                                            <td><br></td>
                                            <td><br></td>
                                            
                                        </tr>
                                        


                                        <tr>
                                            <th>{{$no++}}</th>
                                            <td>{{ $tembaga->namabahan }}</td>
                                            <td>{{ $tembaga->jumlah }} unit</td>
                                            <td>{{ date("F", strtotime("2001-" . $tembaga->bulan . "-01")) }} {{ date('Y', strtotime($tembaga->created_at)) }}</td>
                                            <!-- <td>{{ $tembaga->peramalan }}</td> -->
                                            <td>
                                            <form method="POST" action="hapustembaga{{$tembaga->id_tembaga}}" accept-charset="UTF-8">
                                            <input name="_method" type="hidden" value="DELETE">
                                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                             <input onclick="return confirm('Anda yakin akan menghapus data ini ?');" type="submit" class="waves-effect waves-light btn" tabindex="0" value="Hapus" style="width: 80px;"
                                            /> 
                                            </form>
                                            </td>
                                            
                                        </tr>
                                         
                               @endforeach
                               
                                    </tbody>
                                    
                                </table>
                               
                            </div>

                            
                        </div>
                    </div>
                  
                </div>
                  
                </div>
                  
                </div>
                  
                </div>
                  
                </div>






                  
                </div>

            </div>
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
        
<script src="assets/js/jquery-1.10.2.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.metisMenu.js"></script>
<script src="assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="assets/js/morris/morris.js"></script>
<script src="assets/js/easypiechart.js"></script>
<script src="assets/js/easypiechart-data.js"></script>
<script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
<script src="assets/js/dataTables/jquery.dataTables.js"></script>
<script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
<script src="{{ URL::asset('assets/js/jquery-1.12.4.min.js') }}" type="text/javascript"></script> 
<script src="{{ URL::asset('assets/js/wow.min.js') }}" type="text/javascript"></script> 
<script src="{{ URL::asset('assets/js/materialize.min.js') }}" type="text/javascript"></script> 
<script>
    


      new WOW().init();
         $('.alert2').delay(3000).fadeOut(500)

</script>

<!-- Custom Js -->
<script src="assets/js/custom-scripts.js"></script> 
 

</body>

</html>