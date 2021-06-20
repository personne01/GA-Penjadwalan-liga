<?=
$page = 'profile';
$this->extend('user\templates\template');
?>

<?= $this->section('content'); ?>
<div class="mx-auto d-flex flex-lg-row flex-column hero">
    <div class="footer-2-2 container-xxl mx-auto position-relative p-0" style="font-family: 'Poppins', sans-serif">
        <div class="container">
            <div class="content-2-2 container-xxl mx-auto p-0 position-relative" style="font-family: 'Poppins', sans-serif">
                <div class="text-center title-text">
                    <h1 class="text-title">Profile Anda</h1>
                    <div class="card">
                        <?php $session = session() ?>
                        <h4>Selamat datang user!</h4>
                        <h1><?php echo $session->get('username') ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>