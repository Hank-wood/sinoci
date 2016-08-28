sinoci
===

> sinoci = sino + ci  
> sino: 中国的  
> ci: CodeIgniter

### 已完成

- [x] 基于 composer
- [x] 支持 php 5.4+
- [x] 引入 codeigniter: [codeigniter/framework@3.1.*](https://packagist.org/packages/codeigniter/framework#v3.1.0)
- [x] 集成 eloquent: [illuminate/database@5.0.*](https://packagist.org/packages/illuminate/database#v5.0.33)
- [x] 包含分页组件: [illuminate/pagination@5.0.*](https://packagist.org/packages/illuminate/pagination#v5.0.33)
- [x] 自带手册生成: [sami/sami@3.3.*](https://packagist.org/packages/sami/sami#3.3.0)
- [x] 集成 blade 模板引擎: [illuminate/view@5.0.*](https://packagist.org/packages/illuminate/view#v5.0.33)
- [x] 添加 scss 支持: [leafo/scssphp@0.6.*](https://packagist.org/packages/leafo/scssphp#v0.6.5)
- [x] 使用 phpcomposer 中国全量镜像
- [x] 完全自由可配置
- [x] 注释覆盖率 100%
- [x] 管理员后台模板: `sinoci`

### 安装依赖并运行

```
composer install
composer serve
```

### 打开浏览器访问

```
http://localhost:9000
```

### 查看应用手册

```
composer docs
```

---

### TODO

- [ ] 集成 `workerman`
- [ ] 发布命令: `composer build`
- [ ] 类 `graphsql` 支持
- [ ] 类 `lazyrest` 可视化后台

** 注 **

`vendor` 目录已有资源
- bootstrap@3.3.1
- fontawesome@4.1.0
- jquery@1.11.1
- underscore@1.3.1
- typeahead@0.10.5

相比框架这个项目更适合被叫做 CI 脚手架，  
没有很多的技术含量，较多的是选择的取舍，  
特点是灵活，易上手，限制少（比如说 CI 分组）  
因为是自己做外包兼职用的，会一直维护下去，  
方向应该会聚焦在 **怎么出成果快怎么来**
