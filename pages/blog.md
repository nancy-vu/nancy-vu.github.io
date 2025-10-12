---
layout: main
title: Nancy's Blog
permalink: /blog/
---

<div class="content-wrapper">
    <div class="recent-posts">
        <h2>Welcome to my Blog!</h2>
        <p>In this blog, I share my reflections on my life experiences and how I ground myself in my relationships with others and with the natural world. I also seek to share related discussions and resources to engage in productive discourse for meaningful change for the disenfranchised in the United States and internationally.</p>
        <p>All my posts are reflections of my own opinions and limited knowledge. Should I misrepresent anything, I am open to criticism and accountability to continue learning and improving every day. Feel free to contact me by <a href="mailto:nancyvu2002@gmail.com">email</a> to send in thoughts and corrections!</p>
        <h2>Recent Posts</h2>
            <ul>
                {% for post in site.categories['blog'] limit: 5 %}
                     <li>
                        <a href="{{ post.url | relative_url }}">{{ post.title }} </a>
                        <p><small>{{ post.date | date: "%B %d, %Y" }} | {{ post.tags }}</small></p>
                        <p><small>{{ post.summary }}</small></p>
                    </li>
                {% endfor %}
            </ul>
    </div>

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