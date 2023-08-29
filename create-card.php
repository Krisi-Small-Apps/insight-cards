<?php

require "config.php";
require "functions.php";

$page_title = CREATE_CARD;
require "inc/header.php";
?>

<header>
  <?php require "inc/navbar.php"; ?>
</header>

<main>
  <div class="create-card-bg-screen">
    <div class="bg-primary dark:bg-black box box-1"></div>
    <div class="bg-primary dark:bg-black box box-2"></div>
    <div class="bg-primary dark:bg-black box box-3"></div>
    <div class="container mx-auto">
      <div class="h-full flex flex-col items-center">
        <h1 class="uppercase my-10 text-4xl font-bold text-white text-center"><?= CREATE_CARD ?></h1>
        <div class="bg-white dark:bg-slate-900 dark:border-slate-900 w-full p-5 md:p-10 border rounded">
          <form method="post" action="code.php">
            <div class="mb-4">
              <label for="title" class="inline-block w-full mb-2 dark:text-slate-100"><?= TITLE ?> *</label>
              <input type="text" name="title" rows="4" id="title" class="outline-none w-full py-3 px-6 border rounded" />
            </div>
            <div class="mb-4">
              <label for="short_description" class="inline-block w-full mb-2 dark:text-slate-100"><?= SHORT_DESCRIPTION ?> *</label>
              <textarea name="short_description" rows="4" id="short_description" class="outline-none w-full py-3 px-6 border rounded"></textarea>
            </div>
            <div class="mb-4">
              <label for="description" class="inline-block w-full mb-2 dark:text-slate-100"><?= DESCRIPTION ?> *</label>
              <textarea name="short_description" rows="12" id="description" class="outline-none w-full py-3 px-6 border rounded"></textarea>
            </div>
            <div class="mb-4 text-2xl">Създаване на стойства</div>
            <div data-props>
              <div data-key-value-pair class="mt-4">
                <div class="text-xl mb-4" data-key-value-pair-label>Свойство 1</div>
                <div class="flex items-end justify-between gap-10">
                  <div class="grid sm:grid-cols-2 sm:gap-10 flex-1">
                    <div>
                      <label for="prop-value-1" class="inline-block w-full mb-2 dark:text-slate-100">Стойност</label>
                      <input type="text" class="outline-none w-full py-3 px-6 border rounded" id="prop-value-1">
                    </div>
                    <div>
                      <label for="prop-key-1" class="inline-block w-full mb-2 dark:text-slate-100">Ключ</label>
                      <input type="text" class="outline-none w-full py-3 px-6 border rounded" id="prop-key-1">
                    </div>
                  </div>
                  <button type="button" class="hover:text-slate-900 text-slate-100 bg-primary py-3 px-6 rounded hover:bg-slate-100 dark:hover:text-primary transition-colors duration-500" id="remove-button">
                    <i class="fa-solid fa-times"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="flex gap-10">
              <div class="mb-3 mt-6">
                <button type="submit" class="text-slate-100 bg-primary py-3 px-6 rounded hover:bg-slate-100 hover:text-slate-900 dark:hover:text-primary transition-colors duration-500"><?= CREATE_CARD ?></button>
              </div>
              <div class="mt-6">
                <button type="button" class="hover:text-slate-900 text-slate-100 bg-primary py-3 px-6 rounded hover:bg-slate-100 dark:hover:text-primary transition-colors duration-500" id="add-button">
                  <i class="fa-solid fa-plus"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>

<?php require "inc/footer.php"; ?>