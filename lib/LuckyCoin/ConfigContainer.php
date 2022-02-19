<?php

// 幸運な偶然 - Lucky Coinkydink
// See LICENSE file for license information.

namespace LuckyCoin;

use ArrayAccess;

class ConfigContainer implements ArrayAccess
{
    protected static $instance = null;
    protected $serendipity;

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct()
    {
        // FIXME: Compatibility with old style
        global $serendipity;
        if (!is_array($serendipity)) {
            $serendipity = [];
        }
        $this->serendipity =& $serendipity;
    }

    public function offsetExists($offset): bool
    {
        return isset($this->serendipity[$offset]);
    }

    public function offsetGet($offset)
    {
        return isset($this->serendipity[$offset]) ? $this->serendipity[$offset] : null;
    }

    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->serendipity[] = $value;
        } else {
            $this->serendipity[$offset] = $value;
        }
    }

    public function offsetUnset($offset): void
    {
        unset($this->serendipity[$offset]);
    }

    public function has($key): bool
    {
        return isset($this->serendipity[$key]);
    }

    public function set($key, $value)
    {
        if (is_null($key)) {
            $this->serendipity[] = $value;
        } else {
            $this->serendipity[$key] = $value;
        }
    }

    public function setByRef($key, &$value)
    {
        if (is_null($key)) {
            $this->serendipity[] =& $value;
        } else {
            $this->serendipity[$key] =& $value;
        }
    }

    public function get($key)
    {
        return isset($this->serendipity[$key]) ? $this->serendipity[$key] : null;
    }

    public function &getByRef($key)
    {
        return isset($this->serendipity[$key]) ? $this->serendipity[$key] : null;
    }

    public function del($key): void
    {
        unset($this->serendipity[$key]);
    }

    public function &getSerendipity()
    {
        return $this->serendipity;
    }
}
