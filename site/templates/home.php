<?php $sections = $page->children() ?>
<?= snippet('header') ?>
<body>

<nav class="site-nav">
  <?php foreach ($sections as $section): ?>
  <a href="#<?= $section->slug() ?>" class="nav-strip"><?= $section->title() ?></a>
  <?php endforeach ?>
</nav>

<main>
  <?php foreach ($sections as $section): ?>
  <section id="<?= $section->slug() ?>" class="content-section <?= $section->colorscheme() ?>">
    <?= $section->contentblocks()->toBlocks() ?>
  </section>
  <?php endforeach ?>
</main>

</body>
</html>
