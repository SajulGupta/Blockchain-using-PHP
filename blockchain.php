<?php
    require "./block.php";
    
    class Blockchain {
        function __construct() {
            $this->chain = [Block::genesis()];
        }

        
        function addBlock($data) {
            $block = Block::mineBlock($this->chain[count($this->chain)-1], $data);
            array_push($this->chain, $block);
            return $block;
        }
        
        
        function isValidChain($chain) {
            if ($chain[0] != Block::genesis()) return 0;
            for ($i=1; $i<count($chain); $i++) {
                $block = $chain[$i];
                $lastBlock = $chain[$i-1];
                if ($block->lastHash !== $lastBlock->hash || $block->hash !== Block::blockHash($block)) {
                return 0;
                }
            }
            return 1;
        }
        
        
        function replaceChain($newChain) {
            if (count($newChain) <= count($this->chain)) {
                echo "Received chain is not longer than the current chain.\n";
                return;
            } else if (!$this->isValidChain($newChain)) {
                echo "The received chain is not valid.\n";
                return;
            }

            echo "Replacing blockchain with the new chain.\n";
            $this->chain = $newChain;
            }
    }
?>
