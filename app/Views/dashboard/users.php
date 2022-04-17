<?= $this->extend('dashboard/layout-native'); ?>
<?= $this->section('content'); ?>

<style>
    table {
        width: calc(100% - 100px);
        border-collapse: collapse;
        margin-top: 100px;
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

<table>
    <thead>
        <tr>
            <th>ID User</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Created_at</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($user as $i) : ?>
            <tr>
                <td><?= $i['user_id']; ?></td>
                <td><?= $i['user_name']; ?></td>
                <td><?= $i['user_email']; ?></td>
                <td><?= $i['user_created_at']; ?></td>
                <td>
                    <button>
                        <ion-icon name="create"></ion-icon>
                    </button>
                    <button>
                        <a href="<?= base_url(); ?>/dashboard/users/<?= $i['user_id']; ?>">
                            <ion-icon name="information-circle"></ion-icon>
                        </a>

                    </button>
                </td>
            </tr>
        <?php endforeach; ?>


    </tbody>
</table>

<?= $this->endSection(); ?>