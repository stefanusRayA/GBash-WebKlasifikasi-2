@extends('layout.app')

@section('content')
<section id="about" class="home-section text-center">
    <div class="heading-about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow bounceInDown" data-wow-delay="0.4s">
              <div class="section-heading">
                <h2>Profil</h2>
                <i class="fa fa-2x fa-angle-down"></i>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">

      <div class="row">
        <div class="col-lg-2 col-lg-offset-5">
          <hr class="marginbot-50">
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-3">
          <div class="wow bounceInUp" data-wow-delay="0.5s">
            <div class="team boxed-grey">
              <div class="inner">
                <h5>Stefanus Ray Ameniawan Invas Febrikagraha</h5>
                <p class="subtitle">150708605</p>
                

              </div>
            </div>
          </div>
        </div>
	
	<div class="row text-center">
        <div class="col-md-3">
          <div class="wow bounceInUp" data-wow-delay="0.5s">
            <div class="team boxed-grey">
              <div class="inner">
                <h5>Stefanus Ray Ameniawan Invas Febrikagraha</h5>
                <p class="subtitle">150708605</p>
                <div class="avatar"><img src="/ML/img/stefanus.jpg" alt="" class="img-responsive img-square" /></div>

              </div>
            </div>
          </div>
        </div>
	
	<div class="row text-center">
        <div class="col-md-3">
          <div class="wow bounceInUp" data-wow-delay="0.5s">
            <div class="team boxed-grey">
              <div class="inner">
                <h5>Stefanus Ray Ameniawan Invas Febrikagraha</h5>
                <p class="subtitle">150708605</p>
                

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- /Section: about -->


  <!-- Section: services -->
  <!-- <section id="service" class="home-section text-center bg-gray">

    <div class="heading-about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow bounceInDown" data-wow-delay="0.4s">
              <div class="section-heading">
                <h2>Our Services</h2>
                <i class="fa fa-2x fa-angle-down"></i>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-lg-offset-5">
          <hr class="marginbot-50">
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="wow fadeInLeft" data-wow-delay="0.2s">
            <div class="service-box">
              <div class="service-icon">
                <img src="/ML/img/icons/service-icon-1.png" alt="" />
              </div>
              <div class="service-desc">
                <h5>Print</h5>
                <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <div class="service-box">
              <div class="service-icon">
                <img src="/ML/img/icons/service-icon-2.png" alt="" />
              </div>
              <div class="service-desc">
                <h5>Web Design</h5>
                <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <div class="service-box">
              <div class="service-icon">
                <img src="/ML/img/icons/service-icon-3.png" alt="" />
              </div>
              <div class="service-desc">
                <h5>Photography</h5>
                <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="wow fadeInRight" data-wow-delay="0.2s">
            <div class="service-box">
              <div class="service-icon">
                <img src="/ML/img/icons/service-icon-4.png" alt="" />
              </div>
              <div class="service-desc">
                <h5>Cloud System</h5>
                <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- /Section: services -->




  <!-- Section: contact -->
  <section id="contact" class="home-section text-center">
    <div class="heading-contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow bounceInDown" data-wow-delay="0.4s">
              <div class="section-heading">
                <h2>Get in touch</h2>
                <i class="fa fa-2x fa-angle-down"></i>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">

      <div class="row">
        <div class="col-lg-2 col-lg-offset-5">
          <hr class="marginbot-50">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="boxed-grey">

            <div id="sendmessage">Terima Kasih Telah Menggunakan Web Klasifikasi Lirik Lagu</div>
            <div id="errormessage"></div>
            <form id="contact-form" action="" method="post" role="form" class="contactForm">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">
                                Nama</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <label for="email">
                                Alamat Email</label>
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="subject">
                                Subjek Masukan</label>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">
                                Kritik & Saran</label>
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-success pull-right" id="btnContactUs">
                            Kirim</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="widget-contact">
            <h5>Kontak Kami</h5>

            <address>
				  <strong>Universitas Atma Jaya Yogyakarta</strong><br>
				  JL. Babarsari NO. 44 Yogyakarta, D.I.Yogyakarta<br>
				  Indonesia, 55281<br>
				  <abbr title="Phone">Telepon:</abbr> (+62)-274-487711
				</address>

            <address>
				  <strong>Email</strong><br>
				  <a href="mailto:#">StefanusRay@uajy.ac.id</a>
				</address>
            <address>
				  <strong>Kami Di Jejaring Sosial</strong><br>
                       	<ul class="company-social">
                            <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                            <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
				</address>

          </div>
        </div>
      </div>

    </div>
  </section>
@endsection
