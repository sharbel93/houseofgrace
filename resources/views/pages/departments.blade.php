@extends('layouts.app')
@section('title', '| Departments')
@section('content')

    <!--=================================    BREADCRUMBS BEGIN     ===============================-->
    <section class="breadcrumb_area br_image">
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-title">Departments</h2>
                <ol class="breadcrumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li class="active"> &srarr;&nbsp;Departments</li>

                </ol>
            </div>
        </div>
    </section>
    <!--=================================    BREADCRUMBS END     ===============================-->

<section class=" departments">

    <div class="container ">

        <div class="row ">
            <h2>OUR DEPARTMENTS</h2>
            <p>
                At House Of Grace Church, <b>we believe in doing church as a team</b>.
                Here are the teams that make ministry possible at House of Grace Church, Eldoret.
            </p>
       <div class="col-md-12 col-lg-12 col-sm-12">
           <div class="accordion" id="accordionExample">
               <div class="card">
                   <div class="card-header bg-transparent" id="headingOne">
                       <h5 class="mb-0">
                           <a class=" bg-transparent collapsed"
                                   data-toggle="collapse"
                                   data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                               Praise and Worship
                           </a>
                       </h5>
                   </div>

                   <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                       <div class="card-body">
                           Praise and Worship
                          </div>
                   </div>
               </div>
               <div class="card">
                   <div class="card-header" id="headingTwo">
                       <h5 class="mb-0">
                           <a class="  bg-transparent collapsed"  data-toggle="collapse"
                              data-target="#collapseTwo"
                              aria-expanded="false" aria-controls="collapseTwo">
                              Greeters
                           </a>
                       </h5>
                   </div>
                   <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                       <div class="card-body">
                           Greeters
                         </div>
                   </div>
               </div>
               <div class="card">
                   <div class="card-header" id="headingThree">
                       <h5 class="mb-0">
                           <a class=" bg-transparent collapsed "
                                    data-toggle="collapse"
                                   data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                               GateKeepers
                           </a>
                       </h5>
                   </div>
                   <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                       <div class="card-body">
                           GateKeepers
                         </div>
                   </div>
               </div>
               <div class="card">
                   <div class="card-header" id="headingFour">
                       <h5 class="mb-0">
                           <a class=" bg-transparent collapsed "
                                    data-toggle="collapse"
                                   data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                               Hospitality
                           </a>
                       </h5>
                   </div>
                   <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                       <div class="card-body">
                           Hospitality
                       </div>
                   </div>
               </div>
               <div class="card">
                   <div class="card-header" id="headingFive">
                       <h5 class="mb-0">
                           <a class=" bg-transparent collapsed "
                              data-toggle="collapse"
                              data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              Altar Workers
                           </a>
                       </h5>
                   </div>
                   <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                       <div class="card-body">
                           Altar Workers
                         </div>
                   </div>
               </div>
               <div class="card">
                   <div class="card-header" id="headingSix">
                       <h5 class="mb-0">
                           <a class=" bg-transparent collapsed "
                              data-toggle="collapse"
                              data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                               Sound and Media
                           </a>
                       </h5>
                   </div>
                   <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                       <div class="card-body">
                           Sound and Media
                        </div>
                   </div>
               </div>
               <div class="card">
                   <div class="card-header" id="headingSeven">
                       <h5 class="mb-0">
                           <a class=" bg-transparent collapsed "
                              data-toggle="collapse"
                              data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                              Protocol and Security
                           </a>
                       </h5>
                   </div>
                   <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                       <div class="card-body">
                           Protocol and Security
                       </div>
                   </div>
               </div>
               <div class="card">
                   <div class="card-header" id="headingEight">
                       <h5 class="mb-0">
                           <a class=" bg-transparent collapsed "
                              data-toggle="collapse"
                              data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                               Ushering
                           </a>
                       </h5>
                   </div>
                   <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                        data-parent="#accordionExample">
                       <div class="card-body">
                           Ushering
                       </div>
                   </div>
               </div>
           </div>
       </div>
        </div>
    </div>
</section>
@endsection