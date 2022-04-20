<?= $this->extend('admin/layout/template.php'); ?>

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
    <h1>Daftar User</h1>
    <a href="/MenuUser/create">
        <button>Tambah User</button>
    </a>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <?= session()->getFlashdata(('pesan')); ?>
    <?php endif; ?>
</nav>
<div>

    <input type="text" id="cari" name="search" style=></input>

</div>
<table>
    <thead>
        <tr>
            <th>ID User</th>
            <th>Username</th>
            <th>Role</th>
            <th>Password</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $i) : ?>
            <tr>
                <td><?= $i['id_user']; ?></td>
                <td><?= $i['username']; ?></td>
                <td>
                    <?php if ($i['level_user'] == 1) {
                        echo "Administrator";
                    } else {
                        echo "User";
                    }
                    ?>
                </td>
                <td><?= $i['password']; ?></td>
                <td>
                    <button>
                        <ion-icon name="create"></ion-icon>
                    </button>
                    <button>
                        <a href="/MenuUser/detail/<?= $i['id_user']; ?>">
                            <ion-icon name="information-circle"></ion-icon>
                        </a>
                    </button>
                </td>
            </tr>
        <?php endforeach; ?>


    </tbody>
</table>
<!-- <div class="row">
    <div class="col-md-12">
        <div class="row">
            <?php if ($pager) : ?>
                <?php $pagi_path = '/admin/menuUser'; ?>
                <?php $pager->setPath($pagi_path); ?>
                <?= $pager->links() ?>
            <?php endif ?>
        </div>
    </div>
</div> -->
<div class="pagination">
    <a href="#">&laquo;</a>
    <a href="#">1</a>
    <a href="#" class="active">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">5</a>
    <a href="#">6</a>
    <a href="#">&raquo;</a>
</div>

<script>
    $('.search').select2({
        placeholder: '--- Search User ---',
        ajax: {
            url: '/MenuUser/ajaxSearch',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: data
                };
            },
            cache: true
        }
    });
</script>
<?= $this->endSection(); ?>