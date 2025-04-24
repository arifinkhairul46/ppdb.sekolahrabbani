@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="section-1">
            <img src="{{asset('assets/images/text_rsu.png')}}" alt="text_rabbani_school" width="60%" >

            <div class="mt-3">
                <button class="btn-mulai"> <b> Ayo Mulai </b> </button>
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
            <div class="d-flex">
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

        <div class="container">
            <div class="d-flex">
                <h2> Ucap <b style="color: #30BAFF"> 3000 orang </b> lebih tentang Sekolah Rabbani </h2>
                <img src="{{asset('assets/images/icon_basket.png')}}" alt="5_star" width="120" >
            </div>
        </div>
    </div>

    <div class="center">
        <h1> Vidio </h1>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="400" height="315" src="https://www.youtube.com/embed/WQD-hasjoxQ?si=F9ZgbDlG3gCCjBcJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>

    

    <div class="container">
        <p> Oleh karena itu, <b>Sekolah Rabbani</b> menjadi tempat terbaik tumbuhnya generasi shalih dan cerdas. </p>
    </div>

    <div class="d-flex">
        <img src="{{asset('assets/images/image_sd_cover.png')}}" alt="sd_cover" width="50%" >
        <div class="mt-2">
            <p class="mt-3"> Gimana? Mau ikut ucapin buat Sekolah Rabbani juga? </p>
            <h4 style="color: #E21387"> <b> Hmmm.. <br>Yakin ada Sekolah se-Seru ini? </b> </h4>
            <p class="mt-3"> Coba Ayah/Bunda lihat deh video dibawah yang satu ini. </p>
        </div>
    </div>

    <div class="center">
        <h2> <b> Program <span style="color: #30BAFF"> Unggulan </span> </b></h2>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="400" height="560"
                src="https://www.youtube.com/embed/TtNjWS4iaRw?si=neEcCs7O6_4obRZk"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
            </iframe>
        </div>

        <p class="container" style="text-align: justify; font-size:14px"> Nah gimana? sudah liat kan videonya. Banyak lho program kegiatan untuk anak mengembangkan stimulasi sejak dini. 
            Jangan lama-lama yaa...
        </p>
    </div>

    <div class="section-4">
        <div class="container">
            <h1> <b> Kalau Ayah/Bunda sudah yakin, boleh langsung <span style="color:#FF3EAA"> daftar aja!! </span> </b> </h1>

            <div class="frame">
                <img class="mt-3 center zoom" src="{{asset('assets/images/siswi_cover.png')}}" alt="sd_cover" width="100%" >
            </div>

            {{-- <div class="btn-daftar">
                <img src="{{asset('assets/images/btn-daftar.png')}}" alt="btn_daftar" width="30%" >
            </div> --}}
        </div>

        <h3> <b> Ayo Ayah/Bunda sekolahkan anaknya di sini!! </b> </h3>

        <div class="keunggulan mt-3">
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
            <div class="d-inline-flex">
                <span class="mt-5" style="font-size: 12px"> Ehh.. Ayah/Bunda masih penasaran ya sama Sekolah Rabbani? </span>
                <img src="{{asset('assets/images/cover_nyaman.png')}}" alt="cover_5" width="60%" >
            </div>
        </div>
    </div>


@endsection