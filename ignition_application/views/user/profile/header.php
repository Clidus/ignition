<ul class="breadcrumb">
    <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title"><a href="/">Home</a></span></li>       
    <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb" class="active"><span itemprop="title"><?php echo $user->Username ?></span></li>
</ul>

<h2><?php echo $user->Username ?></h2>

<div class="row">
	<div class="col-sm-4">
		<img src="/uploads/<?php echo $user->ProfileImage ?>" class="largeProfileImage imageShadow" />
		<ul class="nav nav-pills nav-stacked profileNav">
			<li id="navProfile"><a href="/user/<?php echo $user->UserID ?>">Profile</a></li>
			<?php 
				// if logged in and this user
				if($sessionUserID != null && $sessionUserID == $user->UserID) 
				{
					echo "<li id='navSettings'><a href='/user/settings'>Settings</a></li>";
				} 
			?>
		</ul>
		<?php
			if($user->Bio != null) 
			{
				echo "<div class='userBio'>" . $user->Bio . "</div>";
			}
		?>
	</div>
	<div class="col-sm-8"> 