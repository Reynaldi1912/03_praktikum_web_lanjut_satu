@extends('layouts.app')

@section('content')

<section class="about section-padding pb-0" id="about">
          <div class="container">
               <div class="row">

                    <div class="col-lg-7 mx-auto col-md-10 col-12">
                         <div class="about-info">

                              <h2 class="mb-4" data-aos="fade-up">Nama  : <strong>{{$data_about['nama']}}</strong></h2>
                              <h2 class="mb-4" data-aos="fade-up">Kelas : <strong>{{$data_about['kelas']}}</strong></h2>
                              <h2 class="mb-4" data-aos="fade-up">NIM   : <strong>{{$data_about['absen']}}</strong></h2>

                              <p class="mb-0" data-aos="fade-up"> {{$data_about['description']}}</p>
                         </div>
                         <div class="about-image" data-aos="fade-up" data-aos-delay="200">
                          <img src="images/office.png" class="img-fluid" alt="office">
                        </div>
                    </div>

               </div>
          </div>
     </section>
@endsection
