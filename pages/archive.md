---
layout: main
title: Nancy's Blog
permalink: /archives
---

<div class="content-wrapper">
    <div class="recent-posts">
        <h2>Welcome to the Archives!</h2>
        <p>Here, I document my website development process as well as include features to sift through my existing content through tags that I have curated to organize my website and posts.</p>
        <p>I also keep track of <a href= "{{ '/patch_notes.md' | relative_url }}">dev updates/notes</a> as well as some <a href= "{{ '/dev_ideas.md' | relative_url }}">dev ideas</a> that I want to continually work on. Feel free to peruse them to better understand my process and what I seek to add to my page!</p>
        <h2>Archive Blog Posts</h2>
            <ul>
                {% for post in site.categories['archive'] limit: 5 %}
                     <li>
                        <a href="{{ post.url | relative_url }}">{{ post.title }} </a>
                        <p><small>{{ post.date | date: "%B %d, %Y" }} | {{ post.tags }}</small></p>
                        <p><small>{{ post.summary }}</small></p>
                    </li>
                {% endfor %}
            </ul>
    </div>

<div class="sidebar">
    <h3>Search website content by tag</h3>
<!-- Add search by tag features here? -->
</div>
</div>