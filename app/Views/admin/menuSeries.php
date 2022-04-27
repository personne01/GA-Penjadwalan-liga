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

    .navgroup {
        margin: 25px 0px;
    }

    .navgroup h1 {
        margin-bottom: 25px;
        font-weight: bold;
    }


    .navgroup button {
        display: inline;
        width: calc(25% - 25px);
        height: 30px;
        border-radius: 30px;
        cursor: pointer;
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


    .navgroup a {
        text-decoration: none;
    }

    .navgroup a button {
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
</style>

<nav class="navgroup">
    <h1>Daftar Series</h1>
    <a href="/MenuSeries/index">
        <button>Grup A</button>
    </a>
    <a href="/MenuSeries/seriesB">
        <button>Grup B</button>
    </a>
</nav>

<div style="width:50%; font-size: large; background-color: var(--green); margin-top: 20px;">
    <?php if (session()->getFlashdata('tambah')) : ?>
        <?= session()->getFlashdata('tambah'); ?>
    <?php endif; ?>
</div>

<table>
    <thead>
        <tr>
            <th>ID series</th>
            <th>Tempat</th>
            <th>Tanggal</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($series as $i) : ?>
            <tr>
                <td><?= $i['id_series']; ?></td>
                <td><?= $i['tempat']; ?></td>
                <td><?= $i['tanggal']; ?></td>
                <td>
                    <button>
                        <a href="/menuSeries/edit/<?= $i['id_series']; ?>" style="color: black;">
                            <ion-icon name="create"></ion-icon>
                        </a>

                    </button>
                </td>
            </tr>
        <?php endforeach; ?>



    </tbody>
</table>

<?= $this->endSection(); ?>