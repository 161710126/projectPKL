@extends('layouts.user')
@section('content')
<br>
<br>
<br>
<div class ="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class ="card">
        <div class="card-header"></div>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="BS/favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="BS/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="BS/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
        <center>
          <h1>Selamat datang</h1>
            <img src="mts.png" width="50px" height="200px">
                           <center> Dengan Syukur kami panjatkan kehadirat Illahi Rabbi, berkat Rahmat dan Inayah-nya kami mampuh menyusun Kurikulum Tingkat Satuan Pendidikan (KTSP) Madrasah Tsanawiyah Al Ikhlas Keban II sebagai kajian bersama dalam forum rapat dinas Dewan Guru, Staf Karyawan Tata Usaha dan Komite Madrasah dalam rangkamencapai tujuan pendidikan yangtelahditetapkan.
Sebagaimana ketentuan dalam Peraturan Pemerintah Nomor 19 Tahun 2005 Standar Nasional Pendidikan yang diubah dengan Peraturan Pemerintah Nomor 32 tahun 2013, setiap madrasah mengembangkan kurikulum berdasarkan Standar Isi (SI) dan Standar Kompetensi Lulusan (SKL) dan berpedomankepada panduan yangditetapkan oleh BadanStandar Nasional Pendidikan (BSNP).
Pengembangan Kurikulum MTs. Al Ikhlas Keban II ini mengacu pada standar Nasional Pendidikan untuk menjamin pencapaian tujuan pendidikan nasional. Standar nasional pendidikan tersebut meliputi standar isi, proses, kompetensi lulusan,pendidik dan tenaga kependidikan, sarana prasarana, pengelolaan, pembiayaan, dan standar penilaian pendidikan. Oleh sebab itu kurikulum ini disusun untuk memungkinkan penyesuaian programpendidikan dengankebutuhan danpotensi yang adadi MTs. Al Ikhlas KebanII.
Dokumen ini disusun sebagai sebuah kurikulum yang berisi tentang gambaran umum mengenai pedoman penyelenggaraan pendidikan dalam menentukan berbagai kebijakan dan Kegiatan Belajar Mengajar agar terencana, terarah dan tepat tujuan, khususnya dalam menjembatani peserta didik meletakan dasar Imtak dan Imtek, akhlak mulia, kecerdasan, pengetahuan, kepribadian, serta keterampilan untuk hidup mandiri dan mengikuti pendidikanlebih lanjut.
Pada kesempatan ini pula Kepala MTs Al Ikhlas Keban II menyampaikan ucapan terima kasih yang setinggi tinginya ungkapan rasa yang sedalam dalamnya atas motivasi, pengarahan, dan bimbingan serta petunjuknya kepada: 1. Bapak/Ibu DewanGuru, KaryawandanKomiteMadrasah. 2. BapakKetuaYayasan Pendidikan Islam Al Ikhlas SangaDesa. 3. Semua pihak yang telah membantu demi terwujudnya penyusunan Kurikulum Tingkat Satuan Pendidikan (KTSP) pada kelas VIII dan IX sedangkan kelas VII Tahun Ajaran 2017/2018 telah menggunakan Kurikulum 13sesuai dengan SKDirjenpendis Kementerian Agama RI.
Tiada gading yag tidak retak, kritik dan saran sangat diharapkan demi penyempurnaan Kurikulum Tingkat Satuan Pendidikan (KTSP) pada masa selanjutya, Oleh sebab itu, segala kritik, saran, dan masukan yang konstruktif dari berbagai pihak yang kompeten sangat kami harapkan, akhirya hanya kepada Allah jualah memohon Ridho dan Taufiq-nya semoga bermanfaat bagi proses pembelajaran di MTs Al Ikhlas Keban II, Aamin. NgulakI Juli 2017 KepalaMTs AlIkhlas KebanII,
Mahyudin,S.Pd.I</center></center><br><br><br>

<h1>Data Guru</h1>
  @foreach($gurus1 as $data)
                   <h2>
        <div class="container marketing">
        <div class="row">
        <div class="col-lg-4">
            <center>            
                        <center><img src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" style="max-height: 125px;max-width: 125px;margin-top: 7px"></center>
                        <br>
                        <h4>{{ $data->nama}}</h4>
                        <h4>{{ $data->jabatan }}</h4>
                         </div><!-- /.col-lg-4 -->
</center>
                      @endforeach 
                      <br><br>

                      <h4>Data Eskul</h4>
                      @foreach($eskuls1 as $data)
                   <h2>
        <div class="container marketing">
        <div class="row">
        <div class="col-lg-4">
            <center>            
                        <center><img src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" style="max-height: 125px;max-width: 125px;margin-top: 7px"></center>
                        <br>
                        <h4>{{ $data->nama}}</h4>
                        <h4>{{ $data->content}}</h4>
                         </div><!-- /.col-lg-4 -->
</center>
                      @endforeach   
              


<img src="mts.png" width="50px" height="200px">
             
                 <div class="float-right d-none d-sm-inline-block">
      <b>
                Visi :<h2><p>"Meningkatkan Prestasi Siswa dalam bidang Imtek dan imtaq serta berakhlakul Karimah" </p></h2>



       Misi:<br>
                           1.Melaksanakan pembelajaran dan bimbingan secara efektif untuk mengoptimalkan potensi siswa<br>
                           2.Mengciptakan suasana yang kondusif untuk keefektipan seluruh kegiatan madrasah<br>
                           3.Mengembangkan budaya kompeletif bagi peningkatan prestasi siswa<br>
                           4.Menumbuhkembangkan penghayatan dan pengamalan terhadap Agama untuk membentuk budi pekerti yang baik


              </b>
              </div>
              <br><br><br><br><br><br>




         
           <center><h3>Lokasi</h3></center>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3960.373570544534!2d107.5898657!3d-6.965181799999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8deccecb6f1%3A0x658cc60fbe5017b9!2sSMK+Assalaam+Bandung!5e0!3m2!1sid!2sid!4v1531424640657" width="1200" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></iframe>

             <footer>
       <div class="container">
        <br>
        <br>
        <br>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
   <h3>SMK Assalaam</h3><br>
<h4>SMK Assalaam adalah bagian dari Yayasan Assalaam yang mempersiapkan siswa untuk siap kerja dengan keterampilan & profesional di bidang industri (sekolah berbasis industri) dan kewirausahaan.</h4>
</div>

        <div class="col-md-4">


<h3>Unit Pendidikan</h3><br>
<h4>SMK Anda (Berada Disini)<br>
SMA<br>
SMP<br>
MTS<br>
SD<br>
PG TK<br>
TPQ<br>
</h4>
</div>

        <div class="col-md-4">
<h3>Contact with us</h3><br>
<h4>022 5420-220<br>
info@smkassalaambandung.sch.id</h4>
</div></div>
 </footer>
        </div>
      </div>
    </div>
  </div>  
</div>
@endsection



