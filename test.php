<?php
/**
 * Created by PhpStorm.
 * User: zrming
 * Date: 2018/2/2
 * Time: 下午4:45
 */
"./redis-trib.rb create --replicas 1 127.0.0.1:7000 127.0.0.1:7001 127.0.0.1:7002 127.0.0.1:7003 127.0.0.1:7004 127.0.0.1:7005";
$seeds = array(
	"127.0.0.1:7000", 
	"127.0.0.1:7001",
	"127.0.0.1:7002",
	"127.0.0.1:7003",
	"127.0.0.1:7004",
	"127.0.0.1:7005");
$redis_cluster = new RedisCluster( NULL, $seeds, 1.5, 1.5 );
$redis_cluster->set('clutertest','***ok***');
$value = $redis_cluster->get('clutertest');
var_dump($value);







