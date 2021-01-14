<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        {{-- ここからテスト --}}
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' >
        {{-- ここまで --}}
        <title>BookShare</title>
        @include('style-sheet')
        <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #00A95F;">
            <a class='navbar-brand' href={{ route('book.top') }}>BookShare</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarCollapse" style="">
                <ul class="navbar-nav mr-auto">
                    {{-- リンク作成例
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">書籍一覧</a>
                    </li>
                    --}}
                    <li class="nav-item active">
                        <a class="nav-link" href={{ route('book.list') }}>本の一覧<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href={{ route('book.ans') }}>Q&A<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="https://twitter.com/booksharesys" target="_blank">公式twitter<span class="sr-only">(current)</span></a>
                    </li>
                </ul>

                {{-- nav内検索バー 使用未定
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                --}}
            </div>
        </nav>
    </head>
    <body class="d-flex flex-column h-100">
        <div class='container'>
            @yield('content')
        </div>
        <a id="skippy" class="sr-only sr-only-focusable" href="#content">
            <div class="container">
                <span class="skiplink-text">Skip to main content</span>
            </div>
        </a>

        {{--
        <main role="main" class="flex-shrink-0">
            <div class="container">
                <h1 class="mt-5">Sticky footer with fixed navbar</h1>
                <p class="lead">Pin a footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>main &gt; .container</code>.</p>
                <p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p>
            </div>
        </main>
        --}}

        <br>
        <br>
        <footer {{--class="footer mt-auto py-3"--}}>
            {{--
            <div class="container">
                <span class="text-muted">BookShare</span><br>
                <span class="text-muted">2020/8/30 TEST-VERSION</span><br>
                <span class="text-muted">NO USER AND NO SHELF</span>
            </div>
            --}}
        </footer>

        {{-- script記述 --}}
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>
            window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')
        </script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script><script src="/docs/4.3/assets/js/vendor/anchor.min.js"></script>
        <script src="/docs/4.3/assets/js/vendor/clipboard.min.js"></script>
        <script src="/docs/4.3/assets/js/vendor/bs-custom-file-input.min.js"></script>
        <script src="/docs/4.3/assets/js/src/application.js"></script>
        <script src="/docs/4.3/assets/js/src/search.js"></script>
        <script src="/docs/4.3/assets/js/src/ie-emulation-modes-warning.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            $(function(){
                $("h1").fadeIn(5000);
                $("h2").fadeIn(7000);
                $(".contents img").hide();
                $(".contents img").fadeIn(7000);
            });
        </script>
    </body>
</html>