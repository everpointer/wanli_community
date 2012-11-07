<?php
  require_once('config.php');
  mysql_conn();

  $username = "everpointer";
  $action = $_REQUEST['action'];
  if ($action === "add")
  {
    $title = $_REQUEST['title'];
    $content = $_REQUEST['content'];
    $insert_topic = "INSERT INTO topic(title, content, author) VALUES('".$title."', '".$content."', '".$username."')";
    if (mysql_query($insert_topic))
    {
      header('Location: index.php');
    } else {
      echo "oops, failed to add a new topic!";
    }

  }
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="styles/common.css">
        <link rel="stylesheet" href="styles/new_topic.css">
    </head>
    <body>
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
             <h3>
                <a href="/">万里计算机系</a>
             </h3>
             <ul class="nav">
               <li class="first active"><a href="/topics">社区</a></li>
             </ul>
             <ul class="nav pull-right" id="userbar">
               <li class="first"> <a href="/account/sign_up">注册</a></li>
               <li class="last"><a href="account/sign_in">登录</a></li>
             </ul>
          </div>
        </div>
      </div> 
      <div class="container">
      <div id="main" class="container-fluid">
        <div class="content">
          <div class="box">
              <form accept-charset="UTF-8" action="new_topic.php?action=add" class="simple_form form-horizontal new_topic" id="new_topic" method="post" novalidate="novalidate">
  
                <fieldset>
                  <legend>新建帖子</legend>
                  <div class="control-group string required">
                    <label class="string required control-label" for="topic_title"><abbr title="required"> *</abbr> 标题</label>
                    <div class="controls">
                      <input class="span4" id="topic_title" name="title" size="30" type="text">
                    </div>
                  </div>
                  <div class="control-group text required">
                      <label class="text required control-label" for="topic_body"><abbr title="required">*</abbr> 正文</label>
                      <div class="controls">
                          <textarea class="text required topic_editor closewarning xxlarge" cols="40" id="topic_body" name="content" rows="20" style="height: 400px;"></textarea>
                          <div id="preview" class="body" style="display: none;"></div>
                      </div>
                  </div>
                  <div class="form-actions">
                    <input class="btn btn-primary" data-disable-with="正在保存" name="commit" type="submit" value="保存">
                    <a href="/topics" class="btn reset">取消</a>
                  </div>
                </fieldset>
              </form>
         </div>
        </div>

        <div class="sidebar">
          <div class="box">
            <div id="topic_new_tip" class="box">
              <h2>发帖说明</h2>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container">
          <p class="copyright"> 万里学院计算机系 中文社区。</p>
        </div>
      </footer>

        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="scripts/vendor/jquery.min.js"><\/script>')</script>
        
        

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    
</body>
</html>