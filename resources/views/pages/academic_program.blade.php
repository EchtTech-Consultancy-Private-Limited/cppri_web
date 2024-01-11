@extends('layout.master')
@section('title')
    {{ __('CPPRI |'.' '.$title??'') }}
@endsection
@section('content')
    <section class="wrapper banner-wrapper">
        <div id="flexSlider" class="flexslider "
            style="background-image: url('{{ asset('assets-cppri/images/agnipath-banner-1200-185.png') }}');">
            <div class="inner-banner-text">
                <div class="text-banner-content">
                    <h2>
                        Academic Programme
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-wrapper inner-wrapper">
        <div class="breadcam-bg breadcam">
            <div class="container common-container four_content ">
                <ul>
                    <li><a href="home.html">Home </a></li>
                    <li><a href="javascript:void();">About us</a></li>
                    <li><a href="javascript:void();">Academic Programme</a></li>

                </ul>
            </div>
        </div>
    </div>
    <div class="container common-container">
        <!--/.nav-wrapper-->
        <section class="sidebar-main-nav">
            <div class="col-md-12 p-0">
                <div class="main-content">
                    <!--/#skipCont-->
                    <section id="fontSize" class="wrapper body-wrapper ">
                        <section id="paragraph" class="wrapper paragraph-wrapper">
                            <div class=" common-container four_content">
                                <h3 class="dir-dsk-title my-3 ">Academic Programme </h3>
                                <div class="row p-0 mb-20">

                                
                                <div class="col-md-4 mt-20 mb-20">
                                        <div class="img-box-overview">
                                            <img src="{{ asset('assets-cppri/images/academic-programme.webp') }}" alt="Academic Program" title="academic programme">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                       <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dicta placeat saepe sit, impedit nam. Deleniti asperiores suscipit exercitationem temporibus, quasi amet porro unde laboriosam recusandae modi repellat corporis optio! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo perspiciatis dolorem ipsam similique nesciunt dignissimos distinctio esse vero laboriosam perferendis dolorum, error nostrum praesentium voluptatum quaerat suscipit deleniti, provident odit.
                                        Dignissimos laboriosam dicta quisquam. Aliquid culpa deserunt officia doloremque sed alias, fuga voluptas inventore autem perspiciatis, enim animi eligendi commodi totam! Minus aspernatur illum, rerum consectetur deserunt eum nobis tempore.
                                        Quo asperiores placeat nesciunt reiciendis sapiente cumque aliquam corrupti deleniti? Numquam a saepe pariatur consectetur nesciunt id facere veritatis officiis debitis, commodi itaque sapiente. Perferendis blanditiis nam recusandae amet nisi.
                                        Ducimus esse doloremque quo quasi. Totam nisi suscipit facere commodi molestiae et minus officiis fuga quasi laboriosam voluptates possimus ut impedit illo recusandae dolorem, reprehenderit quam adipisci explicabo aperiam quos!
                                        Magnam, natus veritatis ea nisi consectetur amet ullam? Similique distinctio placeat sunt at eum sed quod officia cumque repellat fuga quis ullam, ut suscipit quia delectus explicabo dolores recusandae consequuntur.
                                        Eum eos porro voluptatibus aliquid id. Doloremque commodi temporibus modi explicabo sit maxime optio atque, itaque deleniti. Voluptate consequuntur nisi recusandae rerum quo quidem, voluptates perspiciatis iusto, quibusdam facilis nemo!
                                        Quaerat non rem, a possimus quae ipsam veritatis unde. Exercitationem enim in repellendus. Aut, iusto dolor repudiandae eligendi praesentium 
                                       </p>
                                    </div>


                                   

                                </div>
                            </div>
                        </section>
                      
                    </section>
                </div>
            </div>    
        </section>

    </div>
@endsection
