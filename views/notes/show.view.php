<?php require ("views/partials/headers.php") ?>
<?php require ("views/partials/nav.php") ?>
<?php require ("views/partials/banner.php") ?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
       <p><?= htmlspecialchars($note['body'])?> </p>
       <p class = "mt-6"><a href="/website/notes" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Back to all notes</a></p>
    </li>

    </div>
  </main>

  <?php require ("views/partials/foot.php") ?>



