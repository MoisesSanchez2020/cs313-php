<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="week5.css">
   

    <title>Special Orders </title>
</head>
<body>
<!--nav -->
<div id="header">
  <div class="logo">
    <a href="index.php">IQGreen</a>
  </div>  
  <nav>
    <form class="search" action="search.php"> 
      <input name="q" placeholder="Search..." type="search">
    </form>
    <ul>
      <li>
        <a href="week5.php">Search</a>
      </li>
      <li>
        <a href="">About</a>
        <ul class="mega-dropdown">
          <li class="row">
            <ul class="mega-col">
              <li><a href="#">About</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
            <ul class="mega-col">
              <li><a href="#">Help</a></li>
              <li><a href="#">Pricing</a></li>
              <li><a href="#">Team</a></li>
              <li><a href="#">Services</a></li>
            </ul>
            <ul class="mega-col">
              <li><a href="#">Coming Soon</a></li>
              <li><a href="#">404 Error</a></li>
              <li><a href="#">Search</a></li>
              <li><a href="#">Author Page</a></li>
            </ul>
            <ul class="mega-col">
              <li><a href="#">Full Width</a></li>
              <li><a href="#">Right Column</a></li>
              <li><a href="#">Left Column</a></li>
              <li><a href="#">Maintenance</a></li>
            </ul>
          </li>
        </ul>        
      </li>
      <li class="dropdown">
        <a href="">Contact</a>
          <ul>
            <li><a href="#">About Version</a></li>
            <li><a href="#">About Version</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>        
      </li>
      <li>
        <a href="">Portfolio</a>
      </li>
      <li>
        <a href="login.php">Log-in</a>
      </li>
    </ul>
  </nav>
</div>
<!-- nav end-->



<div class="contact container shadow" id="contact_form">
  <div class="contact row header">
    <h2>CONTACT US</h2>
    <h3>Request information, book a studio, or plan your event!</h3>
    <div id="contact_results"></div>
  </div>
  <div class="contact row body" id="contact_body">
    <div class="contact-elements">
      <ul>
        <li>
          <p class="left">
            <label for="name">name</label>
            <input type="text" name="name" id="name" required="true" class="input-field" placeholder="Jane Doe" />
          </p>
          <p class="pull-right">
            <label for="phone2">phone</label>
            <input type="text" name="phone2" maxlength="15" class="tel-number-field long" placeholder="123 456 7890" />
          </p>
        </li>
        <div class="center-btn" style="position:relevant; height:5vh;">
          <li>
            <label for="email">email <span class="req">*</span></label>
            <input type="email" name="email" required="true" class="input-field" placeholder="jane.doe@gmail.com" />
          </li>
        </div>

        <li>
          <div class="contact divider"></div>
        </li>
        <li>
          <label for="message">enquiry</label>
          <textarea cols="46" rows="8" name="message" id="message" class="textarea-field" required="true"></textarea>
        </li>
      </ul>
    </div>
    <div class="center-btn" style="position:relevant; height:5vh;">
      <li>
        <input id="submit_btn" class="btn btn-submit" type="submit" value="Submit" />
      </li>
    </div>
  </div>
</div>
<!---contact-form--->



    
</body>
</html>