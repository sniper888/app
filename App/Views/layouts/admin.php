<?php $baseurl = \Core\Router::getBaseUrl(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <link href="<?php echo $baseurl ?>assets/admin/css/bootstrap.css" rel="stylesheet">
        <script src="<?php echo $baseurl ?>assets/admin/js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo $baseurl ?>assets/admin/js/bootstrap.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo $baseurl ?>">Sevenity</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo $baseurl ?>admin/index">Főoldal</a></li>
                        <li><a href="<?php echo $baseurl ?>admin/blog">Blog</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo $baseurl ?>admin/kilepes">Kilépés</a></li>                        
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
            <?php echo $content ?> 
        </div>
    </body>
</html>