<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1921">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<!-- Nội dung bên trái  -->
			</div>
			<div class="col-sm-4">
				<div class="slide-right">
					<div class="single_image_1">
						<figure class="figure-image">
							<a href="#" target="_self">
								<img class="img-hover" src="images/ad1-2.jpg" alt="...">
							</a>
							<div class="title-image">
								<h3> LG 8803</h3>
								<p>Aliquam tempus rutrum</p>
								<span>$ 350.00</span>
							</div>
						</figure>
					</div>
					<div class="single_image_2 ">
						<figure class="figure-image">
							<a href="#" target="_self">
								<img src="images/ad2-2.jpg" alt="...">
							</a>
							<div class="title-image-2">
								<h3> IPOD APPLE </h3>
								<p>Aliquam tempus rutrum</p>
								<span>$ 170.00</span>
							</div>
						</figure>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>