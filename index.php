<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<style type="text/css">
	* {
		font-family: "Roboto", sans-serif;
		box-sizing: border-box;
	}
	html,
	body{
		background-color: red;
		margin: 0;
	}
	.wrapper1366{
		width: 1366px;
		max-width: 100%;
		margin: 0 auto;
		background: #fff;
	}
	.padd20v{
		padding-top: 20px;
		padding-bottom: 20px;
	}
	.padd20h{
		padding-left: 20px;
		padding-right: 20px;
	}
	.txt-center{
		text-align: center;
	}
	.button{
		outline: 1px solid transparent;
		background: linear-gradient(to right, #662D8C, #ED1E79);
		color: #fff;
		display: inline-block;
		padding: 8px 16px;
		border-radius: 15px;
		cursor: pointer;
		transition: all 0.3s;
		margin: 15px;
	}
	.button p{
		margin: 0;
		padding: 0;
	}
	.button:hover{
		background: linear-gradient(to right, #02AABD, #00CDAC);
	}
	.gt7-car-set,
	.inputs-container{
		display: flex;
		justify-content: center;
		gap: 20px;
		flex-wrap: wrap;
	}
	.intro{
		background: linear-gradient(to bottom right, #2E3192, #1BFFFF);
		color: #fff;
	}
	</style>

<div class="header">

</div>
<div class="wrapper1366">
	<div class="intro padd20v padd20h txt-center">
		<h2>Random generators for games</h2>
		<p>Generators, timer and stopwatch to keep everything all in one neat place!</p>
	</div>
	<div class="gt7 padd20v padd20h txt-center">
		<h3>Gran Turismo 7 generators</h3>
		<p>Click the buttons to generate. Each click will generate a new thing of whatever you clicked. Super easy, barely an inconvienience.</p>
		<div class="gt7-car-set">
			<div class="gt7-random-power-weight button">
				<p>Power to Weight</p>
			</div>
			<div class="gt7-drivetrain button">
				<p>Drivetrain</p>
			</div>
			<div class="gt7-country button">
				<p>Country</p>
			</div>
			<div class="gt7-year button">
				<p>Decade</p>
			</div>
			<div class="gt7-track button">
				<p>Track</p>
			</div>
		</div>
		<div class="gt7-results">
			<div id="power-weight" class="result"><p>Power to Weight ratio: <strong><span></span></strong></p></div>
			<div id="drivetrain" class="result"><p>Drivetrain: <strong><span></span></strong></p></div>
			<div id="country" class="Result"><p>Country of Origin: <strong><span></span></strong></p></div>
			<div id="year" class="Result"><p>Decade: <strong><span></span></strong></p></div>
			<div id="track" class="Result"><p>Track: <strong><span></span></strong></p></div>
		</div>
		<div class="gt7-power-weight-calculator">
			<div class="inputs-container">
				<div class="gt7-power">
					<input type="number" id="power" name="power" value="powerValue" placeholder="Enter your power here">
				</div>
				<div class="gt7-weight">
					<input type="number" id="weight" name="weight" value="weightValue" placeholder="Enter your weight here">
				</div>
			</div>
			<div class="gt7-power-weight button">
				<p>Calculate</p>
			</div>
			<div id="power-weight-calculated" class="result"><p></p></div>
		</div>
	</div>
	<div class="gta padd20v padd20h txt-center">
		<h3>GTA generators</h3>
		<p>Click the buttons to generate. Each click will generate a new thing of whatever you clicked. Super easy, barely an inconvienience.</p>
		<div class="gta-minigame button">
			<p>Select a random GTA minigame</p>
		</div>
		<div class="gta-car button">
			<p>Select random garages for car selection</p>
		</div>
		<div class="gta-results">
			<div id="minigame"><p>Minigame: <strong><span></span></strong></div>
			<div id="car"><p></p></div>
		</div>
		<div class="stopwatch">
		    <div class="clockwrapper">
		      <div class="outerdot paused"></div>
		      <div class="clock">00 : 00 : 00</div>
		    </div>
		  
		  <div class="controls">
		    <div class="start btn button">Start Stopwatch</div>
		    <div class="stop btn disabled button">Reset Stopwatch</div>
		  </div>
		</div>
		<div class="countdown button">
			<p>Start countdown</p>
		</div>
		<div id="ten-countdown"></div>
		<audio id="pop">
		  <source src="cunt.mp3" type="audio/mpeg">
		</audio>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script type="text/javascript">
	var minigames = [
			"Plane Missile",
			"Car Missile",
			"Boopy",
			"Hide 'n' Sneak",
			"Relay",
			"Train",
			"VIP",
			"Demo Derby",
			"Protect the Faggio",
			"Capture the Car",
			"Tanker (Spawn Dependent)"
		];
	var tracks = ["Kyoto Yamagiwa Reverse","Le Mans no Chicane", "Blue Moon Bay Infield A", "Lago Maggiore West End", "Red Bull Ring", "Suzuka", "Sardegna Road C", "Sardegna Road A Reverse", "Tokyo East Reverse", "Brands Hatch Indy", "Blue Moon Bay", "Spa", "Interlagos", "Kyoto Yamagiwa+Miyabi Reverse", "Mount Panorama", "Watkins Glen", "Willow Horse Thief Mile Reverse", "Sardegna Road B Reverse", "Grand Valley South", "Special Stage Route X", "Spa 24h", "Lago Maggiore West Reverse", "Tokyo Central Reverse", "Nurburgring Endurance", "BB Raceway", "Sardegna Road A", "Blue Moon Bay Infield A Reverse", "Lago Maggiore East Reverse", "Nurburgring Nordschleife", "Lago Maggiore Center Reverse", "Catalunya National", "Grand Valley South Reverse", "Autopolis", "Kyoto Miyabi", "Fishermans Ranch", "Colorado Springs", "Lago Maggiore East", "Monza no Chicane", "Lago Maggiore East End Reverse", "Lago Maggiore East End", "Colorado Springs Reverse", "Blue Moon Bay Infield B Reverse", "Catalunya", "Monza", "Sardegna Road C Reverse", "Tokyo Central", "High Speed Ring Reverse", "Kyoto Yamagiwa+Miyabi", "Goodwood", "Dragon Trail Seaside Reverse", "Nurburgring GP", "Lago Maggiore West End Reverse", "Tokyo South Reverse", "Dragon Trail Reverse", "Fuji Short", "Dragon Trail", "Grand Valley Reverse", "Tokyo South", "Suzuka East", "Fishermans Ranch Reverse", "Le Mans", "Willow Horse Thief Mile", "Nurburgring Sprint", "Road Atlanta", "Blue Moon Bay Reverse", "Deep Forest Reverse", "Nurburgring Tourist", "BB Raceway Reverse", "Lago Maggiore Reverse", "High Speed Ring", "Trial Mountain", "Laguna Seca", "Brands Hatch", "Blue Moon Bay Infield B", "Dragon Trail Seaside", "Autopolis Short", "Sardegna Windmills Reverse", "Catalunya no Chicane", "Streets of Willow", "Watkins Glen Short", "Alsace Reverse", "Alsace Test", "Grand Valley", "Alsace", "Fuji", "Lago Maggiore West", "Tsukuba", "Lago Maggiore", "Tokyo East", "Deep Forest", "Nurburgring 24h", "Sardegna Windmills", "Catalunya Rallycross", "Daytona Road Course", "Red Bull Ring Short", "Sardegna Road B", "Alsace Test Reverse", "Kyoto Yamagiwa", "Northern Isle", "Daytona", "Big Willow", "Trail Mountain Reverse", "Lago Maggiore Center", "Streets of Willow Reverse", "Broad Bean Raceway", "Broad Bean Raceway Reverse", "Sainte-Croix Layout A", "Sainte-Croix Layout B", "Sainte-Croix Layout C", "Sainte-Croix Layout A Reverse", "Sainte-Croix Layout B Reverse", "Sainte-Croix Layout C Reverse", "Eiger Nordwand", "Eiger Nordwand Reverse", ];
	var drivetrains = [
			"4WD",
			"FF",
			"FR",
			"MR",
			"RR"
		];
	var countries = [
			"UK",
			"France",
			"Italy",
			"Japan",
			"USA",
			"Germany",
		];
	var decades = [
			"1940s",
			"1950s",
			"1960s",
			"1970s",
			"1980s",
			"1990s",
			"2000s",
			"2010s",
			"2020s",
		]
	var powerWeightRandom = Math.random();
	$('.gta-car').on("click", function(){
		var garageRandFirst = Math.floor((Math.random() * 10) + 1);
		var garageRandSecond = Math.floor((Math.random() * 10) + 1);
		$('#car p').text("The first garage is: " + garageRandFirst + " and the second garage is: " + garageRandSecond);
	});
	$('.gta-minigame').on("click", function(){
		var miniRand = minigames[(Math.floor(Math.random() * (minigames.length)))]
		$('#minigame p span').text(miniRand);
	});
	$('.gt7-random-power-weight').on("click", function(){
		$('#power-weight p span').text(powerWeightRandom.toFixed(2));
	});
	$('.gt7-drivetrain').on("click", function(){
		var driveRand = drivetrains[(Math.floor(Math.random() * (drivetrains.length)))]
		$('#drivetrain p span').text(driveRand);
	});
	$('.gt7-country').on("click", function(){
		var countryRand = countries[(Math.floor(Math.random() * (countries.length)))]
		$('#country p span').text(countryRand);
	});
	$('.gt7-year').on("click", function(){
		var decadeRand = decades[(Math.floor(Math.random() * (decades.length)))]
		$('#year p span').text(decadeRand);
	});
	$('.gt7-track').on("click", function(){
		var trackRand = tracks[(Math.floor(Math.random() * (tracks.length)))]
		$('#track p span').text(trackRand);
		$('audio#pop')[0].play()
	});
	$('.gt7-power-weight').on("click", function(){
		var weight = $('#weight').val();
		var power = $('#power').val();
		var currentPW = power / weight

		$('#power-weight-calculated p').text("The power to weight ratio is: " + powerWeightRandom.toFixed(2) + " and your selected power to weight ratio is: " + currentPW.toFixed(2));
	})

	var start = document.querySelector(".start"),
    stop = document.querySelector(".stop"),
    clock = document.querySelector(".clock"),
    seconds = document.querySelector(".outerdot"),
    timerState = "stopped", //Clock is either stopped, paused, or running
    startTime, elapsed, timer;
//timer states

start.addEventListener("click", function(){
  if(timerState == "stopped"){
  startTime = Date.now();
  timer = requestAnimationFrame(updateTime);
    timerState = "running";
    seconds.classList.remove("paused");
    seconds.classList.add("running");
    start.innerHTML = "Stop";
  } else if( timerState == "running" ){
    cancelAnimationFrame( timer );
    timerState = "paused";
    seconds.classList.add("paused");
    stop.classList.remove("disabled");
    start.innerHTML = "Resume";
  } else if( timerState == "paused" ){
    startTime = Date.now() - elapsed;
    timer = requestAnimationFrame(updateTime);
    timerState = "running";
    seconds.classList.remove("paused");
    seconds.classList.add("running");
    stop.classList.add("disabled");
    start.innerHTML = "Stop";
  }
})

stop.addEventListener("click", function(){
  if(!this.classList.contains("disabled") ){
    timerState = "stopped";
    seconds.classList.remove("paused", "running");
    this.classList.add("disabled");
    start.innerHTML = "Start";
    clock.innerHTML = "00 : 00 : 00"
  }
});

function updateTime(){

  timer = requestAnimationFrame(updateTime);
  elapsed = new Date(Date.now() - startTime);
  
  //minutes
  var mins = elapsed.getMinutes();
  //seconds  
  var secs = elapsed.getSeconds();
  // hundredths
  var hund = Math.floor(elapsed.getMilliseconds()/10);
   //add leading zeros
  if ( mins < 10 ){ mins = "0"+ mins }
  if ( secs < 10 ){ secs = "0"+ secs}
  if ( hund < 10 ){ hund = "0"+ hund }
  
  //update clock
  clock.innerHTML = mins + " : "+ secs + " : " + hund;
  
};

function countdown( elementName, minutes, seconds )
{
    var element, endTime, hours, mins, msLeft, time;

    function twoDigits( n )
    {
        return (n <= 9 ? "0" + n : n);
    }

    function updateTimer()
    {
        msLeft = endTime - (+new Date);
        if ( msLeft < 1000 ) {
           $('audio#pop')[0].play()
        } else {
            time = new Date( msLeft );
            hours = time.getUTCHours();
            mins = time.getUTCMinutes();
            element.innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
            setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );
        }
    }

    element = document.getElementById( elementName );
    endTime = (+new Date) + 1000 * (60*minutes + seconds) + 500;
    updateTimer();
}
$('.countdown').on("click", function(){
	countdown( "ten-countdown", 1, 0 );
	console.log("countdown");
});
</script>