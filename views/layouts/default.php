<html>
  <head>
    <meta charset="utf-8">
    <title>Default Layout!</title>

    <?=$page->partial('scripts')?>
    
    <?=$page->script('main')?>
    <?=$page->style('base')?>
  </head>
  <body>
    <?=$page->body()?>
  </body>
</html>