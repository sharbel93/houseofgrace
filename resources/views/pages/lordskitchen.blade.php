@extends('layouts.app')
@section('title', '| The Lords Kitchen')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->



        <div class="row breadcrumb-wrap " >

            <div class="breadcrumb-text">
                <div class="row">
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6 link">
                        <p>The Lord's Kitchen</p>
                    </div>
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6">
                        <div class="breadcrumbstop">
                            <ul id="breadcrumbs-two">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="" class="current"><small>The Lord's Kitchen</small></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    <!--=================================    BREADCRUMBS END     ===============================-->

        <div class="container">
            <div class="row lord">
                <h2>The Lord's Kitchen-Africa <small><em>(More than a day’s meal)</em></small></h2>
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <p>
                     <i>
                         We <b>DISCIPLE</b>, <br>
                         We <b>EMPOWER</b>, <br>
                         We <b>INVEST</b>.
                     </i>
                    </p>
                    <p>   This is an outreach program targeting the less privileged in
                        the community around the Church and beyond. Forty two percent of families in
                        Kenya live below the poverty line and hence cannot afford healthy meals on a daily basis.
                        As a church we noticed the number of people not attending church services
                        due to poverty related challenges was increasing.
                    </p>
                     <p>   We embarked on a mission of providing one descent meal every
                        Sunday after service. This is purely towards the less privileged
                        in the society. We use this noble avenue to recruit them into a solid,
                        well structured discipleship program, financial empowerment program and an
                        investment plan that would improve and transform their lives. We are living to
                        the adage; MORE THAN A DAY’S MEAL.
                    </p>
                </div>
            </div>
            <div class="row lord">
                <div class="col-md-8 offset-md-2">
                    <p class="text-center">
                        <em><b> "Life finds meaning when we connect with the needs of others."</b></em><br>
                        Dickson Waime Senior Pastor<br>
                        House Of Grace Eldoret.
                    </p>
                </div>
            </div>
        </div>


@endsection