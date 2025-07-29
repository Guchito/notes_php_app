<?php require('views/partials/head.php'); ?>
  <?php require('views/partials/nav.php'); ?>
  <?php require('views/partials/banner.php'); ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <button class="mb-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-300">
        <a href="/notes" class="text-white">Go back...</a>
      </button>
          <div class="mb-4 p-4 bg-white rounded-lg shadow hover:bg-blue-100 transition-colors duration-400">
            <h2 class="text-xl font-semibold"><?= htmlspecialchars($note['title']) ?></h2>
            <p class="text-gray-700"><?= htmlspecialchars($note['body']) ?></p>
          </div>
    </div>
  </main>

<?php require('views/partials/footer.php'); ?>