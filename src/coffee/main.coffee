# $ ->
# 	$('#header nav').on 'click','a:not(.active)', (event) ->
# 		$('.active',event.delegateTarget).removeClass 'active'
# 		$(@).addClass 'active'

# // var url =window.location;
# // $("nav a").each(function() {
# //    if($(this).attr('href') == url){
# //       $(this).addClass('active');
# //    }
# // });

# tanya = ->
# 	if confirm "Anda yakin menghapus?"
# 		true
# 	else
# 		false

$('.tanda').on 'click',(event) ->
	if confirm "Anda yakin melakukan ini?"
		true
	else
		false

$ ->
	url = window.location.search
	console.log(url)
	$('nav a').each ->
		if $(@).attr('href') == url	
			$(@).addClass('active')
		else
			$('#nav li').first ->
				a.addClass('active')

	$('.dropdown>ul').hide()
	
	$('.dropdown').click ->
		$('.dropdown>ul').slideToggle()

