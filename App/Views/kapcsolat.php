<section id="subintro">
    <div class="jumbotron subhead" id="overview">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="centered">
                        <h3>Contact page</h3>
                        <p>
                            Lorem ipsum dolor sit amet, modus salutatus honestatis ex mea. Sit cu probo putant. Nam ne impedit atomorum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="span12">
                <ul class="breadcrumb notop">
                    <li><a href="#">Home</a><span class="divider">/</span></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="maincontent">
    <div class="container">
        <div class="row">
            <div class="span4">
                <aside>
                    <div class="widget">
                        <h4>Get in touch with us</h4>
                        <ul>
                            <li><label><strong>Phone : </strong></label>
                                <p>
                                    +900 888 707 123
                                </p>
                            </li>
                            <li><label><strong>Email : </strong></label>
                                <p>
                                    name@yoursite.com
                                </p>
                            </li>
                            <li><label><strong>Adress : </strong></label>
                                <p>
                                    Pasar kambing 58 Suite X.110 Peterongan Semarang, Indonesia
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h4>Social network</h4>
                        <ul class="social-links">
                            <li><a href="#" title="Twitter"><i class="icon-rounded icon-32 icon-twitter"></i></a></li>
                            <li><a href="#" title="Facebook"><i class="icon-rounded icon-32 icon-facebook"></i></a></li>
                            <li><a href="#" title="Google plus"><i class="icon-rounded icon-32 icon-google-plus"></i></a></li>
                            <li><a href="#" title="Linkedin"><i class="icon-rounded icon-32 icon-linkedin"></i></a></li>
                            <li><a href="#" title="Pinterest"><i class="icon-rounded icon-32 icon-pinterest"></i></a></li>
                        </ul>
                    </div>
                </aside>
            </div>
            <div class="span8">
                <div id="google-map" data-latitude="40.713417" data-longitude="-74.0092125"></div>

                <div class="spacer30"></div>

                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                    <div class="row">
                        <div class="span4 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>

                        <div class="span4 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="span8 form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="span8 form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                            <div class="text-center">
                                <button class="btn btn-color btn-rounded" type="submit">Send message</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>