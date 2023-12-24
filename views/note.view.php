<?php require ("partials/headers.php") ?>
    <?php require ("partials/nav.php") ?>

    <?php require ("partials/banner.php") ?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
       <p><?= $note['body']?></p>
       <p><a href="/website/notes" class="text-blue-500 hover:underline">Back to all notes</a></p>
       <p><?= htmlspecialchars($note['body'])?> </p>
    </li>

    </div>
  </main>

  <?php require ("partials/foot.php") ?>



