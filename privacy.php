<?php 
	require 'library/functions.php'; 
	require 'library/facebook.php'; 
	$facebook = new Facebook(array( 'appId' => '125840664189504', 'secret' => '6790c4efd930a327aae18515c23a79c7', 'cookie' => true, )); 
	$user = $facebook->getUser(); 
	if ($user) { $logoutUrl = $facebook->getLogoutUrl(); 
	} else { $loginUrl = $facebook->getLoginUrl(array( 'scope' => 'user_photos,friends_photos' )); } 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Privacy Policy</title>
		<LINK REV="made" href="mailto:andrew.fasch@gmail.com" />
		<META NAME="keywords" CONTENT="meme, meme generator, meme friend, memefriend, memefriend.com, facebook memes, memes from facebook images, friend meme, friendmeme" />
		<META NAME="description" CONTENT="A place where you can create memes from your pictures on Facebook. Because your friends are funnier than pictures of cats and frogs." />
		<META NAME="author" CONTENT="JT Hamrick" />
		<META NAME="ROBOTS" CONTENT="ALL" />
		<link rel="icon" type="image/png" href="http://memefriend.com/favicon.png" />
		<link href="css/reset.css" media="screen" type="text/css" rel="stylesheet" />
		<link href="css/style.css" media="screen" type="text/css" rel="stylesheet" />
		<!--[if IE]><link rel="stylesheet" type="text/css" href="css/all-ie-only.css" /><![endif]-->
		<!--<script type="text/javascript">var _gaq=_gaq||[];_gaq.push(["_setAccount","UA-6340872-7"]);_gaq.push(["_setDomainName","memefriend.com"]);_gaq.push(["_trackPageview"]);(function(){var b=document.createElement("script");b.type="text/javascript";b.async=true;b.src=("https:"==document.location.protocol?"https://ssl":"http://www")+".google-analytics.com/ga.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(b,a)})();
</script>-->
	</head>
	<body id="privacy">
		<div id="container">
			<?php include('templates/header.php') ?>
			<?php include('templates/navigation.php') ?>
			<?php include('templates/announcement.php') ?>
			<table id="body-table">
				<tr>
					<td>
						<div class="privacy">
							<p>MemeFriend takes the private nature of your personal information very seriously. This Privacy Policy  describes how we treat the information we collect when you visit and use the website available at MemeFriend.com (the “Website”) and is made available under the Creative Commons Sharealike license. Please read this notice very carefully.</p>
							<h2>Website Visitors</h2>
							<p>Like most website operators, MemeFriend collects non-personally-identifying information of the sort that web browsers and servers typically make available, such as the browser type, language preference, referring site, and the date and time of each visitor request. MemeFriend’s purpose in collecting non-personally identifying information is to better understand how MemeFriend’s visitors use its Website. From time to time, MemeFriend may release non-personally-identifying information in the aggregate, e.g., by publishing a report on trends in the usage of its Website.</p>
							<h2>Gathering of Personally-Identifying Information</h2>
							<p>Certain visitors to the Website choose to interact with MemeFriend in ways that require MemeFriend to gather personally-identifying information. MemeFriend collects such information only insofar as is necessary or appropriate to fulfill the purpose of the visitor’s interaction with MemeFriend. MemeFriend does not disclose personally-identifying information other than as described below. And visitors can always refuse to supply personally-identifying information, with the caveat that it may prevent them from engaging in certain website-related activities.</p>
							<p>MemeFriend does not collect personally identifiable information from children under the age of 13. If you believe that a child has provided MemeFriend with personally identifiable information without the consent of his or her parent or guardian, please contact us at contact@memefriend.com. If MemeFriend becomes aware that a child under age 13 has provided us with personally identifiable information, we will delete such information.</p>
							<h2>Facebook User Information</h2>
							<p>MemeFriend may collect information from your facebook account upon login. When you allow the MemeFriend appliacation to collect such information all data is subject to this Privacy Policy. The following personally identifying information will be collected and used for processes in the Website only. None of the information will be shared with persons outside MemeFriend per this Privay Policy.</p>
							<p>Facebook User Information Collected:</p>
							<p>-	User Id</p>
							<h2>Aggregated Statistics</h2>
							<p>MemeFriend may collect statistics about the behavior of visitors to the Website. MemeFriend may display this information publicly or provide it to others. However, MemeFriend does not disclose personally-identifying information other than as described below. </p>
							<h2>Protection of Certain Personally-Identifying Information</h2>
							<p>MemeFriend discloses potentially personally-identifying and personally-identifying information only to those of its employees, contractors and affiliated organizations that (i) need to know that information in order to process it on MemeFriend’s behalf or to provide services available at the Website, and (ii) that have agreed not to disclose it to others. Moreover, if MemeFriend or substantially all of its assets were acquired, or in the unlikely event that MemeFriend goes out of business or enters bankruptcy, user information would be one of the assets that is transferred or acquired by a third party. You acknowledge that such transfers may occur, and that any acquiror of MemeFriend may continue to use your personal and non-personal information only as set forth in this policy. Otherwise, MemeFriend will not rent or sell potentially personally-identifying and personally-identifying information to anyone.</p>
							<p>Other than to its employees, contractors and affiliated organizations or as described above, MemeFriend discloses potentially personally-identifying and personally-identifying information only when required to do so by law, or when MemeFriend believes in good faith that disclosure is reasonably necessary to protect the property or rights of MemeFriend, third parties or the public at large. If you send us a request for removal of a photo or a contact message, we reserve the right to publish it in order to help us clarify or respond to your request or to help us support other users. MemeFriend takes all measures reasonably necessary to protect against the unauthorized access, use, alteration or destruction of potentially personally-identifying and personally-identifying information.</p>
							<p>You should also be aware that if you submit information to “chat rooms,” “forums” or “message boards” such information becomes public information, meaning that you lose any privacy rights you might have with regards to that information. Such disclosures may also increase your chances of receiving unwanted communications.</p>
							<p>For users outside the United States, please note that any personally-identifiable information you enter into the Website will be transferred out of your country and into the United States. You consent to such transfer through your use of the Website. You also warrant that you have the right to transfer such information outside your country and into the United States.</p>
							<h2>Links to Third Party Sites</h2>
							<p>This Privacy Policy only applies to information collected by MemeFriend. This Privacy Policy does not apply to the practices of companies that MemeFriend does not own or control, or employees that MemeFriend does not manage. The Website contains links to third party websites. Any information you provide to, or that is collected by, third-party sites may be subject to the privacy policies of those sites, if any. We encourage you to read such privacy policies of any third-party sites you visit. It is the sole responsibility of such third parties to adhere to any applicable restrictions on the disclosure of your personally-identifying information, and MemeFriend and its affiliates shall not be liable for wrongful use or disclosure of your personally-identifying information by any third party.</p>
							<h2>Security</h2>
							<p>All non-personally-identifying information, potentially personally-identifying and personally identifying-information described above is stored on restricted database servers.</p>
							<h2>Privacy Policy Changes</h2>
							<p>Although most changes are likely to be minor, MemeFriend may change its Privacy Policy from and in MemeFriend’s sole discretion. If we do then we’ll notify you by posting the amended policy on the Website. Use of information we collect now is subject to the Privacy Policy in effect at the time such information is collected.</p>
							<h2>Review and Access</h2>
							<p>Upon your request, we will provide you with a summary of the information we collect about you. Please send an e-mail to <a href="mailto:contact@memefriend.com"><u>contact@memefriend.com</u></a>.</p>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<?php include('templates/footer.php') ?>
					</td>
				</tr>
			</table>
		</div>
		<p class="copy">&copy; 2011 MemeFriend</p>
	</body>
</html>