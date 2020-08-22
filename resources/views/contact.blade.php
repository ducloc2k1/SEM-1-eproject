@extends('layouts.master')
@section('page_title',ucfirst('contact'))
@section('main')
<section id="main-contact">
	<div class="container">
		<div class="row">
			<div class="container text-contact col-xs-12 col-sm-12 col-lg-offset-3 col-lg-6 col-md-offset-1 col-md-10 text-center">
				<div class="">
					<h2>OUR CONTACT</h2>
					<h4>We’re Here to Help You</h4>
					<div>
						<span>Got a project in mind? We’d love to hear about it. Take five minutes to fill out our project form so that we can get to know you and understand your project.</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div id="colophon">
				<div class="contact-us">
					<div class="container">
						<div class="row">
                            <div class="owl-carousel owl-theme owl-icon-contact">
                                <div class="item">
                                    <div class="item-contact">
                                        <div class="icon-contact text-center">
                                            <img src="https://zonex.famithemes.com/wp-content/uploads/2019/11/CT1.png" alt="">
                                        </div>
                                        <div class="list-contact">
                                            <h4 class="title"> Visit Us Daily:</h4>
                                            <div class="desc"> 27 Division St, New York, 10002</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-contact">
                                        <div class="icon-contact text-center">
                                                <img src="https://zonex.famithemes.com/wp-content/uploads/2019/11/CT2.png" alt="">
                                        </div>
                                        <div class="list-contact">
                                            <h4 class="title"> Phone Us 24/7:</h4>
                                            <div class="desc"> +8 (123) 456 789</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-contact">
                                        <div class="icon-contact text-center">
                                            <img src="https://zonex.famithemes.com/wp-content/uploads/2019/11/CT3.png" alt="">
                                        </div>
                                        <div class="list-contact">
                                            <h4 class="title"> Mail Us 24/7:</h4>
                                            <div class="desc"> support@zonex.com</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="contact-form">
        <div class="contact-map">
            <iframe src="{{$config->link}}" width="100%" height="610px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="form-contact-ditail">
            <div class="form-contact-right">
                <div class="text-from-contact">
                    <h2>GET IN TOUCH</h2>
                    <h3>Send Us a Message</h3>
                    <div class="descript-contact">
                        <p>
                            <span style="color: #151515;">Have some suggestions or just want to say hi? Contact us:</span>
                        </p>
                    </div>
                </div>
                <form action="" method="POST" class="form-contact">
                    @csrf
                        <div class="contact-form-container">
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" value="" size="40" class="form-control" required="true" aria-invalid="false" placeholder="Your Name*">
                                        </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="Your Email*">
                                        </div>
                                </div>
                                <div class="col-xs-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="content" id="input" class="form-control" rows="3" required="required" placeholder="Your Comments*"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn ">Send a message</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
