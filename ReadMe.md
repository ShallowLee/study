#Sublime 安装
##Sublime 文件安装
官网地址`https://www.sublimetext.com/3`
##Sublime 破解
1. 查看版本号
2. 根据版本号查询破解码
3. 在help>enter license里填入破解码

## 安装packages control
>必须是联网环境下才能安装

安装地址：https://packagecontrol.io/installation
1.打开控制台（View > Show Console）输入

`import urllib.request,os,hashlib; h = '2915d1851351e5ee549c20394736b442' + '8bc59f460fa1548d1514676163dafc88'; pf = 'Package Control.sublime-package'; ipp = sublime.installed_packages_path(); urllib.request.install_opener( urllib.request.build_opener( urllib.request.ProxyHandler()) ); by = urllib.request.urlopen( 'http://packagecontrol.io/' + pf.replace(' ', '%20')).read(); dh = hashlib.sha256(by).hexdigest(); print('Error validating download (got %s instead of %s), please try manual install' % (dh, h)) if dh != h else open(os.path.join( ipp, pf), 'wb' ).write(by)`

＊出现错误提示不要紧
＊看是否安装成功可以使用快捷键 ctrl＋shift+p看是否可以调用

## 安装汉化插件
1. 是用快捷键  ctrl＋shift＋p打开package control。然后输入install 选择第一个 `install package` 按回车
2. 在紧接着的输入框中输入关键词`chinese`选择第一个汉化包，回车。等待菜单栏变成中文。

## 安装emmet插件
跟上面的喊话插件一样，只是关键字不是`chinese`而是emmet
