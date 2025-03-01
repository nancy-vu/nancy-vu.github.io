---
layout: default
title: Personal Portfolio
permalink: /portfolio/
---

<style>
      * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth; 
        }

        /* Navigation Bar */
        .navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #651693;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between; 
        align-items: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        }

        .navbar a {
            color: lightgray;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 18px;
            transition: 0.3s ease-in-out;
        }

        .navbar a:hover {
            background-color: #8083e6;
            color: white;
            border-radius: 5px;
            font-weight: bolder;
        }

        .nav-left {
        flex: 1; /* Takes up available space on the left */
        }

        .nav-right {
        display: flex;
        justify-content: flex-end; 
        gap: 15px; 
        }

        .home-button {
        color: lightgray;
        text-decoration: none;
        padding: 10px 20px;
        font-size: 18px;
        transition: 0.3s ease-in-out;    
        }

        .home-button:hover {
            background-color: #9b0e0eea;
            color: white;
            border-radius: 5px;
            font-weight: bolder;
            text-decoration: underline;
        }

        /* Portfolio Page Layout */
        .portfolio-container {
            display: flex;
            flex-direction: column;
            align-items: center; 
            justify-content: center;
            min-height: 100vh;
            background-color: #f4f4f4;
            padding: 50px 20px;
        }

        /* Section Styling */
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;  /* Centers everything inside */
            text-align: center;
            width: 80%;
            max-width: 800px;
            background: white;
            padding: 20px;
            margin: 20px 0;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            }

        /* Resume-Specific Container (Left-Aligned) */
        .resume-container {
            align-items: flex-start; 
            text-align: left;
            padding-left: 30px;
            width: 80%;
            max-width: 800px;
            background: white;
            padding: 20px;
            margin: 20px 0;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Profile Image */
        .profile_image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }   

        /* Image Gallery */ 
        .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); /* Responsive grid */
        gap: 10px; /* Space between images */
        margin-top: 20px;
        justify-content: center;
        }

        .gallery img {
            width: 100%;
            height: 150px; /* Adjust height as needed */
            object-fit: cover; /* Ensures images fit nicely */
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .gallery img:hover {
            transform: scale(1.1); /* Zoom effect on hover */
        }

        /* Typography */
        h1 {
            font-size: 24px;
            color: #651693;
            margin-bottom: 10px;
            text-align: center;
        }

        h2 {
            font-size: 20px;
            color: rgb(117, 116, 116);
            font-weight: bolder;
            margin-bottom: 10px;
        }

        /* Paragraph Default */
        p {
            font-size: 16px;
            color: #333;
            line-height: 1.5; 
            max-width: 500px;
        }

</style>
  

  <body>
     <!-- Navigation Bar -->
        <nav>
            <div class="navbar">
                <div class="nav-left">
                    <a href="/" class="home-button">🏠</a>
                </div>
                <div class="nav-right">
                    <a href="#about-me">About Me</a>
                    <a href="#resume">Résumé</a>
                    <a href="#personal-life">Personal Adventures</a>
                    <a href="/blog/">Blog</a>"
                </div>
            </div>  
        </nav>


<div class="portfolio-container">
          <!-- About Me Section -->
          <section id="about-me" class="container">
              <img src="/assets/images/profilepicture.png" class="profile_image">
              <h1>Hi, I'm Nancy Vu!</h1>
              <p>I am a recent graduate from Swarthmore College with a passion for social work and statistics. I aspire to use data for social change and public good.</p>
              <p>I am currently looking for professional experience using my knowledge of SQL, R, and (hopefully) JavaScript for non-profit organizations and local initiatives, rather than staying within the academic realm.</p>
          </section>
  
<!-- Resume Section -->
<section id="resume" class="resume-container">
            <h1>Résumé</h1>
            <h2>Education</h2>
            <p>Swarthmore College</p> 
            <p>B.A. in Political Sociology and Statistics</p>
                <ul>
                    <li>3.87 GPA</li>
                    <li>QuestBridge Scholar</li>
                    <li>Richard Rubin Scholar</li>
                </ul>
            <h2>Work Experience</h2>
            <h2>Skills</h2>
          </section>
  
<!-- Personal Adventures Section -->
<section id="personal-life" class="container">
              <h1>Personal Adventures</h1>
              <p>Here are some places I have visited and some activities I have enjoyed outside of data and statistics!</p>
              <div class="gallery">
              </div>
            </section>
