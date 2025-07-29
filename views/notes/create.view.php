<?php require base_path('views/partials/head.php'); ?>
  <?php require base_path('views/partials/nav.php'); ?>
  <?php require base_path('views/partials/banner.php'); ?>

  <main>
    <div class="mx-auto max-w-1/2 px-4 py-6 sm:px-6 lg:px-8 flex flex-col items-center">
      <div class="w-1/2 bg-white rounded-lg shadow p-6">
        <button class="mb-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-300">
          <a href="/notes" class="text-white">Go back...</a>
        </button>
        <form method="POST">
        <div class="mb-4">
          <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
          <input type="text" id="title" name="title" class="mt-1 block w-full bg-gray-100 border-gray-600 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>
        <div class="mb-4">
          <label for="body" class="block text-sm font-medium text-gray-700">Note</label>
          <textarea id="body" name="body" rows="4" require base_pathd class="mt-1 block w-full bg-gray-100 border-gray-600 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="What's on your mind?"><?= $_POST['body'] ?? '' ?> </textarea>
          <?php if (isset($errors['body'])): ?>
            <p class="text-red-500 text-sm mt-2"><?= htmlspecialchars($errors['body']) ?></p>
          <?php endif; ?>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-300">Create Note</button>
      </form>
      </div>

      </div>
  </main>

<?php require base_path('views/partials/footer.php'); ?>