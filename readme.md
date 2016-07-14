sinoci
===

> sinoci = sino + ci  
> sino: 中国的  
> ci: CodeIgniter

### 已完成

- [x] 基于 composer
- [x] 支持 php 5.4+
- [x] 引入 codeigniter: [codeigniter/framework@3.0.*](https://packagist.org/packages/codeigniter/framework#v3.0.6)
- [x] 集成 eloquent: [illuminate/database@5.0.*](https://packagist.org/packages/illuminate/database#v5.0.33)
- [x] 包含分页组件: [illuminate/pagination@5.0.*](https://packagist.org/packages/illuminate/pagination#v5.0.33)
- [x] 完全自由可配置
- [x] 注释覆盖率 100%

### 安装依赖并运行

```
composer install
composer serve
```

### 打开浏览器访问

```
http://localhost:9000
```

---

### TODO

- [ ] 模版引擎: `pug` + `blade`
- [ ] sass支持: `scssphp`
- [ ] 发布命令: `composer build`
- [ ] 类 `graphsql` 支持
- [ ] 类 `lazyrest` 可视化后台

** 注 **

相比框架这个项目更适合被叫做 CI 脚手架，
没有很多的技术含量，较多的是选择的取舍，
特点是灵活，易上手，限制少（比如说 CI 分组）
因为是自己做外包兼职用的，会一直维护下去，
方向应该会聚焦在 **怎么出成果快怎么来**
