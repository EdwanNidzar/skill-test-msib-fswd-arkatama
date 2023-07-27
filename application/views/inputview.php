<div class="container content  mt-4">
<h2>Form Input Data</h2>
    <form method="post" action="<?= base_url('users/input'); ?>">
    <div class="form-group">
      <input type="text" name="input" id="input" class="form-control" placeholder="Nama[spasi]Usia[spasi]Kota" aria-describedby="helpId" required>
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    </form>
</div>

    