{{--@extends ('layouts.app')--}}

{{--@section('content')--}}
    {{--<ajax-component></ajax-component>--}}
    <div class="wrapper">
        <div class="card radius shadowDepth1">
            <div class="card__image border-tlr-radius">
                <img src="http://lorempixel.com/400/200/sports/" alt="image" class="border-tlr-radius">
            </div>

            <div class="card__content card__padding">
                <div class="card__meta">
                    <a href="#">Web Design</a>
                    <time>17th March</time>
                </div>

                <article class="card__article">
                    <h2><a href="#">Material Design Card - For Blog Post Article</a></h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus harum...
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus harum...
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus harum...
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus harum...
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus harum...Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus harum...
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus harum...
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus harum...
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus harum...
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus harum...
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus harum...Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus harum...
                    </p>
                </article>
            </div>
        </div>
    </div>
<style>
    @import 'https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css';
    @import 'https://fonts.googleapis.com/css?family=Roboto:700,400';
    /*
    *  Basic Reset
    */

    *,
    *:after,
    *:before {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /**
     * Basics Styles
     */
    html {
        font-size: 62.5%;
    }
    body {
        background: white;
        /*font-family: Roboto;*/
        font-weight: 400;
        font-size: 1.6em;
        line-height: 1.6;
        color: white;
    }

    /*a {*/
        /*text-decoration: none;*/
        /*color: #3498db;*/
    /*}*/
    /*a:hover {*/
        /*color: #2980b9;*/
    /*}*/

    /*h2 {*/
        /*line-height: 1.2;*/
        /*margin-bottom: 1.6rem;*/
        /*color: grey;*/
    /*}*/

    .wrapper {
        max-width: 800px;
        margin: 150px auto;
        padding-left: 1em;
        padding-right: 1em;
    }

    /**
     * Helpers
     */
    .border-tlr-radius {
        border-top-left-radius: 6px;
        border-top-right-radius: 6px;
    }

    .text-center { text-align: center; }

    .radius { border-radius: 2px; }

    .padding-tb { padding-top: 1.6rem; padding-bottom: 1.6rem;}

    .shadowDepth0 { box-shadow: 0 1px 3px rgba(0,0,0, 0.12); }

    /*.shadowDepth1 {*/
        /*box-shadow:*/
            /*0 1px 3px rgba(0,0,0, 0.12),*/
            /*0 1px 2px rgba(0,0,0, 0.24);*/
    /*}*/


    /**
     * Card Styles
     */

    .card {
        background-color: grey;
        margin-bottom: 1.6rem;
    }

    .card__padding {
        padding: 1.6rem;
    }

    .card__image {
        min-height: 50px;
        /*max-height: 100px;*/
        /*background-color: #eee;*/
    }
    .card__image img {
        width: 100%;
        max-width: 100%;
        display: block;
    }

    .card__content {
        position: relative;
    }

    /* card meta */
    .card__meta time {
        font-size: 1.5rem;
        color: #bbb;
        margin-left: 0.8rem;
    }

    /* card article */
    .card__article a {
        text-decoration: none;
        color: #444;
        transition: all 0.5s ease;
    }
    .card__article a:hover {
        color: #2980b9;
    }

    /* card action */
    .card__action {
        overflow: hidden;
        padding-right: 1.6rem;
        padding-left: 1.6rem;
        padding-bottom: 1.6rem;
    }

    .card__author {}

    .card__author img,
    .card__author-content {
        display: inline-block;
        vertical-align: middle;
    }

    .card__author img{
        border-radius: 50%;
        margin-right: 0.6em;
    }

    .card__share {
        float: right;
        position: relative;
        margin-top: -42px;
    }

    .card__social {
        position: absolute;
        top: 0;
        right: 0;
        visibility: hidden;
        width: 160px;
        transform: translateZ(0);
        transform: translateX(0px);
        transition: transform 0.35s ease;
    }
    .card__social--active {
        visibility: visible;
        /*z-index: 3;*/
        transform: translateZ(0);
        transform: translateX(-48px);
        transition: transform 0.35s ease;
    }

    .share-toggle {
        z-index: 2;
    }
    .share-toggle:before {
        content: "\f1e0";
        font-family: 'FontAwesome';
        color: #3498db;
    }
    .share-toggle.share-expanded:before {
        content: "\f00d";
    }

    .share-icon {
        display: inline-block;
        width: 48px;
        height: 48px;
        line-height: 48px;
        text-align: center;
        border-radius: 50%;
        background-color: #fff;
        transition: all 0.3s ease;
        outline: 0;

        box-shadow:
            0 2px 4px rgba(0,0,0, 0.12),
            0 2px 4px rgba(0,0,0, 0.24);
    }
    .share-icon:hover,
    .share-icon:focus {
        box-shadow:
            0 3px 6px rgba(0,0,0, 0.12),
            0 3px 6px rgba(0,0,0, 0.24);

        -webkit-transform: scale(1.2);
        -moz-transform: scale(1.2);
        -ms-transform: scale(1.2);
        -o-transform: scale(1.2);
        transform: scale(1.2);
    }

    .facebook {
        background-color: #3b5998;
    }
    .twitter {
        background-color: #00abe3;
    }
    .googleplus {
        background-color: #d3492c;
    }

    .facebook,
    .twitter,
    .googleplus {
        color: #fff;
    }

    .facebook:hover,
    .twitter:hover,
    .googleplus:hover {
        color: #eee;
    }

</style>
{{--@endsection--}}
