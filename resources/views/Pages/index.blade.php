@extends('Layouts/layout')
@section('title','index')

@section('content')
<!-- covers -->
<style>
    
</style>
  <section class="w3l-covers-9-main ">
    <div style="background-color:whitesmoke;" class="covers-9">
      <div class="csslider infinity" id="slider1">
        <input type="radio" name="slides" checked="checked" id="slides_1" />
        <input type="radio" name="slides" id="slides_2" />
        <input type="radio" name="slides" id="slides_3" />
        <input type="radio" name="slides" id="slides_4" />
        <ul class="banner_slide_bg">
          <li>
            <div class="wrapper">
              <div class="cover-top-center-9">
                <div class="w3ls_cover_txt-9 logo">
                  <h6 class="tag-cover-9 ">We provide quality service</h6>
                  <h3 class="title-cover-9">Home Maintenance and Services for you</h3>
                  <p class="para-cover-9">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia sed deserunt mollit anim id est laborum mollit anim id est nulla.</p>
                  <a href="about" class="actionbg button-cover-9">Read More</a>
                  <a href="contact" class="actionbg-border button-cover-9">Get in touch</a>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>


<section class="w3l-feature-9">
    <div class="main-w3">
        <div class="wrapper">
            <div class="d-flex main-cont-wthree-fea">

                <div class="grids-feature logo">
                    <span class=" logo zoom-on-hover fa fa-bath"></span>
                    <h4><a href="#feature" class="title-head">Best Quality</a></h4>
                    <p class="logo zoom-on-hover">Fusce rutrum quam a ultrices rhoncus. Nulla eu ipsum tempus est suscipit et vitae nulla.
                    </p>
                </div>
                <div class="grids-feature logo">
                    <span class="logo zoom-on-hover fa fa-cogs"></span>
                    <h4><a href="#feature" class="title-head">Expert Advice</a></h4>
                    <p class="logo zoom-on-hover">Fusce rutrum quam a ultrices rhoncus. Nulla eu ipsum tempus est suscipit et vitae nulla.
                    </p>
                </div>
                <div class="grids-feature logo">
                    <span class="logo zoom-on-hover fa fa-users"></span>
                    <h4><a href="#feature" class="title-head">Labour Expertise</a></h4>
                    <p class="logo zoom-on-hover">Fusce rutrum quam a ultrices rhoncus. Nulla eu ipsum tempus est suscipit et vitae nulla.
                    </p>
                </div>
                <div class="grids-feature logo">
                    <span class=" logo zoom-on-hover fa fa-clock-o"></span>
                    <h4><a href="#feature" class="title-head">On Time Service</a></h4>
                    <p class="logo zoom-on-hover">Fusce rutrum quam a ultrices rhoncus. Nulla eu ipsum tempus est suscipit et vitae nulla.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="w3l-features-7" >
    <div class="features_sur">
        <div class="wrapper">
            <!-- <h5 class="heading">What we serve</h5> -->
            <h5 class="heading" style="color: rgb(34, 114, 189);font-family: cursive;">Services</h5>

            <h3 class="heading">What we offer</h3>
            <div class="features-top_sur d-grid">

                <div href="/" class="features-top-left_sur w3l-form-16 logo zoom-on-hover w3l-form-16 logo zoom-on-hover" style="background-image: url('assets/images/homemaintenance.jpg'); background-size: cover; background-position: center; padding: 20px; color: #fff;">
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>
                    <div style="position: relative; z-index: 1;">
                        <span class="fa fa-plug" style="background-color: white;"></span>
                        <h4><a href="Electrical-service" style="color:white;">Electrical work</a></h4>
                        <p style="color:white;">Eutr ipsum tempus est suscipit et vitae nulla sed. Once aute irure dolor init et repreh.</p>
                    </div>
                </div>

                <div href="/" class="features-top-left_sur w3l-form-16 logo zoom-on-hover" style="background-image: url('assets/images/housekeeping.jpg'); background-size: cover; background-position: center; padding: 20px; color: #fff; position: relative;">
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>
                    <div style="position: relative; z-index: 1;">
                        <span class="fa fa-paint-brush" style="background-color: white;"></span>
                        <h4><a href="Painting-service" style="color:white;">Painting work</a></h4>
                        <p style="color:white;">Eutr ipsum tempus est suscipit et vitae nulla sed. Once aute irure dolor init et repreh.</p>
                    </div>
                </div>



                <div href="/" class="features-top-left_sur w3l-form-16 logo zoom-on-hover" style="background-image: url('assets/images/ladder.jpg'); background-size: cover; background-position: center; padding: 20px; color: #fff;">
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>
                    <div style="position: relative; z-index: 1;">
                        <span class="fa fa-bed" style="background-color: white;"></span>
                        <h4><a href="Plumbing-service" style="color:white;">Plumbing</a></h4>
                        <p style="color:white;">Eutr ipsum tempus est suscipit et vitae nulla sed. Once aute irure dolor init et repreh.
                        </p>
                    </div>
                </div>

                <div href="/" class="features-top-left_sur w3l-form-16 logo zoom-on-hover" style="background-image: url('assets/images/painter.jpg'); background-size: cover; background-position: center; padding: 20px; color: #fff;">
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>
                    <div style="position: relative; z-index: 1;">
                        <span class="fa fa-shield" style="background-color: white;"></span>
                        <h4><a href="OfficeFitOut-service" style="color:white;">OfficeFitOut</a></h4>
                        <p style="color:white;">Eutr ipsum tempus est suscipit et vitae nulla sed. Once aute irure dolor init et repreh.
                        </p>
                    </div>
                </div>

                <div href="/" class="features-top-left_sur w3l-form-16 logo zoom-on-hover" style="background-image: url('assets/images/plumbing.jpg'); background-size: cover; background-position: center; padding: 20px; color: #fff;">
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>
                    <div style="position: relative; z-index: 1;">
                        <span class="fa fa-paragraph" style="background-color: white;"></span>
                        <h4><a href="Renovation-service" style="color:white;">Renovation</a></h4>
                        <p style="color:white;">Eutr ipsum tempus est suscipit et vitae nulla sed. Once aute irure dolor init et repreh.
                        </p>
                    </div>
                </div>

                <div href="/" class="features-top-left_sur w3l-form-16 logo zoom-on-hover" style="background-image: url('assets/images/sinkcleaning.jpg'); background-size: cover; background-position: center; padding: 20px; color: #fff;">
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>
                    <div style="position: relative; z-index: 1;">
                        <span class="fa fa-unlink" style="background-color: white;"></span>
                        <h4><a href="Carpentry-service" style="color:white;">Carpentry</a></h4>
                        <p style="color:white;">Eutr ipsum tempus est suscipit et vitae nulla sed. Once aute irure dolor init et repreh.
                        </p>
                    </div>
                </div>

                <section class="w3l-form-16">
                    <a href="services" class="read1">View More</a>
                </section>
            </div>

        </div>

    </div>

</section>


<section class="w3l-form-16 logo zoom-on-hover">
    <!-- /form-16-section -->
    <div class="form-16-mian ">
        <div class="wrapper">
            <div class="forms-16-top">
                <div class="forms-16-info">
                    <h5>Book service</h5>
                    <h3>All types of Service Maintenance at your house</h3>
                    <p>Fusce rutrum quam a ultrices rhoncus. Nulla eu ipsum tempus est suscipit et vitae nulla.
                        Once
                        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur
                        elit. Fusce rutrum quam a rhoncus. Nulla eu ipsum tempus est et.</p>


                    <a href="services" class="read1">Services we offer</a>
                </div>
                <div class="form-right-inf">
                    <div class="form-inner-cont" style="background-color: grey;">
                        <h6>Book a service now<span class="line"></span></h6>
                        <form action="#" method="post" class="signin-form">
                            <div class="d-grid book-form">
                                <div class="form-input">
                                    <input type="text" name="" placeholder="Your Name" required />
                                </div>
                                <div class="form-input">
                                    <input type="email" name="" placeholder="Email Address" required />
                                </div>
                                <div class="form-input">
                                    <input type="number" name="" placeholder="Contact Number" required />
                                </div>
                                <div class="form-input">
                                    <select>
                                        <option value="Select service">Select service</option>
                                        <option value="Carpentry">Carpentry</option>
                                        <option value="Cleaning">Cleaning</option>
                                        <option value="Electrical wiring">Electrical wiring</option>
                                        <option value="Plumbing">Plumbing</option>
                                    </select>
                                </div>
                            </div>
                            <button class="btn">Book Service</button>
                            <p>We will never share your details with 3rd parties.</p>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="w3l-customers-8">
    <div class="customers-main">
        <div class="wrapper">
            <h5 class="heading" style="color: rgb(34, 114, 189);font-family: cursive;">Customers</h5>
            <h3 class="heading">What our clients say</h3>
            <div class="customer">

                <div class="card logo zoom-on-hover" href="/">
                    <img class="card-img-top img-responsive" src="assets/images/testi1.jpg" alt="">
                    <div class="card-body">
                        <p class="card-text">Once aute irure dolor in reprehenderit in voluptate velit esse
                            cillum
                            dolore
                            eu fugiat nulla pariatur elit. Fusce rutrum quam a rhoncus.
                            Nulla eu ipsum et.</p>
                        <a href="#link" class="customer-link">
                            <h3 class="card-title">Johnson Smith</h3>
                        </a>
                    </div>
                </div>

                <div class="card logo zoom-on-hover" href="/">
                    <img class="card-img-top img-responsive" src="assets/images/testi2.jpg" alt="">
                    <div class="card-body">
                        <p class="card-text">Once aute irure dolor in reprehenderit in voluptate velit esse
                            cillum
                            dolore
                            eu fugiat nulla pariatur elit. Fusce rutrum quam a rhoncus.
                            Nulla eu ipsum et.</p>
                        <a href="#link" class="customer-link">
                            <h3 class="card-title">Elizabeth Ker</h3>
                        </a>
                    </div>
                </div>

                <div class="card logo zoom-on-hover" href="/">
                    <img class="card-img-top img-responsive" src="assets/images/testi3.jpg" alt="">
                    <div class="card-body">
                        <p class="card-text">Once aute irure dolor in reprehenderit in voluptate velit esse
                            cillum
                            dolore
                            eu fugiat nulla pariatur elit. Fusce rutrum quam a rhoncus.
                            Nulla eu ipsum et.</p>
                        <a href="#link" class="customer-link">
                            <h3 class="card-title">Laura Sten</h3>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<div class="w3l-grids-block-5">
    <!-- grids block 5 -->
    <section id="grids5-block">
        <div class="wrapper">

            <h3 class="heading" style="color: rgb(34, 114, 189);font-family: cursive;">News</h3>

            <div class="d-grid">
                <div class="grids5-info">
                    <a href="#URL"><img src="assets/images/homemaintenance.jpg" alt="" /></a>
                    <div class="blog-info">
                        <h4><a href="#URL">Replacement, Repairs.</a></h4>
                        <p>Fusce rutrum quam a ultrices rhoncus. Nulla eu ipsum tempus est et vitae nulla empus
                            est
                            suscipit et dolor amet.</p>

                    </div>
                </div>

                <div class="grids5-info">
                    <a href="#URL"><img src="assets/images/sinkcleaning.jpg" alt="" /></a>
                    <div class="blog-info">
                        <h4><a href="#URL">Sump and tank cleaning</a></h4>
                        <p>Fusce rutrum quam a ultrices rhoncus. Nulla eu ipsum tempus est et vitae nulla empus
                            est
                            suscipit et dolor amet.</p>

                    </div>
                </div>

                <div class="grids5-info">
                    <a href="#URL"><img src="assets/images/housekeeping.jpg" alt="" /></a>
                    <div class="blog-info">
                        <h4><a href="#URL">House keeping, cleaning</a></h4>
                        <p>Fusce rutrum quam a ultrices rhoncus. Nulla eu ipsum tempus est et vitae nulla empus
                            est
                            suscipit et dolor amet.</p>

                    </div>
                </div>

            </div>
        </div>
</div>






@endsection