function signup() {
  var fname = document.getElementById("fname");
  var lname = document.getElementById("lname");
  var nname = document.getElementById("nname");
  var email = document.getElementById("email");
  var pw = document.getElementById("pw");

  var f = new FormData();

  f.append("f", fname.value);
  f.append("l", lname.value);
  f.append("n", nname.value);
  f.append("e", email.value);
  f.append("p", pw.value);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      var t = r.responseText;

      if (t == "s") {
        alert("user registered successfully!");
        window.location = "index.php";
      } else {
        alert(t);
      }
    }
  };

  r.open("POST", "signupprocess.php", true);

  r.send(f);
}

function gotosignup() {
  window.location = "signup.php";
}

function signin() {

  
  var email = document.getElementById("email");
  var password = document.getElementById("pw");
  

  var f = new FormData();

  f.append("e", email.value);
  f.append("p", password.value);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      var t = r.responseText;
      alert(t);
    }
  };
  r.open("POST", "signinprocess.php", true);
  r.open();
  
}
