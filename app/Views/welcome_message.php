<?= $this->extend('shared/layout_full') ?>

<?= $this->section('breadcrumb') ?>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"></a></li>
    <li class="breadcrumb-item"><a href=<?= base_url('clients') ?>></a></li>
    <li class="breadcrumb-item text-muted" aria-current="page">index</li>
</ol>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card bg-light shadow-sm mb-3 p-3">
    
</div>

<div class="mt-4 shadow-sm">
    <div class="card">
        
    </div>
</div>
<?= $this->endSection() ?>