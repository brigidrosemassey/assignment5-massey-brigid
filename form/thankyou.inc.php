<style>
* {
  margin: 0;
  padding: 0;
  border: 0;
  box-sizing: border-box;
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
  height: 900px;
  margin: 50px auto 180px;
  text-align: center;
  font-family: 'Open Sans Regular', sans-serif;
}

.logo {
  text-align: center;
}

footer {
  font-family: 'Poppins', sans-serif;
  background: #a0a5a5;
  color: #231f20;
  text-align: center;
  padding: 50px 0;
  height: 200px;
}
 footer a{
   color: white;
   font-size: 25px;
   margin: 0 5px;
   transition: .3s;
 }
 .website {
   margin-bottom: 8px;
 }
 footer a:hover {
   color: #ceeae8;
   transition: .3s;
 }

 .follow {
   margin-bottom: 4px;
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
  <h1>Thank you for your enquiry</h1>
  <p>Thanks for your interest. We have received your message, and we will be in touch shortly.</p>
  <img class="logo" src="images/bmdlogo.png" alt="Logo" />
</div>

<footer>
   <p class="website">Website by Brigid Massey</p>
</footer>
