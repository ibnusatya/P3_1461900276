<form action="{{route('kamar0276.store')}}" method="post">
    @csrf
    id kamar<input type="text" name="id_kamar">
    id pasien<input type="text" name="id_pasien">
    id dokter<input type="text" name="id_dokter">
    <button type="submit">Simpan</button>
</form> 