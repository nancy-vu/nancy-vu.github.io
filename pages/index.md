---
layout: default
title: Home
permalink: /
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
    flex: 1; 
  }

  .nav-right {
    display: flex;
    justify-content: flex-end; 
    align-items: center;
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

  /* Dropdown Menu */
  .dropdown {
    position: relative;
    display: inline-block;
    align-items: center;
  }

  .dropbtn {
    cursor: pointer;
    color: white;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color:rgb(180, 71, 242);
    min-width: 150px;
    box-shadow: 0px 4px 8px rgba(212, 199, 199, 0.2);
    border-radius: 5px;
  }

  .dropdown-content a {
    display: block;
    color: white;
    padding: 10px;
    text-decoration: none;
  }

  .dropdown-content a:hover {
    background-color: #8083e6;
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }

  .home {
    display: flex;
    flex-direction: column;
    align-items: center; 
    justify-content: center;
    min-height: 100vh;
    background-color: #f4f4f4;
    padding: 50px 20px;
  }

  .home img {
    width: 300px;
    height: 300px;
    object-fit: cover;
    margin-bottom: 20px;
  } 

  .home h1 {
    font-size: 24px;
    color: #651693;
  }

  .home p {
    font-size: 18px;
    color: #9b0e0eea;
    max-width: 600px;
    margin: 0;  
    padding: 10px 0;  
    line-height: 1.6;
  }
</style>

<nav>
    <div class="navbar">
        <div class="nav-left">
            <a href="{{ '/' | relative_url }}" class="home-button">🏠</a>
        </div>
        <div class="nav-right">
            <div class="dropdown">
                <a class="dropbtn" href="{{ 'portfolio/' | relative_url }}">Portfolio ▼</a>
                <div class="dropdown-content">
                    <a href="{{ 'portfolio/#about-me' | relative_url }}">About Me</a>
                    <a href="{{ 'portfolio/#resume' | relative_url }}">Résumé</a>
                    <a href=
                    "{{'portfolio/#personal-life' | relative_url }}" >Personal Adventures</a>
                </div>
            </div>
            <a href="{{'/#projects' | relative_url }}">Projects</a>
            <a href="{{'blog/' | relative_url}}" >Blog</a>
        </div>
    </div>
</nav>

<!-- Home Section -->
<div class="home">
    <img src="https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExYmZ5ZzJ1YzBycGl0bDM5Mnc1bDJqMzM1Z2V5N2Z2MHA3Y3M0NzRkOSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/SSirUu2TrV65ymCi4J/giphy.gif">
    <h1>Welcome to the Personal Widgets site!</h1>
    <p>On this site, I will try to create a few online tools for myself to utilize and learn more about HTML, CSS, and JS in the process.</p>
    <p>I hope to expand on this practice by making simple apps in the future, including possible tools to make decisions by choice *AND* chance!</p>
</div>
