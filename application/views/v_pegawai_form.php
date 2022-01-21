<div class="col-sm-12">

    <div class="caption">
        <h3> Form Pegawai </h3>
</div>
<form action="<?php echo base_url();?>index.php/pegawai/save" method="POST">
<input type="hidden" name="id_pegawai" value="<?php echo (isset($row->id_pegawai)?$row->id_pegawai:'');?>" class="form-control">
<table class="table" width="100%">
    <tr>
        <td>NIP</td>
        <td>:</td>
        <td><input type="text" name="nip" value="<?php echo (isset($row->nip)?$row->nip:'');?>" required class="form-control"></td>
    </tr>
    <tr>
        <td>NAMA</td>
        <td>:</td>
        <td><input type="text" name="nama" value="<?php echo (isset($row->nama)?$row->nama:'');?>" required class="form-control"></td>
    </tr>
    <tr>
        <td>JABATAN</td>
        <td>:</td>
        <td>
            <select name="id_jabatan" class="form-control">
                <?php
                echo '<option value="">--Pilih--</option>';
                foreach($jabatan as $row_jabatan){
                    if($row_jabatan->id_jabatan==$row->id_jabatan){
                        echo'<option value="'.$row_jabatan->id_jabatan.'"selected>'.$row_jabatan->nama_jabatan.'</option>';
                    }else{
                        echo'<option value="'.$row_jabatan->id_jabatan.'">'.$row_jabatan->nama_jabatan.'</option>';
                    }
                }
                ?>
                </select>       
    </td>
    </tr>
    <tr>
        <td>JENIS KELAMIN</td>
        <td>:</td>
        <td>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="Laki-Laki" name="jenis_kelamin" id="jenis_kelamin1" <?php echo $checked = ($row->jenis_kelamin == 'Laki-laki')?'checked':'checked';?>>
            <label class ="form-check-label" for="jenis_kelamin1">
                Laki-laki
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" value="Perempuan" name="jenis_kelamin" id="jenis_kelamin2" <?php echo $checked = ($row->jenis_kelamin == 'Perempuan')?'checked':'';?>>
            <label class ="form-check-label" for="jenis_kelamin1">
                Perempuan
            </label>
            </div>
            </td>
        </tr>
        <tr>
        <td>Agama</td>
        <td>:</td>
        <td><input type="text" name="agama" value="<?php echo (isset($row->agama)?$row->agama:'');?>" class="form-control"></td>
    </tr>
    <tr>
        <td>Telepon</td>
        <td>:</td>
        <td><input type="text" name="telepon" value="<?php echo (isset($row->telepon)?$row->telepon:'');?>" class="form-control"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><textarea name="alamat" class="form-control"><?php echo (isset($row->alamat)?$row->alamat:'');?></textarea></td>
    </tr>
    <tr>
        <td><input type="submit" class="btn btn-success" value="Simpan"></td>
        <td></td>
        <td></td>
            </tr>
            </table>
            </div>
            </div>
            </div>
            </form>
            </div>

