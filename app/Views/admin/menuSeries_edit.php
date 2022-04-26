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
    <h3>Edit Seri</h3>

    <form action="/menuSeries/update/<?= $series['id_series']; ?>" method="post">
        <?= csrf_field(); ?>
        <div style="margin-bottom: 1.75rem">
            <label for="id_series" class="d-block input-label">Id Seri</label>
            <input style="font-weight: bolder;" type="text" name="id_tim" value="<?= $series['id_series']; ?>" disabled>
        </div>

        <div style="margin-bottom: 1.75rem">
            <label for="tempat" class="d-block input-label">Tempat Series</label>
            <div class="d-flex w-100 div-input">
                <input class="input-field border-0 invalid-feedback" type="text" name="tempat" id="tempat" placeholder="Masukkan Tempat Series" autocomplete="on" required autofocus value="<?= $series['tempat']; ?>" />
                <!-- <div style="width: 50%; margin:20px">
                    <h3 style="background-color: red; font-weight:300; color:white;"><?= $validation->getError('username'); ?></h3>
                </div> -->
            </div>
        </div>
        <div style="margin-top: 1rem">
            <label for="tanggal" class="d-block input-label">Tanggal</label>
            <div class="d-flex w-100 div-input">
                <input style="width: 150px; height:25px;font-size:larger;" class="input-field border-0" type="date" name="tanggal" id="tanggal" placeholder="" minlength="6" required value="<?= $series['tanggal']; ?>" />
                <div onclick="togglePassword()">

                </div>
                <!-- <div style="width: 50%; margin:20px">
                    <h3 style="background-color: red; font-weight:300; color:white;"><?= $validation->getError('password'); ?></h3>
                </div> -->
            </div>
        </div>
        <input type="submit" id="btnSubmit" value="Submit"> </input>
    </form>
</div>
<?= $this->endSection(); ?>