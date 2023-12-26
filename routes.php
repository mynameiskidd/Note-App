<?php 

//simple router to make the navigation easier to understand

return [
    '/' => 'controllers/index.php',
    '/website/about' => 'controllers/about.php',
    '/website/notes' => 'controllers/notes/index.php',
    '/website/note' => 'controllers/notes/show.php',
    '/website/contact' => 'controllers/contact.php',
    '/website/notes/create' => 'controllers/notes/create.php',
];