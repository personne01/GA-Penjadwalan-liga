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

    input[type=button] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=button]:hover {
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
    <h3>Using CSS to style an HTML Form</h3>


    <form action="/menuUser/save" method="post">
        <?= csrf_field(); ?>
        <div style="margin-bottom: 1.75rem">
            <label for="username" class="d-block input-label">Username</label>
            <div class="d-flex w-100 div-input">
                <input class="input-field border-0" type="text" name="username" id="username" placeholder="Masukkan Username" autocomplete="on" required autofocus />
            </div>
        </div>

        <div style="margin-top: 1rem">
            <label for="password" class="d-block input-label">Password</label>
            <div class="d-flex w-100 div-input">
                <input class="input-field border-0" type="password" name="password" id="txtPassword" placeholder="Your Password" minlength="6" required />
                <div onclick="togglePassword()">

                </div>
            </div>
        </div>
        <div style="margin-top: 1rem">
            <label for="confirm" class="d-block input-label">Konfirmasi Password</label>
            <div class="d-flex w-100 div-input">
                <input class="input-field border-0" type="password" name="confirm" id="txtConfirmPassword" placeholder="Konfirmasi Password" minlength="6" required />
                <div onclick="togglePassword()">
                </div>
            </div>
        </div>
        <input type="button" id="btnSubmit" value="Submit" />
    </form>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function() {
        $("#btnSubmit").click(function() {
            var password = $("#txtPassword").val();
            var confirmPassword = $("#txtConfirmPassword").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script>
<?= $this->endSection(); ?>