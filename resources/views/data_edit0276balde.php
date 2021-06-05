<form action="{{ route('data/' . $pasien->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="patch">
    ID: <input type="text" name='id_pasien' value="{{$pasien->id}}">
    Nama: <input type="text" name='nama_pasien' value="{{$pasien->nama}}">
    Alamat: <input type="text" name='alamat_pasien' value="{{$pasien->alamat}}">
    <button type="submit">Simpan</button>
</form> 