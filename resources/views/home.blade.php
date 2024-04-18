@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="card border-primary">
                    <div class="card-header text-bg-primary">Daftar Lapangan</div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($courts as $court)    
                                <div class="col-4 mb-2">
                                    <div class="card border-primary px-3 py-3">
                                        <h5 class="card-title">{{ $court->court_type->nama}}</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">{{ $court->nama }}</h6>
                                        <p class="card-text"><td>Rp. {{ number_format($court->harga, 2, '.', '.') }} / Jam</td></p>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-6 mb-2">
                                <div class="card border-info px-3 py-3">
                                    <h5 class="card-title">Sepatu</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Sewa</h6>
                                    <p class="card-text">Rp. 50.000 / Jam</p>
                                </div>
                            </div>
                            <div class="col-6 mb-2">
                                <div class="card border-info px-3 py-3">
                                    <h5 class="card-title">Kostum</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Sewa</h6>
                                    <p class="card-text">Rp. 45.000 / Jam</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card border-dark">
                    <div class="card-header text-bg-dark">TATA CARA SEWA LAPANGAN FUTSAL</div>
                    <div class="card-body">
                        <p>1. Klik halaman 'Daftar Booking'</p>
                        <p>2. Cek Jadwal pada halaman 'Daftar Booking'</p>
                        <p>3. Jika ingin menyewa, tekan tombol 'Booking'</p>
                        <p>4. Masukkan data</p>
                        <p>5. Jika berhasil, Anda akan diarahkan ke halaman 'Daftar Booking', kemudian tekan tombol 'Bayar'</p>
                        <p>6. Isi pembayaran sesuai nominal</p>
                        <p>7. Jika berhasil, Anda dapat mengecek pada halaman 'Riwayat Pendaftaran'</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
