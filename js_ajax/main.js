//Create GLOBAL variable below here on line 2
var global_result;
var movie_info1;
var movie_info1_image;
var movie_info1_image_3rd;
var movie_info_3rd_img = [];
var movie_info_td = [];

$(document).ready(function(){
	$('button').click(function(){
		console.log('click initiated');
		$.ajax({
			dataType: 'json',
			url: 'http://ax.itunes.apple.com/WebObjects/MZStoreServices.woa/ws/RSS/topMovies/json',
			success: function(result) {
				console.log('AJAX Success function called, with the following result:', result);

				// feature set 2
				global_result = result;
				movie_info1 = global_result.feed.entry[0];
				movie_info1_image = global_result.feed.entry[0]["im:image"][0].label;
				movie_info1_image_3rd = global_result.feed.entry[0]["im:image"][2].label;

				// feature set 3
				var movie_info = global_result.feed.entry;
				for (var i=0; i < movie_info.length-1; i++) {
					movie_info_3rd_img.push(movie_info[i]["im:image"][2].label);
					var img_tag = $("<img>").attr("src", movie_info_3rd_img[i]);
					$("#main").append(img_tag);

					// features set 4
					movie_info_td.push(movie_info[i].title.label);
					$("#main").append(movie_info[i].title.label,"<br>");
					$("#main img").css("margin","10px");

				}

			}
		});
		console.log('End of click function');
	});
});
