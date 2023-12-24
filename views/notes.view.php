<?php require ("partials/headers.php") ?>
    <?php require ("partials/nav.php") ?>

    <?php require ("partials/banner.php") ?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <ul>
    <?php foreach ($notes as $note) : ?>
          <li>
            <a href ="/website/note?id=<?= $note['id']?>" class="text-blue-500 hover:underline"> 
              <p> <?= htmlspecialchars($note['body'])?></p>
            </a>
          </li>


        <?php endforeach; ?>

    </ul>

     <!-- A fancy Styled with CSS button that takes you to the create note page -->  
    <p class = "mt-6"><a href="/website/notes/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create a note</a></p>


    </div>
  </main>

  <?php require ("partials/foot.php") ?>



