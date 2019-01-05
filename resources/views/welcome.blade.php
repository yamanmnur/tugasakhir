@extends('layouts.main')
@section('judulhalaman')
  halaman utama
@endsection
@section('header')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
  <div class="container-fluid">
    <div class="header-body">
      <!-- Card stats -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <center>
            <div class="card bg-gradient-green shadow" style="width:60%">
              <div class="card-header bg-transparent">
                <h1 style="color:white">Ajukan Proposal Eksktrakuller</h1>
              </div>
              <div class="card-body">
                <!-- Chart -->
                <button type="button" class="btn-icon-clipboard btn btn-primary" data-clipboard-text="send" title="" data-original-title="Copy to clipboard" style="
                background: #324cdd;">
                  <div>
                    <i class="ni ni-send"></i>
                    <span style="color:white"> Ajukan Proposal, jika kamu ingin membuat ekskul baru di sekolah </span>
                  </div>
                </button>
              </div>
            </div>
            </center>
          </div>
          <div class="carousel-item">
            <center>
                <div class="card bg-gradient-red shadow" style="width:60%">
                    <div class="card-header bg-transparent">
                      <h1 style="color:white">Berikan info kepada semua!</h1>
                    </div>
                    <div class="card-body">
                      <!-- Chart -->
                      <button type="button" class="btn-icon-clipboard btn btn-primary" data-clipboard-text="send" title="" data-original-title="Copy to clipboard" style="
                      background: #324cdd;">
                        <div>
                          <i class="ni ni-send"></i>
                          <span style="color:white"> Ajukan Proposal, jika kamu ingin membuat ekskul baru di sekolah </span>
                        </div>
                      </button>
                    </div>
                  </div>
            </center>
          </div>
          
          <div class="carousel-item">
          <center>
              <div class="card bg-gradient-yellow shadow" style="width:60%">
                  <div class="card-header bg-transparent">
                    <h1 style="color:white">Apa saja fasilitasnya?</h1>
                  </div>
                  <div class="card-body">
                    <!-- Chart -->
                    <button type="button" class="btn-icon-clipboard btn btn-primary" data-clipboard-text="send" title="" data-original-title="Copy to clipboard" style="
                    background: #324cdd;">
                      <div>
                        <i class="ni ni-send"></i>
                        <span style="color:white"> Ajukan Proposal, jika kamu ingin membuat ekskul baru di sekolah </span>
                      </div>
                    </button>
                  </div>
                </div>
          </center>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
         </a>
      </div>
      {{-- <div class="row">
        <div class="col-xl-3 col-lg-6">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Traffic</h5>
                  <span class="h2 font-weight-bold mb-0">350,897</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                    <i class="fas fa-chart-bar"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-muted text-sm">
                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                <span class="text-nowrap">Since last month</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                  <span class="h2 font-weight-bold mb-0">2,356</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                    <i class="fas fa-chart-pie"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-muted text-sm">
                <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                <span class="text-nowrap">Since last week</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                  <span class="h2 font-weight-bold mb-0">924</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                    <i class="fas fa-users"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-muted text-sm">
                <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                <span class="text-nowrap">Since yesterday</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                  <span class="h2 font-weight-bold mb-0">49,65%</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                    <i class="fas fa-percent"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-muted text-sm">
                <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                <span class="text-nowrap">Since last month</span>
              </p>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
</div>
@endsection
@section('content')

<button type="button" style="display:none" id="boraks" class="btn btn-block btn-warning mb-3" data-toggle="modal" data-target="#modal-notification">Notification</button>

 
<div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
<div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
  <div class="modal-content bg-gradient-danger">
    
      <div class="modal-header">
          <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
      </div>
      
      <div class="modal-body">
        
          <div class="py-3 text-center">
              <i class="ni ni-bell-55 ni-3x"></i>
              <h4 class="heading mt-4">Hai, Kamu belum Login!</h4>
              <p>Silahkan Login dulu, agar dapat memakai semua fitur termasuk daftar menjadi anggota ekskul tertentu :).</p>
          </div>
          
      </div>
      
      <div class="modal-footer">
          <button type="button" id="login-modal" class="btn btn-white">Ok,Login dulu</button>
          <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Nanti saja, saya mau lihat-lihat</button> 
      </div>
      
  </div>
</div>
</div>
      
<div class="container-fluid mt--7">
         
         
    <!-- Footer -->
    <footer class="footer">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            © 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
               

  </div>
@endsection

