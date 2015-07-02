目录结构：
┌────────────────────────────────────┬──────────────────────────────────┐
├ Core   ════════════════════════════╡ThinkPHP核心框架                  ┤
│  ├ ThinkPHP.php      ──────────────┼                                  ┤
│  ├ Common                        ──┼                                  ┤
│  │  ├ build.php                    ┼                                  ┤
│  │  └ functions.php                ┼核心函数库                        ┤
│  ├ Conf              ──────────────┼                                  ┤
│  │  ├ Mode                         ┼                                  ┤
│  │  │  ├ common.php                ┼                                  ┤
│  │  │  └ sae.php                   ┼                                  ┤
│  │  ├ convention.php               ┼惯例配置文件                      ┤
│  │  ├ convention_sae.php           ┼                                  ┤
│  │  └ debug.php                    ┼惯例调试配置文件                  ┤
│  ├ Lang               ─────────────┼                                  ┤
│  │  ├ en-us.php                    ┼                                  ┤
│  │  ├ pt-br.php                    ┼                                  ┤
│  │  ├ zh-cn.php                    ┼                                  ┤
│  │  └ zh-tw.php                    ┼                                  ┤
│  ├ Library           ──────────────┼                                  ┤
│  │  ├ Behavior                     ┼系统行为类库                      ┴──────┐
│  │  │  ├ AgentCheckBehavior.class         ┼                                  ┤
│  │  │  ├ BorisBehavior.class              ┼                                  ┤
│  │  │  ├ BrowserCheckBehavior.class       ┼                                  ┤
│  │  │  ├ BuildLiteBehavior.class          ┼                                  ┤
│  │  │  ├ CheckActionRouteBehavior.class   ┼                                  ┤
│  │  │  ├ CheckLangBehavior.class          ┼                                  ┤
│  │  │  ├ ChromeShowPageTraceBehavior.class┼                                  ┤
│  │  │  ├ ContentReplaceBehavior.class     ┼                                  ┤
│  │  │  ├ CronRunBehavior.class            ┼                                  ┤
│  │  │  ├ FireShowPageTraceBehavior.class  ┼                                  ┤
│  │  │  ├ ParseTemplateBehavior.class      ┼                                  ┤
│  │  │  ├ ReadHtmlCacheBehavior.class      ┼                                  ┤
│  │  │  ├ RobotCheckBehavior.class         ┼                                  ┤
│  │  │  ├ ShowPageTraceBehavior.class      ┼                                  ┤
│  │  │  ├ ShowRuntimeBehavior.class        ┼                                  ┤
│  │  │  ├ TokenBuildBehavior.class         ┼                                  ┤
│  │  │  ├ UpgradeNoticeBehavior.class      ┼                                  ┤
│  │  │  └ WriteHtmlCacheBehavior.class   ┬─┘                                  ┤
│  │  ├ Org                               ┼                                  ┬─┘
│  │  │  ├ Net                            ┼                                  ┤
│  │  │  └ Util                           ┼                                  ┤
│  │  ├ Think                             ┼核心类库包                        ┤
│  │  │  ├ Cache                          ┼                                  ┤
│  │  │  │  └ Driver                      ┼缓存驱动类库                      ┤
│  │  │  ├ Controller                     ┼                                  ┤
│  │  │  │  ├ HproseController.class      ┼                                  ┤
│  │  │  │  ├ JsonRpcController.class     ┼                                  ┤
│  │  │  │  ├ RestController.class        ┼                                  ┤
│  │  │  │  ├ RpcController.class         ┼                                  ┤
│  │  │  │  └ YarController.class         ┼                                  ┤
│  │  │  ├ Crypt                          ┼                                  ┤
│  │  │  │  └ Driver                      ┼                                  ┤
│  │  │  ├ Db                             ┼                                  ┤
│  │  │  │  └ Driver                      ┼数据库驱动类库                    ┤
│  │  │  ├ Image                          ┼                                  ┤
│  │  │  │  └ Driver                      ┼                                  ┤
│  │  │  ├ Log                            ┼                                  ┤
│  │  │  │  └ Driver                      ┼日志记录驱动类库                  ┤
│  │  │  ├ Model                          ┼                                  ┤
│  │  │  │  ├ AdvModel.class              ┼                                  ┤
│  │  │  │  ├ MongoModel.class            ┼                                  ┤
│  │  │  │  ├ RelationModel.class         ┼                                  ┤
│  │  │  │  └ ViewModel.class             ┼                                  ┤
│  │  │  ├ Session                        ┼                                  ┤
│  │  │  │  └ Driver                      ┼Session驱动类库                   ┤
│  │  │  ├ Storage                        ┼                                  ┤
│  │  │  │  └ Driver                      ┼存储驱动类库                      ┤
│  │  │  ├ Template                       ┼                                  ┤
│  │  │  │  ├ Driver                      ┼第三方模板引擎驱动类库            ┤
│  │  │  │  ├ TagLib                      ┼内置模板引擎标签库扩展类库        ┤
│  │  │  │  └ TagLib.class                ┼                                  ┤
│  │  │  ├ Upload                         ┼                                  ┤
│  │  │  │  └ Driver                      ┼                                  ┤
│  │  │  ├ Verify                         ┼                                  ┤
│  │  │  │  ├ bgs                         ┼                                  ┤
│  │  │  │  ├ ttfs                        ┼                                  ┤
│  │  │  │  └ zhttfs                      ┼                                  ┤
│  │  │  ├ App.class                      ┼核心应用类                        ┤
│  │  │  ├ Auth.class                     ┼                                  ┤
│  │  │  ├ Behavior.class                 ┼基础行为类                        ┤
│  │  │  ├ Build.class                    ┼                                  ┤
│  │  │  ├ Cache.class                    ┼核心缓存类                        ┤
│  │  │  ├ Controller.class               ┼基础控制器类                      ┤
│  │  │  ├ Crypt.class                    ┼                                  ┤
│  │  │  ├ Db.class                       ┼                                  ┤
│  │  │  ├ Dispatcher.class               ┼URL解析调度类                     ┤
│  │  │  ├ Exception.class                ┼系统基础异常类                    ┤
│  │  │  ├ Hook.class                     ┼系统钩子类                        ┤
│  │  │  ├ Image.class                    ┼                                  ┤
│  │  │  ├ Log.class                      ┼系统日志记录类                    ┤
│  │  │  ├ Model.class                    ┼系统基础模型类                    ┤
│  │  │  ├ Page.class                     ┼                                  ┤
│  │  │  ├ Route.class                    ┼系统路由类                        ┤
│  │  │  ├ Storage.class                  ┼系统存储类                        ┤
│  │  │  ├ Template.class                 ┼内置模板引擎类                    ┤
│  │  │  ├ Think.class                    ┼系统引导类                        ┤
│  │  │  ├ Upload.class                   ┼                                  ┤
│  │  │  ├ Verify.class                   ┼                                  ┤
│  │  │  ├ View.class                     ┼系统视图类                        ┤
│  │  └ Vendor                               ┼                               ┴──┐
│  │     ├ Boris                             ┼                                  ┤
│  │     ├ EaseTemplate                      ┼                                  ┤
│  │     ├ Hprose                            ┼                                  ┤
│  │     ├ jsonRPC                           ┼                                  ┤
│  │     ├ phpRPC                            ┼                                  ┤
│  │     ├ SmartTemplate                     ┼                                  ┤
│  │     ├ Smarty                            ┼                                  ┤
│  │     ├ spyc                              ┼                                  ┤
│  │     └ TemplateLite                      ┼                                  ┤
│  ├ Mode                ──────────────┼                                  ┬─────┘
│  │  ├ Api                            ┼                                  ┤
│  │  │  ├ api.class                   ┼                                  ┤
│  │  │  ├ Controller.class            ┼                                  ┤
│  │  │  ├ Dispatcher.class            ┼                                  ┤
│  │  │  └ functions.php               ┼                                  ┤
│  │  ├ Sae                            ┼                                  ┤
│  │  │  └ convention.php              ┼                                  ┤
│  │  ├ api.php                        ┼                                  ┤
│  │  ├ common.php                     ┼普通模式定义文件                  ┤
│  │  └ sae.php                        ┼                                  ┤
│  └ Tpl                 ──────────────┼                                  ┤
│     ├ default_index.tpl              ┼                                  ┤
│     ├ dispatch_jump.tpl              ┼                                  ┤
│     ├ page_trace.tpl                 ┼                                  ┤
│     └ think_exception.tpl            ┼                                  ┤
├ Lib  ════════════════════════════════╡自定义库或第三方库                ┤
│  ├                                   ┼                                  ┤
│  ├                                   ┼                                  ┤
│  └                                   ┼                                  ┤
│                                      ┤                                  │ 
└──────────────────────────────────────┴──────────────────────────────────┘
