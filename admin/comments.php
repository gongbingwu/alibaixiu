<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <title>Comments &laquo; Admin</title>
  <link rel="stylesheet" href="../static/assets/vendors/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../static/assets/vendors/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="../static/assets/vendors/nprogress/nprogress.css">
  <link rel="stylesheet" href="../static/assets/css/admin.css">
  <script src="../static/assets/vendors/nprogress/nprogress.js"></script>
</head>
<body>
  <script>NProgress.start()</script>

  <div class="main">
    
    <?php include_once "public/_navbar.php"; ?>

    <div class="container-fluid">
      <div class="page-title">
        <h1>所有评论</h1>
      </div>
      <!-- 有错误信息时展示 -->
      <!-- <div class="alert alert-danger">
        <strong>错误！</strong>发生XXX错误
      </div> -->
      <div class="page-action">
        <!-- show when multiple checked -->
        <div id="btn_batch" class="btn-batch">
          <button class="btn btn-info btn-sm">批量批准</button>
          <button class="btn btn-warning btn-sm">批量拒绝</button>
          <button class="btn btn-danger btn-sm">批量删除</button>
        </div>
        <ul class="pagination pagination-sm pull-right">
          <li><a href="#">上一页</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">下一页</a></li>
        </ul>
      </div>
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th class="text-center" width="40"><input type="checkbox"></th>
            <th>作者</th>
            <th>评论</th>
            <th>评论在</th>
            <th>提交于</th>
            <th>状态</th>
            <th class="text-center" width="100">操作</th>
          </tr>
        </thead>
        <tbody>
          <!-- <script type="text/template" id="tempId">
              <% for(var i = 0; i < data.length; i++) { %>
                  <tr data-comments-id="<%= data[i].id %>">
                    <td class="text-center"><input type="checkbox"></td>
                    <td><%= data[i].author %></td>
                    <td style="width: 400px;"><%= data[i].content %></td>
                    <td><%= data[i].title %></td>
                    <td><%= data[i].created %></td>
                    <td><%= data[i].status %></td>
                    <td class="text-center">
                      <a href="post-add.php" class="btn btn-warning btn-xs">驳回</a>
                      <a href="javascript:;" class="btn btn-danger btn-xs">删除</a>
                    </td>
                  </tr>
              <% } %>
          </script> -->
          <script type="text/template" id="tempId">
              {{ each data val }}
                  <tr data-comments-id="{{ val.id }}">
                    <td class="text-center"><input type="checkbox"></td>
                    <td>{{ val.author }}</td>
                    <td style="width: 400px;">{{ val.content }}</td>
                    <td>{{ val.title }}</td>
                    <td>{{ val.created }}</td>
                    <td>{{ sta[val.status] }}</td>
                    <td class="text-center">
                      <a href="post-add.php" class="btn btn-warning btn-xs">驳回</a>
                      <a href="javascript:;" class="btn btn-danger btn-xs">删除</a>
                    </td>
                  </tr>
              {{ /each }}
          </script>
        </tbody>
      </table>
    </div>
  </div>

  <?php 
    $current_page = "comments";
  ?>
  <?php include_once "public/_aside.php"; ?>
  
  <script src="../static/assets/vendors/require/require.js" data-main="../static/assets/js/comments.js"></script>

</body>
</html>
