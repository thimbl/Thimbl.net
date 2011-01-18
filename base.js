String.prototype.parseHashtag = function() {
	return this.replace(/[#]+[A-Za-z0-9-_]+/, function(t) {
		var tag = t.replace("#","%23")
		return t.link("http://search.twitter.com/search?q="+tag);
	});
};
String.prototype.parseUsername = function() {
	return this.replace(/[@]+[A-Za-z0-9-_]+/, function(u) {
		var username = u.replace("@","")
		return u.link("http://twitter.com/"+username);
	});
};
String.prototype.parseURL = function() {
	return this.replace(/[A-Za-z]+:\/\/[A-Za-z0-9-_]+\.[A-Za-z0-9-_:%&\?\/.=]+/, function(url) {
		return url.link(url);
	});
};

$(function() {  
    var html = "<ul>";  
  
    var tweeturl = "http://search.twitter.com/search.json?q=thimbl&callback=?";  
    $.getJSON(tweeturl, function(d) {
    	var feed = "<ul>";
    	var i = 0;
        while (i < 5) {
        	var image = d.results[i].profile_image_url;
        	var user = d.results[i].from_user;
        	var text = d.results[i].text.parseURL().parseUsername().parseHashtag();
        	feed += "<li style='font-size: 13px; clear: both; margin-bottom: 10px; height: 60px; '><img style='float: left; margin: 0px 10px 0px 10px;' src='" + image + "' />";
        	feed += "<span style='font-weight: bold; color: #e80279;'>" + user + "</span> " + text + "</li>";
        	i++;
        }
        feed += "</ul>";
        $('#left h2').after(feed);
		$('#left li a').css('color','#555');
    });  
}); 