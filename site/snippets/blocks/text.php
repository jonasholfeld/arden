<?php /** @var \Kirby\Cms\Block $block */ ?>
<?php if ($block->text()->isNotEmpty()): ?>
<?php $blockWidth = $block->width()->or('medium') ?>
<div class="block block-type-text text-align-<?= $block->textAlign()->or('center') ?> block-width-<?= $blockWidth ?>">
  <?= $block->text() ?>
</div>
<?php endif ?>
