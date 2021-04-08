<style>
* {
  margin: 0;
  padding: 0;
  border: 0;
  box-sizing: border-box;
}

body {
	background-color: #ebeded;
}
header {
  height: 140px;
  text-align: right;
  background: #ceeae8;
  top: 0;
  width: 100%;
}

nav ul li {
  display: inline;
}

nav a {
  font-family: 'Poppins', sans-serif;
  text-decoration: none;
  font-size: 25px;
  color: #231f20;
  margin: 5px;
  padding: 5px;
}

header nav {
  position: absolute;
  right: 30px;
  Top: 20px;
  width: 60%;
}

header nav li {
  display: inline-block;
  margin: 35px 15px;
}

nav a:hover {
  color: #a0a585;
  transition: .3s;
}
.container {
  max-width: 900px;
  margin: 50px auto 180px;
  text-align: center;
  font-family: 'Open Sans Regular', sans-serif;
}

.logo {
  text-align: center;
}
</style>

<header>
  <nav>
    <ul>
      <li ><a href="index.html">Home</a></li>
      <li ><a href="portfolio.html">Portfolio</a></li>
      <li ><a href="about.html">About</a></li>
      <li ><a href="contact.html">Contact</a></li>
    </ul>
  </nav>
</header>


<div class="container">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
  <img class="logo" src="images/bmdlogo.png" alt="Logo" />
</div>
