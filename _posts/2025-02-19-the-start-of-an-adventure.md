---
layout: post
title: "The Start of an Adventure"
date: 2025-02-19
summary: "For my first day of creating this blog, I set up Jekyll on my computer in order to create a list of recent posts. Then, I plan on writing Markdown and HTML files in order to stylize the individual blog posts and my blog page overall. In the process, I need to do file clean up between my existing repository and the new organization to work with Jekyll."
categories: blog
tags: project
---

Today, I spent most of my day setting up Jekyll on my Mac and familiarizing myself with its uses and setup since I have not manually created a blog and its individual blog posts before. Usually, I have used SquareSpace to post any online materials. I am excited to learn to do these things from scratch, and I am especially excited to write in Markdown files more. In my opinion, I find Markdown files more intuitive and nice to write for blogging. This might just be my bias because my first programming language was R (not sure I did too much programming back then though.. mostly packages other people have already designed since I mostly used it to do statistical tests and generate sample experiments). I am still figuring out how I will incorporate a mix of HTML/Markdown, but I think I will figure that out but figuring out what each is better used for on my site. For now, I am thinking of converting most of my connections between blog main page to blog posts as Markdown files. Perhaps I will write the layout templates in HTML (and then convert them to Markdown files once I get all the stylizations right?). If I create large stylizations in HTML, I may create a few style sheets and leave them in my layouts folder. After creating my templates, I also need to clean up my file organization because I initially created this site to create a personal portfolio and add other widgets I might want to access and show as part of my "portfolio" (more hands-on materials and references of my work... part of this is creating a more active GitHub profile and showcasing my other interests outside of research and academics). I only recently merged my GitHub page with Jekyll and this has automatically re-sorted some of my files in a somewhat confusing/redundant way. I hope the clean up won't cause any issues, but I'll be sure to keep back ups just in case! 


I will likely revisit my initial blog posts to clean up the way my paragraphs are spaced and such. A general reference I am referring to for GitHub is the following [link](https://docs.github.com/en/get-started/writing-on-github/getting-started-with-writing-and-formatting-on-github/basic-writing-and-formatting-syntax).


### Jekyll Set-up Process (for me at least...)

When I was setting up my Jekyll, I installed Homebrew through my terminal using the line: /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)". 

Using Homebrew, I installed Ruby (brew install ruby). Though Ruby is usually already installed on Mac, it was an older version so I wanted to update it. Then, I set the new Ruby on my path so that it is clear which version I wanted to work on. 

... more details tbd

#### To-Do List 

- [x] Write first two blog posts (or templates) and see how they appear on the main site. **(High Priority!!)**
- [x] Create four layout files. One for the main homepage, one for blog homepage, one for portfolio, and one for the blog posts. (Unless I should be stylizing the homepage in some other way.. will continue thinking!) **(High Priority!!)**
- [x] Clean up my files and remove duplicates.  **(Medium Priority)**
- [ ] Review typesetting / LaTex integration rules. **(Medium-Low Priority)** 
- [ ] Clean up my code so it is more readable.. add comments and remove inefficient lines.  **(Last task -- "low" priority)**