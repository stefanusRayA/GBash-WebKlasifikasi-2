@extends('layout.app')

@section('content')
<section id="about" class="home-section text-center">
  <!-- Section: services -->
  <section id="contact" class="home-section text-center bg-gray">
    <div class="heading-contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow bounceInDown" data-wow-delay="0.4s">
              <div class="section-heading">
                <h2>FORM PREDIKSI LIRIK LAGU</h2>
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
        <div class="col-lg-15">
          <div class="boxed-grey">
            <div id="sendmessage">Lirik akan segera diproses... Terima Kasih!</div>
            <div id="errormessage">Silahkan Masukan Sampel Lirik!</div>
            <form align="center" id="register" class="form-horizontal" action="{{url('predict.store')}}">
              <meta name="csrf-token" content="{{ csrf_token() }}" />
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="row">

                <div class="col-md-9" style="margin-left: 140px;">
                  <div class="form-group">
                    <label for="exampleSpam pull-center">
                                Masukan</label>
                    <textarea align="center" type="text" class="form-control" name="text_spam" id="Text_spam" placeholder="Lirik lagu" data-rule="minlen:10" data-msg="Please enter at least 8 chars of Text"></textarea>
                    <div class="validation"></div>
                  </div>
                </div>
                <br>
                <br>
                <br>
                <div class="col-md-6" align="center" style="margin-left: 285px;">
                  <label align="center" for="examplePredict" name="result">Hasil</label>
                  <br>
                  <label align="center" for="examplePredict" name="result">Emosi</label>
                  <label for="examplePredict" id="predictEmosi" class="form-control">
                    <input class="form-group" type="hidden" name="predictDataTemp" id="predictEmosiRes"/>
                  </label>

                  <label align="center" for="examplePredict" name="result">Genre</label>
                  <label align="center"for="examplePredict" id="predictGenre" class="form-control">
                    <input class="form-group" type="hidden" name="predictDataTemp" id="predictGenreRes"/>
                  </label>
                </div>

                <div class="col-md-12">
                  <button type="button" class="btn btn-success pull-center" id="predict">
                            PROSES</button>
                </div>
              </div>


              <script src="https://code.jquery.com/jquery-1.8.0.min.js"></script>
                <script type="text/javascript">
                  $(document).ready(function(){
                    $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    });
                    $('#predict').click(function(){
                      $('#predictData').empty();
                      var text=$('#Text_spam').val();

                      /*$.get('predict',function(data){
                        $('#predictData').append(data);
                        console.log(data);
                      });*/
                      $.ajax({
                        type: "POST",
                        url:"https://gbash-klasifikasifinal.herokuapp.com/input/task",
                        data:'{"text":"'+text+'"}',
                        contentType: 'application/json; charset=utf-8',
                        dataType: "json",
                        success:function(data){
                          console.log(data);
                          var dataTemp=data['emosi'];
                          var dataTemp2=data['genre'];
                          $('#predictEmosi').append(dataTemp);
                          $('#predictEmosiRes').val(dataTemp);
                          $('#predictGenre').append(dataTemp2);
                          $('#predictGenreRes').val(dataTemp2);
                        }
                      });
                    });
                  });
                </script>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
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
