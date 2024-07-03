<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<h1><span class="blue">&lt;</span>Table<span class="blue">&gt;</span> <span class="yellow">Responsive</pan></h1>
<h2>Created with love by <a href="https://github.com/pablorgarcia" target="_blank">HATIM MUSTAFA</a></h2>

<table class="container">
	<thead>
		<tr>
            <th><h1>FILE NAME</h1></th>
			<th><h1>FILE</h1></th>
			<th><h1><b>DATA ENTRY</h1></th>
			
			
		</tr>
	</thead>
	<tbody>
		<tr>
			<td >Cozmo</td>
			<td style="display:flex; justify-content:center;"><img src="./img.jfif"></td>
			<td>11100001</td>
			
		</tr>
			
	</tbody>
</table>

<div>

<form >

<input type="file" name="IMG">
<input type="submit" value="UPLOAD IMG" name="UPLOAD">
</form>

</div>

<style>





* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color: #A7A1AE;
  background-color: #1F2739;
}

h1, h2 {
  font-weight: 300;
  line-height: 1em;
  text-align: center;
  margin-bottom: 20px;
}

h1 {
  font-size: 3em;
  color: #4DC3FA;
}

h2 {
  font-size: 1em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue {
  color: #185875;
}

.yellow {
  color: #FFF842;
}

/* Table Styles */

.container {
  text-align: left;
  overflow: hidden;
  width: 80%;
  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container th, .container td {
  padding-bottom: 2%;
  padding-top: 2%;
  padding-left: 2%;
}

.container th {
  background-color: #1F2739;
  font-weight: bold;
  font-size: 1em;
  color: #185875;
}

.container td {
  font-weight: normal;
  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
  -moz-box-shadow: 0 2px 2px -2px #0E1119;
  box-shadow: 0 2px 2px -2px #0E1119;
}

.container tr:nth-child(odd) {
  background-color: #323C50;
}

.container tr:nth-child(even) {
  background-color: #2C3446;
}

.container tr:hover {
  background-color: #464A52;
  -webkit-box-shadow: 0 6px 6px -6px #0E1119;
  -moz-box-shadow: 0 6px 6px -6px #0E1119;
  box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  transition-delay: 0s;
  transition-duration: 0.4s;
  transition-property: all;
  transition-timing-function: line;
}

/* Form Styles */

form {
  max-width: 300px;
  margin: 40px auto;
  padding: 20px;
  background-color: #f9f9f9;
  border: 1px solid #ccc;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

input[type="file"] {
  display: block;
  margin: 20px 0;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

/* Media Queries */

@media (max-width: 800px) {
  .container td:nth-child(4),
  .container th:nth-child(4) {
    display: none;
  }
}
</style>


</body>
</html>