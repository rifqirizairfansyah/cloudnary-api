<div class="col-sm-12">
    <div class="thumbnail">
        <div class="caption">
            <h3> Data Pegawai </h3>
        </div>

        <?php if($this->session->flashdata('success') || $this->session->flashdata('warning')){?>
            <?php if ($this->session->flashdata('success')) {?>
                <div class="alert alert-success">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     <i class="fa fa-check sign"></i><?php echo $this->session->flashdata('success'); ?>
            </div>
             <?php } else if($this->session->flashdata('warning')){?>
                 <div class="alert alert-warning"> 
                     <button type="button" class="close" data-dismis="alert" aria-hidden="true">&times;</button>
                    <i class ="fa fa-check sign"></i><?php echo $this->session->flashdata('warning');?>
                 </div>
           <?php } ?>
        <?php } ?>

        <table class="table table-striped">
            <tr>
                <th>NO</th>
                <th>NIP</th>
                <th>NAMA</th>
                <th>JABATAN</th>
                <th>JENIS KELAMIN</th>
                <th>AGAMA</th>
                <th>TELEPON</th>
                <th>ALAMAT</th>
                <th><a href="<?php echo base_url();?>index.php/pegawai/open_form" class="btn btn-success">Tambah Data</a></th>
            </tr>
            <?php
            $no = 1;

            foreach($list_pegawai->result() as $rowPegawai){
                ?>
                <tr>
                    <td><?php echo $no; ?> </td>
                    <td><?php echo $rowPegawai->nip; ?></td>
                    <td><?php echo $rowPegawai->nama; ?> </td>
                    <td><?php echo $rowPegawai->nama_jabatan; ?> </td>
                    <td><?php echo $rowPegawai->jenis_kelamin; ?> </td>
                    <td><?php echo $rowPegawai->agama; ?> </td>
                    <td><?php echo $rowPegawai->telepon; ?> </td>
                    <td><?php echo $rowPegawai->alamat; ?> </td>
                    <td><a href="<?php echo
        base_url();?>index.php/pegawai/open_form/<?php echo $rowPegawai->id_pegawai;?>" class="btn btn-primary">Edit</a>
                    <a href="<?php echo
        base_url();?>index.php/pegawai/delete/<?php echo $rowPegawai->id_pegawai;?>" class="btn btn_danger">Hapus</a></td>
        </tr>
        <?php
        $no++;

            }?>
        </table>
    </div>
</div>
