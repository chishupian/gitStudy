Git 指令

1、安装Git
	yum -y install git
	
	#git用户配置，配置后不可修改
	git config --global user.name "用户名"
	git config --global user.email "用户邮箱"
	
	#查看是否配置成功：
	git config --list
	
2、Git初始化：
	进入相应目录执行:Git init
	
3、Git 分三种区域
	工作区域：编写代码的地方（已修改）
	暂存区：存放临时改动（已暂存）
	git仓库：最终存放数据的地方（已提交）
	
4、添加版本至暂存区：
	Git Add 文件名称
	
	复制别人的库：
	git clone git地址
	
5、提交版本至Git仓库
	git commit -m "提交注释"
	
6、查看版本状态
	git status
	① on branch master 当前所在的默认的分支
	② noting to commit,working directory clean 工作目录没有需要提交的文件
	③ untracked files 存在未被添加至暂存空间的文件
	④ git reset 将Git仓库中的文件还原到暂存区域
	⑤ git checkout 用暂存空间的旧版本覆盖工作区域的版本
	⑥ git commit -am【-a -m】 "提交注释"  快速添加文件至暂存空间,并提交至git仓库
	
7、版本日志
	git log 查看当前提交过的git版本信息，例：
	//版本号 通常前7为能表示一个独一无二的版本号
	commit 82352269d36b67b60f9e442738fff15536293f75
	//提交人的信息
	Author: pawn <phpssl@163.com>
	//提价时间
	Date:   Wed Apr 5 11:05:23 2017 +0800
	//提交的注释内容
    第三次提交
	
	git log --pretty=oneline 简化日志信息
	
8、回滚版本
	上一个版本：git reset --hard HEAD^ HEAD 表示当前版本 HEAD^ 表示上一个版本 同理上上个版本 head^^
	上n个版本：git reset --hard HEAD~n

9、查看提交ID(commit_id)
	git reflog 可以查看到提交记录
	//执行后的版本库 执行的命令 执行的内容
	8235226 HEAD@{0}: 823522: updating HEAD
	25bbc21 HEAD@{1}: HEAD^: updating HEAD
	8235226 HEAD@{2}: commit: 第三次提交
	25bbc21 HEAD@{3}: commit: 第二次使用git提交
	84f6ed6 HEAD@{4}: commit (initial): 第一次使用git
	
10、比较工作区文件与版本库里面的区别
	git diff HEAD -- filename

11、撤销工作区修改：
	git checkout -- filename
	filename被修改但未添加到暂存区：filename被还原到修改之前，和版本库保持一致
	filename被修改并添加到暂存区后再被修改：filename被还原至提交到暂存区的状态
	
12、撤销暂存区内容：
	git reset HEAD filename
	filename被添加到暂存区：filename被还原至添加到暂存区之前的状态
	
13、删除文件
	未提交到暂存区或者版本库直接 rm filename 删除
	git rm filename 从版本库中删除文件
	git commit 提交删除信息
	
14、恢复被删除的文件
	git checkout -- filename 用版本库文件恢复至工作区
	注：文件内容只能和版本库保持一致，会丢失工作区中的修改未被提交的信息

15、远程仓库
	a、在本地用户目录建立通信秘钥，一个客户端一个秘钥
		ssh-keygen -t rsa -C "youremail@example.com"
		则当前用户目录下会建立一个.ssh的目录，默认一直回车"确认"即可
		生成公钥：id_rsa.pub
		私钥：id_rsa
	b、注册github账号
		将.ssh目录下的id_rsa.pub添加至SSH Key,title随意，然后保存
	c、在github上新建仓库
	d、关联远程仓库
		进入项目目录,执行git remote add 远程仓库名称 git@github.com:账户名/远程仓库.git
	e、推送本地仓库至远程仓库master分支，并进行相关关联
		git push -u 远程仓库名 master
		-u表示第一次的关联 后续可以不再添加 具体查看帮助--help
		master 推送的分支
		
16、分支
	创建分支：git branch 分支名称
	切换分支：git checkout 分支名称
	查看当前分支：git branch 带*的表示当前分支
	注：快捷操作 git checkout -b 分支名称
	
	合并分支：
		例：将coupon分支合并至master分支
		git chckout master
		git merge coupon
		
	删除分支：
		git branch -d 分支名称
17、解决冲突
	git的冲突必须使用手动解决再提交
	git log --graph --pretty=oneline abbrev-commit 查看详细的冲突问题

18、禁用Fast Forward模式
	原因：Fast Forward模式会在删除分支后丢失分支信息,不利于后期维护
	方法：采用git merge --no-ff -m '注释内容' 分支
		
	
	
	
	
	
	
	
	
	
	
	
	
	

	
	
