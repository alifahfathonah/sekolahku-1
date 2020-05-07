  <div class="row">
    <div class="col-md-12">
      <div class="x_panel">
        <div class="x_title">
          <h2><?= $page ?></h2>
            <ul class="nav navbar-right panel_toolbox">
             <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
             <li><a class="close-link"><i class="fa fa-close"></i></a></li>
             </ul>
             <div class="clearfix"></div>
             </div>
            <div class="x_content">
            <!-- content starts here -->

<?php if ($this->session->flashdata('sukses')):?>
  <?= $this->session->flashdata('sukses'); ?>
  <?php endif;?>
  <a class="btn btn-primary" style="float:right;" href="<?= site_url('master/addGuru'); ?>">add</a>
    <form action="<?= site_url('master/import');?>" method="post" enctype="multipart/form-data">
    <input type="file" name="fileURL">
    <button type="submit" class="btn btn-primary">simpan</button>
      <table id="datatable" class="table table-striped table-bordered" style="width:100%"> 
        <thead>
          <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Alamat Guru</th>
            <th>Jenis Kelamin</th>
            <th>No HP Guru</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=0; foreach ($query as $key) :?>
          <tr>
           <td><?= ++$no;?></td>
            <td><?= $key->nip;?></td>
            <td><?= $key->nama_guru;?></td>
            <td><?= $key->alamat_guru;?></td>
            <td><?= $key->gender_guru;?></td>
            <td><?= $key->no_hp_guru;?></td>
             <td wid_siswath="160px" class="text-center">
              <a href="<?=site_url('master/editGuru/'.$key->id_guru); ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Ubah</a>
              <a href="<?=site_url('master/delGuru/'.$key->id_guru); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </form>
            </div>
      </div>
    </div>
  </div>
</div>
