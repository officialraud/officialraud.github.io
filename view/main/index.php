<span class="bg-pt1"></span>
	<section class="skew skew-banner remove-top-skew">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-8">
					<div class="banner-content highlight">
						<h1 class="m1s">elPato ROLE PLAY</h1>
						<p class="m2s">
							<b class="colrs">elPato ROLE PLAY</b> Это новый уровень онлайн-игр. Играй
бандитом или полицейским, чиновником или медиком, мафией или сотрудником ФБР.Прочувствуй атмосферу удивительного мира ролевой игры с реалистичным миром на ГТА РП!<br><br>
							
						</p>
							<a class="blue-btn" href="/faq">
									<span class="ic-video"></span> Начать игру
							</a>
							<div class="banner-button-container">	
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="feature-area bg-color3 skew-section-spacing section-spacing">
		<div class="container">
			<div class="names">
				<h3><b>Два факта</b> о нас</h3>
				<span class="hr-bottom"></span>
			</div>
						<div class="feature-container">
				<div class="row">
					
					<div class="col-md-6">
						<div class="feature-wrapper wow pulse" data-wow-duration="2s">
							<div class="st2"></div>
							<h4>100%</h4>
							<p>Стабильность</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="feature-wrapper wow pulse m-0" data-wow-duration="1s">
							<div class="st3"></div>
							<h4>100%</h4>
							<p>Отзывчивость</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<span class="bg-pt2"></span>
	<div id="shop" class="post-area bg-color4 minus-30 section-spacing">
		<div class="container">
			<div class="names">
				<meta name="verification" content="335eb3c5a03465da9a1875b98c07af" />
				<h3><b>Новости</b> проекта</h3>
				<span class="hr-bottom"></span>
			</div>
			<div class="w3-container">

				
				<div class="w3-container w3-border city category0">
					<div class="row">
						<div class="col-lg-12">
							<div class="post-container">
								<div class="row">
									<?
									global $connect;
		  							$sql_news = "SELECT * FROM `news` ORDER BY id DESC LIMIT 20";
									$result_news = $connect->query($sql_news);
									 if($result_news->num_rows > 0)
									{
										while($news=$result_news->fetch_assoc())
										{
											
											
											 echo '
											<div class="col-md-4">
										<div class="post-wrapper" data-wow-duration="1s">
											<div class="post-thumb">
												<img src="'.$news['Url'].'">
											</div>
											<div class="post-desc">
												
													<h4>'.$news['Title'].'</h4>
													
												<div class="semmer">
													<p class="description"></p>
													<div class="buy-cats">
														<div class="form-group centers">
															<a href="'.$news['Vk'].'" class="btn-news-go">Подробнее</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
											';
										
										}  
										
									}
									else echo "<div class='loader' align='center'></div>";
								  
								  ?>
									
									
								</div>
							</div>
						</div>
					</div>
				</div>
				

			</div>
		</div>
	</div>
<a href="//freekassa.ru/"><img src="//www.free-kassa.ru/img/fk_btn/9.png" title="Приём оплаты на сайте картами"></a>