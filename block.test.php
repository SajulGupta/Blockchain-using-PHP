<?php
require 'block.php';
//$block = new Block('foo', 'bar', 'zoo', 'baz');
//echo $block->toString();
//echo Block::genesis()->toString();

$fooBlock = Block::mineBlock(Block::genesis(), 'foo');
echo $fooBlock->toString();

?>
