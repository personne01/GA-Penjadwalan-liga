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

    <form action="/menuUser/update/<?= $users['id_user']; ?>" method="post">
        <?= csrf_field(); ?>
        <div style="margin-bottom: 1.75rem">
            <label for="id_user" class="d-block input-label">ID User</label>
            <input style="font-weight: bolder;" type="text" name="id_user" value="<?= $users['id_user']; ?>" disabled>
        </div>

        <div style="margin-bottom: 1.75rem">
            <label for="username" class="d-block input-label">Username</label>
            <div class="d-flex w-100 div-input">
                <input class="input-field border-0 invalid-feedback" type="text" name="username" id="username" placeholder="Masukkan Username" autocomplete="on" required autofocus value="<?= $users['username']; ?>" />
                <div style="width: 50%; margin:20px">
                    <h3 style="background-color: red; font-weight:300; color:white;"><?= $validation->getError('username'); ?></h3>
                </div>
            </div>
        </div>
        <div style="margin-top: 1rem">
            <label for="password" class="d-block input-label">Password</label>
            <div class="d-flex w-100 div-input">
                <input class="input-field border-0" type="password" name="password" id="txtPassword password-content-3-5" placeholder="Your Password" minlength="6" required value="" />
                <div onclick="togglePassword()">

                </div>
                <div style="width: 50%; margin:20px">
                    <h3 style="background-color: red; font-weight:300; color:white;"><?= $validation->getError('password'); ?></h3>
                </div>
            </div>
        </div>
        <div style="margin-top: 1rem">
            <label for="passconf" class="d-block input-label">Konfirmasi Password</label>
            <div class="d-flex w-100 div-input">
                <input class="input-field border-0" type="password" name="passconf" id="txtConfirmPassword password-content-3-5" placeholder="Konfirmasi Password" minlength="6" required value="" />
                <div onclick="togglePassword()">
                </div>
                <div style="width: 50%; margin:20px">
                    <h3 style="background-color: red; font-weight:300; color:white;"><?= $validation->getError('passconf'); ?></h3>
                </div>
            </div>
        </div>
        <input type="submit" id="btnSubmit" value="Submit"> </input>
    </form>
</div>
<?= $this->endSection(); ?>