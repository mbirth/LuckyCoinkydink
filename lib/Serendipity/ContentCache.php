<?php

// Serendipity
// See LICENSE file for license information.

namespace Serendipity;

use Serendipity\ConfigContainer;
use voku\cache\Cache;
use voku\cache\CacheAdapterAutoManager;
use voku\cache\AdapterArray;
use voku\cache\AdapterOpCache;

class ContentCache
{
    protected static $instance = null;
    protected $cache_manager;
    protected $cache;

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct()
    {
        // Configure voku/simple-cache to use templates_c as directory for the opcache files, the fallback
        // when Memcached and Redis are not used.

        $cfg = ConfigContainer::getInstance();
        $cacheDir = $cfg->get('serendipityPath') . '/templates_c/simple_cache';

        $this->cache_manager = new CacheAdapterAutoManager();
        $this->cache_manager->addAdapter(
            AdapterOpCache::class,
            static function () use ($cacheDir) {
                return $cacheDir;
            }
        );

        $this->cache_manager->addAdapter(
            AdapterArray::class
        );

        $this->cache = new Cache(
            null,
            null,
            false,
            true,
            false,
            false,
            false,
            false,
            '',
            $this->cache_manager,
            false
        );
    }

    public function addItem($key, $item, $ttl = 3600)
    {
        return $this->cache->setItem($key, $item, $ttl);
    }

    public function getItem($key)
    {
        return $this->cache->getItem($key);
    }

    public function clearCache()
    {
        return $this->cache->removeAll();
    }
}
