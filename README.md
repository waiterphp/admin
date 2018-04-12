### 搭建环境

通过composer进行安装。
```$xslt
composer create-project waiterphp/app
```
通过builder工具安装admin
```
builder admin.project
```
请先修改数据库的配置信息。


### 项目构建
以构建列表页为例，可通过builder构建：

```
builder admin.list record.simpleList --table user_table --model record
```
项目会以table名生成model，名称会被格式化为驼峰命名法。当你想自定义model的名称时，请使用model参数

可使用的构建组件有：

|组件|含义|可用参数|
|:--:|:--|:--|
|list|分页列表页||
|form|表单页||
|chart|统计图表||

### 主要概念

#### 域

#### 配置工具

