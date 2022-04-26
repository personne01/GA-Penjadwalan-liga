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

    <form action="/menuJam/update/<?= $jam['id_jam']; ?>" method="post">
        <?= csrf_field(); ?>
        <div style="margin-bottom: 1.75rem">
            <label for="id_jam" class="d-block input-label">Id Jam</label>
            <input style="font-weight: bolder;" type="text" name="id_jam" value="<?= $jam['id_jam']; ?>" disabled>
        </div>

        <div style="margin-bottom: 1.75rem">
            <label for="jam_mulai" class="d-block input-label">Jam Mulai</label>
            <div class="d-flex w-100 div-input">
                <input class="input-field border-0 invalid-feedback" type="time" name="jam_mulai" id="jam_mulai" placeholder="Masukkan Tempat Series" autocomplete="on" required autofocus value="<?= $jam['jam_mulai']; ?>" />
                <!-- <div style="width: 50%; margin:20px">
                    <h3 style="background-color: red; font-weight:300; color:white;"><?= $validation->getError('username'); ?></h3>
                </div> -->
            </div>
        </div>
        <div style="margin-bottom: 1.75rem">
            <label for="jam_selesai" class="d-block input-label">Jam Selesai</label>
            <div class="d-flex w-100 div-input">
                <input class="input-field border-0 invalid-feedback" type="time" name="jam_selesai" id="jam_selesai" placeholder="Masukkan Tempat Series" autocomplete="on" required autofocus value="<?= $jam['jam_selesai']; ?>" />
                <!-- <div style="width: 50%; margin:20px">
                    <h3 style="background-color: red; font-weight:300; color:white;"><?= $validation->getError('username'); ?></h3>
                </div> -->
            </div>
        </div>
        <input type="submit" id="btnSubmit" value="Submit"> </input>
    </form>
</div>
<?= $this->endSection(); ?>