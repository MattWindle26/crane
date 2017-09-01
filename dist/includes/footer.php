  <script src="/js/main.js" charset="utf-8"></script>
  <script src="/js/isotope.js" charset="utf-8"></script>
  <script>
  // init Isotope
  var $grid = $('.grid').isotope({
    // options
  });
  // filter items on button click
  $('nav').on( 'click', 'a', function() {
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });
  });
</script>


<script src="/js/prettify.js"></script>
<script src="/js/clipboard.min.js"></script>
<script>
new Clipboard('.btn', {
    text: function(trigger) {
        return trigger.getAttribute('aria-label');
    }
});
</script>
<script>
window.onload = (function(){ prettyPrint(); });
</script>
  </body>
</html>
