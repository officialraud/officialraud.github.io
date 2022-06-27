
<span class="bg-play"></span>
	<span class="bg-pt1"></span>
	<div class="feature-area bg-color3 skew-section-spacing section-spacing">
		<div class="container">
			<div class="names">
				<h3><b>Мониторинг</b> Игроков</h3>
				<span class="hr-bottom"></span>
			</div>
			<div class="info-re">
				<span class="ic-news"></span>
				<p class="inf-ws">На этой странице можно посмотреть мониторинг игроков <br>Для просмотра нажмите на нужную вам категорию.</p>
			</div>
			<div class="w3-container">
				<div class="w3-bar w3-black white-bgs">
					<button class="w3-bar-item w3-button tablink w3-red" onclick="SelectTab(event,'mont1')">ВСЕ ИГРОКИ</button>
					<button class="w3-bar-item w3-button tablink" onclick="SelectTab(event,'mont2')">ЛИДЕРЫ</button>
					
				</div>
				<div id="mont1" class="w3-container w3-border city">
					<div class="col-md-12">

						<?php 	
							$sql = "SELECT * FROM `{$user['table']}` WHERE `{$user['online']}` = '1'";
							$result = $connect->query($sql);
							if($result->num_rows > 0)
							{	
								while($data=$result->fetch_assoc())
								{ 
									echo '<div class="bg-faka">
											
											<div class="col-md-4 xss">
												<span class="rodse">'.$data[$user['name']].'</span>
											</div>
											<div class="col-md-4 xss">
												<span class="rodse">'.$data[$user['level']].' LVL</span>
											</div>
										</div>';
								}
								}	else echo '<div class="bg-faka">
											
											<div class="col-md-4 xss">
												<span class="rodse">Данных нет</span>
											</div></div>'; ?>
					</div>
					
				</div>
				<div id="mont2" class="w3-container w3-border city" style="display:none">
					<div class="col-md-12">
						<?php 	
							$sqls = "SELECT * FROM `{$user['table']}` WHERE `{$user['leader']}` != '0'";
							$results = $connect->query($sqls);
							if($results->num_rows > 0)
							{


								while($datas=$results->fetch_assoc())
								{
									switch($datas[$user['member']])
									{
									case 0: $frac = "Безработный"; break; 
									case 1: $frac = "Городской совет"; break;
									case 2: $frac = "Мэрия г.Арзамас"; break;
									case 3: $frac = "Городской совет"; break;
									case 4: $frac = "Полиция г.Южный"; break;
									case 5: $frac = "Полиция г.Арзамас"; break; 
									case 6: $frac = "Спецназ"; break;
									case 7: $frac = "ФСБ"; break;
									case 8: $frac = "Армия СВ"; break;
									case 9: $frac = "Армия ВФМ"; break;
									case 10: $frac = "АвтоШкола"; break; 
									case 11: $frac = "Правительство"; break;
									case 12: $frac = ""; break;
									case 13: $frac = ""; break;
									case 14: $frac = ""; break;
									case 15: $frac = "Юж.Отделение"; break;
									case 16: $frac = "Цент.Больница"; break;
									case 17: $frac = "Лыткар.Отделение"; break; 
									case 18: $frac = "Казахская Мафия"; break;
									case 19: $frac = "Bloods Gang"; break;
									case 20: $frac = "Германская Мафия"; break;
									case 21: $frac = "Киргизкая Мафия"; break;
									case 22: $frac = "Итальянская Мафия"; break;
									case 23: $frac = "Русская Мафия"; break;
									case 24: $frac = "Японская Мафия"; break;
									case 25: $frac = "Радио Восток"; break;
									case 26: $frac = "Радио Energy"; break;
									case 27: $frac = "Радио Плюс"; break;
									}
									echo '<div class="bg-faka">						
											<div class="col-md-4 xss">
												<span class="rodse">'.$datas[$user['name']].'</span>
											</div>
											<div class="col-md-4 xss">
												<span class="rodse">'.$datas[$user['level']].' LVL</span>
											</div>
											<div class="col-md-4 xss">
												<span class="rodse">'.$frac.'</span>
											</div>
										</div>';
								}
							

							}	else echo '<div class="bg-faka">
											
											<div class="col-md-4 xss">
												<span class="rodse">Данных нет</span>
											</div></div>';
							?>
					</div>
					
					
				</div>
				
				
				
				
			</div>
		</div>
	</div>
	<span class="bg-pt2"></span>
	<br><br>