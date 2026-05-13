<?php /** @var \Kirby\Cms\Block $block */ ?>
<?php if ($block->text()->isNotEmpty()): ?>
<?php $widthClass = $block->width()->isNotEmpty() ? 'heading-width-' . $block->width() : ''; ?>
<div class="block block-type-heading <?= $widthClass ?>">
  <<?= $level = $block->level()->or('h2') ?>><?= $block->text() ?></<?= $level ?>>
</div>
<?php endif ?>
