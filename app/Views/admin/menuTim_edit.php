<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<style>
    input[type=text],
    input[type=password],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .ini {
        margin: 20px auto;

    }

    form {
        width: 80%;
        margin-top: 20px;
    }
</style>

<div class="ini">
    <h3>Edit User</h3>

    <form action="/menuTim/update/<?= $tim['id_tim']; ?>" method="post">
        <?= csrf_field(); ?>
        <div style="margin-bottom: 1.75rem">
            <label for="id_tim" class="d-block input-label">Id Tim</label>
            <input style="font-weight: bolder;" type="text" name="id_tim" value="<?= $tim['id_tim']; ?>" disabled>
        </div>

        <div style="margin-bottom: 1.75rem">
            <label for="nama_tim" class="d-block input-label">Nama Tim</label>
            <div class="d-flex w-100 div-input">
                <input class="input-field border-0 invalid-feedback" type="text" name="nama_tim" id="nama_tim" placeholder="Masukkan Nama Tim" autocomplete="on" required autofocus value="<?= $tim['nama_tim']; ?>" />
                <!-- <div style="width: 50%; margin:20px">
                    <h3 style="background-color: red; font-weight:300; color:white;"><?= $validation->getError('username'); ?></h3>
                </div> -->
            </div>
        </div>
        <div style="margin-top: 1rem">
            <label for="asal_kota" class="d-block input-label">Asal Kota</label>
            <div class="d-flex w-100 div-input">
                <input class="input-field border-0" type="text" name="asal_kota" id="asal_kota" placeholder="Masukkan Asal Kota" minlength="6" required value="<?= $tim['asal_kota']; ?>" />
                <div onclick="togglePassword()">

                </div>
                <!-- <div style="width: 50%; margin:20px">
                    <h3 style="background-color: red; font-weight:300; color:white;"><?= $validation->getError('password'); ?></h3>
                </div> -->
            </div>
        </div>
        <div style="margin-top: 1rem">
            <label for="pelatih" class="d-block input-label">Nama Pelatih</label>
            <div class="d-flex w-100 div-input">
                <input class="input-field border-0" type="text" name="pelatih" id="pelatih" placeholder="Masukkan Nama Pelatih" minlength="6" required value="<?= $tim['pelatih']; ?>" />
                <div onclick="togglePassword()">
                </div>
                <!-- <div style="width: 50%; margin:20px">
                    <h3 style="background-color: red; font-weight:300; color:white;"><?= $validation->getError('passconf'); ?></h3>
                </div> -->
            </div>
        </div>
        <input type="submit" id="btnSubmit" value="Submit"> </input>
    </form>
</div>
<?= $this->endSection(); ?>