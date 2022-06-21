<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/favicon.ico">
    <title>Blog - This is an blog site</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/mediumish.css" rel="stylesheet">
</head>

<body>

    <!-- Begin Nav
================================================== -->
    <nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <!-- Begin Logo -->
            <div class="col-md-4">
                <a class="navbar-brand" href="/">
                    <h2>bLoG</h2>
                </a>
            </div>
            <!-- End Logo -->
            <div class="collapse navbar-collapse row" id="navbarsExampleDefault">
                <!-- Begin Search -->
                <div class="col-md-4 d-flex justify-content-center">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                        <span class="search-icon"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25">
                                <path
                                    d="M20.067 18.933l-4.157-4.157a6 6 0 1 0-.884.884l4.157 4.157a.624.624 0 1 0 .884-.884zM6.5 11c0-2.62 2.13-4.75 4.75-4.75S16 8.38 16 11s-2.13 4.75-4.75 4.75S6.5 13.62 6.5 11z">
                                </path>
                            </svg></span>
                    </form>
                </div>
                <!-- End Search -->
                <!-- Begin Menu -->
                <div class="col-md-4 d-flex justify-content-end ml-auto">
                    @if (Route::has('login'))
                    <ul class="navbar-nav ml-auto">
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/create">Create</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/create">Create</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        </li>
                        @endif
                        @endauth
                    </ul>
                    @endif
                </div>
                <!-- End Menu -->
            </div>
        </div>
    </nav>
    <!-- End Nav
================================================== -->

    <!-- Begin Site Title
================================================== -->
    <div class="container">
        <div class="mainheading">
            <h1 class="sitetitle">Mediumish</h1>
            <p class="lead">
                Bootstrap theme, medium style, simply perfect for bloggers
            </p>
        </div>
        <!-- End Site Title
================================================== -->

        <!-- Begin Featured
	================================================== -->
        <section class="featured-posts">
            <div class="section-title">
                <h2><span>Featured</span></h2>
            </div>
            <div class="card-columns listfeaturedtag">

                <!-- begin post -->
                @foreach ($posts as $post)
                <div class="card">
                    <div class="row">
                        <div class="col-md-5 wrapthumbnail">
                            <a href="post.html">
                                <div class="thumbnail" style="background-image:url(assets/img/demopic/1.jpg);">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-7">
                            <div class="card-block">
                                <h2 class="card-title"><a href="post.html">{{ $post->title }}</a></h2>
                                <h4 class="card-text">{{ $post->description }}.</h4>
                                <div class="metafooter">
                                    <div class="wrapfooter">
                                        <span class="meta-footer-thumb">
                                            <a href="author.html"><img class="author-thumb"
                                                    src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                                    alt="Sal"></a>
                                        </span>
                                        <span class="author-meta">
                                            <span class="post-name"><a href="author.html">{{ $post->user->name
                                                    }}</a></span><br />
                                            <span class="post-date">{{ $post->date }}</span></span>
                                        </span>
                                        <span class="post-read-more"><a href="post.html"
                                                title="Read Story">Like</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- end post -->


            </div>
        </section>
        <!-- End Featured
	================================================== -->

        <!-- Begin List Posts
	================================================== -->
        <section class="recent-posts">
            <div class="section-title">
                <h2><span>All Stories</span></h2>
            </div>
            <div class="card-columns listrecent">

                <!-- begin post -->
                <div class="card">
                    <a href="post.html">
                        <img class="img-fluid" src="assets/img/demopic/5.jpg" alt="">
                    </a>
                    <div class="card-block">
                        <h2 class="card-title"><a href="post.html">Autumn doesn't have to be nostalgic, you know?</a>
                        </h2>
                        <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</h4>
                        <div class="metafooter">
                            <div class="wrapfooter">
                                <span class="meta-footer-thumb">
                                    <a href="author.html"><img class="author-thumb"
                                            src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                            alt="Sal"></a>
                                </span>
                                <span class="author-meta">
                                    <span class="post-name"><a href="author.html">Sal</a></span><br />
                                    <span class="post-date">22 July 2017</span><span class="dot"></span><span
                                        class="post-read">6 min read</span>
                                </span>
                                <span class="post-read-more"><a href="post.html" title="Read Story"><svg
                                            class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25">
                                            <path
                                                d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                fill-rule="evenodd"></path>
                                        </svg></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->

                <!-- begin post -->
                <div class="card">
                    <a href="post.html">
                        <img class="img-fluid" src="assets/img/demopic/6.jpg" alt="">
                    </a>
                    <div class="card-block">
                        <h2 class="card-title"><a href="post.html">Best galleries in the world with photos</a></h2>
                        <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</h4>
                        <div class="metafooter">
                            <div class="wrapfooter">
                                <span class="meta-footer-thumb">
                                    <a href="author.html"><img class="author-thumb"
                                            src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                            alt="Sal"></a>
                                </span>
                                <span class="author-meta">
                                    <span class="post-name"><a href="author.html">Sal</a></span><br />
                                    <span class="post-date">22 July 2017</span><span class="dot"></span><span
                                        class="post-read">6 min read</span>
                                </span>
                                <span class="post-read-more"><a href="post.html" title="Read Story"><svg
                                            class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25">
                                            <path
                                                d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                fill-rule="evenodd"></path>
                                        </svg></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->

                <!-- begin post -->
                <div class="card">
                    <a href="post.html">
                        <img class="img-fluid" src="assets/img/demopic/7.jpg" alt="">
                    </a>
                    <div class="card-block">
                        <h2 class="card-title"><a href="post.html">Little red dress and a perfect summer</a></h2>
                        <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</h4>
                        <div class="metafooter">
                            <div class="wrapfooter">
                                <span class="meta-footer-thumb">
                                    <a href="author.html"><img class="author-thumb"
                                            src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                            alt="Sal"></a>
                                </span>
                                <span class="author-meta">
                                    <span class="post-name"><a href="author.html">Sal</a></span><br />
                                    <span class="post-date">22 July 2017</span><span class="dot"></span><span
                                        class="post-read">6 min read</span>
                                </span>
                                <span class="post-read-more"><a href="post.html" title="Read Story"><svg
                                            class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25">
                                            <path
                                                d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                fill-rule="evenodd"></path>
                                        </svg></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->

                <!-- begin post -->
                <div class="card">
                    <a href="post.html">
                        <img class="img-fluid" src="assets/img/demopic/8.jpg" alt="">
                    </a>
                    <div class="card-block">
                        <h2 class="card-title"><a href="post.html">Thinking outside the box can help you prosper</a>
                        </h2>
                        <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</h4>
                        <div class="metafooter">
                            <div class="wrapfooter">
                                <span class="meta-footer-thumb">
                                    <a href="author.html"><img class="author-thumb"
                                            src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                            alt="Sal"></a>
                                </span>
                                <span class="author-meta">
                                    <span class="post-name"><a href="author.html">Sal</a></span><br />
                                    <span class="post-date">22 July 2017</span><span class="dot"></span><span
                                        class="post-read">6 min read</span>
                                </span>
                                <span class="post-read-more"><a href="post.html" title="Read Story"><svg
                                            class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25">
                                            <path
                                                d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                fill-rule="evenodd"></path>
                                        </svg></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->

                <!-- begin post -->
                <div class="card">
                    <a href="post.html">
                        <img class="img-fluid" src="assets/img/demopic/9.jpg" alt="">
                    </a>
                    <div class="card-block">
                        <h2 class="card-title"><a href="post.html">10 Things you should know about choosing your
                                house</a></h2>
                        <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</h4>
                        <div class="metafooter">
                            <div class="wrapfooter">
                                <span class="meta-footer-thumb">
                                    <a href="author.html"><img class="author-thumb"
                                            src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                            alt="Sal"></a>
                                </span>
                                <span class="author-meta">
                                    <span class="post-name"><a href="author.html">Sal</a></span><br />
                                    <span class="post-date">22 July 2017</span><span class="dot"></span><span
                                        class="post-read">6 min read</span>
                                </span>
                                <span class="post-read-more"><a href="post.html" title="Read Story"><svg
                                            class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25">
                                            <path
                                                d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                fill-rule="evenodd"></path>
                                        </svg></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->

                <!-- begin post -->
                <div class="card">
                    <a href="post.html">
                        <img class="img-fluid" src="assets/img/demopic/10.jpg" alt="">
                    </a>
                    <div class="card-block">
                        <h2 class="card-title"><a href="post.html">Visiting the world means learning cultures</a></h2>
                        <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</h4>
                        <div class="metafooter">
                            <div class="wrapfooter">
                                <span class="meta-footer-thumb">
                                    <a href="author.html"><img class="author-thumb"
                                            src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                            alt="Sal"></a>
                                </span>
                                <span class="author-meta">
                                    <span class="post-name"><a href="author.html">Sal</a></span><br />
                                    <span class="post-date">22 July 2017</span><span class="dot"></span><span
                                        class="post-read">6 min read</span>
                                </span>
                                <span class="post-read-more"><a href="post.html" title="Read Story"><svg
                                            class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25">
                                            <path
                                                d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                fill-rule="evenodd"></path>
                                        </svg></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->

            </div>
        </section>
        <!-- End List Posts
	================================================== -->

        <!-- Begin Footer
	================================================== -->
        <div class="footer">
            <p class="pull-left">
                Copyright &copy; 2017 Your Website Name
            </p>
            <p class="pull-right">
                Mediumish Theme by <a target="_blank" href="https://www.wowthemes.net">WowThemes.net</a>
            </p>
            <div class="clearfix">
            </div>
        </div>
        <!-- End Footer
	================================================== -->

    </div>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous">
    </script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>
