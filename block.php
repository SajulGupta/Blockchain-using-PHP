<?php
class Block {
    function __construct($timestamp, $lastHash, $hash, $data) {
        $this->timestamp = $timestamp;
        $this->lastHash = $lastHash;
        $this->hash = $hash;
        $this->data = $data;
    }
    function toString() {
        return "Block -
            Timestamp   : {$this->timestamp}
            Last Hash   : {$this->lastHash}
            Hash        : {$this->hash}
            Data        : " . ($this->data) . "\n";
    }

    static function genesis() {
        return new Block("Genesis time", "-----", "f1r57-h45h", []);
    }
    
    static function mineBlock($lastBlock, $data) {
        $timestamp =  time();
        $lastHash = $lastBlock->hash;
        $hash = Block::hash($timestamp, $lastHash, $data);
        return new Block($timestamp, $lastHash, $hash, $data);
    }
    
    static function hash($timestamp, $lastHash, $data) {
        return hash("sha256" ,"${timestamp}${lastHash}${data}");
    }
    
    static function blockHash($block) {
        $timestamp = $block->timestamp;
        $lastHash = $block->lastHash;
        $data = $block->data;
        
        return Block::hash($timestamp, $lastHash, $data);
    }

}
?>
