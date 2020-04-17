## 安装

### composer方式

composer为PHP的包管理工具，推荐使用此种方式安装本开发包。在安装本开发包之前，请先安装composer，在此不再赘述。此处推荐一个镜像源：[https://mirrors.aliyun.com/composer/](https://mirrors.aliyun.com/composer/)。然后执行以下命令即可（版本可自行指定，默认最高版本）。

```
$ composer require hillpy/mini-program-sdk 1.*
```

### 直接下载

直接下载（[发行版](https://github.com/hillpy/MiniProgramSDK/releases)）至你的项目下，引入src目录的MiniProgram.php文件。(use hillpy\MiniProgramSDK\MiniProgram;)