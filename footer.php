  
<style>
#playlist,audio{padding-bottom:5px}
#playlist .active a{color:#5DB0E6;text-decoration:none;}
#playlist li a{color:#eeeedd;padding:5px;display:inline;}
#playlist li a:hover{text-decoration:none;}
.horizontal {display:inline;}
</style>
  
    <!-- Holds the footer/copyright information of the page. -->
        <div id="foot" class="col-sm-12 text-center">
            <footer>
                <p>COM 304: Communication in Organizations. &copy; 2017</p>
				<p>Emily McCauley, Josh Gillman, Morgan Smith, Emily Burnett,
				Victoria Arroyo, Erica Willemsen</p>
				<hr>
				<div class="col-12">
					<div class="col-sm-6 col-md-3">
						<audio id="audio" preload="auto" tabindex="0" controls="" type="audio/mpeg">
							<source type="audio/mp3" src="music/syd_matters_obstacles.mp3">
							Sorry, your browser does not support HTML5 audio.
						</audio>
					</div>
					<div class="col-sm-6 col-md-9" style="text-align:left;">
						<ul id="playlist">
							<li class="active horizontal"><a href="music/syd_matters_obstacles.mp3">Syd Matters - Obstacles</a></li>
							<li class="horizontal"><a href="music/message_to_bears_mountains.mp3">Message to Bears - Mountains</a></li>
							<li class="horizontal"><a href="music/syd_matters_to_all_of_you.mp3">Syd Matters - To All of You</a></li>
							<!--<li><a href="http://www.archive.org/download/PatrikbkarlChamberSymph/PatrikbkarlChamberSymph_vbr_mp3.zip">patrikbkarl chamber symph</a></li>-->

						</ul>
					</div>
				</div>
            </footer>
        </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script src="js/waypoints.min.js" type="text/javascript"></script>
<script src="js/trailmix.js" type="text/javascript"></script>

<script>
	var audio;
	var playlist;
	var tracks;
	var current;

	init();
	function init(){
		current = 0;
		audio = $('audio');
		playlist = $('#playlist');
		tracks = playlist.find('li a');
		len = tracks.length - 1;
		audio[0].volume = .10;
		audio[0].play();
		playlist.find('a').click(function(e){
			e.preventDefault();
			link = $(this);
			current = link.parent().index();
			run(link, audio[0]);
		});
		audio[0].addEventListener('ended',function(e){
			current++;
			if(current == len){
				current = 0;
				link = playlist.find('a')[0];
			}else{
				link = playlist.find('a')[current];    
			}
			run($(link),audio[0]);
		});
	}
	function run(link, player){
			player.src = link.attr('href');
			par = link.parent();
			par.addClass('active').siblings().removeClass('active');
			audio[0].load();
			audio[0].play();
	}
</script>
	
</body>
</html>
