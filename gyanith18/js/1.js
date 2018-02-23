$(document).ready(function(){
    $(".teamid-btn").click(function(){
        $(".team-details").slideToggle("slow");
        $(".team1-container").fadeOut();
        $(".team2-container").fadeOut();
        $(".team3-container").fadeOut();
    });

    $(".team1").hover(function(){
    	$(".team1-container").fadeIn();
    	$(".team2-container").fadeOut();
    	$(".team3-container").fadeOut();
    });	

    $(".team2").hover(function(){
    	$(".team1-container").fadeOut();
    	$(".team2-container").fadeIn();
    	$(".team3-container").fadeOut();
    });	

    $(".team3").hover(function(){
    	$(".team1-container").fadeOut();
    	$(".team2-container").fadeOut();
    	$(".team3-container").fadeIn();
    });	
});