 

  @extends('layouts.main')
  @section('judulhalaman')
    List Ekstrakulikuler
@endsection
@section('header')
<div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" {{--style="min-height: 600px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;"--}} >
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
      <div class="row">
        <div class="col-lg-7 col-md-10">
          <h1 class="display-2 text-white">{{ $detailEkskul[0]->nama_ekskul }}</h1>
          <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
          @guest
            
          @else
            @if ($detailUserEkskul == 'ada' )
            <a href="#!" class="btn btn-warning">Anda telah terdaftar sebagai Anggota</a>              
            @else
              <a href="#!" class="btn btn-info">daftarkan diri sebagai anggota</a>  
            @endif
              

          @endguest
          
        </div>
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
    <div class="row">
      <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
        <div class="card card-profile shadow">
          <div class="row justify-content-center">
            <div class="col-lg-3 order-lg-2">
              <div class="card-profile-image">
                <a href="#">
                  <img src="../assets/img/theme/team-4-800x800.jpg" class="rounded-circle">
                  {{-- <img src="{{ asset($detailEkskul->logo) }}" class="rounded-circle"> --}}
                </a>
              </div>
            </div>
          </div>
          <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
            <div class="d-flex justify-content-between">
               
            </div>
          </div>
          <div class="card-body pt-0 pt-md-4">
            <div class="row">
              <div class="col">
                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                  <div>
                    <span class="heading">22</span>
                    <span class="description">Anggota</span>
                  </div>
                  <div>
                    <span class="heading">10</span>
                    <span class="description">Prestasi</span>
                  </div>
                   
                </div>
              </div>
            </div>
            <div class="text-center">
              <h3>
                Jadwal Latihan <span class="font-weight-light">Senin & Sabtu</span>
              </h3>
              <div class="h5 font-weight-300">
                <i class="ni location_pin mr-2"></i>Senin : Jam 16:30, Sabtu Jam : 09:30
              </div>
              <div class="h5 mt-4">
                <i class="ni business_briefcase-24 mr-2"></i>Tempat Latihan
              </div>
              <div>
                <i class="ni education_hat mr-2"></i>SMKN 2 Bandung, Aula dan Lapang Basket
              </div>
              <hr class="my-4">
              <p>Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music.</p>
            <a href="#">Apa Itu Ekskul : {{ $detailEkskul[0]->nama_ekskul }}</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-8 order-xl-1">
        <div class="card bg-secondary shadow">
          <div class="card-header bg-white border-0">
            <div class="row align-items-center">
              <div class="col-8">
                <h3 class="mb-0">My account</h3>
              </div>
              <div class="col-4 text-right">
                <a href="#!" class="btn btn-sm btn-primary">Settings</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form>
              <h6 class="heading-small text-muted mb-4">User information</h6>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group focused">
                      <label class="form-control-label" for="input-username">Nama Ketua</label>
                      <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="lucky.jesse">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-email">Email address</label>
                      <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="jesse@example.com">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group focused">
                      <label class="form-control-label" for="input-first-name">Pelatih</label>
                      <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="{{ $detailEkskul[0]->nama_pelatih }}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group focused">
                      <label class="form-control-label" for="input-last-name">Pembimbing</label>
                      <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="{{ $detailEkskul[0]->nama_pembimbing }}">
                    </div>
                  </div>
                </div>
              </div>
              <hr class="my-4">
              <!-- Address -->
              <h6 class="heading-small text-muted mb-4">data lain-nya</h6>
              <div class="pl-lg-4">
                  <div class="card bg-default shadow">
                      <div class="card-header bg-transparent border-0">
                        <h3 class="text-white mb-0">Anggota dari Ekstrakulikuler  </h3>
                      </div>
                      <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">foto</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Kelas</th>
                              <th scope="col">Jenis Kelamin</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($detailEkskul as $item)
                                
                            
                            <tr>
                              <th scope="row">
                                <div class="media align-items-center">
                                  <a href="#" class="avatar rounded-circle mr-3">
                                    <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                                  </a>
                                  
                                </div>
                              </th>
                              <td>
                                  <div class="media-body">
                                      <span class="mb-0 text-sm">{{ $item->nama }}</span>
                                  </div>                              
                              </td>
                              <td>
                                  <div class="media-body">
                                      <span class="mb-0 text-sm">{{ $item->kelas }}</span>
                                  </div>                              
                              </td>
                              <td>
                                  <div class="media-body">
                                      <span class="mb-0 text-sm">{{ $item->jenis_kelamin }}</span>
                                  </div>                              
                              </td>
                               
                              <td class="text-right">
                                <div class="dropdown">
                                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
              </div>
              <hr class="my-4">
              <!-- Description -->
              <h6 class="heading-small text-muted mb-4">About me</h6>
              <div class="pl-lg-4">
                <div class="form-group focused">
                  <label>About Me</label>
                  <textarea rows="4" class="form-control form-control-alternative" placeholder="A few words about you ...">A beautiful Dashboard for Bootstrap 4. It is Free and Open Source.</textarea>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  
         
         
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

