<div class="container mt-4">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h4 class="card-title"><?= $data['mhs']['nama']; ?></h4>
            <h5 class="card-title"><?= $data['mhs']['nrp']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['email']; ?></h6>
            <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
            <a href="<?= KonstURL; ?>/mahasiswa" class="card-link">Kembali</a>

        </div>
    </div>
</div>