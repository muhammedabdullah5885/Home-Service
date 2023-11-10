@extends('Layouts/layout')
@section('title','index')

@section('content')
<section class="w3l-inner-banner">
    <div class="wrapper">
    </div>
</section>

<section class="w3l-form-16">
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
@endsection