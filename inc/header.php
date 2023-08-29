<!DOCTYPE html>
<html lang="<?= LANG ?>">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <script src="assets/javascript/tailwindcss.js"></script>

  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            primary: '#ff0000',
          }
        }
      }
    }
  </script>

  <link rel="stylesheet" href="assets/css/styles.css">
  <title><?= $page_title." | ".WEBSITE_TITLE ?></title>
</head>

<body>