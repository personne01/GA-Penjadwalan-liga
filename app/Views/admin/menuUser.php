<?= $this->extend('admin/layout/template.php'); ?>

<?= $this->section('content'); ?>

<style>
    .pagination {
        width: 100%;
        margin: 10px auto;
        font-size: larger;
        position: relative;
        margin: 20px 50%;
    }

    .pagination li {
        display: inline-block;
        background-color: var(--green);
        border-radius: 15%;
        margin: auto;
    }

    .pagination li :hover {
        color: var(--green);
    }

    table {
        width: calc(100% - 100px);
        border-collapse: collapse;
        margin-top: 80px;
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
    <div style="width:50%; font-size: large; background-color: var(--green); margin-top: 20px;">
        <?php if (session()->getFlashdata('tambah')) : ?>
            <?= session()->getFlashdata('tambah'); ?>
        <?php endif; ?>
    </div>

</nav>


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
                        <a href="/admin/editUser/<?= $i['id_user']; ?>">
                            <ion-icon name="create"></ion-icon>
                        </a>
                    </button>
                    <button>
                        <form action="<?= site_url('/') ?>/menuUser/delete/<?= $i['id_user']; ?>" method="post">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" onclick="return confirm('Apakah anda yakin menghapus data tersebut');">
                                <ion-icon name="trash"></ion-icon>
                            </button>
                        </form>


                    </button>
                </td>
            </tr>
        <?php endforeach; ?>


    </tbody>
</table>


<?= $pager->links(); ?>
<!-- <div class="pagination">
    <a href="#" style="text-decoration: ;">&laquo;</a>
    <a href="#" style="text-decoration: ;">1</a>
    <a href="#" style="text-decoration: ;" class="active">2</a>
    <a href="#" style="text-decoration: ;">3</a>
    <a href="#" style="text-decoration: ;">4</a>
    <a href="#" style="text-decoration: ;">5</a>
    <a href="#" style="text-decoration: ;">6</a>
    <a href="#" style="text-decoration: ;">&raquo;</a>
</div> -->

<!-- <script>
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
</script> -->
<?= $this->endSection(); ?>