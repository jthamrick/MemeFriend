			<footer id="footer">
				<div id="bottomAdvertisement">
					<script type="text/javascript"><!--
					google_ad_client = "ca-pub-1591856625609850";
					/* Footer Ad */
					google_ad_slot = "9960839848";
					google_ad_width = 728;
					google_ad_height = 90;
					//-->
					</script>
					<script type="text/javascript"
					src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
					</script>
				</div>
				<p class="copy">&copy; 2011 MemeFriend</p>
			</footer>
		</div>
		<script type="text/javascript">
		  (function() {
		    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		    po.src = 'https://apis.google.com/js/plusone.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		  })();
		</script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
		$(document).ready(function() {
		 //Declare the custom selector 'containsIgnoreCase'.
		      $.expr[':'].containsIgnoreCase = function(n,i,m){
		          return jQuery(n).text().toUpperCase().indexOf(m[3].toUpperCase())>=0;
		      };

		      $("#searchInput").keyup(function(){

		          $("#resultTable").find("td").hide();
		          var data = this.value.split(" ");
		          var jo = $("#resultTable").find("td");
		          $.each(data, function(i, v){
		               //Use the new containsIgnoreCase function instead
		               jo = jo.filter("*:containsIgnoreCase('"+v+"')");
		          });
		          jo.show();

		      }).focus(function(){
		          this.value="";
		          $(this).css({"color":"black"});
		          $(this).unbind('focus');
		      }).css({"color":"#C0C0C0"});
		  });
		</script>
	</body>
</html>