<x-web.layouts>
    <x-slot name="title">Home</x-slot>
    <x-slot name="html">
        <section class="container-fluid vh-100" id="home">
            <div class="row justify-content-end vh-100">
                <div class="col-md-6 my-auto">
                    <h5 class="fw-bold mb-4" style="color: #81BF52">CHECK EARLIER, PREVENT EARLIER</h5>
                    <h1 class="fs-tagline">Take care of your body and it will take care of you</h1>
                    <p>Temukan dokter spesialis sesuai dengan kebutuhan anda kapanpun <br>Dokter Ilham Maulana
                        menyembuhkan
                        100 penyakit . Amin!</p>
                    <button class="btn btn-theme text-white me-3">Do health check right now</button>
                    <button class="btn btn-theme-outline">Learn More</button>
                </div>
            </div>
        </section>
        <section class="container" id="card-sec">
            <div class="row justify-content-center align-content-end text-center">
                <div class="col-md-3">
                    <img src={{ asset('assets/images/1.png') }} alt="" width="250">
                    <h4 class="fw-bold">Pelayanan mudah,<br> dengan aplikasi</h4>
                    <p class="text-muted">Cari dan temukan kebutuhan medis Anda dengan tepat.</p>
                </div>
                <div class="col-md-3 mt-5">
                    <img src={{ asset('assets/images/2.png') }} alt="" width="250">
                    <h4 class="fw-bold mt-4">Konsultasi dengan <br> Dokter spesialis</h4>
                    <p class="text-muted">Temukan dokter spesialis sesuai dengan kebutuhan anda kapanpun</p>
                </div>
                <div class="col-md-3">
                    <img src={{ asset('assets/images/3.png') }} alt="" width="250">
                    <h4 class="fw-bold mt-3">Promo khusus untuk Semua tes Covid-19</h4>
                    <p class="text-muted">Dapatkan penawaran menarik untuk Anda yang membutuhkan tes covid-19</p>
                </div>
            </div>
        </section>
        <div class="gradient w-100 py-4">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-md-6 text-white">
                        <h5 class="fw-bold">Lebih ringkas dengan aplikasi</h5>
                        <p class="text-white-50">Download aplikasi Helix Laboratorium untuk pengalaman yang lebih
                            ringkas</p>
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <a href="https://github.com/ilhammmaulana" class="ms-auto">
                            <img src={{ asset('assets/images/plays.png') }} alt="" height="50">
                        </a>
                        <a href="https://github.com/ilhammmaulana" class="ms-2">
                            <img src={{ asset('assets/images/apps.png') }} alt="" height="50">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-web.layouts>