<?php require base_path('views/partials/head.php'); ?>
  <?php require base_path('views/partials/nav.php'); ?>
  <?php require base_path('views/partials/banner.php'); ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <button class="mb-10 mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-300">
          <a href="/note/create" class="text-white">New Note</a>
        </button>
      <?php foreach ($notes as $note): ?>
        <a href="/note?id=<?= $note['id'] ?>" class="block mb-4">
          <div class="mb-4 p-4 bg-white rounded-lg shadow hover:bg-blue-100 transition-colors duration-400">
            <h2 class="text-xl font-semibold"><?= htmlspecialchars($note['title']) ?></h2>
            <p class="text-gray-700"><?= htmlspecialchars($note['body']) ?></p>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </main>

<?php require base_path('views/partials/footer.php'); ?>