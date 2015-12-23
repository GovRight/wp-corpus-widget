<?php

return array(
    'articles' => array(
        'tpl' => '<div class="corpus-articles">
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
    ),
    'discussion' => array(
        'tpl' => '<div class="corpus-discussion">
  <a href="http://legislationlab.org/{{= locale}}/law/{{= discussion.lawSlug}}:{{= discussion.slug}}/" target="_blank">
    <h3 class="corpus-discussion-h3">{{= discussion.title }}</h3></a>

  <div class="corpus-discussion-summary">{{= GovRight.truncateString(discussion.overview)}}</div>

  <div class="corpus-discussion-stats">
    <div class="corpus-discussion-stats-item">
      <b>{{= discussion.stats.votesUp }}</b>
      <br/>votes up
    </div>
    <div class="corpus-discussion-stats-item">
      <b>{{= discussion.stats.votesDown}}</b>
      <br/>votes down
    </div>
    <div class="corpus-discussion-stats-item">
      <b>{{= discussion.stats.comments }}</b>
      <br/>comments
    </div>
    <div class="corpus-discussion-stats-item">
      <b>{{= discussion.stats.versions }}</b>
      <br/>versions
    </div>
    <div class="corpus-discussion-stats-item">
      <b>{{= discussion.stats.comparisons }}</b>
      <br/>comparisons
    </div>
  </div>
</div>',
        'css' => '.corpus-discussion {
    border: 1px solid black;
    max-width: 500px;
    border-radius: 3px;
    margin-bottom: 10px;
    margin-top: 10px;
  }
  .corpus-discussion-h3 {
    background-color: #19191A;
    color: #FFFFFF;
    margin: 0;
    padding: 10px;
  }
  .corpus-discussion-summary {
    font-style: italic;
    padding: 10px;
    text-align: justify;
  }
  .corpus-discussion-stats {
    display: flex;
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flexbox;
    text-align: center;
  }
  .corpus-discussion-stats-item {
    width: 20%;
    border-top: 1px solid black;
    border-right: 1px solid black;
    padding: 5px;
    box-sizing: border-box;
  }
  .corpus-discussion-stats-item:last-child {
    border-right: 0;
  }
  .corpus-discussion a {
    text-decoration: none;
  }
  .corpus-discussion a:hover {
    text-decoration: underline;
    color: #FFFFFF;
  }
  .corpus-discussion h3 {
    margin: 0;
  }'
    ),
    'recent-comments' => array(
        'tpl' => '<div class="corpus-recent-comments">
  <h4 class="corpus-recent-comments-h4">Recent comments on: </h4>
  <a href="http://legislationlab.org/{{= locale}}/law/{{= discussion.lawSlug}}:{{= discussion.slug}}/" target="_blank">
    <h3 class="corpus-recent-comments-h3">{{= discussion.title }}</h3></a>

  <div class="corpus-recent-comments-items">
    {{ _.each(comments, function(comment){ }}
    <div class="corpus-recent-comments-item">
      <div class="corpus-recent-comments-author">
        <a href="http://facebook.com/app_scoped_user_id/{{= comment.user.profile.id}}" target="_blank">
          {{= comment.user.profile.displayName}}</a>
      </div>
      <div class="corpus-recent-comments-date">
        {{= GovRight.formatDate(comment.created, "yyyy-MM-dd HH:mm")}}
      </div>
      <div class="corpus-recent-comments-text">
        <a href="http://legislationlab.org/{{= locale}}/law/{{= discussion.lawSlug}}:{{= discussion.slug}}/v/{{= comment.versionId}}" target="_blank">
          {{= GovRight.truncateString(comment.text)}}</a>
      </div>
    </div>
    {{ }); }}
  </div>
</div>',
        'css' => ' .corpus-recent-comments {
    max-width: 500px;
    border: 1px solid black;
    border-radius: 3px;
  }

  .corpus-recent-comments-h3 {
    background-color: #19191A;
    color: #FFFFFF;
    margin: 0;
    padding: 10px;
  }

  .corpus-recent-comments-h4 {
    background-color: #19191A;
    color: #FFFFFF;
    margin: 0;
    padding: 10px 10px 0px 10px;
  }

  .corpus-recent-comments-item {
    -moz-box-shadow: 1px 1px 1px #B2B2B2;
    -webkit-box-shadow: 1px 1px 1px #B2B2B2;
    box-shadow: 1px 1px 1px #B2B2B2;
    padding: 10px;
  }

  .corpus-recent-comments-text {
    text-align: justify;
    padding-top: 10px;
  }

  .corpus-recent-comments-date {
    text-align: right;
    font-style: italic;
  }

  .corpus-recent-comments-items {
    max-height: 300px;
    overflow-y: scroll;
  }

  .corpus-recent-comments a {
    text-decoration: none;
    border-bottom:0;
  }

  .corpus-recent-comments a:hover {
    text-decoration: underline;
    color: #FFFFFF;
  }

  .corpus-recent-comments h3,
  .corpus-recent-comments h4 {
    margin: 0;
  }

  .corpus-recent-comments-author {
    float: left;
    font-weight: 700;
  }

  .corpus-recent-comments-author a,
  .corpus-recent-comments-text a {
    color: #000000;
  }

  .corpus-recent-comments-author a:hover,
  .corpus-recent-comments-text a:hover {
    color: #25429A;
  }'
    )
);
