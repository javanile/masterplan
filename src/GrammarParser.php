<?php
/*
 *** DON'T EDIT THIS FILE! ***
 *
 * This file was automatically generated by the Lime parser generator.
 * The real source code you should be looking at is in one or more
 * grammar files in the Lime format.
 *
 * THE ONLY REASON TO LOOK AT THIS FILE is to see where in the grammar
 * file that your error happened, because there are enough comments to
 * help you debug your grammar.

 * If you ignore this warning, you're shooting yourself in the brain,
 * not the foot.
 */

namespace JavanileDefine;

class GrammarParser extends \Genesis\Lime\LimeParser {
  public $qi = 0;
  public $i = array(
    array(
      'loads_stmt' => 's 1',
      'define_stmt' => 's 27',
      'DEFINE' => 's 3',
      'start_stmt' => 's 28',
      "'start'" => "a 'start'"
    ),
    array(
      'define_stmt' => 's 2',
      'DEFINE' => 's 3',
      '#' => 'r 0'
    ),
    array(
      'DEFINE' => 'r 2',
      '#' => 'r 2'
    ),
    array(
      'concept' => 's 4',
      'LITERAL' => 's 9',
      'ROUTE' => 's 10'
    ),
    array(
      "'{'" => 's 5',
      'WITH' => 's 18',
      'DEFINE' => 'r 3',
      '#' => 'r 3'
    ),
    array(
      'instruction_list' => 's 6',
      "'instruction_list'12" => 's 15',
      'LITERAL' => 'r 12',
      'ROUTE' => 'r 12'
    ),
    array(
      "'}'" => 's 7',
      'instruction' => 's 8',
      "'instruction'15" => 's 13',
      'LITERAL' => 'r 15',
      'ROUTE' => 'r 15'
    ),
    array(
      'DEFINE' => 'r 4',
      '#' => 'r 4'
    ),
    array(
      'LITERAL' => 's 9',
      'ROUTE' => 's 10',
      "';'" => 's 11',
      'concept' => 's 12'
    ),
    array(
      'WITH' => 'r 10',
      "'{'" => 'r 10',
      'DEFINE' => 'r 10',
      "','" => 'r 10',
      "';'" => 'r 10',
      'LITERAL' => 'r 10',
      'ROUTE' => 'r 10',
      '#' => 'r 10'
    ),
    array(
      'WITH' => 'r 11',
      "'{'" => 'r 11',
      'DEFINE' => 'r 11',
      "','" => 'r 11',
      "';'" => 'r 11',
      'LITERAL' => 'r 11',
      'ROUTE' => 'r 11',
      '#' => 'r 11'
    ),
    array(
      "'}'" => 'r 14',
      'LITERAL' => 'r 14',
      'ROUTE' => 'r 14'
    ),
    array(
      "';'" => 'r 17',
      'LITERAL' => 'r 17',
      'ROUTE' => 'r 17'
    ),
    array(
      'LITERAL' => 's 9',
      'ROUTE' => 's 10',
      'concept' => 's 14'
    ),
    array(
      'LITERAL' => 'r 16',
      'ROUTE' => 'r 16',
      "';'" => 'r 16'
    ),
    array(
      'instruction' => 's 16',
      "'instruction'15" => 's 13',
      'LITERAL' => 'r 15',
      'ROUTE' => 'r 15'
    ),
    array(
      'LITERAL' => 's 9',
      'ROUTE' => 's 10',
      "';'" => 's 17',
      'concept' => 's 12'
    ),
    array(
      'LITERAL' => 'r 13',
      'ROUTE' => 'r 13',
      "'}'" => 'r 13'
    ),
    array(
      'concept_list' => 's 19',
      "'concept_list'7" => 's 25',
      'LITERAL' => 'r 7',
      'ROUTE' => 'r 7'
    ),
    array(
      "'{'" => 's 20',
      "','" => 's 23',
      'DEFINE' => 'r 5',
      '#' => 'r 5'
    ),
    array(
      'instruction_list' => 's 21',
      "'instruction_list'12" => 's 15',
      'LITERAL' => 'r 12',
      'ROUTE' => 'r 12'
    ),
    array(
      "'}'" => 's 22',
      'instruction' => 's 8',
      "'instruction'15" => 's 13',
      'LITERAL' => 'r 15',
      'ROUTE' => 'r 15'
    ),
    array(
      'DEFINE' => 'r 6',
      '#' => 'r 6'
    ),
    array(
      'concept' => 's 24',
      'LITERAL' => 's 9',
      'ROUTE' => 's 10'
    ),
    array(
      "'{'" => 'r 9',
      "','" => 'r 9',
      'DEFINE' => 'r 9',
      '#' => 'r 9'
    ),
    array(
      'concept' => 's 26',
      'LITERAL' => 's 9',
      'ROUTE' => 's 10'
    ),
    array(
      "','" => 'r 8',
      "'{'" => 'r 8',
      'DEFINE' => 'r 8',
      '#' => 'r 8'
    ),
    array(
      'DEFINE' => 'r 1',
      '#' => 'r 1'
    ),
    array(
      '#' => 'r 18'
    )
  );
  public $d = array(

  );
  public $errors = array();
  function reduce_0_start_stmt_1($tokens, &$result) {
    // (0) start_stmt :=  loads_stmt
    $result = reset($tokens);
  }

  function reduce_1_loads_stmt_1($tokens, &$result) {
    // (1) loads_stmt :=  define_stmt
    $result = reset($tokens);
  }

  function reduce_2_loads_stmt_2($tokens, &$result) {
    // (2) loads_stmt :=  loads_stmt  define_stmt
    $result = reset($tokens);
  }

  function reduce_3_define_stmt_1($tokens, &$result) {
    // (3) define_stmt :=  DEFINE  concept
    $result = reset($tokens);
    $this->define($tokens[1]);
  }

  function reduce_4_define_stmt_2($tokens, &$result) {
    // (4) define_stmt :=  DEFINE  concept  '{'  instruction_list  '}'
    $result = reset($tokens);
    $this->define($tokens[1], [], $tokens[3]);
  }

  function reduce_5_define_stmt_3($tokens, &$result) {
    // (5) define_stmt :=  DEFINE  concept  WITH  concept_list
    $result = reset($tokens);
    $this->define($tokens[1], $tokens[3]);
  }

  function reduce_6_define_stmt_4($tokens, &$result) {
    // (6) define_stmt :=  DEFINE  concept  WITH  concept_list  '{'  instruction_list  '}'
    $result = reset($tokens);
    $this->define($tokens[1], $tokens[3], $tokens[5]);
  }

  function reduce_7_concept_list7_1($tokens, &$result) {
    // (7) 'concept_list'7 :=  ε
    $result = reset($tokens);
    $result = [];
  }

  function reduce_8_concept_list_1($tokens, &$result) {
    // (8) concept_list :=  'concept_list'7  concept
    $result = reset($tokens);
    $result[] = $tokens[1];
  }

  function reduce_9_concept_list_2($tokens, &$result) {
    // (9) concept_list :=  concept_list  ','  concept
    $result = reset($tokens);
    $tokens[0][] = $tokens[2]; $result = $tokens[0];
  }

  function reduce_10_concept_1($tokens, &$result) {
    // (10) concept :=  LITERAL
    $result = reset($tokens);
  }

  function reduce_11_concept_2($tokens, &$result) {
    // (11) concept :=  ROUTE
    $result = reset($tokens);
  }

  function reduce_12_instruction_list12_1($tokens, &$result) {
    // (12) 'instruction_list'12 :=  ε
    $result = reset($tokens);
    $result = [];
  }

  function reduce_13_instruction_list_1($tokens, &$result) {
    // (13) instruction_list :=  'instruction_list'12  instruction  ';'
    $result = reset($tokens);
    $result[] = $tokens[1];
  }

  function reduce_14_instruction_list_2($tokens, &$result) {
    // (14) instruction_list :=  instruction_list  instruction  ';'
    $result = reset($tokens);
    $tokens[0][] = $tokens[1]; $result = $tokens[0];
  }

  function reduce_15_instruction15_1($tokens, &$result) {
    // (15) 'instruction'15 :=  ε
    $result = reset($tokens);
    $result = [];
  }

  function reduce_16_instruction_1($tokens, &$result) {
    // (16) instruction :=  'instruction'15  concept
    $result = reset($tokens);
    $result[] = $tokens[1];
  }

  function reduce_17_instruction_2($tokens, &$result) {
    // (17) instruction :=  instruction  concept
    $result = reset($tokens);
    $tokens[0][] = $tokens[1]; $result = $tokens[0];
  }

  function reduce_18_start_1($tokens, &$result) {
    // (18) 'start' :=  start_stmt
    $result = reset($tokens);
  }

  public $method = array(
    'reduce_0_start_stmt_1',
    'reduce_1_loads_stmt_1',
    'reduce_2_loads_stmt_2',
    'reduce_3_define_stmt_1',
    'reduce_4_define_stmt_2',
    'reduce_5_define_stmt_3',
    'reduce_6_define_stmt_4',
    'reduce_7_concept_list7_1',
    'reduce_8_concept_list_1',
    'reduce_9_concept_list_2',
    'reduce_10_concept_1',
    'reduce_11_concept_2',
    'reduce_12_instruction_list12_1',
    'reduce_13_instruction_list_1',
    'reduce_14_instruction_list_2',
    'reduce_15_instruction15_1',
    'reduce_16_instruction_1',
    'reduce_17_instruction_2',
    'reduce_18_start_1'
  );
  public $a = array(
    array(
      'symbol' => 'start_stmt',
      'len' => 1,
      'replace' => true
    ),
    array(
      'symbol' => 'loads_stmt',
      'len' => 1,
      'replace' => true
    ),
    array(
      'symbol' => 'loads_stmt',
      'len' => 2,
      'replace' => true
    ),
    array(
      'symbol' => 'define_stmt',
      'len' => 2,
      'replace' => true
    ),
    array(
      'symbol' => 'define_stmt',
      'len' => 5,
      'replace' => true
    ),
    array(
      'symbol' => 'define_stmt',
      'len' => 4,
      'replace' => true
    ),
    array(
      'symbol' => 'define_stmt',
      'len' => 7,
      'replace' => true
    ),
    array(
      'symbol' => "'concept_list'7",
      'len' => 0,
      'replace' => false
    ),
    array(
      'symbol' => 'concept_list',
      'len' => 2,
      'replace' => true
    ),
    array(
      'symbol' => 'concept_list',
      'len' => 3,
      'replace' => true
    ),
    array(
      'symbol' => 'concept',
      'len' => 1,
      'replace' => true
    ),
    array(
      'symbol' => 'concept',
      'len' => 1,
      'replace' => true
    ),
    array(
      'symbol' => "'instruction_list'12",
      'len' => 0,
      'replace' => false
    ),
    array(
      'symbol' => 'instruction_list',
      'len' => 3,
      'replace' => true
    ),
    array(
      'symbol' => 'instruction_list',
      'len' => 3,
      'replace' => true
    ),
    array(
      'symbol' => "'instruction'15",
      'len' => 0,
      'replace' => false
    ),
    array(
      'symbol' => 'instruction',
      'len' => 2,
      'replace' => true
    ),
    array(
      'symbol' => 'instruction',
      'len' => 2,
      'replace' => true
    ),
    array(
      'symbol' => "'start'",
      'len' => 1,
      'replace' => true
    )
  );
}

// Time: 0.0069830417633057 seconds
// Memory: 1562248 bytes