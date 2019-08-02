<?php include('init.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Currency - Sidebar 2</title>
    <link rel="stylesheet" href="style.css?v=<?=md5(time().rand(1, 99)); ?>">
  </head>
  <body>
    <div class="sidebar-version" style="width: 320px; margin-top: 3px;">
      <ul>
        <?php
          foreach ($coins as $d) {
            if (array_search(strtolower($d->symbol), $alloweds)):
        ?>
        <li>
          <div>
            <img style="vertical-align: middle; width: 24px; height: 24px;" src="icons/<?=strtolower($d->symbol); ?>.png" alt="<?=$d->name ?>">
            <span><?=$d->name ?></span>
          </div>
          <div>
            <label>$<?=number_format($d->price_usd, 2, '.', '') ?></label>
            <label style="margin-left: 10px; color: <?=(intval($d->price_change) < 0 ? '#c85151' : '#48bd7f') ?>"><?=$d->price_change ?>%</label>
          </div>
        </li>
        <?php endif; } ?>
      </ul>
    </div>
  </body>
</html>
