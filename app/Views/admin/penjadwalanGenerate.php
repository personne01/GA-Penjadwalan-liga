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
        /* visibility: hidden; */
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
        <form action="/MenuPenjadwalan/generate">
            <div style="margin-bottom: 1.75rem">
                <label for="populasi" class="d-block input-label">Populasi</label>
                <div class="d-flex w-100 div-input">
                    <input class="input-field border-0 invalid-feedback" type="number" name="Populasi" id="Populasi" placeholder="Masukkan Jumlah Populasi" autocomplete="on" required autofocus value="10" />

                </div>
            </div>
            <div style="margin-top: 1rem">
                <label for="generasi" class="d-block input-label">Generasi</label>
                <div class="d-flex w-100 div-input">
                    <input class="input-field border-0" type="number" name="generasi" id="populasi" placeholder="Masukkan Jumlah generasi" required value="1000" />
                    <div onclick="togglePassword()">

                    </div>

                </div>
            </div>
            <div style="margin-top: 1rem">
                <label for="probmutasi" class="d-block input-label">Probabilitas Mutasi</label>
                <div class="d-flex w-100 div-input">
                    <input class="input-field border-0" type="number" name="probmutasi" id="probmutasi" placeholder="Masukkan Probabilitas Mutasi" required value="0.1" />

                </div>

            </div>
            <div style="margin-top: 1rem">
                <label for="probcross" class="d-block input-label">Probabilitas Crossover</label>
                <div class="d-flex w-100 div-input">
                    <input class="input-field border-0" type="number" name="probcross" id="probcross" placeholder="Masukkan Probabilitas Crossover" required value="0.5" />
                </div>

            </div>
        </form>
    </div>
    <div class="generate">
        <a href="">
            <button id="generate" type="submit" onclick="activeFunction()">generate</button>
        </a>
        <button id="delete">
            <a href="/menuPenjadwalan">Delete</a>
        </button>
    </div>

</div>

<div style="width:80%; font-size: large; background-color: var(--green); opacity: 60%; padding: 20px; border-radius: 20px; text-align:center;">
    <?php if (session()->getFlashdata('generate')) : ?>
        <p style="color:white;"><?= session()->getFlashdata('generate'); ?></p>
    <?php endif; ?>
</div>

<div style="margin: 40px auto; width : 100%;">
    <h1>Jadwal Pertanndingan</h1>
    <button id="export">
        <a href="/menuPenjadwalan/export">Export</a>
    </button>
</div>

<table>
    <thead>
        <tr>
            <th>Tim A</th>
            <th>Tim B</th>
            <th>Series Ke-n</th>
            <th>Tanggal</th>
            <th>Rentang Jam</th>
        </tr>
    </thead>

    <tbody class="jadwal" id="muncul">

        <?php foreach ($pertandingan as $jadwal) : ?>
            <tr>
                <td><?= $jadwal['timA']; ?></td>
                <td><?= $jadwal['timB']; ?></td>
                <td><?= $jadwal['id_series']; ?></td>
                <td><?= $jadwal['tanggal']; ?></td>
                <td><?= $jadwal['jam_mulai'] . "-" . $jadwal['jam_selesai']; ?></td>
            </tr>
        <?php endforeach; ?>
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