<?php
namespace Aura\Sql\Connection;

/**
 * Test class for Mysql.
 * Generated by PHPUnit on 2011-06-21 at 16:49:57.
 */
class MysqlTest extends AbstractConnectionTest
{
    protected $extension = 'pdo_mysql';
    
    protected $connection_type = 'mysql';    
    
    protected $expect_fetch_table_list = ['aura_test_table'];
    
    protected $expect_fetch_table_list_schema = ['aura_test_table'];
    
    protected $expect_fetch_table_cols = [
        'id' => [
            'name' => 'id',
            'type' => 'int',
            'size' => 11,
            'scale' => null,
            'default' => null,
            'notnull' => true,
            'primary' => true,
            'autoinc' => true,
        ],
        'name' => [
            'name' => 'name',
            'type' => 'varchar',
            'size' => 50,
            'scale' => null,
            'default' => null,
            'notnull' => true,
            'primary' => false,
            'autoinc' => false,
        ],
        'test_size_scale' => [
            'name' => 'test_size_scale',
            'type' => 'decimal',
            'size' => 7,
            'scale' => 3,
            'default' => null,
            'notnull' => false,
            'primary' => false,
            'autoinc' => false,
        ],
        'test_default_null' => [
            'name' => 'test_default_null',
            'type' => 'char',
            'size' => 3,
            'scale' => null,
            'default' => null,
            'notnull' => false,
            'primary' => false,
            'autoinc' => false,
        ],
        'test_default_string' => [
            'name' => 'test_default_string',
            'type' => 'varchar',
            'size' => 7,
            'scale' => null,
            'default' => 'string',
            'notnull' => false,
            'primary' => false,
            'autoinc' => false,
        ],
        'test_default_number' => [
            'name' => 'test_default_number',
            'type' => 'decimal',
            'size' => 5,
            'scale' => null,
            'default' => '12345',
            'notnull' => false,
            'primary' => false,
            'autoinc' => false,
        ],
        'test_default_ignore' => [
            'name' => 'test_default_ignore',
            'type' => 'timestamp',
            'size' => null,
            'scale' => null,
            'default' => null,
            'notnull' => true,
            'primary' => false,
            'autoinc' => false,
        ],
    ];
    
    protected $expect_quote_scalar = "'\\\"foo\\\" bar \\'baz\\''";
    
    protected $expect_quote_array = "'\\\"foo\\\"', 'bar', '\'baz\''";
    
    protected $expect_quote_into = "foo = '\'bar\''";
    
    protected $expect_quote_into_many = "foo = '\'bar\'' AND zim = '\'baz\''";
    
    protected $expect_quote_multi = "id = 1 AND foo = 'bar' AND zim IN('dib', 'gir', 'baz')";
    
    protected $expect_quote_name_table_as_alias = '`table` AS `alias`';
    
    protected $expect_quote_name_table_col_as_alias = '`table`.`col` AS `alias`';
    
    protected $expect_quote_name_table_alias = '`table` `alias`';
    
    protected $expect_quote_name_table_col_alias = '`table`.`col` `alias`';
    
    protected $expect_quote_name_plain = '`table`';
    
    protected $expect_quote_names_in = "*, *.*, `foo`.`bar`, CONCAT('foo.bar', \"baz.dib\") AS `zim`";
    
    protected $expect_select_query_class = 'Aura\Sql\Query\Mysql\Select';
    
    protected $expect_delete_query_class = 'Aura\Sql\Query\Mysql\Delete';
    
    protected $expect_insert_query_class = 'Aura\Sql\Query\Mysql\Insert';
    
    protected $expect_update_query_class = 'Aura\Sql\Query\Mysql\Update';
}
