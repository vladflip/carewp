header = $ '#header'

# header.sticky()

$(document).scroll ->
	scroll = $(this).scrollTop() > 150
	if scroll
		header.addClass 'header--sticky'
	else
		header.removeClass 'header--sticky'