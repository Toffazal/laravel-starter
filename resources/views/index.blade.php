@extends('layouts.template')
@section('content')
    <!-- Tampilan Utama -->
    <main id="main" class="main padding">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="poppins fw-bold mt-3 mb-3 ps-3" style="border-left: 4px solid #fff32b;">Eegyo SIMS</h1>
                <h1 id="jalan" class="poppins fw-bold mt-3 mb-3">Sistem Informasi Management Sekolah</h1>
                <p class="poppins fs-4 mb-4 wow fadeInUp">Eegyo SIMS dirancang untuk menyederhanakan tata kelola data
                    dan
                    proses birokrasi sekolah menjadi pengalaman yang efisien, efektif, dan terpadu secara digital. Sudah
                    dipercaya oleh <a href="#sekolah" class="text-decoration-none text-dark fw-bold"
                        style="border-bottom: 3px solid #fff32b;">10+ Sekolah</a> di Indonesia!</p>

                <p class="fs-5 sans wow bounce" data-wow-delay="2s" data-wow-iteration="2">Anda bisa memulai dengan
                    mencoba <a
                        href="https://wa.me/6289613325456?text=Halo, Saya ingin mendaftarkan sekolah saya dalam program Trial Eegyo SIMS"
                        class="bg-kuning px-2 text-decoration-none text-dark" onclick="fbq('track', 'Lead');">Trial
                        SIMS</a></p>
            </div>
        </div>
    </main>
    <!-- END Tampilan Utama -->
@endsection
