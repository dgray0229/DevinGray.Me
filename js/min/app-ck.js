$(".slideIn").hide().show("slow"),$(".spoiler p").hide(),$(".spoiler").prepend('<button class="button">Description</button><br>'),$("button").click(function(){$(".spoiler p").fadeToggle("slow")});var $overlay=$('<div id="overlay"></div>'),$image=$("<img>"),$caption=$("<p></p>");$overlay.append($image),$overlay.append($caption),$("body").append($overlay),$("#gallery a").click(function(e){e.preventDefault();var t=$(this).attr("href");$image.attr("src",t),$overlay.fadeIn("slow");var a=$(this).children("img").attr("alt");$caption.text(a)}),$overlay.click(function(){$overlay.fadeOut("slow")});var $select=$("<select></select>");$("#menu").append($select),$("#menu a").each(function(){var e=$(this),t=$("<option></option>");e.hasClass("selected")&&t.prop("selected",!0),t.val(e.attr("href"));var a=e.text();t.text(a),$select.append(t)}),$select.change(function(){window.location=$select.val()});