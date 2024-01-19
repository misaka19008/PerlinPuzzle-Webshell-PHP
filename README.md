# PerlinPuzzle-Webshell-PHP

#### 介绍
使用分支对抗技术制作的PHP Webshell， **截止2024年1月18日，共`34`个查杀引擎免杀** 。

#### 声明

 **本人于2024年01月19日公开此WebShell之前，并未向任何平台提交关于该WebShell的绕过漏洞报告，也从未领取过任何平台的漏洞赏金或安全币。** 

#### 绕过点
1. 使用刻意编写的变量覆盖漏洞传递参数；
2. 使用线性代数中的循环群运算原理制作程序锁定器；
3. 在“柏林噪声”随机数生成算法生成的数组中添加关键危险字符；
4. 关键危险字符的生成内容由程序解锁器的运算结果决定，若运算错误则无法生成正确字符；
5. 在程序的执行过程中使用阻断器，若未解锁则阻断函数返回值传递
6. 使用超长行注释干扰词法引擎。

#### 代码灵感

本WebShell程序锁定器的制作灵感来源于开放世界游戏《原神》中于稻妻地区境内广泛存在的一种大世界解谜机关阵列“机关立方”。该机关阵列由数个小型立方机关组成，当其中一个机关受到击打时，会联动阵列内的其它组成机关一起转动，其本质是实现了一个线性代数中“循环群”的运算模拟系统。

![机关图片](ScreenShot/GenshinImpactPhoto2024_1_18%2010%2051%2024.png)

本程序的锁定器参考上述原理制作，锁定器接收传入的解锁答案并根据答案修改对象中机关的整数数值，当对象中4个整数数值全部相等时即判定解锁成功。

#### 测试结果
最后一次绕过测试于2024年01月18日进行，共使用了国内外共`35`个现有的查杀引擎进行测试，成功绕过`34`个，绕过率`97.1%` ：

- 绕过成功：阿里伏魔引擎、安恒云沙箱、大圣云沙箱、河马WebShell查杀、魔盾云沙箱、微步集成引擎共26个（微软、卡巴斯基、IKARUS、Avast、GDATA、安天、360、NANO、瑞星、Sophos、WebShell专杀、MicroAPT、OneStatic、ESET、小红伞、大蜘蛛、AVG、K7、江民、Baidu、TrustBook、熊猫、ClamAV、Baidu-China、OneAV、MicroNonPE）、D盾、Windows Defender、火绒安全软件
- 绕过失败：长亭百川WebShell查杀引擎

 **（所有绕过测试截图可在`ScreenShot`文件夹中查看）** 

#### 运行环境

1.  操作系统：Windows、Linux、macOS
2.  PHP版本：PHP `5` 全版本、PHP `7` 全版本、PHP `8` 全版本

#### 使用说明

使用本WebShell需要 **解锁程序锁定器、提供命令执行函数的第一个字符`s`和提供执行的命令** ，以下参数可以 **按实际情况在`POST`请求中提供** ：

1.  **`wpstring` &emsp;&emsp;=>&emsp;&emsp; ABBCCD** 
2.  **`b` &emsp;&emsp;&emsp;&emsp;&emsp; =>&emsp;&emsp; s** 
3.  **`pcs` &emsp;&emsp;&emsp;&emsp; =>&emsp;&emsp; Your command** 

![使用方法](ScreenShot/webshell%E4%BD%BF%E7%94%A8%E6%96%B9%E6%B3%95.png)

#### 参考资料

1. [【数学原理】稻妻方块解密的数学原理-原神社区-米游社](https://www.miyoushe.com/ys/article/17414097)
2. [[Nature of Code] 柏林噪声 - 知乎](https://zhuanlan.zhihu.com/p/206271895?ivk_sa=1024320u&utm_id=0)
3. [变量覆盖漏洞总结-CSDN博客](https://blog.csdn.net/qq_45521281/article/details/105849770)
