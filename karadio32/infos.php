
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
