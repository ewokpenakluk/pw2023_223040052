<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
  <h1>Halaman Home</h1>

  <h3>Daftar Mahasiswa</h3>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">gambar</th>
      <th scope="col">nim</th>
      <th scope="col">nama</th>
      <th scope="col">email</th>
      <th scope="col">jurusan</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1 ;
    foreach($students as $students) : ?>
    <tr>
      <th scope="row">1</th>
      <td><img src="img/default.jpg"
      width="50" class="rounded-circle"></td>
      <td>223040052</td>
      <td>Angga Nugraha Sofyan</td>
      <td>Angga@gmail.com</td>
      <td>Teknik Informatika</td>
      <td>
        <a href="">ubah</a>
        <a href="">hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
  <?php foreach ($students as $student) : ?>
    <ul>
      <li>Nama: <?= $student["nama"]; ?></li>
      <li>NiM: <?= $student["nim"]; ?></li>
      <li>Email: <?= $student["email"]; ?></li>
      <li>jurusan: <?= $student["jurusan"]; ?></li>
    </ul>
  <?php endforeach; ?>
</div>

<?php require('partials/footer.php'); ?>