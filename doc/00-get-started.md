- 基础知识体系（以不变应万变）
- 英语、技术阅读与写作
- 技术交流
-- 逻辑以抽象为高，辩论以实践为先
-- 重视设计方案、技术规范
-- 可维护性是软件项目的“身材”，坚持健身不容易，但大家都知道健身的好处
- 调试与测量
-- 错误处理机制是软件的免疫系统，我们怎么对待免疫系统？一：关注、理解免疫系统的反馈（不回避错误信息）；二：不断增强免疫系统
- 编码要和产品意识、业务实效、设计思想、工程经验结合起来
- 与工作结合，提出自己的目标

Yii2框架介绍

- 依赖管理（Composer）与类的自动加载
- Yii2 MVC最小代码
- 单元测试

依赖管理
========

所谓依赖：运行某代码需要引入的其他代码。

“其他代码”可以是第三方的公开分发的开源代码，也可以是我们自己的代码。

依赖的定义非常简单，标识、版本和依赖关系，以摄影为例：

- 摄影依赖相机
- 相机有型号之分别（版本）
- 镜头依赖相机（和摄影是间接关系）

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

1）请思考vendor目录为什么不提交版本控制？

2）理解require和require-dev的区别

Composer
--------

Composer可类比Java的Maven，Python的pip，Ruby的RubyGems……

Composer下载地址：https://getcomposer.org/download/

实践：

1）理解Composer的指令

- install
- update（和install的区别？）
- remove
- dump
- show
- status
- global
- help
- -v/-vv/-vvv开关的作用

2）自己定义一个Composer包，并在另一个项目里去引入这个包

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

1）理解fxp/composer-asset-plugin和asset-packagist.org的区别？

自动加载
--------

Composer根据PSR1、PSR4规范实现类的自动加载

把类名和类所在文件对应起来的规则。

实践：

1）理解PSR4、PSR1定义，并总结其异同。

Yii2 MVC最小代码
================

克隆这个仓库，https://github.com/lhjx/playii

https://github.com/lhjx/playii/commit/467a46c88114edc7c720b0734589c538d4c8ccfa 这个commit就是Yii2项目所需的最小代码

实践：

1）写一个CRUD的Yii2项目demo

单元测试
========

PHPUnit
-------

可以下载安装：https://phpunit.de/getting-started.html

也可以通过Composer安装。

PHPUnit的运行配置，可以通过XML文件指定，默认读取phpunit.xml.dist，如果phpunit.xml存在，优先读phpunit.xml。

phpunit.xml.dist与phpunit.xml是默认配置与本地／自定义配置的一个例子。

实践：

1）实现 Playii\Practice\P0001\Answer.php 里的getSortedCoreComponentClassNames()方法，让 Tests\Practice\P0001\P0001Test.php 测试通过

# 关于练手的几个要求

- 必须做
- 按时做
- 可以讨论、寻求帮助，但要说明是谁给予了支持
- 会有抽查和复查（理解成切磋）
- 欢迎积极提意见
