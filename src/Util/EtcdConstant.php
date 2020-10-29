<?php
namespace Yinge\Grpc\Util;

class EtcdConstant {

    /** @var string etcd 网关地址 */
    const ETCD_GATEWAY = 'etcd.yinge.tech:2379';
    /** @var int 默认grpc端口 */
    const DefaultGrpcPort = 5200;

    /** @var string product center  */
    const DefaultServerPCPrefix = '/grpc/server/pc/';
    /** @var string qpm */
    const DefaultServerQpmPrefix = '/grpc/server/qpm/';

    /** @var string webtest环境 前缀 */
    const EnvWebTestPrefix = '/webtest';
    /** @var string qa环境 前缀 */
    const EnvQAPrefix = '/qa';

    /** @var string etcd 权重配置 */
    const EtcdWeightConfPrefix = '/grpc/weight/config/';

    /** @var string[] 服务注册 ip忽略列表 */
    const IpIgnoreList = [
        '172.16.162.59' // webtest环境
    ];

    /** @var string[] 准许的前缀 */
    const AllowPrefixList = [
        self::DefaultServerPCPrefix,
        self::DefaultServerQpmPrefix,
        self::EnvWebTestPrefix.self::DefaultServerPCPrefix,
        self::EnvWebTestPrefix.self::DefaultServerQpmPrefix,

        self::EnvQAPrefix.self::DefaultServerPCPrefix,
        self::EnvQAPrefix.self::DefaultServerQpmPrefix,
    ];
}