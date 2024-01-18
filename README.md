# PerlinPuzzle-Webshell-PHP

#### 介绍
使用分支对抗技术制作的PHP Webshell，截止2024年1月18日，共33个查杀引擎免杀

#### 绕过点
1. 使用刻意编写的变量覆盖漏洞传递参数；
2. 使用线性代数中的循环群运算原理制作程序解锁器；
3. 在“柏林噪声”随机数生成算法生成的数组中添加关键危险字符；
4. 关键危险字符的生成内容由程序解锁器的运算结果决定，若运算错误则无法生成正确字符；
5. 在程序的执行过程中使用阻断器，若未解锁则阻断函数返回值传递
6. 使用超长行注释干扰词法引擎。

#### 测试结果
最后一次绕过测试于2024年01月18日进行，共使用了国内外共35个现有的查杀引擎进行测试，成功绕过34个，绕过率97.1% ：

- 绕过成功：阿里伏魔引擎（非第三届挑战赛）、安恒云沙箱、大圣云沙箱、魔盾云沙箱、微步集成引擎共26个（微软、卡巴斯基、IKARUS、Avast、GDATA、安天、360、NANO、瑞星、Sophos、WebShell专杀、MicroAPT、OneStatic、ESET、小红伞、大蜘蛛、AVG、K7、江民、Baidu、TrustBook、熊猫、ClamAV、Baidu-China、OneAV、MicroNonPE）、D盾、Windows Defender、火绒安全软件



- 绕过失败：长亭百川WebShell查杀引擎


#### 运行环境

1.  操作系统：Windows、Linux、macOS
2.  PHP版本：PHP 5 全版本、PHP 7 全版本、PHP 8 全版本

#### 使用说明

1.  xxxx
2.  xxxx
3.  xxxx

#### 参与贡献

1.  Fork 本仓库
2.  新建 Feat_xxx 分支
3.  提交代码
4.  新建 Pull Request


#### 特技

1.  使用 Readme\_XXX.md 来支持不同的语言，例如 Readme\_en.md, Readme\_zh.md
2.  Gitee 官方博客 [blog.gitee.com](https://blog.gitee.com)
3.  你可以 [https://gitee.com/explore](https://gitee.com/explore) 这个地址来了解 Gitee 上的优秀开源项目
4.  [GVP](https://gitee.com/gvp) 全称是 Gitee 最有价值开源项目，是综合评定出的优秀开源项目
5.  Gitee 官方提供的使用手册 [https://gitee.com/help](https://gitee.com/help)
6.  Gitee 封面人物是一档用来展示 Gitee 会员风采的栏目 [https://gitee.com/gitee-stars/](https://gitee.com/gitee-stars/)
