<?php 
	require 'library/functions.php'; 
	require 'library/facebook.php'; 
	$facebook = new Facebook(array( 'appId' => 'ENTER YOUR FACEBOOK APP ID HERE', 'secret' => 'ENTER YOUR FACEBOOK APP SECRET HERE', 'cookie' => true, ));
	$user = $facebook->getUser(); 
	if ($user) { $logoutUrl = $facebook->getLogoutUrl(); 
	} else { $loginUrl = $facebook->getLoginUrl(array( 'scope' => 'user_photos,friends_photos' )); } 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Terms &amp; Conditions</title>
		<LINK REV="made" href="mailto: enter email address here" />
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
	<body id="terms">
		<div id="container">
			<?php include('templates/header.php') ?>
			<?php include('templates/navigation.php') ?>
			<?php include('templates/announcement.php') ?>
			<table id="body-table">
				<tr>
					<td>
						<div class="privacy">
							<h1>Accepting the Terms of Service</h1>
							<h2>Definitions</h2>
							<p>MemeFriend- memefriend.com website</p>
							<p>User- Persons who use memefriend.com website</p>
							<p>The purpose of this website, www.memefriend.com (the “Site”), owned and operated by HFM Limited. (“MemeFriend”), a Texas Partnership, is to provide web publishing services. Please read these terms of service (“Agreement”) carefully before using the Site or any services provided on the Site (collectively, “Services”). By using or accessing the Services, you agree to become bound by all the terms and conditions of this Agreement. If you do not agree to all the terms and conditions of this Agreement, do not use the Services. The Services are accessed by You (“User” or “You”) under the following terms and conditions:</p>
							<h2>1. Access to the Services</h2>
							<p>Subject to the terms and conditions of this Agreement, MemeFriend may offer to provide the Services, as described more fully on the Site, and which are selected by User, solely for User’s own use, and not for the use or benefit of any third party. Services shall include, but not be limited to, any services MemeFriend performs for User, as well as the offering of any Content (as defined below) on the Site. MemeFriend may change, suspend or discontinue the Services at any time, including the availability of any feature, database, or Content. MemeFriend may also impose limits on certain features and services or restrict User’s access to parts or all of the Services without notice or liability. MemeFriend reserves the right, at its discretion, to modify these Terms of Service at any time by posting revised Terms of Service on the Site and by providing notice via e-mail, where possible, or on the Site. User shall be responsible for reviewing and becoming familiar with any such modifications. Use of the Services by User following such modification constitutes User's acceptance of the terms and conditions of this Agreement as modified.</p>
							<p>User certifies to MemeFriend that if User is an individual (i.e., not a corporate entity), User is at least 13 years of age. No one under the age of 13 may provide any personal information to or on MemeFriend (including, for example, a name, address, telephone number or email address). User also certifies that it is legally permitted to use the Services and access the Site, and takes full responsibility for the selection and use of the Services and access of the Site. This Agreement is void where prohibited by law, and the right to access the Site is revoked in such jurisdictions. MemeFriend makes no claim that the Site may be lawfully viewed or that Content may be downloaded outside of the United States. Access to the Content may not be legal by certain persons or in certain countries. If You access the Site from outside the United States, You do so at Your own risk and You are responsible for compliance with the laws of Your jurisdiction.</p>
							<p>MemeFriend will use reasonable efforts to ensure that the Site and Services are available twenty-four hours a day, seven days a week. However, there will be occasions when the Site and/or Services will be interrupted for maintenance, upgrades and repairs or due to failure of telecommunications links and equipment. Every reasonable step will be taken by MemeFriend to minimize such disruption where it is within MemeFriend’s reasonable control.</p>
							<p>MemeFriend has the right to discontinue service to any User at any time for acts deemed undesirable.</p>
							<p>User shall be responsible for obtaining and maintaining any equipment or ancillary services needed to connect to, access the Site or otherwise use the Services, including, without limitation, modems, hardware, software, and long distance or local telephone service. User shall be responsible for ensuring that such equipment or ancillary services are compatible with the Services.</p>
							<h2>2. Site Content</h2>
							<p>The Site and its contents are intended solely for the use of MemeFriend Users and may only be used in accordance with the terms of this Agreement. All materials displayed or performed on the Site, including, but not limited to text, graphics, logos, tools, photographs, images, illustrations, software or source code, audio and video, animations and themes are the property of MemeFriend and/or third parties and are protected by United States and international copyright laws. All trademarks, service marks, and trade names are proprietary to MemeFriend and/or third parties. User shall abide by all copyright notices, information, and restrictions contained in any Content accessed through the Services.</p>
							<p>User may download or copy the Content, and other items displayed on the Site for download, for personal use only, provided that User maintains all copyright and other notices contained in such Content. Downloading, copying, or storing any Content for other than personal, noncommercial use is expressly prohibited without prior written permission from MemeFriend, or from the copyright holder identified in such Content's copyright notice. In the event You download software from the Site, the software, including any files, images incorporated in or generated by the software, and the data accompanying the software (collectively, the “Software”) is licensed to You by MemeFriend or third party licensors for Your personal, noncommercial use, and no title to the Software shall be transferred to You. You may own the User Content on which the Software is recorded, but MemeFriend or third party licensors retain full and complete title to the Software and all intellectual property rights therein.</p>
							<h2>3. User Content</h2>
							<p>User shall own all User Content that User contributes to the Site, but hereby grants and agrees to grant MemeFriend a non-exclusive, worldwide, royalty-free, transferable right and license (with the right to sublicense), to use, copy, cache, publish, display, distribute, modify, create derivative works and store such User Content and to allow others to do so (“Content License”) in order to provide the Services. User warrants, represents and agrees User has the right to grant MemeFriend and the Site the rights set forth above. User represents, warrants and agrees that it will not contribute any User Content that (a) infringes, violates or otherwise interferes with any copyright or trademark of another party, (b) reveals any trade secret, unless User owns the trade secret or has the owner’s permission to post it, (c) infringes any intellectual property right of another or the privacy or publicity rights of another, (d) is libelous, defamatory, abusive, threatening, harassing, hateful, offensive or otherwise violates any law or right of any third party, (e) contains a virus, Trojan horse, worm, time bomb or other computer programming routine or engine that is intended to damage, detrimentally interfere with, surreptitiously intercept or expropriate any system, data or information, or (f) remains posted after User has been notified that such User Content violates any of sections (a) to (e) of this sentence. MemeFriend reserves the right to remove any User Content from the Site, suspend or terminate User’s right to use the Services at any time, or pursue any other remedy or relief available to MemeFriend and/or the Site under equity or law, for any reason (including, but not limited to, upon receipt of claims or allegations from third parties or authorities relating to such User Content or if MemeFriend is concerned that User may have breached the immediately preceding sentence), or for no reason at all.</p>
							<h2>4. Acceptable Content</h2>
							<p>The intent of this section is to clarify what we consider to be acceptable use of MemeFriend.</p>
							<p>If any content is found in violation of the following conditions it will be removoded from the Site within 24 hours. If the infriengments on this content policy are repeated you will be banned from accessing the Create a Meme function. We will do our best to work with you and any parties involved to resolve issues in a timely manner. We reserve the right to immediately suspend, without notice, any content, account, or IP address which we determine to be systematically generated, spam, or potentially damaging to our service or infrastructure.</p>
							<p>The following condition are in violation of the Content Policy set forth by MemeFriend. If any content is found in violation of this policy set forth, it will be removed immidiatly</p>
							<ul>
								<li><span class="bold">Redundant Content.</span> MemeFriend is not intended to be a photo storage service or an all-purpose content aggregator. Users who abuse the import service or aggregate content in way deemed not acceptable by MemeFriend are likely to be suspended.</li>
								<li><span class="bold">Illegal Use.</span> MemeFriend may not be used for illegal purposes. </li>
								<li><span class="bold">Spam.</span> Users that do not publish meaningful content, use deceptive means to generate revenue or traffic, or whose primary purpose is affiliate marketing, will be suspended.</li>
								<li><span class="bold">Identity Theft and Privacy.</span> Users that misleadingly appropriate the identity of another person are not permitted. Users may not post other people's personally identifying or confidential information, including but not limited to credit card numbers, Social Security Numbers, and driver's and other license numbers. You may not post information such as other people's passwords, usernames, phone numbers, addresses and e-mail addresses unless already publicly accessible on the Web.</li>
								<li><span class="bold">Hate Content, Defamation, and Libel.</span> Hate speech and other objectionable content that is unlawful, defamatory, and fraudulent. </li>
								<li><span class="bold">Disruptions and Exploits.</span> We will terminate accounts and block addresses of those who attempt unauthorized use of MemeFriend.com.</li>
								<li><span class="bold">Copyright.</span> Using copyrighted material does not constitute infringement in all cases. In general, however, users should  not use copyrighted content without the permission of those who created it. It is our policy to respond to notices of alleged infringement that comply with the Digital Millennium Copyright Act ("DMCA").</li>
								<li><span class="bold">Sexually Explicit Content.</span> Any pictures deemed sexually explicit.</li>
							</ul>
							<h2>5. Restrictions</h2>
							<p>User is responsible for all of its activity in connection with the Services and accessing the Site. Any fraudulent, abusive, or otherwise illegal activity or any use of the Services or Content in violation of this Agreement may be grounds for termination of User’s right to Services or to access the Site. User may not post or transmit, or cause to be posted or transmitted, any communication or solicitation designed or intended to obtain password, account, or private information from any MemeFriend User.</p>
							<p>Use of the Site or Services to violate the security of any computer network, crack passwords or security encryption codes, transfer or store illegal material including that are deemed threatening or obscene, or engage in any kind of illegal activity is expressly prohibited. Under no circumstances will User use the Site or the Service to (a) send unsolicited e-mails, bulk mail, spam or other materials to Users of the Site or any other individual, (b) harass, threaten, stalk or abuse any person or party, including other Users of the Site, (c) create a false identity or to impersonate another person, or (d) post any false, inaccurate or incomplete material or delete or revise any material that was not posted by You.</p>
							<h2>6. Warranty disclaimer</h2>
							<p>MemeFriend has no special relationship with or fiduciary duty to User. User acknowledges that MemeFriend has no control over, and no duty to take any action regarding: which Users gains access to the Site; which Content User accesses via the Site; what effects the Content may have on User; how User may interpret or use the Content; or what actions User may take as a result of having been exposed to the Content. Much of the Content of the Site is provided by and is the responsibility of the User or User who posted the Content. MemeFriend does not monitor the Content of the Site and takes no responsibility for such Content. User releases MemeFriend from all liability for User having acquired or not acquired Content through the Site. The Site may contain, or direct User to sites containing, information that some people may find offensive or inappropriate. MemeFriend makes no representations concerning any content contained in or accessed through the Site, and MemeFriend will not be responsible or liable for the accuracy, copyright compliance, legality or decency of material contained in or accessed through the Site.</p>
							<p>Although MemeFriend and the Site will make reasonable efforts to store and preserve the material residing on the Site, neither MemeFriend nor the Site is responsible or liable in any way for the failure to store, preserve or access User Content or other materials you transmit or archive on the Site. You are strongly urged to take measures to preserve copies of any data, material, content or information you post or upload on the Site. You are solely responsible for creating back-ups of your User Content.</p>
							<p>The Services, Content, Site and any Software are provided on an "as is" basis, without warranties of any kind, either express or implied, including, without limitation, implied warranties of merchantability, fitness for a particular purpose or non-infringement. MemeFriend makes no representations or warranties of any kind with respect to the Site, the Services, including any representation or warranty that the use of the Site or Services will (a) be timely, uninterrupted or error-free or operate in combination with any other hardware, software, system or data, (b) meet your requirements or expectations, (c) be free from errors or that defects will be corrected, (d) be free of viruses or other harmful components.</p>
							<p>To the fullest extent allowed by law, MemeFriend disclaims any liability or responsibility for the accuracy, reliability, availability, completeness, legality or operability of the material or services provided on this Site. By using this Site, you acknowledge that MemeFriend is not responsible or liable for any harm resulting from (1) use of the Site; (2) downloading information contained on the Site including but not limited to downloads of content posted by Users; (3) unauthorized disclosure of images, information or data that results from the upload, download or storage of content posted by Users; (4) the temporary or permanent inability to access or retrieve any User Content from the Site, including, without limitation, harm caused by viruses, worms, Trojan horses, or any similar contamination or destructive program.</p>
							<p>Some states do not allow limitations on how long an implied warranty lasts, so the above limitations may not apply to User.</p>
							<h2>7. Third party websites</h2>
							<p>Users of the Site may gain access from the Site to third party sites on the Internet through hypertext or other computer links on the Site. Third party sites are not within the supervision or control of MemeFriend or the Site. Unless explicitly otherwise provided, neither MemeFriend nor the Site make any representation or warranty whatsoever about any third party site that is linked to the Site, or endorse the products or services offered on such site. MemeFriend and the Site disclaim: (a) all responsibility and liability for content on third party websites and (b) any representations or warranties as to the security of any information (including, without limitation, credit card and other personal information) You might be requested to give any third party, and You hereby irrevocably waive any claim against the Site or MemeFriend with respect to such sites and third party content.</p>
							<h2>8. Registration and security</h2>
							<p>As a condition to using Services, User will be required to Login with Facebook. Failure to do so shall constitute a breach of this Agreement. User may not impersonate that another individual. MemeFriend reserves the right to refuse registration of, or cancel a MemeFriend URL in its discretion. User shall be responsible for maintaining the confidentiality of his login information. User is solely responsible for any use of or action taken under User’s Facebook login and accepts full responsibility for all activity conducted through User’s account and agrees to and hereby releases the Site and MemeFriend from any and all liability concerning such activity. User agrees to notify MemeFriend immediately of any actual or suspected loss, theft, or unauthorized use of User’s material. The Site will take reasonable security precautions when using the internet, telephone or other means to transport data or other communications, but expressly disclaims any and all liability for the accessing of any such data communications by unauthorized persons or entities.</p>
							<h2>9. Indemnity</h2>
							<p>User will indemnify and hold MemeFriend, its directors, officers and employees, harmless, including costs and attorneys' fees, from any claim or demand made by any third party due to or arising out of User’s access to the Site, use of the Services, the violation of this Agreement by User, or the infringement by User, or any third party using the User's account, of any intellectual property or other right of any person or entity.</p>
							<h2>10. Limitation of liability</h2>
							<p>In no event shall MemeFriend, its directors, officers, shareholders, employees or members be liable with respect to the Site or the Services for (a) any indirect, incidental, punitive, or consequential damages of any kind whatsoever; (b) damages for loss of use, profits, data, images, User Content or other intangibles; (c) damages for unauthorized use, non-performance of the Site, errors or omissions; or (d) damages related to downloading or posting Content. MemeFriend's and the Site's collective liability under this agreement shall be limited to three hundred United States Dollars. Some states do not allow the exclusion or limitation of incidental or consequential damages, so the above limitations and exclusions may not apply to User.</p>
							<h2>11. Termination</h2>
							<p>Either party may terminate the Services at any time by notifying the other party by any means. MemeFriend may also terminate or suspend any and all Services and access to the Site immediately, without prior notice or liability, if User breaches any of the terms or conditions of this Agreement. Upon termination of User's account, User’s right to use the Services, access the Site, and any Content will immediately cease. All provisions of this Agreement which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, and limitations of liability. Termination of Your access to and use of the Site and the Services shall not relieve User of any obligations arising or accruing prior to such termination or limit any liability which User otherwise may have to MemeFriend or the Site, including without limitation any indemnification obligations contained herein.
							<h2>12. Privacy</h2>
							<p>Please review our <a href="privacy.php"><u>Privacy Policy</u></a>, which governs the use of personal information on the Site and to which User agrees to be bound as a User of the Site.</p>
							<h2>13. Miscellaneous</h2>
							<p>This Agreement (including the <a href="privacy.php"><u>Privacy Policy</u></a>), as modified from time to time, constitutes the entire agreement between You, the Site and MemeFriend with respect to the subject matter hereof. This Agreement replaces all prior or contemporaneous understandings or agreements, written or oral, regarding the subject matter hereof. The failure of either party to exercise in any respect any right provided for herein shall not be deemed a waiver of any further rights hereunder. MemeFriend shall not be liable for any failure to perform its obligations hereunder where such failure results from any cause beyond MemeFriend’s reasonable control, including, without limitation, mechanical, electronic or communications failure or degradation. If any provision of this Agreement is found to be unenforceable or invalid, that provision shall be limited or eliminated to the minimum extent necessary so that this Agreement shall otherwise remain in full force and effect and enforceable. This Agreement is not assignable, transferable or sublicensable by User except with MemeFriend’s prior written consent. MemeFriend may assign this Agreement in whole or in part at any time without User’s consent. This Agreement shall be governed by and construed in accordance with the laws of the state of Delaware without regard to the conflict of laws provisions thereof. No agency, partnership, joint venture, or employment is created as a result of this Agreement and User does not have any authority of any kind to bind MemeFriend in any respect whatsoever. </p>
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