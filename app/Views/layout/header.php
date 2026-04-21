<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <script>
      tailwind.config = {
        corePlugins: {
          preflight: false
        }
      }
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
  <nav class="bg-lime-600 text-white px-6 py-4">
  <div class="max-w-6xl mx-auto flex justify-between">
    <span class="font-bold">LangsDev</span>
    <div class="space-x-4">
      <a href="<?= base_url('/'); ?>">Home</a>
      <a href="<?= base_url('pages/about'); ?>">About</a>
      <a href="<?= base_url('pages/contact'); ?>">Contact</a>
    </div>
  </div>
</nav>