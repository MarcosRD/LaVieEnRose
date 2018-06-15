<?php

class BD {
   
}
 function menu(){
        return '<div class="navbar transparent navbar-inverse navbar-fixed-top">
            <nav class="navbar-inner">
            <div id="menu" class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="imagenes/logo3.png"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul id="men" class="nav navbar-nav">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="ocasiones.php">Ocaciones</a></li>
                        <li><a href="#">Flores</a></li> 
                        <li><a href="#">Galeria</a></li> 
                    </ul>
                    <form id="bus" class="navbar-form navbar-left" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
                </div>
            </div>
            </nav>
        </div>';
    }
