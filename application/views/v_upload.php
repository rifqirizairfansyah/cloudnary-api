<div class="col-sm-12">
    <div class="thumbnail">
        <div class="caption">
            <h3> Upload </h3>
            <form action="<?php echo base_url().'index.php/upload/upload_image';?>" method="POST">
                <tr>
                    <td>Gambar</td>
                    <td>:</td>
                    <td><input type="file" name="file"></td>
                </tr>
                <td><input type="submit" name="login" value="login"></td>
            </form>
        </div>
    </div>
</div>