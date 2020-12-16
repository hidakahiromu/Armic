<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>ARMIC</title>
	<link rel="stylesheet" href="../Top_Page.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
	<link rel="icon" type="image/x-icon" href="armicicon.png">
	<meta name="description" content="Armic 音楽サイト">
	<meta http-equiv="X-UA=Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">

	<!--Mypageのcss-->
	<link rel="stylesheet" href="Mypage.css">
	<!--Mypageのcss-ここまで-->
</head>



<body>

	<header>
		<nav class="o">
			<ul class="header_list1">
				<li><a>
						<nobr>ARMICについて</nobr>
					</a></li>
				<li><a>
						<nobr>投稿ページ</nobr>
					</a></li>
				<li><a>
						<nobr>アーティスト一覧</nobr>
					</a></li>
			</ul>
		</nav>
		<h1 class="header_logo"><a href="Home.html" 　title="Homeへ">
				<img src="armic.png" width="200" height="arto"></a>
		</h1>
		<ul class="header_list2">
			<form method="get" action="#" class="search_container">
				<input type="text" size="25" placeholder="キーワード検索">
				<input type="submit" value="&#xf002">
			</form>
			<p></p>
			<li><a>
					<nobr>イベント</nobr>
				</a></li>
			<li><a>
					<nobr>ニュース</nobr>
				</a></li>
			<li><a>
					<nobr>ログイン</nobr>
				</a></li>
		</ul>
	</header>






	<div class="Mypage_background">
		<!--<div class="Mypage_box1">
      <p>ここに文章</p>
    </div>-->
		<!--ただのコメント-->
		<div class="Mypage_Allbox">
			<!--このクラスは今のところ使わねえ-->
			<div class=Mypage_NameIcon_box>

				<?php $username = 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'; ?>
				<!--$usernameにusernameを入れる-->

				<div class="Mypage_NameBox">
					<p><?php echo $username; ?></p>
					<p>さんようこそ</p>
					<!--マイページ編集画面移動-->
					<div class=Mypage_config><a href="MyPageConfig.php"><button class="Mypage_Config_button" type="button" style="width:100%;height:100%">
								<p>アーティスト名の取得</p>
							</button></a></div>
				</div>

				<div class="Mypage_IconBox">
					<?php

					$fp = fopen($_FILES['upimg']['tmp_name'], "rb");
					$img = fread($fp, filesize($_FILES['upimg']['tmp_name']));
					fclose($fp);

					$enc_img = base64_encode($img);

					$imginfo = getimagesize('data:application/octet-stream;base64,' . $enc_img);

					echo '<img src="data:' . $imginfo['mime'] . ';base64,' . $enc_img . '">';

					?>
					<!-- <img src=$comment><!--画像ファイルの名前の変数を記入-->
				</div>
			</div>

			 

			<div class=Mypage_IconChangeBox>
				<form method="POST" action="Mypage.php" enctype="multipart/form-data">アイコンを変更する
					<input type="file" name="upimg" accept="image/*">
					<input type="submit">

				</form>
			</div>
			<div class='Mypage_MusicBox'><a href="Mypage_Music.php"><button class="Mypage_button" type="button" style="width:100%;height:100%">
						<p>音楽を投稿したい方はこちら</p>
					</button></a></div>
			<div class='Mypage_Posted_MusicBox'>
				<table class='Mypage_Posted_MusicBox_Table'>

					<tr>
						<th colspan="5">過去に投稿した音楽</th>
					</tr>

					<tr>
						<th class='Mypage_Posted_MusicBox_TableNumber'>1</th>
						<td class='Mypage_Posted_MusicBox_TableMusic'>音楽&リンク</td>
						<td class='Mypage_Posted_MusicBox_TableTime'>投稿日時</td>
						<td class='Mypage_Posted_MusicBox_TableSter'>★</td>
						<td class='Mypage_Posted_MusicBox_TableDelete'>
							<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
										<p>delete</p>
									</button></a></div>
						</td>
					</tr>

					<tr>
						<th class='Mypage_Posted_MusicBox_TableNumber'>2</th>
						<td class='Mypage_Posted_MusicBox_TableMusic'>a</td>
						<td class='Mypage_Posted_MusicBox_TableTime'>a</td>
						<td class='Mypage_Posted_MusicBox_TableSter'>a</td>
						<td class='Mypage_Posted_MusicBox_TableDelete'>
							<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
										<p>delete</p>
									</button></a></div>
						</td>
					<tr>
						<th class='Mypage_Posted_MusicBox_TableNumber'>3</th>
						<td class='Mypage_Posted_MusicBox_TableMusic'>a</td>
						<td class='Mypage_Posted_MusicBox_TableTime'>a</td>
						<td class='Mypage_Posted_MusicBox_TableSter'>a</td>
						<td class='Mypage_Posted_MusicBox_TableDelete'>
							<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
										<p>delete</p>
									</button></a></div>
						</td>
					</tr>
					<tr>
						<th class='Mypage_Posted_MusicBox_TableNumber'>4</th>
						<td class='Mypage_Posted_MusicBox_TableMusic'>a</td>
						<td class='Mypage_Posted_MusicBox_TableTime'>a</td>
						<td class='Mypage_Posted_MusicBox_TableSter'>a</td>
						<td class='Mypage_Posted_MusicBox_TableDelete'>
							<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
										<p>delete</p>
									</button></a></div>
						</td>
					</tr>
					<tr>
						<th class='Mypage_Posted_MusicBox_TableNumber'>5</th>
						<td class='Mypage_Posted_MusicBox_TableMusic'>a</td>
						<td class='Mypage_Posted_MusicBox_TableTime'>a</td>
						<td class='Mypage_Posted_MusicBox_TableSter'>a</td>
						<td class='Mypage_Posted_MusicBox_TableDelete'>
							<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
										<p>delete</p>
									</button></a></div>
						</td>
					</tr>
				</table>


				<div class="menu">

					<input class="Mypage_10menu" type="checkbox" id="change01" class="accordion" />
					<ul id="links01">
						<li>
							<table class='Mypage_Input_Posted_MusicBox'>
								<tr>
									<th class='Mypage_Posted_MusicBox_TableNumber'>6</th>
									<td class='Mypage_Posted_MusicBox_TableMusic'>a</td>
									<td class='Mypage_Posted_MusicBox_TableTime'>a</td>
									<td class='Mypage_Posted_MusicBox_TableSter'>a</td>
									<td class='Mypage_Posted_MusicBox_TableDelete'>
										<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
													<p>delete</p>
												</button></a></div>
									</td>
								</tr>
								<tr>
									<th class='Mypage_Posted_MusicBox_TableNumber'>7</th>
									<td class='Mypage_Posted_MusicBox_TableMusic'>a</td>
									<td class='Mypage_Posted_MusicBox_TableTime'>a</td>
									<td class='Mypage_Posted_MusicBox_TableSter'>a</td>
									<td class='Mypage_Posted_MusicBox_TableDelete'>
										<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
													<p>delete</p>
												</button></a></div>
									</td>
								</tr>
								<tr>
									<th class='Mypage_Posted_MusicBox_TableNumber'>8</th>
									<td class='Mypage_Posted_MusicBox_TableMusic'>a</td>
									<td class='Mypage_Posted_MusicBox_TableTime'>a</td>
									<td class='Mypage_Posted_MusicBox_TableSter'>a</td>
									<td class='Mypage_Posted_MusicBox_TableDelete'>
										<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
													<p>delete</p>
												</button></a></div>
									</td>
								</tr>
								<tr>
									<th class='Mypage_Posted_MusicBox_TableNumber'>9</th>
									<td class='Mypage_Posted_MusicBox_TableMusic'>a</td>
									<td class='Mypage_Posted_MusicBox_TableTime'>a</td>
									<td class='Mypage_Posted_MusicBox_TableSter'>a</td>
									<td class='Mypage_Posted_MusicBox_TableDelete'>
										<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
													<p>delete</p>
												</button></a></div>
									</td>
								</tr>
								<tr>
									<th class='Mypage_Posted_MusicBox_TableNumber'>10</th>
									<td class='Mypage_Posted_MusicBox_TableMusic'>a</td>
									<td class='Mypage_Posted_MusicBox_TableTime'>a</td>
									<td class='Mypage_Posted_MusicBox_TableSter'>a</td>
									<td class='Mypage_Posted_MusicBox_TableDelete'>
										<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
													<p>delete</p>
												</button></a></div>
									</td>
								</tr>
							</table>
						</li>
					</ul>
					<label class="Details_label" for="change01">詳細の開閉</label>

				</div>
			</div>
		</div>

		<div class='Mypage_GoodPosted_MusicBox'>
			<table class='Mypage_GoodPosted_MusicBox_Table'>


				<tr>
					<th colspan="5">いいねをした音楽</th>
				</tr>

				<tr>
					<th class='Mypage_Posted_MusicBox_TableNumber'>1</th>
					<td class='Mypage_Posted_MusicBox_TableMusic'>音楽&リンク</td>
					<td class='Mypage_Posted_MusicBox_TableTime'>投稿日時</td>
					<td class='Mypage_Posted_MusicBox_TableSter'>★</td>
					<td class='Mypage_Posted_MusicBox_TableDelete'>
						<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
									<p>delete</p>
								</button></a></div>
					</td>
				</tr>

				<tr>
					<th class='Mypage_Posted_MusicBox_TableNumber'>2</th>
					<td class='Mypage_Posted_MusicBox_TableMusic'>a</td>
					<td class='Mypage_Posted_MusicBox_TableTime'>a</td>
					<td class='Mypage_Posted_MusicBox_TableSter'>a</td>
					<td class='Mypage_Posted_MusicBox_TableDelete'>
						<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
									<p>delete</p>
								</button></a></div>
					</td>
				<tr>
					<th class='Mypage_Posted_MusicBox_TableNumber'>3</th>
					<td class='Mypage_Posted_MusicBox_TableMusic'>a</td>
					<td class='Mypage_Posted_MusicBox_TableTime'>a</td>
					<td class='Mypage_Posted_MusicBox_TableSter'>a</td>
					<td class='Mypage_Posted_MusicBox_TableDelete'>
						<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
									<p>delete</p>
								</button></a></div>
					</td>
				</tr>
				<tr>
					<th class='Mypage_Posted_MusicBox_TableNumber'>4</th>
					<td class='Mypage_Posted_MusicBox_TableMusic'>a</td>
					<td class='Mypage_Posted_MusicBox_TableTime'>a</td>
					<td class='Mypage_Posted_MusicBox_TableSter'>a</td>
					<td class='Mypage_Posted_MusicBox_TableDelete'>
						<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
									<p>delete</p>
								</button></a></div>
					</td>
				</tr>
				<tr>
					<th class='Mypage_Posted_MusicBox_TableNumber'>5</th>
					<td class='Mypage_Posted_MusicBox_TableMusic'>a</td>
					<td class='Mypage_Posted_MusicBox_TableTime'>a</td>
					<td class='Mypage_Posted_MusicBox_TableSter'>a</td>
					<td class='Mypage_Posted_MusicBox_TableDelete'>
						<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
									<p>delete</p>
								</button></a></div>
					</td>
				</tr>
			</table>


			<div class="Goodmenu">

				<input class="Mypage_Good10menu" type="checkbox" id="change02" class="accordion" />
				<ul id="links02">
					<li>
						<table class='Mypage_Input_Posted_MusicBox'>
							<tr>
								<th class='Mypage_Posted_MusicBox_TableNumber'>6</th>
								<td class='Mypage_Posted_MusicBox_TableMusic'>音楽&リンク</td>
								<td class='Mypage_Posted_MusicBox_TableTime'>投稿日時</td>
								<td class='Mypage_Posted_MusicBox_TableSter'>★</td>
								<td class='Mypage_Posted_MusicBox_TableDelete'>
									<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
												<p>delete</p>
											</button></a></div>
								</td>
							</tr>

							<tr>
								<th class='Mypage_Posted_MusicBox_TableNumber'>7</th>
								<td class='Mypage_Posted_MusicBox_TableMusic'>a</td>
								<td class='Mypage_Posted_MusicBox_TableTime'>a</td>
								<td class='Mypage_Posted_MusicBox_TableSter'>a</td>
								<td class='Mypage_Posted_MusicBox_TableDelete'>
									<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
												<p>delete</p>
											</button></a></div>
								</td>
							<tr>
								<th class='Mypage_Posted_MusicBox_TableNumber'>8</th>
								<td class='Mypage_Posted_MusicBox_TableMusic'>a</td>
								<td class='Mypage_Posted_MusicBox_TableTime'>a</td>
								<td class='Mypage_Posted_MusicBox_TableSter'>a</td>
								<td class='Mypage_Posted_MusicBox_TableDelete'>
									<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
												<p>delete</p>
											</button></a></div>
								</td>
							</tr>
							<tr>
								<th class='Mypage_Posted_MusicBox_TableNumber'>9</th>
								<td class='Mypage_Posted_MusicBox_TableMusic'>a</td>
								<td class='Mypage_Posted_MusicBox_TableTime'>a</td>
								<td class='Mypage_Posted_MusicBox_TableSter'>a</td>
								<td class='Mypage_Posted_MusicBox_TableDelete'>
									<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
												<p>delete</p>
											</button></a></div>
								</td>
							</tr>
							<tr>
								<th class='Mypage_Posted_MusicBox_TableNumber'>10</th>
								<td class='Mypage_Posted_MusicBox_TableMusic'>a</td>
								<td class='Mypage_Posted_MusicBox_TableTime'>a</td>
								<td class='Mypage_Posted_MusicBox_TableSter'>a</td>
								<td class='Mypage_Posted_MusicBox_TableDelete'>
									<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
												<p>delete</p>
											</button></a></div>
								</td>
							</tr>
						</table>
					</li>
				</ul>
				<label class="GoodDetails_label" for="change02">詳細の開閉</label>

			</div>
		</div>
	</div>
	</div>

	<footer id="footer" class="outer-block">
		<div class="inner-block">
			<div class="wrap">
				<div class="logo">
					<a href="#">
						<h1>ARMIC</h1>
					</a>
				</div>
				<div class="cont">
					<div class="c-btn">
						<a href="#">質問</a>
					</div>
					<ul class="nav">
						<li>ユーザー</li>
						<li><a href="">ログイン</a></li>
						<li><a href="">マイページ</a></li>
					</ul>
					<ul class="nav">
						<li>ご利用に際して</li>
						<li><a href="">Q&A</a></li>
						<li><a href="">利用規約</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="copyright">
			<p><small> © 2020 Armic</small></p>
		</div>
	</footer>
</body>

</html>