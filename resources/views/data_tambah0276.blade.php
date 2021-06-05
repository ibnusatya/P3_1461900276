<form action="{{ route('data_tambah0258') }}" method="post">
<form action="{{ route('data.store') }}" method="post">
    @csrf
    ID: <input type="text" name='id_pasien'>
    Nama: <input type="text" name='nama_pasien'>
    Alamat: <input type="text" name='alamat_pasien'>
    <button type="submit">Simpan</button>
