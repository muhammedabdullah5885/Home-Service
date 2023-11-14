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
                    <h5>Carpentry Service</h5>
                    <h3>Carpentry Services Maintenance at your house</h3>
                    <p>Fusce rutrum quam a ultrices rhoncus. Nulla eu ipsum tempus est suscipit et vitae nulla.
                        Once
                        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur
                        elit. Fusce rutrum quam a rhoncus. Nulla eu ipsum tempus est et.</p>

                    <a href="services" class="read1">More Services</a>
                </div>

                <div class="form-right-inf logo">
                    <div class="form-inner-cont" style="position: relative; background-image: url('assets/images/electrician.jpg'); background-size: cover; background-position: center;">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7);"></div>
                        <div style="position: relative; z-index: 1;">
                        <h6>Book Service<span class="line"></span></h6>
                        <form action="#" method="post" class="signin-form">
                            <div class="form-input">
                                <input type="text" name="" placeholder="Your Name" required />
                            </div><br>
                            <div class="form-input">
                                <input type="email" name="" placeholder="Email Address" required />
                            </div><br>
                            <div class="form-input">
                                <input type="number" name="" placeholder="Contact Number" required />
                            </div><br>
                            <div class="form-input">
                                <textarea name="description" placeholder="Write what you need assistance for!" required style="background: #fff; outline: none; width: 100%; font-size: 15px; padding: 14px 25px; color: var(--para-color); border-radius: 35px; border: none;"></textarea>
                            </div>
                            <button class="btn">Click To Book</button>
                            <p><b>This Assistance will be related to Carpentry work</b></p>
                        </form>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
</section>
@endsection