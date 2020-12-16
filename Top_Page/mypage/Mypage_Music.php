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
    <link rel="stylesheet" href="MyPage_Music.css">
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

    <body>

        <div class="MyPageConfig_back_ground">
            <h1>音楽の投稿</h1>

            <div class="MyPageConfig_post_details">
                <p>こちらは音楽を投稿するページです。音楽を投稿して多くの人に聞いてもらいましょう.</p>
                <p>以下の項目に必要事項を記入してください.</p>
                </p>

            </div>

            <div class=MyPageConfig_left_margin>
                <!--文字の左の余白指定-->
                <br><br><br>

                <!--↓action = ""送信先 　method = "post"送信形式?URLに送信内容を表示させない（get内容を表示する）-->
                <form action="" method="post" 　>
                    <div>
                        <div class="MyPageConfig_form-event">
                            <p>音楽名<p>
                                    <label for="name"></label>
                                    <input type="name" name="name" required="required" <!--placeholder="名前" --></input>
                                    <br><br><br>
                        </div>
                        <div class="MyPageConfig_form-event">
                            <p>音楽のリンク (音楽をyoutubeに投稿し,youtubeの動画リンクを記入してください.)<p>
                                    <label for="name"></label>
                                    <input type="name" name="name" required="required" <!--placeholder="名前" --></input>
                                    <br><br><br>
                        </div>
                        <div class="MyPageConfig_form-event">
                            <p>コメント
                                <p>
                                    <div class="MyPageConfig_form-event">
                                        <label for="event_introduction"></label>
                                        <textarea name="event_introduction" cols="100" rows="5" required="required" <!--placeholder="イベント紹介文" --></textarea>
                                    </div>
                                    <br><br><br>
                        </div>
                        <!--インスタグラム　ツイッター 低-->

                        <div class=Mypage_post_button_fream>
                            <div class=Mypage_post_button_rightfream>
                                <a href="MyPage.php">
                                    <button class="Mypage_Config_rightbutton" type="button" style="width:100%;height:100%">
                                        <p>投稿</p>
                                    </button></a></div>
                            <div class=Mypage_post_button_leftfream>
                                <a href="MyPage.php">
                                    <button class="Mypage_Config_leftbutton" type="button" style="width:100%;height:100%">
                                        <p>戻る</p>
                                    </button></a></div>
                        </div>
                    </div>
            </div>

            </from>
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