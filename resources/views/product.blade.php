@extends('layouts.app')

@section('content')
  
    <!-- PROJECT -->
    <section class="project section-padding" id="project">
          <div class="container-fluid">
               <div class="row">

                    <div class="col-lg-12 col-12">

                        <h2 class="mb-5 text-center" data-aos="fade-up">
                            Product Ini
                            <strong>Kelompok 5</strong>
                        </h2>

                         <div class="owl-carousel owl-theme" id="project-slide">
                             <!--  <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                                   <img src="images/project/project-image01.jpg" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Marble</small>
                                        <h3>
                                             <a href="https://www.educastudio.com/category/marbel-edu-games">
                                                  <span>Marble Edu games</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="images/project/project-image02.jpg" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Website</small>

                                        <h3>
                                             <a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">
                                                  <span>Marble and Games Kids friend</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="images/project/project-image03.jpg" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Branding</small>

                                        <h3>
                                             <a href="https://www.educastudio.com/category/riri-story-books">
                                                  <span>Riry Story Books</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div> -->

                         @foreach($data_post as $item)
                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src={{$item['picture']}} class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>{{$item['nama']}}</small>

                                        <h3>
                                             <a href={{$item['link']}}>
                                                  <span>{{$item['nama']}}</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>
                         @endforeach
                         </div>
                    </div>

               </div>
          </div>
     </section>


@endsection