<!DOCTYPE html>
<html lang="fr-FR">
  <head>
    <meta charset="utf-8">
    <title>Boucherie COSSET - Fil d'actualité</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include("../includes/head.php"); ?>
  </head>
  <body id="actualite">

    <?php include("../includes/googleAnalytics.php"); ?>

    <?php include("../includes/menu.php"); ?>


    <div class="container-fluid img-accueil img-pages">
      <div class="background-dark">
        <div class="row text-center">
          <div class="col-sm-12 vertical-center">

              <h1>Fil d'actualité</h1>

          </div>
        </div>
      </div>
    </div>


    <div class="container">
  	  <div class="row">
  			<br>
  			<br>

  			<div id="actu">

  			</div>

  			<br>
  			<br>

  			<div class="text-center">
          <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Feurlcosset%2F&width=450&layout=standard&action=like&size=large&show_faces=true&share=false&height=80&appId=1279552698748284" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
  			</div>

        <br>

      </div>
    </div>


    <br>


    <?php include("../includes/facebookApi.php"); ?>

    <?php include("../includes/footer.php"); ?>


    <script>
  		var el = document.getElementById('actu');
  		var array = <?php echo $userNode['feed']; ?>;
  		var a, div, div1, div2, story, date, shortDate, dateFormat, img, description, message, name2, newLinkText;

  		for (var i = 0; i < array.length; i++) {

  			a = document.createElement('a');
  			a.href = array[i].link;
  			a.target = "_blank";
  			el.appendChild(a);

  			div = document.createElement('div');
  			div.className = 'row article';
  			a.appendChild(div);

  			div1 = document.createElement('div');
  			div1.className = 'col-md-8 col-md-offset-2';
  			div.appendChild(div1);

  			story = document.createElement('h5');
  			if (array[i].story) {
  				newLinkText = document.createTextNode(array[i].story);
  			} else {
  				newLinkText = document.createTextNode('Boucherie Cosset');
  			}
  			story.className = 'text-center';
  			story.appendChild(newLinkText);
  			div1.appendChild(story);

  			date = document.createElement('p');
  			date.className = 'small text-center';
  			shortDate = array[i].created_time.date.substr(0, 10);
  			dateFormat = new Date(Date.parse(shortDate)).toLocaleString("fr-FR", {year: "numeric", month: "long", day: "numeric"});
  			newLinkText = document.createTextNode(dateFormat);
  			date.appendChild(newLinkText);
  			div1.appendChild(date);

  			div2 = document.createElement('div');
  			div2.className = 'row';
  			div1.appendChild(div2);

  			if (array[i].full_picture || array[i].picture) {
  				img = document.createElement('img');
  				if (array[i].full_picture) {
  					img.src = array[i].full_picture;
  				} else {
  					img.src = array[i].picture;
  				}
  				img.className = 'img-responsive img-thumbnail center-block'
  				div2.appendChild(img);
  			}

  			if (array[i].name && array[i].name != 'Boucherie Cosset') {
  				name2 = document.createElement('h5');
  				newLinkText = document.createTextNode(array[i].name);
  				name2.appendChild(newLinkText);
  				div2.appendChild(name2);
  			}

  			if (array[i].description) {
  				description = document.createElement('p');
  				newLinkText = document.createTextNode(array[i].description);
  				description.appendChild(newLinkText);
  				div2.appendChild(description);
  			}

  			if (array[i].message) {
  				message = document.createElement('p');
  				newLinkText = document.createTextNode(array[i].message);
  				message.appendChild(newLinkText);
  				div2.appendChild(message);
  			}

  		}
  	</script>


  </body>
</html>
