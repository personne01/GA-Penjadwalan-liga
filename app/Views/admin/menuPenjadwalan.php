<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>

<style>
    table {
        width: calc(100% - 100px);
        border-collapse: collapse;
    }

    tr:nth-child(even) {
        background-color: #ddd;
    }

    th {
        padding: 15px;
        text-align: left;
        border-bottom: 3px solid black;
    }

    td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid black;
    }

    ion-icon {
        cursor: pointer;
        font-size: large;
        width: 50px;
    }

    ion-icon:hover {
        color: var(--green);
        font-size: x-large;
        transition: 0.5s;
    }

    .navgroup button:hover {
        background-color: var(--green);
        border: none;
    }

    button a {
        text-decoration: none;
        font-size: larger;
        font-weight: bolder;
        color: black;
    }

    @media(max-width:1000px) {
        .navgroup {
            position: relative;
            margin: 0;
        }

        .navgroup button {
            width: 100%;
            display: inline;
            width: 50%;
            border-radius: 10px;
        }

    }

    .formToCount {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
    }

    .inputan {
        flex-grow: 2;
    }

    .generate {
        flex-grow: 1.5;
        align-self: center;
    }

    #generate {
        width: 40%;
        height: 40px;
        border: none;
        cursor: pointer;
        border-radius: 20px;
        font-size: 20px;
        font-weight: bold;
    }

    #delete {
        width: 40%;
        height: 40px;
        border: none;
        cursor: pointer;
        border-radius: 20px;
        font-size: 20px;
    }

    .activeGenerate {
        background-color: var(--green);
        color: #ddd;
    }

    form {
        position: relative;
        margin-bottom: 50px;
    }

    form p {
        font-size: 25px;
        margin-bottom: 5px;
    }

    .jadwal {
        visibility: hidden;
        transition-property: all;
    }

    .activeJadwal {
        transition-delay: 3s;
        visibility: visible;
    }

    input {
        margin-bottom: 10px;
        height: 40px;
        width: 80%;
        border: 2px solid var(--green);
        border-radius: 10px;
        color: var(--green);
        padding: 10px;
        font-size: 15px;
    }
</style>

<div class="formToCount">
    <div class="inputan">
        <form action="">
            <p>Populasi</p>
            <input type="number" placeholder="Masukkan nilai Populasi">
            <p>Generasi</p>
            <input type="number" placeholder="Masukkan nilai Generasi">
            <p>Probabilitas Mutasi</p>
            <input type="number" placeholder="Masukkan nilai Probabilitas Mutasi">
            <p>Probabilitas Crossover</p>
            <input type="number" placeholder="Masukkan nilai Probabilitas Crossover">
        </form>
    </div>
    <div class="generate">
        <button id="generate" onclick="activeFunction()">generate</button>
        <button id="delete">
            <a href="/menuPenjadwalan">Delete</a>
        </button>
    </div>
</div>



<table>
    <thead>
        <tr>
            <th>ID Team</th>
            <th>Asal Kota</th>
            <th>Pelatih</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="jadwal" id="muncul">
        <?php for ($i = 1; $i <= 8; $i++) { ?>
            <tr>
                <td><?= $i; ?></td>
                <td>Mana Yaa</td>
                <td>Yamamoto</td>
                <td>
                    <button>
                        <ion-icon name="create"></ion-icon>
                    </button>
                    <button>
                        <ion-icon name="trash"></ion-icon>
                    </button>
                </td>
            </tr>
        <?php  } ?>


    </tbody>
</table>

<script>
    function activeFunction() {
        var element = document.getElementById("generate");
        element.classList.toggle("activeGenerate");

        var jadwal = document.getElementById("muncul");
        jadwal.classList.toggle("activeJadwal");
        jadwal.classList.remove("jadwal");

    }

    function deleteFunction() {
        var deleteJadwal = docment.getElementById("muncul");
        deleteJadwal.classList.remove("activeJadwal");
    }
</script>
<?= $this->endSection(); ?>