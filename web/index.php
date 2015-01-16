
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Resource Management System</title>
 	<!--JS Files -->
 	
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-1.11.0.js"></script>

	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script type="text/javascript" src="js/d3.v3.min.js"></script>

	<script type="text/javascript" src="js/knockout-3.2.0.js"></script>
	<script type="text/javascript" src="js/knockout.js"></script>

	<!-- Bootstrap Core CSS -->

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Custom CSS -->
	<link type="text/css" rel="stylesheet" href="css/clock.css"/>
    <link type="text/css" rel="stylesheet" href="css/simple-sidebar.css"/>
<style>

.link {
  stroke: #ccc;
}

.node text {
  pointer-events: none;
  font: 10px sans-serif;
}

</style>
     <style>
	<!--Clock font-->
	@font-face 
	{
    font-family: 'digital-7regularmono';
    src: url('fonts/digital-7-webfont.eot');
    src: url('fonts/digital-7-webfont.eot?#iefix') format('embedded-opentype'),
         url('fonts/digital-7-webfont.woff') format('woff'),
         url('fonts/digital-7-webfont.ttf') format('truetype'),
         url('fonts/digital-7-webfont.svg#digital-7regular') format('svg');
    font-weight: normal;
    font-style: normal;
	}
	#clock {font-family: 'digital-7regular'; font-size:70px;

	}
	</style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link media="all" type="text/css" href="../css/jqueryui.css" rel="stylesheet"/>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.5b1.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.7/jquery-ui.min.js"></script>  

<script type="text/javascript" src="http://platform.linkedin.com/in.js">
  api_key: 77hxp9ncheriwd
  onLoad: onLinkedInLoad
</script>
  
<script type="text/javascript">

function loadData() {

var div = document.getElementById("peopleSearchForm");
 
     
     div.innerHTML += '<form action="javascript:PeopleSearch();">' +
                      '<font color="F6358A">Keyword:</font> <input id="keywords" size="30" value=" " type="text">' +
                      '<font color="F6358A"><input type="submit" value="Search!" /></font></form>';
	}
	
	function PeopleSearch(keywords) {
	var keywords = document.getElementById('keywords').value;
  IN.API.PeopleSearch()
         .fields("firstName", "lastName", "distance", "publicProfileUrl","pictureUrl")
         .params({"keywords": keywords, "count": 10, "sort": "distance"})
           .result(function(result) {
	  		profHTML = "<h4><u><b>Search results for keyword "+keywords+"</u></b></h4></br><p>Due to the restrictions imposed by Linkedin API, we can only fetch the first 10 results that matches your search request.<p>";
      		for (var index in result.people.values) {
          		profile = result.people.values[index]
          		if (profile.pictureUrl) {
              		profHTML += "<p><a href=\"" + profile.publicProfileUrl + "\">";
              		profHTML += "<img class=img_border height=50 align=\"center\" src=\"" + profile.pictureUrl + "\"></a>"; 
              		profHTML += "<font color='F6358A'><p> Name: " + profile.firstName + " " + profile.lastName + "</br></font> (Profile distance: " + profile.distance + ")</br> You can find me <a href=\"" + profile.publicProfileUrl+"\">here</a></p>";  
          		}
          	}   
      $("#search").html(profHTML);
      });
       
}

</script>
</head>

<body>
 <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#first">
						<font color="pink"><u>Technical-Linked Skills</u></font>                                            
                    </a>
                </li>
                <li>
                    <a href="#first"><font color="F6358A">Introduction</font></a>
                </li>
               <li>
                    <a href="#second"><font color="F6358A">Developers</font></a>
                </li>
                 <li>
                    <a href="#third"><font color="F6358A">Linkedin Search</font></a>
                </li>
                <li>
                    <a href="#fourth"><font color="F6358A">Data Analysis</font></a>
                </li>
                <li>
            	  <div id="clock">
     			 <div>
       						<script src="js/clock.js"></script>
     			 </div>
  			  </li>
            </ul>
        </div>
        
        <section id="first">
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 align="center"><font color="#F6358A">Technical - Linked Skills </h1></font> 
					
					<p>Every organization needs a system where they can query and find resource that can fit their requirement. We had developed an application that is one of its kind and can help you to fetch and render the information from Linkedin using a particular keyword. This works just in par as the search tab in the actual Linkedin application but due to the restrictions imposed on the Linkedin developers we cannot render more than 10 search results. Along with the search feature we have also added a feature for better and interactive form of data viewing in the application. This helps render more amount of clear and precise data in a smaller space.</p>
					
					<p> <b>The rendered data can be useful in the following ways:</b></p>
					<ul style="list-style-type:square">
					<li> Fetch data based on First name, Last name, Location, Headline, Skills listed for the connection or possibly any company he has worked for.</li>
					<li> Navigate to the user's linkedin profile for complete information about the connections fetched</li>
					<li> We have been able to fetch information from 1st and 2nd degree connections of the user. So if not directly connected, you will definitely get the data from the connections of your connections giving you a wider scope of search.</li>
					<li> We have graphically displayed the information for you to better and compactly understand the data that we have fetched for you</li>
					</ul>
					<p><b> We have used the following technologies in order to develop the application:</b></p>
					<ul style="list-style-type:square">
					<li> <b><u>Trello:</b></u> Trello has enabled us to divide the workflow into user-stories and assign into individual team members. It also enables us to assign a due date for the tasks and commment about each of the tasks. It has a very user friendly front - end and provides a list of features that enables to organize your user requirements and divide the workflow. It keeps a check on the deadlines and also keeps you updated through notification. This application has really worked for us to keep us on track with the project development.</li></br>
					<li> <b><u>Linkedin API:</b></u>LinkedIn has created a JS API called Connect to help you get around the authentication and structure, so that you can focus on the logic and presentation of your application without spending too much time considering the back end. The Connect framework does all of the authentication work for you, and loads the things you need in order to get things working in your application.</li></br>
					<li> <b><u>Heroku:</b></u> Heroku is a cloud application platform – a new way of building and deploying web apps. It is used to let app developers spend their time on their application code, not managing servers, deployment, ongoing operations, or scaling.</li></br>
					<li> <b><u>D3 Library:</b></u>D3.js is a JavaScript library that uses digital data to drive the creation and control of dynamic and interactive graphical forms which run in web browsers. Embedded within an HTML webpage, the JavaScript D3.js library uses pre-built JavaScript functions to select elements, create SVG objects, style them, or add transitions, dynamic effects or tooltips to them. These objects can also be widely styled using CSS. Large datasets can be easily bound to SVG objects using simple D3 functions to generate rich text/graphic charts and diagrams. The data can be in various formats, most commonly JSON and comma-separated values (CSV).</li>
					</ul>
					
					<footer>
					<p align="center"><a href="https://github.ncsu.edu/CSC510-Fall2014/Technical-LinkedSkills"  target="_blank" class="btn btn-default"><font color="#F6358A">Github</font></a></p>
					<p align="center"><a href="https://trello.com/b/Gnhsp8lt/se-final-project-board-priyan-gshah"  target="_blank" class="btn btn-default"><font color="#F6358A">Trello Board</font></a></p>							
					</footer>
					</div>
                </div>
            </div>
        </div>
</section>
	<section id="second">
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
					<h1 align="center"><font color="#F6358A">Developers</h1></font>
					<p><script type="IN/MemberProfile" data-id="https://www.linkedin.com/in/gatishah" data-related="false" data-format="inline"></script></p>
					<p><script type="IN/MemberProfile" data-id="https://www.linkedin.com/in/priyankashankaran" data-related="false" data-format="inline"> </script>  </p>
					
					
					</div>
                </div>
            </div>
        </div>
</section>
    <section id="third">
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 align="center"><font color="#F6358A">Linkedin Search</h1></font> 

      <div align="center"><script type="IN/Login" data-onAuth="loadData"> </script> </div>
 <div align="center" id="peopleSearchForm"></div>
      <div align="center" id="search"></div>
	
					</div>
                </div>
            </div>
        </div>
</section>
        <section id="fourth">
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 align="center"><font color="#F6358A">Data Analysis </h1></font> 
					
<p align="center"><a href="https://morning-forest-9856.herokuapp.com"  target="_blank" class="btn btn-default"><font color="#F6358A">Dynamic Graphs</font></a></p>
<script src="http://d3js.org/d3.v3.min.js"></script>
<script>

var width = 1200,
    height = 800

var svg = d3.select("body").append("svg")
    .attr("width", width)
    .attr("height", height);

var force = d3.layout.force()
    .gravity(.05)
    .distance(100)
    .charge(-100)
    .size([width, height]);

d3.json("graph.json", function(error, json) {
  force
      .nodes(json.nodes)
      .links(json.links)
      .start();

  var link = svg.selectAll(".link")
      .data(json.links)
    .enter().append("line")
      .attr("class", "link");

  var node = svg.selectAll(".node")
      .data(json.nodes)
    .enter().append("g")
      .attr("class", "node")
      .call(force.drag);

  node.append("image")
      .attr("xlink:href", "https://linkedin.com/favicon.ico")
      .attr("x", -8)
      .attr("y", -8)
      .attr("width", 16)
      .attr("height", 16);

  node.append("text")
      .attr("dx", 12)
      .attr("dy", ".35em")
      .text(function(d) { return d.name });

  force.on("tick", function() {
    link.attr("x1", function(d) { return d.source.x; })
        .attr("y1", function(d) { return d.source.y; })
        .attr("x2", function(d) { return d.target.x; })
        .attr("y2", function(d) { return d.target.y; });

    node.attr("transform", function(d) { return "translate(" + d.x + "," + d.y + ")"; });
  });
});

</script>

					</div>
                </div>
            </div>
        </div>
</section>
<div align="center"><script src="js/clock.js"></script></div>
<script src="http://cdnjs.cloudflare.com/ajax/libs/backbone.js/0.9.2/backbone-min.js" type="text/javascript"></script>
</body>
</html>