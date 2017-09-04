<footer>
  <p>Copyright 2017 | Physio123.co.uk</p>
  <p><a href="#">Report an issue</a></p>
</footer>

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
var copyCode = new Clipboard('.btn');
copyCode.on('success', function(event) {
        event.clearSelection();
        event.trigger.style.backgroundColor = "#2ecc71";
        event.trigger.textContent = 'Copied';
    window.setTimeout(function() {
        event.trigger.style.backgroundColor = "#139DD9";
        event.trigger.innerHTML = '<img src="/images/copy-content.svg" >Copy code';
    }, 1000);
});
</script>
<script>
window.onload = (function(){ prettyPrint(); });
</script>
  </body>
</html>
