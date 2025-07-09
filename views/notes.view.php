<?php require('partials/head.php'); ?>
  <?php require('partials/nav.php'); ?>
  <?php require('partials/banner.php'); ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
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

<?php require('partials/footer.php'); ?>