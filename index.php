<!DOCTYPE html>
<html lang="en">
<head>

<title>Project EMBER - Blazblue Character Selector</title>

<style type="text/css">
body {
	padding-bottom: 80px;
}
</style>

</head>
<body>

<div class="question">
<h2>Question 1 - What tier of character do you want to play?</h2>

<ul>
	<li><a href="javascript:void(0)" onclick="upgradeTier('High');">High</a></li>
	<li><a href="javascript:void(0)" onclick="upgradeTier('Mid');">Mid</a></li>
	<li><a href="javascript:void(0)" onclick="upgradeTier('Low');">Low</a></li>
	<li><a href="javascript:void(0)" onclick="upgradeTier('Low');upgradeTier('Mid');">Any but high</a></li>
	<li><a href="javascript:void(0)" onclick="upgradeTier('High');upgradeTier('Mid');">Any but low</a></li>
	<li><a href="javascript:void(0)">Any</a></li>
</ul>
</div>

<div class="question">
<h2>Question 2 - What's most important to you?</h2>

<ul>
	<li><a href="javascript:void(0)" onclick="pickPlaystyle('Offensive');">A good offense.</a></li>
	<li><a href="javascript:void(0)" onclick="pickPlaystyle('Defensive');">The best defense.</a></li>
	<li><a href="javascript:void(0)" onclick="pickPlaystyle('Special');">Excelling in one particular strategy.</a></li>
	<li><a href="javascript:void(0)" onclick="pickPlaystyle('Prepared');">Having a tool for every situation.</a></li>
	<li><a href="javascript:void(0)" onclick="pickPlaystyle('Emotional');">Emotional connection with my character.</a></li>
	<li><a href="javascript:void(0)" onclick="pickPlaystyle('Rewarding');">Aesthetics/feeling suitably rewarded when I perform well.</a></li>
</ul>
</div>

<div class="question">
<h2>Question 3 - What's your current skill level in fighting games?</h2>

<ul>
	<li><a href="javascript:void(0)" onclick="playerSkill('New');">I am new to fighting games.</a></li>
	<li><a href="javascript:void(0)" onclick="playerSkill('Mid');playerSkill('New');">I have played some fighting games, or have played Blazblue for a while.</a></li>
	<li><a href="javascript:void(0)" onclick="playerSkill('New');playerSkill('Mid');playerSkill('High');">I am passionate about fighting games, either on a casual or competitive level.</a></li>
	<li><a href="javascript:void(0)" >Don't factor my skill in. I'll play who I want.</a></li>
</ul>
</div>

<div class="question">
<h2>Question 4 - What skill level do you intend to play at?</h2>

<ul>
	<li><a href="javascript:void(0)" onclick="playerGoal('Low');">A casual level with friends who aren't especially good.</a></li>
	<li><a href="javascript:void(0)" onclick="playerGoal('Mid');">A casual level where I'll be able to hold my own online.</a></li>
	<li><a href="javascript:void(0)" onclick="playerGoal('High');">The competitive or tournament level.</a></li>
	<li><a href="javascript:void(0)">Please don't factor this into my result. It's not important to me.</a></li>
</ul>
</div>

<div class="question">
<h2>Question 5 - Who's your favourite character in the story?</h2>

<div class="storyQ">
<?php
include 'chars.php';
?>
</div>
<p><a href="javascript:void(0)" >I want to skip this question.</a></p>
</div>

<div class="question">
<h2>Question 6 - Which character do you think looks the best?</h2>

<div class="storyQ">
<?php
include 'chars.php';
?>
</div>
<p><a href="javascript:void(0)" >I want to skip this question.</a></p>
</div>

<div class="question">
<h2>Question 7 - Which character do you relate to the most?</h2>

<div class="storyQ">
<?php
include 'chars.php';
?>
</div>
<p><a href="javascript:void(0)" >I want to skip this question.</a></p>
</div>

<div class="question">
<h2>Question 8 - Which character do you think looks the worst?</h2>

<div class="hateQ">
<?php
include 'chars.php';
?>
</div>
<p><a href="javascript:void(0)" >I want to skip this question.</a></p>
</div>

<div class="question">
<h2>Question 9 - Which character is your least favourite in general?</h2>

<div class="hateQ">
<?php
include 'chars.php';
?>
</div>
<p><a href="javascript:void(0)" >I want to skip this question.</a></p>
</div>

<div class="question">
<h2>Question 10 - What sort of moral system do you like in a character?</h2>

<ul>
	<li><a href="javascript:void(0)" onclick="playerMoral('Good');playerMoral('Grey');">Any sort of "good". I don't really enjoy playing as assholes.</a></li>
	<li><a href="javascript:void(0)" onclick="playerMoral('Grey');">I like characters with good intentions that bend the rules to accomplish their goals. Like either Chaotic Good or a jerk with a heart of gold.</a></li>
	<li><a href="javascript:void(0)" onclick="playerMoral('Good');">I like pure "good" or heroic characters, not the morally grey sort.</a></li>
	<li><a href="javascript:void(0)" onclick="playerMoral('Neutral');">I like neutral characters.</a></li>
	<li><a href="javascript:void(0)" onclick="playerMoral('Evil');">I love to play the villain!</a></li>
	<li><a href="javascript:void(0)">I have no strong feelings one way or another.</a></li>
</ul>
</div>

<div class="question">
<h2>Question 11 - Do you have fun when zoning?</h2>

<ul>
	<li><a href="javascript:void(0)" onclick="doZoning(2);">Yes! Very much so.</a></li>
	<li><a href="javascript:void(0)" onclick="doZoning(1);">Yes.</a></li>
	<li><a href="javascript:void(0)" >No/no preference.</a></li>
	<li><a href="javascript:void(0)" onclick="doZoning(-1);">HELL no.</a></li>
</ul>
</div>

<div class="question">
<h2>Question 12 - Do you have fun playing with a rushdown playstyle?</h2>

<ul>
	<li><a href="javascript:void(0)" onclick="doRushdown(2);">Definitely!</a></li>
	<li><a href="javascript:void(0)" onclick="doRushdown(1);">I do.</a></li>
	<li><a href="javascript:void(0)" >No/no preference.</a></li>
	<li><a href="javascript:void(0)" onclick="doRushdown(-1);">I hate rushdown gameplay.</a></li>
</ul>
</div>

<div class="question" id="doubleplay">
<h2>Question 12.5 - You indicated you like both Rushdown and Zoning. What would you think of a character who does both?</h2>

<ul>
	<li><a href="javascript:void(0)" onclick="doDoublePlay(1);">I'd like that. Please make it a priority.</a></li>
	<li><a href="javascript:void(0)" onclick="doDoublePlay(0);">Fine by me if I get one.</a></li>
	<li><a href="javascript:void(0)" onclick="doDoublePlay(-1);">No. I'd prefer playing one or the other.</a></li>
</ul>
</div>

<div class="question">
<h2>Question 13 - When in a match, what's your primary focus or favourite thing to do?</h2>

<ul>
	<li><a href="javascript:void(0)" onclick="playerFocus('Mixup');">Keeping the pressure on my opponent.</a></li>
	<li><a href="javascript:void(0)" onclick="playerFocus('Neutral');">Outmanoeuvring the foe.</a></li>
	<li><a href="javascript:void(0)" onclick="playerFocus('Condition');">Mindgames!</a></li>
	<li><a href="javascript:void(0)" onclick="playerFocus('Combos');">Executing the right combos in the right situations.</a></li>
	<li><a href="javascript:void(0)">None of the above/I haven't played any fighting games yet.</a></li>
</ul>
</div>

<div class="question">
<h2>Question 14 - What range are you most comfortable fighting at?</h2>

<ul>
	<li><a href="javascript:void(0)" onclick="playerRange('Short');playerRange('All');">I'm a close-range fighter.</a></li>
	<li><a href="javascript:void(0)" onclick="playerRange('Mid');playerRange('All');">I feel most comfortable at mid range.</a></li>
	<li><a href="javascript:void(0)" onclick="playerRange('Long');playerRange('All');">I most enjoy fighting at long ranges.</a></li>
	<li><a href="javascript:void(0)" onclick="playerRange('All');">I want to be able to handle all ranges!</a></li>
	<li><a href="javascript:void(0)" >No idea/anything goes.</a></li>
</ul>
</div>

<div class="question">
<h2>Question 15 - Do you have a character gender preference?</h2>

<ul>
	<li><a href="javascript:void(0)" onclick="playerGender('Male',2);">Strongly male.</a></li>
	<li><a href="javascript:void(0)" onclick="playerGender('Male',1);">Male.</a></li>
	<li><a href="javascript:void(0)" onclick="playerGender('Female',1);">Female.</a></li>
	<li><a href="javascript:void(0)" onclick="playerGender('Female',2);">Strongly female.</a></li>
	<li><a href="javascript:void(0)" onclick="playerGender('Other',2);">I specifically like gender subversive or androgynous characters.</a></li>
	<li><a href="javascript:void(0)" >None. Please don't factor gender into my result.</a></li>
</ul>
</div>

<div class="question">
<h2>Question 16 - Do you want to play a gimmicky or complicated character?</h2>

<ul>
	<li><a href="javascript:void(0)" onclick="playerGimmick('High');">I love gimmicks. I enjoy playing complicated characters.</a></li>
	<li><a href="javascript:void(0)" onclick="playerGimmick('Med');">I like unique mechanics a lot, but I don't want to play something too complex.</a></li>
	<li><a href="javascript:void(0)" onclick="playerGimmick('No');playerGimmick('Mid');">Not especially.</a></li>
	<li><a href="javascript:void(0)" onclick="playerGimmick('No');">No.</a></li>
</ul>
</div>

<div class="question">
<h2>Question 17 - What's the most important or enjoyable quality in a character for you?</h2>

<ul>
	<li><a href="javascript:void(0)" onclick="playerPriority('Damage');">Damage. Everything else is secondary.</a></li>
	<li><a href="javascript:void(0)" onclick="playerPriority('HP');">Health points. I want to last long in combat.</a></li>
	<li><a href="javascript:void(0)" onclick="playerPriority('Mobility');">Mobility. I like going fast or enjoy unconventional movement options.</a></li>
	<li><a href="javascript:void(0)" onclick="playerPriority('Utility');">Utility. Give me a lot of tricks, tools and options for every situation.</a></li>
	<li><a href="javascript:void(0)" onclick="playerPriority('Pressure');">Pressure. I love to make the opponent squirm.</a></li>
	<li><a href="javascript:void(0)" onclick="playerPriority('Rounded');">I like all-rounders.</a></li>
	<li><a href="javascript:void(0)" onclick="playerPriority('Gimmick');">Unique abilities. Puzzles, minigames or even multiple character management are best.</a></li>
	<li><a href="javascript:void(0)">I'm unsure.</a></li>
</ul>
</div>

<div class="question">
<h2>Question 18 - Would you feel comfortable managing resources while playing your character?</h2>

<ul>
	<li><a href="javascript:void(0)" onclick="playerReliant('Reliant');">Yes, please! Give me all the resource management!</a></li>
	<li><a href="javascript:void(0)" onclick="playerReliant('Mid');">I'd like to manage a moderate amount!</a></li>
	<li><a href="javascript:void(0)" onclick="playerReliant('Mid');playerReliant('Normal');">I'm okay with some.</a></li>
	<li><a href="javascript:void(0)" onclick="playerReliant('Normal');">No, thanks. I just want to focus on my opponent and I.</a></li>
	<li><a href="javascript:void(0)">Doesn't matter.</a></li>
</ul>
</div>

<div class="question">
<h2>Question 19 - Pick the character resource type that sounds the most fun:</h2>

<ul>
	<li><a href="javascript:void(0)" onclick="playerResource('Dual');">Managing an additional ability meter.</a></li>
	<li><a href="javascript:void(0)" onclick="playerResource('Resource');">Maybe something like ammunition, or a resource I have to manually replenish.</a></li>
	<li><a href="javascript:void(0)" onclick="playerResource('Normal');">Nothing special. I'll stick to the basic meter.</a></li>
	<li><a href="javascript:void(0)">No preference.</a></li>
</ul>
</div>

<a href="javascript:void(0)" onclick="getResults();">Click me to get your results!</a>

<div id="results">
</div>

</body>
<script src="scripts/jquery.js"></script>
<script src="scripts/load_profiles.js"></script>
</html>