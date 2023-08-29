<div class="h-[80px] flex items-center bg-slate-100 dark:bg-slate-900 dark:text-slate-100 py-3">
  <div class="container mx-auto px-10">
    <nav class="flex justify-between md:justify-start items-center">
      <a href="/" class="text-2xl font-bold">
        <?= WEBSITE_TITLE ?>
      </a>
      <div class="navbar-items" id="navbar-items">
        <div class="w-full text-right">
          <div class="block md:hidden">
            <i class="fa-solid fa-times text-2xl cursor-pointer" id="close-menu-icon"></i>
          </div>
        </div>
        <ul class="flex gap-2">
          <li>
            <a href="/" class="inline-block text-xl py-3 px-6 rounded dark:text-slate-100 hover:bg-slate-300 dark:hover:bg-primary <?= url_match("/") ? "bg-primary" : "" ?>">Home</a>
          </li>
        </ul>
        <ul class="flex gap-2">
          <li>
            <a href="/login.php" class="inline-block text-xl py-3 px-6 rounded dark:text-slate-100 dark:hover:bg-primary <?= url_match("/login.php") ? "bg-primary" : "" ?>"><?= LOGIN; ?></a>
          </li>
          <li>
            <a href="/register.php" class="inline-block text-xl py-3 px-6 rounded dark:text-slate-100 dark:hover:bg-primary <?= url_match("/register.php") ? "bg-primary" : "" ?>"><?= REGISTER; ?></a>
          </li>
        </ul>
      </div>
      <div class="block md:hidden">
        <i class="fa-solid fa-bars text-2xl cursor-pointer" id="open-menu-icon"></i>
      </div>
    </nav>
  </div>
</div>