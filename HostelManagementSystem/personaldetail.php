<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
body {
  margin: auto;
  background: #eaeaea;  
  font-family: 'Open Sans', sans-serif;
}

.info p {
  text-align:center;
  color: #999;
  text-transform:none;
  font-weight:600;
  font-size:15px;
  margin-top:2px
}

.info i {
  color:#F6AA93;
}
form h1 {
  font-size: 18px;
  background: #F6AA93 none repeat scroll 0% 0%;
  color: rgb(255, 255, 255);
  padding: 22px 25px;
  border-radius: 5px 5px 0px 0px;
  margin: auto;
  text-shadow: none; 
  text-align:left
}

form {
  border-radius: 5px;
  max-width:700px;
  width:100%;
  margin: 5% auto;
  background-color: #FFFFFF;
  overflow: hidden;
}

p span {
  color: #F00;
}

p {
  margin: 0px;
  font-weight: 500;
  line-height: 2;
  color:#333;
}

h1 {
  text-align:center; 
  color: #666;
  text-shadow: 1px 1px 0px #FFF;
  margin:50px 0px 0px 0px
}

input {
  border-radius: 0px 5px 5px 0px;
  border: 1px solid #eee;
  margin-bottom: 15px;
  width: 75%;
  height: 40px;
  float: left;
  padding: 0px 15px;
}

a {
  text-decoration:inherit
}

textarea {
  border-radius: 0px 5px 5px 0px;
  border: 1px solid #EEE;
  margin: 0;
  width: 75%;
  height: 130px; 
  float: left;
  padding: 0px 15px;
}

.form-group {
  overflow: hidden;
  clear: both;
}

.icon-case {
  width: 35px;
  float: left;
  border-radius: 5px 0px 0px 5px;
  background:#eeeeee;
  height:42px;
  position: relative;
  text-align: center;
  line-height:40px;
}

i {
  color:#555;
}

.contentform {
  padding: 40px 30px;
}

.bouton-contact{
  background-color: #81BDA4;
  color: #FFF;
  text-align: center;
  width: 100%;
  border:0;
  padding: 17px 25px;
  border-radius: 0px 0px 5px 5px;
  cursor: pointer;
  margin-top: 40px;
  font-size: 18px;
}

.leftcontact {
  width:49.5%; 
  float:left;
  border-right: 1px dotted #CCC;
  box-sizing: border-box;
  padding: 0px 15px 0px 0px;
}

.rightcontact {
  width:49.5%;
  float:right;
  box-sizing: border-box;
  padding: 0px 0px 0px 15px;
}

.validation {
  display:none;
  margin: 0 0 10px;
  font-weight:400;
  font-size:13px;
  color: #DE5959;
}

#sendmessage {
  border:1px solid #fff;
  display:none;
  text-align:center;
  margin:10px 0;
  font-weight:600;
  margin-bottom:30px;
  background-color: #EBF6E0;
  color: #5F9025;
  border: 1px solid #B3DC82;
  padding: 13px 40px 13px 18px;
  border-radius: 3px;
  box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.03);
}

#sendmessage.show,.show  {
  display:block;
}
</head>
</style>
<body>
    <h1>PERSONAL DETAILS</h1>
  
  
  <form>
      <h1>Please Fill Your all Personal Details Before Login:</h1>
      
    <div class="contentform">
      <div id="sendmessage"> Your message has been sent successfully. Thank you. </div>

       <div class="leftcontact">
            <div class="form-group">
              <p>Student Id<span>*</span></p>
              <span class="icon-case"><i class="fa fa-male"></i></span>
                <input type="integer" name="id" id="id" data-rule="required" data-msg="V??rifiez votre saisie sur les champs : Le champ 'Nom' doit ??tre renseign??."/>
                <div class="validation"></div>
       </div> 
      <div class="leftcontact">
            <div class="form-group">
              <p>Name<span>*</span></p>
              <span class="icon-case"><i class="fa fa-male"></i></span>
                <input type="text" name="fName" id="fName" data-rule="required" data-msg="V??rifiez votre saisie sur les champs : Le champ 'Nom' doit ??tre renseign??."/>
                <div class="validation"></div>
       </div> 

            <div class="form-group">
            <p>Sirname <span>*</span></p>
            <span class="icon-case"><i class="fa fa-user"></i></span>
        <input type="text" name="lName" id="lName" data-rule="required" data-msg="V??rifiez votre saisie sur les champs : Le champ 'Pr??nom' doit ??tre renseign??."/>
                <div class="validation"></div>
      </div>

      <div class="form-group">
      <p>E-mail <span>*</span></p>  
      <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                <input type="email" name="email" id="email" data-rule="email" data-msg="V??rifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire."/>
                <div class="validation"></div>
      </div>  

      <div class="form-group">
      <p>Course <span>*</span></p>
      <span class="icon-case"><i class="fa fa-home"></i></span>
        <input type="text" name="course" id="course" data-rule="required" data-msg="V??rifiez votre saisie sur les champs : Le champ 'Soci??t??' doit ??tre renseign??."/>
                <div class="validation"></div>
      </div>

      <div class="form-group">
      <p>Company Address <span>*</span></p>
      <span class="icon-case"><i class="fa fa-location-arrow"></i></span>
        <input type="text" name="adresse" id="adresse" data-rule="required" data-msg="V??rifiez votre saisie sur les champs : Le champ 'Adresse' doit ??tre renseign??."/>
                <div class="validation"></div>
      </div>

      <div class="form-group">
      <p>Postcode <span>*</span></p>
      <span class="icon-case"><i class="fa fa-map-marker"></i></span>
        <input type="text" name="postal" id="postal" data-rule="required" data-msg="V??rifiez votre saisie sur les champs : Le champ 'Code postal' doit ??tre renseign??."/>
                <div class="validation"></div>
      </div>  



  </div>

  <div class="rightcontact">  

      <div class="form-group">
      <p>City <span>*</span></p>
      <span class="icon-case"><i class="fa fa-building-o"></i></span>
        <input type="text" name="ville" id="ville" data-rule="required" data-msg="V??rifiez votre saisie sur les champs : Le champ 'Ville' doit ??tre renseign??."/>
                <div class="validation"></div>
      </div>  

      <div class="form-group">
      <p>Phone number <span>*</span></p>  
      <span class="icon-case"><i class="fa fa-phone"></i></span>
        <input type="text" name="phone" id="phone" data-rule="maxlen:10" data-msg="V??rifiez votre saisie sur les champs : Le champ 'T??l??phone' doit ??tre renseign??. Minimum 10 chiffres"/>
                <div class="validation"></div>
      </div>

      <div class="form-group">
      <p>Function <span>*</span></p>
      <span class="icon-case"><i class="fa fa-info"></i></span>
                <input type="text" name="fonction" id="fonction" data-rule="required" data-msg="V??rifiez votre saisie sur les champs : Le champ 'Fonction' doit ??tre renseign??."/>
                <div class="validation"></div>
      </div>

      <div class="form-group">
      <p>Subject <span>*</span></p> 
      <span class="icon-case"><i class="fa fa-comment-o"></i></span>
                <input type="text" name="sujet" id="sujet" data-rule="required" data-msg="V??rifiez votre saisie sur les champs : Le champ 'Sujet' doit ??tre renseign??."/>
                <div class="validation"></div>
      </div>
    
      <div class="form-group">
      <p>Message <span>*</span></p>
      <span class="icon-case"><i class="fa fa-comments-o"></i></span>
                <textarea name="message" rows="14" data-rule="required" data-msg="V??rifiez votre saisie sur les champs : Le champ 'Message' doit ??tre renseign??."></textarea>
                <div class="validation"></div>
      </div>  
  </div>
  </div>
<button type="submit" class="bouton-contact">Send</button>
  
</form> 

  
</body>
</html>