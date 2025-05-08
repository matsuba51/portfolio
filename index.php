<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ポートフォリオ - 自己紹介</title>
        
        <!-- リセットCSS（normalize.css） -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        
        <!-- メインCSS -->
        <link rel="stylesheet" href="assets/css/myself.css">
    </head>
    <body>
        <header>
            <h1>PORTFOLIO</h1>
        </header>
        
        <main>
            <section class="profile">
                <img src="assets/img/profile.jpg" alt="プロフィール写真">
                <div>
                    <h2>松葉　巧一</h2>
                    <p>こんにちは！Web開発を学んでいる松葉巧一です。</p>
                    <p>約1年間、オンラインスクールや職業訓練でWeb開発やプログラミングを学び、Dockerなどの技術は独学で習得しました。</p>
                    <p>現在、ブログシステムやポートフォリオサイトの制作を通して、実務に役立つスキルを磨いています。今後も成長を続け、より多くのプロジェクトに携わりながら、さらに技術を深めていきたいと考えています。</p>
                </div>
            </section>
            
            <section class="skills">
                <h2>Skills</h2>
                
                <h3>言語</h3>
                <ul>
                    <li>HTML / CSS</li>
                    <li>JavaScript</li>
                    <li>PHP</li>
                </ul>
                
                <h3>フレームワーク・ライブラリ</h3>
                <ul>
                    <li>Laravel</li>
                    <li>Bootstrap</li>
                </ul>
                
                <h3>データベース</h3>
                <ul>
                    <li>MySQL</li>
                    <li>phpMyAdmin</li>
                </ul>
                
                <h3>環境・ツール</h3>
                <ul>
                    <li>Docker</li>
                    <li>Git / GitHub</li>
                </ul>
            </section>

            <section class="works">
                <h2>Works</h2>
                <div class="work-item">
                    <a href="http://54.79.33.38/blog/" target="_blank">
                        <img src="assets/img/blog.png" alt="ブログサイトのトップページ画面">
                        <p>ブログサイト</p>
                    </a>
                </div>
                <div class="work-item">
                    <a href="http://3.27.17.169/surfing/" target="_blank">
                        <img src="assets/img/surfing.png" alt="サーフィンサイトのトップページ画面">
                        <p>サーフィンサイト</p>
                    </a>
                    <p><a href="https://github.com/matsuba51" target="_blank">GitHubでコードを見る</a></p>
                </div>
            </section>
        </main>
        
        <footer>
            <p>&copy; 2025 Portfolio</p>
        </footer>
    </body>
</html>
