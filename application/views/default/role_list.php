<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li><span class="glyphicon glyphicon-home"></span></li>
        <li><a href="/index/index">首页</a></li>
        <li class="active">用户组管理</li>
      </ol>
    </div><!--/.row-->

    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading"><a class="btn btn-primary" href="/role/add">新增</a></div>
          <div class="panel-body">
              <div class="canvas-wrapper">
                <table class="table table-striped table-hover table-bordered">
                  <thead><tr><th>用户组名</th><th>操作选项</th></tr></thead>
                  <tbody>
                    <?php foreach($list as $v): ?>
                    <tr>
                      <td><?php echo $v->name; ?></td>
                      <td>
                        <a title="修改" href="<?php echo '/role/edit/'.$v->id; ?>"><span class="glyphicon glyphicon-edit"></span></a>
                        <a title="删除" class="confirm_delete" href="<?php echo '/role/del/'.$v->id; ?>"><span class="glyphicon glyphicon-trash" ></span></a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
                <?php echo $pagination; ?>
              </div>
          </div>
        </div>
      </div>
    </div>

  </div>  <!--/.main-->
  <script>
      $('a.confirm_delete').click(function(){
          return confirm('确定删除用户组？');
      });
  </script>