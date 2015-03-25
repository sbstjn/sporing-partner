<h2>Example Headline</h2>

<p>Duis id nisi vitae sem aliquam ornare consectetur id felis. Nam semper tortor et sem laoreet vulputate. Fusce vitae iaculis libero. Ut urna tortor, accumsan nec nisi a, molestie interdum massa. Integer facilisis ligula quis nisi aliquam lacinia. Aliquam erat volutpat. Donec fringilla arcu elit, quis molestie mi bibendum id. Curabitur ac consequat urna. Suspendisse id sapien id purus viverra condimentum vel ut eros. Donec porta, purus at vehicula finibus, urna magna pharetra metus, et tristique odio ligula eget massa. Etiam semper velit non metus tincidunt vestibulum. Aliquam tempor, sapien et ullamcorper lacinia, libero massa pharetra ante, sit amet tristique velit magna vitae sapien. Vivamus euismod ultrices mattis.</p>

<?php foreach (array('Lorem', 'Ipsum') as $headline): ?>
  <?=$page->partial('box', array('headline' => $headline))?>
<?php endforeach; ?>