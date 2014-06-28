<?php include('./inc/header.php') ?>

	<section class="Ajaxloader">
		<div class="contact" id="loader">
			<div class="rightcontact">
				<h1>ارسال پیام</h1>
				<form action="mail.php" method="post" target="ifrm">
					<input type="text" placeholder="نام :" class="name">
					<input type="text" placeholder="ايميل :" class="email">
					<textarea placeholder="پیام :" class="messege"></textarea>
					<input type="submit" value="ارسال" class="but"/>
				</form>
				<iframe id='ifrm' name='ifrm' src="" frameborder="0" scrolling="no"></iframe>
			</div>
			<div class="leftcontact">
				<p>هنر دوستان گرامی میتوانند با ارسال پیام با ما در ارتباط باشند که البته مشتاق پاسخگویی به نظرات و انتقادات شما عزیزان جان هستیم .<br /><br />شایان ذکر است دوستان جان میتوانند از طریق شبکه های اجتماعی ذیل از<br /> 	فعالیت ها و برنامه های گروه باخبر شوند و با تنبــورنوازان حنــان در ارتباط<br /> باشند .<br />
				<span>یا حــق</span>
				</p>
				<ul>
					<li><img src="images/face.png" alt=""></li>
					<li><img src="images/twitter.png" alt=""></li>
					<li><img src="images/flickr.png" alt=""></li>
					<li><img src="images/youtube.png" alt=""></li>
				</ul>
			</div>
		</div>
	</section>
	
<?php include('./inc/footer.php') ?>