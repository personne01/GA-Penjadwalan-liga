<?= $this->extend('dashboard/layout-native'); ?>
<?= $this->section('content'); ?>
<style>
    input[type=text],
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
    <h3>Using CSS to style an HTML Form</h3>


    <form action="/tim/update/<?= $i['id_tim']; ?>" method="post">

        <label for="namaTim">Nama Tim</label>
        <input type="text" id="namaTim" name="firstname" placeholder="Update Nama Tim">

        <label for="asalKota">Asal Kota</label>
        <input type="text" id="asalKota" name="lastname" placeholder="Update Asal Kota">

        <label for="pelatih">Pelatih</label>
        <input type="text" id="pelatih" name="lastname" placeholder="Update Pelatih">


        <input type="submit" value="Submit">
    </form>
</div>


<?= $this->endSection(); ?>