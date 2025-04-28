@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="section-1">
            <img src="{{asset('assets/images/text_rsu.png')}}" alt="text_rabbani_school" width="60%" >

            <div class="mt-3">
                {{-- <button class="btn-mulai"> <b> Ayo Mulai </b> </button> --}}
            </div>

            <img src="{{asset('assets/images/cover.png')}}" alt="cover" width="100%" >
            
            <div class="d-flex">
                <div class="card-1">
                    <div class="d-flex" style="justify-content: space-between">
                        <img src="{{asset('assets/images/m_rifki.png')}}" alt="p_m_rifki" width="15%" >
                        <img src="{{asset('assets/images/5_star.png')}}" alt="5_star" width="30%" height="45%" >
                    </div>

                    <h6 class="mb-1 mt-2" style="width: 70%"> Dr. H. Mochamad Rifki Romdhoni, S.Ag., M.M.Pd </h6>
                    <p class="mb-2" style="font-size: 10px"> <i> Tim Penguji Kemenag </i> </p>
                    <p style="text-align: justify; font-size: 13px"> “Alhamdulillah Untuk sekolah Rabbani hasil penilaian kami terkait dengan <b>hafalan qur'an sangat memuaskan </b> dan di atas standar, 
                        terlihat bukti keberhasilan bapak ibu <b>guru pembimbing tahfidz</b> di sekolah rabbani berhasil membimbing anak-anaknya.” 
                    </p>
                </div>
                <div class="" style="width:30%">
                    <img src="{{asset('assets/images/card_3k.png')}}" alt="card_3k" width="120" >
                    <img src="{{asset('assets/images/hand_hold_quran.png')}}" alt="icon_hand_quran" width="100" >
                </div>
            </div>
            <div class="d-flex" style="align-items: center">
                <img src="{{asset('assets/images/innovate_icon.png')}}" alt="cover" width="25%" >

                <div class="card-2">
                    <div class="d-flex" style="justify-content: space-between">
                        <img src="{{asset('assets/images/bambang_ariyanto.png')}}" alt="bambang_ariyanto" width="15%" >
                        <img src="{{asset('assets/images/5_star.png')}}" alt="5_star" width="30%" height="45%" >
                    </div>

                    <h6 class="mb-1 mt-2" style="width: 70%"> Bambang Ariyanto </h6>
                    <p class="mb-2" style="font-size: 10px"> <i> Kepala Bidang PPSD Dinas Pendidikan Kota Bandung </i> </p>
                    <p style="text-align: justify; font-size: 13px"> “Saya tidak bisa menggambarkan dengan kata lain selain bombastis, karena sekolah rabbani 
                        <b>sudah melebihi target Kemendikbud.</b> Dari banyak sekolah yang mengundang saya, baru kali ini <b>saya merintihkan air mata.</b>” 
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="d-flex">
            <h3 style="margin-left: 1rem"> Ucap <b style="color: #30BAFF"> 3000 orang </b> lebih tentang Sekolah Rabbani </h3>
            <img src="{{asset('assets/images/icon_basket.png')}}" alt="5_star" width="120" >
        </div>
    </div>

    <div class="center">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe src="https://www.youtube.com/embed/WQD-hasjoxQ?si=F9ZgbDlG3gCCjBcJ?autoplay=1"  allow="autoplay" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>

    <div class="container">
        <p style="font-size: 13px"> Oleh karena itu, <b>Sekolah Rabbani</b> menjadi tempat terbaik tumbuhnya generasi shalih dan cerdas. </p>
    </div>

    <div class="d-flex" style="align-items: center">
        <img src="{{asset('assets/images/image_sd_cover.png')}}" alt="sd_cover" width="50%" >
        <div class="mt-2">
            <p class="mt-3" style="font-size: 13px"> Gimana? Mau ikut ucapin buat Sekolah Rabbani juga? </p>
            <h4 style="color: #E21387"> <b> Hmmm.. <br>Yakin ada Sekolah se-Seru ini? </b> </h4>
            <p class="mt-3" style="font-size: 13px"> Coba Ayah/Bunda lihat deh video dibawah yang satu ini. </p>
        </div>
    </div>

    <div class="container">
        <div class="center">
            <h2> <b> Program <span style="color: #30BAFF"> Unggulan </span> </b></h2>
            <div class="embed-responsive-short embed-responsive-16by9">
                <iframe
                    src="https://www.youtube.com/embed/TtNjWS4iaRw?si=neEcCs7O6_4obRZk?autoplay=1"
                    title="YouTube video player"
                    frameborder="0"
                    allow="autoplay"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
            </div>

            <p class="container" style="text-align: justify; font-size:14px"> Nah gimana? sudah liat kan videonya. Banyak lho program kegiatan untuk anak mengembangkan stimulasi sejak dini. 
                Jangan lama-lama yaa...
            </p>
        </div>
    </div>

    <div class="section-4">
        
        <img class="btn-daftar" src="{{asset('assets/images/btn-daftar.png')}}" onclick="daftar()" alt="btn_daftar" width="40%" >
        <img class="icon-toga" src="{{asset('assets/images/icon_toga.png')}}" alt="icon_toga" width="25%" >
        <img class="icon-cloud-1" src="{{asset('assets/images/icon_cloud.png')}}" alt="cloud-1" width="23%" >
        <img class="icon-cloud-2" src="{{asset('assets/images/icon_cloud_2.png')}}" alt="cloud-2" width="18%" >
        <img class="icon-toga-2" src="{{asset('assets/images/icon_toga.png')}}" alt="icon_toga" width="25%" >
        

        <div class="container">
            <h1> <b> Kalau Ayah/Bunda sudah yakin, boleh langsung <span style="color:#FF3EAA"> daftar aja!! </span> </b> </h1>

            <div class="frame mt-5">
                <img class="center zoom" src="{{asset('assets/images/siswi_cover.png')}}" alt="siswi_cover" width="100%" >
            </div>

        </div>

        <h3> <b> Ayo Ayah/Bunda sekolahkan anaknya di sini!! </b> </h3>

        <div class="keunggulan mt-3" style="font-size: 13px">
            <div class="d-flex" style="align-items: center">
                <img src="{{asset('assets/images/icon_book.png')}}" alt="book" width="8%" >
                <span class="mx-2"> Sekolah yang berfokus mencetak para penghafal Al-Qur’an, pengusaha, dan pemimpin </span>
            </div>
            <div class="d-flex mt-3" style="align-items: center">
                <img src="{{asset('assets/images/icon_piala.png')}}" alt="piala" width="8%" >
                <span class="mx-2"> Telah menorehkan 300++ prestasi </span>
            </div>
            <div class="d-flex mt-3" style="align-items: center">
                <img src="{{asset('assets/images/icon_ekskul.png')}}" alt="ekskul" width="8%" >
                <span class="mx-2"> Memiliki Ekskul Wajib (Berenang, Memanah, dan Berkuda) </span>
            </div>
        </div>
    </div>

    <div class="section-5">
        <div class="container">
            <div>
                <div class="mt-3 text-sec-5">
                    <p class="mb-2" style="font-size: 11px"> Ehh.. Ayah/Bunda masih penasaran ya sama <b> Sekolah Rabbani? </b> </p>
                    <h2 class="mt-2 txt-nyaman" > Ini yang buat anak <span style="color: #FF3EAA"> gak mau pulang </span> dari Sekolah!! </h2>
                </div>
                <img class="img-sec-5" src="{{asset('assets/images/cover_nyaman.png')}}" alt="cover_5" width="60%" >
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <h1 class="center"> <b> <span style="color: #30BAFF"> Fasilitas </span>  Nyaman </b> </h1>
        <div class="d-flex justify-content-center">
            <img src="{{asset('assets/images/fasil_kelas.png')}}" alt="kelas" width="45%" >
            <img src="{{asset('assets/images/fasil_lift.png')}}" alt="lift"  width="45%" >
        </div>
        <div class=" mt-3 d-flex justify-content-center">
            <img src="{{asset('assets/images/fasil_labkom.png')}}" alt="kelas" width="45%" >
            <img src="{{asset('assets/images/fasil_playground.png')}}" alt="lift"  width="45%" >
        </div>

        <p class="mt-4 px-4" style="font-size: 12px; text-align:justify"> Ga betah gimana coba? Fasilitas lengkap, bersih, dan nyaman yang 
            menjadi anak-anak semakin semangat untuk belajarnya. 
        </p>

        <h3 class="mt-4 px-4"> <b>Eitss.. Gak hanya itu lho!! </b> </h3>
        <p class="px-4" style="font-size: 12px"> Insyaa Allah anak Ayah/Bunda akan menjadi salah satunya yang berprestasi seperti : </p>

        
    </div>
    <img class="center" src="{{asset('assets/images/cover_prestasi.png')}}" alt="prestasi"  width="100%" >

    <div class="section-6">
        <div class="d-flex px-3" style="align-items: center">
            <img src="{{asset('assets/images/icon_champions.png')}}" alt="champions"  width="40%" >
            <div class="center text-white">
                <h1 class="counter"> </h1>
                <p> <b> Prestasi </b> Anak Rabbani </p>
            </div>
        </div>
    </div>

    <div class="section-7">
        <div class="container ">
            <h1 class="txt-ml-2" style="width: 67%;"> <b> Lokasi Sekolah Rabbani <span style="color: #FF3EAA"> Mudah dijangkau </span> oleh Ayah/Bunda </b> </h1>
            <span class="txt-ml-2" style="font-size: 12px" > Yuk kita lihat Sekolah Rabbani ada di mana saja! </span>
        </div>
        <img class="center" src="{{asset('assets/images/lokasi_sekolah.png')}}" alt="lokasi_sekolah"  width="100%" >
    </div>

    <div class="section-8 mt-3">
        <div class="container mb-3">
            <h1 class="txt-ml-2" style="width: 80%;"> <b> Ingin <span style="color: #FF3EAA"> merasakan asiknya </span> belajar di Sekolah Rabbani? </b> </h1>

            <div class="d-flex" style="align-items: center">
                <img class="bg-cloud" src="{{asset('assets/images/siswi_cover_2.png')}}" alt="lokasi_sekolah"  width="40%" >
                <span style="font-size: 11px; text-align:justify"> Ayah/Bunda masih perlu bukti? Kami membuka sesi trial class secara GRATIS dan SETIAP HARI, lho. 
                    Jadi, Ayah/Bunda bisa melihat dan merasakan pembelajaran serta suasana sekolah di sekolah kami secara langsung. 
                    <br><br>
                    Ayah/Bunda mau ikut programnya? Langsung daftar disini ya!
                </span>
            </div>

            <button class="center my-3 text-white btn-trial-class" onclick="daftar()" style="text-decoration: none"> IKUTI TRIAL CLASSNYA  </button>
            
            <h4 class="txt-ml-2 mt-4" style="width: 90%;"> <b> Disini Ayah/Bunda juga bisa <span style="color: #30BAFF"> mengawal perkembangan anak sambil belajar, </span> melalui program-program </b> </h4>
            <div class="container-program">
                <div class="center mx-3">
                    <img src="{{asset('assets/images/qp.png')}}" alt="qp"  width="100%" >
                    <p class="center title-program" style="background-color: #FFD900" > <b> Quranic Parenting </b> </p>
                </div>
            </div>
            <div class="container-program">
                <div class="center mx-3">
                    <img src="{{asset('assets/images/hv.png')}}" alt="hv"  width="100%" >
                    <p class="center title-program-2" style="background-color: #DDB9FF" > <b> Home Visit </b> </p>
                </div>
            </div>
            <div class="container-program">
                <div class="center mx-3">
                    <img src="{{asset('assets/images/kt.png')}}" alt="kt"  width="100%" >
                    <p class="center title-program-3" style="background-color: #9CDEFF" > <b> Kajian Tahsin </b> </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section-6 text-white">
        <div class="container">
            <h6 class="txt-ml-2"> Penutupan Pendaftaran </h6>
            <h3 class="txt-ml-2"> <b> Gelombang 2 </b> </h3>

            <div class="d-flex mt-4" style="justify-content: space-evenly">
                <div>
                    <h1 class="center" id="cd-hours">  </h1>
                    <p> HOURS </p>
                </div>
                <div>
                    <h1 class="center" id="cd-minutes"> </h1>
                    <p> MINUTES </p>
                </div>
                <div>
                    <h1 class="center" id="cd-seconds">  </h1>
                    <p> SECONDS </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section-9 mt-3">
        <div class="container">
            <div class="d-flex mb-3" style="align-items: center">
                <h3 style="width: 70%"> <b> Apa yang <span style="color: #30BAFF"> Dikatakan </span> Orangtua terhadap Sekolah Rabbani </b></h3>
                <div class="center">
                    <i style="width: 15%; color: #30BAFF" class="fa-solid fa-circle-chevron-left fa-lg"></i>
                </div>
                <div class="center">
                    <i style="width: 15%; color: #30BAFF" class="fa-solid fa-circle-chevron-right fa-lg"></i>
                </div>
            </div>

            <div class="row-card">
                @foreach ($testimoni as $item)
                    <div class="card card-testi shadow-sm">
                        <div class="card-header px-2">
                            <div class="d-flex" style="align-items:center">
                                <img src="{{asset($item->image)}}" alt="pp_{{$item->name}}"  width="17%" height="auto" >
                                <div style="margin-left: 4px">
                                    <p class="mb-0" style="font-size: 10px"> <b> {{$item->name}} </b> </p>
                                    <p class="mb-0" style="font-size: 9px; color:#30BAFF"> {{$item->position}} </p>
                                </div>
                            </div>
                        </div>

                        <div class="card-body px-1" style="font-size: 8px">
                            <span> {{$item->comments}}
                            </span>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="section-10" id="ppdb_daftar">
        <div class="bg-kelas">
            <img src="{{asset('assets/images/cover-kelas.jpg')}}" alt="cover-kelas"  width="100%" style="height: 531px" >
        </div>
            
        <div class="center text-kelas mt-3">
            <h3 class="p-3"> <b> Ayo Bergabung Bersama Sekolah Rabbani! Tempat Tumbuhnya Generasi Qurani dan Berprestasi! </b> </h3>
            <h5 class="p-3 mx-3"> Daftar Sekarang & Dapatkan Info Lengkapnya! </h5>

            <a href="https://sekolahrabbani.sch.id/pendaftaran" target="_blank" style="text-decoration: none; color: black" class="center btn-daftar-sekolah my-3"> DAFTAR <b> SEKOLAH </b> </a>
            <a href="#" style="text-decoration: none; color: black" class="center btn-trial"> DAFTAR <b> TRIAL CLASS </b> </a>
            <a href="#" style="text-decoration: none; color: black" class="center btn-kunjungi my-3"> <b> KUNJUNGI </b> KAMI </a>

        </div>
    </div>

    <div class="section-info">
        <div class="container">
            <h6 class="text-white"> Follow Our Social Media </h6>
            <div class="d-flex mt-3" style="width: 30%; justify-content:space-around">
                <a href="https://www.instagram.com/sekolahrabbaniqlp/" target="_blank" > <i class="fa-brands fa-instagram fa-xl" style="color: #D732A8"></i> </a>
                <a href="https://www.youtube.com/@SekolahRabbani" target="_blank"> <i class="fa-brands fa-youtube fa-xl" style="color: #D732A8"></i> </a>
                <a href="https://www.tiktok.com/@SekolahRabbani" target="_blank" > <i class="fa-brands fa-tiktok fa-lg" style="color: #D732A8"></i> </a>
                <a href="https://sekolahrabbani.sch.id/" target="_blank" > <i class="fa-solid fa-globe fa-lg" style="color: #D732A8"></i> </a>
            </div>

            <div class="d-grid-footer" style="width: 80%;">
                <a href="#" style="text-decoration: none; color: white"> Home </a>
                <a href="#" style="text-decoration: none; color: white"> Profile </a>
                <a href="#" style="text-decoration: none; color: white"> Kurikulum </a>
                <a href="#" style="text-decoration: none; color: white"> Karir </a>
                <a href="#" style="text-decoration: none; color: white"> Review </a>
                <a href="#" style="text-decoration: none; color: white"> Contact Us </a> 
                <a href="#" style="text-decoration: none; color: white"> PPDB </a> 
                <a href="#" style="text-decoration: none; color: white"> Email </a> 
            </div>
           
            <div class="center mt-5 text-white">
                <p style="font-size: 12px">&copy; <script>document.write(new Date().getFullYear())</script> Sekolah Rabbani. All Rights Reserved</p>
            </div>
        </div>
    </div>

    <script>
        let timer = function (date) {
            let timer = Math.round(new Date(date).getTime()/1000) - Math.round(new Date().getTime()/1000);
            let minutes, seconds;
            setInterval(function () {
                if (--timer < 0) {
                    timer = 0;
                }
                hours = parseInt((timer / 60 / 60) % 24, 10);
                minutes = parseInt((timer / 60) % 60, 10);
                seconds = parseInt(timer % 60, 10);

                hours = hours < 10 ? "0" + hours : hours;
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                document.getElementById('cd-hours').innerHTML ="<b>" + hours + "</b>";
                document.getElementById('cd-minutes').innerHTML = "<b>" + minutes + "</b>";
                document.getElementById('cd-seconds').innerHTML = "<b>" + seconds + "</b>";
            }, 1000);
        }
 
        //using the function
        const today = new Date()
        const target = new Date("Jan 5, 2030 22:30:00").getTime();
        timer(target);

        function daftar() {
            if (window.location.pathname === '/') {
                document.getElementById('ppdb_daftar').scrollIntoView();
            }
        }

    </script>
@endsection