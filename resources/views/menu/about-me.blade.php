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
                            {{-- <div class="ripples" style="background-image:url('images/bg.jpg'); height:101%;
                            background-position: center;
                            background-repeat: no-repeat;
                            background-size: cover;"></div> --}}
                            <div class="fill-block"></div>
                          </div>
                      </div>
                      <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="inner-content">
                          <div class="hp-text-block">
                            <!-- Text rotation / Subtitle -->
                            <div class="owl-carousel text-rotation">  
                            <div class="item">
                                <div class="sp-subtitle">Backend-Programmer</div>
                              </div>                                  
                              <div class="item">
                                <div class="sp-subtitle">Mobile Apps-Programmer</div>
                              </div>
                              <div class="item">
                                <div class="sp-subtitle">WebApps-Programmer</div>
                              </div>
                            </div>
                            <!-- /Text rotation / Subtitle -->
                            <h2 class="hp-main-title">Fityan Ali Munshi</h2>
                            <p>
                                Berawal dari kebetulan yang nampak terencana secara kosmik.
                                Singkat cerita, saya lahir pada bulan Agustus 1993 tanggal 2, sebagai anak pertama dari 2 bersaudara. Tertarik pada dunia Teknologi Informasi khususnya <i>Programming</i>.
                                Saya senang mencari cara-cara baru untuk melakukan sesuatu supaya lebih efektif & efisien. Prinsip saya, HANYA melakukan apa yang harus saya lakukan dan BERKOMITMEN untuk TIDAK BERHENTI hingga TUJUAN tercapai.
                              </p>
                            <div class="hp-buttons">
                              <a href="/download_cv" class="btn btn-primary">Download CV</a>
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
                                <p>Pertama kalinya memasuki suatu instrumen Investasi. yaitu Digital Asset, saya termasuk tipe Long-Term Position Trader. Selain itu, dari sini saya mengenal dan mulai belajar Teknikal Analisis & Fundamental, Pola, Siklus dan Psikologi Trading.
                                    Apapun yang terjadi, saya disini untuk tinggal.
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
                                <h4>Web & Mobile Apps</h4>
                                <p>
                                    Saat ini saya bekerja untuk hal tersebut. Kegiatan yang sehari-hari saya lakukan. Dengan hal ini saya berharap untuk bisa membantu sekaligus bermanfaat untuk orang lain, yah minimal kontribusi sedikitlah hehehe.
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
                                <h4>Experiment</h4>
                                <p>Bagi saya melakukan percobaan itu menyenangkan. Mungkin bisa dibilang hobi. Mulai dari makanan, minuman, pola hidup, sampai tentang pemikiran, pandangan, keresahan hidup, brainwave, 7 cakra, crystal stone, orgonite, astral-projection dan sebagainya. Kapan-kapan saya share dibagian konten blog web ini.</p>
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
                                <p>Entah kenapa, saya selalu ingin tahu alasan atau esensi dibalik suatu hal. Seperti, mengapa harus seperti ini? mengapa hal itu dilarang? kenapa saya harus percaya? dsb. Awalnya mengganggu, tapi akhirnya membuka pikiran.
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