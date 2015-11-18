<?php

return array(
    'articles' => array(
        'tpl'  => '<div class="corpus-articles">
    <h4 class="corpus-articles-h4">Top articles on:</h4>
    <a href="http://legislationlab.org/{{= locale}}/law/{{= discussion.lawSlug}}:{{= discussion.slug}}/" target="_blank">
        <h3 class="corpus-articles-h3">{{= discussion.title }}</h3></a>

    <div class="corpus-articles-items">
        {{ _.each(articles, function(article){ }}
        <div class="corpus-articles-item">
            <div class="corpus-articles-title">
                <a href="http://legislationlab.org/{{= locale}}/law/{{= discussion.lawSlug}}:{{= discussion.slug}}/v/{{= article.id}}" target="_blank">
                    {{= article.title}}</a>
            </div>
            <div class="corpus-article-stats">
                &#x2713; Votes up: {{= article.stats.votesUp}} |
                &#x2715; Votes down: {{= article.stats.votesDown}} |
                &#x270E; Comments: {{= article.stats.comments}}
            </div>
        </div>
        {{ }); }}
    </div>
</div>',
        'css' => ' .corpus-articles {
    max-width: 500px;
    border: 1px solid black;
    border-radius: 3px;
  }

  .corpus-articles-h3 {
    background-color: #19191A;
    color: #FFFFFF;
    margin: 0;
    padding: 10px;
  }

  .corpus-articles-h4 {
    background-color: #19191A;
    color: #FFFFFF;
    margin: 0;
    padding: 10px 10px 0px 10px;
  }

  .corpus-articles-items {
    max-height: 300px;
    overflow-y: scroll;
  }

  .corpus-articles-item {
    -moz-box-shadow: 1px 1px 1px #B2B2B2;
    -webkit-box-shadow: 1px 1px 1px #B2B2B2;
    box-shadow: 1px 1px 1px #B2B2B2;
    padding: 10px;
  }

  .corpus-articles a {
    text-decoration: none;
    border-bottom:0;
    color: #000000;
  }

  .corpus-articles a:hover {
    text-decoration: underline;
    color: #FFFFFF;
  }

  .corpus-article-title a{
    color: #000000;
  }

  .corpus-articles-title a:hover {
    color: #25429A;
  }

  .corpus-articles-title {
    font-weight: 700;
  }

  .corpus-article-stats {
    padding-top: 10px;
    font-size: 16px;
  }

  .corpus-articles h3,
  .corpus-articles h4 {
    margin: 0;
  }'
    )
);
