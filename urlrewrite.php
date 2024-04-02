<?php
$arUrlRewrite=array (
  0 => 
  array (
    'CONDITION' => '#^/services/(.*)/(.*)/(.*)/($|index\\\\.|\\\\?.*)#',
    'RULE' => 'SECTION_CODE=$2&ELEMENT_CODE=$3',
    'ID' => '',
    'PATH' => '/services/detail.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/services/(.*)/(.*)/($|index\\\\.|\\\\?.*)#',
    'RULE' => 'SECTION_CODE=$2',
    'ID' => '',
    'PATH' => '/services/section.php',
    'SORT' => 100,
  ),
  8 => 
  array (
    'CONDITION' => '#^/products/(.*)/(.*)/($|index\\\\.|\\\\?.*)#',
    'RULE' => 'SECTION_CODE=$1&ELEMENT_CODE=$2',
    'ID' => '',
    'PATH' => '/products/detail.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/apparats/(.*)/($|index\\\\.|\\\\?.*)#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => '',
    'PATH' => '/apparats/detail.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/services/(.*)/($|index\\\\.|\\\\?.*)#',
    'RULE' => 'SECTION_CODE=$1',
    'ID' => '',
    'PATH' => '/services/section.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/articles/(.*)/($|index\\\\.|\\\\?.*)#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => '',
    'PATH' => '/articles/detail.php',
    'SORT' => 100,
  ),
  9 => 
  array (
    'CONDITION' => '#^/products/(.*)/($|index\\\\.|\\\\?.*)#',
    'RULE' => 'SECTION_CODE=$1',
    'ID' => '',
    'PATH' => '/products/section.php',
    'SORT' => 100,
  ),
  10 => 
  array (
    'CONDITION' => '#^/training/(.*)/($|index\\\\.|\\\\?.*)#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => '',
    'PATH' => '/training/detail.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/doctors/(.*)/($|index\\\\.|\\\\?.*)#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => '',
    'PATH' => '/doctors/detail.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/brands/(.*)/($|index\\\\.|\\\\?.*)#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => '',
    'PATH' => '/brands/detail.php',
    'SORT' => 100,
  ),
  11 => 
  array (
    'CONDITION' => '#^/brands/(.*)/($|index\\\\.|\\\\?.*)#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => '',
    'PATH' => '/brands/detail.php',
    'SORT' => 100,
  ),
  13 => 
  array (
    'CONDITION' => '#^/action/(.*)/($|index\\\\.|\\\\?.*)#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => '',
    'PATH' => '/action/detail.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/news/(.*)/($|index\\\\.|\\\\?.*)#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => '',
    'PATH' => '/news/detail.php',
    'SORT' => 100,
  ),
  12 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
);
