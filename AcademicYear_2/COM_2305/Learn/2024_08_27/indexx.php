<!DOCTYPE html>
<html>
<head>
<style>
.item1 { grid-area: header; }
.item3 { grid-area: main; }
.item5 { grid-area: footer; }

.grid-container {
  display: grid;
  grid-template-areas:
    'header header header header header header'
    'main main main main main main'
    'footer footer footer footer footer footer';
  gap: 0px;
  background-color: #80cbc4;
  padding: 0px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 0px 0;
  font-size: 20px;
}
</style>
</head>
<body>

<h1>Grid Layout</h1>


<div class="grid-container">
    <div class="item1">
        <?php
          include("menu.php")
        ?>
    </div>

    <div class="item3">
        U:admin P:4545
    </div> 

    <div class="item5">
        email:pacharapon@gmai.com
    </div>

</div>

</body>
</html>


