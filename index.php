<?php

require "config.php";
require "functions.php";

$page_title = HOME;
require "inc/header.php";
?>

<header>
  <?php require "inc/navbar.php"; ?>
</header>

<main>
  <div class="container mx-auto">
    <h1 class="uppercase my-10 text-4xl font-bold text-center"><?= ALL_CARDS ?></h1>
    <section>
      <ul class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10 px-5">
        <li>
          <img class="w-full h-[240px]" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="">
          <h2 class="text-2xl font-bold p-4 shadow">София Уилямс</h2>
        </li>
        <li>
          <img class="w-full h-[240px]" src="https://images.unsplash.com/photo-1601576084861-5de423553c0f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="">
          <h2 class="text-2xl font-bold p-4 shadow">Ричард Търнър</h2>
        </li>
        <li>
          <img class="w-full h-[240px]" src="https://images.unsplash.com/photo-1509967419530-da38b4704bc6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1795&q=80" alt="">
          <div class="bg-slate-100">
            <h2 class="text-2xl font-bold p-4 shadow">Хана Дейвис</h2>
          </div>
        </li>
        <li>
          <img class="w-full h-[240px]" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="">
          <div class="bg-slate-100">
            <h2 class="text-2xl font-bold p-4 shadow">Томас Робинсън</h2>
          </div>
        </li>
      </ul>
    </section>
  </div>
</main>

<?php require "inc/footer.php"; ?>