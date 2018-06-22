<?php if (!empty($hiba)) { ?>
    <div class="alert alert-danger" role="alert"><?php echo $hiba; ?></div>
<?php } ?>
<form method="post" enctype="multipart/form-data">
    <table style=" width: 100%">
        <tr>
            <td>Cím: </td>
            <td><div class="form-group"><input type="text" name="cim" <?php echo (!empty($post->cim) ? 'value="' . $post->cim . '"' : '') ?> class="form-control"></div></td>
        </tr>
        <tr>
            <td>Rövidleírás: </td>
            <td><div class="form-group"><input type="text" name="rovidleiras" <?php echo (!empty($post->rovidleiras) ? 'value="' . $post->rovidleiras . '"' : '') ?> class="form-control"></div></td>
        </tr>
        <tr>
            <td>Leírás: </td>
            <td><div class="form-group"><textarea name="leiras" class="form-control"><?php echo (!empty($post->leiras) ? $post->leiras : '') ?></textarea></div></td>
        </tr>
        <tr>
            <td>Kép: </td>
            <td><div class="form-group"><input type="file" name="ujkep" class="form-control"></div></td>
        </tr>
        <tr>
            <td>Dátum: </td>
            <td><div class="form-group"><input type="text" name="datum" <?php echo (!empty($post->datum) ? 'value="' . $post->datum . '"' : '') ?> class="form-control"></div></td>
        </tr>
        <tr>
            <td colspan="2"><div class="form-group"><input type="submit" class="btn btn-default pull-right"></div></td>
        </tr>
    </table>
</form>