<?php $sections = $page->children() ?>
<?= snippet('header') ?>
<body>

<!-- Mobile burger button -->
<button class="burger-btn" id="burger-btn" aria-label="Menu" aria-expanded="false" aria-controls="mobile-nav">
  <span></span>
  <span></span>
  <span></span>
</button>

<!-- Mobile nav overlay -->
<nav class="mobile-nav" id="mobile-nav" aria-hidden="true">
  <?php foreach ($sections as $section): ?>
  <a href="#<?= $section->slug() ?>" class="mobile-nav-link"><?= $section->title() ?></a>
  <?php endforeach ?>
</nav>

<!-- Desktop nav strips -->
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

<script>
$(document).ready(function () {
  var $btn = $('#burger-btn');
  var $nav = $('#mobile-nav');

  function openMenu() {
    $btn.addClass('is-open').attr('aria-expanded', 'true');
    $nav.addClass('is-open').attr('aria-hidden', 'false');
    $('body').addClass('nav-open');
  }

  function closeMenu() {
    $btn.removeClass('is-open').attr('aria-expanded', 'false');
    $nav.removeClass('is-open').attr('aria-hidden', 'true');
    $('body').removeClass('nav-open');
  }

  $btn.on('click', function () {
    if ($btn.hasClass('is-open')) {
      closeMenu();
    } else {
      openMenu();
    }
  });

  // Close when a nav link is tapped
  $nav.find('a').on('click', function () {
    closeMenu();
  });

  // Close on Escape key
  $(document).on('keydown', function (e) {
    if (e.key === 'Escape' && $btn.hasClass('is-open')) {
      closeMenu();
    }
  });
});
</script>

</body>
</html>
