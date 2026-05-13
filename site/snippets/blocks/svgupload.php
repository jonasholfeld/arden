<?php /** @var \Kirby\Cms\Block $block */ ?>
<?php $file = $block->svg()->toFile() ?>
<?php if ($file): ?>
<div class="block block-type-svgupload"
  style="--svgWidth: <?= $block->width()->or('50') ?>%;"
>
  <?= $file->read() ?>
</div>
<?php endif ?>
