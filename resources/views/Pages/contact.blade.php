
@extends('Layouts/layout')
@section('title','index')

@section('content')
    <section class="w3l-inner-banner">
        <div class="wrapper">
        </div>
    </section>

    <section class="w3l-contacts-12">
        <div class="wrapper">
            <h5 class="heading">Write to us</h5>
            <h3 class="heading">Get in touch</h3>
            <div class="contacts12-main">
                <form action="https://sendmail.w3layouts.com/submitForm" method="post">
                    <div class="main-input">
                        <input type="text" name="w3lName" placeholder="Your full name" class="contact-input1"
                            required />
                        <input type="email" name="w3lSender" placeholder="Your email address" class="contact-input1"
                            required />
                        <input type="number" name="w3lPhone" placeholder="Your phone number" class="contact-input1"
                            required />
                        <input type="subject" name="w3lSubject" placeholder="Your subject" class="contact-input1"
                            required />
                    </div>
                    <textarea class="contact-textarea" name="w3lMessage" placeholder="Your message here"
                        required></textarea>
                    <button class="actionbg btn">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
        <!---728x90--->

    </div>
    <!-- contacts4 block -->
    <section class="w3l-contacts-4">
        <div id="contacts4-block">
            <div class="contact">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2895687731!2d-74.26055986835598!3d40.697668402590374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1562582305883!5m2!1sen!2sin"
                    frameborder="0" style="border:0" allowfullscreen></iframe>
                <div class="cont-details">
                    <h5>Location</h5>
                    <p>Once aute irure dolor in reprehenderit in velit esse cillum dolore eu fugiat nulla pariatur elit.
                    </p>
                    <address>
                        <p><span class="fa fa-map-marker"></span> Home maintenance</p>
                        <p>#32841 block, home repairs,</p>
                        <p> USA. 241136.</p>
                    </address>
                    <p><span class="fa fa-envelope-open-o"></span> Email: <a href="https://p.w3layouts.com/cdn-cgi/l/email-protection#fb969a9297bb9894968b9a9582d5989496"><span class="__cf_email__" data-cfemail="e28f838b8ea2818d8f92838c9bcc818d8f">[email&#160;protected]</span></a></p>
                    <p><span class="fa fa-phone"></span> Tel: <a href="tel:+(21)-255-999-8888">+(21)-255-999-8888</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- contacts4 block -->
    @endsection
