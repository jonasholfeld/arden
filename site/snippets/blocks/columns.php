<?php /** @var \Kirby\Cms\Block $block */ ?>
<?php $layout = $block->layout()->toLayouts()->first() ?>
<?php if ($layout !== null): ?>
<div class="block block-type-columns">
  <div class="columns-grid">
    <?php foreach ($layout->columns() as $column): ?>
    <div class="column">
      <div class="blocks">
        <?= $column->blocks() ?>
      </div>
    </div>
    <?php endforeach ?>
  </div>
</div>
<?php endif ?>
