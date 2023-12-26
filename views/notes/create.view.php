<?php require ("views/partials/headers.php") ?>
<?php require ("views/partials/nav.php") ?>
<?php require ("views/partials/banner.php") ?>
    <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="mt-5 md:col-span-2 md:mt-0">
                <form method="POST">
                    <div class="shadow sm:overflow-hidden sm:rounded-md">
                        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                            <div>
                                <label for="body" class="block text-sm font-medium text-gray-700">Note</label>

                                <div class="mt-1">
                                    <textarea id="body" name="body" rows="3"
                                              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                              placeholder="Here's an idea for a note..."
                                              ><?= $_POST['body'] ?? '' ?></textarea>
                                            <?php if (isset($errors['body'])) : ?>
                                                <p class="text-red-500 text-xs mt-1"><?= $errors['body'] ?></p>
                                            <?php endif; ?>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                            <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
  <?php require ("views/partials/foot.php") ?>


