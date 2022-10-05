<?php
/**
* Retrieve the data for a customer from cache
*
* @param int $customerId ID of target customer
*
* @return array
*/
protected function getDataFromCache(int $customerId): array
{
    $redis = $this->getRedisConnection();
    $dataTypes = ['pages', 'posts', 'comments'];
    $result = [];
    foreach ($dataTypes as $dataType) {
        $keys = $redis->keys($dataType.'_'.$customerId.'_*');
        $result[$dataType] = $redis->mget($keys);
    }
    return $result;
}

