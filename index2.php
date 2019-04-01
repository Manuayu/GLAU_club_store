<?php


    session_start();
   echo " <h2><b><i>Welcome : ".$_SESSION['newUsername']."</i></b></h1>";
   
?>
<html>
<head>
 <link rel="stylesheet" href="style2.css">   
     
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

.custom-select {
  position:relative;
  font-family:sans-serif;
   top: -70px;
    left: 390px;
    }

.custom-select select {
  display:none; 
}

.select-selected {
  background-color:cornflowerblue;
}

.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}


.select-items {
  position: absolute;
  background-color:cornflowerblue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}


.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
    img:hover {
       cursor: pointer;
   }
   input[type=submit] {
       display: none;
   }

</style>

</head>     
    
    
    
    
<body>    
     
    <nav class="menu">
    <ul>
       <li><a href="#">HOME</a></li>
        <li><a href="#">EVENTS</a></li>
         <li><a href="feedback.html">FEEDBACK</a></li>
        <li><a href="#">ABOUT</a></li>
         <li><a href="#">CONTACT</a></li>
          <li> <a href="index.html">LOGOUT</a></li>
       
    </ul>
        <form class="search-form">
        <input type="text" placeholder="Search ">
        <button>Search</button>    
        </form>
        
        
    </nav>    
    
    
    <div class="slider">
     <figure>
       <div class="slide">
          <img src="iot1.jpg" alt="">
       </div>
        <div class="slide">
          <img src="s1.jpg" alt="">
       </div>
     <div class="slide">
          <img src="s2.jpg" alt="">
       </div>
     
     <div class="slide">
          <img src="satrangal.jpg" alt="">
       </div>
      <div class="slide">
          <img src="natraj.jpg" alt="">
       </div>
    
    
</figure>
    </div>
    <br>
    <h1><p> CHOOSE YOUR CLUB  : </p></h1>
    <div class="custom-select" style="width:200px;">
        
    <select >
    <option value="0">SELECT CLUB </option>
    <option value="1">IOT</option>
    <option value="2">DRISHTI</option>
    <option value="3">LITERARIO</option>
    <option value="4">GLOUD</option>
    <option value="5">FINE ARTS</option>
    <option value="6">POETRY</option>
    <option value="7">NINAD</option>
    <option value="8">CODEBUSTERS</option>
    <option value="9">SATRANGLE</option>
    <option value="11">PRASTUTI</option>
     <option value="12">SOCIAL CLUB : UNNATI</option>
         <option value="13">QUIZ CLUB: MIND BLOGGERS</option>
         <option value="14"> MATH'S CLUB </option>
         <option value="15">CHeMgLA: CHEMISTRY CLUB </option>
         <option value="16">SCIENCE CLUB  </option>
                 <option value="17">DROID</option>
          <option value="18">SOFTWARE CLUB : CODE-E-PHOBIA </option>

    <option value="19">HARDWARE CLUB: GIZMO  </option>
    
    </select>
    
        
</div>  
<label for="img">
   <input type="submit" name="submit" id="img" value="img-btn">
   <img src="submit.png" id="img">
</label>
<script>
var x, i, j, selElmnt, a, b, c;

x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
document.addEventListener("click", closeAllSelect);
</script>
    
    

    </body>
</html>