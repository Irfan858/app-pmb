<?= $this->extends('layouts_admin/template_admin') ?>;

<?= $this->section('content') ?>
<!-- Content Wrapper. Containts page content-->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div> <!--Container Fluid -->
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg">
                    <div class="small-boc bg-info">
                        <div class="inner">
                            <h3>Aplikasi PMB</h3>
                            <p>Aplikasi Pendaftaran Mahasiswa Baru - Bang Ambo University</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection() ?>