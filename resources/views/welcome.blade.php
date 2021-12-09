<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
  /*Stern bedeutet: gilt für alle Elemente*/
* {
  margin: 0;
}

body {
  color: white;
  background-color: #2b2b5f;
  font-family: Arial, sans-serif;
  line-height: 2;
}

img {
  width: 100%;
}

h1,
h2 {
  font-weight: normal;
}

h1,
h2,
p {
  letter-spacing: 1px;
}

section {
  background-color: #2b2b5f;
  padding: 75px 30px;
  border-top: 1px dashed #ff8bc5;
}

section h2 {
  margin-bottom: 20px;
}

header {
  background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRejNi9X0qIVSpgerDuJgymdj80QUKh6Vo9Tom2l52kGGMQnZdA9-Q3E0tx76-92nPIhUE&usqp=CAU);
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  background-repeat: no-repeat;
  overflow: hidden;
  height: 100vh;
  position: relative;
  z-index: 1;
}

.header_text {
  text-align: center;
  color: #3a3a9d;

  height: 100%;
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;

  padding: 30px;
}

.header_text p {
  font-size: 1em;
  margin-bottom: 50px;
}

.header_text h1 {
  line-height: 1.5;
}

#header_button {
  padding: 25px;
  background-color: #3a3a9d;
  border-radius: 10px;
  text-decoration: none;
  color: white;
  font-weight: bold;
  font-size: 0.8em;
  transition: padding 0.5s;
}

#header_button:hover {
  padding: 30px;
}

#main_menu {
  position: fixed;
  z-index: 999;
  top: 0;
  left: 0;
  padding: 0;
  width: 100%;
  background-color: #2b2b5f;
  display: flex;
  list-style-type: none;
}

.menu_link {
  color: white;
  display: block;
  padding: 10px;
  line-height: 10px;
  text-decoration: none;
  font-size: 0.65em;
}

#angebote {
  border-top: 1px dashed #84c3ff;
}

#angebote h2 {
  color: #84c3ff;
}

.flex_list {
  padding: 0;
  list-style-type: none;
}

.flex_list li {
  border-radius: 5px;
  padding: 20px;
  border: 1px solid #84c3ff;
  margin-bottom: 10px;
}

.flex_list li:hover {
  color: white;
  background-color: #84c3ff;
  border: 1px solid #84c3ff;
}

#gallerie {
  color: white;
}

#gallerie h2 {
  color: #ff8bc5;
}

footer {
  padding: 25px;
  text-align: center;
  border-top: 1px dashed #ff8bc5;
}

.box {
  position: relative;
}

.grid_container {
  margin-top: 20px;
}

@media screen and (min-width: 500px) {
  #main_menu {
    background: linear-gradient(
      to right,
      rgba(43, 43, 95, 1) 0%,
      rgba(43, 43, 95, 1) 50%,
      rgba(43, 43, 95, 0) 100%
    );
  }
}

@media screen and (min-width: 660px) {
  section {
    background-color: #2b2b5f;
    padding: 75px;
    border-top: 1px dashed #ff8bc5;
  }

  .header_text h1 {
    font-size: 3em;
  }

  p {
    font-size: 1.25em;
  }

  #header_button {
    font-size: 1em;
  }

  .flex_container {
    display: flex;
  }

  .flex_item {
    margin-right: 10px;
  }

  .grid_container {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
    grid-gap: 10px;
    line-height: 0;
  }

  .grid_item {
    grid-column: span 6;
  }
}

@media screen and (min-width: 900px) {
  .grid_item {
    grid-column: span 4;
  }
}

@media screen and (min-width: 1200px) {
  .grid_container {
    width: 80%;
    margin: 20px auto 0 auto;
  }
}

  </style>
</head>
<body>

  <ul id="main_menu">
  <li><a href="{{ route('admin.login') }}" class="menu_link">Login</a></li>
  
</ul>

<header id="home">
  <div class="header_text">
    <h1>Entitle</h1>
    <p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
      <p>

        <a id="header_button" href="{{ route('admin.dashboard') }}">Go to admin</a>
  </div>
</header>

<section id="intro">
  <h2>Privacy & Policy</h2>
  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
    sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
    Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>

</section>

<section id="angebote">
  <h2>Working Procedure</h2>

  <ul class="flex_container flex_list">
    <li class="flex_item">Lorem ipsum</li>
    <li class="flex_item">Lorem ipsum</li>
    <li class="flex_item">Lorem ipsum</li>
    <li class="flex_item">Lorem ipsum</li>
  </ul>
</section>

<section id="gallerie">

  <h2>Withdraw Process</h2>
  <p>Klicken Sie auf ein Bild, um mehr zu erfahren.</p>

  <div class="grid_container">

    <div class="box grid_item">
      <img src="https://picsum.photos/300/300">

    </div>

    <div class="box grid_item">
      <img src="https://picsum.photos/300/300">

    </div>

    <div class="box grid_item">
      <img src="https://picsum.photos/300/300">

    </div>

    <div class="box grid_item">
      <img src="https://picsum.photos/300/300">

    </div>

    <div class="box grid_item">
      <img src="https://picsum.photos/300/300">

    </div>

    <div class="box grid_item">
      <img src="https://picsum.photos/300/300">

    </div>
  </div>

</section>

<footer id="kontakt">
  <h2>Mission & Vission!</h2>
  <p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
</footer>

</body>
</html>