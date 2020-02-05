<?php header("Access-Control-Allow-Origin: *"); ?>
<!DOCTYPE html>
<html lang="En">
	<title>No title</title>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Informations</title>
</head><body>

<h1>Playlists:</h1><BR/>
<?php
$dir    = 'playlists';
$files = scandir($dir);
echo '<ol>';
foreach ($files as $value)
{
if ($value !='.' and $value !='..' )
{echo '<li><a href="playlists/'. $value.'">'.$value.'</a></li><br>';}
else{}
}
echo '</ol>';
?>
<h1>Links</h1>
<a href="https://github.com/karawin/Ka-Radio" target="_blank"><font color="#14A692">The Github page of KaRadio</font></a> <BR/>
<a href="http://karadio.karawin.fr/Interface.txt"  target="_blank"><font color="#14A692">Click here for help on the uart and html interfaces</font></a>
  <BR/>
  <BR/>
<A HREF="mailto:jp@karawin.fr">Please Send me your playlist to add it here.</A> <br/> <br/>
<h1>Your prototypes:</h1><BR/>
<a href="http://karadio.karawin.fr/yours/"  target="_blank"><font color="#14A692">Click here to see your prototypes</font></a><BR/>
<BR/>

<h1>Donate:</h1>
  If you like Karadio and want to contribute to the development (software and hardware),<BR/> please donate, the amount is up to you.<br/> Even one euro or $, I am so happy to know how many users appreciate this project.<BR/>
  Thanks.<BR/><BR/>
 <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="HVGLA5NYAXYFG">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG_global.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
</form>

	<script>
		(function() {
			'use strict';

			const playlist = document.getElementById('playlist');
			if(playlist != null) {
				playlist.addEventListener('click', function(event)  {
					if(event.target.hasAttribute('download') && event.target.hasAttribute('href')) {
						event.preventDefault();
						const msg = '{"playlist":"' + event.target.href + '"}';
						window.parent.postMessage(msg, '*');
						// console.log('Send :', msg);
					}
				});
			}
		})();
	</script>

    </body>
</html>