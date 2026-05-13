<?php /** @var \Kirby\Cms\Block $block */ ?>
<?php if ($block->link()->isNotEmpty()): ?>
<?php
  $href = $block->link()->value();
  if ($block->isMailLink()->toBool()) {
    $params = [];
    if ($subject = site()->mailSubject()->value()) {
      $params[] = 'subject=' . rawurlencode($subject);
    }
    if ($content = site()->mailContent()->value()) {
      $params[] = 'body=' . rawurlencode($content);
    }
    if ($params) {
      $separator = str_contains($href, '?') ? '&' : '?';
      $href .= $separator . implode('&', $params);
    }
  }
?>
<a href="<?= esc($href, 'attr') ?>" class="block block-type-button">
  <?= $block->text()->or('Learn more') ?>
</a>
<?php endif ?>
