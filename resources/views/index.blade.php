@extends('layouts.page')

@section('content')
    <div class="container">
        <h1 class="page-title hidden">Kerim's Homepage</h1>
        <header>
            <div class="introduction">
                <h2 class="introduction-title">
                    Hey, I'm Kerim. Nice to meet you!
                </h2>
                <p class="introduction-paragraph">
                    I'm a web developer and general technology enthusiast based in <a target="_blank" rel="noopener" href="https://en.wikipedia.org/wiki/Wuppertal">Germany</a>.
                </p>
            </div>
        </header>
        <div class="separator hidden--tablet-and-up">
            <p>&#9830; &#9830; &#9830;</p>
        </div>
        <section>
            <h4 class="more-info-title">More about me and other interesting things:</h4>
            <p>
                If you would like to contact me, <a href="mailto:kerim@gueney.org">email me</a>.
            </p>
            <p>
                Visit my <a target="_blank" rel="noopener" href="https://github.com/kerimg">GitHub</a> Profile.
            </p>
            <p>
                Befriend me on <a target="_blank" rel="noopener" href="https://www.xing.com/profile/Kerim_Gueney3">XING</a>.
            </p>
            <p>Check out the <a target="_blank" rel="noopener" href="http://fai-project.org">FAI Project</a></p>
        </section>
        <section>
            <h4 class="latest-entry-title">What I wrote about the other day:</h4>
            <article>
                <h3>
                    {{ $lastBlogEntry->title }}
                </h3>
                <p class="slug">
                    {{ $lastBlogEntry->slug }}
                </p>
            </article>
        </section>
    </div>
@stop