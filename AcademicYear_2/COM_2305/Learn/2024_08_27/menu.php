<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="../2024_08_27/indexx.php">Home</a></li>
  <li><a href="#news.php">ข่าวประชาสัมพันธ์</a></li>
  <li><a href="#activity.php">กิจกรรม</a></li>
  <li style="float:right"><a href="../2024_08_20/form_login.php">Login</a></li>
</ul>

</body>
</html>
