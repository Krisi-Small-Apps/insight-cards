<?php

require "config.php";
require "functions.php";
$page_title = LOGIN;

require "inc/header.php";
?>

<header>
  <?php require "inc/navbar.php"; ?>
</header>

<main>
  <div class="login-bg-screen">
    <div class="h-full flex flex-col items-center">
      <h1 class="my-10 text-4xl text-slate-100 text-shadow font-bold"><?= LOGIN ?></h1>
      <div class="bg-white dark:bg-slate-900 dark:border-slate-900 w-fit p-5 md:p-10 border rounded">
        <form method="post" action="code.php">
          <div class="mb-4">
            <label for="email" class="inline-block w-full mb-2 dark:text-slate-100"><?= EMAIL ?> *</label>
            <input type="email" name="email" placeholder="<?= ENTER_A_VALID_EMAIL_ADDRESS ?>..." id="email" class="outline-none w-full py-3 px-6 border rounded">
          </div>
          <div class="mb-4">
            <label for="password" class="inline-block w-full mb-2 dark:text-slate-100"><?= PASSWORD ?> *</label>
            <input type="password" name="password" placeholder="<?= CONFIRM_THE_PASSWORD ?>..." id="email" class="outline-none w-full py-3 px-6 border rounded">
          </div>
          <div class="mb-3 mt-6">
            <button type="submit" class="dark:text-slate-100 bg-primary py-3 px-6 rounded hover:bg-slate-100 dark:hover:text-primary transition-colors duration-500"><?= LOGIN ?></button>
          </div>
          <div>
            <a href="/register.php" class="dark:text-slate-100 inline-block hover:text-primary transition-colors duration-500"><?= NO_HAVE_UN_ACCOUNT ?>?</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>

<?php require "inc/footer.php"; ?>