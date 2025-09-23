---
layout: main
title: Nancy's Blog
permalink: /blog/
---

<div class="content-wrapper">
    <div class="recent-posts">
        <h2>Welcome to my Blog!</h2>
        <p>In this blog, I will try to document my progress learning how to create a functional site. Then, I will branch off to making it more aesthetically pleasing (and interesting) with more interactivity if possible. Feel free to tag along this adventure with me!</p>
        <p>In general, I hope to use this blog as a way to learn how to code better and connect with anyone who wants to learn about me in a more intimate manner. As part of this project, I may ramble about my other interests, including film and media, embroidery and painting, and global political issues that I am reading about. Looking forward to exploring this project more! :)</p>
        <h2>Recent Posts</h2>
            <ul>
                {% for post in site.categories['blog'] limit: 5 %}
                     <li>
                        <a href="{{ post.url | relative_url }}">{{ post.title }}</a>
                        <p><small>{{ post.date | date: "%B %d, %Y" }} | {{ post.tags }}</small></p>
                        <p><small>{{ post.summary }}</small></p>
                    </li>
                {% endfor %}
            </ul>
            </div>

<!-- Table of Contents (TOC) -->
<div class="sidebar">
    <h3>Table of Contents</h3>
        <ul>
            {% for post in site.posts limit:10 %}
                <li>
                    <a href="{{ post.url | relative_url }}">{{ post.title }}</a>
                    <p><small>{{ post.date | date: "%B %d, %Y" }}</small></p>
                </li>
            {% endfor %}
        </ul>
</div>
</div>