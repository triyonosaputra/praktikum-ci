<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Documents</title>
  <link rel="stylesheet" href="<?= base_url('/bs5/bootstrap.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('/boxicons/css/boxicons.min.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('/boxicons/css/css2-nunito467swap.css') ?>" />
</head>

<body id="body-pd">
  <div class="container">
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand">Navbar</a>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <?php $session = session(); ?>
    <main>
      <div class="mb-4">
        <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '&raquo;';">
          <?= $this->renderSection('breadcrumb') ?>
        </nav>
      </div>

      <div class="">
        <?= $this->renderSection('content') ?>
      </div>
    </main>
  </div>
  <footer class="footer mt-4">
    <div class="bg-light my-5 px-2 py-1 rounded">
      <!-- <span class="fw-bold></span>
      <span class="text-muted">&copy; ></span> -->
    </div>
  </footer>

  <script src="<?= base_url('/bs5/bootstrap.bundle.min.js') ?>"></script>
  <?= $this->renderSection('scriptBottom') ?>
</body>

</html>