<?=
$page = 'profile';
$this->extend('admin\layout\template');
?>

<?= $this->section('content'); ?>
<div class="mx-auto d-flex flex-lg-row flex-column hero">
    <div class="footer-2-2 container-xxl mx-auto position-relative p-0" style="font-family: 'Poppins', sans-serif">
        <div class="container">
            <?php $session = session() ?>
            <h4>Selamat datang admin!</h4>
            <?php echo $session->get('username') ?>
            <a href="/auth/logout">Logout</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>