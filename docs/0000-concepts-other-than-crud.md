依赖管理
========

所谓依赖：运行代码需要引入的其他代码。

“其他代码”可以是第三方的公开分发的开源代码，也可以是我们自己的代码。

描述依赖非常简单，即：标识、版本和依赖关系。

```
"require": {
    "php": ">=7.1.0",
    "ext-gd": "*",
    "yiisoft/yii2": "~2.0.6",
    "yiisoft/yii2-bootstrap": "~2.0.0",
    "yiisoft/yii2-swiftmailer": "~2.0.0 || ~2.1.0"
},
```

不仅代码包，PHP版本和扩展，也可以作为依赖来检查。

实践：

1.  请思考vendor目录为什么不提交版本控制？
2.  请解释require和require-dev的区别

Composer
--------

Composer可类比Java的Maven，Python的pip，Ruby的RubyGems……

Composer下载地址：https://getcomposer.org/download/

实践：

1.  请说明以下Composer的指令的用法
    - install
    - update（和install的区别？）
    - remove
    - dump
    - show
    - status
    - global
    - help
    - -v/-vv/-vvv开关的作用
    
2.  自己定义一个Composer包，并在另一个项目里去引入这个包

    不必发布到 https://packagist.org ，指定代码仓库源即可，参考文档：
    
    - https://getcomposer.org/doc/05-repositories.md#loading-a-package-from-a-vcs-repository
    - http://docs.phpcomposer.com/02-libraries.html#Publishing-to-a-VCS （中文）

前端资源包
----------

比如jQuery，比如Bootstrap。

前端代码，一般以bower或者npm方式来打包，Composer不能直接安装，所以有了：

https://github.com/fxpio/composer-asset-plugin

vs

https://asset-packagist.org/ （推荐）

实践：

1.  请说明fxp/composer-asset-plugin和asset-packagist.org的区别？

自动加载
--------

Composer根据PSR1、PSR4规范实现类的自动加载

把类名和类所在文件对应起来的规则。

实践：

1.  请说明PSR4、PSR1的异同。

Yii2 MVC最小代码
================

克隆这个仓库，https://github.com/lhjx/playii

https://github.com/lhjx/playii/commit/467a46c88114edc7c720b0734589c538d4c8ccfa 这个commit就是Yii2项目所需的最小代码

单元测试
========

PHPUnit
-------

可以下载安装：https://phpunit.de/getting-started.html

也可以通过Composer安装。

PHPUnit的运行配置，可以通过XML文件指定，默认读取phpunit.xml.dist，如果phpunit.xml存在，优先读phpunit.xml。

phpunit.xml.dist与phpunit.xml是默认配置与本地／自定义配置的一个例子。

实践：

1.  实现 Playii\Practice\P0001\Answer.php 里的getSortedCoreComponentClassNames()方法，让 Tests\Practice\P0001\P0001Test.php 测试通过
