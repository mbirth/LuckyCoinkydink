<?php

// Serendipity
// See LICENSE file for license information.

// FIXME: THIS IS A SHIM FOR BACKWARDS COMPATIBILITY - REMOVE WHEN NO LONGER NEEDED

use Serendipity\Database\DbFactory;

// SQLite3 only fetches by assoc, we will emulate the other result types
define(SQLITE3_ASSOC, 0);
define(SQLITE3_NUM, 1);
define(SQLITE3_BOTH, 2);

function serendipity_db_connect()
{
    global $serendipity;
    $db = DbFactory::createFromConfig($serendipity);
    return $db->connect();
}

function serendipity_db_reconnect()
{
    global $serendipity;
    $db = DbFactory::createFromConfig($serendipity);
    return $db->reconnect();
}

function serendipity_db_update($table, $keys, $values, $action = 'execute')
{
    global $serendipity;
    $db = DbFactory::createFromConfig($serendipity);
    return $db->update($table, $keys, $values, $action);
}

function serendipity_db_insert($table, $values, $action = 'execute')
{
    global $serendipity;
    $db = DbFactory::createFromConfig($serendipity);
    return $db->insert($table, $values, $action);
}

function serendipity_db_bool($val)
{
    global $serendipity;
    $db = DbFactory::createFromConfig($serendipity);
    return $db->bool($val);
}

function serendipity_db_get_interval($val, $ival = 900)
{
    global $serendipity;
    $db = DbFactory::createFromConfig($serendipity);
    return $db->getInterval($val, $ival);
}

function serendipity_db_implode($string, &$array, $type = 'int')
{
    global $serendipity;
    $db = DbFactory::createFromConfig($serendipity);
    return $db->implode($string, $array, $type);
}

function serendipity_db_concat($string)
{
    global $serendipity;
    $db = DbFactory::createFromConfig($serendipity);
    return $db->concat($string);
}

function serendipity_db_logmsg($msgstr)
{
    global $serendipity;
    $db = DbFactory::createFromConfig($serendipity);
    return $db->logmsg($msgstr);
}

function serendipity_db_begin_transaction()
{
    global $serendipity;
    $db = DbFactory::createFromConfig($serendipity);
    return $db->beginTransaction();
}

function serendipity_db_end_transaction($commit)
{
    global $serendipity;
    $db = DbFactory::createFromConfig($serendipity);
    return $db->endTransaction($commit);
}

function serendipity_db_in_sql($col, &$search_ids, $type = ' OR ')
{
    global $serendipity;
    $db = DbFactory::createFromConfig($serendipity);
    return $db->inSql($col, $search_ids, $type);
}

function serendipity_db_escape_string($string)
{
    global $serendipity;
    $db = DbFactory::createFromConfig($serendipity);
    return $db->escapeString($string);
}

function serendipity_db_limit($start, $offset)
{
    global $serendipity;
    $db = DbFactory::createFromConfig($serendipity);
    return $db->limit($start, $offset);
}

function serendipity_db_limit_sql($limitstring)
{
    global $serendipity;
    $db = DbFactory::createFromConfig($serendipity);
    return $db->limitSql($limitstring);
}

function serendipity_db_affected_rows()
{
    global $serendipity;
    $db = DbFactory::createFromConfig($serendipity);
    return $db->affectedRows();
}

function serendipity_db_updated_rows()
{
    global $serendipity;
    $db = DbFactory::createFromConfig($serendipity);
    return $db->updatedRows();
}

function serendipity_db_matched_rows()
{
    global $serendipity;
    $db = DbFactory::createFromConfig($serendipity);
    return $db->matchedRows();
}

function serendipity_db_insert_id($table = '', $id = '')
{
    global $serendipity;
    $db = DbFactory::createFromConfig($serendipity);
    return $db->insertId($table, $id);
}

function &serendipity_db_query($sql, $single = false, $result_type = "both", $reportErr = false, $assocKey = false, $assocVal = false, $expectError = false)
{
    global $serendipity;
    $db = DbFactory::createFromConfig($serendipity);
    return $db->query($sql, $single, $result_type, $reportErr, $assocKey, $assocVal, $expectError);
}

function serendipity_db_schema_import($query)
{
    global $serendipity;
    $db = DbFactory::createFromConfig($serendipity);
    return $db->schemaImport($query);
}

function serendipity_db_probe($hash, &$errs)
{
    global $serendipity;
    $db = DbFactory::createFromConfig($serendipity);
    return $db->probe($hash, $errs);
}

function serendipity_utf8mb4_ready()
{
    global $serendipity;
    $db = DbFactory::createFromConfig($serendipity);
    return $db->isUtf8mb4Ready();
}
