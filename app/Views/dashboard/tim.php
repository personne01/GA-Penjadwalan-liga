<?= $this->extend('dashboard/layout-native'); ?>
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
</style>

<nav class="navgroup">
    <h1>Tim Peserta</h1>
    <button><a href="">Grup A</a></button>
    <button><a href="">Grup B</a></button>
</nav>

<table>
    <thead>
        <tr>
            <th>ID Team</th>
            <th>Asal Kota</th>
            <th>Pelatih</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
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

<?= $this->endSection(); ?>