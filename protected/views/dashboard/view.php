<h1><?php echo $this->pageTitle ?></h1>
<h2>Home Page description</h2>
<p><?php echo $this->message("These are E-mails: ") ?></p>
<ul>
    <?php foreach ($emails as $email): ?>
        <li><?php echo$email; ?></li>
    <?php endforeach; ?>
</ul>
