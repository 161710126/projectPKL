<!DOCTYPE html>
<html lang="en">
  <head>
        <title>UserMTs || Dashboard</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/user/css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/user/css/font-awesome.css')}}">
        <link rel='stylesheet' id='camera-css'  href='{{asset('assets/user/css/camera.css')}}' 
        type='text/css' media='all'>

        <link rel="stylesheet" type="text/css" href="{{asset('assets/user/css/slicknav.css')}}">
        <link rel="stylesheet" href="{{asset('assets/user/css/prettyPhoto.css')}}" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="{{asset('assets/user/css/style.css')}}">
        
        
        <script type="text/javascript" src="{{asset('assets/user/js/jquery-1.8.3.min.js')}}"></script>

        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="{{asset('assets/user/js/jquery.mobile.customized.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/user/js/jquery.easing.1.3.js')}}"></script> 
        <script type="text/javascript" src="{{asset('assets/user/js/camera.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/user/js/myscript.js')}}"></script>
        <script src="{{asset('assets/user/js/sorting.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/user/js/jquery.isotope.js')}}" type="text/javascript"></script>
        <!--script type="text/javascript" src="{{asset('assets/user/js/jquery.nav.js')}}"></script-->
        

        <script>
            jQuery(function(){
                    jQuery('#camera_wrap_1').camera({
                    transPeriod: 500,
                    time: 3000,
                    height: '490px',
                    thumbnails: false,
                    pagination: true,
                    playPause: false,
                    loader: false,
                    navigation: false,
                    hover: false
                });
            });
        </script>
        
    </head>
    <body>
    
    <!--home start-->
    
    <div id="home">
        <div class="headerLine">
    <div id="menuF" class="default">
        <div class="container">
            <div class="row">
                <div class="logo col-md-4">
                    <div>
                        <a href="#">
                            <img src="{{asset('assets/user/images/logo.png')}}">
                        </a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="navmenu"style="text-align: center;">
                        <ul id="menu">
                            <li class="active" ><a href="#home">Home</a></li>
                            <li><a href="#about">Guru</a></li>
                            <li><a href="#project">Galery</a></li>
                            <li><a href="#news">Artikel</a></li>
                            <li class="last"><a href="#contact">Contact</a></li>
                            <!--li><a href="#features">Features</a></li-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="container">
            <div class="row wrap">
                <div class="col-md-12 gallery"> 
                        <div class="camera_wrap camera_white_skin" id="camera_wrap_1">
                            <div data-thumb="" data-src="{{asset('assets/user/images/slides/blank.gif')}}">
                                <div class="img-responsive camera_caption fadeFromBottom">
                                    <h2>PPDB MTs AL IKHLAS</h2>
                                </div>
                            </div>
                            <div data-thumb="" data-src="{{asset('assets/user/images/slides/blank.gif')}}">
                                <div class="img-responsive camera_caption fadeFromBottom">
                                    <h2>ASSALAMUALIKUM WR.WB</h2>
                                </div>
                            </div>
                            
                        </div><!-- #camera_wrap_1 -->
                </div>
            </div>
        </div>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 project">
                    <h3 id="counter">0</h3>
                    <h4>Awesome Projects</h4>
                    <p>Dolor sit amet, consectetur adipiscing elit quisque tempus eget diam et lorem a laoreet phasellus ut nisi id leo molestie. </p>
                </div>
                <div class="col-md-4 project">
                    <h3 id="counter1">0</h3>
                    <h4>Happy Customers</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque tempus eget diam et. laoreet phasellus ut nisi id leo.  </p>
                </div>
                <div class="col-md-4 project">
                    <h3 id="counter2" style="margin-left: 20px;">0</h3>
                    <h4 style="margin-left: 20px;">Professional Awards</h4>
                    <p>Consectetur adipiscing elit quisque tempus eget diam et laoreet phasellus ut nisi id leo molestie adipiscing vitae a vel. </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 cBusiness">
                    <h3>Kata Sambutan Dari Ketua Yayasan</h3>
                    
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 centPic">
                    <img class="img-responsive"  src="{{asset('assets/user/images/DJUSRO.jpg')}}"/><br>
                  <h3>  Dengan Syukur kami panjatkan kehadirat Illahi Rabbi, berkat Rahmat dan Inayah-nya kami mampuh menyusun Kurikulum Tingkat Satuan Pendidikan (KTSP) Madrasah Tsanawiyah Al Ikhlas Keban II sebagai kajian bersama dalam forum rapat dinas Dewan Guru, Staf Karyawan Tata Usaha dan Komite Madrasah dalam rangkamencapai tujuan pendidikan yangtelahditetapkan.
Sebagaimana ketentuan dalam Peraturan Pemerintah Nomor 19 Tahun 2005 Standar Nasional Pendidikan yang diubah dengan Peraturan Pemerintah Nomor 32 tahun 2013, setiap madrasah mengembangkan kurikulum berdasarkan Standar Isi (SI) dan Standar Kompetensi Lulusan (SKL) dan berpedomankepada panduan yangditetapkan oleh BadanStandar Nasional Pendidikan (BSNP).
Pengembangan Kurikulum MTs. Al Ikhlas Keban II ini mengacu pada standar Nasional Pendidikan untuk menjamin pencapaian tujuan pendidikan nasional. Standar nasional pendidikan tersebut meliputi standar isi, proses, kompetensi lulusan,pendidik dan tenaga kependidikan, sarana prasarana, pengelolaan, pembiayaan, dan standar penilaian pendidikan. Oleh sebab itu kurikulum ini disusun untuk memungkinkan penyesuaian programpendidikan dengankebutuhan danpotensi yang adadi MTs. Al Ikhlas KebanII.
Dokumen ini disusun sebagai sebuah kurikulum yang berisi tentang gambaran umum mengenai pedoman penyelenggaraan pendidikan dalam menentukan berbagai kebijakan dan Kegiatan Belajar Mengajar agar terencana, terarah dan tepat tujuan, khususnya dalam menjembatani peserta didik meletakan dasar Imtak dan Imtek, akhlak mulia, kecerdasan, pengetahuan, kepribadian, serta keterampilan untuk hidup mandiri dan mengikuti pendidikanlebih lanjut.
Pada kesempatan ini pula Kepala MTs Al Ikhlas Keban II menyampaikan ucapan terima kasih yang setinggi tinginya ungkapan rasa yang sedalam dalamnya atas motivasi, pengarahan, dan bimbingan serta petunjuknya kepada: 1. Bapak/Ibu DewanGuru, KaryawandanKomiteMadrasah. 2. BapakKetuaYayasan Pendidikan Islam Al Ikhlas SangaDesa. 3. Semua pihak yang telah membantu demi terwujudnya penyusunan Kurikulum Tingkat Satuan Pendidikan (KTSP) pada kelas VIII dan IX sedangkan kelas VII Tahun Ajaran 2017/2018 telah menggunakan Kurikulum 13sesuai dengan SKDirjenpendis Kementerian Agama RI.
Tiada gading yag tidak retak, kritik dan saran sangat diharapkan demi penyempurnaan Kurikulum Tingkat Satuan Pendidikan (KTSP) pada masa selanjutya, Oleh sebab itu, segala kritik, saran, dan masukan yang konstruktif dari berbagai pihak yang kompeten sangat kami harapkan, akhirya hanya kepada Allah jualah memohon Ridho dan Taufiq-nya semoga bermanfaat bagi proses pembelajaran di MTs Al Ikhlas Keban II, Aamin. </h3>
                </div>
            </div>
        </div>   
    </div>
    
    <!--about start-->    
    
    <div id="about">
        <div class="line2">
            <div class="container">
                <div class="row Fresh">
                    <div class="col-md-4 Des">
                        <i class="fa fa-heart"></i>
                        <h4>VISI</h4>
                        <h2><p>"Meningkatkan Prestasi Siswa dalam bidang Imtek dan imtaq serta berakhlakul Karimah" </p></h2>
                    </div>
                    <div class="col-md-4 Ver">
                        <i class="fa fa-cog"></i>
                        <h4>MISI</h4>
                        <h2><p>1.Melaksanakan pembelajaran dan bimbingan secara efektif untuk mengoptimalkan potensi siswa<br>
                           2.Mengciptakan suasana yang kondusif untuk keefektipan seluruh kegiatan madrasah<br>
                           3.Mengembangkan budaya kompeletif bagi peningkatan prestasi siswa<br>
                           4.Menumbuhkembangkan penghayatan dan pengamalan terhadap Agama untuk membentuk budi pekerti yang baik</p></h2>
                    </div>
                    <div class="col-md-4 Fully">
                        <i class="fa fa-tablet"></i>
                        <h4>TUJUAN</h4>
                        <h2></h2><p>Tujuan pendidikan nasional adalah berkembangnya potensi peserta didik agar menjadi manusia yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa, Berakhlak mulia,cakap,kreatif,mandiri,dan menjadi warga negara yang demokratis serta bertanggung jawab </p></h2>
                    </div>      
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 wwa">
                    <span name="about" ></span>
                    <h3>DAFTAR GURU MTs AL IKHLAS</h3>
                    <h4>We listen, we discuss, we advise and develop. We love to learn and use the latest technologies.</h4>
                </div>
            </div>
        </div>


        @foreach($gurus1 as $data)
                   <h2>
        <div class="container marketing">
        <div class="row">
        <div class="col-lg-4">
            <center>            
                        <center><img src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" style="max-height: 125px;max-width: 125px;margin-top: 7px"></center>
                        
                        <h4>{{ $data->nama}}</h4>
                        <h4>{{ $data->jabatan }}</h4>
                         </div><!-- /.col-lg-4 -->
</center>
                      @endforeach   


        <div class="container">
            <div class="row">
                <div class="col-md-12 hr1">
                    <hr/>
                </div>
            </div>
        </div>      
        <div class="container">
            <div class="row">
                <div class="col-md-3 bar">
                    <div class="progB chart" data-percent="64"  data-animate="3500">
                        <div class="chart chart-content">
                            <div class="percentage" data-percent="64">
                              <span class="percent">64</span>
                            </div>
                        </div>
                    </div>
                    <div class="textP">
                        <h3>WordPress</h3>
                        <p>Nulla consectetur ornare nibh, a auctor <br/>mauris scelerisque eu proin nec urna quis. </p>
                    </div>
                </div>
                <div class="col-md-3 bar">
                    <div class="progB chart" data-percent="22"  data-animate="3500">
                        <div class="chart chart-content">
                            <div class="percentage" data-percent="22">
                              <span class="percent">22</span>
                            </div>
                        </div>
                    </div>
                    <div class="textP">
                        <h3>HTML5</h3>
                        <p>Nulla consectetur ornare nibh, a auctor <br/>mauris scelerisque eu proin nec urna quis. </p>
                    </div>
                </div>
                <div class="col-md-3 bar ">
                    <div class="progB chart" data-percent="84"  data-animate="3500">
                        <div class="chart chart-content">
                            <div class="percentage" data-percent="22">
                              <span class="percent">84</span>
                            </div>
                        </div>
                    </div>
                    <div class="textP">
                        <h3>CSS3</h3>
                        <p>Nulla consectetur ornare nibh, a auctor <br/>mauris scelerisque eu proin nec urna quis. </p>
                    </div>
                </div>
                <div class="col-md-3 bar ">
                    <div class="progB chart" data-percent="45"  data-animate="3500">
                        <div class="chart chart-content">
                            <div class="percentage" data-percent="45">
                              <span class="percent">45</span>
                            </div>
                        </div>
                    </div>
                    <div class="textP">
                        <h3>Woocommerce</h3>
                        <p>Nulla consectetur ornare nibh, a auctor <br/>mauris scelerisque eu proin nec urna quis. </p>
                    </div>
                </div>
            </div>
        </div>  
        
        
        <div class="container">
            <div class="row aboutUs">
                <div class="col-md-12 ">
                    <h3>Daftar Eskul Di MTs AL IkHLAS</h3>
                </div>
            </div>
        </div>
        
        <div style="position: relative;">
        
           @foreach($eskuls1 as $data)
                   <h2>
        <div class="container marketing">
        <div class="row">
        <div class="col-lg-4">
            <center>            
                        <center><img src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" style="max-height: 125px;max-width: 125px;margin-top: 7px"></center>
                        <br>
                        <h2>{{ $data->nama}}</h2>
                        <h4>{{ $data->content}}</h4>
                         </div><!-- /.col-lg-4 -->
</center>
                      @endforeach   


                      <div class="container">
            <div class="row aboutUs">
                <div class="col-md-12 ">
                    <h3>Fasilitas Di MTs AL IkHLAS</h3>
                </div>
            </div>
        </div>
        
        <div style="position: relative;">
        
          @foreach($kategfasilitas1 as $data)
                   <h2>
        <div class="container marketing">
        <div class="row">
        <div class="col-lg-4">
            <center>      
            <h4>{{ $data->kategori_fasilitas->nama_fasilitas}}</h4>
    
                        <center><img src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" style="max-height: 125px;max-width: 125px;margin-top: 7px"></center>
                        
                        <h4>{{ $data->nama}}</h4>
                                                 </div><!-- /.col-lg-4 -->
</center>
                      @endforeach
                       
                        <div class="container">
            <div class="row aboutUs">
                <div class="col-md-12 ">
                    <h3>Prestasi Di MTs AL IkHLAS</h3>
                </div>
            </div>
        </div>
        
        <div style="position: relative;">
        
          @foreach($prestasis1 as $data)
                   <h2>
        <div class="container marketing">
        <div class="row">
        <div class="col-lg-4">
            <center>      
            <h4>{{ $data->nama}}</h4>
                       <center><img src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" style="max-height: 125px;max-width: 125px;margin-top: 7px"></center>

                        <h4>{{ $data->tanggal_peroleh}}</h4>
                        <h4>{{ $data->eskul->nama}}</h4>
                        <h4>{{ $data->deskripsi}}</h4>
                         </div><!-- /.col-lg-4 -->
</center>
                      @endforeach
                       
    <!--project start-->    
    <div id="project">      
        <div class="line3">
            <div class="container">
                <div id="project1" ></div>
                <div class="row Ama">
                    <div class="col-md-12">
                    <span name="projects" id="projectss"></span>
                    <h3>Kumpulan Gallery Mts AL IKHLAS</h3>
                    <p>Right here we've got something you gonna love</p>
                    </div>
                </div>
            </div>
        </div>          
    
    
       <div class="container">
        
        <div class="row">
            <!-- filter_block -->
                <div id="options" class="col-md-12" style="text-align: center;">    
                    <ul id="filter" class="option-set" data-option-key="filter">
                        <li><a class="selected" href="#filter" data-option-value="*" class="current">All Galeri</a></li>
                        <li><a href="#filter" data-option-value=".polygraphy">Perpisahan 2016/2017</a></li>
                        <li><a href="#filter" data-option-value=".branding">Pelantikan Anggota Pramuka</a></li>
                        <li><a href="#filter" data-option-value=".web">Ujian Nasional</a></li>
                        <li><a href="#filter" data-option-value=".text_styles">Lomba 17 Agustus</a></li>
                    </ul>
                </div><!-- //filter_block -->
        
        <div class="portfolio_block columns3   pretty" data-animated="fadeIn">  
                    <div class="element col-sm-4   gall branding">
                        <a class="plS" href="{{asset('assets/user/images/prettyPhotoImages/pic1.jpg')}}" rel="prettyPhoto[gallery2]">
                            <img class="img-responsive picsGall" src="{{asset('assets/user/images/prettyPhotoImages/thumb_pic1.jpg')}}" alt="pic1 Gallery"/>
                        </a>
                        <div class="view project_descr ">
                            <h3><a href="#">Recycled Paper - Business Card Mock Up</a></h3>
                            <ul>
                                <li><i class="fa fa-eye"></i>215</li>
                                <li><a class="heart" href="#"><i class="fa-heart-o"></i>14</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="element col-sm-4  gall branding">
                        <a class="plS" href="{{asset('assets/user/images/prettyPhotoImages/pic2.jpg')}}" rel="prettyPhoto[gallery2]">
                            <img class="img-responsive picsGall" src="{{asset('assets/user/images/prettyPhotoImages/thumb_pic2.jpg')}}" alt="pic2 Gallery"/>
                        </a>
                        <div class="view project_descr center">
                            <h3><a href="#">Environment Logos Set</a></h3>
                            <ul>
                                <li><i class="fa fa-eye"></i>369</li>
                                <li><a  class="heart" href="#"><i class="fa-heart-o"></i>86</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="element col-sm-4  gall web">
                        <a class="plS" href="{{asset('assets/user/images/prettyPhotoImages/pic3.jpg')}}" rel="prettyPhoto[gallery2]">
                            <img class="img-responsive picsGall" src="{{asset('assets/user/images/prettyPhotoImages/thumb_pic3.jpg')}}" alt="pic3 Gallery"/>
                        </a>
                        <div class="view project_descr ">
                            <h3><a href="#">Beag Simple WEB UI</a></h3>
                            <ul>
                                <li><i class="fa fa-eye"></i>400</li>
                                <li><a  class="heart" href="#"><i class="fa-heart-o"></i>124</a></li>
                            </ul>
                        </div>
                    </div>
        
        
                    
                    <div class="element col-sm-4  gall  text_styles">
                        <a class="plS" href="{{asset('assets/user/images/prettyPhotoImages/pic4.jpg')}}" rel="prettyPhoto[gallery2]">
                            <img class="img-responsive picsGall" src="{{asset('assets/user/images/prettyPhotoImages/thumb_pic4.jpg')}}" alt="pic1 Gallery"/>
                        </a>
                        <div class="view project_descr ">
                            <h3><a href="#">Pop Candy Text Effect</a></h3>
                            <ul>
                                <li><i class="fa fa-eye"></i>480</li>
                                <li><a  class="heart" href="#"><i class="fa-heart-o"></i>95</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="element col-sm-4  gall  web">
                        <a class="plS" href="{{asset('assets/user/images/prettyPhotoImages/pic5.jpg')}}" rel="prettyPhoto[gallery2]">
                            <img class="img-responsive picsGall" src="{{asset('assets/user/images/prettyPhotoImages/thumb_pic5.jpg')}}" alt="pic1 Gallery"/>
                        </a>
                        <div class="view project_descr center">
                            <h3><a href="#">User Interface Elements</a></h3>
                            <ul>
                                <li><i class="fa fa-eye"></i>215</li>
                                <li><a  class="heart" href="#"><i class="fa-heart-o"></i>14</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="element col-sm-4  gall  polygraphy">
                        <a class="plS" href="{{asset('assets/user/images/prettyPhotoImages/pic6.jpg')}}" rel="prettyPhoto[gallery2]">
                            <img class="img-responsive picsGall" src="{{asset('assets/user/images/prettyPhotoImages/thumb_pic6.jpg')}}" alt="pic1 Gallery"/>
                        </a>
                        <div class="view project_descr ">
                            <h3><a href="#">Stationery Branding Mock Up</a></h3>
                            <ul>
                                <li><i class="fa fa-eye"></i>375</li>
                                <li><a  class="heart" href="#"><i class="fa-heart-o"></i>102</a></li>
                            </ul>
                        </div>
                    </div>      
                    <div class="element col-sm-4   gall branding">
                        <a class="plS" href="{{asset('assets/user/images/prettyPhotoImages/pic7.jpg')}}" rel="prettyPhoto[gallery2]">
                            <img class="img-responsive picsGall" src="{{asset('assets/user/images/prettyPhotoImages/thumb_pic7.jpg')}}" alt="pic1 Gallery"/>
                        </a>
                        <div class="view project_descr ">
                            <h3><a href="#">Darko - Business Card Mock Up</a></h3>
                            <ul>
                                <li><i class="fa fa-eye"></i>440</li>
                                <li><a  class="heart" href="#"><i class="fa-heart-o"></i>35</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="element col-sm-4  gall text_styles">
                        <a class="plS" href="{{asset('assets/user/images/prettyPhotoImages/pic8.jpg')}}" rel="prettyPhoto[gallery2]">
                            <img class="img-responsive picsGall" src="{{asset('assets/user/images/prettyPhotoImages/thumb_pic8.jpg')}}" alt="pic1 Gallery"/>
                        </a>
                        <div class="view project_descr ">
                            <h3><a href="#">Foil Mini Badges</a></h3>
                            <ul>
                                <li><i class="fa fa-eye"></i>512</li>
                                <li><a  class="heart" href="#"><i class="fa-heart-o"></i>36</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="element col-sm-4  gall polygraphy">
                        <a class="plS" href="{{asset('assets/user/images/prettyPhotoImages/pic9.jpg')}}" rel="prettyPhoto[gallery2]">
                            <img class="img-responsive picsGall" src="{{asset('assets/user/images/prettyPhotoImages/thumb_pic9.jpg')}}" alt="pic1 Gallery"/>
                        </a>
                        <div class="view project_descr ">
                            <h3><a href="#">Woody Poster Text Effect</a></h3>
                            <ul>
                                <li><i class="fa fa-eye"></i>693</li>
                                <li><a  class="heart" href="#"><i class="fa-heart-o"></i>204</a></li>
                            </ul>
                        </div>
                    </div>          
            </div>
            

            <script type="text/javascript">
                jQuery(window).load(function(){
                    items_set = [
                    
                        {category : 'branding', lika_count : '77', view_count : '234', src : 'images/prettyPhotoImages/pic9.jpg')}}', title : 'Foil Mini Badges', content : '' },
                        
                        {category : 'polygraphy', lika_count : '45', view_count : '100', src : 'images/prettyPhotoImages/pic7.jpg')}}', title : 'Darko – Business Card Mock Up', content : '' },
                        
                        {category : 'text_styles', lika_count : '22', view_count : '140', src : 'images/prettyPhotoImages/pic8.jpg')}}', title : 'Woody Poster Text Effect', content : '' }
                        

                    ];
                    jQuery('.portfolio_block').portfolio_addon({
                        type : 1, // 2-4 columns simple portfolio
                        load_count : 3,
                        
                        items : items_set
                    });
                    $('#container').isotope({
                      animationOptions: {
                         duration: 900,
                         queue: false
                       }
                    });
                });
            </script>
        </div>
    </div>    
    
    <!--news start-->
    
    <div id="news">
        <div class="line4">     
            <div class="container">
                <div class="row Ama">
                    <div class="col-md-12">
                    <h3>Berita & Artikel Terbaru MTs AL IKHLAS</h3>
                    <p>Get the latest news from our blog</p>
                    </div>
                </div>
            </div>
        </div>
        @php $no = 1; @endphp
                        @foreach($kartikels1 as $data)
            
        <div class="container">
                <div class="row news">
                    <div class="col-md-6  text-left">
                    <img class="img-responsive picsGall" src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}"/>
                    <h2>{{$data->judul}}</h2>
                    <h2>{{$data->kategori}} </h2>   
                                   
                   <h4>{{$data->deskripsi}} </h4>
  <ul>
                        <li><i class="fa fa-calendar"></i>April 25, 2014</li>
                       
                    </ul>
                    <hr class="hrNews">
                    </div>
        @endforeach
    <!--contact start-->
    
    
        <div class="line6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3960.373570544534!2d107.5898657!3d-6.965181799999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8deccecb6f1%3A0x658cc60fbe5017b9!2sSMK+Assalaam+Bandung!5e0!3m2!1sid!2sid!4v1531424640657" width="100%" height="750" frameborder="0" style="border:0"></iframe>         
        </div>
       
     
       <br><br>
        <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Profil Madrasah</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">1.Identitas
              <thead>
                <tr>
                  <th>NSM</th>
                  <th>NPSM</th>
                  <th>Status Madrasah</th>
                  <th>Waktu Belajar</th>
                  <th>Nama Madrasah</th>
                  <th>NPWP</th>
                  <th>Nomor Telepon</th>
                </tr>
                <tr>
                  <td>121216060009</td>
                  <td>10600249/69853334 </td>
                  <td> Swasta </td>
                  <td> Siang,Jam 11.30s/d 5.15wib </td>
                  <td> MTs. AlIkhlas KebanII </td>
                  <td>-</td>
                  <td> 08127446510</td>
                </tr>

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">2.Data Kepala
              <thead>
                <tr>
                  <th>Kepala Madrasah </th>
                  <th>Jenis Kelamin </th>
                  <th>StatusKepegawaian</th>
                  <th>NIP/NUPTK</th>
                  <th>NRG Sertifikasi </th>
                  <th>Pendidikan Terakhir </th>
                  <th>Nomor Telpon/HP </th>
                </tr>
                <tr>
                  <td> Mahyudin,S.Pd.I </td>
                  <td> Laki - Laki  </td>
                  <td> PNS </td>
                  <td> 197712072006041001 / 9539755656200003  </td>
                  <td> - </td>
                  <td> StarataSatu(S1) </td>
                  <td>08127446510</td>
                </tr>       

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">3.Alamat Madrasah
              <thead>
                <tr>
                  <th>Jalan/Kampung  </th>
                  <th>Propinsi </th>
                  <th>Kabupaten</th>
                  <th>Kecamatan</th>
                  <th>Desa </th>
                  <th>Kode POS </th>
                </tr>
                <tr>
                  <td> Jl.Kabupaten DesaKebanII  </td>
                  <td> Sumtra Selatan  </td>
                  <td> Musi Banyuasin </td>
                  <td>Sanga Desa </td>
                  <td> Keban II </td>
                  <td> 30752 </td>
                </tr>       
              </tbody>
            </table>
          </div>
        </div>
       
    </div>
             
        </div>
        <div class="lineBlack">
            <div class="container">
                <div class="row downLine">
                    <div class="col-md-12 text-right">
                        <!--input  id="searchPattern" type="search" name="pattern" value="Search the Site" onblur="if(this.value=='') {this.value='Search the Site'; }" onfocus="if(this.value =='Search the Site' ) this.value='';this.style.fontStyle='normal';" style="font-style: normal;"/-->
                        <input  id="searchPattern" type="search" placeholder="Search the Site"/><i class="glyphicon glyphicon-search" style="font-size: 13px; color:#a5a5a5;" id="iS"></i>
                    </div>
                    <div class="col-md-6 text-left copy">
                        <p>Copyright &copy; 2018 MTs AL IKHLAS.</p>
                    </div>
                    <div class="col-md-6 text-right dm">
                        <ul id="downMenu">
                            <li class="active"><a href="#home">Home</a></li>
                            <li><a href="#about">Guru</a></li>
                            <li><a href="#project1">Galery</a></li>
                            <li><a href="#news">Artikel</a></li>
                            
                            <li class="last"><a href="#contact">Contact</a></li>
                            <!--li><a href="#features">Features</a></li-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>      
        
        
    <script src="{{asset('assets/user/js/jquery.prettyPhoto.js')}}" type="text/javascript" charset="utf-8"></script>
    <script src="{{asset('assets/user/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/user/js/jquery.slicknav.js')}}"></script>
    <script>
            $(document).ready(function(){
            $(".bhide").click(function(){
                $(".hideObj").slideDown();
                $(this).hide(); //.attr()
                return false;
            });
            $(".bhide2").click(function(){
                $(".container.hideObj2").slideDown();
                $(this).hide(); // .attr()
                return false;
            });
                
            $('.heart').mouseover(function(){
                    $(this).find('i').removeClass('fa-heart-o').addClass('fa-heart');
                }).mouseout(function(){
                    $(this).find('i').removeClass('fa-heart').addClass('fa-heart-o');
                });
                
                function sdf_FTS(_number,_decimal,_separator)
                {
                var decimal=(typeof(_decimal)!='undefined')?_decimal:2;
                var separator=(typeof(_separator)!='undefined')?_separator:'';
                var r=parseFloat(_number)
                var exp10=Math.pow(10,decimal);
                r=Math.round(r*exp10)/exp10;
                rr=Number(r).toFixed(decimal).toString().split('.');
                b=rr[0].replace(/(\d{1,3}(?=(\d{3})+(?:\.\d|\b)))/g,"\$1"+separator);
                r=(rr[1]?b+'.'+rr[1]:b);

                return r;
}
                
            setTimeout(function(){
                    $('#counter').text('0');
                    $('#counter1').text('0');
                    $('#counter2').text('0');
                    setInterval(function(){
                        
                        var curval=parseInt($('#counter').text());
                        var curval1=parseInt($('#counter1').text().replace(' ',''));
                        var curval2=parseInt($('#counter2').text());
                        if(curval<=707){
                            $('#counter').text(curval+1);
                        }
                        if(curval1<=12280){
                            $('#counter1').text(sdf_FTS((curval1+20),0,' '));
                        }
                        if(curval2<=245){
                            $('#counter2').text(curval2+1);
                        }
                    }, 2);
                    
                }, 500);
            });
    </script>
    <script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#menu').slicknav();
        
    });
    </script>
    
    <script type="text/javascript">
    $(document).ready(function(){
       
        var $menu = $("#menuF");
            
        $(window).scroll(function(){
            if ( $(this).scrollTop() > 100 && $menu.hasClass("default") ){
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("default")
                           .addClass("fixed transbg")
                           .fadeIn('fast');
                });
            } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("fixed transbg")
                           .addClass("default")
                           .fadeIn('fast');
                });
            }
        });
    });
    //jQuery
    </script>
    <script>
        /*menu*/
        function calculateScroll() {
            var contentTop      =   [];
            var contentBottom   =   [];
            var winTop      =   $(window).scrollTop();
            var rangeTop    =   200;
            var rangeBottom =   500;
            $('.navmenu').find('a').each(function(){
                contentTop.push( $( $(this).attr('href') ).offset().top );
                contentBottom.push( $( $(this).attr('href') ).offset().top + $( $(this).attr('href') ).height() );
            })
            $.each( contentTop, function(i){
                if ( winTop > contentTop[i] - rangeTop && winTop < contentBottom[i] - rangeBottom ){
                    $('.navmenu li')
                    .removeClass('active')
                    .eq(i).addClass('active');              
                }
            })
        };
        
        $(document).ready(function(){
            calculateScroll();
            $(window).scroll(function(event) {
                calculateScroll();
            });
            $('.navmenu ul li a').click(function() {  
                $('html, body').animate({scrollTop: $(this.hash).offset().top - 80}, 800);
                return false;
            });
        });     
    </script>   
    <script type="text/javascript" charset="utf-8">

        jQuery(document).ready(function(){
            jQuery(".pretty a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true, social_tools: ''});
            
        });
    </script>

 <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b4d428691379020b95eebf4/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  
    </body>
    
</html>
