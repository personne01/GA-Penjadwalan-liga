<?=
$page = 'profile';
$this->extend('admin\layout\template');
?>

<?= $this->section('content'); ?>

<div class="mx-auto d-flex flex-lg-row flex-column hero">
    <div class="footer-2-2 container-xxl mx-auto position-relative p-0" style="font-family: 'Poppins', sans-serif">
        <div class="text-center title-text">
            <h1 class="text-title">Lengkapi form berikut</h1>
        </div>
        <div class="container">

            <form class="row g-3">
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Nama</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Masukkan NIK">
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">NIK</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Masukkan Nama">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Tanggal Lahir</label>
                    <input type="password" class="form-control" id="inputAddress" placeholder="Masukkan password">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Daerah Vaksin</label>
                    <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-12">
                    <div class="custom-file">
                        <label class="custom-file-label" for="customFile">Pilih file KTP</label> <br>
                        <input type="file" class="custom-file-input" id="customFile">

                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>