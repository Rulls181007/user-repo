<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Button Ripple Effect | CodingLab </title> 
    <link rel="stylesheet" href="style.css">
   </head>
<body>
  <div class="buttons">
    <a class="button"href="#">Button</a>
    <a class="button two" href="#">Button</a>
  </div>
  <script>
  // Ripple Effect JavaScript Code
  let buttons = document.querySelectorAll(".button");
  for (var i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("click", (e)=>{
      e.preventDefault(); // preventing form submitting
      let overlay = document.createElement('span'); //creating a tag(span)
      overlay.classList.add("overlay"); //adding a class inside the span
      e.target.appendChild(overlay); //adding overlay tag inside the anchor tag at in HTML
      let xValue = e.clientX - e.target.offsetLeft; //by this we get perfect value where we will click
      let yValue = e.clientY - e.target.offsetTop; //by this we get perfect value where we will click
       overlay.style.left = xValue + "px"; //changing the position of the overlay according to our clicks on the button
       overlay.style.top = yValue + "px"; //changing the position of the overlay according to our clicks on the button
  });
  }
  </script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
body{
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #350048;
}
.buttons .button{
  position: relative;
  display: inline-block;
  color: #fff;
  padding: 12px 38px;
  background: linear-gradient(90deg, #6616d0, #ac34e7);
  border-radius: 45px;
  margin: 10px;
  font-size: 30px;
  font-weight: 400;
  text-decoration: none;
  box-shadow: 3px 5px rgba(0, 0, 0, 0.1);
  border-top: 1px solid rgba(0,0,0,0.1);
  overflow: hidden;
}
.buttons .button.two{
  background: linear-gradient(90deg, #025ce3, #4e94fd);
}
.buttons .button .overlay{
  position: absolute;
  background: #fff;
  top: 0;
  left: 0;
  transform: translate(-50%,-50%);
  border-radius: 50%;
  animation: blink 0.5s linear;
}
@keyframes blink {
  0%{
    height: 0px;
    width: 0px;
    opacity: 0.3;
  }
  100%{
    height: 400px;
    width: 400px;
    opacity: 0;
  }
}
</style>
</body>
</html>