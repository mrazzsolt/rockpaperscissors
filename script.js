function displayNextImage() {
    if(x===images.length-1)
    {
        x=0;
    }
    else{
        x++;
    }
    document.getElementById("img").src = images[x];
}
function startTimer() {
    setInterval(displayNextImage, 200);
}
var images = [], x = -1;
images[0] = "rock.jpg";
images[1] = "scissors.png";
images[2] = "paper.png";
function hide() {
    console.log("valami");
    console.log(window.location.search);
    if(window.location.search!="")
    {
    var x = document.getElementById("gep");
      x.style.display = "none";
      setTimeout(showing, 1000);
    }
    else{
        showing();
    }
    
  }
  function showing() {
    console.log("valami");
    
    var x = document.getElementById("gep");
      x.style.display = "block";
      startTimer();
    }
    