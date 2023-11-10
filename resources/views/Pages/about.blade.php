@extends('Layouts/layout')
@section('title','index')

@section('content')

<section class="w3l-inner-banner">
    <div class="wrapper">
    </div>
</section>




<div class="w3l-specifications-5">
    <!-- Specifications5 block -->
    <section id="specifications5-block">
        <div class="wrapper">
            <div class="d-grid align-specifications5-cols">
                <div class="specifications5-left">
                    <h5 class="heading">Our Stats</h5>
                    <h3 class="heading">Some Company facts</h3>
                    <p>Nulla eu ipsum tempus est suscipit et vitae nulla. Once aute irure dolor in reprehenderit in
                        voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur elit.Nulla eu ipsum tempus est suscipit et
                        vitae
                        nulla. Once aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat.</p>
                    <p>Nulla eu ipsum tempus est suscipit et vitae nulla. Once aute irure dolor in reprehenderit in
                        voluptate
                        velit esse cillum dolore eu fugiat elit. </p>
                </div>
                <div class="specifications5-right">
                    <div class="d-grid grid-col-2">
                        <div class="specification">
                            <span class="fa fa-smile-o"></span>
                            <h4 id="happyCustomers">0</h4>
                            <p>Happy customers</p>
                        </div>
                        <div class="specification">
                            <span class="fa fa-legal"></span>
                            <h4 id="servicesDone">0</h4>
                            <p>Services done</p>
                        </div>
                        <div class="specification spec-gap">
                            <span class="fa fa-home"></span>
                            <h4 id="projectsCompleted">0</h4>
                            <p>Projects completed</p>
                        </div>
                        <div class="specification spec-gap">
                            <span class="fa fa-users"></span>
                            <h4 id="technicianExperts">0</h4>
                            <p>Technician experts</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="w3l-features-17">
    <div class="features-17_sur">
        <div class="wrapper">
            <h5 class="heading">Some features</h5>
            <h3 class="heading">Why choose us</h3>
            <div class="features-17-top_sur">
                <div class="features-17-left_sur">
                    <h3>We take great pride in all the services we offer, but
                        what makes our company special?</h3>
                    <p>Fusce rutrum quam a ultrices rhoncus. Nulla eu ipsum tempus est suscipit et vitae nulla.
                        Once aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                        nulla pariatur elit. </p>
                    <p>Fusce rutrum quam a ultrices rhoncus. Nulla eu ipsum tempus est suscipit et vitae nulla.
                        Once aute irure dolor. </p>
                </div>
                <div class="features-17-right_sur">
                    <div class="features-17-right_sur_inner">
                        <a href="#link"><span class="fa fa-check"></span> Well trained technician.</a>
                        <a href="#link"><span class="fa fa-check"></span> A hassle free Service</a>
                        <a href="#link"><span class="fa fa-check"></span> Using Best Quality tools.</a>
                        <a href="#link"><span class="fa fa-check"></span> Money is on safe Hand</a>
                        <a href="#link"><span class="fa fa-check"></span> 100% satisfactory work.</a>
                        <a href="#link"><span class="fa fa-check"></span> Work completion in Time.</a>
                        <a href="#link"><span class="fa fa-check"></span> Reasonable Cost</a>
                        <a href="#link"><span class="fa fa-check"></span> Expert consultant Team</a>
                        <a href="#link"><span class="fa fa-check"></span> On time response</a>
                        <a href="#link"><span class="fa fa-check"></span> Get Expert Technician</a>
                        <a href="#link"><span class="fa fa-check"></span> Well trained technician.</a>
                        <a href="#link"><span class="fa fa-check"></span> A hassle free Service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w3l-cover-3">
    <div class="cover top-bottom">
        <div class="wrapper">
            <div class="middle-section text-center">
                <div class="section-width">
                    <h2>We provide professional services with an amazing team</h2>
                    <p>Nulla eu ipsum tempus est suscipit et vitae nulla. Once aute irure dolor in reprehenderit in
                        voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur elit, fusce quam a rhoncus.</p>
                    <a href="#quote" class="btn">Get a quote</a>
                    <a href="#quote" class="contact">Contact us</a>
                </div>
            </div>
</section>




<script>
    // Function to animate the numbers
    function animateNumbers() {
        const numbers = document.querySelectorAll('.specification h4');
        numbers.forEach((number, index) => {
            setTimeout(() => {
                number.classList.add('running-number');
                number.textContent = number.dataset.target;
            }, index * 500); // Adjust the delay as needed
        });
    }

    // Set the target values for each number
    document.getElementById('happyCustomers').dataset.target = 2000;
    document.getElementById('servicesDone').dataset.target = 160;
    document.getElementById('projectsCompleted').dataset.target = 150;
    document.getElementById('technicianExperts').dataset.target = 100;

    // Trigger the animation when the window loads
    window.addEventListener('load', animateNumbers);
</script>
</div>
</section>


@endsection