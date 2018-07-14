<?php
require 'blockchain';

// genesis block
if (!$res = addblock('blockchain.dat',
  '创世区块链',
  true)) exit("Got error: ".$res."\n");

// add additional blocks
if (!$res = addblock('blockchain.dat',
  'Block'
  )) exit("Got error: ".$res."\n");

// add additional blocks
if (!$res = addblock('blockchain.dat',
  '创建一个区块'
  )) exit("Got error: ".$res."\n");
		

