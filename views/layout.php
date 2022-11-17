<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <title>
        <?php if (isset($title)) {echo $this->escape($title) . '-';}?>MiniBlog
    </title>
</head>
<body>
    <header>
        <h1><a href="<?php echo $base_url ?>/">Mini Blog</a></h1>
    </header>
    <nav>
        <p>
            <?php if ($session->isAuthenticated()): ?>
            <a href="<?php echo $base_url; ?>/">ホーム</a>
            <a href="<?php echo $base_url; ?>/account">アカウント</a>
            <?php else: ?>
            <a href="<?php echo $base_url; ?>/account/signin">ログイン</a>
            <a href="<?php echo $base_url; ?>/account/signup">アカウント登録</a>
            <?php endif; ?>
        </p>
    </nav>
    <main>
        <?php echo $_content; ?>
    </main>
</body>
</html>