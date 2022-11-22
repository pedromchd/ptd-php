<?php
$results = $db->query("PRAGMA table_info(cabecalho)"); ?>

<article class="flex-grow rounded-lg bg-neutral-100 p-4 dark:bg-neutral-900" x-cloak x-show="isOpen('cabecalho')">
  <?php while ($row = $results->fetchArray(SQLITE3_ASSOC)) : ?>
    <?php if ($row["name"] === "id") {
      continue;
    } ?>
    <label for="" class="inline-block">
      <span class="font-semibold"><?= $row['name'] ?></span>
      <input type="text" name="<?= $row['name'] ?>" id="<?= $row['name'] ?>" class="mt-1 block w-full rounded-md border-transparent bg-neutral-100 focus:border-neutral-500 focus:bg-neutral-50 focus:ring-0 dark:bg-neutral-800 dark:focus:bg-neutral-700" required />
    </label>
  <?php endwhile; ?>
</article>
