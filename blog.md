---
layout: main
title: Blog
permalink: /blog/
---
<div class="content-wrapper">
  <div class="blog-posts">
    <h2>Recent Posts</h2>
    <div class="posts">
      {% for post in site.posts %}
        <div class="post">
          <h3><a href="{{ post.url }}">{{ post.title }}</a></h3>
          <p class="post-date">{{ post.date | date: "%B %d, %Y" }}</p>
          <p class="post-summary">{{ post.summary }}</p>
        </div>
      {% endfor %}
    </div>
  </div>
  <div class="sidebar">
    <h3>Recent Posts</h3>
    <ul>
      {% for post in site.posts limit:10 %}
        <li><a href="{{ post.url }}">{{ post.title }}</a> - <span>{{ post.date | date: "%B %d, %Y" }}</span></li>
      {% endfor %}
    </ul>
  </div>
</div>
