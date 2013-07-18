/**
 * References appear in the comments throughout the code on this page:
 * 
 * 
 * 
 * @author paula
 */                
/*function pressButton()
		
//		{
        // when this function is called when the button is pressed it will output text given
       //in alert parenthesis
        window.alert("This is a functioning example of JS basic button, Welcome to the test Arsenal Fan APP");
		}
*/
/*Based on w3schools examples this is the function associated with the AJAX call to change text on a page
A txt file has been created and dropped into the appropriate folder.
The text inside should appear when the button is clicked on the second page.
The code below calls this ajax file on click and replaces the text written in the div with that on file*/
/*function loadXMLDoc()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari as per the example on W3schools
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5 as per the example on w3Schools
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("testAJAX").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","ajax/ajax_info.txt",true); 
//The AJAX file which replaces the text on event has been placed inside it's own folder creating the path found here
xmlhttp.send();
}
     
function facebookProfile() {
				var fburl = "http://graph.facebook.com/jesse.weir.94/callback=?";
				var url = "https://graph.facebook.com/100005727370431";
				$(document).ready(function(){
	$.getJSON(url, function(data){
     	//var name = data["name"];
     	//var age = data["age"];
     	$("#profile").append("<h5>"+data["name"]+"</h5>");
     	//$("#profile").append("<h5>"+data["first_name"]+"</h5>");
     	//$("#profile").append("<h5>"+data["last_name"]+"</h5>");
     	$("#profile").append("<h5>"+data["link"]+"</h5>");
     	$("#p     rofile").append("<h5>"+data["username"]+"</h5>");
     	//$("#profile").append("<h5>"+data["gender"]+"</h5>"); 
	});
});
}

/*form validation which goes to seperate site*/    
function validate() {
var count = 2;
var un = document.myform.username.value;
var pw = document.myform.pword.value;
var valid = false;
var unArray = ["Paula", "Jason", "Deborah"];  // hardcoded array to use for sample of validation without server side security
var pwArray = ["Password1", "Password2", "Password3"];  // the hardcoded passwords without server;

for (var i=0; i <unArray.length; i++) {
if ((un == unArray[i]) && (pw == pwArray[i])) {
valid = true;
break;
}
}

if (valid) {
alert ("Login was successful");
window.location = "http://eventovate.webeldev.com/dev/sprint1/#page";
return false;
}

var t = " tries";
if (count == 1) {t = " try"}

if (count >= 1) {
alert ("Invalid username and/or password.  You have " + count + t + " left.");
document.myform.username.value = "";
document.myform.pword.value = "";
setTimeout("document.myform.username.focus()", 25);
setTimeout("document.myform.username.select()", 25);
count --;
}

else {
alert ("Still incorrect! You have no more tries left!");
document.myform.username.value = "No more tries allowed!";
document.myform.pword.value = "";
document.myform.username.disabled = true;
document.myform.pword.disabled = true;
return false;
}

}

/*form validation function*/

/*function validateForm()
{
var x=document.forms["Form"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
}

/*google map funcion
function initialize()
{
  var mapProp = {
    center: new google.maps.LatLng(51.553647,-0.104971),
    zoom:5,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
*/
/*var myCenter=new google.maps.LatLng(51.553647,-0.104971);

function initialize(){
        googleMap = document.getElementById('googleMap')
googleMap.style.height = '300px';
googleMap.style.width = '400px';
var mapProp = {
  center:myCenter,
  zoom:8,
  mapTypeId:google.maps.MapTypeId.HYBRID
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);



/*function loadScript()
{
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyBJBvWB1bVn0oIP24VxjhsoB6Mkn4TUY7s&sensor=true&callback=initialize";
  document.body.appendChild(script);
}

window.onload = loadScript;

/*
function listTweets(data) {
	console.log(data);
	var output= '<ul data-role="listview" data-theme="a">';
	
	$.each(data,function(key, val){
		var text=data[key].text;
		var thumbnail=data[key].user.profile_image_url;
		var name = data[key].user.name;
		
		output +='<li>';
		output +='<img src="'+thumbnail+'" alt="Photo of ' +name+ '" >;
		output += '<div>' +text+ '</div>;
		output += '<li>';
		})
		output +='<ul>';
		$('#tweetlist').html(output);
}
*/




        