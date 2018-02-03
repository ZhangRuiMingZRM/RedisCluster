# RedisCluster
php redis4.0.7 集群示例  redis-cluster 
<h3>在 `node/`依次启动6个redis实例</h3>

`$ ./redis-server conf/redis.conf`

  <text>
  
  `3209:C 03 Feb 15:09:55.580 # oO0OoO0OoO0Oo Redis is starting oO0OoO0OoO0Oo`
  
  `3209:C 03 Feb 15:09:55.582 # Redis version=999.999.999, bits=64, commit=4aa2ecd9, modified=0, pid=3209, just started`
  
  `3209:C 03 Feb 15:09:55.582 # Configuration loaded`
</text>

<h3>搭建集群</h3>

在`redis/src`运行

`./redis-trib.rb create --replicas 1 127.0.0.1:7000 127.0.0.1:7001 127.0.0.1:7002 127.0.0.1:7003 127.0.0.1:7004 127.0.0.1:7005`

输入`yes`

ok! 集群搭建成功

`redis -c -p 7001`

`127.0.0.1:7001>set hello world`

`redis -c -p 7002`

`127.0.0.1:7002>get hello`

`127.0.0.1:7002>world`

<h3>测试成功 集群搭建完成！！！！！</h3>

