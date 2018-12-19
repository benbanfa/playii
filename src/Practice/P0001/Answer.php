<?php

namespace Playii\Practice\P0001;

use yii\web\Application;

/**
 * 说明：
 *
 * - 此class注释里的Application都是指`yii\web\Application`
 * - 提供了createDummyApplication()方法，可获取Application对象
 */
class Answer
{
    /**
     * 获取Application所有默认组件（Core components）的类名
     * 按SORT_REGULAR方式排序，以数组形式返回
     *
     * @return array
     */
    public function getSortedCoreComponentClassNames()
    {
        return [];
    }

    /**
     * 创建一个Application对象
     *
     * @return Application
     */
    protected function createDummyApplication()
    {
        $config = [
            'id' => 'playii-exercise',
            'basePath' => __DIR__,
        ];

        $app = new Application($config);

        return $app;
    }
}
