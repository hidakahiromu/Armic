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
    <link rel="stylesheet" href="Mypage_Delete.css">
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
        <h1><a href="Home.html" 　title="Homeへ">
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
            <php? $movietitle='多分イギリス人がしゃべってる' echo $movietitle ?>
                <h1>音楽の削除</h1>

                <div class="MyPageConfig_post_details">
                    <p>以下の音楽を本当に削除しますか？</p>

                </div>
                <!--無理-->
                <!-- $movieulink="https://www.youtube.com/embed/" ;&movielink='https://youtu.be/6kUhRhoBNEQ' ; moviester='10' ; ?>
                    -->
                <div class="Mypage_Posted_MusicBox ">
                    <table class='Mypage_Posted_MusicBox_Table'>


                        <tr>
                            <th class="Mypage_Posted_MusicBox_Tabletitle1">
                                動画
                            </th>
                            <th>
                                <iframe width="320" height="180" src="https://www.youtube.com/embed/6kUhRhoBNEQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </th>

                        </tr>
                        <tr>
                            <th class="Mypage_Posted_MusicBox_Tabletitle2">

                                音楽名
                            </th>
                            <th>
                                イギリス人が喋っている動画
                            </th>
                        </tr>
                        <tr>
                            <th class="Mypage_Posted_MusicBox_Tabletitle3">
                                リンク
                                </td>
                            <th><a href="https://youtu.be/6kUhRhoBNEQ" target="_blank">
                                    https://youtu.be/6kUhRhoBNEQ
                                </a>

                            </th>
                        </tr>
                        <tr>
                            <th class="Mypage_Posted_MusicBox_Tabletitle4">
                                投稿日時
                            </th>
                            <th>
                                0000/00/00
                            </th>
                        </tr>
                        <tr>
                            <th class="Mypage_Posted_MusicBox_Tabletitle5">
                                ★の数
                                </td>
                            <th>
                                ~~~~~~
                                </td>
                        </tr>
                    </table>
                    <div class=Mypage_post_button_fream>
                        <div class=Mypage_post_button_rightfream>
                            <a href="MyPage.php">
                                <button class="Mypage_Config_rightbutton" type="button" style="width:100%;height:100%">
                                    <p>削除</p>
                                </button></a></div>
                        <div class=Mypage_post_button_leftfream>
                            <a href="MyPage.php">
                                <button class="Mypage_Config_leftbutton" type="button" style="width:100%;height:100%">
                                    <p>戻る</p>
                                </button></a></div>


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