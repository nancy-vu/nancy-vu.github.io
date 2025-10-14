---
layout: main
title: About Me
permalink: /about/
---

<style>
     
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

<div class="portfolio-container">
          <!-- About Me Section -->
          <section id="summary" class="container">
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
                <ul>
                    <li>General: <i>applied mathematics, statistical analysis, creative and policy writing, data cleaning, data querying, data reporting and visualization, copy editing, website management, Canva, SquareSpace, MailChimp</i></li> 
                    <li>Programming: <i>R, SQL, HTML/CSS, some JS and Python</i></li>
                    <li>Applications: <i>Atlas.ti, Trint, Zotero, Git/GitHub, Google Workspace, Microsoft Excel, Microsoft Office</i></li>
                    <li>Language: <i>Fluent in English and Vietnamese, Limited working proficiency in Spanish</i></li> 
                </ul>
          </section>
  
<!-- Personal Adventures Section -->
<section id="personal-life" class="container">
              <h1>Personal Adventures</h1>
              <p>Here are some places I have visited and some activities I have enjoyed outside of data and statistics!</p>
              <div class="gallery">
              </div>
            </section>
