<!-- Modal -->
<div class="modal fade" id="pengeluaranModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pengeluaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
            </div>

            <div class="modal-body">
                <form action="/pengeluaran/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="inputTanggal" class="">Tanggal :</label>
                        <input type="date" id="inputTanggal" class="form-control" name="tgl_pengeluaran" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="inputJumlah" class="">Jumlah :</label>
                        <input type="number" id="inputJumlah" class="form-control" name="jumlah" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="inputSumber" class="">Sumber :</label>
                        <select id="inputSumber" class="form-control" name="id_sumber" required autofocus>
                            <option value="">--Pilih sumber pengeluaran--</option>
                            <option value="1">1. Pemerintah Daerah Kota Tegal</option>
                            <option value="2">2. Back BCA Kota Tegal</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Tambah</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>