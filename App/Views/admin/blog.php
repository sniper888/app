<?php $baseUrl = \Core\Router::getBaseUrl() ?>
<div class="col-xs-12" style="margin-top:10px;">
    <div class="form-group">
        <a href="<?php echo $baseUrl ?>admin/post" class="btn btn-default">Új poszt</a>
    </div>
    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th><th>Cím</th><th>&nbsp;</th>
        </tr>
        <?php foreach ($posts as $post) { ?>
            <tr>
                <td><?php echo $post->id ?></td>
                <td><?php echo $post->cim ?></td>
                <td>
                    <a href="<?php echo $baseUrl ?>admin/post?id=<?php echo $post->id ?>" class="btn btn-default">Szerkesztés</a>
                    <a href="<?php echo $baseUrl ?>admin/posttorol?id=<?php echo $post->id ?>" class="btn btn-danger">Törlés</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>