@extends('layouts.app')
@section('section')
    <div class="pages-content pages-mitra">
        <section id="agen-mitra">
            <div class="container">
                <h3 class="fw-bold text-black text-center mb-4">
                    DAPATKAN BOLDIES MELALUI MITRA RESMI DENGAN <br class="d-none d-lg-block"> ONGKIR DAN HARGA
                    LEBIH
                    MURAH​​
                </h3>
                <div class="row justify-content-center g-3">
                    @foreach ($produks as $produk)
                        <div class="col-md-4 col-6 d-flex">
                            <div class="card card-farmvest shadow">
                                <img src="{{ asset('storage/' . $produk->thumbnail) }}" class="card-img-top"
                                    alt="{{ $produk->nama }}">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 14px;">{{ $produk->nama }}</h5>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-warning mb-2 rounded-pill w-100">Rp
                                        {{ number_format($produk->harga, 0, '.', '.') }}</button>
                                    <button class="btn btn-primary rounded-pill w-100" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Beli</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <img src="./images/map-1.png" class="w-100" alt="">
                <div class="row mb-5 justify-content-center">
                    <div class="col-md-5">
                        <p class="text-black">
                            Dapatkan Hotto melalui agen resmi terdekat dengan <strong>HARGA TERMURAH</strong> dan
                            <strong>DISKON ONGKIR</strong>
                        <ol class="text-black fw-semibold">
                            <li>Cari kota kamu</li>
                            <li>Pesan Farmvest melalui agen terdekat</li>
                            <li>Produk Dijamin Original</li>
                        </ol>
                        </p>
                    </div>
                </div>
                <div class="list-agen">
                    <h4 class="border-start border-5 px-3 ms-4 border-secondary fw-semibold text-black my-3">
                        BANTEN
                    </h4>
                    <div class="accordion accordion-flush accordion-farmvest-agen" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button
                                    class="btn btn-primary btn-lg rounded-0 fw-bold text-white w-100 text-start rounded-1 collapsed d-flex justify-content-between align-lg-items-center"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#banten1" aria-expanded="false"
                                    aria-controls="banten1">
                                    <span>
                                        Serang Banten
                                    </span>
                                    <span class="accordion-icon">
                                        <i aria-hidden="true" class="fa-fw fas fa-plus"></i>
                                    </span>
                                </button>
                            </h2>
                            <div id="banten1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="">
                                        <h5 class="mb-4"><span class="fw-bold text-black">F</span><span
                                                class="mx-2">|</span><span class="fw-semibold">Dika</span></h5>
                                        <p class="mt-4">
                                            <img src="{{ asset('boldies/images/Wa-logo-100px.webp') }}" width="33px"
                                                height="33px" alt="">
                                            085817624189
                                        </p>
                                        <a target="_blank" class="text-decoration-none"
                                            href="https://api.whatsapp.com/send?phone=6285817624189&text=Halo%20min,%20saya%20dapat%20info%20dari%20website.%20Mau%20pesan%20produk%20boldies,%20apakah%20bisa%20dibantu?">Klik
                                            untuk pesan disini</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="border-start border-5 px-3 ms-4 border-secondary fw-semibold text-black my-3">JAWA
                        BARAT
                    </h4>
                    <div class="accordion accordion-flush accordion-farmvest-agen" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button
                                    class="btn btn-primary btn-lg rounded-0 fw-bold text-white w-100 text-start rounded-1 collapsed d-flex justify-content-between align-lg-items-center"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#jawabarat1"
                                    aria-expanded="false" aria-controls="jawabarat1">
                                    <span>
                                        Bogor
                                    </span>
                                    <span class="accordion-icon">
                                        <i aria-hidden="true" class="fa-fw fas fa-plus"></i>
                                    </span>
                                </button>
                            </h2>
                            <div id="jawabarat1" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h5 class="mb-4"><span class="fw-bold text-black">F</span><span
                                            class="mx-2">|</span><span class="fw-semibold">SANDI</span></h5>
                                    <p>
                                        <img src="{{ asset('boldies/images/Wa-logo-100px.webp') }}" width="33px"
                                            height="33px" alt="">
                                        081287361524
                                    </p>
                                    <a target="_blank" class="text-decoration-none"
                                        href="https://api.whatsapp.com/send?phone=6281287361524&text=Halo%20min,%20saya%20dapat%20info%20dari%20website.%20Mau%20pesan%20produk%20boldies,%20apakah%20bisa%20dibantu?">Klik
                                        untuk pesan disini</a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button
                                    class="btn btn-primary btn-lg rounded-0 fw-bold text-white w-100 text-start rounded-1 collapsed d-flex justify-content-between align-lg-items-center"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#jawabarat2"
                                    aria-expanded="false" aria-controls="jawabarat2">
                                    <span>
                                        Depok
                                    </span>
                                    <span class="accordion-icon">
                                        <i aria-hidden="true" class="fa-fw fas fa-plus"></i>
                                    </span>
                                </button>
                            </h2>
                            <div id="jawabarat2" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h5 class="mb-4"><span class="fw-bold text-black">F</span><span
                                            class="mx-2">|</span><span class="fw-semibold">HJ. HELMI</span></h5>
                                    <a href="" class="mb-4 text-decoration-none">
                                        <img src="{{ asset('boldies/images/shopee-100px.webp') }}" width="33px"
                                            height="33px" alt="">
                                        peternaklokalmendunia
                                    </a>
                                    <p class="mt-4">
                                        <img src="{{ asset('boldies/images/Wa-logo-100px.webp') }}" width="33px"
                                            height="33px" alt="">
                                        081374432609
                                    </p>
                                    <a target="_blank" class="text-decoration-none"
                                        href="https://api.whatsapp.com/send?phone=6281374432609&text=Halo%20min,%20saya%20dapat%20info%20dari%20website.%20Mau%20pesan%20produk%20boldies,%20apakah%20bisa%20dibantu?">Klik
                                        untuk pesan disini</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="border-start border-5 px-3 ms-4 border-secondary fw-semibold text-black my-3">
                        SUMATERA BARAT
                    </h4>
                    <div class="accordion accordion-flush accordion-farmvest-agen" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button
                                    class="btn btn-primary btn-lg rounded-0 fw-bold text-white w-100 text-start rounded-1 collapsed d-flex justify-content-between align-lg-items-center"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#sumaterabarat1"
                                    aria-expanded="false" aria-controls="sumaterabarat1">
                                    <span>
                                        Sijunjung
                                    </span>
                                    <span class="accordion-icon">
                                        <i aria-hidden="true" class="fa-fw fas fa-plus"></i>
                                    </span>
                                </button>
                            </h2>
                            <div id="sumaterabarat1" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="">
                                        <h5 class="mb-4"><span class="fw-bold text-black">F</span><span
                                                class="mx-2">|</span><span class="fw-semibold">Mira</span></h5>
                                        <p class="mt-4">
                                            <img src="{{ asset('boldies/images/Wa-logo-100px.webp') }}" width="33px"
                                                height="33px" alt="">
                                            082173048741
                                        </p>
                                        <a target="_blank" class="text-decoration-none"
                                            href="https://api.whatsapp.com/send?phone=6282173048741&text=Halo%20min,%20saya%20dapat%20info%20dari%20website.%20Mau%20pesan%20produk%20boldies,%20apakah%20bisa%20dibantu?">Klik
                                            untuk pesan disini</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button
                                    class="btn btn-primary btn-lg rounded-0 fw-bold text-white w-100 text-start rounded-1 collapsed d-flex justify-content-between"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#sumaterabarat2"
                                    aria-expanded="false" aria-controls="sumaterabarat2">
                                    <span>
                                        Padang
                                    </span>
                                    <span class="accordion-icon">
                                        <i aria-hidden="true" class="fa-fw fas fa-plus"></i>
                                    </span>
                                </button>
                            </h2>
                            <div id="sumaterabarat2" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="">
                                        <h5 class="mb-4"><span class="fw-bold text-black">F</span><span
                                                class="mx-2">|</span><span class="fw-semibold">Rika</span></h5>
                                        <a href="" class="mb-4 text-decoration-none">
                                            <img src=" {{ asset('boldies/images/shopee-100px.webp"') }} width="33px"
                                                height="33px" alt="">
                                            Farmvest_Padang
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="apa-itu">
            <div class="container">
                <h3 class="text-black text-center fw-bold mb-4">
                    Apa itu Farmvest?<br class="d-none d-lg-block">
                    Tonton penjelasannya melalui<br class="d-none d-lg-block">
                    video di bawah ini
                </h3>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/hQSGmkH-Rao?si=Yg3sZxwcyxcEDrej&amp;controls=0"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <h4 class="text-center text-black fw-bold mb-4">Butuh Bantuan?</h4>
                    <div class="text-center">
                        <a href="" class="btn btn-success py-3 px-4 text-white"><i class="fab fa-whatsapp"></i>
                            Chat Admin</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
