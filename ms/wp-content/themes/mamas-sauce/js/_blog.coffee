# *************************************
#
#   Blog
#   -> Bindings for the MS blog
#
# *************************************

# -------------------------------------
#   Blog Pagination
# -------------------------------------

hash = window.location.hash
page = parseInt hash.replace('#page','') # note: this marks current page, not next page, so loading functions utilize page + 1
nav = $('.article-navigation a')

# ----- Functions ----- #

blogload = (p) ->
  unless p > 1
    p = 1
  href = window.location.protocol + '//' + window.location.host + window.location.pathname + 'page/' + (p+1) + '/' + window.location.search + ' .has-articles'
  $('.has-articles:eq(0)').append '<a class="article-bookmark" name="page' + (p+1) + '">Page ' + (p+1) + '</a><div class="article-loader"></div>'
  y = $('.article-bookmark').last().offset().top
  $('.article-loader').last().load href, ->
    $('html, body').animate {scrollTop: y}, 800, ->
      window.location.hash = 'page' + p
    p++
    navUpdate p
    page = p
    fbComment() # count FB comments
    twttr.widgets.load() # load Tweets

fbComment = ->
  $('a.article-comment:not(.has-count)').each (i, e) ->
    query = encodeURIComponent("SELECT comment_count FROM link_stat WHERE url = '" + e.origin + e.pathname + "'")
    $.ajax {
      url: 'https://api.facebook.com/method/fql.query?format=json&query=' + query
      type: 'GET'
      timeout: 4000
      success: (data) ->
        if parseInt(data.comment_count)
          e.html 'Comment (' + data.comment_count + ')'
            .addClass 'has-count'
    }

navUpdate = (p) ->
  if $('.article-loader').last().html().length is 0
    nav.html('No more posts').attr('href', '#').off()
  else
    pathname = nav[0].pathname.split '/'
    pathname[pathname.length - 2] = p+1
    pathname = pathname.join '/'
    nav.attr 'href', nav[0].origin + pathname + nav[0].search

# ----- Init ----- #

fbComment()

if page
  blogload page-1

# ----- Bindings ----- #

# Note: pathname will always end in '/' thanks to WP
nav.on 'click', (e) ->
  blogload page
  e.preventDefault()
