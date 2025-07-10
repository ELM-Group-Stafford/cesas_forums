@extends('layouts.app')

@section('content')
<section class="bg-plain">
    <div class="container">
        <h1 class="m-b-xxs">Privacy Policy</h1>

        <div class="content content-style-links">
            <!--Privacy Policy-->
        </div>
    </div>
</section>

<section class="bg-gradient-primary pad-t-m">
    <div class="container">
        {{--
		<!--<section class="card m-b-m">
            {{ $copy }}
        </section>-->
		--}}

        <section class="card m-b-m">
		<?php 
		if(empty($_GET)) {
			$url = "http://termsofuse.bmrn.com/?domain=www.achondroplasia.com&country=en-gb&cat=Privacy" ;
			$ch = curl_init();
			curl_setopt ($ch, CURLOPT_URL, $url);
			curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
			curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
			$contents = curl_exec($ch);
			if (curl_errno($ch)) {
				echo curl_error($ch);
				echo "\n<br />";
				$contents = '';
			} else {
				curl_close($ch);
			}
//$contents = "";
			if (!is_string($contents) || !strlen($contents)) {
				echo "Failed to get contents.";
				$contents = '';
			}
			$termContent =  "<div class='policys_container'>".$contents."</div>";
		} else {
			if($_REQUEST['country_abbri'] =='en-GB1' || $_REQUEST['country_abbri'] =='en-GB2') {
				$url = "http://termsofuse.bmrn.com/?domain=www.achondroplasia.com&country=en-gb&cat=Privacy" ;
			} else {
				$url = "http://termsofuse.bmrn.com/?domain=www.achondroplasia.com&country=".$_REQUEST['country_abbri'].'&cat=Privacy';
			}
			$ch = curl_init();
			curl_setopt ($ch, CURLOPT_URL, $url);
			curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
			curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
			$contents = curl_exec($ch);
			if (curl_errno($ch)) {
				echo curl_error($ch);
				echo "\n<br />";
				$contents = '';
			} else {
				curl_close($ch);
			}

			if (!is_string($contents) || !strlen($contents)) {
				echo "Failed to get contents.";
				$contents = '';
			}

			$termContent =  "<div class='policys_container'>".$contents."</div>";
		}
					
						if(empty($_POST['country_abbri'])) {
					?>
					<strong>See below for BioMarin's Privacy Policy. For other region/country versions, please select from the dropdown menu.</strong>
						<?php } else {?>
						<strong>See below for BioMarin's Privacy Policy. For other region/country versions, please select from the dropdown menu.</strong>
					<?php } ?>

           <form name="form1" id="termForm" method="get" action="">
								<select name="country_abbri" id="termPrivacyCountry1" style="max-width: 310px;">
									<option value="" selected="selected">Country Name</option>
                    <option value="au" <?php if(!empty($_REQUEST['country_abbri']) && $_REQUEST['country_abbri'] == 'au') { echo "selected='selected'";}?>>Australia (English)</option>
                    <option value="pt-BR" <?php if(!empty($_REQUEST['country_abbri']) && $_REQUEST['country_abbri'] == 'pt-BR') { echo "selected='selected'";}?>>Brazil (Português)</option>	<option value="cn-CN" <?php if(!empty($_REQUEST['country_abbri']) && $_REQUEST['country_abbri'] == 'cn-CN') { echo "selected='selected'";}?>>China (简体中文)</option>
                    <option value="de-DE" <?php if(!empty($_REQUEST['country_abbri']) && $_REQUEST['country_abbri'] == 'de-DE') { echo "selected='selected'";}?>>EU (Deutsch)</option>
                    <option value="en-GB" <?php if((!empty($_REQUEST['country_abbri']) && $_REQUEST['country_abbri'] == 'en-GB') || empty($_GET)) { echo "selected='selected'";}?>>EU (English)</option>
                    <option value="sp-SP" <?php if(!empty($_REQUEST['country_abbri']) && $_REQUEST['country_abbri'] == 'sp-SP') { echo "selected='selected'";}?>>EU (Espanol)</option>
                    <option value="fr-FR" <?php if(!empty($_REQUEST['country_abbri']) && $_REQUEST['country_abbri'] == 'fr-FR') { echo "selected='selected'";}?>>EU (Français)</option>
                    <option value="it-IT" <?php if(!empty($_REQUEST['country_abbri']) && $_REQUEST['country_abbri'] == 'it-IT') { echo "selected='selected'";}?>>EU (Italiano)</option>
                    <option value="nl-NL" <?php if(!empty($_REQUEST['country_abbri']) && $_REQUEST['country_abbri'] == 'nl-NL') { echo "selected='selected'";}?>>EU (Nederlands)</option>
                    <option value="hk-HK" <?php if(!empty($_REQUEST['country_abbri']) && $_REQUEST['country_abbri'] == 'hk-HK') { echo "selected='selected'";}?>>Hong Kong (English)</option><option value="ja-JP" <?php if(!empty($_REQUEST['country_abbri']) && $_REQUEST['country_abbri'] == 'ja-JP') { echo "selected='selected'";}?>>Japan (日本)</option>
                    <option value="es-ES" <?php if(!empty($_REQUEST['country_abbri']) && $_REQUEST['country_abbri'] == 'es-ES') { echo "selected='selected'";}?>>Latin America (Español)</option>
                    <option value="ru-RU" <?php if(!empty($_REQUEST['country_abbri']) && $_REQUEST['country_abbri'] == 'ru-RU') { echo "selected='selected'";}?>>Russia (Русский)</option>
                    <option value="tr-TR" <?php if(!empty($_REQUEST['country_abbri']) && $_REQUEST['country_abbri'] == 'tr-TR') { echo "selected='selected'";}?>>Turkey (Türkçe)</option>
                    <option value="tw-TW" <?php if(!empty($_REQUEST['country_abbri']) && $_REQUEST['country_abbri'] == 'tw-TW') { echo "selected='selected'";}?>>Taiwan (繁體中文)</option>
                    <option value="en-US" <?php if((!empty($_REQUEST['country_abbri']) && $_REQUEST['country_abbri'] == 'en-US'))  { echo "selected='selected'";}?>>US (English)</option>
								</select> 
						</form>
						
        <div class="">
          <?php echo $termContent; ?>
				</div> 						
			<!--			
            <h2 class="m-b-0 pad-b-0">Terms Of Use</h2>
            <p>Effective Date: October 1, 2018</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, laboriosam! Nobis tempore mollitia est placeat vero quam magnam nam ab quo. Iste, cumque exercitationem dignissimos ab saepe delectus nam voluptas.</p>

            <h2 class="m-b-0 pad-b-0">Heading Level 2</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, laboriosam! Nobis tempore mollitia est placeat vero quam magnam nam ab quo. Iste, cumque exercitationem dignissimos ab saepe delectus nam voluptas.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, laboriosam! Nobis tempore mollitia est placeat vero quam magnam nam ab quo. Iste, cumque exercitationem dignissimos ab saepe delectus nam voluptas.</p>-->
        </section>
    </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   <script>
jQuery(document).ready(function() {
	
	jQuery('#termPrivacyCountry1').change(function() {
		jQuery('#termForm').submit();
					
	});
})
</script> 	
</section>
@endsection
