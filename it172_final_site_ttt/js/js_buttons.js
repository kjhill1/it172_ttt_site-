// js for buttons CHECK TO SEE IF ALREADY HAVE  

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Button - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( ".widget input[type=submit], .widget a, .widget button" ).button();
    $( "button, input, a" ).click( function( event ) {
      event.preventDefault();
    } );
  } );
  </script>
</head>
<body>
<div class="widget">
  <h1>Widget Buttons</h1>
  <button>A button element</button>
 
  <input type="submit" value="A submit button">
 
  <a href="#">An anchor</a>
</div>
<h1>CSS Buttons</h1>
<button class="ui-button ui-widget ui-corner-all">A button element</button>
 
<input class="ui-button ui-widget ui-corner-all" type="submit" value="A submit button">
 
<a class="ui-button ui-widget ui-corner-all" href="#">An anchor</a>
 
 
</body>
</html>

OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOORRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR


https://www.tutorialspoint.com/jquery/widget-button.htm
<!doctype html>
<html lang = "en">
   <head>
      <meta charset = "utf-8">
      <title>jQuery UI Button - Default functionality</title>
		
      <link rel = "stylesheet" 
         href = "//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
			
      <script src = "//code.jquery.com/jquery-1.10.2.js">
      </script>
      <script src = "//code.jquery.com/ui/1.11.4/jquery-ui.js">
      </script>
		
      <script>
         $(function() {
            $( "input[type = submit], a, button" )
            .button()
            .click(function( event ) {
               event.preventDefault();
            });
         });
      </script>
   </head>
	
   <body>
      <button>A button element</button>
      <input type = "submit" value = "A submit button">
      <a href = "#">An anchor</a>
   </body>
</html>


$(function() {
   $( "input[type = submit], a, button" )
   .button()
   .click(function( event ) {
      event.preventDefault();
   });
});