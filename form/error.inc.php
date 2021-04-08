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
  height: 100px;
  text-align: right;
  background: #ceeae8;
  padding: 20px 20px;
}

nav ul li {
  display: inline;
}

nav a {
  text-decoration: none;
  color: #231f20;
  font-family: 'Poppins', sans-serif;
  margin: 5px;
  padding: 5px;
}

nav a:hover {
  color: #233f99;
  transition: .3s;
}

.container {
  max-width: 900px;
  margin: 50px auto 180px;
  text-align: center;
  font-family: 'Open Sans Regular', sans-serif;
}

li:hover {
  background: white;
  transition: .3s;
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
</div>
