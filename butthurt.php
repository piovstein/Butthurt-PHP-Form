<?php

if(isset($_POST["submit"])) {
    $recipient="butthurt.care@gmail.com";
    $subject="BUTTHURT REPORT FORM";
    $sender=$_POST["sender"];
   
    $message=$_POST["message"];
	$datentime=$_POST["datentime"];
	$radio_value = $_POST["radio"];
	$radio_value1 = $_POST["radio1"];
	$radio_value2 = $_POST["radio2"];
	$radio_value3 = $_POST["radio3"];
	$radio_value4 = $_POST["radio4"];
	$radio_value5 = $_POST["radio5"];
	$radio_value6 = $_POST["radio6"];
	$radio_value7 = $_POST["radio7"];
	$radio_value8 = $_POST["radio8"];
	$radio_value9 = $_POST["radio9"];
	$radio_value0 = $_POST["radio0"];

		$description=$_POST["description"];

    $mailBody="Date and Time: $datentime \n Nature: $radio_value \n More Info: $radio_value1 \n Tears: $radio_value2 \n Scarring: $radio_value3 \n Sleep: $radio_value4 \n Work: $radio_value5 \n Coping: $radio_value6 \n Phonecalls: $radio_value7 \n Carpal Tunnel: $radio_value8 \n About the Person: $radio_value9 \n Action Taken: $radio_value0";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p><b>Thank you! Your complaint has been sent and will be carefully reviewed.</b></p>";
}

?><!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>BUTTHURT REPORT FORM</title>
    <link rel="icon" 
      type="image/png" 
      href="https://i.imgur.com/eO0SC8a.png">
</head>

<body>
<h1 class="header" align="center">BUTTHURT REPORT FORM</h1>
<div style="text-align: center"><img src="https://i.imgur.com/CXXx6xG.jpg"></div>
<h2 class="tagline" align="center">(internet version)</h2>
    <?=$thankYou ?>
<div style="text-align: center">
    <form method="post" action="butthurt.php">
        <label>DATE AND TIME YOU EXPERIENCED BUTTHURT:</label>
        <input name="datentime">
        </label>
      
      <h3 class="title">PLEASE DESCRIBE NATURE OF THE BUTTHURT.</h3>

	<label for="lj">
	  <input id="lj" type="radio" name="radio" value="livejournal" /> 
		LiveJournal Post
	</label><br />

	<label for="mb">
	  <input id="mb" type="radio" name="radio" value="message board" /> 
		Message Board Post
	</label><br />

	<label for="ct">
	  <input id="ct" type="radio" name="radio" value="comment thread" /> 
		Comment Thread Post
	</label><br />

	<label for="cr">
	  <input id="cr" type="radio" name="radio" value="chat room" /> 
		Chat room Post
	</label><br />
	
	<label for="bp">
	  <input id="bp" type="radio" name="radio" value="blog post" /> 
		Blog Post
	</label><br />
	
	<label for="lc">
	  <input id="lc" type="radio" name="radio" value="LOLCat" /> 
		LOLCat
	</label><br />
	
	<label for="rj">
	  <input id="rj" type="radio" name="radio" value="Random Joke / Cartoon / News item that you found" /> 
		Random Joke / Cartoon / News item that you found
	</label><br />
	
	<!-- <label for="other">
	  <input id="other" type="radio" name="radio" value="other" />  Other (Please Specify)
	</label>  <input  name="description" /><br /> -->
      
      
      
      
      <h3 class="title">PLEASE TELL US MORE ABOUT THE INCIDENT OF BUTTHURT.</h3>

	<label for="dagree">
	  <input id="dagree" type="radio" name="radio1" value="Someone made a blog post that I didn't agree with." /> 
		Someone made a blog post that I didn't agree with.
	</label><br />

	<label for="cdl">
	  <input id="cdl" type="radio" name="radio1" value="Someone posted a cartoon or drawing that I didn't like" /> 
		Someone posted a cartoon or drawing that I didn't like
	</label><br />
	
	<label for="sbm">
	  <input id="sbm" type="radio" name="radio1" value="Someone wrote a story or anecdote that brought up Bad Memories and made me cry." /> 
		Someone wrote a story or anecdote that brought up Bad Memories and made me cry.
	</label><br />
	
	<label for="smu">
	  <input id="smu" type="radio" name="radio1" value="Someone mucked up the storyline in my RP." /> 
	Someone mucked up the storyline in my RP.
	</label><br />
	
	<label for="cbfgf">
	  <input id="cbfgf" type="radio" name="radio1" value="I found out my internet-boyfriend/girlfriend is cheating on me using an alias." /> 
	I found out my internet-boyfriend/girlfriend is cheating on me using an alias.
	</label><br />
	
	<label for="ppive">
	  <input id="ppive" type="radio" name="radio1" value="Someone posted pornography and sullied my innocent virgin eyes." /> 
	Someone posted pornography and sullied my innocent virgin eyes.
	</label><br />
	
	<label for="bsp">
	  <input id="bsp" type="radio" name="radio1" value="Someone posted pornography and my boss saw it." /> 
	Someone posted pornography and my boss saw it.
	</label><br />
	
	<label for="ila">
	  <input id="ila" type="radio" name="radio1" value="I lost an argument in a chat room." /> 
	I lost an argument in a chat room.
	</label><br />
	
	<label for="critique">
	  <input id="critique" type="radio" name="radio1" value="I asked for critique on my artwork and I got it." /> 
	I asked for critique on my artwork and I got it.
	</label><br />
	
	<!-- <label for="othera">
	  <input id="othera" type="radio" name="radio1" value="Other" /> 
	Other (Please describe in the form below:)
	</label><br /><textarea type="text" class="text input"></textarea> --><br />
	<br>
	<div class="text">
		&nbsp;&nbsp;<strong>Y</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>N</strong><br /><br />
	  <input type="radio" name="radio2" value="Y" /> 
	  <input type="radio" name="radio2" value="N" /> 
			Were there tears?
		<br /><br />

	  <input type="radio" name="radio3" value="Y" /> 
	  <input type="radio" name="radio3" value="N" /> 
			Was there permanent mental scarring from the butthurt?
		<br /><br />

	  <input type="radio" name="radio4" value="Y" /> 
	  <input type="radio" name="radio4" value="N" /> 
			Was there lost sleep from the butthurt?
		<br /><br />

	  <input type="radio" name="radio5" value="Y" /> 
	  <input type="radio" name="radio5" value="N" /> 
			Did you miss work or arrive late to work because of the butthurt?
		<br /><br />

	  <input type="radio" name="radio6" value="Y" /> 
	  <input type="radio" name="radio6" value="N" /> 
			Did you emply a Coping Mechanism, such as turning off your computer and going outside for a while?
		<br /><br />

	  <input type="radio" name="radio7" value="Y" /> 
	  <input type="radio" name="radio7" value="N" /> 
			Were there emergency phone calls or text messages that costed you minutes?
		<br /><br />

	  <input type="radio" name="radio8" value="Y" /> 
	  <input type="radio" name="radio8" value="N" /> 
			Was there any incident of Carpal Tunnel Syndrome resulting from you typing up long-butthurt rebuttals?
		<br /><br />
	</div>      
      
      
      
      <h3 class="title">PLEASE TELL US MORE ABOUT THE PERSON WHO CAUSED THE BUTTHURT.</h3>
	
	<label for="angry">
		<input id="angry" type="radio" name="radio9" value="They are a big mean poopy pants who should be banned from the internet forever or at least until they learn that I am right and superior and they are wrong and should bow down and worship me now.." /> 
	They are a big mean poopy pants who should be banned from the internet forever or at least until they learn that I am right and superior and they are wrong and should bow down and worship me now..
	</label><br />
	
	<label for="angry2">
		<input id="angry2" type="radio" name="radio9" value="They deserve to be hunted down like a dog and shot dead on their own front porch." /> 
	They deserve to be hunted down like a dog and shot dead on their own front porch.
	</label><br />
	
	<label for="angry3">
		<input id="angry3" type="radio" name="radio9" value="They and their ilk deserve to be rounded up and herded into concentration camps." /> 
	They and their ilk deserve to be rounded up and herded into concentration camps.
	</label><br />
	
	<label for="angry4">
		<input id="angry4" type="radio" name="radio9" value="There should be laws to punish people like that." /> 
	There should be laws to punish people like that.
	</label><br />
	
	<label for="angry5">
		<input id="angry5" type="radio" name="radio9" value="They should be kicked out of America, because we're the home of the free and we just don't DO shit like that here." /> 
	They should be kicked out of America, because we're the home of the free and we just don't DO shit like that here.
	</label><br />
	
	<label for="angry6">
		<input id="angry6" type="radio" name="radio9" value="They should be just as accountable for their actions online as they are in the real world, and also so I can have access to all their personal information so I can stalk then." /> 
	They should be just as accountable for their actions online as they are in the real world, and also so I can have access to all their personal information so I can stalk then.
	</label><br />
	
	<label for="angry7">
		<input id="angry7" type="radio" name="radio9" value="All of the above." /> 
	All of the above.
	</label><br />
      
      
      <h3 class="title">DID YOU TAKE ANY ACTIONS YOURSELF REGARDING THE BUTTHURT?</h3>
	<label for="action1">
		<input id="action1" type="radio" name="radio0" value="I wrote a six thousand word response detailing the extent of my butthurt and emailed it to them or posted it in their blog comments." /> 
	I wrote a six thousand word response detailing the extent of my butthurt and emailed it to them or posted it in their blog comments.
	</label><br />
	
	<label for="action2">
		<input id="action2" type="radio" name="radio0" value="I sent an incoherent flame to them from a dummy account." /> 
	I sent an incoherent flame to them from a dummy account.
	</label><br />
	
	<label for="action3">
		<input id="action3" type="radio" name="radio0" value="I used a spam program to send them multiple flame emails." /> 
	I used a spam program to send them multiple flame emails.
	</label><br />
	
	<label for="action4">
		<input id="action4" type="radio" name="radio0" value="I organized a DDoS attack on their server/website." /> 
	I organized a DDoS attack on their server/website.
	</label><br />
	
	<label for="action5">
		<input id="action5" type="radio" name="radio0" value="I got all my bestest friends together and organized a flamewar." /> 
	I got all my bestest friends together and organized a flamewar.
	</label><br />
	
	<label for="action7">
		<input id="action7" type="radio" name="radio0" value="I created new emails / LJ accounts for the specific purpose of flaming this person." /> 
	I created new emails / LJ accounts for the specific purpose of flaming this person.
	</label><br />
	
	<label for="action8">
		<input id="action8" type="radio" name="radio0" value="I posted this person's RL information everywhere that I could think of; they'll get a Molotov cocktail through their bedroom window sooner or later, and that'll teach 'em to mess with me." /> 
	I posted this person's RL information everywhere that I could think of; they'll get a Molotov cocktail through their bedroom window sooner or later. That'll teach 'em to mess with me.
	</label><br />
	
	<label for="action9">
		<input id="action9" type="radio" name="radio0" value="I realized that arguing on the internet is usually pointless and found something else to do with my time." /> 
	I realized that arguing on the internet is usually pointless and found something else to do with my time.
	</label><br /><br />
      
      
      <input type="submit" name="submit">
    </form>
</div>
<small>image that started it all: <a href="http://www.27bslash6.com/brf.jpg">http://www.27bslash6.com/brf.jpg</a> / Thanks to <a href="http://nexua.org/niji/butthurt-form/">Nijko</a> for the idea / <a href="http://www.peterheft.com/">Peter Heft</a> / <a href="https://github.com/piovstein/Butthurt-PHP-Form">Github</a><div class="grid col-300 copyright">
<medium><span style="-moz-transform: scaleX(-1); -o-transform: scaleX(-1); -webkit-transform: scaleX(-1); transform: scaleX(-1); display: inline-block">
		&copy;</span>2014 <a href="http://allritesreversed.com" target="_blank">All Rites Reversed.</a></medium></div></small>
</body>

</html>
