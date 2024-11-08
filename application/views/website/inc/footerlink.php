<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/website/js/jquery/jquery-2.2.4.min.js')?>"></script>
<!-- <script src="js/bootstrap/4.js"></script> -->
<script src="<?= base_url('assets/website/js/plugins/plugins.js');?>"></script>
<script src="<?= base_url('assets/website/owlcarousel/owl.carousel.min.js');?>"></script>

     <script>
      $(document).ready(function(){
        var owl = $('#carouselE');
        owl.owlCarousel({
            loop:true,
            nav:false,
            // margin:10,
            autoplay:true,
            autoplayTimeout:4000,
            responsive:{
                0:{
                    items:1
                },
                375:{
                    items:1
                },
                600:{
                    items:1
                },            
                960:{
                    items:1
                },
                1200:{
                    items:1
                }
            }
        });
      });
    </script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-78616750-1"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-78616750-1');
</script>

<!-- Begin comScore Tag -->
<script>
  var comscore = comscore || [];
  _comscore.push({ c1: "2", c2: "36172251" });
  (function() {
    var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
    s.src = "https://sb.scorecardresearch.com/cs/36172251/beacon.js";
    el.parentNode.insertBefore(s, el);
  })();
</script>
<noscript>
  <img src="https://sb.scorecardresearch.com/p?c1=2&amp;c2=36172251&amp;cv=3.6.0&amp;cj=1">
</noscript>
<!-- End comScore Tag -->
<script>
 var comscore = comscore || [];
 _comscore.push({ c1: "2", c2: "", c3: "", c4: "" });

 (function() {
 var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
 s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
 el.parentNode.insertBefore(s, el);
 })();
</script>
<noscript>
 <img src="http://b.scorecardresearch.com/p?c1=2&c2=&c3=&c4=&c5=&c6=&c15=&cv=2.0&cj=1" />
</noscript>
<script>
 var comscore = comscore || [];
 _comscore.push({ c1: "2", c2: "1234567", c3: "", c4: “www.website.com/who-we-are.aspx” });

 (function() {
 var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
 s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
 el.parentNode.insertBefore(s, el);
 })();
</script>
<noscript>
 <img src="http://b.scorecardresearch.com/p?c1=2&c2=1234567&c3=&c4= www.newsofstates.com/who-weare.aspx&c5=&c6=&c15=&cv=2.0&cj=1" />
</noscript>


</body>
</html>    