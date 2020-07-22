@section('css')
    <style>
      .fill-block{
        background-color: #bdcbd4;
      }
    </style>
@endsection
            <!-- Home Subpage -->
            <section class="pt-page" data-id="about-me">
                <div class="section-inner start-page-full-width">
                  <div class="start-page-full-width">
                    <div class="row">
                      <div class="col-sm-12 col-md-6 col-lg-6">
                          <div class="inner-content">
                          <!--   <div class="ripples" style="background-image:url('images/bg.jpg'); height:101%;
                            background-position: center;
                            background-repeat: no-repeat;
                            background-size: cover;"></div>  -->
                            <div class="fill-block"></div>
                          </div>
                      </div>
                      <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="inner-content">
                          <div class="hp-text-block">
                            <!-- Text rotation / Subtitle -->
                            <div class="owl-carousel text-rotation">  
                            <div class="item">
                                <div class="sp-subtitle">Backend-Developer</div>
                              </div>                                  
                              <div class="item">
                                <div class="sp-subtitle">Mobile Apps-Developer</div>
                              </div>
                              <div class="item">
                                <div class="sp-subtitle">WebApps-Developer</div>
                              </div>
                            </div>
                            <!-- /Text rotation / Subtitle -->
                            <h2 class="hp-main-title">Hello World !!</h2>
                            <p>
                                Berawal dari kebetulan yang nampak terencana secara kosmik.
                                Singkat cerita, saya diberi kesempatan untuk tinggal di Bumi menggunakan kendaraan sebagai manusia. Tertarik pada dunia Teknologi Informasi khususnya Programming.
                                Saya senang mencari metode dan pendekatan baru untuk melakukan sesuatu untuk meningkatkan efektifitas & efisiensi. Prinsip saya, HANYA melakukan apa yang harus saya lakukan dan BERKOMITMEN untuk TIDAK BERHENTI hingga TUJUAN tercapai.
                              </p>
                            <div class="hp-buttons">
                              <a href="#" class="btn btn-primary">Download CV</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
  
                <div class="section-inner custom-page-content">
                  <div class="page-content">
                    <!-- Services Block Title -->    
                    <div class="row">
                      <div class="col-xs-12 col-sm-12">
                        <div class="col-inner">
                          <div class="block-title">
                              <h3>What I Do</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /Services Block Title -->  
  
                    <!-- Services Block -->  
                    <div class="row">
                      <div class="col-xs-12 col-sm-6">
                        <div class="col-inner">
                          <div class="info-list-w-icon">
                            <!-- Service Item 1 -->
                            <div class="info-block-w-icon">
                              <div class="ci-icon">
                                <i class="lnr lnr-rocket"></i>
                              </div>
                              <div class="ci-text">
                                <h4>Cryptocurrency Trading </h4>
                                <p>Pertama kalinya memasuki suatu instrumen Investasi. yaitu Digital Asset, termasuk tipe Long-Term Position Trader. Selain itu, dari sini saya mengenal dan mulai belajar Teknikal Analisis & Fundamental, Pola, Siklus dan Psikologi.
                                    Apapun yang terjadi, saya disini untuk tinggal!!.
                                </p>
                              </div>
                            </div>
                            <!-- /Service Item 1 -->
  
                            <!-- Service Item 2 -->
                            <div class="info-block-w-icon">
                              <div class="ci-icon">
                                <i class="lnr lnr-laptop-phone"></i>
                              </div>
                              <div class="ci-text">
                                <h4>Software Development</h4>
                                <p>
                                    Saat ini saya bekerja secara <b>professional</b> untuk aktivitas tersebut. Kegiatan sehari-hari yang saya lakukan. Dengan hal ini saya berharap untuk bisa membantu dan bermanfaat untuk orang lain.
                                </p>
                              </div>
                            </div>
                            <!-- Service Item 2 -->
                          </div>
                        </div>
                      </div>
  
                      <div class="col-xs-12 col-sm-6">
                        <div class="col-inner">
                          <div class="info-list-w-icon">
                          <!-- Service Item 3 -->
                          <div class="info-block-w-icon">
                              <div class="ci-icon">
                                <i class="lnr lnr-question-circle"></i>
                              </div>
                              <div class="ci-text">
                                <h4>Learn & Experiment</h4>
                                <p>Bagi saya melakukan percobaan itu menyenangkan. Mungkin bisa dibilang hobi. Mulai dari makanan, pola hidup, spiritual, pemikiran, brainwave, 7 cakra, orgonite dan sebagainya. Akhir2 ini sedang experiment pertanian hidroponik yang dilengkapi dengan Teknologi IoT .</p>
                              </div>
                            </div>
                            <!-- Service Item 3 -->
                          <!-- Service Item 4 -->
                          <div class="info-block-w-icon">
                              <div class="ci-icon">
                                <i class="lnr lnr-book"></i>
                              </div>
                              <div class="ci-text">
                                <h4>Reading</h4>
                                <p>Entah kenapa, saya selalu ingin tahu alasan atau esensi dibalik suatu hal. Seperti, mengapa harus seperti itu? mengapa hal itu terjadi? mengapa saya harus percaya? dsb. 
                                </p>
                              </div>
                            </div>
                            <!-- Service Item 4 -->
                            
                            
  
                          
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /Services Block -->
  
                  </div>
                </div>
              </section>
              <!-- End of Home Subpage -->
              @section('js-about')
              <script>
                  $(document).ready(function() {
                    console.log('ready')
                    try {
                      $('.fill-block').ripples({
                        resolution: 512,
                        dropRadius: 20, //px
                        perturbance: 0.04
                      });
                    }
                    catch (e) {
                     /*  $('.error').show().text(e); */
                    }
                  
                  
                  
                    // Automatic drops
                    setInterval(function() {
                      var $el = $('main');
                      var x = Math.random() * $el.outerWidth();
                      var y = Math.random() * $el.outerHeight();
                      var dropRadius = 20;
                      var strength = 0.04 + Math.random() * 0.04;
                  
                      $el.ripples('drop', x, y, dropRadius, strength);
                    }, 400);
                  });
                  </script>
              @endsection