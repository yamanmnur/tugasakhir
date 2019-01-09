 

  @extends('layouts.main')
  @section('judulhalaman')
    List Ekstrakulikuler
@endsection
@section('header')
<div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
      <div class="row">
        <div class="col-lg-7 col-md-10">
           
        <h1 class="display-2 text-white">Selamat Datang <br> Ketua <button style=" font-size: 1.875rem;" type="button" class="btn btn-success ">{{ $nama_ekskul }}</button> <br> {{ Auth::user()->nama }}</h1>
          <p class="text-white mt-0 mb-5">disini kamu dapat mengelola data Ekstrakulikuler, data yang dapat dikelola ada pada fitur di halaman ini, silahkan optimalkan data ekskul mu untuk mempromosikan Ekskul mu :)</p>
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
                   
                </div>
              </div>
            </div>
            <div class="text-center">
              <h3>
                {{ Auth::user()->nama }}
              </h3>
               
              <div class="h4 mt-4">
                <i class="ni business_briefcase-24 mr-2"></i>Kelas {{ Auth::user()->kelas }}
              </div>
              <div>
                <i class="ni education_hat mr-2"></i>SMKN 2 Bandung
              </div>
              <hr class="my-4">
              <div class="h4 mt-4">
                <i class="ni business_briefcase-24 mr-2"></i>ketua {{ $nama_ekskul }}
              </div>
              <div>
                <i class="ni education_hat mr-2"></i>SMKN 2 Bandung
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-8 order-xl-1">
            <div class="col-xl-12 col-lg-12" style="margin-bottom:20px">
                    <div class="card card-stats mb-4 mb-xl-0">
                      <div class="card-body">
                        <div class="row">
                          <div class="col">
                            <h2 class="card-title font-weight-bold text-uppercase   mb-0">Kelola Anggota Ekskul</h2>
    
                            <h4 class="card-title   text-muted mb-0">
                              Silahkan Gunakan Fitur ini untuk mengelola data Anggota Ekskul mu,
                              <br>
                              <i class="ni ni-check-bold text-success"></i>Kamu bisa  menghapus anggota dengan pilihan alasan ('sudah kelas tiga','keluar/mengundurkan diri','dikeluarkan' dan 'pindah sekolah')
                              <br>
                              <br>
                              <i class="ni ni-check-bold text-success"></i>Kamu bisa memberi nilai kepada anggota mu untuk dimasukan kedalam rapor, berikan nilai secara jujur yah :) karena jika tidak diberi alasan ataupun tidak sesuai dengan absen kehadiran makan ekskul mu akan terkena sanksi tegas!
                              <br>
                              <br>
                              <i class="ni ni-check-bold text-success"></i>Kamu bisa mengganti ketua ekskul mu, jika kamu ada halangan atau kamu sudah pensiun :)
                            </h4>
                                {{-- <span class="h2 font-weight-bold mb-0"> sdfsdf </span> --}}
                          </div>
                          <div class="col-auto">
                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                              <i class="ni ni-bullet-list-67"></i>
                            </div>
                          </div>
                        </div>
                        <p class="mt-3 mb-0 text-muted text-sm text-right">
            
                            <span class="text-nowrap"> <a href=" {{ route('kelola.anggota.ekskul') }} " class="btn btn-info shadow" >Gunakan Fitur</a> </span>
                        </p>               
                       </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12" style="margin-bottom:20px">
                        <div class="card card-stats mb-4 mb-xl-0">
                          <div class="card-body">
                            <div class="row">
                              <div class="col">
                                <h2 class="card-title font-weight-bold text-uppercase   mb-0">Kelola Pesan</h2>
        
                                <h4 class="card-title   text-muted mb-0">
                                    Silahkan Gunakan Fitur ini untuk mengelola data Pesan Maupun Artikel,
                                    <br>
                                    <i class="ni ni-check-bold text-success"></i>Kamu bisa membagikan artikel tentang kegiatan kegiatan ekskul mu kepada banyak orang untuk memperkenalkannya kebanyak siswa 
                                    <br>
                                    <br>
                                    <i class="ni ni-check-bold text-success"></i>kamu bisa memberikan pesan khusus atau info penting yang hanya dapat di baca oleh anggota ekskul mu saja
                                    <br>
                                    <br>
                                    <i class="ni ni-check-bold text-success"></i>Kamu bisa memberikan pesan dimana hanya bisa dibaca oleh anggota yang diizinkan membacanya
                                    <br><br>
                                    <i class="ni ni-check-bold text-success"></i>Kamu dapat berkomunikasi layaknya chat pada fitur sosmed yang hanya ditujukan untuk kepentingan antara admin dan ketua ekskul saja
                                    <br><br>
                                    <i class="ni ni-check-bold text-success"></i>Peringatan Ekskul mu bisa terkena sanksi, jika ditemukan kata kata yang mengandung SARA di semua pesan maupun artikel yang kamu buat, jadi gunakanlah bahasa yang baik yah :) dan ingatkan juga hal ini kepada semua anggota mu!

                                  </h4>
                                {{-- <span class="h2 font-weight-bold mb-0"> sdfsdf </span> --}}
                              </div>
                              <div class="col-auto">
                                <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                  <i class="ni ni-email-83"></i>
                                </div>
                              </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm text-right">
                
                                <span class="text-nowrap"> <a href="{{ route('kelola.pesan') }}" class="btn btn-info shadow" >detail</a> </span>
                            </p>               
                           </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12" style="margin-bottom:20px">
                            <div class="card card-stats mb-4 mb-xl-0">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col">
                                    <h2 class="card-title font-weight-bold text-uppercase   mb-0">Kelola Prestasi Ekstrakullikuler Mu!</h2>
                                    <h4 class="card-title   text-muted mb-0">
                                        Silahkan Gunakan Fitur ini untuk mengelola data Prestasi,
                                        <br>
                                        <i class="ni ni-check-bold text-success"></i>Kamu bisa menambah prestasi, mengeditnya maupun menghapus prestasinya karena alasan tertentu 
                                        <br>
                                        <br>
                                        <i class="ni ni-check-bold text-success"></i>pada tingkat apa prestasi itu dan juara berapa prestasi itu tambahkan data itu ke website ini
                                        <br>
                                        <br>
                                        <i class="ni ni-check-bold text-success"></i>oleh siapa prestasi itu diraih, apakah hal itu didapatkan mandiri satu orang atau secara berkelompok
                                        <br><br>
                                        <i class="ni ni-check-bold text-success"></i>Pastinya kamu dapat memberikan pada keterangan waktu tanggal dan tahun kapan prestasi itu diraih
                                        <br><br>
                                        <i class="ni ni-check-bold text-success"></i>dan jangan lupa berikan detail seperti apa lomba tersebut di laksanakan dan bagaimana kamu bisa mendapatkan prestasi tersebut, bagikan pengalamannya juga yah :)
                                      </h4>            
                                        {{-- <span class="h2 font-weight-bold mb-0"> sdfsdf </span> --}}
                                  </div>
                                  <div class="col-auto">
                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                      <i class="ni ni-folder-17"></i>
                                    </div>
                                  </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm text-right">
                    
                                    <span class="text-nowrap"> <a href="{{ route('kelola.prestasi') }}" class="btn btn-info shadow" >detail</a> </span>
                                </p>               
                               </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12" style="margin-bottom:20px">
                                <div class="card card-stats mb-4 mb-xl-0">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col">
                                        <h2 class="card-title font-weight-bold text-uppercase   mb-0">Kelola Album Foto Ekstrakulikuler</h2>
                
                                        <h4 class="card-title   text-muted mb-0">
                                            Silahkan Gunakan Fitur ini untuk mengelola data Album foto,
                                            <br>
                                            <i class="ni ni-check-bold text-success"></i>Kamu bisa menambahkan foto foto penting seperti, foto anggota per angkatan 
                                            <br>
                                            <br>
                                            <i class="ni ni-check-bold text-success"></i>Album yang berisi kumpulan kumpulan kegiatan pun dapat di tambahkan dan disarankan oleh admin sendiri
                                            <br>
                                            <br>
                                            <i class="ni ni-check-bold text-success"></i>berikan detail foto yang ada kapan, dimana, dan jelaskan tentang foto itu kalu bisa
                                            <br><br>
                                            <i class="ni ni-check-bold text-success"></i>kamu bisa mencari foto berdasarkan label maka dari itu tambahkanlah label pada fotomu!
                                            <br><br>
                                            <i class="ni ni-check-bold text-success"></i>kamu bisa menghapus dan mengedit informasi yang ada pada foto itu
                                          </h4>                                               {{-- <span class="h2 font-weight-bold mb-0"> sdfsdf </span> --}}
                                      </div>
                                      <div class="col-auto">
                                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                          <i class="ni ni-album-2"></i>
                                        </div>
                                      </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-muted text-sm text-right">
                        
                                        <span class="text-nowrap"> <a href="{{ route('informasi.ekskul') }}" class="btn btn-info shadow" >detail</a> </span>
                                    </p>               
                                   </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12" style="margin-bottom:20px">
                                <div class="card card-stats mb-4 mb-xl-0">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col">
                                        <h2 class="card-title font-weight-bold text-uppercase   mb-0">Kelola Informasi Ekskul</h2>
                
                                        <h4 class="card-title   text-muted mb-0">
                                            Silahkan Gunakan Fitur ini untuk mengelola informasi tentang ekskul mu,
                                            <br>
                                            <i class="ni ni-check-bold text-success"></i>Kamu bisa menganjurkan pelatih dan pembimbing baru untuk ekskul mu
                                            <br>
                                            <br>
                                            <i class="ni ni-check-bold text-success"></i>kamu juga bisa mengajukan tempat latihan baru dan jadwal baru untuk ekskul mu!
                                            <br>
                                            <br>
                                            <i class="ni ni-check-bold text-success"></i>isi deskripsi atau penjelasan seperti apa itu ekskul mu!
                                           
                                          </h4>                                              {{-- <span class="h2 font-weight-bold mb-0"> sdfsdf </span> --}}
                                      </div>
                                      <div class="col-auto">
                                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                          <i class="ni ni-book-bookmark"></i>
                                        </div>
                                      </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-muted text-sm text-right">
                        
                                        <span class="text-nowrap"> <a href="{{ route('informasi.ekskul') }}" class="btn btn-info shadow" >detail</a> </span>
                                    </p>               
                                   </div>
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

