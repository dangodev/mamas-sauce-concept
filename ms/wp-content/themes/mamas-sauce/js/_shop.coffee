# *************************************
#
#   Shop
#   -> Bindings for Shopify
#
# *************************************

# -------------------------------------
#   Product Image Swap
# -------------------------------------

variants = $('#variants')
if variants.length
  variants.on('change', () ->
    val = variants.val()
    i = variants.find('option[value=' + val + ']').index()
    $('.cell--shopGallery .cell-image img').not(':eq(' + i + ')').hide()
    $('.cell--shopGallery .cell-image img:eq(' + i + ')').show()
  )

if $('.cell--shopGallery').length
  $('.cell--shopGallery .card--mini').on('click', (e) ->
    i = $(e).index('.has-cards')
    console.log i
    $('.cell--shopGallery .cell-image img').not(':eq(' + i + ')').hide()
    $('.cell--shopGallery .cell-image img:eq(' + i + ')').show()
    e.preventDefault()
  )