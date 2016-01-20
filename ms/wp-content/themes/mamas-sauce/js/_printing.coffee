# *************************************
#
#   Printing
#   -> Binding for print page
#
# *************************************

$(document).ready ->

# -------------------------------------
#   1. Make tile clickable (without breaking standards)
# -------------------------------------

  print = $('.card--printing')
  if print.length
    print.on 'click', (e) ->
      href = $(e.target).closest('.card--printing').data('href')
      window.location = href unless href.length is 0

# -------------------------------------
#   2. Bind checkbox filters
# -------------------------------------

  selected = []

  check = $('.print-filter')
  if check.length
    check.change (e) ->
      selected = []
      check.filter(':checked').each (i, e) ->
        selected.push $(e).data('type')
      filter()
      e.preventDefault()

  filter = () ->
    if selected.length
      print.addClass('is-hidden')
      $.each selected, (i, e) ->
        print.filter('.type-' + e).removeClass('is-hidden')
    else
      print.removeClass('is-hidden')

    # Show .card--none

    unless print.filter(':visible').length
      $('.card--none').removeClass('is-hidden')
    else
      $('.card--none').addClass('is-hidden')

  filter()