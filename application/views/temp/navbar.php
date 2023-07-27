<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url('users') ?>">FSWD | MED</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('users/input'); ?>">Input Data</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('users/data'); ?>">Data</a>
          </li>
        </ul>
      </div>
    </div>
</nav>