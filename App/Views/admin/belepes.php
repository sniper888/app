<div class="col-sm-6 col-sm-push-3">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Belépés</h3>
        </div>
        <div class="panel-body">
            <?php if (!empty($hiba)) { ?>
                <div class="alert alert-danger" role="alert"><?php echo $hiba; ?></div>
            <?php } ?>
            <form method="post">
                <table style="width: 100%;text-align: center">
                    <tr>
                        <td>E-mail:</td>
                        <td><input class="form-control" type="email" name="email" /></td>
                    </tr>
                    <tr>
                        <td>Jelszó:</td>
                        <td><input class="form-control" type="password" name="jelszo" /></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Belépés">
                        </td>
                    </tr>
                </table>

            </form>
        </div>
    </div>
</div>