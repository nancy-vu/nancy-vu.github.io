---
layout: project
title: Projects
permalink: /projects/
---

<div class="content-wrapper">
    <div class="recent-posts">
        <h2>Welcome to my Projects page!</h2>
        <p>On this page, you can peruse some of the projects I have completed as well as those I am currently working on in my life. I will organize them by their subjects (e.g. academic projects from university, personal projects, community projects, etc.)</p>
        <p>I hope that, through these projects, I may share my passion with others and invite folks into the space to collaborate with me toward a reimagined future for all people, irrespective of their social, economic, spiritual, and political background (e.g. class, race, religion, status, gender, sexuality, and the list goes on).</p>
        <h2>All My Projects</h2>
            <ul>
                {% for post in site.categories['projects'] %}
                     <li>
                        <a href="{{ post.url | relative_url }}">{{ post.title }}</a>
                        <p><small>{{ post.date | date: "%B %d, %Y" }} </small></p>
                        <p><small>{{ post.summary }}</small></p>
                    </li>
                {% endfor %}
            </ul>
    </div>

<div class="sidebar">
    <h3> Current Projects </h3>
        <ul>
            {% for post in site.tags['current'] %}
                <li>
                    <a href="{{ post.url | relative_url }}">{{ post.title }}</a>
                    <p><small>{{ post.date | date: "%B %d, %Y" }}</small></p>
                </li>
            {% endfor %}
        </ul>
    <h3> Completed Projects </h3>
        <ul>
            {% for post in site.tags['completed'] %}
                <li>
                    <a href="{{ post.url | relative_url }}">{{ post.title }}</a>
                    <p><small>{{ post.date | date: "%B %d, %Y" }}</small></p>
                </li>
            {% endfor %}
        </ul>
</div>
</div>

{% include page_buttons.html %}
