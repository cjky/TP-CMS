# About TP-CMS
这是一个关于使用ThinkPHP框架构建的CMS系统，用于便捷快速的构建一套WEB管理平台。

目录结构：
┌─────────────────────────────┬──────────────────────────────────┐
├ index.php        ───────────┼入口文件                          ┤
├ application      ───────────┼项目文件夹                        ┤
│  ├ Admin                  ──┼系统后台项目                      ┤
│  │  ├ Conf                  ┼ 后台配置                         ┤
│  │  ├ Common                ┼ 后台函数                         ┤
│  │  └ Controller            ┼ 后台控制器                       ┤
│  ├ Common                 ──┼公共模块                          ┤
│  │  ├ Common                ┼ 公共函数目录                     ┤
│  │  ├ Conf                  ┼ 公共配置文件目录                 ┤
│  │  ├ Controller            ┼ 公共控制器目录                   ┤
│  │  ├ Logic                 ┼ 逻辑层目录[可选]                 ┤
│  │  ├ Model                 ┼ 数据模型目录                     ┤
│  │  └ Service               ┼ 接口层目录[可选]                 ┤
│  ├ Home                   ──┼主项目模块                        ┤
│  │  ├ Conf                  ┼ 主项目配置                       ┤
│  │  ├ Common                ┼ 主项目函数                       ┤
│  │  └ Controller            ┼ 主项目控制器                     ┤
│  └ User                   ──┼用户中心                          ┤
│     ├ Conf                  ┼ 用户模块配置                     ┤
│     ├ Common                ┼ 用户模块函数                     ┤
│     └ Controller            ┼ 用户模块控制器                   ┤
├ code             ───────────┬系统核心代码                      ┤
│  ├ Core                   ──┼ ThinkPHP核心                     ┤
│  └ Lib                    ──┴ 引用或自定义类库                 ┤
├ data             ───────────┬系统运行时数据目录                ┤
│  ├ backup                 ──┼ 系统备份目录                     ┤
│  ├ conf                   ──┼ 系统运行时配置目录               ┤
│  ├ runtime                ──┼ 系统运行时缓存目录               ┤
│  └ upload                 ──┴ 系统上传文件保存目录             ┤
├ public           ───────────┬系统公共目录                      ┤
│  ├ statics                ──┼ 静态资源目录                     ┤
│  │  ├ css                   ┼   系统样式                       ┤
│  │  ├ js                    ┼   系统JavaScript                 ┤
│  │  ├ img                   ┼   系统图像资源文件               ┤
│  │  ├ bootstrap             ┼                                  ┤
│  │  ├ jquery                ┼                                  ┤
│  │  ├ less                  ┼                                  ┤
│  │  ├ qrcode                ┼                                  ┤
│  │  └ slippry               ┴                                  ┤
│  ├ template               ──┬ 系统DOM模板                      ┤
│  │  ├ base.html             ┼                                  ┤
│  │  ├ Home_base.html        ┼                                  ┤
│  │  ├ Admin                 ┼用户模块视图                      ┤
│  │  ├ Home                  ┼主项目视图                        ┤
│  │  ├ User                  ┼用户模块视图                      ┤
│  │                          │                                  │
│  └                        ──┼                                  ┤
│                             ┤                                  │
└─────────────────────────────┴──────────────────────────────────┘
