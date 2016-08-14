<ul class="breadcrumb">
    <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title"><a href="/">Home</a></span></li>   
    <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title"><a href="/admin">Admin</a></span></li>    
    <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb" class="active"><span itemprop="title"><?php echo $pagetitle ?></span></li>
</ul>

<h2><?php echo $pagetitle ?></h2>

<?php
  foreach($posts as $post)
  {
?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">
          <?php 
            echo "<b>" . $post->Title . "</b>";
            if(!$post->Published) echo " (DRAFT)";
          ?>
        </h3>
      </div>
      <div class="panel-body">
        <?php echo date_format(date_create($post->Date . " " . $post->Time), 'jS F, Y g:ia') ?>
        <a class="btn btn-default pull-right" href="/admin/blog/edit/<?php echo $post->PostID ?>" role="button">Edit</a>
      </div>
    </div>
<?php
  }
?>
