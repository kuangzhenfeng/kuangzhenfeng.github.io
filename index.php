<!DOCTYPE html>
<html>
<head>
<title>jQuery WEB music player--by K.</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script src="js/jquery-1.11.1.min.js"></script>

</head>
<body>
<!-- 代码 开始 -->
<div class="audio-main w3ls">
	<div class="audio-record-list">
	<div class="profile">
			 <div class="profile-top wthree">
				 <div class="pic-sec">
					 <div class="pic">
						 <img src="images/t3.jpg" alt=""/>
					 </div>
					 <div class="pic_info">
						 <h2>节日快乐</h2>
						 <h3><a href="#">www.happy 3.8.net</a></h3>
					 </div>
					 <div class="clear"></div>
				 </div>
				 <div class="media">
					 <div class="tweet">
						 <h4>2017</h4>
						 <h5>year</h5>
					 </div>
					 <div class="follow">
						 <h4>3</h4>
						 <h5>month</h5>
					 </div>
					 <div class="follow2">
						  <h4>8</h4>
						 <h5>day</h5>
					 </div>
					 <div class="clear"></div>
				 </div>
			 </div>
		 </div>
		<div id="jquery_jplayer_1" class="jp-jplayer"></div>
			<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
				<div class="jp-type-playlist">
					<div class="jp-gui jp-interface">
						<div class="jp-controls">	
							<button class="jp-play" role="button" tabindex="0">play</button>
						</div>
						<div class="jp-progress">
							<div class="jp-seek-bar">
								<div class="jp-play-bar"></div>
							</div>
						</div>
						<div class="jp-volume-controls">
							<button class="jp-mute" role="button" tabindex="0">mute</button>
							<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
							<div class="jp-volume-bar">
								<div class="jp-volume-bar-value"></div>
							</div>
						</div>
						<div class="jp-time-holder">
							<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
							<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
						</div>
						
					</div>
					<div class="jp-playlist">
						<ul>
							<li>&nbsp;</li>
						</ul>
					</div>
					<div class="jp-no-solution">
						<span>Update Required</span>
						To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
					</div>
				</div>
			</div>
	</div>
</div>

<link href="css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="js/jplayer.playlist.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	new jPlayerPlaylist({
		jPlayer: "#jquery_jplayer_1",
		cssSelectorAncestor: "#jp_container_1"
	}, [
		
		{
			title:"music1(只有这一首歌)",
			mp3:"a.mp3",
			oga:"a.mp3"
		},
		{
			title:"music2",
			mp3:"http://zhejiang.mycodes.net/MP3/7463.mp3",
			oga:"http://zhejiang.mycodes.net/MP3/7463.mp3"
		},
		{
			title:"music3",
			mp3:"http://zhejiang.mycodes.net/MP3/7399.mp3",
			oga:"http://zhejiang.mycodes.net/MP3/7399.mp3"
		}
	], {
		swfPath: "../../dist/jplayer",
		supplied: "oga, mp3",
		wmode: "window",
		useStateClassSkin: true,
		autoBlur: false,
		smoothPlayBar: true,
		keyEnabled: true
	});
});
</script>
<!-- 代码 结束 -->

</body>
</html>