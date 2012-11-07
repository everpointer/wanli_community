<?php
require_once('config.php');
mysql_conn();

$get_all_topics = "SELECT * FROM topic";
$result = mysql_query($get_all_topics);
$topics = array();

if ($result && mysql_num_rows($result) > 0)
{
  while($row = mysql_fetch_assoc($result))
  {
    array_push($topics, $row);
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
        <link rel="stylesheet" href="styles/topics.css">
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
          <div class="box box_gray">
            <div class="topics">
              
              <?php 
                foreach ($topics as $topic)
                {
              ?>
               <div class="topic topic_line">
                  <div class="float_left avatar">
                    <a href="/"><img src="http://ruby-china.org/avatar/f37d464bd85f783da00a6913e6859fa0.png?s=48&d=404" alt="" style="width:48px;height:48pxl"></a>
                  </div>

                  <div class="topic_right">
                    <div class="float_right replies"><a href="#" class="count">10</a></div>
                    <div class="infos">
                       <div class="title">
                         <a href="topic.php?id=<?php echo $topic['id'] ?>" title="<?php echo $topic['title']; ?>"><?php echo $topic['title']; ?></a>
                       </div>
                       <div class="info">
                        <a href="/chenge" data-name="chenge"><?php echo $topic['author'] ?></a>
                        <em>
                         最后由 <a href="/sforce100" data-name="sforce100">sforce100</a> 于<abbr class="timeago" title="2012-11-07T12:10:17+08:00">2小时前</abbr>回复
                       </em>
                       </div>
                     </div> 
                  </div>
               </div>
               <?php
                 }
               ?>

           </div>
           </div>
        </div>

        <div class="sidebar">
          <div class="box">
              <div class="btn-group">
                <a href="new_topic.html" class="btn btn-success">发布新帖</a>
                <button class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                </button>
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
