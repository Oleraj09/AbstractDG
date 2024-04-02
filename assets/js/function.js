// -----------------------Modal--------------------
var porject1 = document.getElementById("project1");
var project2 = document.getElementById("project2");
var btn1 = document.getElementById("myBtn1");
var btn2 = document.getElementById("myBtn2");
var close1 = document.getElementById("close1");
var close2 = document.getElementById("close2");
var loopButtons1 = document.getElementById("loop1");
var loopButtons2 = document.getElementById("loop2");

btn1.onclick = function () {
  project1.style.display = "block";
}

btn2.onclick = function () {
  project2.style.display = "block";
}

close1.onclick = function () {
  porject1.style.display = "none";
}

close2.onclick = function () {
  project2.style.display = "none";
}

loopButtons1.onclick = function () {
  const childElement = document.getElementById('loop1');
  const parentElement = childElement.closest('.modal').id;
  console.log(parentElement)
  if (parentElement == "project1") {
    project1.style.display = "none";
    project2.style.display = "block";
  } else {
    project2.style.display = "none";
    project1.style.display = "block";
  }
}

loopButtons2.onclick = function () {
  const childElement = document.getElementById('loop2');
  const parentElement = childElement.closest('.modal').id;
  console.log(parentElement)
  if (parentElement == "project1") {
    project1.style.display = "none";
    project2.style.display = "block";
  } else {
    project2.style.display = "none";
    project1.style.display = "block";
  }
}

// ---------------Scroll to top----------------------
let mybutton = document.getElementById("goto");
window.onscroll = function () {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
};

function goto() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}



















