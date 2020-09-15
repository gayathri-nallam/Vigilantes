<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8" />
    <link
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dictionay</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
      body {
        background-image: url("img/final.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100vw 100vh;
        box-sizing: border-box;
        z-index: -1;
      }
      span,a{
          color:#fff;
      }
      .main {
        padding: 0;
      }
      form input {
        border-radius: 10px;
        height: 6vh;
        z-index: 1;

        width: 30vw;
        text-align: center;
        background-color: rgb(247, 247, 241);
        border: 1px solid rgb(156, 112, 156);
        font-size: large;
        color: rgb(44, 44, 44);
      }
      .container {
      
        padding: 0;
        display: flex;
        flex-direction: row;
        align-items: center;
        margin: 0 50% 5% 30%;
      }
      button {
        background-color: rgb(247, 247, 241);
        border-radius: 10px;
        border: 1px solid rgb(156, 112, 156);
        height: 6vh;
        padding: 0 5%;
      }
      .goog-logo-link {
        display: none !important;
      }

      .goog-te-gadget {
        color: transparent !important;
      }
      #google_translate_element {
        margin: 10% 50% 1% 40%;
      }

      .a h1 {
        color: rgb(125, 245, 225);
        text-shadow: 2px 2px rgb(20, 30, 170);

        margin-left: 41%;
      }
      .b h1 {
        color: rgb(14, 240, 221);
        margin-left: 38%;
        text-shadow: 2px 2px rgb(20, 30, 170);
      }
      .a {
        width: 100%;
      }
      #meaninglist li {
        font-size: 1rem;
        color: black;
      }
      .c,
      #e {
        margin: 2% 20%;
        border-radius: 4px;
        padding: 1%;
      }
      @media only screen and (max-width: 708px){
          #google_translate_element{
              margin: 5% 35%;
          }form input{
              width:250px;
           
         
          }.container{
              margin-left : 20%;
          }.a h1{
              margin-left:35%;
          }.b h1{
              margin-left: 30%;
          }
      }
    </style>
   
  </head>
  
  <body>
      
      <div class="collapse navbar-collapse" id="myNavbar">
                  <div> 
          <ul class="nav navbar-nav navbar-left">
                        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
<li><a href="aboutus.php"><span class="glyphicon glyphicon-info-sign"></span>About us</a></li>
<li><a href="useracc.php"><span class="glyphicon glyphicon-dashboard"></span>User account</a></li>
<li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span>settings</a></li>
<li><a href="terms&cond.php"><span class="glyphicon glyphicon-folder-close"></span>Terms & conditions</a></li>
<li><a href="help.php"><span class="glyphicon glyphicon-question-sign"></span>Help</a></li>
</div>
                  </div>
               
    <div class="main">
      <div id="google_translate_element"></div>
      <div class="container">
        <form>
          <input
            type="text"
            id="usertext"
            onclick="clicks()"
            placeholder="Enter a word here"
          />
        </form>
        <button onclick="cal()"><i class="fa fa-search fa-2x"></i></button>
        
      </div>
      <div class="a" id="a">
        <h1 style="color: rgb(84, 236, 236);" class="notranslate">Meaning</h1>
        <div id="c" class="c"><ul id="meaninglist"></ul></div>
      </div>
      <div class="b" id="b">
        <h1 class="notranslate">PartsOfSpeech</h1>
        <div id="d" class="c"><ul id="parts"></ul></div>
      </div>
    </div>

    <script type="text/javascript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement(
          { pageLanguage: "en" },
          "google_translate_element"
        );
      }
    </script>
        <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 <script
      type="text/javascript"
      src="fuzzyset.js-master/lib/fuzzyset.js"
    ></script>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=P2zgTKSP"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        
      var co = 0;
     
    
      function clicks() {
        co += 1;
        if (co > 1) {
          document.getElementById("usertext").value = "";
        }
      }
      async function cal() {
        found = false;
        a = document.getElementById("usertext").value;
        parts = document.getElementById("parts");
        items = document.getElementById("meaninglist");
        a = a.toString();
        items.innerHTML = "";
        parts.innerHTML = "";
        $.get("data/data.json", function (data, status) {
          diki = data;
          
        
          mean();
        });
      }
      function mean() {
      
        box = document.getElementById("c");
        box.style.backgroundImage =
          "linear-gradient(to bottom, rgb(248, 248, 53), white)";
        if (a in diki) {
          for (let i = 0; i < diki[a].length; i++) {
            console.log(diki[a][i]);
            console.log("working");
            list = document.createElement("li");
            t = document.createTextNode(diki[a][i]);
            list.appendChild(t);
           

            items.appendChild(list);
          }
          partsofspch(a);
        } else {
          fs = FuzzySet();
          Object.keys(diki).forEach(function (ele) {
            fs.add(ele);
          });
          word = fs.get(a);
          console.log(word);
          word = word[0][1];
         
          for (let i = 0; i < diki[word].length; i++) {
            list = document.createElement("li");
            t = document.createTextNode(diki[word][i]);
            list.appendChild(t);

            items.appendChild(list);
          }
          partsofspch(word);
        }
      }
      async function partsofspch(user) {
       
        parts.innerHTML = "";
        another = document.getElementById("d");
        another.style.backgroundImage = "";

        await $.get("data/words.json", function (data, status) {
          partsofspeech = data;
        });
        partsofspeech.forEach(function (ele) {
          if (ele["word"] == user) {
            found = true;
            another = document.getElementById("d");
            another.style.backgroundImage =
              "linear-gradient(to bottom, rgb(248, 248, 53), white)";
            for (var i = 0; i < ele["partOfSpeech"].length; i++) {
              console.log(ele["partOfSpeech"][i]);
              list = document.createElement("li");
              t = document.createTextNode(ele["partOfSpeech"][i]);
              list.appendChild(t);

              parts.appendChild(list);
            }
          }
        });
        if(!found){
          another = document.getElementById("d");
          another.style.backgroundImage =
            "linear-gradient(to bottom, rgb(248, 248, 53), white)";
          list = document.createElement('li');
          t = document.createTextNode('noun');
          list.appendChild(t);
          parts.appendChild(list);
        }
      }
    </script>
    <?php include 'footer.php'; ?>
  </body>
</html>