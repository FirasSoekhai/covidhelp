<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Covidhelp</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo site_url( '/css/style.css' ) ?>" media="all">
    <?php if ( $this->section( 'css' ) ): ?>
        <?php echo $this->section( 'css' ) ?>
    <?php endif; ?>
</head>
<body>
<div class="container">
    <header>
        <h1>CovidHelp</h1>
    </header>
    <nav>
        <?php if ( $this->section( 'navigation' ) ): ?>
            <?php echo $this->section( 'navigation' ) ?>
        <?php else: ?>
            <?php echo $this->fetch( '_navigation' ) ?>
        <?php endif ?>
    </nav>
    <main>
        <section class="content">
            <?php echo $this->section( 'content' ) ?>
        </section>
        <aside class="content">
            <?php echo $this->section( 'sidebar' ) ?>
        </aside>
    </main>
    <footer>
        &copy; Firas &amp; Mika 2020
    </footer>
</div>
<?php $this->start( 'javascript' ) ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-Dfxdz2htPHDlsSSs5nCTpuj/zy4C+OGpamoFV38MVBnE+IbbVYUew+DrCXaRkfj" crossorgin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/nm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9I)Yy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorgin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorgin="anonymous"></script>
<?php $this->stop(); ?>
</body>
</html>
