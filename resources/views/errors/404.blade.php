<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	@import "lesshat";
@import url(https://fonts.googleapis.com/css?family=Roboto);
html {
  background:  url(https://38.media.tumblr.com/546c0cd48d71f210f9b67a389003790d/tumblr_neq0yw9rMA1tm16jjo1_500.gif) no-repeat center center fixed;
  background-size: cover;
	font-family: 'Roboto', sans-serif;

}
h1{
  font-size: 14em;
  margin: .2em .5em;
  color: rgba(255,255,255, 0.7);
  margin-bottom:0px;
}
h2{
  font-size: 1.7em;
  margin: .2em .5em;
  color: rgba(255,255,255, 0.6);
}
a{
  font-size: 1.7em;
  margin: .2em .5em;
  color: rgba(255,255,255, 0.6);
  padding: 3em;
}
div.error{
  position:absolute;
  top:30%;
  margin-top:-8em;
  width:100%;
  text-align:center;
}

</style>
<body>
<div class="error">
  <h1>Error 404 </h1>
  <h2>La pagina que buscas no existe</h2>
  <h2><a href="{{ route('inicio') }}">Volver</a></h2>
</div>

</body>
</html>