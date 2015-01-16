function onLinkedInLoad() {
  IN.Event.on(IN, "auth", onLinkedInAuth);
}

//USER Authenticated
function onLinkedInAuth() {
  //api call for current user profile data
  IN.API.Profile("me").fields("firstName","lastName","headline","positions","industry",
            "location","pictureUrl","publicProfileUrl","emailAddress",
            "educations","dateOfBirth").result(profileData);
  //api call for current user connection data
  IN.API.Connections("me").fields("first-name", "last-name", "headline", "picture-url", "location", "public-profile-url").result(connectionsData);
}

//Profile API
function profileData(profiles) {
  var person = profiles.values[0];

  var first = person.firstName;
  var last = person.lastName;
  var avatar = person.pictureUrl;
  var headline = person.headline;
  var location = person.location.name;
  var emailAddress = person.emailAddress;
  var industry = person.industry;

  $("#avatar").append("<img src="+avatar+">");
  $(".first").text(first);
  $("#name").append( first+ " " + last );
  $(".headline").text(headline);
  $('#loc_statement').text(location);
  $('#emailAddress').text(emailAddress);
  $('#industry').text(industry);

}

//Connections API
function connectionsData(results) {  
  var count = results._count;
  $("#count").text(count);
}