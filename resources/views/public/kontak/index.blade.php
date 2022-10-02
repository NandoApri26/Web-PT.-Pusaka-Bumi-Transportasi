@extends('template-web.main')
@section('title', 'PT. Pusaka Bumi Transportasi')

@section('content')
    <div id="main">
        <!-- Awal Jumbotron -->
        <section id="Rekruitment-Jumbotron">
            <div class="jumbotron mt-5" style="background-image: url(./../template-frontend/assets/hubungi-kami.jpg);">
                <div class="container Judul text-center">
                    <h3>HUBUNGI KAMI <br>
                        PT. PUSAKA BUMI TRANSPORTASI
                    </h3>
                </div>
            </div>
        </section>
        <!-- Akhir Jumbotron -->

        <!-- Awal Hubungi Kami -->
        <section id="Hubungi-Kami">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-5">
                        <div class="row">
                            <div class="col-lg-1 col-sm-1 mt-1">
                                <i class="fas fa-map-marker-alt" style="font-size: 22px;"></i>
                            </div>
                            <div class="col-lg-11 col-sm-11">
                                <h4 style="font-family: concert one;">Lokasi</h4>
                                <p style="font-family: nouton;">Jl. Pramuka IV No. 105 Kel. Pasar II Muara Enim, Sumatera
                                    Selatan 31315 Indonesia
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 ml-lg-3 ml-sm-3 mr-lg-3 mr-sm-3 mb-4">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.6653375735655!2d103.77449028397604!3d-3.6634756978589644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e39f64d2462654b%3A0x4df5406e1af61f69!2sLKP%20Semesta%20Guna!5e0!3m2!1sid!2sid!4v1646705090378!5m2!1sid!2sid"
                                    width="100%" height="250" style="border:0;" allowfullscreen=""
                                    loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-7">
                        <div class="row ">
                            <div class="col">
                                <form action="">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <input name="" type="text" class="form-control" id="nama"
                                                placeholder="Masukkan Nama">
                                        </div>
                                        <div class="col-lg-7">
                                            <input name="" type="email" class="form-control" id="email"
                                                placeholder="Loream@gmail.com">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 ">
                                            <input name="" type="text" class="form-control" id="subject"
                                                placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input name="" type="number" class="form-control" id="subject"
                                                placeholder="+ 62 812-123-456">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input name="" type="text" class="form-control" id="subject"
                                                placeholder="Masukkan Pesan">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Hubungi Kami-->
    </div>
@endsection
