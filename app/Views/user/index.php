<?=
$page = 'profile';
$this->extend('user\templates\template');
?>

<?= $this->section('content'); ?>
<div class="mx-auto d-flex flex-lg-row flex-column hero">
    <div class="footer-2-2 container-xxl mx-auto position-relative p-0" style="font-family: 'Poppins', sans-serif">
        <div class="container">
            <?php $session = session() ?>
            <h2>Selamat datang <?php echo $session->get('username') ?>!</h2>
            <h5>Role user == user biasa</h5>
            <a href="/auth/logout">Logout</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>