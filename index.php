<?php $exception = require('forum.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="theme-color" content="#009688">
	<script src="//fast.eager.io/A4DEXZEFit.js"></script>
	<!-- for Persona on IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Small, simple and lightweight forum system write in PHP" />
	<meta name="generator" content="DOS-Developers" />
	<meta name="author" content="">

	<title><?php if(!empty($topic)) print $topic['title'] . ' - '; ?>DOS-Developers</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />
	
	<!-- Fonts / CSS -->
	<link href="dist/css/roboto.min.css" rel="stylesheet">
	<link href="dist/css/material.min.css" rel="stylesheet">
	<link href="dist/css/ripples.min.css" rel="stylesheet">
	<link href="dist/css/custom.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<style type="text/css">
	/* Space out content a bit */
	body {
		padding-top: 10px;
		padding-bottom: 20px;
	}

	img {
		max-width: 700px;
		max-height: 700px;
	}

	/* Everything but the jumbotron gets side spacing for mobile first views */
	.header,
	.marketing,
	.footer {
		padding-right: 15px;
		padding-left: 15px;
	}

	/* Custom page header */
	.header {
		border-bottom: 1px solid #e5e5e5;
	}
	/* Make the masthead heading the same height as the navigation */
	.header h3 {
		padding-bottom: 19px;
		margin-top: 0;
		margin-bottom: 20px;
		line-height: 40px;
	}

	/* Custom page footer */
	.footer {
		padding-top: 19px;
		color: #777;
		border-top: 1px solid #e5e5e5;
	}
	
	/* Customize container */
	@media (min-width: 768px) {
		.container {
			max-width: 1500px;
		}
	}
	.container-narrow > hr {
		margin: 30px 0;
	}

	/* Main marketing message and sign up button */
	.jumbotron {
		text-align: center;
		border-bottom: 1px solid #e5e5e5;
	}

	/* Supporting marketing content */
	.marketing {
		margin: 40px 0;
	}
	.marketing p + h4 {
		margin-top: 28px;
	}

	/* Responsive: Portrait tablets and up */
	@media screen and (min-width: 768px) {
		/* Remove the padding we set earlier */
		.header,
		.marketing,
		.footer {
			padding-right: 0;
			padding-left: 0;
		}
		/* Space out the masthead */
		.header {
			margin-bottom: 30px;
		}
		/* Remove the bottom border on the jumbotron for visual effect */
		.jumbotron {
			border-bottom: 0;
		}
	}
	</style>

	<?php if($_SESSION['email']) { ?>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.6.9/summernote.css">
	<?php } ?>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	    
	    <!-- Cookie Law -->
	    <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
        <script type="text/javascript">
            window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Okay?","learnMore":"More info","link":null,"theme":"dark-floating"};
        </script>
        <!-- Cookie Law End -->	
</head>




<body>
	<div class="container">
		<div class="header">
			<nav style="transform: translateZ(0); ">
			<div class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">DOS</a>
    </div>
    <div style="-webkit-transform: translateZ(0); -moz-transform: translateZ(0); -ms-transform: translateZ(0); -o-transform: translateZ(0); transform: translateZ(0); -webkit-backface-visibility: hidden; -moz-backface-visibility: hidden; -ms-backface-visibility: hidden; backface-visibility: hidden; -webkit-perspective: 1000; -moz-perspective: 1000; -ms-perspective: 1000; perspective: 1000; "class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <?php if($_SESSION['email']) { ?>
            <li><a href="#" id="login_button">UCP</a></li>
            <li><a href="#" id="logout_button">Logout</a></li>
            <?php } else { ?>
						<li>
						<a href="#" id="login_button">Login</a> </li>
					<?php } ?>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="javascript:void(0)">Link</a></li>
            <li class="dropdown">
                <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Useful<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="https://www.google.com/" target="_blank">Google</a></li>
                    <li><a href="https://www.facebook.com/" target="_blank">Facebook</a></li>
                    <li><a href="https://www.youtube.com/">YouTube</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
</nav>
			<h3 class="text-muted"><a href="/">DOS-Developers</a></h3>
		</div>


		<div class="marketing">

		<?php if(! $exception instanceof Exception) { ?>

			<?php if($email) { ?>

				<div class="jumbotron">
				    

					<a href="http://www.gravatar.com/<?= md5($user['email']); ?>">
						<img src="http://www.gravatar.com/avatar/<?= md5($user['email']); ?>?s=80&r=g&d=mm" title="Gravatar.com Image">
					</a>

					<h2><?= $user['email']; ?></h2>
					<p class="lead">Joined <?= date('D, M jS Y H:i:s', $user['c']); ?></p>
					<p>User has <?= $user['posts']; ?> posts and has logged in <?= $user['logins']; ?> times</p>

					<?php if($_SESSION['admin']) { ?>
						<?php if($user['banned']) { ?>
							<a class="btn btn-success" href="?delete=unban&email=<?= $user['email']; ?>">Un-Ban User</a>
						<?php } else { ?>
							<a class="btn btn-danger" href="?delete=user&email=<?= $user['email']; ?>">Ban User</a>
						<?php } ?>
					<?php } ?>

				</div>

				<table class="table table-hover">

					<thead>
						<tr>
							<th>IP</th>
							<th>Comment</th>
							<th>Date</th>
						</tr>
					</thead>
					<tbody>

					<?php foreach($rows->fetchAll() as $row) { ?>
						<tr class="comments">
							<td>
								<a href="http://whatismyipaddress.com/ip/<?= $row['ip']; ?>" target="_blank"><?= $row['ip']; ?></a>
							</td>
							<td>
								<a href="/?topicID=<?= $row['topic_id']; ?>">view topic</a>							
							</td>
							<td>
								<?= date('D, M jS Y ga', $row['c']); ?><br>
								<a href="/?delete=comment&commentID=<?= $row['id']; ?>&email=<?= $user['email']; ?>&topicID=<?= $row['topic_id']; ?>">delete comment</a>
							</td>
							<td>
								<?= substr(strip_tags($row['body']), 0, 100); ?>
							</td>
						</tr>
					<?php } ?>

					</tbody>
				</table>



			<?php } elseif($topicID) { ?>
			
			                <div style="margin-bottom: 50px;" class="jumbotron">
                    <div class="ads" align="center">	
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- test -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2577442803825622"
     data-ad-slot="3874391994"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
                </div>

				<div class="media">
					<?php if($_SESSION['admin']) { ?>
						<a class="media-left" href="?email=<?= $topic['email'];?>">
							<img src="http://www.gravatar.com/avatar/<?= md5($topic['email']); ?>?s=40&r=g&d=mm" title="Gravatar.com Image">
						</a>
					<?php } else { ?>
						<a class="media-left" href="#">
							<img src="http://www.gravatar.com/avatar/<?= md5($topic['email']); ?>?s=40&r=g&d=mm" title="Gravatar.com Image">
						</a>
					<?php } ?>
					
					<div class="media-body">

						<h3 class="text-primary media-heading"><b>Title:</b> <?= $topic['title']; ?></h4>
						<hr style=" background-color: #009688; height: 2px; ">


						<?php if($_SESSION['admin']) {?>
							<h5 class="media-heading"><?= $topic['email']; ?> -
							<a href="/?delete=topic&topicID=<?= $topic['id']; ?>">delete</a></h5>
						<?php } ?>
                        
                        
                        <hr>
                         <?= $topic['body']; ?>



					</div>
				</div>

				<hr style="background-color: #009688;">

				<div id="comments">
					<?php foreach($rows->fetchAll() as $row) { ?>

						<div class="media">

							<?php if($_SESSION['admin']) { ?>
								<a class="media-left" href="?email=<?= $topic['email'];?>">
									<img src="http://www.gravatar.com/avatar/<?= md5($row['email']); ?>?s=40&r=g&d=mm" title="Gravatar.com Image">
								</a>
							<?php } else { ?>
								<a class="media-left" href="#">
									<img src="http://www.gravatar.com/avatar/<?= md5($row['email']); ?>?s=40&r=g&d=mm" title="Gravatar.com Image">
								</a>
							<?php } ?>
							
							<div class="media-body">

								<?php if($_SESSION['admin']) {?>
									<h4 class="media-heading"><?= $row['email']; ?> - <a href="/?delete=comment&commentID=<?= $row['id']; ?>&topicID=<?= $topic['id']; ?>">delete</a></h4>
								<?php } ?>

								<?= $row['body']; ?>
								
							</div>
						</div>

						<hr style="background-color: #009688 ;">

					<?php } ?>
				</div>


<?php if($_SESSION['email']) { ?>
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Your Reply</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Leave a Reply</h4>
      </div>
      <div class="modal-body">
        				

				<form method="post" role="form" style="box-shadow: 0 8px 17px 0 rgba(0,0,0,.2),0 6px 20px 0 rgba(0,0,0,.19);">
						<div class="form-group">
							<div class="summernote" style=" margin-right: 15px; margin-left: 15px; ">
							<textarea class="form-control" rows="2" name="body" style="box-shadow: 0 8px 17px 0 rgba(0,0,0,.2),0 6px 20px 0 rgba(0,0,0,.19);" ></textarea>
							</div>
						</div>
						<button style="margin-left: 15px;" type="submit" class="btn btn-success btn-raised">Submit</button>
					</form>

				

			

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php } ?>

<?php } else { ?>





    
                <div class="jumbotron">
                    <div class="ads" align="center">	
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- test -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2577442803825622"
     data-ad-slot="3874391994"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
                </div>
				
				<div class="jumbotron">
				<h1>Welcome to</h1>
  					<h2>DOS-Developers</h2>
  					</div>
  					
  					<div class="jumbotron">
                    <div class="ads" align="center">	
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- test -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2577442803825622"
     data-ad-slot="3874391994"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
                </div>
<div class="jumbotron">
				<table class="table table-hover">

					<!--<caption>List of recent forum posts</caption>-->

					<thead>
						<tr>
							<div class="user">
							<th>User:</th>
							</div>
							<div class="Topic">
							<th>Topic:</th>
							</div>
							<div class="Lastac">
							<th>Last Activity:</th>
			                </div>			
						</tr>
					</thead>
					<tbody>

					<?php foreach($rows->fetchAll() as $row) { ?>
						<tr class="topics">
							<td>
								<?php if($_SESSION['admin'] OR $_SESSION['email'] === $row['email']) { ?>
									<a href="?email=<?= $row['email'];?>">
										<img src="http://www.gravatar.com/avatar/<?php echo md5($row['email']); ?>?s=30&r=g&d=mm" class="img-polaroid" />
									</a>
								<?php } else { ?>
									<img src="http://www.gravatar.com/avatar/<?php echo md5($row['email']); ?>?s=30&r=g&d=mm" class="img-polaroid" />
								<?php } ?>
							</td>
							<td>
								<a href="?topicID=<?= $row['id']; ?>"><?= $row['title']; ?></a><br>


								<?php if($_SESSION['admin']) {?>
									<?= $row['email']; ?> - <a href="/?delete=topic&topicID=<?= $row['id']; ?>">delete</a>
								<?php } ?>
							</td>
							<td>
								<?= date('D, M jS Y ga', $row['u']); ?>
							</td>
						</tr>
					<?php } ?>

					</tbody>
				</table>
				</div>

				<?php if($_SESSION['email']) { ?>

                					<!-- Trigger the modal with a button -->
                <button type="button" class="btn btn-info btn-raised btn-lg" data-toggle="modal" data-target="#myModal">Create New Topic</button>
                
                <!-- Modal -->
                <div id="myModal" class="modal fade" style="-webkit-transform: translate3d(0,0,0); -moz-transform: translate3d(0,0,0); -ms-transform: translate3d(0,0,0); -o-transform: translate3d(0,0,0); transform: translate3d(0,0,0);" role="dialog">
                  <div class="modal-dialog">
                
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">New Topic</h4>
                      </div>
                      <div class="modal-body">
                            <form role="form" method="post" style="box-shadow: 0 8px 17px 0 rgba(0,0,0,.2),0 6px 20px 0 rgba(0,0,0,.19);">
						<legend style="margin-left: 10px;padding-top: 10px;">Create new Topic</legend>
						<div class="form-group">
<div class="textar" <label="" for="title" style="margin-left: 10px; padding-right: 15px;">Title
							<input type="text" class="form-control" name="title" style="box-shadow: 0 8px 17px 0 rgba(0,0,0,.2),0 6px 20px 0 rgba(0,0,0,.19);">
</div>
						</div>
						<div class="form-group">
						    <div class="bodybro" style="margin-left: 10px; padding-right: 15px;">
							<label for="body">Body</label>
							<textarea class="form-control" rows="5" name="body" style="box-shadow: 0 8px 17px 0 rgba(0,0,0,.2),0 6px 20px 0 rgba(0,0,0,.19);"></textarea>
						</div>
						</div>
						<div style="margin-left: 10px; "class="buttondude">
						<button type="submit" class="btn btn-success btn-raised">Submit</button>
		                </div>			
					</form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-raised" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                
                  </div>
                </div>
						

				<?php } ?>

			<?php } ?>

		<?php } elseif($exception instanceof Exception) { //var_dump($exception); //$e = $exception; //catch(Exception $e) { ?>

			<div id="exception">
				<?php if($exception->getMessage() == 'MISSING') { ?>
					Sorry, we could not find the topic
				<?php } elseif($exception->getMessage() == 'OFTEN') { ?>
					Sorry, you can only post twice every <?= ($_SESSION['trusted'] ? TRUSTED_WAIT : WAIT) / 60; ?> minutes. Please wait a few moments and then refresh the page to re-send your post.
				<?php } elseif($exception->getMessage() == 'REMOVED') { ?>
					The topic/comment has been removed.
				<?php } elseif($exception->getMessage() == 'EMAIL') { ?>
					Sorry, your email provider is banned because of spam accounts.
				<?php } elseif($exception->getMessage() == 'BANNED') { ?>
					Sorry, your account is banned. Remember the golden rule, "So whatever you wish that others would do to you, do also to them" - Matthew 7:12
				<?php } elseif($exception->getMessage() == 'LENGTH') { ?>
					Sorry, your topic or comment is to long.
				<?php } elseif($exception->getMessage() == 'REGISTER') { ?>
					Sorry, registration is currently disabled.
				<?php } elseif($exception->getMessage() == 'HEADER') { ?>
					You must have a topic header.
				<?php } ?>
			</div>

		<?php } ?>

		<?php //print '<pre>' . print_r($_SESSION, TRUE) . '</pre>'; ?>

		<br>

		<footer class="footer">
			
			<?php if($_SESSION['email']): ?>
				
				<p>Welcome <?= $_SESSION['email']; ?>, you have posted <?= $_SESSION['posts']; ?> messages.
				<?php if(TRUST_COUNT > $_SESSION['posts']) {
					print 'You will be a moderator after ' . (TRUST_COUNT - $_SESSION['posts']); ?> more posts.</p>
				<?php } ?>

			<?php elseif ( ! ALLOW_REGISTER): ?>
				<p>Registration is currently disabled. Existing users can still login.</p>

			<?php else: ?>
				<p>&copy; <?= date('Y'); ?> <?= htmlspecialchars(getenv('HTTP_HOST')); ?> - Powered by <a href="https://github.com/Droidwall">DOS-Developers</a></p>
			<?php endif; ?>


		</footer>

	</div> <!-- /container -->


	<script src="https://login.persona.org/include.js"></script>

	<!-- include libraries(jQuery, bootstrap, fontawesome) -->
	<script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.min.js"></script> 
	
	<?php if($_SESSION['email']) { ?>
		<!-- Summernote editor -->
		<script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
		<script src="//http://cdnjs.cloudflare.com/ajax/libs/summernote/0.6.9/summernote.min.js"></script>
		<!-- <script src="/editor.js"></script> -->
		<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="dist/js/ripples.min.js"></script>
		<script src="dist/js/material.min.js"></script>
	<?php } ?>

	<script>
	$(function()
	{
		var currentUser = <?= $_SESSION['email'] ? "'". $_SESSION['email'] . "'" : 'null'; ?>;

		navigator.id.watch({
			loggedInUser: currentUser,
			onlogin: function(assertion)
			{
				$.ajax({
					type: 'POST',
					data: { a: assertion },
					success: function(res, status, xhr)
					{
						window.location.href = window.location.href;
					},
					error: function(xhr, status, err)
					{
						alert("Login failure: " + err);
					}
				});
			},
			onlogout: function()
			{
				// Delete the session cookie
				var date = new Date();
				document.cookie = "<?= session_name(); ?>=; expires="+date.toGMTString()+"; path=/";
				window.location.href = window.location.href;
			}
		});

		$('#login_button').click(function(e)
		{
			e.preventDefault();
			navigator.id.request();
			return false;
		});

		$('#logout_button').click(function(e)
		{
			e.preventDefault();
			navigator.id.logout();
			return false;
		});

	});

	if (!('contains' in Array.prototype)) {
		Array.prototype.contains = function(arr, startIndex) {
			return ''.indexOf.call(this, arr, startIndex) !== -1;
		};
	}
	</script>
	<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script>
            (function(){

                var $button = $("<div id='source-button' class='btn btn-primary btn-xs'>&lt; &gt;</div>").click(function(){
                    var index =  $('.bs-component').index( $(this).parent() );
                    $.get(window.location.href, function(data){
                        var html = $(data).find('.bs-component').eq(index).html();
                        html = cleanSource(html);
                        $("#source-modal pre").text(html);
                        $("#source-modal").modal();
                    })

                });

                $('.bs-component [data-toggle="popover"]').popover();
                $('.bs-component [data-toggle="tooltip"]').tooltip();

                $(".bs-component").hover(function(){
                    $(this).append($button);
                    $button.show();
                }, function(){
                    $button.hide();
                });

                function cleanSource(html) {
                    var lines = html.split(/\n/);

                    lines.shift();
                    lines.splice(-1, 1);

                    var indentSize = lines[0].length - lines[0].trim().length,
                        re = new RegExp(" {" + indentSize + "}");

                    lines = lines.map(function(line){
                        if (line.match(re)) {
                            line = line.substring(indentSize);
                        }

                        return line;
                    });

                    lines = lines.join("\n");

                    return lines;
                }

                $(".icons-material .icon").each(function() {
                    $(this).after("<br><br><code>" + $(this).attr("class").replace("icon ", "") + "</code>");
                });

            })();

        </script>
        <script src="dist/js/ripples.min.js"></script>
        <script src="dist/js/material.min.js"></script>
        <script src="//fezvrasta.github.io/snackbarjs/dist/snackbar.min.js"></script>


        <script src="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
        <script>
            $(function() {
                $.material.init();
                $(".shor").noUiSlider({
                    start: 40,
                    connect: "lower",
                    range: {
                        min: 0,
                        max: 100
                    }
                });

                $(".svert").noUiSlider({
                    orientation: "vertical",
                    start: 40,
                    connect: "lower",
                    range: {
                        min: 0,
                        max: 100
                    }
                });
            });
        </script>

</body>
</html>
